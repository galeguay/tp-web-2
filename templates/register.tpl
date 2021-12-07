{include file="header.tpl" title='Registrar usuario'}
<h1>Registrar Usuario</h1>

<form action="addUser" method="POST">
    <div class="flexColumna">
        <input type="text" name="nombre" placeholder="Nombre">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="pass" placeholder="Contraseña">
        <input type="submit" value="Registrarse" class="btnGreen">
    </div>
</form>

{include file="footer.tpl"}