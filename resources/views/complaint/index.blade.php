@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $onComplaint }}</h4>
                            <p class="card-text">total Pengajuan Laporan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $onProcess }}</h4>
                            <p class="card-text">total Pengajuan Laporan Yang Sedang diproses</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $onDone }}</h4>
                            <p class="card-text">total Pengajuan Laporan yang sudah selesai</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <h4 class="card-title my-3">Data Complaint </h4>
            <table class="table" id=myTable>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Judul</th>
                        <th>Dibuat</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                @foreach ($data as $item)
                    <tr>
                        <td>{{ $loop->index + 1 }}</td>
                        <td>{{ $item->nik }}</td>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                            <a class="btn btn-info" href="{{  url('complaints/detail/'.$item->id) }}"> Detail</a>
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