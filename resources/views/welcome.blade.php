    @include('include.sidebar')


    <h4 class="text-center">Student List</h4>
    <hr>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">S.N</th>
          <th scope="col">Name</th>
          <th scope="col">Image</th>
          <th scope="col">Email</th>
          <th scope="col">Phone</th>
          <th scope="col">Address</th>
          <th scope="col">Gender</th>
          <th scope="col">Action</th>
        </tr>
      </thead>w


      <tbody>

        <?php
        $i = 1;
        ?>

        @foreach ($students as $std)
      
        
        <tr>
          <td scope="row">{{$i++}}</td>
          <td>{{$std->name}}</td>
          <td>
            <img src="{{asset('public/images/'.$std->image)}}" height="50px" width="50px" alt="">
          </td>
          <td>{{$std->email}}</td>
          <td>{{$std->phone}}</td>
          <td>{{$std->address}}</td>
          <td>{{$std->gender}}</td>

          <td>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$std->id}}">
              <i class="bi bi-pencil-square"></i>
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal-{{$std->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel    ">Edit Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  
                  <div class="modal-body">
                    {{Form::open(['route' => ['std.update', $std->id],'method'=>'PATCH','enctype'=>'multipart/form-data'])}} 

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="text" name="name" value="{{$std->name}}" class="form-control" id="exampleInputEmail1">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">E-mail</label>
                        <input type="email" name="email" value="{{$std->email}}" class="form-control" id="exampleInputPassword1">
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="exampleCheck1">Address</label>
                        <input type="text" name="address" value="{{$std->address}}" class="form-control" id="exampleCheck1">
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="exampleCheck1">Phone</label>
                        <input type="number" name="phone" value="{{$std->phone}}" class="form-control" id="exampleCheck1">
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Gender:</label> <br>

                        @if($std->gender="male")
                        <input type="radio" name="gender" checked value="male" id="exampleInputPassword1">male

                        <input type="radio" name="gender" value="female" id="exampleInputPassword1">female

                        <input type="radio" name="gender" value="others" id="exampleInputPassword1">others


                        @elseif($std->gender="female")
                        <input type="radio" name="gender" value="male" id="exampleInputPassword1">male

                        <input type="radio" name="gender" checked value="female" id="exampleInputPassword1">female

                        <input type="radio" name="gender" value="others" id="exampleInputPassword1">others


                        @else
                        <input type="radio" name="gender" value="male" id="exampleInputPassword1">male

                        <input type="radio" name="gender" value="female" id="exampleInputPassword1">female

                        <input type="radio" name="gender" checked value="others" id="exampleInputPassword1">others
                        @endif
                      </div>

                      <div class="mb-3">
                        <input type="hidden" name="oldimage" value="{{$std->image}}">
                        <img src="{{asset('images/'.$std->image)}}" height="50px" alt="">
                      </div>

                      <div class="mb-3">
                        <label class="form-label" for="disabledTextInput">Upload New Image</label>
                        <input type="file" name="image" value="$std->image" class="form-control" id="disabledTextInput">
                      </div>

                      <button class="btn btn-primary btn-sm">Submit</button>
                    {{Form::close() }}

                  </div>
                 
                </div>
              </div>
            </div>
            <a href="{{route('std.delete', $std->id)}}" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></a>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>

    @include('include.footer')