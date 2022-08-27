<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <title>Edit Student</title>
</head>
<body>
    <div class="container" style="margin-top:20px; margin-left:auto; marigin-right:auto; ">
        <div class="row">
            <div class="col-md-12">
                @if (Session::has('success'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('success')}}
                </div>
                @endif
                <h2>Add Student</h2>
                <form method="POST" action="{{url('updatestudent')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}"

                    <div class="md-3">
                        <label class="form-lebel" >First Name</label>
                        <input type="text" class="form-control" name="firstname" placeholder="Enter First Name" value="{{$data->firstname}}">

                        @error('firstname')
                        <div class="alert alert-danger" role="alert" >
                            {{$message}}
                        </div>

                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel" >Last Name</label>
                        <input type="text" class="form-control" name="lastname" placeholder="Enter Last Name" value="{{$data->lastname}}">

                        @error('lastname')
                        <div class="alert alert-danger role="alert">
                            {{$message}}
                        </div>

                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel" >Course</label>
                        <input type="text" class="form-control" name="course" placeholder="Enter Course" value="{{$data->course}}">

                        @error('course')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>

                        @enderror
                    </div>

                    <div class="md-3">
                        <label class="form-lebel" >Fees</label>
                        <input type="text" class="form-control" name="fees" placeholder="Enter Fees" value="{{$data->fees}}">

                        @error('fees')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>

                        @enderror
                    </div>


                    <div class="md-3">
                        <label class="form-lebel" >Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password">

                        @error('password')
                        <div class="alert alert-danger" role="alert">
                            {{$message}}
                        </div>

                        @enderror
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Save</button>

                    <a href="{{url('studentlist')}}" class="btn btn-danger" style="background-color:rgb(223, 17, 17);">Back</a>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
