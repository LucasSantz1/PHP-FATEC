<x-app-layout>

    <h5>Nova Cliente</h5>

    <form action="/clientes" method="POST">
        @CSRF
        <div class="row">
            <div class="col">
                <label for="nome" class="form-label">Informe o cliente:</label>
                <input type="text" name="nome" class="form-control"/>
            </div>

            <div class="col">
                <label for="telefone" class="form-label">Informe o Telefone:</label>
                <input type="text" name="telefone" class="form-control"/>
            </div>

            <div class="col">
                <label for="cpf" class="form-label">Informe o CPF:</label>
                <input type="text" name="cpf" class="form-control"/>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">
                    Salvar
                </button>
            </div>
        </div>
    </form>

</x-app-layout>