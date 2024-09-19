<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
    echo "<h3>Example for __METHOD__</h3>";  
    class method {    
        public function __construct() {    
            //print method::__construct    
                echo __METHOD__ . "<br><br>";   
            }    
        public function meth_fun(){    
            //print method::meth_fun    
                echo __METHOD__;   
        }    
    }    
    $a = new method;    
    $a->meth_fun();  
?>  
</body>
</html>