<html>
@include('partials.head')

<body style="background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmwq3Xi8MEwoSK6c_fy7zDmbGvhGgz9NRbS0Urefhr4gOyBJNj-7LXys_26mWKjIaMduA&usqp=CAU);">
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="/" class="h1"><b>Eric</b>Logistik</a>
            </div>
            <div class="card-body"> 
                <p class="login-box-msg">Silahkan Login</p>
                <img src="https://images.tokopedia.net/img/cache/500-square/product-1/2020/7/7/4466354/4466354_a90dff20-05f2-45f4-93c2-1d65dd392966_1920_1920.jpg" align="middle" width="300" height="150">
                <form action="/auth/login" method="post">
                    @csrf
                    @include('layouts.alert')
                    <div class="input-group mb-3">
                        <input type="username" name="username" class="form-control" placeholder="Username">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Login</button>
                </form>
            </div>
        </div>
    </div>
    @include('partials.script')
</body>

</html>
