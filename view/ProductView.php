<?php
require_once "controller/CategoryController.php";

class ProductView{

    function renderProducts($products, $isAdmin){
        include_once 'templates/header.php';
        $html =
            '<div class="centrado">
            <h1>Tabla de productos</h1>
            <table>
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>CONTENIDO</th>
                        <th>CATEGORÍA</th>
                        <th></th>
                    </tr>
                </thead><tbody>';
        foreach ($products as $product) {
            $html .=
                '<tr><td>'.$product->nombre.'</td>
                <td>'.$product->contenido.' ml. </td>
                <td>'.$product->categoria.'</td><td>';
            if($isAdmin){
                $html .='<button class="btnEditar" data-id="'.$product->id_producto.'">EDITAR</button>
                <button class="btnBorrar" data-id="'.$product->id_producto.'">BORRAR</button></td></tr>';
            }else{
                $html .='<a href ="product/'.$product->id_producto.'">VER DETALLE</a></td></tr>';
            }
        }
        $html .= '</tbody></thead></table></div>';
        if($isAdmin){
            $html .= '<script type="text/javascript" src="js/products.js"></script>';
        }
        echo $html;
        
        include_once 'templates/footer.php';
    }

    function renderProduct($product){
        include_once 'templates/header.php';
        echo '
        <div class="centrado">
            <h1>'.$product->nombre.'</h1>
            <p>DESCRIPCIÓN: '.$product->descripcion.'</p>
            <p>CONTENIDO: '.$product->contenido.' ml.</p>
            <p>CATEGORIA: '.$product->categoria.'</p>
        </div>';
        include_once 'templates/footer.php';
    }

}