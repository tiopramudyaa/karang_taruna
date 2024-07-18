@extends('/index')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="content">
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center mt-4">
                <h3>Program Kerja</h3>
                <a href="{{ url('/tambah-proker') }}" class="btn btn-primary">Tambah Proker</a>
            </div>
            <hr>
            <div class="row">
                <h4 class="mt-3">Daftar Program kerja</h4>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10%;">Foto</th>
                            <th scope="col">Nama Program Kerja</th>
                            <th scope="col">Ketua</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Tambah dokumentasi</th>
                            <th scope="col" style="width: 15%;">Pengaturan</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse($proker as $a)
                        <tr>
                            <td><img src=" {{ asset($a['gambar']) }}" alt="Foto Proker" class="img-thumbnail" style="width: 60px; height: 60px;">
                            </td>
                            <td>{{$a['nama_proker']}}</td>
                            <td>{{$a['ketua']}}</td>
                            <td>{{$a['tanggal']}}</td>
                            <td>
                                <a href="{{ url('dokumentasi-proker/'.$a['id']) }}" class="btn btn-success btn-sm"> + </a>
                            </td>
                            <td>
                                <a href="{{ url('edit-proker/'.$a['id']) }}" class="btn btn-primary btn-sm">Ubah</a>
                                <a href="{{ url('delete-proker/'.$a['id']) }}" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4">No data</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
</main>

@endsection