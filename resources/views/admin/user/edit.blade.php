@extends('layouts.backend.app',[
'title' => 'Tambah User',
'contentTitle' => 'Tambah User',
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <a href="{{ route('users.index') }}" class="btn btn-success btn-sm">Kembali</a>
                        </div>
                        <div class="row">
                            <x-card>
                                <x-slot name="col">6</x-slot>
                                <x-slot name="header">Profil Saya</x-slot>
                                <div class="form-group">
                                    <label>User Name</label>
                                    <input type="" disabled="" value="{{ $user->name }}" class="form-control" name="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="" disabled="" value="{{ $user->email }}" class="form-control" name="">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" disabled="" value="{{$user->password}}" class="form-control"
                                        name="">
                                </div>
                                <div class="form-group">
                                    <label>Role</label>
                                    <input type="" disabled="" value="{{ $user->role }}" class="form-control" name="">
                                </div>
                            </x-card>

                            <x-card>
                                <x-slot name="col">6</x-slot>
                                <x-slot name="header">Edit Profil</x-slot>
                                <form method="POST" action="{{ route('user.update',$user->id) }}">
                                    @csrf
                                    <div class="form-group">
                                        <label>Nama Lengkap</label>
                                        <input type="" value="{{ $user->name }}"
                                            class="form-control @error('name') is-invalid @enderror" name="name">
                                        @error('name')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" value="{{$user->email }}"
                                            class="form-control @error('email') is-invalid @enderror" name="email">
                                        @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" value="{{$user->password}}"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password">
                                        @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select name="role" id=""
                                            class="form-control @error('role') is-invalid @enderror">
                                            @foreach ($role as $item)
                                            <option value="{{$item->name}}">{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('role')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-sm">UPDATE</button>
                                    </div>
                                </form>
                            </x-card>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection