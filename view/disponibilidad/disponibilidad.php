
<h1 class="page-header">Parqueaderos utlizados</h1>
<ol class="breadcrumb">
  <li><a href="Login/inicio.php">Principal</a></li>	
</ol>


<table class="table table-striped">
    <thead>
        <tr>
            			<th>Hora de ingreso</th> 
                        <th>Placas </th> 
						<th>Lugar</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            
            <td><?php echo $r->tiempo; ?></td>
            <td><?php echo $r->PlacasVehiculo; ?></td>
            <td><?php echo $r->Lugar; ?></td>
          
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
