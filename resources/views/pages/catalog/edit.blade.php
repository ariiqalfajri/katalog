@extends('layouts.master')

@section('title')
    Edit Catalog
@endsection

@section('konten')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Edit Catalog</h2>

            @if ($errors->any())
                <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Form Edit Catalog -->
            <form method="POST" action="/catalog/{{ $catalog->id_katalog }}" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Method PUT untuk update data -->

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="catalog_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catalog Name</label>
                        <input type="text" name="catalog_name" id="catalog_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            value="{{ old('catalog_name', $catalog->nama_katalog) }}" required>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="catalog_description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="catalog_description" name="catalog_description" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300"
                            placeholder="Your description here" required>{{ old('catalog_description', $catalog->deskripsi_katalog) }}</textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="catalog_image"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Image</label>
                        <input type="file" name="catalog_image" id="catalog_image"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50">
                    </div>

                    <div class="sm:col-span-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </form>

            <!-- Tombol Delete -->
            @if (isset($detail_catalog->id_katalog))
                <form action="{{ url('/catalog/' . $catalog->id_katalog) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-4">Delete</button>
                </form>
            @endif

        </div>
    </section>
@endsection
