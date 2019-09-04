<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command
{
 
    protected $signature = 'app:popular';
    
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
//        $categoria = new App\Categoria();
//        $categoria->nome_categoria= "Eletrônicos";
//        $categoria->save();
//        
//        $arrayCategorias [] = "Categoria 1";
//        $arrayCategorias [] = "Categoria 2";
//        $arrayCategorias [] = "Categoria 3";
//        
//        foreach($arrayCategorias as $cat){
//            $categoria = new App\Categoria();
//            $categoria->nome_categoria = $cat;
//            $categoria->save();           
//        }
        
//        $arrayProdutos [0]['nome']= "Calculadora";
//        $arrayProdutos [0]['descricao']= "teste";
//        $arrayProdutos [0]['valor']= "20";
//        $arrayProdutos [0]['categoria']= "1";
//        
//        
//        $arrayProdutos [1]['nome']= "Capa celular";
//        $arrayProdutos [1]['descricao']= "teste";
//        $arrayProdutos [1]['valor']= "15";
//        $arrayProdutos [1]['categoria']= "1";
//        
//        $arrayProdutos [2]['nome']= "Teclado";
//        $arrayProdutos [2]['descricao']= "teste";
//        $arrayProdutos [2]['valor']= "10";
//        $arrayProdutos [2]['categoria']= "1";
//        
//        $arrayProdutos [3]['nome']= "Mouse";
//        $arrayProdutos [3]['descricao']= "teste";
//        $arrayProdutos [3]['valor']= "3";
//        $arrayProdutos [3]['categoria']= "1";
//        
//        $arrayProdutos [4]['nome']= "Celular";
//        $arrayProdutos [4]['descricao']= "teste";
//        $arrayProdutos [4]['valor']= "6";
//        $arrayProdutos [4]['categoria']= "1";
//            
//         foreach($arrayProdutos as $pro){
//            $produto = new App\Produto();
//            $produto-> nome_produto = $pro['nome'];
//            $produto-> descricao_produto = $pro['descricao'];
//            $produto-> valor_produto = $pro['valor'];
//            $produto-> id_categoria = $pro['categoria'];
//            $produto->save();           
//        }
//        
         
        $arrayClientes [0]['nome']= "Capa celular";
        $arrayClientes [0]['cpf']= "teste";
        $arrayClientes [0]['numero']= "15";
        $arrayClientes [0]['endereco']= "1";
        $arrayClientes [0]['bairro']= "1";
        $arrayClientes [0]['cidade']= "1";
        $arrayClientes [0]['uf']= "1";
        $arrayClientes [0]['telefone']= "1";
        
        $arrayClientes [1]['nome']= "Capa celular";
        $arrayClientes [1]['cpf']= "teste";
        $arrayClientes [1]['numero']= "15";
        $arrayClientes [1]['endereco']= "1";
        $arrayClientes [1]['bairro']= "1";
        $arrayClientes [1]['cidade']= "1";
        $arrayClientes [1]['uf']= "1";
        $arrayClientes [1]['telefone']= "1";
        
        $arrayClientes [1]['nome']= "Capa celular";
        $arrayClientes [1]['cpf']= "teste";
        $arrayClientes [1]['numero']= "15";
        $arrayClientes [1]['endereco']= "1";
        $arrayClientes [1]['bairro']= "1";
        $arrayClientes [1]['cidade']= "1";
        $arrayClientes [1]['uf']= "1";
        $arrayClientes [1]['telefone']= "1";
        
        $arrayClientes [1]['nome']= "Capa celular";
        $arrayClientes [1]['cpf']= "teste";
        $arrayClientes [1]['numero']= "15";
        $arrayClientes [1]['endereco']= "1";
        $arrayClientes [1]['bairro']= "1";
        $arrayClientes [1]['cidade']= "1";
        $arrayClientes [1]['uf']= "1";
        $arrayClientes [1]['telefone']= "1";
        
        $arrayClientes [1]['nome']= "Capa celular";
        $arrayClientes [1]['cpf']= "teste";
        $arrayClientes [1]['numero']= "15";
        $arrayClientes [1]['endereco']= "1";
        $arrayClientes [1]['bairro']= "1";
        $arrayClientes [1]['cidade']= "1";
        $arrayClientes [1]['uf']= "1";
        $arrayClientes [1]['telefone']= "1";
            
         foreach($arrayClientes as $cli){
            $cliente = new App\Cliente();
            $cliente-> nome_produto = $cli['nome'];
            $cliente-> cliente_cpf = $cli['cpf'];
            $cliente-> cliente_numero = $cli['numero'];
            $cliente-> cliente_endereco = $cli['endereco'];
            $cliente-> cliente_bairro = $cli['bairro'];
            $cliente-> cliente_cidade = $cli['cidade'];
            $cliente-> cliente_uf = $cli['uf'];
            $cliente-> cliente_telefone = $cli['telefone'];
            
            $cliente->save();           
        }
        
    }
}
