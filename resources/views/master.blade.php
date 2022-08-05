<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>

<body>
    {{ View::make('header') }}
    @yield('content')
    {{ View::make('footer') }}
    <style>
        .custom-login {
            height: 500px;
            padding: 100px;
            margin-left: 28rem;
        }

        img.slider-img {
            height: 600px !important;
            width: 100%;
        }

        .custom-product {
            height: 600px;
        }

        .slider-text {
            background-color: #35443585 !important;
        }

        .tranding-img {
            height: 100px;
        }

        .tranding-item {
            float: left;
            width: 20%;
            padding: 5rem;
        }

        .tranding-wraper {
            margin-top: 2rem;
        }

        .detaile-img {
            height: 200px;
        }

        b {
            color: gray;
        }

        .trending-image {
            height: 100px;
        }

        .cart-list-devider {
            border-bottom: 1px solid #ccc;
            margin-bottom: 20px;
            padding-bottom: 20px
        }
        .change{
            margin-left: 20rem;
        }
        .my-footer{
            background-color: black;
        }
        .search-box{
          width: 500px !important;
        }
        nav{
            background-color: #215dbe;
        }
        #my-nav{
            color: whitesmoke
        }
    </style>
</body>

</html>
