<x-app-layout>
    <h5>Novo Técnico</h5>

    <form action="/tecnico" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o nome:</label>
                <input type="text" name="nome" class="form-control" placeholder="Digite o nome completo" required />
            </div>

            <div class="col">
                <label for="especialidade" class="form-label">Informe a especialidade:</label>
                <input type="text" name="especialidade" class="form-control" placeholder="Digite a especialidade" />
            </div>

            <div class="col">
                <label for="telefone" class="form-label">Informe o telefone:</label>
                <input type="text" name="telefone" class="form-control" placeholder="Digite o número de telefone" required />
            </div>
        </div>

        <div class="row">
            <div class="col">
                <label for="email" class="form-label">Informe o email:</label>
                <input type="email" name="email" class="form-control" placeholder="Digite o email" required />
            </div>

            <div class="col">
                <label for="ativo" class="form-label">Ativo:</label>
                <select name="ativo" class="form-control">
                    <option value="1" selected>Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar Técnico
                </button>
            </div>
        </div>
    </form>
</x-app-layout>
