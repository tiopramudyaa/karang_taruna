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
            <h4>Edit Anggota</h4>
            <form action="{{url('/edit/' .$anggota['id'])}}" method="post" class="p-3">
                @csrf
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Anggota</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{$anggota['nama']}}">
                </div>
                <div class=" mb-2">
                    <label for="stok" class="form-label">Jabatan</label>
                    <input type="text" class="form-control" id="jabatan" min="0" name="jabatan" value="{{$anggota['jabatan']}}">
                </div>
                <div class="mb-2">
                    <label for="harga" class="form-label">Usia</label>
                    <input type="number" class="form-control" id="usia" name="usia" value="{{$anggota['usia']}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</main>

@endsection