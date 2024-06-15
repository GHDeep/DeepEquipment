@extends('layouts.main')

@section('title', 'Home')

@section('deepta')
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h1 class="display-4">Welcome to Deep Equipment</h1>
                    <p class="lead" align="justify">
                        Website ini memberikan anda saran Equipment GYM yang tersedia di internet.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Gym Equipment Menu Section -->
    <div class="row">
        <div class="col-12">
            <h2 class="mb-4">Gym Equipment</h2>
        </div>
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://www.mensjournal.com/.image/t_share/MTk2MTM2NzQyNzY3NTAyODUz/7-pieces-of-luxury-gym-equipment-you-should-start-saving-for-now.jpg" class="card-img-top" alt="Gym Equipment 1"> <!-- Add your image URL here -->
                <div class="card-body">
                    <h5 class="card-title">Professional GYM Equipment</h5>
                    <p class="card-text">Peralatan GYM profesional yang dirancang untuk membantu Anda mencapai performa terbaik. Cocok untuk atlet dan mereka yang serius dalam kebugaran.</p>
                    <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://www.hashtagfitness.in/wp-content/uploads/2023/06/7IN1-M.jpg" class="card-img-top" alt="Gym Equipment 2"> <!-- Add your image URL here -->
                <div class="card-body">
                    <h5 class="card-title">Home GYM Equipment</h5>
                    <p class="card-text">Peralatan GYM praktis untuk digunakan di rumah, membantu Anda tetap fit dan sehat tanpa perlu ke pusat kebugaran. Ideal untuk rutinitas sehari-hari.</p>
                    <a href="#" class="btn btn-primary">Lihat Selengkapnya</a>
                </div>
            </div>
        </div>
        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="https://www.blkboxfitness.com/cdn/shop/files/HP_banner_Nexus-min.jpg?v=1703939143&width=2400" class="card-img-top" alt="Gym Equipment 3"> <!-- Add your image URL here -->
                <div class="card-body">
                    <h5 class="card-title">Commercial GYM Equipment</h5>
                    <p class="card-text">Peralatan GYM komersial berkualitas tinggi untuk pusat kebugaran. Dirancang untuk penggunaan intensif dengan daya tahan yang luar biasa.</p>
                    <a href="#" class="btn btn-primary">Temukan Lebih Banyak</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
