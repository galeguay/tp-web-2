{include file="header.tpl"}
<div class="centrado">
    <h1>Lista de usuarios</h1>
    <table>
        <thead>
            <tr>
                <th>NOMBRE</th>
                <th>EMAIL</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$users item=$user}
                <tr>
                    <td>{$user->nombre}</td>
                    <td>{$user->email}</td>
                    <td><a href ="deleteUser/{$user->id_usuario}" class="btnBorrarUser">ELIMINAR</a></td>
                </tr>
            {/foreach}
        </tbody>
    </table>
</div>
{include file="footer.tpl"}