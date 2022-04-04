@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title my-3">Detail Laporan Pengaduan </h4>
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" class="form-control" name="nik" id="nik" readonly value="{{ $data->nik }}">
                </div>

                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" class="form-control" name="title" id="title" readonly value="{{ $data->title }}">
                </div>
            
                <div class="form-group">
                    <label for="report_text">Teks Laporan</label>
                    <textarea class="form-control" name="report_text" id="report_text" readonly rows="3" readonly> {{ $data->report_text }}</textarea>
                </div>

                <div class="form-group">
                    <label for="status">Status</label>
                    <input type="text" class="form-control" name="status" id="status" readonly value="{{ $data->status }}">
                </div>

                <div class="mt-3">
                    <label for="">Gambar</label><br>
                    <img src="{{ asset ('photo/'. $data->photo) }}" alt=""  srcset="" width="100px">
                </div>
                <br>
                @if ($data->status == '0')
                    <a name="" id="" class="btn btn-warning" href={{ url('complaints/update',$data->id) }} role="button">Process</a>
                @elseif ($data->status == 'process')
                    <a name="" id="" class="btn btn-success" href={{ url('complaints/done',$data->id) }} role="button">Done</a>
                @endif
            </div>
        </div>
    </div>
    
@endsection