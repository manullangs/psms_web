@extends('layout.master')
@section('title', 'Manage Player')

@section('content')
    <div class="container mt-lg-4 mb-lg-3">
        <div class="row bg-info rounded px-3 py-3 w-100">
            <div class="d-flex justify-content-between">
                <h2 class="fw-semibold">List Pemain</h2>
                <div class="d-flex justify-content-end">
                    <!-- export excel button -->
                    <a href="{{ route('dashboard.players.export') }}" class="btn btn-md btn-success fw-bold my-auto me-1">Export
                        Excel</a>
                    <a href="{{ route('dashboard.players.add') }}" class="btn btn-md btn-dark fw-bold my-auto me-1">Tambah Pemain</a>
                </div>
            </div>

            @if (Session::get('success'))
                <div class="alert alert-success mt-3">
                    {{ Session::get('success') }}
                </div>
            @endif

            @if (Session::get('error'))
                <div class="alert alert-danger mt-3">
                    {{ Session::get('error') }}
                </div>
            @endif

            <table class="table table-striped w-100 mt-3">
                <thead>
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Stok</th>
                        <th scope="col" class="text-center">Berat</th>
                        <th scope="col" class="text-center">Harga</th>
                        <th scope="col" class="text-center">Kondisi</th>
                        <th scope="col" class="text-center" style="width: 150px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($players as $player)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $player->name }}</td>
                            <td class="text-center">{{ $player->stock }}</td>
                            <td class="text-center">{{ $player->weight }}</td>
                            <td class="text-center">Rp. {{ number_format($player->price, 0, ',', '.') }}</td>
                            @if ($player->condition == 'Baru')
                                <td class="text-center"><div
                                        class="rounded px-3 py-1 bg-success w-50 mx-auto">{{ $player->condition }}</div></td>
                            @else
                                <td class="text-center"><div
                                        class="rounded px-3 py-1 bg-dark text-white w-50 mx-auto">{{ $player->condition }}</div></td>
                            @endif
                            <td class="d-flex">
                                <a href="{{ route('dashboard.players.edit', ['id' => $player->id]) }}"
                                    class="btn btn-warning btn-sm">Update</a>
                                <form action="{{ route('dashboard.players.delete', ['id' => $player->id]) }}" method="POST"
                                    class="ms-1">
                                    @csrf()
                                    <button class="btn btn-sm btn-danger" type="submit" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection