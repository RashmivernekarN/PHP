<?php 
//PHP Array 
/* 
There are three kind of arrays. each array value is accessed using an ID which is called as index
 1. Numeric array - An array with a numeric index. Values are stored and 
 accessed in linear fashion
 2. Associative array - An array with string as index.This stores element 
 values in association with
 key values rather than strict linear index order
 3. Multidimensional array - An array containing one or more arrays and 
 values are accessed using
 multiple indices.


 
 #Example for Numeric array
*/

         /* First method to create array. */
         $numbers = array( 1, 2, 3, 4, 5);
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
         
         /* Second method to create array. */
         $numbers[0] = "one";
         $numbers[1] = "two";
         $numbers[2] = "three";
         $numbers[3] = "four";
         $numbers[4] = "five";
         
         foreach( $numbers as $value ) {
            echo "Value is $value <br />";
         }
      ?>