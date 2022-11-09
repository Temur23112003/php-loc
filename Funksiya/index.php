<?php

$n = 6;
    function son($a){
    
        
            if($a==0){
                return 0;
            }
               
            if($a==1){
                return 1;
            }
                
    
            if($a > 1){
                return son($a-1)+son($a-2) ;
            }
      
}
        
    for($i = 0 ; $i <= $n ; $i++)   
    {
     echo son($i)." " ;
    }

?>
