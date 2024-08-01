@extends('index')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="content">
        <div class="container mt-4 bg-light rounded-3 p-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                </ol>
            </nav>
            <h4>Edit Dashboard</h4>
            <form action="{{url('/update-profileA/')}}" method="post" class="p-3" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Karang Taruna</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$karangTaruna['nama']}}">
                </div>
                <div class=" mb-2">
                    <label for="stok" class="form-label">Visi</label>
                    <input type="text" class="form-control" id="jabatan" min="0" name="visi" value="{{$karangTaruna['visi']}}">
                </div>
                <div class="mb-2">
                    <label for="harga" class="form-label">Misi</label>
                    <input type="text" class="form-control" id="usia" name="misi" value="{{$karangTaruna['misi']}}">
                </div>
                <div class="mb-2">
                    <label for="gambar" class="form-label">Logo</label>
                    <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                </div>
                <div class="mb-2">
                    <label for="gambar" class="form-label">Background</label>
                    <input type="file" class="form-control" id="background" name="background" accept="image/*">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</main>

@endsection