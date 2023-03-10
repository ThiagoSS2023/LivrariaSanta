<?php
require('connection.php');

function read(){
    $conn = getConnection();

    $sql = 'SELECT * FROM livro';

    $stmt = $conn->prepare($sql);

    $stmt->execute();

    $result = $stmt->fetchAll();
    return $result;
}

function create(){
    $conn = getConnection();

    $sql = 'INSERT INTO livro (nome, paginas, autor, quantidade, preco) VALUE (?, ?, ?, ?, ?)';

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(1, $_POST['nome']);
    $stmt->bindParam(2, $_POST['paginas']);
    $stmt->bindParam(3, $_POST['autor']);
    $stmt->bindParam(4, $_POST['quantidade']);
    $stmt->bindParam(5, $_POST['preco']);

    if($stmt->execute()){
        return('Salvo com sucesso!');
    }else{
        return('Erro ao salvar');
    }
}

function delete(){
    $conn = getConnection();

    $sql = "DELETE FROM livro WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(1, $_GET['id']);

    if($stmt->execute()){
        return('Excluido com sucesso!');
    }else{
        return('Erro ao excluir');
    }
}

function update(){
    $conn = getConnection();

    $sql = "UPDATE livro SET nome = ?, paginas = ?, autor = ?, quantidade = ?, preco = ? WHERE id = ?";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(1, $_POST['nome']);
    $stmt->bindParam(2, $_POST['paginas']);
    $stmt->bindParam(3, $_POST['autor']);
    $stmt->bindParam(4, $_POST['quantidade']);
    $stmt->bindParam(5, $_POST['preco']);

    $stmt->bindParam(6, $_GET['id']);

    if($stmt->execute()){
        return('Update com sucesso!');
    }else{
        return('Erro no Update');
    }
}

function selectWhere(){
    // SELECT com WHERE id = ? 

    $conn = getConnection();

    $sql = 'SELECT * FROM livro WHERE id = ?';

    $stmt = $conn->prepare($sql);

    $stmt-> bindParam(1, $_GET['id']);

    $stmt->execute();

    $result = $stmt->fetchAll();
    return $result;
}