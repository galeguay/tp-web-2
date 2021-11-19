<nav class="flexSpaceBetween">
    {if $userRol == 2}
        <div>
            <a class="admin" href="products">Productos</a>
            <a class="admin" href="categories">Categorias</a>
            <a class="admin" href="users">Usuarios</a>
        </div>
    {else}
        <div>
            <a href="products">Productos</a>
            <a href="categories">Categorias</a>
        </div>
    {/if}
    {if $userRol == 0}
        <div>
            <a href="logIn">Iniciar Sesión</a>
            <a href="register">Registrarse</a>
        </div>
    {/if}
    {if $userRol != 0}
        <div>
            {if $userRol == 2}
                <span class="resaltado">ADMIN</span>
            {/if}
            <span class="emailUser">{$userEmail}</span>
            {if $userRol == 2}
                <a href="logOut" class="admin">Cerrar Sesión</a>
            {else}
                <a href="logOut">Cerrar Sesión</a>
            {/if}
        </div>
    {/if}
</nav>
