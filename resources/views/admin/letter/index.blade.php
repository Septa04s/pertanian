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
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Struktur Organisasi- Table</a></li>
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
                            <a href="{{ route('admin.struktur.create') }}" class="btn btn-primary btn-sm">Tambah
                                Data</a>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image </th>
                                        <th>Descriptsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no=1;
                                    @endphp
                                    @foreach($struktur as $us)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td><img src="{{asset('storage/struktur/'.$us->img)}}" width="100"
                                                height="auto">
                                        </td>
                                        <td>{!!$us->struktur!!}</td>
                                        <td>
                                            <div class="">
                                                <a href="{{ route('admin.struktur.edit',$us->id) }}"
                                                    class="btn btn-primary btn-sm"><i class="icon-cursor"></i></a>
                                                <form method="POST"
                                                    action="{{ route('admin.struktur.destroy',$us->id) }}">
                                                    @csrf

                                                    <button onclick="return confirm('Yakin hapus ?')" type="submit"
                                                        class="btn btn-danger btn-sm ml-2"><i
                                                            class="icon-trash "></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection