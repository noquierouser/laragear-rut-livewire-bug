<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bug Reproduction</title>

    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.5.0/dist/full.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireStyles
</head>

<body>
    <div class="container mx-auto">
        <nav class="navbar bg-primary text-primary-content rounded-b-lg">
            <div class="flex-1">
                <a href="{{ route('socios.index') }}" class="btn btn-ghost normal-case text-xl">BugCRUD</a>
            </div>

            <div class="flex-none">
                <ul class="menu menu-horizontal p-0">
                    <li>
                        <a href="{{ route('socios.index') }}">Socios</a>
                    </li>

                    <li>
                        <a href="{{ route('socios.create') }}">Agregar socio</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="bg-gray-800 px-6 py-3 my-3 rounded-xl">
            {{ $slot }}
        </div>
    </div>

    @livewireScripts
</body>

</html>