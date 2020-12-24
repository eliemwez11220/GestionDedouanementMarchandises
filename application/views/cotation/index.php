<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Cotations Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('cotation/add'); ?>" class="btn btn-success btn-sm">Ajouter</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Honoraire</th>
						<th>Tva</th>
						<th>Frais Transit</th>
						<th>Seguce</th>
						<th>Montant</th>
						<th>Cot Id</th>
						<th>NumCotation</th>
						<th>DateCotation</th>
						<th>Concernee</th>
						<th>Periode</th>
						<th>Facture</th>
						<th>Marque</th>
						<th>Dgda</th>
						<th>Redevance</th>
						<th>Fpi</th>
						<th>Ogefrem</th>
						<th>Pors Soins</th>
						<th>Intervention</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($cotations as $c){ ?>
                    <tr>
						<td><?php echo $c['honoraire']; ?></td>
						<td><?php echo $c['tva']; ?></td>
						<td><?php echo $c['frais_transit']; ?></td>
						<td><?php echo $c['seguce']; ?></td>
						<td><?php echo $c['montant']; ?></td>
						<td><?php echo $c['cot_id']; ?></td>
						<td><?php echo $c['numCotation']; ?></td>
						<td><?php echo $c['dateCotation']; ?></td>
						<td><?php echo $c['concernee']; ?></td>
						<td><?php echo $c['periode']; ?></td>
						<td><?php echo $c['facture']; ?></td>
						<td><?php echo $c['marque']; ?></td>
						<td><?php echo $c['dgda']; ?></td>
						<td><?php echo $c['redevance']; ?></td>
						<td><?php echo $c['fpi']; ?></td>
						<td><?php echo $c['ogefrem']; ?></td>
						<td><?php echo $c['pors_soins']; ?></td>
						<td><?php echo $c['intervention']; ?></td>
						<td>
                            <a href="<?php echo site_url('cotation/edit/'.$c['']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Editer</a> 
                            <a href="<?php echo site_url('cotation/remove/'.$c['']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Supprimer</a>
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
