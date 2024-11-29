<x-app-layout>

    <h5>Editar Tipo de Chamado</h5>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/tiposchamados/{{ $tiposchamado->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Descrição:</label>
                <input 
                    type="text" 
                    name="descricao" 
                    class="form-control" 
                    value="{{ $tiposchamado->descricao }}" 
                    required />
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="observacoes" class="form-label">Observações:</label>
                <textarea 
                    name="observacoes" 
                    class="form-control" 
                    rows="3">{{ $tiposchamado->observacoes }}</textarea>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                <a href="/tiposchamados" class="btn btn-secondary">Cancelar</a>
            </div>
        </div>
    </form>

</x-app-layout>
