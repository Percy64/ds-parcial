<?php
class paciente 
{
    public $id;
    public $nombre;
    public $apellido;
    public $documento;
    public $edad;
    public $email;
    public $listaturno=array();

    public function mostrardatos()
    {
            echo 'id: '. $this->id . '<br>';
            echo 'nombre: '. $this->nombre . '<br>';
            echo 'apellido'. $this->apellido . '<br>';
            echo 'documento'. $this->documento . '<br>';
            echo 'edad'. $this->edad . '<br>';
            echo 'email'. $this->email . '<br>';
            foreach ($this->listaturno as $tur) 
            {
               echo 'id: '. $tur->id . '<br>';
               echo 'fecha: '. $tur->fecha . '<br>';
               echo 'hora: '. $tur->hora . '<br>';
               echo 'medico:'. $tur->medico . '<br>';
               echo 'espacialidad:'. '<br>';
               echo 'id'. $tur->especialidad->id . '<br>';
               echo 'descripcion'. $tur->especialidad->descripcion . '<br>';
               
            }

    }

}
