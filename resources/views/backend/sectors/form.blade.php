<div class="form-group">
  <label for="name">Nombre</label>
  <input type="text" name="name" class="form-control" value="{{ old('name', $sector->name ?? '') }}">
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
<div class="form-group">
  <label for="status">Estado</label>
  {{-- <input type="number" name="status" class="form-control" value="{{ old('status', $sector->status ?? '') }}"> --}}
      <select name="status" class="form-control">
        <option value="1" @if(old('status', $sector->status ?? '') == 1) selected @endif>Activo</option>
        <option value="0" @if(old('status', $sector->status ?? '') == 0) selected @endif>Inactivo</option>
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
