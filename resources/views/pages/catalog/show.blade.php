@extends('layouts.master')

@section('title')
    Catalog page
@endsection

@section('konten')
    @if (@session('pesan'))
        <div class="alert alert-info">{{ session('pesan') }}</div>
    @endif
    <div class="container ml-auto px-4 mb-5">
        <a href="/catalog/create" class="flex items-center space-x-3 rtl:space-x-reverse">
            <button class="btn btn-soft btn-primary">Add catalog</button>
        </a>
        <div class="alert alert-info">
            <p>Nama studio: {{ $data_studio['nama'] }}</p>
            <p>Alamat studio: {{ $data_studio['alamat'] }}</p>
        </div>
    </div>
    <div class="overflow-x-auto px-20">
        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nama Katalog</th>
                    <th>Deskripsi</th>
                    <th>Tanggal Dibuat</th>
                </tr>
            </thead>
            <tbody>
                {{-- Looping data dari database --}}
                @foreach ($data_katalog as $catalog)
                    <tr>
                        <td>{{ $catalog->id_katalog }}</td>
                        <td>{{ $catalog->nama_katalog }}</td>
                        <td>{{ $catalog->deskripsi_katalog }}</td>
                        <td>{{ $catalog->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
