@extends ('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        <strong>{{ session('success') }}</strong>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title my-3">Laporkan Keluhan</h4>
                        <form action="{{ url ('complaints/storecomplaint') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group my-3">
                                <label for="nik">NIK</label>
                                <input type="number" class="form-control" name="nik" id="nik" placeholder="Masukan NIK Anda">
                            </div>

                            <div class="form-group my-3">
                                <label for="title">Judul</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="Masukan Judul Laporan Anda">
                            </div>

                            <div class="form-group my-3">
                                <label for="report_text">Teks Laporan</label>
                                <textarea class="form-control" name="report_text" id="report_text" rows="3"></textarea>
                            </div>

                            <div class="form-group my-3">
                                <label for="photo">Lampiran Foto</label>
                                <input type="file" class="form-control" name="photo" id="photo">
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection