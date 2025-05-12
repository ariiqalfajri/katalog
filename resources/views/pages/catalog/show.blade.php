{{-- /catalog --}}

@extends('layouts.master')

@section('title')
    Catalog page
@endsection

@section('konten')
    @if (@session('pesan'))
        <div class="alert alert-info">{{ session('pesan') }}</div>
    @endif
    <div class="flex justify-items-center items-center gap-4 mx-auto flex-wrap">
        <a href="/catalog/create">
            <button class="btn btn-soft btn-primary">Add catalog</button></a>
        <form class="flex-1 max-w-md">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="search" id="default-search" name="keyword"
                    class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search content..." required />
                <button type="submit"
                    class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
            </div>
        </form>
        @if (Request()->keyword != '')
            <a href="/catalog">
                <button class="btn btn-error">Reset</button></a>
        @endif
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
                @forelse ($data_katalog as $catalog)
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

                                <form action="{{ url('/catalog/' . $catalog->id_katalog) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak ada katalog tersedia</td>
                    </tr>
                @endforelse

            </tbody>
        </table>

    </div>
@endsection
