@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Tambah User </h4>
            <form action="{{ url('users/store') }}" method="post">
                @csrf
                <div class="form-group my-3">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="form-group my-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>

                <div class="form-group my-3">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" name="email" id="email">
                </div>

                <div class="form-group my-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>

                <div class="form-group my-3">
                    <label for="phone_number">Nomor Hp</label>
                    <input type="text" class="form-control" name="phone_number" id="phone_number">
                </div>

                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection