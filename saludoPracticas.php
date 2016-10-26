<?php



class saludoPracticas{

    protected $mensaje;



    public function __construct($mensaje)
    {


        $this->mensaje = $mensaje == "" ? "No se ha recibido ningun mensaje para saludar" : $mensaje;
    }




    public function show(){

        echo $this->mensaje;
    }

}