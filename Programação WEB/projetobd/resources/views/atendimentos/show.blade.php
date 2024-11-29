<x-app-layout>
    <div class="container mt-6">
        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Detalhes do Atendimento</h5>

        <div class="p-4 border rounded bg-light shadow-lg">
            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="cliente" class="form-label font-weight-bold" style="color: #4b3621;">Cliente:</label>
                    <input type="text" name="cliente" id="cliente" class="form-control border rounded bg-white text-dark" value="{{ $atendimento->cliente->nome }}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="tecnico" class="form-label font-weight-bold" style="color: #4b3621;">Técnico:</label>
                    <input type="text" name="tecnico" id="tecnico" class="form-control border rounded bg-white text-dark" value="{{ $atendimento->tecnico->nome }}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="tipochamado" class="form-label font-weight-bold" style="color: #4b3621;">Tipo de Chamado:</label>
                    <input type="text" name="tipochamado" id="tipochamado" class="form-control border rounded bg-white text-dark" value="{{ $atendimento->tiposchamados->descricao }}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="data_atendimento" class="form-label font-weight-bold" style="color: #4b3621;">Data do Atendimento:</label>
                    <input type="date" name="data_atendimento" id="data_atendimento" class="form-control border rounded bg-white text-dark" value="{{ $atendimento->data_atendimento }}" disabled />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 offset-md-3 text-center">
                    <a href="{{ route('atendimentos.index') }}" class="btn btn-primary btn-lg" style="background-color: #6f4e37; border: 2px solid #4b3621; color: white;">
                        Voltar
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
