@extends('layout.master')
@section('title', 'Edit Pemain')

@section('content')
    <div class="container">
        @if (Session::get('error'))
            <div class="row">
                <div class="col-md-4 offset-4 mt-2 py-2 rounded bg-danger text-white fw-bold">
                    {{ Session::get('error') }}
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-md-4 offset-4 rounded bg-info mt-3 py-3">
                <h2 class="text-center fw-bold" style="font-size: 20px">Edit Data Produk {{ $player->id }}</h2>
                <form class="mt-3"
                    action="{{ route('dashboard.players.update', ['id' => $player->id]) }}"
                    method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Gambar Pemain</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
                            placeholder="Masukkan gambar pemain" value="{{ old('image') }}">
                        @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Nama Pemain</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama"
                            placeholder="Masukkan nama pemain" value="{{ old('nama') ? old('nama') : $player->name }}">
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Berat</label>
                        <input type="number" class="form-control @error('berat') is-invalid @enderror" name="berat"
                            placeholder="Masukkan berat produk"
                            value="{{ old('berat') ? old('berat') : $player->weight }}">
                        @error('berat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Harga</label>
                        <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga"
                            placeholder="Masukkan harga pemain"value="{{ old('harga') ? old('harga') : $player->price }}">
                        @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Stok</label>
                        <input type="number" class="form-control @error('stok') is-invalid @enderror" name="stok"
                            placeholder="Masukkan stok pemain"value="{{ old('stok') ? old('stok') : $player->stock }}">
                        @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-1">
                        <label for="exampleFormControlInput1" class="form-label fw-semibold">Kondisi</label>
                        <select class="form-select form-control @error('kondisi') is-invalid @enderror"
                            aria-label="Default select example" name="kondisi">
                            <option value="Bekas" {{ $player->condition == 'Bekas' ? 'Seleted' : '' }}>Bekas</option>
                            <option value="Baru" {{ $player->condition == 'Baru' ? 'Seleted' : '' }}>Baru</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label fw-semibold">Deskripsi</label>
                        <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                            id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan deskripsi produk yang akan dijual">{{ old('deskripsi') ? old('deskripsi') : $product->description }}</textarea>
                        @error('harga')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="d-flex">
                        <div class="mx-auto">
                            <a href="{{ route('dashboard.players') }}" class="btn btn-warning me-2">
                                Kembali</a>
                            <button class="btn btn-dark mx-auto" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection