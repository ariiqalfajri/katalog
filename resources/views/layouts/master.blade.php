<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('favicon.png') }}" type="image/x-icon">
</head>

<body>
    <!--navbar-->
    @include('layouts.navbar')

    <!--isi konten-->
    <div>
        @yield('konten')
    </div>

    @include('layouts.footer')

    <!--script click-->
    <script>
        const dropdownToggle = document.querySelector('[data-dropdown-toggle="dropdownNavbar"]');
        const dropdownMenu = document.getElementById('dropdownNavbar');

        dropdownToggle.addEventListener('click', () => {
            const isHidden = dropdownMenu.classList.contains('hidden');

            if (isHidden) {
                dropdownMenu.classList.remove('hidden');
                void dropdownMenu.offsetWidth; // Force reflow
                dropdownMenu.classList.add('opacity-100', 'scale-100', 'translate-x-0');
                dropdownMenu.classList.remove('opacity-0', 'scale-95', '-translate-x-3');
            } else {
                // Mulai animasi sebelum menyembunyikan
                dropdownMenu.classList.add('opacity-0', 'scale-95', '-translate-x-3');
                dropdownMenu.classList.remove('opacity-100', 'scale-100', 'translate-x-0');

                // Tunggu animasi selama 300ms sebelum menyembunyikan
                setTimeout(() => {
                    dropdownMenu.classList.add('hidden');
                }, 300);
            }
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
