<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Activites Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('activite/add'); ?>" class="btn btn-success btn-sm">Creer une nouvelle activite</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Acti Id</th>
						<th>Centre Relais</th>
						<th>Vaccin Sid</th>
						<th>Nom</th>
						<th>Type Activite</th>
						<th>Date Debut</th>
						<th>Date Fin</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($activites as $a){ ?>
                    <tr>
						<td><?php echo $a['acti_id']; ?></td>
						<td><?php echo $a['centre_relais']; ?></td>
						<td><?php echo $a['vaccin_sid']; ?></td>
						<td><?php echo $a['nom']; ?></td>
						<td><?php echo $a['type_activite']; ?></td>
						<td><?php echo $a['date_debut']; ?></td>
						<td><?php echo $a['date_fin']; ?></td>
						<td><?php echo $a['date_created']; ?></td>
						<td><?php echo $a['last_update']; ?></td>
						<td><?php echo $a['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('activite/edit/'.$a['acti_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('activite/remove/'.$a['acti_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
