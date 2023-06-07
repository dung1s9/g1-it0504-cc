<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Table</title>
    <style>
        table {
            border: 1px solid #000;
            border-collapse: collapse;
            width: 100%;
            background-color: #62bfa8;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
            color: #060505;
        }

        th {
            background-color: #7cc4bc;
        }

        .edit,
        .delete ,
        .home {
            color: #000000;
            text-decoration: none;
            margin-right: 5px;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .edit {
            background-color: #e4dcc3;
        }

        .delete {
            background-color: #e4dcc3;
        }

        .home {
            background-color: #7fe095;
        }
    </style>
</head>

<body>
    <div style="text-align: center; margin-bottom: 20px;">
        <a href="{{asset('demo')}}" class="home">Home</a>
    </div>
    <table id="dataTable">
        <thead>
            <tr>
                <th>STT</th>
                <th>UserName</th>
                <th>Email</th>
                <th>Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $key => $value)
            <tr>
                <td>{{ $key+1 }}</td>
                <td>{{ $value->username }}</td>
                <td>{{ $value->email}}</td>
                <td>
                    <a href="{{asset('user/edit/'.$value->id)}}" class="edit">Edit</a>
                    <a href="{{asset('user/delete/'.$value->id)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="delete">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>