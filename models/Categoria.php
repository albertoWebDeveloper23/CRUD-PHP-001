<?php 

    class Categoria extends Conectar {

        /* READ CATEGORY */
        /* TODO Obtener todos los registros de la tabla tm_categoria */
        public function get_categoria() {
            $conectar = parent::conexion();
            parent::set_names();
            $sql = "SELECT * FROM tm_categoria WHERE est=1";
            $sql = $conectar->prepare($sql);
            $sql->execute();
            $resultado = $sql->fetchAll();
            return $resultado;
        }
    
    } /* End class Categoria */

?>