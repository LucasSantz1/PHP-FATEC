<x-app-layout>
    <h5>Novo Tipo de Chamado</h5>

    <form action="/tiposchamados" method="POST">
        @csrf
        <div class="row">
            <div class="col">
                <label for="descricao" class="form-label">Descrição:</label>
                <input 
                    type="text" 
                    name="descricao" 
                    class="form-control" 
                    placeholder="Digite a descrição do tipo de chamado" 
                    required />
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <label for="observacoes" class="form-label">Observações:</label>
                <textarea 
                    name="observacoes" 
                    class="form-control" 
                    rows="3" 
                    placeholder="Adicione observações (opcional)"></textarea>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar Tipo de Chamado
                </button>
                <a href="/tiposchamados" class="btn btn-secondary">
                    Cancelar
                </a>
            </div>
        </div>
    </form>
</x-app-layout>
