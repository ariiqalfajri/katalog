<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Contact Page</title>
</head>

<body>
    <!--navbar-->
    @include('layouts.navbar')


    <h1>ini halaman contact</h1>

    <div class="card card-border bg-base-100 w-96">
        <div class="card-body">
            <h2 class="card-title">Title</h2>   
            ini adalah narahubung ke-{{ $nomer }}
            <div class="card-actions justify-end">
                <button class="btn btn-primary">Say hi!</button>
            </div>
        </div>
    </div>

    <!--script click-->
    <script>
        const dropdownToggle = document.querySelector('[data-dropdown-toggle="dropdownNavbar"]');
        const dropdownMenu = document.getElementById('dropdownNavbar');
    
        dropdownToggle.addEventListener('click', () => {
            const isHidden = dropdownMenu.classList.contains('hidden');
    
            if (isHidden) {
                dropdownMenu.classList.remove('hidden');
                // force reflow to apply transition
                void dropdownMenu.offsetWidth;
                dropdownMenu.classList.add('opacity-100', 'scale-100', 'translate-x-0');
                dropdownMenu.classList.remove('opacity-0', 'scale-95', '-translate-x-3');
            } else {
                dropdownMenu.classList.add('opacity-0', 'scale-95', '-translate-x-3');
                dropdownMenu.classList.remove('opacity-100', 'scale-100', 'translate-x-0');
                // Wait for animation to finish before hiding
                setTimeout(() => dropdownMenu.classList.add('hidden'), 300);
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>

</html>
