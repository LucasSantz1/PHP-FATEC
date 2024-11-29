<x-app-layout>
    <div class="container mt-6">
        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Novo Atendimento</h5>

        <form action="{{ route('atendimentos.store') }}" method="POST" class="p-4 border rounded bg-light shadow-lg">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="cliente_id" class="form-label font-weight-bold" style="color: #4b3621;">Cliente:</label>
                    <select name="cliente_id" id="cliente_id" class="form-control border rounded bg-white text-dark">
                        @foreach ($clientes as $cliente)
                            <option value="{{ $cliente->id }}">{{ $cliente->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="tecnico_id" class="form-label font-weight-bold" style="color: #4b3621;">Técnico:</label>
                    <select name="tecnico_id" id="tecnico_id" class="form-control border rounded bg-white text-dark">
                        @foreach ($tecnicos as $tecnico)
                            <option value="{{ $tecnico->id }}">{{ $tecnico->nome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="tiposchamados_id" class="form-label font-weight-bold" style="color: #4b3621;">Tipo de Chamado:</label>
                    <select name="tiposchamados_id" id="tiposchamados_id" class="form-control border rounded bg-white text-dark">
                        @foreach ($tiposchamados as $tiposchamado)
                            <option value="{{ $tiposchamado->id }}">{{ $tiposchamado->descricao }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="data_atendimento" class="form-label font-weight-bold" style="color: #4b3621;">Data do Atendimento:</label>
                    <input type="date" name="data_atendimento" id="data_atendimento" class="form-control border rounded bg-white text-dark" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <button type="submit" class="btn btn-primary btn-lg" style="background-color: #6f4e37; border: 2px solid #4b3621; color: white;">
                        Salvar Atendimento
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
