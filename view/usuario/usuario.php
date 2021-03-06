<h1 class="page-header">Usuarios registrados</h1>
<ol class="breadcrumb">
  <li><a href="Login/inicio.php">Principal</a></li>
</ol>
<div class="well well-sm text-right">
    <a class="btn btn-primary" href="Login/registro.php">Nuevo usuario</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Nombre de usuario</th>
            <th>Password</th>
            <th>Correo</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->username; ?></td>
            <td><?php echo $r->password; ?></td>
            <td><?php echo $r->email; ?></td>
            <td><?php echo $r->name; ?></td>
            
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=Usuario&a=Eliminar&uid=<?php echo $r->uid; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table> 
