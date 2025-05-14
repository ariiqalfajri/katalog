@extends('layouts.master')

@section('title')
    Add New Catalog Page
@endsection

@section('konten')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Add a new catalog</h2>
            @if ($errors->any())
                <div class="mb-4 p-4 text-sm text-red-700 bg-red-100 rounded-lg" role="alert">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="POST" action="/catalog" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="catalog_name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Catalog Name</label>
                        <input type="text" name="catalog_name" id="catalog_name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                            placeholder="Type catalog name" required>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="catalog_description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="catalog_description" name="catalog_description" rows="8"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300"
                            placeholder="Your description here" required></textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="catalog_image"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload Image</label>
                        <input type="file" name="catalog_image" id="catalog_image"
                            class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                            placeholder="Upload the image" required>
                    </div>

                    <div class="sm:col-span-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
