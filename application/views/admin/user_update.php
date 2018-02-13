
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
   
   <?php   foreach ($data2 as  $value):?>
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" name="first_name"   value="<?php echo $value->first_name; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name</label>
    <input type="text" class="form-control" name="last_name"value="<?php echo $value->last_name; ?>">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control"  name="email" value="<?php echo $value->email; ?>">
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Mobile Number</label>
    <input type="Number" class="form-control"  name="mobile"value="<?php echo $value->mobile; ?>">
  </div>
  
  <button type="submit" class="btn btn-default">Submit</button>
<?php endforeach; ?>
<?php echo form_close(); ?>

    </div>
    </div>

  
  </div>
</div>



