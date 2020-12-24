<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Registredossiers Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('registredossier/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Dossier Id</th>
						<th>Declarant Sid</th>
						<th>NumDossier</th>
						<th>PaysProv</th>
						<th>LieuEntree</th>
						<th>DateEntree</th>
						<th>NationTransp</th>
						<th>ModeTransp</th>
						<th>ValeurDouane</th>
						<th>DroitPercu</th>
						<th>Entrepot</th>
						<th>Apurement</th>
						<th>Liquidation</th>
						<th>Observation</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($registredossiers as $r){ ?>
                    <tr>
						<td><?php echo $r['dossier_id']; ?></td>
						<td><?php echo $r['declarant_sid']; ?></td>
						<td><?php echo $r['numDossier']; ?></td>
						<td><?php echo $r['paysProv']; ?></td>
						<td><?php echo $r['lieuEntree']; ?></td>
						<td><?php echo $r['dateEntree']; ?></td>
						<td><?php echo $r['nationTransp']; ?></td>
						<td><?php echo $r['modeTransp']; ?></td>
						<td><?php echo $r['valeurDouane']; ?></td>
						<td><?php echo $r['DroitPercu']; ?></td>
						<td><?php echo $r['entrepot']; ?></td>
						<td><?php echo $r['apurement']; ?></td>
						<td><?php echo $r['liquidation']; ?></td>
						<td><?php echo $r['observation']; ?></td>
						<td>
                            <a href="<?php echo site_url('registredossier/edit/'.$r['dossier_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('registredossier/remove/'.$r['dossier_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> supprimer</a>
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
