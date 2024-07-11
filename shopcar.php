<?php
    include("template.php");
    menu('');
    if(isset($_REQUEST['but'])){
            $name=$_REQUEST['name'];
            $num=$_REQUEST['num'];
            if($num<1){
                $num=1;
            }
            $sql="update car 
                set  num='$num'
                where name='$name'";
            include("connect.php");
            include("dbutil.php");
            execute_sql($sql);
    }
    if(isset($_REQUEST['but1'])){
        $name=$_REQUEST['name'];
        $num=$_REQUEST['num'];
        $sql="delete from car 
            where name='$name'";
        include("connect.php");
        include("dbutil.php");
        execute_sql($sql);   
}
    
    
?>



   <!-- ============================================================== -->
   <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- basic table -->
                <div class="row">
                    
                    <div class="col-12" style='z-index:1; padding:70px' >
                        <div class="card">
                            <div class="card-body" >
                                
                                <div class="table-responsive" >
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr style='text-align:center'>
                                                <th>圖片</th>
                                                <th>名稱</th>
                                                <th>價格</th>
                                                <th>數量</th>
                                                <th>金額</th>
                                                <th>修改</th>
                                                <th>刪除</th>


<?php
  include("connect.php");
  
  $email=$_SESSION['email'];   
  $sql = "SELECT name,price,num,kind,img FROM car where email='$email'";
  
  $result =$connect->query($sql);
  $s=0;
  /* fetch associative array */
  while ($row = $result->fetch_assoc()) {
    //printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
    $name=$row['name'];
    $price=$row['price'];
    $num=$row['num'];
    $kind=$row['kind'];
    $src=$row['img'];  
    $sum=$price*$num;
    
    echo "<form method=post action=shopcar.php><input type=hidden name=name value=$name><tr style='text-align:center'><TD><img src='./image/$kind/$src.jpg' style=width=70px height=80px>
    <TD>$name<td> $price<TD style='width:50px'><input type=text value=$num name=num style='width:70px;text-align:center'><TD >$sum";  
    echo "<TD ><button type='submit' class='btn btn-primary' name=but>修改數量</button>";
    echo "<TD><button type='submit' class='btn btn-danger' name=but1>刪除 <i class='bi bi-trash'></i></button>
    </form>";
    $s=$sum+$s;
  }
 echo"
                                 </tr>
                            </thead>
                            </table>
                            
                        </div>
                       <h2 style=text-align:right>總金額:$s 元</h2>
                         <p align=right><a href=data.php?op=3><button type='button' class='btn btn-success'>購買 <i class='bi bi-alarm'></i></button></a>  </p>
                    </div>
                    
                    </div>
                   
                </div>
                </div>
                <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            </div>
"
?>


                                              
                              



<?php


footer();

?>

