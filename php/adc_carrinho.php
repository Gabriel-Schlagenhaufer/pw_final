<?php

$id = $_POST["id"];

$con = mysqli_connect("localhost", "root", "!sqlintABC12", "temperos");

$jatem = $con->query("select * from carrinho where id_prod = $id");

if ($jatem->num_rows > 0) {
    mysqli_query($con,"update carrinho set qtd = qtd + 1 where id_prod = $id");
    echo json_encode("Mais um no carrinho");
} else {
    mysqli_query($con, "insert into carrinho (id_prod) values($id)");
    echo json_encode("Produto adicionado ao carrinho!");
}

?>