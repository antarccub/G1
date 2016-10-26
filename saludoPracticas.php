<?php



class saludoPracticas{

    protected $mensaje;



    public function __construct($mensaje = "No se ha recibido ningun mensaje para saludar")
    {


        $this->mensaje = $mensaje;
    }




    public function show(){

        echo $this->mensaje;
    }

}