<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Creation d'un nouveau Centre hospitalier</h3>
            </div>
            <?php echo form_open('centre/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="nom_centre" class="control-label"><span class="text-danger">*</span>Nom Centre</label>
						<div class="form-group">
							<input type="text" name="nom_centre" value="<?php echo $this->input->post('nom_centre'); ?>" class="form-control" id="nom_centre" />
							<span class="text-danger"><?php echo form_error('nom_centre');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="contact" class="control-label"><span class="text-danger">*</span>Contact</label>
						<div class="form-group">
							<input type="text" name="contact" value="<?php echo $this->input->post('contact'); ?>" class="form-control" id="contact" />
							<span class="text-danger"><?php echo form_error('contact');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="medecin_responsable" class="control-label"><span class="text-danger">*</span>Medecin Responsable</label>
						<div class="form-group">
							<input type="text" name="medecin_responsable" value="<?php echo $this->input->post('medecin_responsable'); ?>" class="form-control" id="medecin_responsable" />
							<span class="text-danger"><?php echo form_error('medecin_responsable');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ville_centre" class="control-label">Ville Centre</label>
						<div class="form-group">
							<input type="text" name="ville_centre" value="<?php echo $this->input->post('ville_centre'); ?>" class="form-control" id="ville_centre" />
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="adresse" class="control-label">Adresse centre </label>
						<div class="form-group">
							<textarea name="adresse" class="form-control" id="adresse"><?php echo $this->input->post('adresse'); ?></textarea>
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Enregistrer centre
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>