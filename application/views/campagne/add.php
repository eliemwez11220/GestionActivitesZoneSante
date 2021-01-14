<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Campagne Add</h3>
            </div>
            <?php echo form_open('campagne/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="designation" class="control-label"><span class="text-danger">*</span>Designation</label>
						<div class="form-group">
							<input type="text" name="designation" value="<?php echo $this->input->post('designation'); ?>" class="form-control" id="designation" />
							<span class="text-danger"><?php echo form_error('designation');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type_campagne" class="control-label">Type Campagne</label>
						<div class="form-group">
							<input type="text" name="type_campagne" value="<?php echo $this->input->post('type_campagne'); ?>" class="form-control" id="type_campagne" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_debut" class="control-label"><span class="text-danger">*</span>Date Debut</label>
						<div class="form-group">
							<input type="text" name="date_debut" value="<?php echo $this->input->post('date_debut'); ?>" class="has-datepicker form-control" id="date_debut" />
							<span class="text-danger"><?php echo form_error('date_debut');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_fin" class="control-label"><span class="text-danger">*</span>Date Fin</label>
						<div class="form-group">
							<input type="text" name="date_fin" value="<?php echo $this->input->post('date_fin'); ?>" class="has-datepicker form-control" id="date_fin" />
							<span class="text-danger"><?php echo form_error('date_fin');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_created" class="control-label">Date Created</label>
						<div class="form-group">
							<input type="text" name="date_created" value="<?php echo $this->input->post('date_created'); ?>" class="has-datetimepicker form-control" id="date_created" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="last_update" class="control-label">Last Update</label>
						<div class="form-group">
							<input type="text" name="last_update" value="<?php echo $this->input->post('last_update'); ?>" class="has-datetimepicker form-control" id="last_update" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="description" class="control-label">Description</label>
						<div class="form-group">
							<textarea name="description" class="form-control" id="description"><?php echo $this->input->post('description'); ?></textarea>
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