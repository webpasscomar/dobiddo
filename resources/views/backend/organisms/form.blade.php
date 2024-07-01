@section('css')
    <style>
        .imagen {
            width: 150px;
            height: 150px;
            margin-bottom: 30px;
            object-fit: cover;
            border-radius: 5px;
        }
    </style>
@stop


{{-- Nombre --}}
<div class="form-group mb-3">
    <label for="name" class="form-label">Nombre</label><span class="fs-4 text-danger">*</span>
    <input type="text" name="name" class="form-control" value="{{ old('name', $organism->name ?? '') }}">
    @error('name')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ $message }}'
            });
        </script>
    @enderror
</div>
{{-- Sigla --}}
<div class="form-group mb-3">
    <label for="initial" class="form-label">Sigla</label><span class="fs-4 text-danger">*</span>
    <input type="text" name="initial" class="form-control" value="{{ old('initial', $organism->initial ?? '') }}">
    @error('initial')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ $message }}'
            });
        </script>
    @enderror
</div>
{{-- Logo --}}
<div class="form-group mb-3">
    <label for="logo" class="form-label">Logo</label><span class="fs-4 text-danger">*</span>
    <input type="file" name="logo" class="form-control" onchange="imagePreview(event)">
    <p class="ml-1"><small class="text-secondary">Recomendaciones: imágenes jpg ó png de 512px x 512px - tamaño máximo
            de 1mb</small></p>
    @error('logo')
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ $message }}'
            });
        </script>
    @enderror
</div>
{{-- Estado - Mostrar solo al editar --}}
@if ($edit)
    <div class="form-group mb-3">
        <label for="status" class="form-label">Estado</label>
        <select name="status" class="form-control">
            <option value="1" @selected(old('status', $organism->status) == 1)>Activo</option>
            <option value="0" @selected(old('status', $organism->status) == 0)>Inactivo</option>
        </select>
        @error('status')
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: '{{ $message }}'
                });
            </script>
        @enderror
    </div>
@endif
<p class="text-right"><span class="fs-4 text-danger">*</span><small> Campos requeridos</small></p>
<div id="imgPreview">
    @if ($edit)
        <img src="{{ $organism->logo && file_exists(public_path('storage/institutions/' . $organism->logo)) ? asset('storage/institutions/' . $organism->logo) : asset('img/imagen-no-disponible.jpg') }}"
            alt="{{ $organism->name }}" class="imagen">
    @endif
</div>

@section('js')
    <script>
        // Borrar imagen si se resetea el form
        const imageContainer = document.querySelector('#imgPreview');
        const btnReset = document.getElementById('btnReset');

        if (btnReset) {
            btnReset.addEventListener('click', () => {
                imageContainer.innerHTML = '';
            });
        }
        // Mostrar imágen previa al cargar
        const imagePreview = (event) => {
            const imageContainer = document.querySelector('#imgPreview');
            imageContainer.innerHTML = '';
            let file = event.target.files[0];
            let reader = new FileReader();
            reader.onload = (event) => {
                let img = document.createElement('img');
                img.src = event.target.result;
                img.width = 150;
                img.height = 150;
                img.style.marginBottom = "30px";
                img.style.borderRadius = "5px";
                img.style.objectFit = "cover";
                imageContainer.append(img);
            };
            reader.readAsDataURL(file);
        };
    </script>
@endsection
