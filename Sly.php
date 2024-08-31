<?php
function gu(){
  global $connect;
$select="SELECT * FROM user ORDER BY id DESC";
$fg=mysqli_query($connect, $select);
return $fg;
}
$error=['name'=>'','des'=>'','point'=>'','gen'=>''];
 $name='';
  $des='';
  $point=0;

function gn() {

 global $error,$name,$des,$connect;
if (isset($_POST['task'])) {
    if (empty($_POST['name'])) {
    $error['name']="This Field Must Not Be Empty";
    return false;

    }else{
      $name=$_POST['name'];
    }

    if (empty($_POST['des'])) {
      $error['des']="This Field Must Not Be Empty";
      return false;
    }else{
      $des=$_POST['des'];
    }
    if (empty($_POST['point'])) {
    $error['point']="This Field is Required";
    }
    $insert="INSERT INTO task(name,des,point) VALUE ('$name','$des','$point')";
   $query= mysqli_query($connect,$insert);
   if ($query) {
    $error['gen']='New Task Added';
   }else {
    $error['gen']="An Error Occured From Our End";
   }
}

function tasks() {
  global $connect;
  $select="SELECT * FROM task ORDER BY id DESC";
  $query=mysqli_query($connect,$select);
  return $query;
}
gn();