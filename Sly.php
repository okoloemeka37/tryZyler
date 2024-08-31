<?php
function gu(){
  global $connect;
$select="SELECT * FROM user";
$fg=mysqli_query($connect, $select);
return $fg;
}
