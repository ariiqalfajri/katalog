{{-- /catalog --}}

@extends('layouts.master')

@section('title')
    Catalog page
@endsection

@section('konten')
    @if (@session('pesan'))
        <div class="alert alert-info">{{ session('pesan') }}</div>
    @endif
    <div class="container">
        <a href="/catalog/create" class="flex items-center space-x-3 rtl:space-x-reverse">
            <button class="btn btn-soft btn-primary">Add catalog</button>
        </a>
        <div class="">
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
                    <th>Gambar</th>
                    <th>Detail</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_katalog as $catalog)
                    @if (is_object($catalog))
                        <tr>
                            <td>{{ $catalog->id_row }}</td>
                            <td>{{ $catalog->nama_katalog }}</td>
                            <td>{{ $catalog->deskripsi_katalog }}</td>
                            <td>{{ $catalog->created_at }}</td>
                            <td>
                                @if (!empty($catalog->gambar_katalog))
                                    <img src="{{ asset($catalog->gambar_katalog) }}" alt="Gambar Katalog"
                                        class="w-20 h-20 object-cover">
                                @else
                                    Tidak ada gambar
                                @endif
                            </td>
                            <td>
                                <a href="{{ url('/catalog/' . $catalog->id_katalog) }}">
                                    <button class="btn btn-info">Detail</button>
                                </a>
                                
                                <a href="{{ url('/catalog/' . $catalog->id_katalog . '/edit') }}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                            
                                <form action="{{ url('/catalog/' . $catalog->id_katalog) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
