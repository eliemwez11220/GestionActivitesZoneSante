<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Creation d'une nouvelle Activite</h3>
            </div>
            <?php echo form_open('activite/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="centre_relais" class="control-label">Centre concernee</label>
						<div class="form-group">
							<select name="centre_relais" class="form-control">
								<option value="">selectionnez un centre</option>
								<?php 
								foreach($all_centres as $centre)
								{
									$selected = ($centre['centre_id'] == $this->input->post('centre_relais')) ? ' selected="selected"' : "";

									echo '<option value="'.$centre['centre_id'].'" '.$selected.'>'.$centre['nom_centre'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="vaccin_sid" class="control-label">Vaccin</label>
						<div class="form-group">
							<select name="vaccin_sid" class="form-control">
								<option value="">select vaccin</option>
								<?php 
								foreach($all_vaccins as $vaccin)
								{
									$selected = ($vaccin['vacc_id'] == $this->input->post('vaccin_sid')) ? ' selected="selected"' : "";

									echo '<option value="'.$vaccin['vacc_id'].'" '.$selected.'>'.$vaccin['nom'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="nom" class="control-label"><span class="text-danger">*</span>Nom</label>
						<div class="form-group">
							<input type="text" name="nom" value="<?php echo $this->input->post('nom'); ?>" class="form-control" id="nom" />
							<span class="text-danger"><?php echo form_error('nom');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="type_activite" class="control-label">Type Activite</label>
						<div class="form-group">
							<input type="text" name="type_activite" value="<?php echo $this->input->post('type_activite'); ?>" class="form-control" id="type_activite" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_debut" class="control-label"><span class="text-danger">*</span>Date Debut</label>
						<div class="form-group">
							<input type="date" name="date_debut" value="<?php echo $this->input->post('date_debut'); ?>" class="form-control" id="date_debut" />
							<span class="text-danger"><?php echo form_error('date_debut');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date_fin" class="control-label"><span class="text-danger">*</span>Date Fin</label>
						<div class="form-group">
							<input type="date" name="date_fin" value="<?php echo $this->input->post('date_fin'); ?>" class="form-control" id="date_fin" />
							<span class="text-danger"><?php echo form_error('date_fin');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="observation" class="control-label">Observation</label>
						<div class="form-group">
							<textarea name="observation" class="form-control" id="observation"><?php echo $this->input->post('observation'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer cette activite
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>