{{-- Estado --}}
<fieldset @disabled($preview)>
  <div class="row justify-content-end">
    <div class="col-md-2">
      <div class="form-group mb-1">
        <label for="state_id" class="form-label text-left">Estado</label>
        <select name="state_id" id="state_id" class="form-control">
          @foreach ($states as $state)
            <option value="{{ $state->id }}" @selected(old('state_id', $call->state_id ?? 1) == $state->id)>{{ $state->name }}</option>
          @endforeach
        </select>
        @error('state_id')
          <script>
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: '{{ $message }}'
            });
          </script>
        @enderror
      </div>
    </div>
  </div>

  {{-- Titulo --}}
  <div class="form-group mb-3">
    <label for="name" class="form-label">Título</label><span class="fs-4 text-danger">*</span>
    <input type="text" name="name" class="form-control" value="{{ old('name', $call->name ?? '') }}">
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
  {{-- Resumen --}}
  <div class="form-group mb-3">
    <label for="resume" class="form-label">Resumen</label><span class="fs-4 text-danger">*</span>
    <textarea id="resume" cols="30" rows="4" name="resume" class="form-control" @disabled($preview)>{{ old('resume', $call->resume ?? '') }}</textarea>
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
  {{-- Contenido --}}
  <div class="form-group mb-3">
    <label for="content" class="form-label">Contenido</label>
    <textarea id="content" cols="30" rows="4" name="content" class="form-control" @disabled($preview)>{{ old('content', $call->content ?? '') }}</textarea>
  </div>
  {{-- Link --}}
  <div class="form-group mb-3">
    <label for="link" class="form-label">Link</label><span class="fs-4 text-danger">*</span>
    <input type="text" name="link" class="form-control" value="{{ old('link', $call->link ?? '') }}">
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
  {{-- Fecha de cierre / extendido / pais --}}
  <div class="row mb-3">
    {{--  fecha --}}
    <div class="col-md-4">
      <label for="expiration" class="form-label">Fecha de cierre </label><span class="fs-4 text-danger">*</span>
      <input type="date" name="expiration" class="form-control"
        value="{{ old('expiration', $call->expiration ?? '') }}">
    </div>
    {{--  extendido --}}
    <div class="col-md-4 w-100 d-flex justify-content-center align-items-center">
      <div class="form-check d-flex align-items-center">
        <input class="form-check-input" type="hidden" value="0" name="extended">
        <input class="form-check-input" type="checkbox" value="1" name="extended" id="extended"
          @checked(old('extended', $call->extended ?? 0))>
        <label class="form-check-label" for="extended">
          Extendido
        </label>
      </div>
    </div>
    {{--  Pais --}}
    <div class="col-md-4">
      <div class="form-group mb-3">
        <label for="country_id" class="form-label">País</label><span class="fs-4 text-danger">*</span>
        {{-- <select name="country_id" id="country_id" class="form-control">
          @foreach ($countries as $country)
            <option value="{{ $country->id }}" @selected(old('country_id', $call->country_id ?? 1) == $country->id)>{{ $country->name }}</option>
          @endforeach
        </select> --}}
        <select name="countries[]" id="countries" class="form-control" multiple>
          @foreach ($countries as $country)
            <option value="{{ $country->id }}"
              {{ in_array($country->id, old('countries', isset($call) ? $call->countries->pluck('id')->toArray() : [])) ? 'selected' : '' }}>
              {{ $country->name }}
            </option>
          @endforeach
        </select>

        @error('country_id')
          <script>
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: '{{ $message }}'
            });
          </script>
        @enderror
      </div>
    </div>
  </div>
  {{-- Organismo / Dedicación --}}
  <div class="row mb-3">
    {{--  Organismo --}}
    <div class="col-md-6">
      <div class="form-group mb-3">
        <label for="institution_id" class="form-label">Organismo</label><span class="fs-4 text-danger">*</span>
        <select name="institution_id" id="institution_id" class="form-control">
          @foreach ($institutions as $institution)
            <option value="{{ $institution->id }}" @selected(old('institution_id', $call->institution_id ?? 1) == $institution->id)>
              {{ $institution->initial }}
            </option>
          @endforeach
        </select>
        @error('institution_id')
          <script>
            Swal.fire({
              icon: 'error',
              title: 'Error',
              text: '{{ $message }}'
            });
          </script>
        @enderror
      </div>
    </div>
    {{--  Dedicación --}}
    <div class="col-md-6">
      <div class="form-group mb-3">
        <label for="dedication_id" class="form-label">Dedicación</label>
        <select name="dedication_id" id="dedication_id" class="form-control">
          @foreach ($dedications as $dedication)
            <option value="{{ $dedication->id }}" @selected(old('dedication_id', $call->dedication_id ?? 1) == $dedication->id)>{{ $dedication->name }}
            </option>
          @endforeach
        </select>
      </div>
    </div>
  </div>

  {{-- Formato / Duración --}}
  <div class="row mb-3">
    {{--  Formato --}}
    <div class="col-md-6">
      <div class="form-group mb-3">
        <label for="format_id" class="form-label">Formato</label>
        <select name="format_id" id="format_id" class="form-control">
          @foreach ($formats as $format)
            <option value="{{ $format->id }}" @selected(old('format_id', $call->format_id ?? 1) == $format->id)>{{ $format->name }}</option>
          @endforeach
        </select>
      </div>
    </div>
    {{--  Duración --}}
    <div class="col-md-6">
      <div class="form-group mb-3">
        <label for="duration_id" class="form-label">Duración</label>
        <select name="duration_id" id="duration_id" class="form-control">
          @foreach ($durations as $duration)
            <option value="{{ $duration->id }}" @selected(old('duration_id', $call->duration_id ?? 1) == $duration->id)>{{ $duration->name }}
            </option>
          @endforeach
        </select>
      </div>
    </div>
  </div>

  {{-- Aclaración --}}
  <div class="form-group mb-3">
    <label for="comment" class="form-label">Aclaración</label>
    <input type="text" name="comment" class="form-control" value="{{ old('comment', $call->comment ?? '') }}">
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

