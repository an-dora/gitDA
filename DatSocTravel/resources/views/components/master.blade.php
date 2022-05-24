<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Simple Sidebar - Start Bootstrap Template</title>
    <!-- Style-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <!-- Script-->
    <script src="/jquery-3.6.0.min.js"></script>
</head>

<body>
    <main>
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark sidebar" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap"></use>
                </svg>
                <span class="fs-4">Sidebar</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="{{route('admin.home')}}"   
                        @if(\Request::route()->getName() == 'admin.home') class="nav-link active"
                        @else class="nav-link"
                        @endif  aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#home"></use>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.users')}}"                         
                        @if(\Request::route()->getName() == 'admin.users') class="nav-link active"
                        @else class="nav-link text-white"
                        @endif  aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#grid"></use>
                        </svg>
                        Users
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.tours')}}" 
                        @if(\Request::route()->getName() == 'admin.tours') class="nav-link active"
                        @else class="nav-link text-white"
                        @endif  aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#speedometer2"></use>
                        </svg>
                        Tours
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.tourist_attractions')}}"                     
                        @if(\Request::route()->getName() == 'admin.attra') class="nav-link active"
                        @else class="nav-link text-white"
                        @endif  aria-current="page">
                        <svg class="bi me-2" width="16" height="16">
                            <use xlink:href="#table"></use>
                        </svg>
                        Tours Attraction
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>mdo</strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">New project...</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Sign out</a></li>
                </ul>
            </div>
        </div>
        @yield('content')
    </main>
    <script src="/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
<style>
    main {
        display: flex;
        flex-wrap: nowrap;
        height: 100vh;
        max-height: 100vh;
        overflow-x: auto;
        overflow-y: hidden;
    }
</style>
<script>
    const call2Action = document.querySelectorAll(".nav-link");

call2Action.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    call2Action.forEach(f => f.classList.remove('active'));
    e.target.classList.toggle("active");
  });
});

</script>
