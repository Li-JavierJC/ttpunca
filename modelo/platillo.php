<?php
    /**
	 * Clase de Platillo
	 */
    class Platillo{
        /**Declaracion de los atributos de platillo */
        private $id;
        private $nombre;
        private $descripcion;
        private $tiempoPreparacion;
        private $tiempoCoccion;
        private $caducidad;
        private $porciones;
        private $costoPromedio;
        private $rendimiento;
        private $tiempoComida;
        private $autor;
        private $imagen;
        private $idAlumno;
        private $idUsuario;
        private $idAdministrador;
   
        /**Metodo constructor del platillo */
        public function __construct(){
            $id=0;
            $nommbre="";
            $descripcion="";
            $tiempoPreparacion="";
            $tiempoCoccion="";
            $caducidad="";
            $porciones="";
            $costoPromedio="";
            $rendimiento="";
            $tiempoComida="";
            $autor="";
            $imagen="";
            $idAlumno=0;
            $idUsuario=0;
            $idAdministrador=0;
        }
        
        /**Descriptores de acceso del atributo id */
        public function setId($id){ $this->id=$id;}
        public function getId(){    return $this->id;}

        /**Descriptores de acceso del atributo nombre */
        public function setNombre($nombre){ $this->nombre=$nombre;}
        public function getNombre(){    return $this->nombre;}
        
        /**Descriptores de acceso del atributo descripcion */
        public function setDescripcion($descripcion){ $this->descripcion=$descripcion;}
        public function getDescripcion(){ return $this->descripcion; }

        /**Descriptores de acceso del atributo tiempopreparacion*/
        public function setTiempoPreparacion($tiempoPreparacion){$this->tiempoPreparacion=$tiempoPreparacion;}
        public function getTiempoPreparacion(){return $this->tiempoPreparacion;}

        /**Descriptores de acceso del atributo tiempoCoccion */
        public function setTiempoCoccion($tiempoCoccion){ $this->tiempoCoccion=$tiempoCoccion;}
        public function getTiempoCoccion(){ return $this->tiempoCoccion;}

        /**Descriptores de acceso del atributo caducidad */
        public function setCaducidad($caducidad){$this->caducidad=$caducidad;}
        public function getCaducidad(){return $this->caducidad;}
        
        /**Descriptores de acceso del atributo porciones */ 
        public function setPorciones($porciones){$this->porciones=$porciones;}
        public function getPorciones(){return $this->porciones;}

        /**Descriptores de acceso del atributo Costopromedio */
        public function setCostoPromedio($costoPromedio){$this->costoPromedio=$costoPromedio;}
        public function getCostoPromedio(){return $this->costoPromedio;}

        /**Descriptores de acceso del atributo rendimiento */
        public function setRendimiento($rendimiento){$this->rendimiento=$rendimiento;}
        public function getRendimiento(){return $this->rendimiento;}

        /**Descriptores de acceso del atributo tiempocomida */
        public function setTiempoComida($tiempoComida){$this->tiempoComida=$tiempoComida;}
        public function getTiempoComida(){return $this->tiempoComida;}

        /**Descriptores de acceso del atributo autor */
        public function setAutor($autor){$this->autor=$autor;}
        public function getAutor(){return $this->autor;}
        
        /**Descriptores de acceso del atributo imagen */
        public function setImagen($imagen){$this->imagen=$imagen;}
        public function getImagen(){return $this->imagen;}

        /**Descriptores de acceso del atributo idAlumno */
        public function setIdAlumno($idAlumno){ $this->idAlumno=$idAlumno;}
        public function getIdAlumno(){ return $this->idAlumno;}

        /**Descriptores de acceso del atributo idUsuario */
        public function setIdUsuario($idUsuario){ $this->idUsuario=$idUsuario;}
        public function getIdUsuario(){ return $this->idUsuario;}

        /**Descriptores de acceso del atributo idAdministrador */
        public function setIdAdministrador($idAdministrador){ $this->idAdministrador=$idAdministrador;}
        public function getIdAdministrador(){ return $this->idAdministrador;}

    }
?>