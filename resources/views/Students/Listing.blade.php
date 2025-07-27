<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Students</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.min.js" integrity="sha384-7qAoOXltbVP82dhxHAUje59V5r2YsVfBafyUDxEdApLPmcdhBPg1DKg1ERo0BZlK" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="{{ asset('css/student.css') }}">
    </head>
    <body>
        <div class="banner">
            <img src="{{ asset('imagenes/logo.png') }}" alt="Institution Logo">
            <h1 class="banner-text">Students</h1>
        </div>

        <div class="container"> 
            <div align="right">
                <a href="#" class="btn btn-success">Add</a>
            </div>
            
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Program</th>
                        <th scope="col">Neighborhood</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $st)
                        <tr>
                            <th scope="row">{{$st->id}}</th>
                            <td>{{$st->student_name}}</td>
                            <td>{{$st->student_gender}}</td>
                            <td>{{$st->student_age}}</td>
                            <td>{{$st->student_email}}</td>
                            <td>{{$st->student_phone}}</td>
                            <td>{{$st->program}}</td>
                            <td>{{$st->neighborhood}}</td>
                            <td>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <br>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>