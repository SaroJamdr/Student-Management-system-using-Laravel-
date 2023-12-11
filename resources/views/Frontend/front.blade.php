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

    <h1 class="text-center">Student Info</h1>
    @if(!empty($students))
    <p class="text-center">Total Students: {{$students->count()}}</p>
    @endif
  <hr>
  
  <div class="container">
    <div class="row">
        @foreach ($students as $std)
        <div class="col-3">
          <a href="{{route('std.details',$std->id)}}">
            <div class="card">
              <img src="{{asset('public/images/'.$std->image)}}" height="200px" class="card-img-top" alt="">
              <div class="card-body  text-center">
                <h4 class="card-title">{{$std->name}}</h4>
                <a href="{{route('std.details',$std->id)}}" class="btn btn-link"  role="button">Know More...</a>

              </div>
            </div>
            </a>
        </div>    
        @endforeach
    </div>
  </div>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>