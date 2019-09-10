<?php

for($i=1;$i<=100;$i++){
    switch($i){
        case($i%3==0 && $i%5==0) :
            echo "Linianos"."<br>"; /* For multiples of 3 and 5*/
            break;        
        case($i%3==0):
            echo "lino"."<br>"; /* For multiples of 3 */
            break;
        case($i%5==0) :
            echo "IT"."<br>"; /* For multiples of 5 */
            break;
        default:
            echo $i."<br>"; /* For all non mutiples of 3 and 5 */
            break;         
    }
}
?>
