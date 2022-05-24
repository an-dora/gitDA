<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
@extends('components.master')
@section('content')
<form action="{{route('admin.tours.auth')}}" method="post" enctype= "multipart/form-data">
    @csrf
    <x-input name="name" label="Tên Tour" />
    <x-input name="image" label="Hình ảnh" type="file" />
    <x-textarea name="description" label="Mô tả" />
    <x-input name="price" label="Giá" />
    <x-input name="duration" label="Thời gian" />
    <button type="submit" class="btn btn-primary btn-block mb-4">Thêm Tour</button>
</form>
@endsection
