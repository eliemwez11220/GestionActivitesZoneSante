<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Vaccins Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('vaccin/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Vacc Id</th>
						<th>Campage Sid</th>
						<th>Nom</th>
						<th>Type Vaccin</th>
						<th>Tranche Age</th>
						<th>Date Created</th>
						<th>Last Update</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($vaccins as $v){ ?>
                    <tr>
						<td><?php echo $v['vacc_id']; ?></td>
						<td><?php echo $v['campage_sid']; ?></td>
						<td><?php echo $v['nom']; ?></td>
						<td><?php echo $v['type_vaccin']; ?></td>
						<td><?php echo $v['tranche_age']; ?></td>
						<td><?php echo $v['date_created']; ?></td>
						<td><?php echo $v['last_update']; ?></td>
						<td><?php echo $v['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('vaccin/edit/'.$v['vacc_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('vaccin/remove/'.$v['vacc_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
