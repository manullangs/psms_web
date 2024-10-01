@extends("layout.master")
@section("title","profile")

@section("content")
    <div class="row justify-content-center mt-5">
        <div class="col-md-5 border p-4 rounded bg-light">
            <h1 class="h3 mb-3 fw-normal text-center">Selamat Datang </h1>
    
            <div class="d-flex justify-content-between">
                <div class="w-50">
                    <p class="fw-bold">Nama</p>
                    <p class="fw-bold">Email</p>
                    <p class="fw-bold">Umur</p>
                    <p class="fw-bold">Jenis Kelamin</p>
                    <p class="fw-bold">Tanggal Lahir</p>
                    <p class="fw-bold">Alamat</p>
                </div>
                <div class="w-50">
                    <p>: {{$user->name}} </p>
                    <p>: {{$user->email}} </p>
                    <p>: {{$user->age}} </p>
                    <p>: {{$user->gender}} </p>
                    <p>: {{$user->birth}} </p>
                    <p>: {{$user->address}} </p>
                </div>
            </div>
    
            <div class="mt-3">
                <a href="{{ route("logout")}}" class="w-100 btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
@endsection
