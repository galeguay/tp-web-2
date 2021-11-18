{include file="header.tpl" title='Iniciar Sesión'}
<h1>Iniciar Sesión</h1>
<div class="flexColumna">
<form action="startSession" method="POST">
    <label for="email" >Email</label>
    <input type="password" name="pass" placeholder="Contraseña">
    <label for="pass" >Contraseña</label>
    <input type="password" name="pass" placeholder="Contraseña">
    <input type="submit" value="Iniciar Sesión">
</form>
</div>
{include file="footer.tpl"}