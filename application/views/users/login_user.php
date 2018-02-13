

<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="well">
        
        <img src="<?php echo base_url('images/login.jpg') ?>" alt="">
        
      </div>
    </div>
    <div class="col-md-6">
      <div class="well">
       <?php echo validation_errors(); ?>
      <?php echo form_open('login/ci_login_process'); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
  </div>
  
  
  <button type="submit" class="btn btn-default">Submit</button>

<?php echo form_close(); ?>
 <?php  if(isset($data_error))
  {
    echo $data_error; 

    }  ?>

</div>
    </div>
  </div>
</div>
