<form method="post" action="" name="signup-form">
    <div class="form-element">
        <label>Nombre</label>
        <input type="text" name="nombre" pattern="[a-zA-Z0-9]+" required />
    </div>
    <div class="form-element">
        <label>Edad</label>
        <input type="number" name="edad" required />
    </div>

    <div class="form-element">
        <label>Sexo</label>
        <input type="sexo" name="sexo" required />
    </div>

    <div class="form-element">
        <label>Numero de Pasaporte</label>
        <input type="number" name="pasaporte" required />
    </div>

    <div class="form-element">
        <label>Nacionalidad</label>
        <input type="text" name="nacionalidad" required />
    </div>

    <div class="form-element">
        <label>Password</label>
        <input type="password" name="password" required />
    </div>
    <button type="submit" name="register" value="register">Register</button>
</form>