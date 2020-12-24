<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bonlivraisons Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bonlivraison/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Bon Id</th>
						<th>Declarant Sid</th>
						<th>NumBon</th>
						<th>DateBon</th>
						<th>Concernee</th>
						<th>DateDedouane</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($bonlivraisons as $b){ ?>
                    <tr>
						<td><?php echo $b['bon_id']; ?></td>
						<td><?php echo $b['declarant_sid']; ?></td>
						<td><?php echo $b['numBon']; ?></td>
						<td><?php echo $b['dateBon']; ?></td>
						<td><?php echo $b['Concernee']; ?></td>
						<td><?php echo $b['dateDedouane']; ?></td>
						<td><?php echo $b['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('bonlivraison/edit/'.$b['bon_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('bonlivraison/remove/'.$b['bon_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
