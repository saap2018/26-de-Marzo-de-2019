<h1 class="page-header">
    <?php echo $alm->uid != null ? $alm->name : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
 <li><a href="?c=Usuario">Usuarios</a></li>
  <li class="active"><?php echo $alm->uid != null ? $alm->name : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-usuario" action="?c=Usuario&a=Modificar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="Id" value="<?php echo $alm->iud; ?>" />
    
    <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="nombre" value="<?php echo $alm->username; ?>" class="form-control"/>
    </div>
    
    <div class="form-group">
        <label>Password</label>
        <input type="text" name="clave" value="<?php echo $alm->password; ?>" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Correo</label>
        <input type="text" name="clave" value="<?php echo $alm->email; ?>" class="form-control" />
    </div>
    <hr />
    
    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-usuario").submit(function(){
            return $(this).validate();
        });
    })
</script>