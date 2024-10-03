@extends('layout.master')
@section('title', 'home')

@section('content')
    
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div id="carouselExample" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
    <iframe height="25px"  frameborder="0"  ></iframe>   
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" >
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="10000">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQQluTz991RhOFTh2FFXDXoxuS4H5ldpnuLLQ&s" class="d-block w-100" alt="" >
    </div>
    <div class="carousel-item " data-bs-interval="10000">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLzpGp-E974sCM40GRem9MhIlgYDgXaxBQyA&s" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-bs-interval="10000">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRBhJOq89VWwsxPNYfaNnPo6a8gYPvlz14zSg&s" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 border p-2 rounded bg-light">
        <main class="">
            <div class="d-flex">
                <div class="p-2 flex-fill">
                    <img src="https://cdn.idntimes.com/content-images/post/20200421/images-9-bb7389574a779688a7f5075cbbe359db_600x400.jpeg" alt="gambar" class="w-200">
                </div>
                <div class="p-2 flex-fill">
                    <div class="text-start mt-5">
                        <h1 class="fw-bold">
                            Sejarah
                        </h1>
                        <h1>PSMS MEDAN</h1>
                        <h3 class="text-secondary">
                            Penggagas lahirnya PSMS Medan ada 6 tokoh yang mewakili 6 Klub Amatir yang ada di Medan tahun 1950. Keenam tokoh tersebut adalah Adinegoro (Al Wathan), Madja Purba (Sahata), Sulaiman Siregar (PO Polisi), TM Harris (Medan Sport), dr Pierngadi (Deli Matschapij) dan Tedja Singh (India Football Team). Merekalah yang mengkoordinir 23 klub di Medan saat itu untuk mendirikan PSMS Medan pada 21 April 1950.
                        </h3>
                        <a href="" class="text-light fw-bold btn btn-info text">info</a>
                    </div>
                </div>
            </div>
        </main>
    
    </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>        
@endsection