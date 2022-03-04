<main>
    <h1 class="text-6xl my-6 font-bold">
        Create socio
    </h1>

    <section class="my-8">
        <form wire:submit.prevent="save" class="form-control w-1/2">
            <label class="label">
                <span class="label-text">RUT</span>
                @error('socio.rut')
                <span class="label-text-alt text-error">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <input type="text" wire:model.defer="socio.rut" name="rut" id="rut" placeholder="12.345.678-5"
                   class="input input-bordered w-full @error('socio.rut') input-error @enderror" />

            <label class="label">
                <span class="label-text">Nombres</span>
                @error('socio.nombres')
                <span class="label-text-alt text-error">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <input type="text" wire:model="socio.nombres" name="nombres" id="nombres" placeholder="Elmer"
                   class="input input-bordered w-full @error('socio.nombres') input-error @enderror" />

            <label class="label">
                <span class="label-text">Apellidos</span>
                @error('socio.apellidos')
                <span class="label-text-alt text-error">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <input type="text" wire:model="socio.apellidos" name="apellidos" id="apellidos"
                   placeholder="Figueroa Arce" class="input input-bordered w-full @error('socio.apellidos') input-error @enderror" />

            <label class="label">
                <span class="label-text">Dirección</span>
                @error('socio.direccion')
                <span class="label-text-alt text-error">
                    {{ $message }}
                </span>
                @enderror
            </label>
            <textarea name="direccion" id="direccion" rows="4"
                      class="textarea textarea-bordered @error('socio.direccion') textarea-error @enderror"
                      placeholder="Av. Siempreviva 742, Springfield"></textarea>

            <div class="flex justify-between my-3">
                <button type="reset" class="btn btn-ghost">Cancelar</button>
                <button class="btn btn-primary">Agregar</button>
            </div>
        </form>
    </section>
</main>