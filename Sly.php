<?php
function gu(){
  global $connect;
$select="SELECT * FROM user ORDER BY id DESC";
$fg=mysqli_query($connect, $select);
return $fg;
}
