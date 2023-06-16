<?php
//Multidimensional array


         $marks = array( 
            "Vijay" => array (
               "physics" => 35,
               "maths" => 30,	
               "chemistry" => 39
            ),
            
            "Deepa" => array (
               "physics" => 30,
               "maths" => 32,
               "chemistry" => 29
            ),
            
            "Ujwal" => array (
               "physics" => 31,
               "maths" => 22,
               "chemistry" => 39
            )
         );
         
         /* Accessing multi-dimensional array values */
         echo "Marks for Vijay in physics : " ;
         echo $marks['Vijay']['physics'] . "<br />"; 
         
         echo "Marks for Deepa in maths : ";
         echo $marks['Deepa']['maths'] . "<br />"; 
         
         echo "Marks for Ujwal in chemistry : " ;
         echo $marks['Ujwal']['chemistry'] . "<br />"; 
      
   
?>