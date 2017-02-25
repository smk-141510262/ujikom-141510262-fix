@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <center>
                        <h1>Selamat Datang</h1>
                        <h2><b><i>{{ Auth::user()->name }}</i></b></h2>
                        <h1>Di Data Penggajian!!!</h1>
                    </center>
                    <center>
                        <h3>
                            Anda Login Sebagai
                            <b><i>{{ Auth::user()->permission }}</i></b>
                        </h3>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
