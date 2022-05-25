
<div class="container">
    <div class="card card-color">
        <div class="card-header">
            login
        </div>
        <div class="card-body">
            <div class="container col-sm-6">
                <form action="" method="post" class="p-2 p-2 vh-100 justify-content-center aling-item-center">
                    <div class="form-group">
                        <label for="inputNombre">Email</label>
                        <input type="email" name="txtemail" id="inputEmail" value="" class="form-control" aria-describedby="emailHelp" placeholder="ingrese el email" required>
                        <small id="emailHelp" class="form-text text-muted">Por favor ingresa un correo valido</small>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input type="password" name="txtclavse" id="inputPassword" value="" class="form-control" aria-describedby="passwordHelp" placeholder="ingrese una contraseña segura" required>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <div class="form-group">
                        <p class="text-center py-3"> ¿Aun no tienes una cuenta | <a href="index.php?controlador=paginas&accion=registro">registrate</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>