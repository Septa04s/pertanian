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
                         <div class="card-title">
                             <a href="{{ route('users.index') }}" class="btn btn-success btn-sm">Kembali</a>
                         </div>
                         <br>
                         <form method="POST" enctype="multipart/form-data" action="{{ route('users.store')}}">
                             @csrf
                             <div class="form-group">
                                 <label for="jabatan">User Name</label>
                                 <input required="" type="" name="name" id="name" placeholder=""
                                     class="form-control jabatan">
                             </div>
                             <div class="form-group">
                                 <label for="nama">Email</label>
                                 <input required="" type="" name="email" id="email" placeholder=""
                                     class="form-control nama">
                             </div>
                             <div class="form-group">
                                 <label for="nama">Password</label>
                                 <input required="" type="" name="password" id="password" placeholder=""
                                     class="form-control nama">
                             </div>
                             <div class="form-group">
                                 <label>Role</label>
                                 <select name="role" id="role" class="form-control @error('role') is-invalid @enderror">
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
                                 <button type="submit" class="btn btn-primary btn-sm">Tambah</button>
                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection