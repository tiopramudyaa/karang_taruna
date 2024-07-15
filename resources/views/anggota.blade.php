@extends('/index')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="content">
        <div class="container mt-4">
            <h3>Anggota</h3>
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
                        <tr>
                            <td><img src=" https://via.placeholder.com/100" alt="Foto Anggota" class="img-thumbnail">
                            </td>
                            <td>John Doe</td>
                            <td>Manager</td>
                            <td>30</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Ubah</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="https://via.placeholder.com/100" alt="Foto Anggota" class="img-thumbnail"></td>
                            <td>Jane Doe</td>
                            <td>Staff</td>
                            <td>25</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Ubah</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                        <tr>
                            <td><img src="https://via.placeholder.com/100" alt="Foto Anggota" class="img-thumbnail"></td>
                            <td>John Smith</td>
                            <td>Staff</td>
                            <td>27</td>
                            <td>
                                <button class="btn btn-primary btn-sm">Ubah</button>
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </td>
                        </tr>
                </table>
            </div>
        </div>
</main>

@endsection