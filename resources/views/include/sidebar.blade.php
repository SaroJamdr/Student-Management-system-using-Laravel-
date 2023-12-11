<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hey Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg  text-bg-info">
            <div class="container-fluid" >
                <a class="navbar-brand" href="#">Hey Students</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
 
 <div class="container-fluid">
     <div class="row">
         <div class="col-2" style="height:100vh; background:ghostwhite ">
             <h6 class="p-2 text-center">Welcome Admin</h6>
             <hr>
             <div class="d-grid gap-2">
                 <a href="{{route('list.student')}}" class="btn btn-light rounded-0">Student List</a>
             </div>
             <div class="d-grid gap-2">
                 <a href="{{route('add.student')}}" class="btn btn-light rounded-0">Add Student</a>
             </div>
             <div class="d-grid gap-2">
                 <a href="" class="btn btn-light rounded-0">Light</a>
             </div>
             <div class="d-grid gap-2">
                 <a href="" class="btn btn-light rounded-0">Light</a>
             </div>
             <div class="d-grid gap-2">
                 <a href="" class="btn btn-light rounded-0">Light</a>
             </div>
         </div>
     <div class="col-10">


    @include('message')