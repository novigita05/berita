@extends('master')

@section('content')

<section id="main-content">
    <section class="wrapper">
      <html>
  <link rel="stylesheet" href="{{asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <center>

      <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6" >
          <h1><p><B>SELAMAT DATANG</B></p></h1>
          <h1><p><B>Nama : {{ Auth::user()->name }}</B></p></h1>
          <h1><p><B> Email : {{ Auth::user()->email }}</B></p></h1>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
      </div>
    </center>
    </section>
</section>
@endsection
