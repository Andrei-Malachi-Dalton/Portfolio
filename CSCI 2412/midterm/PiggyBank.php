<?php
    include("CashRegister.php");

    class PiggyBank extends CashRegister {
        function removeMoney($amount){
            echo "You cannot simply remove money from a piggy back without smashing it...";
        }

        function breakBank(){
            echo "We smashed the piggy bank and removed $".$this->amountInRegister." from inside.";
            $this->amountInRegister = 0;
        }
    }
   // $piggy = new PiggyBank(50);
    //echo $piggy->removeMoney(50);
    //echo $piggy->breakBank();
?>