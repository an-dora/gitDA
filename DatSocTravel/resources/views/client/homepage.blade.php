<nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
    <div class="container">
        <a class="navbar-brand" href="#">DatSocTravel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="mx-auto"></div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Blog</a>
                </li>
                @if (Auth::check())
                <div class="dropdown">
                    <a href="#" class="nav-link text-white d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        Xin chào, {{Auth::user()->name}}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="{{route('info', ['id' => Auth::user()->id])}}">Thông tin cá nhân</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{route('logout')}}">Đăng xuất</a></li>
                    </ul>
                </div>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('user.login') }}">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('user.register') }}">Đăng ký</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<!-- Banner Image  -->
<div class="banner-image w-100 vh-100 d-flex justify-content-center align-items-center">
    <div class="content text-center">
        <div class="container h-100">
            <div class="d-flex justify-content-center h-100">
                <div class="searchbar">
                    <input class="search_input" type="text" name="" placeholder="Search...">
                    <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 100) {
            nav.classList.add('bg-dark', 'shadow');
        } else {
            nav.classList.remove('bg-dark', 'shadow');
        }
    });
</script>
<style>
    .banner-image {
        background-image: url('imgg/bg.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        size: 75vh;
    }

    .searchbar {
        margin-bottom: auto;
        margin-top: auto;
        height: 60px;
        background-color: #353b48;
        border-radius: 30px;
        padding: 10px;
    }

    .search_input {
        color: white;
        border: 0;
        outline: 0;
        background: none;
        width: 405px;
        caret-color: red;
        line-height: 40px;
        transition: width 0.4s linear;

    }

    .search_icon {
        background: white;
        height: 40px;
        width: 40px;
        float: right;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
        color: red;
        text-decoration: none;
    }

</style>
