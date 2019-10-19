

<? $referralinfo=new array();
$referralinfo['lastname']=$_POST['rlastname'];
$referralinfo['address']=$_POST['raddress'];
session_start();
$_session['information']=$referralinfo;
?>
