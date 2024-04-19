<?php

class vinho {

    private $nome;
    private $tipo;
    private $safra;
    private $preco;

    public function getNome(){
        return $this->nome;
    } 

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getTipo(){
        return $this->tipo;
    } 

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }

    public function getSafra(){
        return $this->safra;
    }

    public function setSafra($safra){
        $this->safra = $safra;
    }

    public function getPreco(){
        return $this->preco;
    } 

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function mostrar_vinho(){
        return "<b>Nome:</b> " .$this->nome ."<b> Tipo: </b>". $this->tipo ."<b> Safra: </b>". $this->safra ."<b> Preço: </b>". $this->preco;
    }

    public function verficar_preco($preco){
        $preco = false;

        if($preco > 25){
            $preco = true;
        }

        return $preco;
    }
    
}

?>