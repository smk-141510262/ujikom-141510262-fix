@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b><h1>Ubah Data Pegawai</h1></b></center></div>

                <div class="panel-body">
                    {!! Form::model($pegawais,['method'=>'PATCH','route'=>['Pegawai.update',$pegawais->id],'files'=>'true'])!!}
                        <label>NIP</label>
                        <input type="text" name="nip" value="{{$pegawais->nip}}" class="form-control" required><br>

                        <div class="form-group">
                            <label for="jabatan_id" class="form-group">Nama Jabatan</label>
                            <div class="form-group">
                                <select name="jabatan_id" class="form-control" required>
                                    <option value="{{ $pegawais->jabatan->id }}">Nama Jabatan ( {{ $pegawais->jabatan->nama_jabatan }} ) </option>
                                    @foreach($jabatans as $baru)
                                        <option value="{{$baru->id}}">{{$baru->nama_jabatan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="golongan_id" class="form-group">Nama Golongan</label>
                            <div class="form-group">
                                <select name="golongan_id" class="form-control" required>
                                    <option value="{{ $pegawais->golongan->id }}">Nama Golongan ( {{ $pegawais->golongan->nama_golongan }} ) </option>
                                    @foreach($golongans as $baru)
                                        <option value="{{$baru->id}}">{{$baru->nama_golongan}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="photo" class="form-group">Photo</label>
                            <img src="{{asset('img/'.$pegawais->photo.'')}}" width="100" height="100" class="img-circle img-responsive" alt="Responsive image">
                                <br><input type="file" name="photo" nullable>
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Simpan Data',['class'=>'btn btn-success form-control'])!!}
                        </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
