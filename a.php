  <?php
session_start();
$email=$_SESSION['email'];
if(isset($_REQUEST['op'])){

  $na=$_REQUEST['name'];
  $numb=$_REQUEST['numb'];
  $kind=$_REQUEST['kind'];
  $pr=$_REQUEST['price'];
  $src=$_REQUEST['src'];
  if ($numb<1) {
    $numb=1;
  }

  $sql="insert into car(email,name,price,num,kind,img)
                    values('$email','$na',$pr,$numb,'$kind',$src)";
  include('connect.php');
  include('dbutil.php');
        
  execute_sql($sql);
  echo "<script>window.location.href='$kind.php';
  </script>";
}


?>
