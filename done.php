<?php
  include("template.php");
  menu('');
echo "
<div class='container-fluid'>
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- basic table -->
<div class='row justify-content-md-center'  >

  <div class='col-8' style='z-index:1; padding:70px' > 
        <div class='card'>
            <div class='card-body' >
                
                <div class='table-responsive'  >
                    <table id='zero_config' class='table table-striped table-bordered no-wrap' >
                        <thead>
                            <tr style='text-align:center'>
                                <th style='width:200px'>圖片</th>
                                <th style='width:200px'>名稱</th>
                                <th style='width:200px'>價格</th>
                                <th style='width:200px'>數量</th>
                                <th style='width:200px'>金額</th>



";
if(isset($_REQUEST['username'])){            
    $username=$_REQUEST['username'];
    $phone=$_REQUEST['phone'];
    $address=$_REQUEST['address'];
    $email=$_SESSION['email'];
    $sql="update customer 
    set  username='$username',
    phone='$phone',
    address='$address'
    where email='$email'";
    include("connect.php");
    include("dbutil.php");
  
    execute_sql($sql);
}
include("connect.php");
$sql = "SELECT name,price,num,kind,img FROM car";

$result =$connect->query($sql);
$s=0;
/* fetch associative array */
$username=$_REQUEST['username'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$email=$_SESSION['email'];
while ($row = $result->fetch_assoc()) {
//printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
$name=$row['name'];
$price=$row['price'];
$num=$row['num'];
$kind=$row['kind'];
$src=$row['img'];  
$sum=$price*$num;

echo "<form method=post action=successful.php><input type=hidden name=name value=$name>
<input type=hidden name=email value=$email><input type=hidden name=username value=$username><input type=hidden name=address value=$address><input type=hidden name=phone value=$phone>
<tr style='text-align:center'><TD><img src='./image/$kind/$src.jpg' style=width=70px height=80px>
<TD>$name<td> $price<TD style='width:50px'><input type=text value=$num disabled name=num style='width:70px;text-align:center'><TD >$sum 
";
$s=$sum+$s;
}
echo"
                 </tr>
            </thead>
            </table>
            
        </div>
       <h2 style=text-align:right>總金額:$s 元</h2>
       <div align=right>
    <button type='submit' class='btn btn-success text-white' id=addnew><span class='fa fa-plus-circle'></span> 確定購買</button>   
    </div> 
    </div>
    
    </div>
   
</div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
</div></form>
";











footer();
?>