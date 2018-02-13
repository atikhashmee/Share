<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="well">
				<?php echo validation_errors(); ?>

				<?php   echo form_open('shares/share_credintial'); ?>
				<table class="table">
					<tr>
						<td><?php  echo form_label("Share Id");?></td>
						<td><?php echo form_input(array('class'=>'form-control','name'=>'shareid'))    ;?></td>
					</tr>
					<tr>
						<td><?php  echo form_label("Share Name");?></td>
						<td><?php echo form_input(array('class'=>'form-control','name'=>'sharename'))    ;?></td>
					</tr>
					<tr>
						<td><?php  echo form_label("Share Description");?></td>
						<td><?php echo form_input(array('class'=>'form-control','name'=>'shared'));?></td>
					</tr>
					<tr>
						<td></td>
						<td><?php   echo form_submit('mysubmit', 'Submit Post!'); ?></td>
					</tr>
				</table>
				
				
					<?php if(isset($submitted))
					{
						echo $submitted ;
						} ?>
				
				
				<?php    echo form_close();  ?>
			</div>
		</div>
	</div>
</div>