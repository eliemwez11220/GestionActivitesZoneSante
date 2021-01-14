<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Agents Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('agent/add'); ?>" class="btn btn-success btn-sm">Ajouter nouvel agent</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Agent Id</th>
						<th>Centre Relais</th>
						<th>Nom Agent</th>
						<th>Contact</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>Adresse</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($agents as $a){ ?>
                    <tr>
						<td><?php echo $a['agent_id']; ?></td>
						<td><?php echo $a['centre_relais']; ?></td>
						<td><?php echo $a['nom_agent']; ?></td>
						<td><?php echo $a['contact']; ?></td>
						<td><?php echo $a['date_created']; ?></td>
						<td><?php echo $a['last_update']; ?></td>
						<td><?php echo $a['adresse']; ?></td>
						<td>
                            <a href="<?php echo site_url('agent/edit/'.$a['agent_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('agent/remove/'.$a['agent_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
