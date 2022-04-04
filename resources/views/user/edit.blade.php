@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Edit User </h4>
            <form action="{{ url('users/update', $data->id) }}" method="post">
                @csrf 
                @method('PUT')
                <div class="form-group my-3">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{ $data->name }}">
                </div>

                <div class="form-group my-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" value="{{ $data->username }}">
                </div>

                <div class="form-group my-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ $data->email }}">
                </div>

                <div class="form-group my-3">
                    <label for="phone_number">Nomor Hp</label>
                    <input type="text" class="form-control" name="phone_number" id="phone_number" value="{{ $data->phone_number }}">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection