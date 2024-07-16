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
            <h4>Tambah Proker</h4>

            <form action="{{url('/create-proker')}}" method="post" class="p-3">
                @csrf
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Proker</label>
                    <input type="text" class="form-control" id="nama_proker" name="nama_proker" required>
                </div>
                <div class="mb-2">
                    <label for="stok" class="form-label">ketua</label>
                    <input type="text" class="form-control" id="ketua" min="0" name="ketua" required>
                </div>

                <div class="mb-2">
                    <label for="stok" class="form-label">Deskripsi</label>
                    <input type="text" class="form-control" id="deskripsi" min="0" name="deskripsi" required>
                </div>

                <div class="mb-2">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</main>

@endsection