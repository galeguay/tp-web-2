{include file="header.tpl" title='Editar Categoría'}
<h1>Editar Categoria</h1>
<form action="updateCategory/{$category->id_categoria}" method="POST">
    <input type="text" name="nombre" value="{$category->nombre}" placeholder="Nombre">
    <input type="submit" value="Guardar">
</form>
{include file="footer.tpl"}