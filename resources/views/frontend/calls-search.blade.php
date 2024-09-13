<form action="{{ route('calls') }}" method="GET">
    <div class="container">
        <div class="card shadow mb-4">
            <div class="card-body">

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <input type="search" class="form-control" id="search" name="search"
                            value="{{ request()->search }}" placeholder="Buscar por nombre, resumen">
                    </div>

                    <div class="col-md-3 mb-3">
                        <select class="form-control" id="country_id" name="country_id">
                            <option value="">Todos</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}"
                                    {{ request('country_id') == $country->id ? 'selected' : '' }}>
                                    {{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <select class="form-control" id="format_id" name="format_id">
                            <option value="">Todos</option>
                            @foreach ($formats as $format)
                                <option value="{{ $format->id }}"
                                    {{ request('format_id') == $format->id ? 'selected' : '' }}>
                                    {{ $format->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2 mb-3 d-grid">
                        <button type="submit" class="btn btn_calls-search text-white">Buscar</button>
                        @if (count($filters) !== 0)
                            <a href="{{ route('calls') }}" class="btn btn_calls-search text-white mt-2">Limpiar</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