</fieldset>
{{-- se oculta el text power by ckeditor que aparece al hacer focus en el textarea con ckeditor --}}
@push('css')
  <style>
    .ck.ck-balloon-panel.ck-powered-by-balloon[class*=position_border] {
      display: none;
    }
  </style>
@endpush


@push('js')
  {{--  // CDN Provisorio para el uso de ck editor y lenguaje español --}}
  <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
  <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/translations/es.js"></script>


  <script>
    // Implementación de Ckeditor 5 para los campos resumen y contenido
    document.querySelectorAll('#resume, #content').forEach((editor) => {
      ClassicEditor
        .create(editor, {
          language: 'es',
          toolbar: ['undo', 'redo', '|', 'heading', '|', 'bold', 'italic', '|', 'link', '|',
            'bulletedList',
            'numberedList', '|', 'blockQuote', '|', 'indent', 'outdent'
          ],
          heading: {
            options: [{
                model: 'paragraph',
                title: 'Paragraph',
                class: 'ck-heading_paragraph'
              },
              {
                model: 'heading1',
                view: 'h1',
                title: 'Heading 1',
                class: 'custom-heading'
              },
              {
                model: 'heading2',
                view: 'h2',
                title: 'Heading 2',
                class: 'custom-heading'
              }
            ]
          },
        })
        .then(editor => {
          const resume = document.querySelector('#resume').disabled;
          const content = document.querySelector('#content').disabled;
          // console.log(resume, ' ', content);
          if (resume && content) {
            editor.enableReadOnlyMode('unique_id');
          } else {
            editor.disableReadOnlyMode('unique_id');
          }
        })
        .catch(error => {
          console.error(error);
        });
    });
  </script>
@endpush
