<?php

echo date('d-M-Y');
echo "<br/>".date('d/m/Y')."<br/>";
echo date('D-m-y');
echo "<br/>".date('d/m/Y H:i:sa');

$now=new DateTime();
echo "<br/>".$now->format('d-M-Y');

?>