{include file="header.tpl" title='Registrar usuario'}
<h1>Registrar Usuario</h1>
<div class="flexColumna">
<form action="addUser" method="POST">
    <label for="email" >Nombre</label>
    <input type="text" name="nombre" placeholder="Nombre">
    <label for="email" >Email</label>
    <input type="email" name="email" placeholder="Email">
    <label for="pass" >Contraseña</label>
    <input type="password" name="pass" placeholder="Contraseña">
    <input type="submit" value="Registrarse">
</form>
</div>
{include file="footer.tpl"}