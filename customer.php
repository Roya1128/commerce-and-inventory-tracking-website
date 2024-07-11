<?php
include('template1.php');
head('管理系統');
horizontal_bar();
menu();
tbhd('customer');
echo"

                                <tr>
                                   <th>使用者名稱</th>
                                    <th>電子信箱</th>
                                    <th>密碼</th>
                                    <th>電話</th>
                                    <th>地址</th>
                                    <th>角色代號</th>    
                                    <th>修改</th>
                                    <th>刪除</th>
                                </tr>
                            </thead>
                            <tbody>";
                            include("connect.php");
                            $sql = "SELECT email,role,password,address,username,phone FROM customer where role='1'";
                            
                            $result =$connect->query($sql);
                            
                            /* fetch associative array */
                            while ($row = $result->fetch_assoc()) {
                              //printf("%s (%s)\n", $row["Name"], $row["CountryCode"]);
                                $email=$row['email'];
                                $role=$row['role'];
                                $password=$row['password'];
                                $address=$row['address'];
                                $username=$row['username'];
                                $phone=$row['phone'];
                              echo "<tr><TD>$username<TD>$email<td>$password<TD>$phone<TD>$address<TD>$role";    
                              echo "<TD><a href=customer.php?op=1&email=$email><button type='button' class='btn btn-primary'>修改 <i class='bi bi-alarm'></i></button></a>";
                              echo "<TD><a href=\"javascript:if(confirm('確實要刪除[$email]嗎?'))location='customer.php?email=$email&op=5'\"><button type='button' class='btn btn-danger'>刪除 <i class='bi bi-trash'></i></button>";
                            }
tf();
footer();

function display_form($op,$email)
  {
    if ($op==3)
    {
      $role="";
      $email=""; 
      $address="";
      $password="";
      $phone="";
      $username="";
   

      $op=4;

    }
    else
    {
        include("connect.php");
        $sql = "SELECT role,email,password,address,username,phone FROM customer where email='$email'";
      
        $result =$connect->query($sql);
        
        /* fetch associative array */
        if ($row = $result->fetch_assoc()) {
            $role=$row['role'];
            $email=$row['email'];
            $password=$row['password'];
            $address=$row['address'];
            $username=$row['username'];
            $phone=$row['phone'];
        }
        $op=2;
    }
      echo "<div class='modal fade' id='logoutModal2' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel'
      aria-hidden='true'>";
      echo '<div class="modal-dialog" role="document">';
      echo '<div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">所選用戶資料如下</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>';
      echo "<div class='modal-body'><form action=customer.php method=post>";
      echo "<input type=hidden name=op value=$op>";
          echo "<input type=hidden name='oldemail' value=$email>";
      echo "<div class='mb-3'>
            <div class='mb-3'>
            <label for='exampleFormControlInput1' class='form-label'>使用者名稱</label>
            <input type='text' class='form-control' name=username id='username' placeholder='請輸入名稱' value=$username>
          </div>
              <label for='exampleFormControlInput1' class='form-label'>信箱</label>
              <input type='text' class='form-control' name=email id='email' placeholder='請輸入信箱' value=$email>
              </div>
              <div class='mb-3'>
              <label for='exampleFormControlInput1' class='form-label'>密碼</label>
              <input type='text' class='form-control' name=password id='password' placeholder='請輸入密碼' value=$password>
              </div>
          
            <div class='mb-3'>
            <label for='exampleFormControlInput1' class='form-label'>電話</label>
            <input type='text' class='form-control' name=phone id='phone' placeholder='請輸入電話' value=$phone>
            </div>
            <div class='mb-3'>
            <label for='exampleFormControlInput1' class='form-label'>地址</label>
            <input type='text' class='form-control' name=address id='address' placeholder='請輸入地址' value=$address>
            </div>
            
            <div class='mb-3'>
            <label for='exampleFormControlInput1' class='form-label'>角色代號</label>
            <input type='text' class='form-control' name=role id='role' placeholder='請輸入代號' disabled value=1 >
            </div></div>
            
            ";
      echo'<div class="modal-footer">
            <div class="col-auto">
              <button type="submit" class="btn btn-primary mb-3">儲存</button>           
              <button type="reset" class="btn btn-primary mb-3">取消</button>                            
          </div>
          </div>
          </div>
          </div>
      ';
        echo "</form></div>";
        
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
               $email=$_REQUEST['email']; 
                display_form($op,$email);
                
               break;      
         case 2:  //修改資料
               $oldemail=$_REQUEST['oldemail'];
               $email=$_REQUEST['email'];
               $password=$_REQUEST['password'];
               $address=$_REQUEST['address'];
               $phone=$_REQUEST['phone'];
               $username=$_REQUEST['username'];
             
                   $sql="update customer
                           set role='1',
                               email='$email',
                               password='$password',
                               address='$address',
                               username='$username',
                               phone='$phone'
                         where email='$oldemail'";
                   include("connect.php");
                   include("dbutil.php");
                   include("basic.php");
                   execute_sql($sql);
                  switchto('customer.php');
                   break;
         case 3: //新增
                $email="";
                 display_form($op,$email);
               break;
         case 4: //新增資料
            $role=$_REQUEST['role'];
            $email=$_REQUEST['email'];
            $password=$_REQUEST['password'];
            $address=$_REQUEST['address'];
            $phone=$_REQUEST['phone'];
            $username=$_REQUEST['username'];
        
               $sql="insert into customer (role,email,password,address,phone,username) 
               values ('$role','$email','$password','$address','$phone','$username')";
               include("connect.php");
               include("dbutil.php");
               include("basic.php");
               execute_sql($sql);
               switchto('customer.php');
           

               break;      
         case 5: //刪除資料              
               $role=$_REQUEST['role'];              
               $sql="delete from customer where email='$email'";
               include("connect.php");
               include("dbutil.php");
               include("basic.php");
               execute_sql($sql);
               switchto('customer.php');
               break;
 
       }      
  
    }
?>