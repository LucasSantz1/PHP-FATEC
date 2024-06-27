<?php

function conectarBanco(){
    $conexao = new PDO("mysql:host=localhost; dbname=bancophp", "root", "");
    return $conexao;
}

//-------------------------------------------------------------------------------------------------------------------
function listarClientes(){
    try{
        $sql = "SELECT * FROM clientee";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch(Exception $e){
        return 0;
    }
}


function adicionarCliente($nome, $telefone, $email) {
    try {
        $sql = "INSERT INTO clientee (nome, telefone, email) VALUES (:nome, :telefone, :email) ";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":telefone", $telefone);
        $stmt->bindValue(":email", $email);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}



function consultarClienteId($id) {
    try { 
        $sql = "SELECT * FROM clientee WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    } catch (Exception $e) {
        return 0;
    }
}

function alterarCliente($nome, $telefone, $email, $id) {
    try { 
        $sql = "UPDATE clientee SET nome = :nome, telefone = :telefone, email = :email WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":nome", $nome);
        $stmt->bindValue(":telefone", $telefone);
        $stmt->bindValue(":email", $email);
        return $stmt->execute();
    } catch (Exception $e) {
        return 0;
    }
}



function excluirCliente($id){
    try{ 
        $sql = "DELETE FROM clientee WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}



//-------------------------------------------------------------------------------------------------------------------
function listarEventos(){
    try{
        $sql = "SELECT * FROM Eventos";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch(Exception $e){
        return 0;
    }
}

function adicionarEvento($dataevento, $local){
    $conexao = conectarBanco();
    $stmt = $conexao->prepare("INSERT INTO Eventos (dataevento, local) VALUES (?, ?)");
    $stmt->execute([$dataevento, $local]);
}

function consultarEventoId($id){
    try{ 
        $sql = "SELECT * FROM Eventos WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    } catch (Exception $e){
        return 0;
    }
}

function alterarEvento($id, $dataevento, $local){
    try{ 
        $sql = "UPDATE Eventos SET dataevento = :dataevento, local = :local WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":dataevento", $dataevento);
        $stmt->bindValue(":local", $local);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

function excluirEvento($id){
    try{ 
        $sql = "DELETE FROM Eventos WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

//-------------------------------------------------------------------------------------------------------------------
function listarFornecedores(){
    try{
        $sql = "SELECT * FROM fornecedores";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch(Exception $e){
        return 0;
    }
}

function adicionarFornecedor($tiposervico, $contato){
    $conexao = conectarBanco();
    $stmt = $conexao->prepare("INSERT INTO fornecedores (tiposervico, contato) VALUES (?, ?)");
    $stmt->execute([$tiposervico, $contato]);
}

function consultarFornecedorId($id){
    try{ 
        $sql = "SELECT * FROM fornecedores WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    } catch (Exception $e){
        return 0;
    }
}

function alterarFornecedor($id, $tiposervico, $contato){
    try{ 
        $sql = "UPDATE fornecedores SET tiposervico = :tiposervico, contato = :contato WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        $stmt->bindValue(":tiposervico", $tiposervico);
        $stmt->bindValue(":contato", $contato);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

function excluirFornecedor($id){
    try{ 
        $sql = "DELETE FROM fornecedores WHERE id = :id";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":id", $id);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

//-------------------------------------------------------------------------------------------------------------------
function listarContratos(){
    try{
        $sql = "SELECT * FROM contrato";
        $conexao = conectarBanco();
        return $conexao->query($sql);
    } catch(Exception $e){
        return 0;
    }
}

function adicionarContrato($dataassinatura, $fornecedor){
    $conexao = conectarBanco();
    $stmt = $conexao->prepare("INSERT INTO contrato (dataassinatura, fornecedor) VALUES (?, ?)");
    $stmt->execute([$dataassinatura, $fornecedor]);
}

function consultarContratoId($dataassinatura, $fornecedor){
    try{ 
        $sql = "SELECT * FROM contrato WHERE dataassinatura = :dataassinatura AND fornecedor = :fornecedor";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":dataassinatura", $dataassinatura);
        $stmt->bindValue(":fornecedor", $fornecedor);
        $stmt->execute();
        return $stmt->fetch();
    } catch (Exception $e){
        return 0;
    }
}

function alterarContrato($dataassinatura, $fornecedor, $novadataassinatura, $novofornecedor){
    try{ 
        $sql = "UPDATE contrato SET dataassinatura = :novadataassinatura, fornecedor = :novofornecedor WHERE dataassinatura = :dataassinatura AND fornecedor = :fornecedor";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":dataassinatura", $dataassinatura);
        $stmt->bindValue(":fornecedor", $fornecedor);
        $stmt->bindValue(":novadataassinatura", $novadataassinatura);
        $stmt->bindValue(":novofornecedor", $novofornecedor);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}

function excluirContrato($dataassinatura, $fornecedor){
    try{ 
        $sql = "DELETE FROM contrato WHERE dataassinatura = :dataassinatura AND fornecedor = :fornecedor";
        $conexao = conectarBanco();
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":dataassinatura", $dataassinatura);
        $stmt->bindValue(":fornecedor", $fornecedor);
        return $stmt->execute();
    } catch (Exception $e){
        return 0;
    }
}
?>
