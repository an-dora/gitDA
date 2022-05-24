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
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Thông tin cá nhân</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                   {{ $message }}
                                </div>
                            @endif
                            <div class="col-md-4">
                                <img src="{{ asset('imgg/1.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <form method="post" action="{{ route('edit.auth', ['id' => $user->id]) }}"
                                    nctype="multipart/form-data">
                                    @csrf
                                    <x-input-edit-card name='name' label='Họ và tên' value='{{ $user->name }}' />
                                    <x-input-edit-card name='email' label='Email' value='{{ $user->email }}' />
                                    <x-input-edit-card name='phone_number' label='Số điện thoại'
                                        value='{{ $user->phone_number }}' />
                                    <x-input-edit-card name='cmnd' label='Chứng minh nhân dân (Căn cước công dân)'
                                        value='{{ $user->cmnd }}' />
                                    <button type="submit" class="btn btn-primary justify-content-end">Cập nhật</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a class="text-decoration-none fw-bold" href="{{ route('home') }}">
                        << Quay về trang chủ</a>
                </div>
            </div>
        </div>
    </div>

</body>
