<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>listing</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<?php include "navbar.php"; ?>
			</div>
			<div class="row">
				<h3 align="center" style="color:green;">Gestion Des Medicaments</h3>
				<div class="col-sm-12">
					<div class="card shadow mb-4">
                        <div class="card-body">
                        	<h4 align="center">LISTE DES MEDICAMENTS</h4>
                        	<h6 class="m-0 font-weight-bold text-primary">
                                <h4 align="center"> 
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addfonction">
                                        AJOUTER UN MEDICAMENT
                                    </button>
                                </h4>
                            </h6>
                            <div class="table-responsive">
                                <table class="table table-striped table-dark" id="table" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Libelle</th>
                                            <th>Code</th>
                                            <th>image</th>
                                            <th>Prix Achat</th>
                                            <th>Prix Vente</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody> 
                                    	<td>1</td>
                                    	<td>EFFERALGAN</td>
                                    	<td>EFF04</td>
                                    	<td>D</td>
                                    	<td>1500</td>
                                    	<td>2500</td>
                                    	<td>DD</td>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?php include "footer.php"; ?>
				</div>
			</div>
		</div>
	</div>

</body>
</html>