@extends('product.layout')

@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left">

<div id="wrapper">
        <div id="header">
            <a href="" class="logo">
                <img src="https://dynamic.brandcrowd.com/asset/logo/85644ff8-6fd4-4f74-8d91-622ae9d6e9e4/logo-search-grid-1x?logoTemplateVersion=1&v=637904374788230000" alt="dung" border=3 height=50 width=50 class="img1">
            </a>
            <div id="menu">
                <div class="item">
                    <a href="{{ route('products.index') }}">HOME</a>
                </div>
                <div class="item">
                    <a href="{{ route('category.index') }}">Management Category</a>
                </div>
                <div class="item">
                    <a href="{{ route('products.create') }}">Create New Product</a>
                </div>
            </div>
            <div id="actions">
                <div class="item">
                    <img src="https://cdn-icons-png.flaticon.com/128/2609/2609282.png" alt="" height=30 width=30>
                </div>
                <div class="item">
                    <img src="https://cdn-icons-png.flaticon.com/128/6998/6998768.png" alt="" height=30 width=30>
                </div>
            </div>
        </div>
        <div id="banner">
            <div class="box-left">
                <h2>
                    <span>MUSIC EDM</span>
                </h2>
                <p> <strong>This music does not listen, what music do you listen to? </strong> </p>
                <button>BUY</button>
            </div>
            <div class="box-right">
                <img src="https://cdn.pixabay.com/photo/2022/12/01/04/44/girl-7628309_960_720.jpg" alt="">
                <img src="https://cdn.pixabay.com/photo/2022/12/01/04/44/anime-wallpaper-7628310__340.jpg" alt="">
                <img src="https://cdn.pixabay.com/photo/2022/12/01/04/34/sunset-7628289__340.jpg" alt="">
            </div>
            <div class="to-bottom">
                <a href="">
                    <img src="" alt="">
                </a>
            </div>
        </div>
        <div id="wp-products">
            <h2>OUR PRODUCTS</h2>
            <ul id="list-products">
                <div class="item">
                @foreach($products as $key => $product)
                <img src="{{ asset('image/product/'.$product->image) }}" alt="" border=3 height=150 width=200 class="img">
                    <div class="name">
                    <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                    <source src="{{ asset('audio/product/'.$product->audio) }}" type="audio/mpeg"> </audio>
                    </div>
                    <div class="name">{{ $product->name }}</div>
                    <div class="price">{{ $product->price }}</div>
                    
                    <div class="desc">
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                    <a class="btn btn-primary" href="{{ route('products.destroy',$product->id) }}" >Delete</a>

                    </form>

                    </div>
                @endforeach
                </div>


                <div class="item">
                @foreach($products as $key => $product)
                <img src="{{ asset('image/product/'.$product->image) }}" alt="" border=3 height=150 width=200 class="img">
                    <div class="name">
                    <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                    <source src="{{ asset('audio/product/'.$product->audio) }}" type="audio/mpeg"> </audio>
                    </div>
                    <div class="name">{{ $product->name }}</div>
                    <div class="price">{{ $product->price }}</div>
                    
                    <div class="desc">
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                    <a class="btn btn-primary" href="{{ route('products.destroy',$product->id) }}" >Delete</a>

                    </form>

                    </div>
                @endforeach
                </div>


                <div class="item">
                @foreach($products as $key => $product)
                <img src="{{ asset('image/product/'.$product->image) }}" alt="" border=3 height=150 width=200 class="img">
                    <div class="name">
                    <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                    <source src="{{ asset('audio/product/'.$product->audio) }}" type="audio/mpeg"> </audio>
                    </div>
                    <div class="name">{{ $product->name }}</div>
                    <div class="price">{{ $product->price }}</div>
                    
                    <div class="desc">
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                    <a class="btn btn-primary" href="{{ route('products.destroy',$product->id) }}" >Delete </a>

                    </form>

                    </div>
                @endforeach
                </div>

                <div class="item">
                @foreach($products as $key => $product)
                <img src="{{ asset('image/product/'.$product->image) }}" alt="" border=3 height=150 width=200 class="img">
                    <div class="name">
                    <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="myAudio(this)">
                    <source src="{{ asset('audio/product/'.$product->audio) }}" type="audio/mpeg"> </audio>
                    </div>
                    <div class="name">{{ $product->name }}</div>
                    <div class="price">{{ $product->price }}</div>
                    
                    <div class="desc">
                    <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                    <a class="btn btn-primary" href="{{ route('products.destroy',$product->id) }}" >Delete</a>

                    </form>

                    </div>
                @endforeach
                </div>

            </ul>
            <div class="list-page">
                <div class="item">
                    <a href="">1</a>
                </div>
                <div class="item">
                    <a href="">2</a>
                </div>
                <div class="item">
                    <a href="">3</a>
                </div>
                <div class="item">
                    <a href="">4</a>
                </div>
            </div>
        </div>

        <div id="saleoff">
            <div class="box-left">
                <h1>
                    <span>OFFER UP TO FEMALE</span>
                    <span>45%</span>
                </h1>
            </div>
            <div class="box-right"></div>
        </div>

        <div id="comment">
            <h2>CUSTOMER COMMENTS</h2>
            <div id="comment-body">
                <div class="prev">
                    <a href="#">
                        <img src="https://cdn.pixabay.com/photo/2023/01/31/00/44/ai-generated-7756870__340.jpg" alt="">
                    </a>
                </div>
                <ul id="list-comment">
                    <li class="item">
                        <div class="avatar">
                            <img src="https://media.istockphoto.com/id/1303864193/vi/vec-to/c%C3%B4-g%C3%A1i-tr%E1%BA%BB-trong-th%E1%BA%BF-gi%E1%BB%9Bi-t%C6%B0%C6%A1ng-lai.jpg?s=612x612&w=0&k=20&c=Wk4nQEl0s2hwVXDLmuzO30tKxYo8Ks5bJu9DX8hGRCI=" alt="" class="img1">

                        </div>

                        <div class="name">TRƯƠNG VIỆT DŨNG</div>

                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="avatar">
                            <img src="" alt="">

                        </div>
                        <div class="stars">
                            <span>
                                <img src="assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/star.png" alt="">
                            </span>
                        </div>
                        <div class="name">Trần Ngọc Sơn</div>

                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen music.</p>
                        </div>
                    </li>
                    <li class="item">
                        <div class="avatar">
                            <img src="assets/avatar_1.png" alt="">

                        </div>
                        <div class="stars">
                            <span>
                                <img src="assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/star.png" alt="">
                            </span>
                            <span>
                                <img src="assets/star.png" alt="">
                            </span>
                        </div>
                        <div class="name">Nguyễn Trần Vi</div>

                        <div class="text">
                            <p>Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's
                                standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type
                                specimen book.</p>
                        </div>
                    </li>
                </ul>
                <div class="next">
                    <a href="#">
                        <img src="assets/next.png" alt="">
                    </a>
                </div>
            </div>
        </div>

        <div id="footer">
            <div class="box">
                <div class="logo">
                    <img src="https://dynamic.brandcrowd.com/asset/logo/85644ff8-6fd4-4f74-8d91-622ae9d6e9e4/logo-search-grid-1x?logoTemplateVersion=1&v=637904374788230000" alt="dung" border=3 height=50 width=50 class="img1">
                </div>
                <p>Provide safe quality products for customers</p>
            </div>
            <div class="box">
                <h3>CONTENT</h3>
                <ul class="quick-menu">
                    <div class="item">
                        <a href="">Home</a>
                    </div>
                    <div class="item">
                        <a href="">Products</a>
                    </div>
                    <div class="item">
                        <a href="">Blog</a>
                    </div>
                    <div class="item">
                        <a href="">Contact</a>
                    </div>
                </ul>
            </div>
            <div class="box">
                <h3>CONTACT</h3>
                <form action="">
                    <input type="text" placeholder="Email address">
                    <button>Receive news</button>
                </form>
            </div>
        </div>
    </div>
    <script src="script.js"></script>


@endsection