<div class="container-fluid row">
    <form class="col-3 p-2">
        <h2 class="text-left text-secondary">Crear nuevo usuario</h2>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control nombre" id="nombre" placeholder="Nombre">
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" name="apellidos" class="form-control apellidos" id="apellidos" placeholder="Apellidos">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control email" id="email" placeholder="Email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña</label>
            <input type="password" name="password" class="form-control password" id="password" placeholder="Password">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="text" name="telefono" class="form-control telefono" id="telefono" placeholder="Telefono">
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input type="text" name="direccion" class="form-control direccion" id="direccion" - placeholder="Dirección">
        </div>
        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <select name="rol" class="form-control rol">
			<option value="0">Normal</option>
			<option value="1">Administrador</option>
		     </select>
        </div>
        <button type="submit" class="btn btn-primary registrar">Registrar</button>
    </form>
    <div class="col-2 p-6">
        <h2 class="text-left text-secondary">Login</h2>
         <form class="col-10 p-100" action="ingresar" method="post">
         <div class="mb-3">
         <label for="exampleInputEmail1" class="form-label">Correo: </label>
         <input type="text" name="usuario" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
     </div>
         <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Contraseña: </label>
          <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1">
         </div>
         <button type="submit" class="btn btn-primary">Ingresar</button>
</form>
<?php
if (isset($resp['error_usuario'])) {
?>
  <div class="alert alert-danger" role="alert">
    <?= $resp['error_usuario']; ?>
  </div>
<?php } ?> 
    </div>
</div>