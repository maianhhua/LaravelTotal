@extends('admin.layouts.glance')
@section('title')
    Quản lý Nhà cung cấp
@endsection
@section('content')
    <h1>Quản lý Nhà cung cấp</h1>
    <div style="margin: 20px 0">
        <a href="{{ url('admin/shop/seller/create') }}" class="btn btn-success">Thêm Nhà cung cấp</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <h4>Tổng số:</h4>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($sellers as $seller)
                    <tr>
                        <th scope="row">{{$seller->id}}</th>
                        <td>{{$seller->name}}</td>
                        <td>{{$seller->email}}</td>
                        <td>
                            <a href="{{ url('admin/shop/seller/create') }}" class="btn btn-success">Add</a>
                            <a href="{{ url('admin/shop/seller/'. $seller->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('admin/shop/seller/'. $seller->id.'/delete') }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>

            </table>
            {{ $sellers->links() }}
        </div>
    </div>
@endsection