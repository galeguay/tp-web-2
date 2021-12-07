{include file="header.tpl" title='Usuarios'}
<div class="flexColumna">
    <h1>Lista de usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th>ROL</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$users item=$user}
                <tr>
                    <td>{$user->nombre}</td>
                    <td>{$user->email}</td>
                    <td>
                    <form action="modifyUserRol/{$user->id_usuario}" method="POST">
                        <select name="rol">
                                {if $user->rol == '1'}
                                    <option value="1" selected>Default</option>
                                    <option value="2">Administrador</option>
                                {/if}
                                {if $user->rol == '2'}
                                    <option value="1">Default</option>
                                    <option value="2" selected>Administrador</option>
                                {/if}
                        </select>
                        <input type="submit" value="MODIFICAR" class="btnOrange">
                    </form>
                    <td><a href ="deleteUser/{$user->email}" class="btnRed">ELIMINAR</a></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{include file="footer.tpl"}