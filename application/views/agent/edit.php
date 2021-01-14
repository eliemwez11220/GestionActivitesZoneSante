<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Agent Edition</h3>
            </div>
			<?php echo form_open('agent/edit/'.$agent['agent_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="centre_relais" class="control-label"><span class="text-danger">*</span>Centre</label>
						<div class="form-group">
							<select name="centre_relais" class="form-control">
								<option value="">select centre</option>
								<?php 
								foreach($all_centres as $centre)
								{
									$selected = ($centre['centre_id'] == $agent['centre_relais']) ? ' selected="selected"' : "";

									echo '<option value="'.$centre['centre_id'].'" '.$selected.'>'.$centre['nom_centre'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('centre_relais');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom_agent" class="control-label"><span class="text-danger">*</span>Nom Agent</label>
						<div class="form-group">
							<input type="text" name="nom_agent" value="<?php echo ($this->input->post('nom_agent') ? $this->input->post('nom_agent') : $agent['nom_agent']); ?>" class="form-control" id="nom_agent" />
							<span class="text-danger"><?php echo form_error('nom_agent');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact" class="control-label"><span class="text-danger">*</span>Contact</label>
						<div class="form-group">
							<input type="text" name="contact" value="<?php echo ($this->input->post('contact') ? $this->input->post('contact') : $agent['contact']); ?>" class="form-control" id="contact" />
							<span class="text-danger"><?php echo form_error('contact');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="adresse" class="control-label">Adresse agent</label>
						<div class="form-group">
							<textarea name="adresse" class="form-control" id="adresse"><?php echo ($this->input->post('adresse') ? $this->input->post('adresse') : $agent['adresse']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Enregistrer modifications
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>