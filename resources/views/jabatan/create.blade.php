@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><center><b><h1>Tambah Data Jabatan</h1></b></center></div>

                <div class="panel-body">
                    @if(!empty($errors->first()))
                        <div class='alert alert-warning'>{!! $errors->first() !!}</div>
                    @endif
                    
                    {!! Form::open(['url'=>'Jabatan'])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Jabatan','Kode Jabatan')!!}
                        {!! Form::text('kode_jabatan',null,['class'=>'form-control','placeholder'=>'Contoh: koja-100','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Nama Jabatan','Nama Jabatan')!!}
                        {!! Form::text('nama_jabatan',null,['class'=>'form-control','placeholder'=>'Contoh: BOS','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::number('besaran_uang',null,['class'=>'form-control','placeholder'=>'Contoh: Rp. 1.000.000.000,-','required'])!!}
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
