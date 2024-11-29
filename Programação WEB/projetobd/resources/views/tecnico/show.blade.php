
<x-app-layout>
    <div class="container mt-6">
        <h5 class="text-center font-weight-bold mb-4" style="color: #4b3621;">Detalhes do Técnico</h5>

        <form action="{{ route('tecnico.destroy', $tecnico->id) }}" method="POST" class="p-4 border rounded bg-light shadow-lg">
            @csrf
            @method('DELETE')

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="nome" class="form-label font-weight-bold" style="color: #4b3621;">Nome:</label>
                    <input type="text" name="nome" id="nome" class="form-control border rounded bg-white text-dark" value="{{ $tecnico->nome }}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="especialidade" class="form-label font-weight-bold" style="color: #4b3621;">Especialidade:</label>
                    <input type="text" name="especialidade" id="especialidade" class="form-control border rounded bg-white text-dark" value="{{ $tecnico->especialidade }}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="email" class="form-label font-weight-bold" style="color: #4b3621;">Email:</label>
                    <input type="email" name="email" id="email" class="form-control border rounded bg-white text-dark" value="{{ $tecnico->email }}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="telefone" class="form-label font-weight-bold" style="color: #4b3621;">Número de Telefone:</label>
                    <input type="text" name="telefone" id="telefone" class="form-control border rounded bg-white text-dark" value="{{ $tecnico->telefone }}" disabled />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6 offset-md-3">
                    <label for="ativo" class="form-label font-weight-bold" style="color: #4b3621;">Ativo:</label>
                    <select name="ativo" id="ativo" class="form-control border rounded bg-white text-dark" disabled>
                        <option value="1" {{ $tecnico->ativo ? 'selected' : '' }}>Sim</option>
                        <option value="0" {{ !$tecnico->ativo ? 'selected' : '' }}>Não</option>
                    </select>
                </div>
            </div>

            
        </form>

        <div class="text-center mt-4">
            <a href="{{ route('tecnico.index') }}" class="btn btn-secondary btn-lg">Voltar à Lista</a>
        </div>
    </div>
</x-app-layout>

<a href="{{ route('clientes.index') }}" class="btn btn-secondary btn-lg">Voltar à Lista</a>