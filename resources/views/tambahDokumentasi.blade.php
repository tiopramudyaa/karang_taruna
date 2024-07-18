@extends('index')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="content">
        <div class="container mt-4 bg-light rounded-3 p-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item"><a href="{{url('admin/bahan_baku')}}">Bahan Baku</a></li> -->
                    <h3 class="breadcrumb-item active" aria-current="page">{{ ($proker['nama_proker'])}}</h3>
                </ol>
            </nav>
            <!-- <h7>Tambah Dokumentasi</h7> -->

            <form action="{{url('/addimage-proker/' .$proker['id'])}}" method="post" class="p-3" enctype="multipart/form-data">
                @csrf
                <div class="mb-2">
                    <label for="gambar" class="form-label">Upload Gambar Dokumentasi</label>
                    <input type="file" class="form-control" id="path" name="path" accept="image/*" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div class="mt-4">
                <h4>Semua Gambar Dokumentasi</h4>
                <div class="row">
                    @forelse($dokumentasi as $gambar)
                    <div class="col-md-4">
                        <img src="{{ asset($gambar->path) }}" alt="Gambar Dokumentasi" class="img-fluid">
                    </div>
                    @empty
                    <div>
                        <td colspan="4">Belum ada gambar</td>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</main>

@endsection