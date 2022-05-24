@extends('components.master')
@section('content')
    <div class="newBtn">
        {{-- {{route('admin.tours.create')}} --}}
        <a href="{{ route('admin.tours.create') }}"><i class="fas fa-plus-circle"></i></a>
    </div>
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên Tour</th>
                <th scope="col">Hình ảnh</th>
                <th scope="col">Mô tả</th>
                <th scope="col">Giá</th>
                <th scope="col">Thời gian</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <th scope="row">{{ $data->id }}</th>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->image }}</td>
                    <td>{{ $data->description }}</td>
                    <td>@php echo number_format($data->price, 0, '', '.');@endphp VND</td>
                    <td>{{ $data->duration }} ngày</td>
                    <td>
                        <a href="{{ route('admin.tours.edit', $data->id) }}"><i
                                class="fas fa-pencil-alt fa-fw text-primary"></i></a>
                        <a href="{{ route('admin.tours.delete', $data->id) }}"><i
                                class="fas fa-trash-alt fa-fw text-danger"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $datas->links() }}
@endsection
<style>
    .newBtn {
        font-size: 50px;
        position: absolute;
        bottom: 15px;
        right: 15px;
    }

    td,th {
        /* text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
        height: 20px;
        width: 14%; */
        display: inline-block;
    width: 16.6666%;
    white-space: nowrap;
    overflow: hidden !important;
    text-overflow: ellipsis;
    }

</style>
