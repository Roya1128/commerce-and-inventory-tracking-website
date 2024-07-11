<?php
include("template.php");
menu('');
$username=$_SESSION['username'];
$email=$_SESSION['email'];
$phone=$_SESSION['phone'];
$address=$_SESSION['address'];
echo "<br>
<div class='row justify-content-md-center'>
    <form method='post' id='detail_form' enctype='multipart/form-data' action='done.php'>						
    <div class='form-group row'>
        <label for='fname'  class='col-sm-3 text-end control-label col-form-label'>姓名</label>
        <div class='col-sm-6'>
        <input type='text' class='form-control' id='qty' name='username'  value='$username' required />
        </div>            
    </div>
    <div class='form-group row'>
    <label for='fname'  class='col-sm-3 text-end control-label col-form-label'>電話</label>
    <div class='col-sm-6'>
        <input type='text' class='form-control'  id='purchaseprice' name='phone'  value='$phone'  required />
    </div>        
</div>    
    <div class='form-group row'>
        <label for='fname'  class='col-sm-3 text-end control-label col-form-label'>地址</label>
        <div class='col-sm-6'>
      <input type='text' class='form-control' id='qty' name='address'  value='$address' required />
      <div align=right>
  <button type='submit' class='btn btn-success text-white' id=addnew><span class='fa fa-plus-circle'></span>確定</button>   
  </div> 
    </div>    
            
  </div>

               
        
  
    <input type='hidden' name='purchaseid' id='_purchaseid' value=1 />							
    <input type='hidden' name='seq' id='_seq' value=1 />							
    <input type='hidden' name='op' id='_op' value=13 />
    

</form>
</div>";
?>