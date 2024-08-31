<?php
function gu(){
  global $connect;
$select="SELECT * FROM user DESC";
$fg=mysqli_query($connect, $select);
return $fg;
}
