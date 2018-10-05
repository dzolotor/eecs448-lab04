
<?php 
for ($row = 0; $row <= 100; $row++) {
    
    for ($col = 0; $col <= 100; $col++) {
        if($col == 0){
            echo "$row";

            if(strlen($row) == 1){
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
            }else if(strlen($row) == 2){
                echo "&nbsp;&nbsp;&nbsp;&nbsp";
            }else if(strlen($row) == 3){
                echo "&nbsp;&nbsp";
            }




        }else if($row == 0){
            echo "$col";

            if(strlen($col) == 1){
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
            }else if(strlen($col) == 2){
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
            }else if(strlen($col) == 3){
                echo "&nbsp;&nbsp;&nbsp";
            }


        }else{
            $mult = $row * $col;            
            echo "$mult";

            if(strlen($mult) == 1){
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
            }else if(strlen($mult) == 2){
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
            }else if(strlen($mult) == 3){
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp";
            }else if(strlen($mult) == 4){
                echo "&nbsp;&nbsp;&nbsp;&nbsp";
            }else if(strlen($mult) == 5){
                echo "&nbsp;&nbsp";
            }



        }
    }
        echo "<br>";
} 
?>
