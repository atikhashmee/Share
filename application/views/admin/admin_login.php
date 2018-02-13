
<style>
  tr.spaceUnder > td
{
  padding-bottom: 1em;
}
table{

  border:2px #ccc solid;
}
table tr td{
  border-right:2px #ccc solid;
  border-bottom:2px #ccc solid;
}
</style>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <center>
      <div class="well">
        
        <h3>Admin Login Area</h3>
        <?php  echo form_open('admin_login/admin_login_process');?>
        
        <table cellspacing="10">
          <tr class="spaceUnder">
          <div class="form-group">
    
   
 
            <td><label for="exampleInputEmail1">Email address</label></td>
            <td> <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name="admin_name"></td>
             </div>
          </tr>

          <tr class="spaceUnder">
          <div class="form-group">
    
    
  
            <td><label for="exampleInputPassword1">Password</label></td>
            <td><input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="admin_pass"></td>
            </div>
          </tr>
          <tr class="spaceUnder">
            <td></td>
            <td>
            <button type="submit" class="btn btn-default">Submit</button>
            </td>
          </tr>
        </table>
      
  
  
  
  data_error

    
  

<?php echo form_close(); ?>
<?php  if(isset($data_error))
  {
    echo $data_error; 

    }  ?>

 <?php  if(isset($admin_data_error))
  {
    echo $admin_data_error; 

    }  ?>
    
        
      </div>
      </center>
    </div>
   
  </div>
</div>
