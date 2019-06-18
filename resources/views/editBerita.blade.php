@extends('master')

@section('content')

<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h4 class="title">Edit</h4>
                    @foreach($berita as $br)
                        <form class="contact-form php-mail-form" action="{{ route('berita.update', $br->id) }}" method="POST">
                            {{ csrf_field() }}
                                {{method_field('PATCH')}}

                                    <div class="form-group">
                                        <input type="text" name="judul" class="form-control" value="{{ $br->judul }}" autocomplete="off" required>
                                            <div class="validate"></div>
                                    </div>

                                    <div class="form-group">
                                        <select class="form-control" name="kategori" value="{{ $br->kategori }}" autocomplete="off" required>
                                            <option value="">-- Pilih Kategori--</option>
                                            <option value="Olahraga">Olahraga</option>
                                            <option value="Politik">Politik</option>
                                            <option value="Ekonomi">Ekonomi</option>
                                            <option value="Kesehatan">Kesehatan</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <input type="textarea" name="isi" rows="10" cols="50" class="form-control" value="{{ $br->isi }}" autocomplete="off" required>
                                            <div class="validate"></div>
                                    </div> 

                                    <div class="form-send">
                                        <button type="submit" class="btn btn-large btn-primary">Submit</button>
                                        <a href="{{ route('berita.index') }}" class="btn btn-large btn-primary">Batal</a>
                                    </div>                
                        </form>
                    @endforeach
            </div>
        </div>
    </section>
</section>

@endsection