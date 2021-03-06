@extends('layouts.app')

@section('content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Akun</div>

                    <div class="panel-body">
                        <form role="form" method="POST" action="/user/update/{{$user->id}}">
                            {!! csrf_field() !!}

                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        {{ $error }}<br/>
                                    @endforeach
                                </div>
                            @endif
                            <div class="form-group">
                                <label for="Username">Username</label>
                                <input type="text" class="form-control" id="uname" name="uname" value="{{$user->uname}}">
                            </div>
                            <div class="form-group">
                                <label for="Nama">Nama</label>
                                <input type="text" class="form-control" id="ruang" name="name" value="{{$user->name}}">
                            </div>

                            <div class="form-group">
                                <label for="ruang">Email</label>
                                <input type="text" class="form-control" id="email" name="email" value="{{$user->email}}">
                            </div>

                            <div class="form-group">
                                <label for="ruang">Nama Ketua</label>
                                <input type="text" class="form-control" id="nama_ketua" name="nama_ketua" value="{{$user->nama_ketua}}">
                            </div>

                            <div class="form-group">
                                <label for="ruang">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim" value="{{$user->nim}}">
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label id="password" class="col-md-4 control-label">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>

                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                <label id="confirm" class="col-md-4 control-label">Konfirmasi Password</label>
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection