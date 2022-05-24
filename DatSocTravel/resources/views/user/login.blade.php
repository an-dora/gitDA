<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>{{ $attributes['title'] ?? 'DatSocTravel'</title> --}}
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <script src="/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</head>

<body>
    @if (session('error'))
        <div class="toast-container position-absolute p-3 top-0 end-0" id="toastPlacement"
            data-original-class="toast-container position-absolute p-3">
            <div class="toast fade show">
                <div class="toast-header">
                    <span><strong><i class="fas fa-times" style="color: red; margin-right: 10px;"></i></strong></span>
                    <strong class="me-auto">Thông báo</strong>
                    <small id="timeNow"></small>
                    {{-- <button type="button" class="btn-close me-2 m-auto closeToast" data-bs-dismiss="toast" aria-label="Close"></button>--}}
                </div>
                <div class="toast-body">
                    {{ session('error') }}
                </div>
            </div>
        </div>
        </div>
    @endif
    <form action="{{ route('user.login.auth') }}" method="POST">
        @csrf
        <strong class="text-center justify-content-between">Đăng nhập</strong>
        <x-input name="emailLogin" label="Email hoặc số điện thoại" />
        <x-input name="passwordLogin" type="password" label="Mật Khẩu" />
        <strong><a class="nav-link text-decoration-none" href="{{ route('user.register') }}">Bạn chưa có tài khoản? Hãy Đăng ký.</a></strong>
        <button type="submit" class="btn btn-primary btn-block mb-4">Đăng nhập</button>
    </form>
    </div>
    </div>
</body>
