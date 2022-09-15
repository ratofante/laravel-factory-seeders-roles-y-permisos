<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <title>Document</title>
</head>
<body>
    <!-- Jumbotron -->
<div class="p-6 shadow-lg rounded-lg bg-gray-100 text-gray-700">
    <h2 class="font-semibold text-3xl mb-5">Team-Task-Dashboard</h2>
    <p>
        Show records from Team-Task-Manager Database
    </p>
</div>
<!-- Jumbotron -->
    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
            <table class="w-full">
                <thead>
                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                    <th class="px-4 py-3">Usuario</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Permisos</th>
                    <th class="px-4 py-3">Fecha Ingreso</th>
                </tr>
                </thead>
                <tbody class="bg-white">
                @foreach ($users as $user)
                    <tr class="text-gray-700">
                        <td class="px-4 py-3 border">
                        <div class="flex items-center text-sm">
                            <div class="relative w-8 h-8 mr-3 rounded-full md:block">
                            <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                            </div>
                            <div>
                            <p class="font-semibold text-black"> {{ $user->name }}</p>
                            <p class="text-xs text-gray-600 capitalize"> {{ $user->rols[0]->rol }} </p>
                            </div>
                        </div>
                        </td>
                        <td class="px-4 py-3 text-ms font-semibold border">{{ $user->email }}</td>
                        <td class="px-4 py-3 text-xs border">
                            @if ($user->rols[0]->id === 1)
                                <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-sm"> Gestión </span>
                            @endif
                            @if ($user->rols[0]->id != 3)
                                <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm"> Editar </span>
                            @endif
                            <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Publicar </span>
                        </td>
                        <td class="px-4 py-3 text-sm border">{{ date("d-m-Y", strtotime($user->created_at)) }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
</section>


</body>
</html>
