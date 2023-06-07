<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('music.layout')

@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left">

<h2>Music Management</h2>

</div><br>
<br>

<div class="pull-right">
<a class="btn btn-success" href="{{ route('music.create') }}"> Create New song</a>
</div>
   

<div class="pull-left" >

<a class="btn btn-success" href="{{ route('category.index') }}"> Management Category</a>

</div>

</div>

</div>

@if ($message = Session::get('success'))

<div class="alert alert-success">

<p>{{ $message }}</p>

</div>

@endif

<table class="table table-bordered">

<tr>

    <th>No</th>
    <th>Name</th>
    <th>Lyrics</th>
    <th>Singer</th>
    <th>Category</th>
    <th>Price</th>
    <th>Image</th>
    <th>Audio</th>
    <th>Details</th>
    <th >Action</th>



</tr>

@foreach ($musics as $key => $music)
<tr>
    <td>{{ $key + 1 }}</td>
    <td>{{ $music->name }}</td>
    <td>{{ $music->lyrics }}</td>
    <td>{{ $music->singer }}</td>
    <td>{{ $music->category->name }}</td>
    <td>{{ $music->price }}</td>
    <td><img src="{{ asset('image/music/' . $music->image) }}" alt="" border=3 height=150 width=150>
    </td>
    <td>
      <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
        <source src="{{ asset('audio/music/'.$music->audio) }}" type="audio/mp3">
        </audio>
        <script type="text/javascript">
            function myAudio(event){
                if(event.currentTime>10){
                    event.currentTime=0;
                    event.pause();
                    alert("Bạn phải trả phí để nghe cả bài")
                }
            }
        </script>
    </td>
    

    <td>{{ $music->description }}</td>

    <td>

        <form action="{{ route('music.destroy', $music->id) }}" method="POST">
            <a style="background-color: black;"  class="btn btn-primary" href="{{ route('music.show', $music->id) }}">Show</a>
            <a style="background-color: black;"  class="btn btn-primary" href="{{ route('music.edit', $music->id) }}">Edit</a>
            <a style="background-color: black;"  class="btn btn-primary" href="{{ route('music.destroy', $music->id) }}">Delete</a>
        </form>
    </td>
</tr>
@endforeach

</table>

@endsection
</body>
</html>