{{--Estado--}}
<div class="row justify-content-end">
  <div class="col-md-2">
    <div class="form-group mb-3">
      <label for="state_id" class="form-label text-left">Estado</label>
      <select name="state_id" id="state_id" class="text-right form-control">

      </select>
    </div>
  </div>
</div>

{{--Titulo--}}
<div class="form-group mb-3">
  <label for="name" class="form-label">Título</label><span class="fs-4 text-danger">*</span>
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
{{--Resumen--}}
<div class="form-group mb-3">
  <label for="resume" class="form-label">Sigla</label><span class="fs-4 text-danger">*</span>
  <textarea id="resume" cols="30" rows="4" name="resume" class="form-control">{{ old('resume', $organism->resume ?? '') }}</textarea>
  @error('resume')
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: '{{ $message }}'
    });
  </script>
  @enderror
</div>
{{--Contenido--}}
<div class="form-group mb-3">
  <label for="content" class="form-label">Contenido</label>
  <textarea id="content" cols="30" rows="4" name="content" class="form-control">{{ old('content', $organism->content ?? '') }}</textarea>
  @error('content')
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: '{{ $message }}'
    });
  </script>
  @enderror
</div>
{{--Link--}}
<div class="form-group mb-3">
  <label for="link" class="form-label">Link</label><span class="fs-4 text-danger">*</span>
  <input type="text" name="link" class="form-control">
  @error('link')
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: '{{ $message }}'
    });
  </script>
  @enderror
</div>
{{-- Fecha de cierre / extendido / pais--}}
<div class="row mb-3">
{{--  fecha --}}
  <div class="col-md-4">
    <label for="expiration" class="form-label">Fecha de cierre </label><span class="fs-4 text-danger">*</span>
    <input type="date" name="expiration" class="form-control">
  </div>
{{--  extendido --}}
  <div class="col-md-4 w-100 d-flex justify-content-center align-items-center">
    <div class="form-check d-flex align-items-center">
      <input class="form-check-input" type="checkbox" value="1" name="extended" id="extended">
      <label class="form-check-label" for="extended">
        Extendido
      </label>
    </div>
  </div>
{{--  Pais --}}
  <div class="col-md-4">
    <div class="form-group mb-3">
      <label for="country_id" class="form-label">País</label><span class="fs-4 text-danger">*</span>
      <select name="country_id" id="country_id" class="form-control">

      </select>
    </div>
  </div>
</div>
{{-- Organismo / Dedicación--}}
<div class="row mb-3">
{{--  Organismo--}}
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="institution_id" class="form-label">Organismo</label><span class="fs-4 text-danger">*</span>
      <select name="institution_id" id="institution_id" class="form-control">

      </select>
    </div>
  </div>
{{--  Dedicación--}}
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="dedication_id" class="form-label">Dedicación</label>
      <select name="dedication_id" id="dedication_id" class="form-control">

      </select>
    </div>
  </div>
</div>

{{-- Formato / Duración--}}
<div class="row mb-3">
  {{--  Formato --}}
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="format_id" class="form-label">Formato</label>
      <select name="format_id" id="format_id" class="form-control">

      </select>
    </div>
  </div>
  {{--  Duración --}}
  <div class="col-md-6">
    <div class="form-group mb-3">
      <label for="duration_id" class="form-label">Duración</label>
      <select name="duration_id" id="duration_id" class="form-control">

      </select>
    </div>
  </div>
</div>

{{--Aclaración--}}
<div class="form-group mb-3">
  <label for="comment" class="form-label">Aclaración</label>
  <input type="text" name="comment" class="form-control">
  @error('comment')
  <script>
    Swal.fire({
      icon: 'error',
      title: 'Error',
      text: '{{ $message }}'
    });
  </script>
  @enderror
</div>

<p class="text-right"><span class="fs-4 text-danger">*</span><small> Campos requeridos</small></p>

@section('js')
  <script>
    // Borrar imagen si se resetea el form
    const imageContainer = document.querySelector('#imgPreview');
    const btnReset = document.getElementById('btnReset');

    if(btnReset){
      btnReset.addEventListener('click',() =>{
        imageContainer.innerHTML='';
      });
    }
    // Mostrar imágen previa al cargar
    const imagePreview =(event)=>{
      const imageContainer = document.querySelector('#imgPreview');
      imageContainer.innerHTML='';
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

