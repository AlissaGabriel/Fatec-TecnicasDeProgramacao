<?php
    class inicioController{
        public function inicio(){
            echo "Estou na classe controller e executei o método inicio";

            require_once 'Views/menu.html';
        }
    }
?>