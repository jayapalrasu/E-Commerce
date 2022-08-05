<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <div style="margin-top: 10rem">
        <div class="container ">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <h1><b style="color: whitesmoke;">Register</b></h1>
                    <form action="register" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User Name :</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="name">
                        </div>
                        <p>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address :</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="email">
                        </div>
                        <p>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password :</label>
                            <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                                placeholder="password">
                        </div><br>
                        <p>Already have a Account?<a href="/login">Login</a></p>
                            <button type="submit" class="btn btn-primary">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <style>
        body{
            background-image: url("https://media.gettyimages.com/photos/businessman-holding-a-phone-with-a-shopping-icon-online-shopping-picture-id961335672?b=1&k=20&m=961335672&s=170667a&w=0&h=R1oCcxcB_CUyIk9ROURENHaWsCztlC1H_5liU_lGMB8=");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        label,p{
            color: whitesmoke;
        }
    </style>
</body>

</html>
