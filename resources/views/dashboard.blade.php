@extends('/index')
@section('content')

<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="content">
        <div class="container mt-4">
            <h3>Dashboard</h3>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Jumlah Anggota</h6>
                            <h5 class="card-text">{{ $jumlahAnggota }}</h5>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">Jumlah Proker</h6>
                            <h5 class="card-text">{{ $jumlahProker }}</h5>
                        </div>
                    </div>
                </div>
                <h4 class="mt-3">Profil Karang Taruna</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow-sm mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4 text-center">
                                        <h3>LOGO</h3>
                                        <img src="{{ asset($karangTaruna->logo) }}" alt="Logo Karang Taruna" class="img-thumbnail mb-3" width="200">

                                        <h3>BACKGROUND</h3>
                                        <img src="{{ asset($karangTaruna->background) }}" alt="Logo Karang Taruna" class="img-thumbnail mb-3" width="200">
                                        <br>
                                        <a href="{{ url('/update-profile') }}" class="btn btn-primary btn-sm">Ubah</a>
                                    </div>
                                    <div class="col-md-8">

                                        <h5 class="card-title">{{ $karangTaruna->nama }}</h5>
                                        <p class="card-text"><strong>Visi:</strong> {{ $karangTaruna->visi }}</p>
                                        <p class="card-text"><strong>Misi:</strong> {{ $karangTaruna->misi }}</p>
                                    </div>
                                </div>
                                <div class="mt-3 ">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>

@endsection