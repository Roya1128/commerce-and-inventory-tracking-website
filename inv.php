<?php
include('template1.php');
head('管理系統');
horizontal_bar();
menu();
tbhd('inv');
echo"

                                <tr>
                                   <th>產品名稱</th>
                                    <th>單價</th>
                                    <th>庫存</th>
                                    <th>修改</th>
                                    <th>刪除</th>
                                </tr>
                            </thead>
                            <tbody>";
                            include("connect.php");
                            $sql = "SELECT prodname,unitprice,qty FROM inv ";
                            
                            $result =$connect->query($sql);
                            
                            /* fetch associative array */
                            while ($row = $result->fetch_assoc()) {
                              //printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
                                $prodname=$row['prodname'];
                                $unitprice=$row['unitprice'];
                                $qty=$row['qty'];
                              echo "<tr><TD>$prodname<TD>$unitprice<td>$qty";    
                              echo "<TD><a href=inv.php?op=1&prodname=$prodname><button type='button' class='btn btn-primary'>修改 <i class='bi bi-alarm'></i></button></a>";
                              echo "<TD><a href=\"javascript:if(confirm('確實要刪除[$prodname]嗎?'))location='inv.php?prodname=$prodname&op=5'\"><button type='button' class='btn btn-danger'>刪除 <i class='bi bi-trash'></i></button>";
                            }
tf();
footer();

function display_form($op,$prodname)
  {
    if ($op==3)
    {
      $price="";
      $prodname=""; 
      $qty="";
      $op=4;

    }
    else
    {
        include("connect.php");
        $sql = "SELECT prodname,unitprice,qty FROM inv where prodname='$prodname'";
      
        $result =$connect->query($sql);
        
        /* fetch associative array */
        if ($row = $result->fetch_assoc()) {
            $price=$row['unitprice'];
            $prodname=$row['prodname'];
            $qty=$row['qty'];
             

        }
        $op=2;
    }
    
  
      echo "<div class='modal fade' id='logoutModal2' tabindex='-1' unitprice='dialog' aria-labelledby='exampleModalLabel'
      aria-hidden='true'>";
      echo '<div class="modal-dialog" unitprice="document">';
      echo '<div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">所選產品資料如下</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>';  
      echo "<div class='modal-body'><form action=inv.php method=post>";
      echo "<input type=hidden name=op value=$op><input type=hidden name=on value=$prodname>";
      echo "<div class='mb-3'>
              <label for='exampleFormControlInput1' class='form-label'>產品名稱</label>
              <input type='text' class='form-control' name=prodname id='prodname' placeholder='請輸入名稱' value=$prodname>
              </div>
              <div class='mb-3'>
              <label for='exampleFormControlInput1' class='form-label'>單價</label>
              <input type='text' class='form-control' name=price id='price' placeholder='請輸入價格' value=$price>
              </div>
            <div class='mb-3'>
              <label for='exampleFormControlInput1' class='form-label'>庫存</label>
              <input type='text' class='form-control' name=qty id='qty' placeholder='請輸入數量' value=$qty>
            </div>
            ";
      echo'<div class="modal-footer">
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">儲存</button>           
              <button type="reset" class="btn btn-primary mb-3">取消</button>                            
          </div>
          </div>
          </div>
          </div>
          </div> 
      </div>';
        echo "</form>";
        
}
  ?>
<script>
$(function() {
    $('#logoutModal2').modal('show')
});
</script>  
  <?php
     if(isset($_REQUEST['op']))
     {
       $op=$_REQUEST['op'];   
       switch ($op)
       {
         case 1:  //修改
               $prodname=$_REQUEST['prodname']; 
             
                display_form($op,$prodname);
                
               break;      
         case 2:  //修改資料
                 $unitprice=$_REQUEST['price'];
               $prodname=$_REQUEST['prodname'];
               $on=$_REQUEST['on'];
               $qty=$_REQUEST['qty'];
                   $sql="update inv
                           set unitprice=$unitprice,
                               prodname='$prodname',
                               qty=$qty
                         where prodname='$on'";
                   include("connect.php");
                   include("dbutil.php");
                   include("basic.php");
                   execute_sql($sql);
                   switchto('inv.php');
                   break;
         case 3: //新增
                $prodname="";
                 display_form($op,$prodname);
               break;
         case 4: //新增資料
            $unitprice=$_REQUEST['price'];
            $prodname=$_REQUEST['prodname'];
            $qty=$_REQUEST['qty'];
            
               $sql="insert into inv (unitprice,prodname,qty) 
               values ($unitprice,'$prodname',$qty)";
               include("connect.php");
               include("dbutil.php");
               include("basic.php");
               execute_sql($sql);
               switchto('inv.php');
           

               break;      
         case 5: //刪除資料              
               $prodname=$_REQUEST['prodname']; 
                            
               $sql="delete from inv where prodname='$prodname'";
               include("connect.php");
               include("dbutil.php");
               include("basic.php");
               execute_sql($sql);
               switchto('inv.php');
               break;
 
       }      
  
    }
?>  