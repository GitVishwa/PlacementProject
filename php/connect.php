<?php
if(isset($_POST['submit']))
{ 
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('placement') or die(mysql_error());
 $mail=$_POST['email'];
 $q=mysql_query("select * from test1 where email='".$mail."' ") or die(mysql_error());
 $p=mysql_affected_rows();
 if($p!=0) 
 {
  $res=mysql_fetch_array($q);
  $to=$res['email'];
  $subject='Remind password';
  $message='Your password : '.$res['password']; 
  $headers='From:guruparthiban19@gmail.com';
  $m=mail($to,$subject,$message,$headers);
  if($m)
  {
    echo'Check your inbox';
  }
  else
  {
   echo'mail is not sent';
  }
 }
 else
 {
  echo'Entered mail id is not present';
 }
}
?>