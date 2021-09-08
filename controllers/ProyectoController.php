<?php

    class ProyectoController
    {
        public function __construct()
        {
            require_once "models/Proyecto.php";
        }

        public function index()
        {
            $proyecto = new Proyecto();
            $data['proyectos'] = $proyecto->listar();
            $data['titulo'] = "proyectos";

            require_once "views/proyectos/index.php";
        }

        public function insert()
        {
            $data['titulo'] = "Crear proyecto";;
           require_once "views/proyectos/insert.php";
        }

        public function store()
        {
            $nombre = $_POST['nombre'];
            $duracion = $_POST['duracion'];

            $proyecto = new Proyecto();
            $proyecto->insert($nombre, $duracion);
            $this->index();

        }
        public function view ($id)
        {
            $data['proyecto'] = $proyecto-> getProyecto($id);
            $data['titulo']="Detalle de Proyecto";
            require_once "views/proyectos/view.php";
        }
       
    }

?>