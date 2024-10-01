@extends('layout.master')
@section('title', 'home')

@section('content')
    
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 border p-2 rounded bg-light">
        <main class="">
            <div class="d-flex">
                <div class="p-2 flex-fill">
                    <div class="text-start mt-5">
                        <h1 class="fw-bold">
                            Hello Morern Learner! It's Time To Grow Up 
                        </h1>
                        <h3 class="text-secondary">
                            Amanah Academy siap bantu kamu belajar secara efektif secara efisien dengan mudah
                        </h3>
                        <a href="" class="text-light fw-bold btn btn-info text">info</a>
                    </div>
                </div>
                <div class="p-2 flex-fill">
                    <img src="https://amandemy.co.id/images/landing/section1-picture.png" alt="gambar" class="w-100">
                </div>
              </div>
        </main>
        <iframe width="560" height="315" src="https://youtu.be/mpgq0g18Hj4" frameborder="0"   allowfullscreen></iframe>    
    </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>        
@endsection