@extends('index')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="content">
        <div class="container mt-4 bg-light rounded-3 p-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item"><a href="{{url('admin/bahan_baku')}}">Bahan Baku</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                </ol>
            </nav>
            <h4>Tambah Anggota</h4>

            <form action="{{url('/create-anggota')}}" method="post" class="p-3" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-2">
                    <label for="jabatan" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" min="0" name="jabatan" required>
                </div>
                <div class="mb-2">
                    <label for="usia" class="form-label">Usia</label>
                    <input type="number" class="form-control" id="usia" name="usia" required>
                </div>
                <div class="mb-2">
                    <label for="gambar" class="form-label">Upload Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" accept="image/*" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</main>

@endsection