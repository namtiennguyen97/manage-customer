@extends('home')
@section('title','Danh sach khach hang')
@section('content')
    <div class="col-12">
        <div class="row-12">
            <h1>Danh sach khach hang</h1>
        </div>
        <div class="col-12">
            @if(\Illuminate\Support\Facades\Session::has('success'))
                <p class="text-success">
                    <i class="fa fa-check" aria-hidden="true"></i>{{ \Illuminate\Support\Facades\Session::get('success') }}
                </p>
                @endif
        </div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Ten khach hang</th>
                <th scope="col">Ngay sinh</th>
                <th scope="col">Email</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @if(count($customers)==0)
                <tr><td colspan="4">Khong co du lieu</td></tr>
                @else
            @foreach($customers as $key => $customer)
                <tr>
                    <th scope="row">{{++$key}}</th>
                    <td>{{$customer->name}}</td>
                    <td>{{$customer->dob}}</td>
                    <td>{{$customer->email}}</td>
                    <td><a href="{{route('customers.edit', $customer->id)}}">Sua</a></td>
                    <td><a href="{{route('customers.destroy', $customer->id)}}" class="text-danger" onclick="return confirm('Ban muon xoa?')">Xoa</a></td>


                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('customers.create')}}">Them moi</a>
    </div>

@endsection
