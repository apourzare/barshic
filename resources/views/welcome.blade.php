<!DOCTYPE html>
<html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/admin.css')}}">
    </head>
    <body>
        <div class="container-fluid d-flex ">
            <div id="right-menu" class="col-md-2 pt-5">
                <div class="w-100 d-flex justify-content-start pr-5">
                    <img src="https://sooratech.ir/static/media/logo.ba30eed3.svg" alt="">
                    <h1 class="mr-2"><a href="#">آریپو</a></h1>
                </div>
                <div class="w-100 mt-5 menu">
                    <ul class="nav flex-column ">
                        <li class="nav-item">
                            <a class="nav-link text-right active d-flex align-items-center" href="#"><i class="material-icons">bookmark_border</i><span>صفحه نخست</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right d-flex align-items-center" href="#"><i class="material-icons">bookmark_border</i><span>صفحه نخست</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right d-flex align-items-center" href="#"><i class="material-icons">bookmark_border</i><span>صفحه نخست</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right d-flex align-items-center" href="#"><i class="material-icons">bookmark_border</i><span>صفحه نخست</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right d-flex align-items-center" href="#"><i class="material-icons">bookmark_border</i><span>صفحه نخست</span></a>
                        </li>
                    </ul>
                </div>
                <div class="w-100 mt-5 menu">
                    <ul class="nav flex-column ">
                        <li class="nav-item">
                            <a class="nav-link text-right active d-flex align-items-center" href="#"><i class="material-icons">bookmark_border</i><span>صفحه نخست</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right d-flex align-items-center" href="#"><i class="material-icons">bookmark_border</i><span>صفحه نخست</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-right d-flex align-items-center" href="#"><i class="material-icons">bookmark_border</i><span>صفحه نخست</span></a>
                        </li>
                    </ul>
                </div>
                <div class="w-100 contact">
                    <a href="" class="btn btn-primary px-5">
                        <h3 class="">تماس با ما</h3>
                        <h5 class="">منتظر تماسم</h5>
                    </a>
                </div>
            </div>

            <div id="main" class="col-md-8 d-flex flex-column mt-5">
                <h2 class="text-right"> مجموعه طراحی وب و برنامه نویسی</h2>
                <div class="top-navbar">
                    <nav class="nav">
                        <a class="nav-link active" href="#">گزارش ها</a>
                        <a class="nav-link" href="#">دوره ها</a>
                        <a class="nav-link" href="#">آخرین ویدئو ها</a>
                    </nav>
                </div>
                <div id="search" class="">
                    <form class="w-100 form-inline ">
                        <input class="col form-control bg-info mr-sm-2" type="search" placeholder="جستجو" aria-label="Search">
                        <button class="btn my-2 my-sm-0" type="submit">
                                <i class="material-icons">
                                search
                                </i>
                        </button>
                    </form>
                </div>
                <div id="user" class="d-flex flex-wrap mt-5">
                    <div class="col-md-2 d-flex flex-column align-items-center shadow  pt-3 mb-3">
                            <i class="material-icons mb-2">
                                redeem
                            </i>
                            <span>امین</span>
                            <div class="w-100 d-flex justify-content-end ">
                                <span class="badge badge-warning p-3">7</span>

                            </div>
                    </div>
                    <div class="col-md-2 d-flex flex-column align-items-center pt-3 mb-3">
                            <i class="material-icons mb-2">
                                redeem
                            </i>
                            <span>امین</span>
                    </div>
                    <div class="col-md-2 d-flex flex-column align-items-center pt-3 mb-3">
                            <i class="material-icons mb-2">
                                redeem
                            </i>
                            <span>امین</span>
                    </div>
                    <div class="col-md-2 d-flex flex-column align-items-center pt-3 mb-3">
                            <i class="material-icons mb-2">
                                redeem
                            </i>
                            <span>امین</span>
                    </div>
                    <div class="col-md-2 d-flex flex-column align-items-center pt-3 mb-3">
                            <i class="material-icons mb-2">
                                redeem
                            </i>
                            <span>امین</span>
                    </div>
                    <div class="col-md-2 d-flex flex-column align-items-center pt-3 mb-3">
                            <i class="material-icons mb-2">
                                redeem
                            </i>
                            <span>امین</span>
                    </div>
                    <div class="col-md-2 d-flex flex-column align-items-center pt-3 mb-3">
                            <i class="material-icons mb-2">
                                redeem
                            </i>
                            <span>امین</span>
                    </div>
                    <div class="col-md-2 d-flex flex-column align-items-center mb-3">
                            <i class="material-icons mb-2">
                                redeem
                            </i>
                            <span>امین</span>
                    </div>
                    <div class="col-md-2 d-flex flex-column align-items-center mb-3">
                            <i class="material-icons mb-2">
                                redeem
                            </i>
                            <span>امین</span>
                    </div>
                    
                </div>

            </div>
        </div>
    </body>
</html>
