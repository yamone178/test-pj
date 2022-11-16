<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFaxRequest;
use App\Http\Requests\UpdateFaxRequest;
use App\Models\Fax;
use App\Models\File;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fax.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFaxRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFaxRequest $request)
    {


        $fax= new Fax();
        $fax->from = $request->from;
        $fax->to = $request->to;
        $fax->user_id = Auth::id();
        $fax->save();

//        $fax->data = json_encode($request->attachFiles);
//
//        foreach ($request->file('attachFiles') as $attachFile){
//            $newName = uniqid()."_file.".$attachFile->extension();
//            $attachFile->storeAs("public/",$newName);
//
//        }
//        $fax->save();
//        return $fax;



            foreach ($request->attachFiles as $key=>$uploadFile){
                $newName = uniqid()."_file.".$uploadFile->extension();
                $uploadFile->storeAs("public/",$newName);

                $saveFiles[$key] = [
                    'name' => $newName,
                    'fax_id' => $fax->id,
                    'user_id'=> Auth::id(),
                    'created_at'=> $fax->created_at,
                    'updated_at'=> $fax->updated_at
                ];



            }

           return File::insert($saveFiles);






    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fax  $fax
     * @return \Illuminate\Http\Response
     */
    public function show(Fax $fax)
    {
        return view('fax.show',$fax);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fax  $fax
     * @return \Illuminate\Http\Response
     */
    public function edit(Fax $fax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFaxRequest  $request
     * @param  \App\Models\Fax  $fax
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFaxRequest $request, Fax $fax)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fax  $fax
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fax $fax)
    {
        //
    }

    public function noti(){

        $userPhone = Auth::user()->phone;

        $notis = Fax::where('to',$userPhone )->latest('id')->get();
//        $arr = [];
//        foreach ($notis as $noti){
//            $attach = File::where('fax_id',$noti->id)->get();
////            array_push($arr,$attach);
//
//        }



        return view('fax.inbox',compact('notis'));
    }
}
