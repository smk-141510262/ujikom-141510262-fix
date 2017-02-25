@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b><h1>Tambah Data Kategori Lembur</h1></b></center></div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'KategoriLembur'])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Lembur','Kode Lembur')!!}
                        {!! Form::text('kode_lembur',null,['class'=>'form-control', 'placeholder' => 'Contoh: kole-100', 'required'])!!}
                    </div>
                    <label>Nama Jabatan</label>
                    <select name="jabatan_id" class="form-control" required>
                        <option value="">Pilih Nama Jabatan</option>
                        @foreach($jabatans as $baru)
                        <option value="{{$baru->id}}">{{$baru->nama_jabatan}}</option>
                        @endforeach
                    </select><br>
                    <label>Nama Golongan</label>
                    <select name="golongan_id" class="form-control" required="">
                        <option value="">Pilih Nama Golongan</option>
                        @foreach($golongans as $baru)
                        <option value="{{$baru->id}}">{{$baru->nama_golongan}}</option>
                        @endforeach
                    </select><br>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::number('besaran_uang',null,['class'=>'form-control', 'required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('Simpan Data',['class'=>'btn btn-primary form-control'])!!}
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
