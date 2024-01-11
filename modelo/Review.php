<?php

    class Review {

        protected $review_id;
        protected $usuario_id;
        protected $pedido_id;
        protected $nombre_usuario;
        protected $apellidos_usuario;
        protected $titulo;
        protected $cuerpo;
        protected $fecha;
        protected $puntuacion;

        /**
         * Get the value of review_id
         */ 
        public function getReview_id()
        {
                return $this->review_id;
        }

        /**
         * Set the value of review_id
         *
         * @return  self
         */ 
        public function setReview_id($review_id)
        {
                $this->review_id = $review_id;

                return $this;
        }

        /**
         * Get the value of usuario_id
         */ 
        public function getUsuario_id()
        {
                return $this->usuario_id;
        }

        /**
         * Set the value of usuario_id
         *
         * @return  self
         */ 
        public function setUsuario_id($usuario_id)
        {
                $this->usuario_id = $usuario_id;

                return $this;
        }

        /**
         * Get the value of pedido_id
         */ 
        public function getPedido_id()
        {
                return $this->pedido_id;
        }

        /**
         * Set the value of pedido_id
         *
         * @return  self
         */ 
        public function setPedido_id($pedido_id)
        {
                $this->pedido_id = $pedido_id;

                return $this;
        }

        /**
         * Get the value of nombre_usuario
         */ 
        public function getNombre_usuario()
        {
                return $this->nombre_usuario;
        }

        /**
         * Set the value of nombre_usuario
         *
         * @return  self
         */ 
        public function setNombre_usuario($nombre_usuario)
        {
                $this->nombre_usuario = $nombre_usuario;

                return $this;
        }

        /**
         * Get the value of apellidos_usuario
         */ 
        public function getApellidos_usuario()
        {
                return $this->apellidos_usuario;
        }

        /**
         * Set the value of apellidos_usuario
         *
         * @return  self
         */ 
        public function setApellidos_usuario($apellidos_usuario)
        {
                $this->apellidos_usuario = $apellidos_usuario;

                return $this;
        }

        /**
         * Get the value of titulo
         */ 
        public function getTitulo()
        {
                return $this->titulo;
        }

        /**
         * Set the value of titulo
         *
         * @return  self
         */ 
        public function setTitulo($titulo)
        {
                $this->titulo = $titulo;

                return $this;
        }

        /**
         * Get the value of cuerpo
         */ 
        public function getCuerpo()
        {
                return $this->cuerpo;
        }

        /**
         * Set the value of cuerpo
         *
         * @return  self
         */ 
        public function setCuerpo($cuerpo)
        {
                $this->cuerpo = $cuerpo;

                return $this;
        }

        /**
         * Get the value of fecha
         */ 
        public function getFecha()
        {
                return $this->fecha;
        }

        /**
         * Set the value of fecha
         *
         * @return  self
         */ 
        public function setFecha($fecha)
        {
                $this->fecha = $fecha;

                return $this;
        }

        /**
         * Get the value of puntuacion
         */ 
        public function getPuntuacion()
        {
                return $this->puntuacion;
        }

        /**
         * Set the value of puntuacion
         *
         * @return  self
         */ 
        public function setPuntuacion($puntuacion)
        {
                $this->puntuacion = $puntuacion;

                return $this;
        }
    }

?>