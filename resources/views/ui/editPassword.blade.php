<!DOCTYPE html>
<html lang="en">
<head>
    <style>
       
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-info">
    <div class="containter">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <h3 style="color:rgb(236, 83, 12)">change password for   {{$user->name}}</h3>
                <form class="form-control" action="{{route('change.password')}}" method="POST">
                    @csrf
                    <input type="text" class="form-control" name="oldPassword" placeholder="Enter old password" id="">
                    <input type="text" class="form-control" name="newPassword" placeholder="Enter new password" id="">
                    <input type="text" class="form-control" name="confirmPassword"  placeholder="Confirm new password" id="">
                    <button class="btn btn-success">Change Password</button>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>