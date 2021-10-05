<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .pagination{
            justify-content: center;
        }
        #searchbar{
            width: 200px;
            float: right;
        }
        #searchBtn{
            float: right;
        }
        #searchBarSelect{
            float: right;
            width:100px;
        }
        #adminChar{
            text-align: center;
        }
        #deleteBtn{
            margin-top: -65px;
            margin-left: 62px;
        }
    </style>
</head>
<body>
    <div class="container">
        <br>
        <br>
        @yield('content')
    </div>
</body>
</html>