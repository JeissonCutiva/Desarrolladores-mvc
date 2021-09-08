<?php

    class Proyecto
    {
        private $db;
        private $proyectos;

        public function __construct()
        {
            $this->db = Conexion::conectar();
            $this->proyectos = array();
        }
        public function listar()
        {
            $sql = "SELECT * FROM proyecto";
            $resultado = $this->db->query($sql);

            
            if(!$resultado)
            {
                echo "la pagina esta experimentando problemas. Intente mas tarde";
                echo "Error: No se pudo conectar a MySQL.". PHP_EOL;
                echo "consulta. $sql" . PHP_EQL;
                echo "erno de depuracion:" . mysqli_connect-erno(). PHP_EOL;
                echo "error de depuracion:" . mysqli_connect-error(). PHP_EOL;
                exit;
            }

            while ($row = $resultado->fetch_assoc()) {
                $this->proyectos[] = $row;
            }
            return $this->proyectos;

        }

        public function insert($nombre, $duracion)
        {
            $sql = "INSERT INTO 'empresa php'(nombre,duracion)
                    VALUES ('$nombre', $duracion)";
            $this->db->query($sql);
        }
    }

?>