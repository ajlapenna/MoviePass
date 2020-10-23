<?php 
namespace Controllers;

    class ProbandoController {
    
    function probar(){
   
        $list = [1,2,3,4,5,6,7,8,9];

        $count=0;
        $count2=0;
        while($count<=3){
            while($count2<$count*3){
                echo $list[$count2];
                $count2 ++;
            }
            echo "<br>";
            $count++;
        }
 

    }
}
?>