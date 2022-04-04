@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title my-3">Data User/Pegawai </h4>
            <a name="" id="" class="btn btn-primary mb-2" href="{{url('users/create')}}" role="button"> Tambah User</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->username }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->phone_number }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{  url ('users/edit/'.$item->id) }}"> Edit </a>
                            <a class="btn btn-danger" onclick="confirm ('Yakin Ingin Menghapus Data ini?')" href="{{  url('users/delete/'.$item->id) }}"> Delete</a>
                        </td>
                    </tr>
                    
                @endforeach
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
    
@endsection