{{-- /catalog --}}

@extends('layouts.master')

@section('title')
    Detail Page
@endsection

@section('konten')
    <div class="container mx-auto">
        <div class="card bg-base-100 w-96 shadow-sm">
            <figure>
                @if ($detail_catalog->gambar_katalog)
                    <img src="{{ asset($detail_catalog->gambar_katalog) }}" alt="Gambar Katalog"
                        class="w-max h-max object-cover">
                @else
                    <p>Tidak ada gambar</p>
                @endif
            </figure>
            <div class="card-body">
                <h2 class="card-title">{{ $detail_catalog->nama_katalog }}</h2>
                <p>ID Katalog: {{ $detail_catalog->id_katalog }}</p>
                <p>Nama Katalog: {{ $detail_catalog->nama_katalog }}</p>
                <p>Deskripsi: {{ $detail_catalog->deskripsi_katalog }}</p>
                <p>Tanggal Dibuat: {{ $detail_catalog->created_at }}</p>

                

                <div class="card-actions justify-end mt-4">
                    <a href="{{ url('/catalog') }}" class="btn btn-primary">Back to catalog</a>

                    @if (isset($detail_catalog->id_katalog))
                        <a href="{{ url('/catalog/' . $detail_catalog->id_katalog . '/edit') }}" class="btn btn-warning">
                            Edit
                        </a>

                        <form action="{{ url('/catalog/' . $detail_catalog->id_katalog) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
