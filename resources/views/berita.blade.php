@extends('master')

@section('content')

<section id="main-content">
      <section class="wrapper">
        <div class="box">
            <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Isi Berita</th>
                                <th>Tanggal Buat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($berita as $br)
                            <tr>
                                <td>{{ $br->id }}</td>
                                <td>{{ $br->judul }}</td>
                                <td>{{ $br->kategori }}</td>
                                <td>{{ $br->isi }}</td>
                                <td>{{ $br->created_at }}</td>
                                <td>
                                    <form action="{{route('berita.destroy', $br->id)}}" method="post">
                                    {{csrf_field()}}
				                    {{ method_field('DELETE') }}
                                        <a class="btn btn-sm btn-warning href=" href="{{route('berita.edit', $br->id)}}">Edit</a>
                                        <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are You Sure Want To Delete This Data?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
      </section>
</section>

@endsection
