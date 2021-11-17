<?php
    /*Exceptions are used to figure out where in the code something has failed.
        Are created inside of functions.
        Are also used to track down bugs in the code
        Normal exception creation
        Exceptions need to be wrapped in a try/catch/finally block
        Try blocks attempt to run the code. If things run smoothly, nothign happens. If something fails, an exception is thrown
        Try blocks have to be accompanied by
        Finally blocks always trigger, regardless of if the code fails or not. 
        Can be used to disconnect from servers or connections that need to be closed*/

        function divide($dividend, $divisor) {
            if ($divisor == 0) {
                throw new Exception("Division by zero");
            }
            return $dividend / $divisor;
        }
        try {
            echo divide(5, 0);
        }catch (Exception $ex) {
            $message = $ex->getMessage();
            echo $message;
        }/*finally {
            echo "Process complete.<br>";
        }*/
    