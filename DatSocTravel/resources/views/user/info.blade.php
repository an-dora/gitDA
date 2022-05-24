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
                            <div class="col-md-4">
                                <img src="{{ asset('imgg/1.png') }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Họ và tên</label>
                                            <input type="text" class="form-control" value="{{ $user->name }}"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" value="{{ $user->email }}"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Số điện thoại</label>
                                            <input type="text" class="form-control"
                                                value="{{ $user->phone_number }}" disabled>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Chứng minh nhân dân (Căn cước công dân)</label>
                                            <input type="text" class="form-control" value="{{ $user->cmnd }}"
                                                disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-text">
                        <a href="{{ route('edit', ['id' => $user->id]) }}" class="btn btn-primary">Sửa thông tin</a>
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
