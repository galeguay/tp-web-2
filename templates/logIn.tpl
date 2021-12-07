{include file="header.tpl" title='Iniciar Sesión'}
<h1>Iniciar Sesión</h1>
<section>

    <form action="startSession" method="POST">
        <div class="flexColumna">
            <input type="email" name="email" placeholder="Email">
            <input type="password" name="pass" placeholder="Contraseña">
            <input type="submit" value="Iniciar Sesión" class="btnBlue">
        </div>
    </form>
</section>
{include file="footer.tpl"}