@include('admin.head')

<div id="wrapper">
    @include('admin.sidebar')
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content" >
            @include('admin.navbar')
            <div class="container_fluid" style="background-image: url('https://images.theconversation.com/files/433499/original/file-20211123-17-199wbff.jpg?ixlib=rb-1.1.0&rect=0%2C0%2C5991%2C3395&q=20&auto=format&w=320&fit=clip&dpr=2&usm=12&cs=strip');
            background-size: cover;
            font-family: Arial, sans-serif;">
                <!-- Hiển thị nội dung của từng trang con-->
                @yield('content')
            </div>
        </div>
        @include('admin.footer')
    </div>
    @include('admin.js')
  


    