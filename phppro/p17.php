<?php
/* Associative array*/
         /* First method to associate create array. */
         $salaries = array("Vijay" => 2000, "Deepa" => 1000, "Ujwal" => 500);
         
         echo "Salary of Vijay is ". $salaries['Vijay'] . "<br />";
         echo "Salary of Deepa is ".  $salaries['Deepa']. "<br />";
         echo "Salary of Ujwal is ".  $salaries['Ujwal']. "<br />";
         
         /* Second method to create array. */
         $salaries['Vijay'] = "high";
         $salaries['Deepa'] = "medium";
         $salaries['Ujwal'] = "low";
         
         echo "Salary of Vijay is ". $salaries['Vijay'] . "<br />";
         echo "Salary of Deepa is ".  $salaries['Deepa']. "<br />";
         echo "Salary of Ujwal is ".  $salaries['Ujwal']. "<br />";
      ?>
