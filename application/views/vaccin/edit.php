<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Vaccin Edit</h3>
            </div>
			<?php echo form_open('vaccin/edit/'.$vaccin['vacc_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="campage_sid" class="control-label">Campagne</label>
						<div class="form-group">
							<select name="campage_sid" class="form-control">
								<option value="">select campagne</option>
								<?php 
								foreach($all_campagnes as $campagne)
								{
									$selected = ($campagne['camp_id'] == $vaccin['campage_sid']) ? ' selected="selected"' : "";

									echo '<option value="'.$campagne['camp_id'].'" '.$selected.'>'.$campagne['designation'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom" class="control-label"><span class="text-danger">*</span>Nom</label>
						<div class="form-group">
							<input type="text" name="nom" value="<?php echo ($this->input->post('nom') ? $this->input->post('nom') : $vaccin['nom']); ?>" class="form-control" id="nom" />
							<span class="text-danger"><?php echo form_error('nom');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type_vaccin" class="control-label">Type Vaccin</label>
						<div class="form-group">
							<input type="text" name="type_vaccin" value="<?php echo ($this->input->post('type_vaccin') ? $this->input->post('type_vaccin') : $vaccin['type_vaccin']); ?>" class="form-control" id="type_vaccin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="tranche_age" class="control-label"><span class="text-danger">*</span>Tranche Age</label>
						<div class="form-group">
							<input type="text" name="tranche_age" value="<?php echo ($this->input->post('tranche_age') ? $this->input->post('tranche_age') : $vaccin['tranche_age']); ?>" class="form-control" id="tranche_age" />
							<span class="text-danger"><?php echo form_error('tranche_age');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo ($this->input->post('date_created') ? $this->input->post('date_created') : $vaccin['date_created']); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_update" class="control-label">Last Update</label>
						<div class="form-group">
							<input type="text" name="last_update" value="<?php echo ($this->input->post('last_update') ? $this->input->post('last_update') : $vaccin['last_update']); ?>" class="has-datetimepicker form-control" id="last_update" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo ($this->input->post('observation') ? $this->input->post('observation') : $vaccin['observation']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>