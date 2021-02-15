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
        
        .form-group {
            margin-bottom: 10px;
        }
        
        .form-control {
            width: 50%;
        }
        
        .container h2 {
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-dark bg-dark navbar-left">
        <a class="btn btn-primary" id="FirstBtn" href="/accounts" role="button">Accounts</a>
        <a class="btn btn-primary" href="/" role="button">Add</a> </nav>
    <div class="container">
        <h2>Create Account</h2>
        <form action="/" method="post">
            @csrf
            <div class="form-group">
                <label for="FN">First Name</label>
                <input type="text" class="form-control" id="FN" name="FN">
            </div>
            <div class="form-group">
                <label for="LN">Last Name</label>
                <input type="text" class="form-control" id="LN" name="LN">
            </div>
            <div class="form-group">
                <label for="AN">Account Number</label>
                <input type="text" class="form-control" id="AN" name="AN">
            </div>
            <div class="form-group">
                <label for="Ag">Agency</label>
                <input type="text" class="form-control" id="Ag" name="Ag">
            </div>
            <div class="form-group">
                <label for="cin">Cin</label>
                <input type="text" class="form-control" id="cin" name="cin">
            </div>
            <div class="form-group">
                <label for="Am">Amount</label>
                <input type="text" class="form-control" id="Am" name="Am">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>

</html>