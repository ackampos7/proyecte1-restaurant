<?php
    class Hamburguesa extends Producto{

        function __construct(){
        }

        public function getProductoId(){
            return $this->producto_id;
        }

        public function setProductoId($producto_id){
            $this->producto_id = $producto_id;
        }

        public function getNombre(){
            return $this->nombre_producto;
        }

        public function setNombre($nombre_producto){
            $this->nombre_producto = $nombre_producto;
        }

        public function getPrecioUnidad(){
            return $this->precio_unidad;
        }

        public function setPrecioUnidad($precio_unidad){
            $this->precio_unidad = $precio_unidad;
        }

        public function getCategoriaId(){
            return $this->categoria_id;
        }

        public function setCategoriaId($categoria_id){
            $this->categoria_id = $categoria_id;
        }


        public function getImg()
        {
                return $this->img;
        }

        
        public function setImg($img)
        {
                $this->img = $img;

                return $this;
        }
    }
?>