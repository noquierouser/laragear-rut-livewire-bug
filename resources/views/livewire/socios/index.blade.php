<main>
    <h1 class="text-6xl my-6 font-bold">
        Socios
        <small class="text-[0.5em] text-gray-400">
            {{ $socios->count() }} registrados
        </small>
    </h1>

    <section class="my-8">
        <header id="acciones" class="flex gap-8 my-8">
            <div class="flex-none">
                <a href="{{ route('socios.create') }}" class="btn btn-primary">
                    Agregar socio
                </a>
            </div>

            <div class="flex-auto form-control">
                <input wire:model="search" type="search" id="search" name="search"
                       placeholder="Buscar por nombre o RUT…" class="input input-bordered" />
            </div>
        </header>

        <table id="lista-socios" class="table w-full">
            <thead>
                <tr>
                    <th>Socio</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($socios as $socio)
                <tr>
                    <td>
                        <div class="flex items-center space-x-3">
                            <div class="avatar">
                                <div class="mask mask-squircle w-12 h-12">
                                    <img src="https://i.pravatar.cc/48?u={{ $socio->rut }}" />
                                </div>
                            </div>
                            <div>
                                <div class="font-bold">
                                    {{ $socio->nombres }} {{ $socio->apellidos }}
                                </div>
                                <small class="text-sm opacity-50">
                                    {{ $socio->rut }}
                                </small>
                            </div>
                        </div>    
                    </td>
                    <td>
                        <a href="{{ route('socios.edit', $socio) }}" class="btn btn-sm btn-info">Editar</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</main>