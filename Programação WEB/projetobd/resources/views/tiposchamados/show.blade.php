<x-app-layout>
    <div class="container mt-6">
        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Detalhes do Tipo de Chamado</h5>

        <form action="{{ route('tiposchamados.destroy', $tiposchamado->id) }}" method="POST" class="p-4 border rounded bg-light shadow-lg">
            @csrf
            @method('DELETE')

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="descricao" class="form-label font-weight-bold" style="color: #4b3621;">Descrição:</label>
                    <input 
                        type="text" 
                        name="descricao" 
                        id="descricao" 
                        class="form-control border rounded bg-white text-dark" 
                        value="{{ $tiposchamado->descricao }}" 
                        disabled />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="observacoes" class="form-label font-weight-bold" style="color: #4b3621;">Observações:</label>
                    <textarea 
                        name="observacoes" 
                        id="observacoes" 
                        class="form-control border rounded bg-white text-dark" 
                        rows="3" 
                        disabled>{{ $tiposchamado->observacoes }}</textarea>
                </div>
            </div>

        </form>

        <div class="text-center mt-4">
            <a href="{{ route('tiposchamados.index') }}" class="btn btn-secondary btn-lg">Voltar à Lista</a>
        </div>
    </div>
</x-app-layout>
