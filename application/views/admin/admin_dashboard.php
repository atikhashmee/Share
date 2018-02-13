<style>
  .mycontainer{
    background: radial-gradient(black 2%, yellow 78%, green 20%);
    border:4px #ccc solid;
    height:100px;
    width:100px;
  }
  .mycontainer h5{
    font-size: 20px;
    color: black;
    font-weight: bolder;
  }
  .mycontainer h5::before{
    content:" ";
    background: black;
    bottom: 10px;
    right: 10px;
  }
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script>
   
$(document).ready(function()
{
  $('.feni').click(function()
  {
      alert("Value test ");
  });
  
});
</script>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="well">
			<h1>All online users</h1>
			<hr>

			<table class="table" >
				<tr>
					<th>sl</th>
					<th>IP Address</th>
					<th>Users Agent</th>
					<th>Last Activities</th>
					<th>Now Online Active</th>
				</tr>

			
		</tr>
					<?php foreach ($ousers as $value)
					 {
					 	$i=0;
					 	$i++;
						?>
						<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value->ip_address; ?></td>
						<td><?php echo $value->user_agent; ?></td>
						<td><?php echo $value->last_activity; ?></td>
						<td><?php echo $value->user_data; ?></td>
						
						
					</tr>
					<?php } ?>
			</table>


			</div>
		</div>

		
	</div>
</div>


<div class="container">
			<div class="row">
				<div class="col-md-6">
		
			<div class="well">
			

			<h1>view of all users</h1>
			<hr>
			<table class="table" >
				<tr>
					<th>sl</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Mobile</th>
					<th>Active status</th>
					<th>Options</th>
				</tr>

			
		</tr>
					<?php foreach ($user as $value)
					 {
					 	
					 
					 	

					 		?>

					 	
						
						<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value->first_name; ?></td>
						<td><?php echo $value->last_name; ?></td>
						<td><?php echo $value->email; ?></td>
						<td><?php echo $value->mobile; ?></td>
						<td><?php echo form_checkbox('newsletter', 'accept', TRUE); ?></td>

						<td><a href="<?php echo base_url() . "index.php/admin_dashboard/user_update/?tab =" . $value->id; ?> ">Edit </a></td>
						<td><a href="#">Delete </a></td>
						
					</tr>
					<?php    } ?>
			</table>
		</div>
			
		</div>

		<div class="col-md-6">
		
			<div class="well">
			<h4>See all Share</h4>
			
			

				<?php foreach($shareuser as  $value) 
				{
					?>
					
					
				<div class="col-md-4">


				 <div class="well">
					
				
					<tr>
					    <td>
					    <div  class="mycontainer feni" >
                      <h5><?php  echo $value->shareid; ?></h5>
                       </div>
                       <button> sell</button>
                       </td>
					    
						
					</tr>
					</div>
					
				</div>
			
						

					
					<?php 
				} ?>
			
				
				
		
		</div>
			
		</div>
			</div>
		</div>




		