@extends('layouts.backend.app',[
'title' => 'Data User',
'contentTitle' => 'Data User',
])

@section('content')
<div class="content-body" style="margin-top:100px;">
    <!-- row -->
    <div class="container-fluid">
   
        <div class="card">
            <div class="d-flex align-items-end row">
                 <div class="col-sm-7">
                    <div class="card-body">
                        <ol   ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Data User</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">User - Table</a></li>
                        </ol>
                    </div>
                </div>
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
                            <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm">Tambah
                                Data</a>
                        </div>
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered zero-configuration" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $no=1;
                                    @endphp
                                    @foreach($user as $us)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $us->name }}</td>
                                        <td>{!! Str::limit($us->email) !!}</td>
                                        <td>
                                            @foreach ($us->getRoleNames() as $item)
                                                {{$item}}
                                            @endforeach
                                        </td>
                                        <td>
                                            <div class="">
                                                <a href="{{ route('users.edit',$us->id) }}"
                                                    class="btn btn-primary btn-sm"><i class="icon-cursor">Edit</i></a>
                                                <form method="POST" action="{{ route('users.destroy',$us->id) }}">
                                                    @csrf
                                                    
                                                    <button onclick="return confirm('Yakin hapus ?')" type="submit"
                                                        class="btn btn-danger btn-sm ml-2"><i
                                                            class="icon-trash "></i>Hapus</button>
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