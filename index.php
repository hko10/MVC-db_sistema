<?php

$uri_parse = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include "mvc_produto/Controller/ProdutoController.php";
include "mvc_funcionario/Controller/FuncionarioController.php";
include "mvc_categoria_produto/Controller/cat_produtoController.php";
include "mvc_pessoa/Controller/PessoaController.php";

switch ($uri_parse) {

    case "/produto/cadastro":
        ProdutoController::form();
    break;

    case "/produto/save":
        ProdutoController::save();
    break;

    case "/produto/lista":
        ProdutoController::lista();
    break;

    case "/produto/delete":
        ProdutoController::delete();    
    break;


    case "/pessoa/cadastro":
        PessoaController::form();
        // function form()
    break;

    case "/pessoa/lista":
        PessoaController::lista();
    break;

    case "/pessoa/save":
        PessoaController::save();
    break;

    case "/pessoa/delete":
        PessoaController::delete();
    break;


    case "/funcionario/cadastro":
        FuncionarioController::cadastro();
    break;

    case "/funcionario/lista":
        FuncionarioController::lista();
    break;

    case "/funcionario/save":
        FuncionarioController::save();
    break;

    case "/funcionario/delete":
        FuncionarioController::delete();    
    break;


    case "/cat_produto/cadastro":
        cat_produtoController::cadastro();
    break;

    case "/cat_produto/save":
        cat_produtoController::save();
    break;

    case "/cat_produto/lista":
        cat_produtoController::lista();
    break;

    case "/cat_produto/delete":
        cat_produtoController::delete();
    break;

    case "/home":
        include "home.html";
    break;

    default:
        header("Location: /home");
    break;
}