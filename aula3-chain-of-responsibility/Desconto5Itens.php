<?php
    class Desconto5Itens{

        private $proximoDesconto;

        public function desconto(Orcamento $Orcamento){

            if(count($Orcamento->getItens()) >= 5){

                return $Orcamento->getValor() * 0.1;

            }else{

                return $this->proximoDesconto->desconto($Orcamento);

            }

        }

        public function setProximo(Desconto $proximo){
            $this->proximoDesconto = $proximo;
        }

    }