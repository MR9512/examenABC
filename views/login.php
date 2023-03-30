<div class="welcome-back">
            <div class="message">
                <h2>Bienvenido al Sistema ABC de Marco</h2>
                <p>Si ya tienes una cuenta por favor inicia sesion aqui</p>
                <button class="sign-up-btn">Iniciar Sesion</button>
            </div>
        </div>
    </div>
    <div class="container-form sign-up">
        <form class="formulario">
            <h2 class="create-account">Crear una cuenta</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">Crear una cuenta gratis</p>
            <input type="text" name="nombre" class="form-control nombre" id="nombre" placeholder="Nombre">
            <input type="text" name="apellidos" class="form-control apellidos" id="apellidos" placeholder="Apellidos">
            <input type="email" name="email" class="form-control email" id="email" placeholder="Email">
            <input type="password" name="password" class="form-control password" id="password" placeholder="Password">
            <input type="text" name="telefono" class="form-control telefono" id="telefono" placeholder="Telefono">
            <input type="text" name="direccion" class="form-control direccion" id="direccion" placeholder="Dirección">
            Rol: <select name="rol" class="form-control rol" id="rol" placeholder="Rol">
			<option value="0">Normal</option>
			<option value="1">Administrador</option>
		     </select>
            <button type="submit" class="btn btn-primary registrar">Registrar</button>
        </form>
    <div class="container-form sign-in">
        <form class="formulario" action="ingresar" method="post">
            <h2 class="create-account">Iniciar Sesion</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin' ></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle' ></i>
                </div>
            </div>
            <p class="cuenta-gratis">¿Aun no tienes una cuenta?</p>
            <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Email">
            <input type="password" name="contrasena" class="form-control" id="contrasena" placeholder="Contraseña">
            <button type="submit" class="btn btn-primary">Ingresar</button> 
        </form>
        <?php
            if (isset($resp['error_usuario'])) {
        ?>
               <div class="alert alert-danger" role="alert">
               <?= $resp['error_usuario']; ?>
               </div>
       <?php } ?> 
        <div class="welcome-back">
            <div class="message">
                <h2>Bienvenido de nuevo</h2>
                <p>Si aun no tienes una cuenta por favor registrese aqui</p>
                <button class="sign-in-btn">Registrarse</button>
            </div>
        </div>
    </div>