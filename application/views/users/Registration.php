
<div class="container">
  <div class="row">
  <div class="col-md-6">
      <div class="well">
        <img src="<?php echo base_url('images/register.jpg') ?>" alt="">
      </div>

    </div>
    <div class="col-md-6">
    <div class="well">
   <?php echo form_open(); ?>
   <?php echo validation_errors(); ?>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" name="first_name"  placeholder="First Name" value="<?php echo set_value('first_name'); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Last Name " value="<?php echo set_value('last_name'); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="Number" class="form-control"  name="mobile" placeholder="Your Phone number " value="<?php echo set_value('mobile'); ?>">
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox" value="yes" name="terms"> I accept 
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>

<?php echo form_close(); ?>
    </div>
    </div>

  <?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
  </div>
</div>



