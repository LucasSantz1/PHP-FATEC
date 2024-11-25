<x-app-layout>

    <h5>Editar Técnico</h5>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $erro)
                    <li>{{ $erro }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/tecnico/{{ $tecnico->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" class="form-control" value="{{ $tecnico->nome }}" required/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="especialidade" class="form-label">Especialidade:</label>
                <input type="text" name="especialidade" class="form-control" value="{{ $tecnico->especialidade }}"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" name="telefone" class="form-control" value="{{ $tecnico->telefone }}"/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $tecnico->email }}" required/>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="ativo" class="form-label">Ativo:</label>
                <select name="ativo" class="form-control">
                    <option value="1" {{ $tecnico->ativo ? 'selected' : '' }}>Sim</option>
                    <option value="0" {{ !$tecnico->ativo ? 'selected' : '' }}>Não</option>
                </select>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col">
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>
        </div>
    </form>

</x-app-layout>
