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
  <input type="number" name="status" class="form-control" value="{{ old('status', $sector->status ?? '') }}">
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
