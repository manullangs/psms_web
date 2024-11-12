@extends('layout.master')
@section('title', 'Manage Event')

@section('content')
    <div class="container mt-lg-4 mb-lg-3">
        <div class="row bg-info rounded px-3 py-3 w-100">
            <div class="d-flex justify-content-between">
                <h2 class="fw-semibold">List Event</h2>
                <div class="d-flex justify-content-end">
                    <!-- export excel button -->
                    <a href="{{ route('dashboard.events.export') }}" class="btn btn-md btn-success fw-bold my-auto me-1">Export
                        Excel</a>
                    <a href="{{ route('dashboard.events.add') }}" class="btn btn-md btn-dark fw-bold my-auto me-1">Tambah Event</a>
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
                    @foreach ($events as $event)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $event->name }}</td>
                            <td class="text-center">{{ $event->stock }}</td>
                            <td class="text-center">{{ $event->weight }}</td>
                            <td class="text-center">Rp. {{ number_format($event->price, 0, ',', '.') }}</td>
                            @if ($event->condition == 'Baru')
                                <td class="text-center"><div
                                        class="rounded px-3 py-1 bg-success w-50 mx-auto">{{ $event->condition }}</div></td>
                            @else
                                <td class="text-center"><div
                                        class="rounded px-3 py-1 bg-dark text-white w-50 mx-auto">{{ $event->condition }}</div></td>
                            @endif
                            <td class="d-flex">
                                <a href="{{ route('dashboard.events.edit', ['id' => $event->id]) }}"
                                    class="btn btn-warning btn-sm">Update</a>
                                <form action="{{ route('dashboard.events.delete', ['id' => $event->id]) }}" method="POST"
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