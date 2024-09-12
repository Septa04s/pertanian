@extends('layouts.backend.app',[
'title' => 'Upload Surat ',
'contentTitle' => 'Upload Surat ',
])

@section('content')

<div class="content-body" style="margin-top:100px;">
    <div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Upload Surat </a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Upload Surat  - Table</a></li>
            </ol>
        </div>
    </div>
    <!-- row -->
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ route('index') }}" class="btn btn-primary btn-sm">Kembali
                            </a>
                        </div>
                        <div class="card-body col-4">
                            <form method="POST" enctype="multipart/form-data"
                                action="{{ route('letter.store') }}">
                                @csrf
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label>Dokumen </label>
                                        <input type="file" name="document" id="document" class="form-control" data-height="190"
                                            data-allowed-file-extensions="pdf xlxs doc docx" required>
                                            @error('document','error')
                                            <div>{{$message}}</div>
                                            @enderror
                                    </div>
                                </div>
                                <br>
                                <div id="form-group">
                                    <label for="deskripsi">Hari</label>
                                    <input required="" name="day" id="day"
                                        class="form-control"></input>
                                        @error('day','error')
                                            <div>{{$message}}</div>
                                            @enderror
                                </div>
                                <div id="form-group">
                                    <label for="deskripsi">Tanggal</label>
                                    <input required="" name="date" type="date" id="date"
                                        class="form-control"></input>
                                        @error('day','error')
                                            <div>{{$message}}</div>
                                            @enderror
                                </div>
                                <div id="form-group">
                                    <label for="deskripsi">Nomor Surat</label>
                                    <input required="" name="no_letter" id="no_letter"
                                        class="form-control"></input>
                                        @error('no_letter','error')
                                            <div>{{$message}}</div>
                                            @enderror
                                </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">UPLOAD</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection