<?php



class saludoPracticas{

    protected $mensaje;



    public function __construct($mensaje)
    {
        $this->mensaje = $mensaje;
    }


    public function show(){

        echo $this->mensaje;
    }

}