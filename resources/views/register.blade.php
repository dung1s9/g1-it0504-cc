<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('https://www.shutterstock.com/image-illustration/music-note-space-stars-abstrtact-260nw-371360608.jpg');
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .register-container {
            width: 500px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            text-align: center;
            
        }

        h1 {
            margin-top: 0;
            font-size: 32px;
        }

        form {
            display: inline-block;
            text-align: left;
        }

      

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: 1px solid #000000;
        }

        button {
            background-color: #000000;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none;
        }

        button:hover {
            background-color: #3e8e41;
        }
        a {
            background-color: #000000;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none; 
        }
        a:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div style="text-align: center; margin-bottom: 20px; text-decoration: none ,color:aliceblue">
        <a href="{{asset('demo')}}" class="home">Home</a>
    </div>
    <div class="register-container">
        <h1>Register Account</h1>
        <form method="POST">
            @csrf
            <input type="text" name="username" placeholder="username"> 
            <input type="text" name="email" placeholder="email"> 
            <input type="text" name="role" placeholder="Role">
            <input type="password" name="password" placeholder="password">
            <button type="submit">Register</button> 
            <button> <a href="{{asset('/user/login')}}" class="home-btn">Login</a></button>
         
    </div>
</body>
</html>
    
