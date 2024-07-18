@extends('/index')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="content">
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center mt-4">
                <h3>Anggota</h3>
                <a href="{{ url('/tambah') }}" class="btn btn-primary">Tambah Anggota</a>
            </div>

            <hr>
            <div class="row">
                <h4 class="mt-3">Daftar Anggota</h4>
                <table class="table table-responsive">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 20%;">Foto</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col" style="width: 5%;">Usia</th>
                            <th scope="col" style="width: 15%;">Pengaturan</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse($anggota as $a)
                        <tr>
                            <td><img src="{{ asset($a['gambar']) }}" alt="Foto Anggota" class="img-thumbnail" style="width: 60px; height: 60px;">
                            </td>
                            <td>{{$a['nama']}}</td>
                            <td>{{$a['jabatan']}}</td>
                            <td>{{$a['usia']}}</td>
                            <td>
                                <a href="{{ url('edit/'.$a['id']) }}" class="btn btn-primary btn-sm">Ubah</a>

                                <a href="{{ url('delete-anggota/'.$a['id']) }}" class="btn btn-danger btn-sm">Hapus</a>

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