@extends('layouts.backend.app',[
'title' => 'Struktur Organisasi',
'contentTitle' => 'Struktur Organisasi',
])

@section('content')
<div class="content-body">
    <div class="container-fluid">
    <div class="row page-titles mx-0">
        <div class="col p-md-0">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Struktur Organisasi</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0)">Struktur Organisasi - Table</a></li>
            </ol>
        </div>
    </div>
    </div>
    <!-- row -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <a href="{{ route('admin.struktur.index') }}" class="btn btn-primary btn-sm">Kembali
                            </a>
                        </div>
                        <div class="card-body">
                            <form method="POST" enctype="multipart/form-data"
                                action="{{ route('admin.struktur.update') }}">
                                @csrf
                                <div class="col-lg-6" value="{{$struktur->id}}">
                                    <div class="form-group">
                                        <label>Image </label>
                                        <input type="file" name="file" class="dropify form-control" data-height="190"
                                            data-allowed-file-extensions="png jpg gif jpeg svg webp jfif" required>
                                    </div>
                                </div>
                                <br>
                                <div id="form-group">
                                    <label for="deskripsi">descriptsi</label>
                                    <textarea required="" name="struktur" id="summernote"
                                        class="text-dark form-control summernote">{{$struktur->struktur}}</textarea>
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