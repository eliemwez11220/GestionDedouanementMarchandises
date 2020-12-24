<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Demandeclients Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('demandeclient/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Dem Id</th>
						<th>Date Demande</th>
						<th>Nom Client</th>
						<th>Telephone</th>
						<th>Motif Demande</th>
						<th>Adresse</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($demandeclients as $d){ ?>
                    <tr>
						<td><?php echo $d['dem_id']; ?></td>
						<td><?php echo $d['date_demande']; ?></td>
						<td><?php echo $d['nom_client']; ?></td>
						<td><?php echo $d['telephone']; ?></td>
						<td><?php echo $d['motif_demande']; ?></td>
						<td><?php echo $d['adresse']; ?></td>
						<td><?php echo $d['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('demandeclient/edit/'.$d['dem_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('demandeclient/remove/'.$d['dem_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
