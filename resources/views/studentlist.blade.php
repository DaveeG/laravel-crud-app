<!DOCTYPE html>
<html>
    <head>
        <title>Student List</title>

         <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    </head>


    <style>
        div.container{
            text-align: center;
        }
        div.row{

        }
        div.col{

        }
        table.table{
            text-align: center;
            width: 70%;
            margin-left: 15%;
            margin-right: 15%;
        }
    </style>

    <body>
        <div class="container" style="margin-top:20px; margin-left:auto; marigin-right:auto; ">
            <div class="row">
                <div class="col-md-12">
                    <h2>Student List</h2>
                    @if (Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                @endif
                    <div style="margin-right: 20px; float:right;">
                        <a href="{{url('addstudent')}}" class="btn btn-primary">+Add</a>
                    </div>
                    <table class="table">
                        <thead><tr>
                            <th>Id</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Course</th>
                            <th>Fees</th>
                            <th>Action</th>
                        </tr></thead>
                        <tbody>
                            @php
                                $i=1;
                            @endphp
                            @foreach ($data as $stud)
                            <tr>
                                <td>{{$i++}}</td>
                                <td>{{$stud->firstname}}</td>
                                <td>{{$stud->lastname}}</td>
                                <td>{{$stud->course}}</td>
                                <td>{{$stud->fees}}</td>
                                <td><a href="{{url('editstudent/'.$stud->id)}}" class="btn btn-primary">Edit</a> | <a href="{{url('deletestudent/'.$stud->id)}}" class="btn btn-danger" style="background-color:rgb(223, 17, 17);">Delete</a></td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </body>
</html>
