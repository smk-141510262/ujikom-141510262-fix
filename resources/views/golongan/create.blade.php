@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b><h1>Tambah Data Golongan</h1></b></center></div>

                <div class="panel-body">
                    {!! Form::open(['url'=>'Golongan'])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Golongan','Kode Golongan')!!}
                        {!! Form::text('kode_golongan',null,['class'=>'form-control','placeholder'=>'Contoh: kogo-100','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Nama Golongan','Nama Golongan')!!}
                        {!! Form::text('nama_golongan',null,['class'=>'form-control','placeholder'=>'Contoh: Golongan 1','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::number('besaran_uang',null,['class'=>'form-control','placeholder'=>'Contoh: Rp. 1000.000.000,-','required'])!!}
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
