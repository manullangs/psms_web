@extends('layout.master')
@section('title', 'Login Page')

@section('content')
    <div class="mx-lg-5 mt-lg-4 mb-lg-3">
        <div class="rounded pt-3 pb-3">
            <h1 class="text-center fw-bold">Halaman Login Pengguna</h1>
            <div class="mt-3 bg-dark mx-auto rounded" style="height: 3px;width: 75px"></div>

            <div class="grid mx-3 mt-4">
                <div class="row row-gap-4 justify-content-center">
                    <div class="col-4">

                        <!-- error message -->
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="card bg-white w-100" >
                            <div class="card-body rounded" alt="100px" style="background-color: rgb(107, 233, 107)">
                                <form action="{{ route('login.authenticate') }}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email address</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                                            name="email" required>
                                        @error('email')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            id="password" name="password" required>
                                        @error('password')
                                            <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Belum punya akun? <a href="{{ route ("register")}}">Daftar Sekarang</a></label>
                                    </div>

                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button type="submit" class="btn btn-lg w-auto" style="background-color:green">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection