<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url('https://images.theconversation.com/files/433499/original/file-20211123-17-199wbff.jpg?ixlib=rb-1.1.0&rect=0%2C0%2C5991%2C3395&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip');
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .login-container {
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
        }

        p {
            display: inline-block;
            color: rgb(59, 59, 169);
            font-size: 15px;
            padding-left:30%; 
            padding-right: 5px;
        }

        button {
            display: inline-block;
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
    <div class="login-container">
        <h1>Login</h1>
        <form role="form"action="" method="POST">
            @csrf
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <button type="submit" >Login</button>          
            <p > Don't have account</p><a href="{{asset('/user/register')}}" class="home-btn" >Register</a>
        </form>
    </div>
</body>
</html>