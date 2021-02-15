<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pre-Projet</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <style>
        .navbar {
            display: block;
            padding: 10px 0;
        }
        
        #FirstBtn {
            margin-right: 10px;
            margin-left: 40px;
        }
        
        .btn-primary {
            background-color: #6c02d8;
            border-color: #6c02d8;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-left">
        <a class="btn btn-primary" id="FirstBtn" href="/accounts" role="button">Accounts</a>
        <a class="btn btn-primary" href="/" role="button">Add</a> </nav>
    <div class="container-fluid">
        <h2>Accounts</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">CIN</th>
                    <th scope="col">Account Number</th>
                    <th scope="col">Agency</th>
                    <th scope="col">Amount</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->Fname}}</th>
                    <td>{{$user->Lname}}</td>
                    <td>{{$user->CIN}}</td>
                    <td>{{$user->AcountN}}</td>
                    <td>{{$user->Agency}}</td>
                    <td>{{$user->Amount}}</td>
                    <td>{{$user->Amount}}</td>
                    <td><a href="/delete/{{$user->id}}"><button type="button" class="btn btn-danger"> Delete</button></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>