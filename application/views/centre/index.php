<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Centres Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('centre/add'); ?>" class="btn btn-success btn-sm">Creer un nouveau centre</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Centre Id</th>
						<th>Nom Centre</th>
						<th>Contact</th>
						<th>Medecin Responsable</th>
						<th>Ville Centre</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>Adresse</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($centres as $c){ ?>
                    <tr>
						<td><?php echo $c['centre_id']; ?></td>
						<td><?php echo $c['nom_centre']; ?></td>
						<td><?php echo $c['contact']; ?></td>
						<td><?php echo $c['medecin_responsable']; ?></td>
						<td><?php echo $c['ville_centre']; ?></td>
						<td><?php echo $c['date_created']; ?></td>
						<td><?php echo $c['last_update']; ?></td>
						<td><?php echo $c['adresse']; ?></td>
						<td>
                            <a href="<?php echo site_url('centre/edit/'.$c['centre_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('centre/remove/'.$c['centre_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
