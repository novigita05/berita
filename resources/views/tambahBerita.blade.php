@extends('master')

@section('content')

<section id="main-content">
    <section class="wrapper">
        <div class="row mt">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h4 class="title">Tambah Berita</h4>
                    <form class="contact-form php-mail-form" action="{{ route('berita.store') }}" method="POST">
                    {{ csrf_field() }}

                        <div class="form-group has-feedback{{ $errors->has('judul') ? ' has-error' : ''}}">
                            <input type="text" name="judul" value="{{old('judul')}}" class="form-control" placeholder="Judul" autocomplete="off">
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('judul')}}</p>
                                    </span>
                                @endif
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="kategori" autocomplete="off" required>
                                <option value="">-- Pilih Kategori--</option>
                                <option value="Olahraga">Olahraga</option>
                                <option value="Politik">Politik</option>
                                <option value="Ekonomi">Ekonomi</option>
                                <option value="Kesehatan">Kesehatan</option>
                            </select>
                        </div>

                        <div class="form-group has-feedback{{ $errors->has('isi') ? ' has-error' : ''}}">
                            <textarea name="isi" value="{{old('isi')}}" rows="10" cols="50" class="form-control" placeholder="Isi Berita" autocomplete="off">
                            </textarea>
                                 @if ($errors->has('isi'))
                                    <span class="help-block">
                                        <p>{{ $errors->first('isi')}}</p>
                                    </span>
                                 @endif
                        </div>

                        <div class="form-group">
                            <input type="datetime-local" name="created_at" class="form-control" autocomplete="off" required>
                                <div class="validate"></div>
                        </div>

                        <div class="form-send">
                            <button type="submit" class="btn btn-large btn-primary">Submit</button>
                            <a href="{{ route('berita.index') }}" class="btn btn-large btn-primary">Batal</a>
                        </div>
                    </form>
            </div>
        </div>
    </section>
</section>
@endsection
