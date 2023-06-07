<!DOCTYPE html>

<html>

<head>

    <title>Manage music</title>

    <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css')}}" rel="stylesheet">
    <style>
        
        img {
            margin-top: 5%;
           
            align-items: center;
            border-radius: 100%;
            margin-bottom: 50px;
            animation: app-logo-spin infinite 20s linear
        }

        @keyframes app-logo-spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }
        
        body{
            background-color:black;
            color:black;
            background-image: url('https://images.theconversation.com/files/433499/original/file-20211123-17-199wbff.jpg?ixlib=rb-1.1.0&rect=0%2C0%2C5991%2C3395&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip');

        }
        
        table {
            background-color:white;
        }

        strong{
            color: aliceblue;
        }
        h2{
            color: aliceblue;
        }
    </style>
</head>

<body>

    <div class="container">

        @yield('content')

    </div>

</body>

</html>
