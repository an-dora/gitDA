@extends('components.master')
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tên tour</th>
                <th scope="col"></th>
                <th scope="col">Mail</th>
                <th scope="col">CMND</th>
                <th scope="col">Ngày tạo</th>
                <th scope="col">Hành động</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datas as $user)
            <tr>
                <th scope="row">{{$user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->phone_number}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->cmnd}}</td>
                <td>{{$user->created_at}}</td>
                <td>
                    {{-- <a href="{{route('admin.users.edit', $user->id)}}"><i class="fas fa-pencil-alt fa-fw"></i></a>
                    <a href="{{route('admin.users.delete', $user->id)}}"><i class="fas fa-trash-alt fa-fw"></i></a> --}}
                </td>
            </tr>
            @endforeach 
        </tbody>
    </table>
    {{ $datas->links() }}
@endsection
