<?php
  $id=$_SESSION['user']['id'];
function getScore(){
    global $connect,$id;
   
$selectAllScores="SELECT * FROM user  ORDER BY points DESC ";
return mysqli_query($connect,$selectAllScores);

}

function verify(){
   
     global $connect,$id;

if(isset($_POST['verify'])){
   
    $code=$_POST['code'];
    $select="SELECT * FROM codes WHERE user_id='$id' AND code='$code' LIMIT 1";
   $ret= mysqli_query($connect,$select);


   if(mysqli_num_rows($ret) !==0){
    $del="DELETE FROM codes WHERE user_id='$id' AND code='$code' ";
    mysqli_query($connect,$del);

    $sef="SELECT * FROM user WHERE id='$id' LIMIT 1 ";
    $fg=mysqli_query($connect,$sef);
    $ed=mysqli_fetch_assoc($fg);
    $p=$ed['points']+10;

    $update="UPDATE user SET verified='true', points='$p' WHERE id='$id'";
    mysqli_query($connect,$update);
    $_SESSION['user']['verified']="true";

   }


}
}
verify();
