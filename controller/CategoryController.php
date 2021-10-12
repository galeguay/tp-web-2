<?php
require_once "model/CategoryModel.php";
require_once "view/CategoryView.php";

class CategoryController{
    private $model;
    private $view;

    public function __construct(){
        $this->model = new CategoryModel();
        $this->view = new CategoryView();
    }

    function showCategories(){
        include_once 'templates/header.php';
        $html =
            '<div class="centrado">
            <h1>Tabla de Categorías</h1>
            <table>
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th></th>
                    </tr>
                </thead><tbody>';
        //$categories = getCategories();
        foreach ($categories as $category) {
            $html .=
                '<tr><td>'.$category->nombre.'</td>
                <td><a href ="category/'.$category->id_categoria.'">VER PRODUCTOS</a></td>
                </tr>';
        }
        $html .= '</tbody></thead></table></div>';
        echo $html;
        echo '<script type="text/javascript" src="js/pago.js"></script>';
        include_once 'templates/footer.php';
    }

}