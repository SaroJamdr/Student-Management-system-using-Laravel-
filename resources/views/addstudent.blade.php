@include('include.sidebar')

<h2 class="text-center">Add Student</h2>

<div class="cotainer">
  <div class="row">
    <div class="col-5 mx-auto card p-4">

      {{Form::open(['route' => 'std.store','method'=>'Post','enctype'=>'multipart/form-data']) }} 

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" name="name" value="{{old('name')}}" class="form-control" id="exampleInputEmail1">

          @error('name')
          <div style="color: red">{{$message}}</div>  
          @enderror

        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">E-mail</label>
          <input type="email" name="email" value="{{old('email')}}" class="form-control" id="exampleInputPassword1">

          @error('email')
          <div style="color: red">{{$message}}</div>  
          @enderror

        </div>

        <div class="mb-3">
          <label class="form-label" for="exampleCheck1">Address</label>
          <input type="text" name="address" class="form-control" id="exampleCheck1">
        </div>

        <div class="mb-3">
          <label class="form-label" for="exampleCheck1">Phone</label>
          <input type="number" name="phone" class="form-control" id="exampleCheck1">
        </div>

        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Gender:</label> <br>
          <input type="radio" name="gender" value="male" id="exampleInputPassword1">male
          <input type="radio" name="gender" value="female" id="exampleInputPassword1">female
          <input type="radio" name="gender" value="others" id="exampleInputPassword1">others
        </div>

        <div class="mb-3">
          <label class="form-label" for="disabledTextInput">Upload Image</label>
          <input type="file" name="image" value="{{old('image')}}" class="form-control" id="disabledTextInput">

          @error('image')
          <div style="color: red">{{$message}}</div>  
          @enderror

        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
        {{Form::close() }}

    </div>
  </div>
</div>

@include('include.footer')