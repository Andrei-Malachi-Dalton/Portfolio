<?php

    class CashRegister {
        protected $amountInRegister;

        function __construct($amountInRegister){
            $this->amountInRegister = $amountInRegister;
        }

        function _destruct(){

        }

        function set_amountInRegister($amountInRegister){
            $this->amountInRegister = $amountInRegister;
        }
        function get_amountInRegister(){
            return $this->amountInRegister;
        }

        function addMoney($amount){
            $total = $this->amountInRegister + $amount;
            echo "$total";
        }

        function removeMoney($amount){
            if($amount <= $this->amountInRegister){
                return $this->amountInRegister - $amount;
            }else{
                echo "There is not enough funds to remove this amount";
            }
               
        }
    }

    //$money = new CashRegister(50);
    //echo $money->removeMoney(50);
?>