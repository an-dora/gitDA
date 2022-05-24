<script src="//cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>
<link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
@extends('components.master')
@section('content')
<form action="{{route('admin.tours.auth',['id'=>$data->id])}}" method="post">
    @csrf
    <x-input name="name" label="Tên Tour" value="{{$data->name}}"/>
    <img src="{{$data->image}}" alt="">
    <x-input name="image" label="Hình ảnh" type="file" />
    <x-textarea name="description" label="Mô tả" value="{{$data->description}}"/>
    <x-input name="price" label="Giá" value="{{$data->price}}"/>
    <x-input name="duration" label="Thời gian" value="{{$data->duration}}"/>
    <button type="submit" class="btn btn-primary btn-block mb-4">Cập nhật Tour</button>
</form>
@endsection
