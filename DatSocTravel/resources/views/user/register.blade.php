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
    @if ($errors->any())
        {{-- @if (session('success_mesg')) --}}
        <div class="toast-container position-absolute p-3 top-0 end-0" id="toastPlacement"
            data-original-class="toast-container position-absolute p-3">
            <div class="toast fade show" id="toastID" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <strong class="me-auto">Bootstrap</strong>
                    <small>@php date('h:i:s'); @endphp</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    Đăng ký thất bại
                </div>
            </div>
        </div>
    @endif
    <form action="{{ route('user.register.auth') }}" method="POST">
        @csrf
        <p class="text-center">Đăng ký</p>
        <x-input name="name" label="Họ và tên" />
        <x-input name="email" label="Mail" />
        <x-input name="phone_number" label="Số điện thoại" />
        <x-input name="cmnd" label="Chứng minh nhân dân" />

        <x-input name="password" type="password" label="Mật Khẩu" />
        <x-input name="confirmPasswor" type="password" label="Nhập lại mật Khẩu" />

        <button type="submit" class="btn btn-primary btn-block mb-4">Đăng kí</button>
    </form>
</body>
