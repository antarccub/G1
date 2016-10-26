<?php



class saludoPracticas{

    protected $mensaje;
    protected $from;



    public function __construct($mensaje = "No se ha recibido ningun mensaje para saludar")
    {


        $this->mensaje = $mensaje;
    }




    public function show(){

        $saludo = $this->from." ha enviado el siguiente mensaje: <strong>".$this->mensaje."</strong>";
        echo $saludo;
    }

    public function from($from = "Un hombre malo violento"){

        $this->from = $from;

    }

}