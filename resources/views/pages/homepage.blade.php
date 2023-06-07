@extends('client.layout.master')
<body>
@section('content')
<div class="container bg-dark text-light py-5" style="background-image: url('https://images.theconversation.com/files/433499/original/file-20211123-17-199wbff.jpg?ixlib=rb-1.1.0&rect=0%2C0%2C5991%2C3395&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip');
background-size: cover;
font-family: Arial, sans-serif;">
    <h2 class="text-center mt-4 mb-5 fire-text">New Music best</h2>
    <style>

                .fire-text {
        font-size: 5rem;
        -webkit-text-fill-color: transparent;
        -webkit-text-stroke: 1px white;
        color: transparent;
        text-shadow: 0 0 10px rgb(32, 3, 3), 0 0 20px rgb(117, 17, 17), 0 0 30px rgb(142, 17, 17), 0 0 40px rgb(221, 121, 121), 0 0 50px rgb(130, 72, 72), 0 0 60px rgb(55, 25, 25), 0 0 70px rgb(117, 16, 16);
        animation: glow 1s ease-in-out infinite alternate;
        }

        @keyframes glow {
        from {
            text-shadow: 0 0 10px rgb(62, 37, 37), 0 0 20px rgb(164, 97, 97), 0 0 30px rgb(210, 139, 139), 0 0 40px rgb(74, 7, 7), 0 0 50px rgb(155, 59, 59), 0 0 60px rgb(146, 65, 65), 0 0 70px rgb(77, 35, 35);
        }
        to {
            text-shadow: 0 0 20px rgb(94, 6, 6), 0 0 30px rgb(171, 42, 42), 0 0 40px rgb(237, 22, 22), 0 0 50px rgb(25, 2, 2), 0 0 60px rgb(137, 65, 65), 0 0 70px rgb(182, 65, 65), 0 0 80px rgb(84, 23, 23);
        }
        }

    </style>
    
    @if(isset($musics) && count($musics) > 0)
        <div class="row row-cols-1 row-cols-md-3 g-4" >
            @foreach ($musics as $music)
                <div class="col my-4">
                    <div class="card h-100 bg-light text-dark">
                        <img src="{{ asset('image/music/' . $music->image) }}" class="card-img-top img-list" alt="..." style="width: 100%;
                        height: 250px;
                        object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $music->name }}</h5>
                            <p class="card-text">{{ $music->price }}</p>
                            <a href="{{ route('pages.detail', $music->id) }}" class="btn btn-primary">Details</a>
                            <a href="{{ route('pages.detail', $music->id) }}" class="btn btn-primary">Add to Cart</a>
                        </div>
                        <audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" class="w-100">
                            <source src="{{ asset('audio/music/'.$music->audio) }}" type="audio/mp3">
                          </audio>
                          <script type="text/javascript">
                            function myAudio(event){
                              if(event.currentTime > 10){
                                event.currentTime = 0;
                                event.pause();
                                alert("Bạn phải trả phí để nghe cả bài");
                              }
                            }
                          </script>
                        
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center">No music found.</p>
    @endif
</div>
@endsection

<style>
    audio {
        width: 100%;
    } 
   
</style>

    
</body>
