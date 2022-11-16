<div class="bg-white shadow-sm p-3 position-relative min-vh-100 " style="z-index: 1">
    <div class="p-6">
        <h4 class="fw-bold ">Salero</h4>
        <span class="small">Restaurant Admin</span>
    </div>

    <div class="">
        <div class="list-group fs-base">
            <a href="{{route('fax.create')}}" class="list-group-item">
                <i class=" me-2 bi bi-house"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{route('noti')}}" class="list-group-item">
                <i class=" me-2 bi bi-journal-bookmark-fill"></i>
                <span>noti</span>
            </a>
            <a href="{{route('user.index')}}" class="list-group-item">
                <i class=" me-2 bi bi-journal-arrow-up"></i>
                <span>users</span>
            </a>
            <a href="{{route('user.create')}}" class="list-group-item">
                <i class=" me-2 bi bi-journal-arrow-up"></i>
                <span>create users</span>
            </a>

            <div class="accordion" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button fs-base" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            <i class=" me-2 bi bi-file-richtext"></i>
                            Menus
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <div class="list-group ">
                                <a href="" class="list-group-item">
                                    Lists
                                </a>
                                <a href="" class="list-group-item">
                                    Create
                                </a>
                                <a href="" class="list-group-item">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button fs-base collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            <i class=" me-2 bi bi-file-richtext"></i>
                            Chefs
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <div class="list-group ">
                                <a href="" class="list-group-item">
                                    Lists
                                </a>
                                <a href="" class="list-group-item">
                                    Create
                                </a>
                                <a href="" class="list-group-item">
                                    Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="" class="list-group-item">
                <i class=" me-2 bi bi-people"></i>
               <span> Customer</span>
            </a>

        </div>
    </div>

</div>


