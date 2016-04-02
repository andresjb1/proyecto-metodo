<?php
namespace proyecto\Entidades;
/**
 * @entity
 * @table(name="Rol")
 */
class Rol {

    const ADMIN = 1;
    const ESTUDIANTE = 2;
    const PROFESOR = 3;

    /**
     * @id
     * @column(type="integer", name="id_rol")
     * @generatedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @column(type="string", name="nombre")
     */
    private $nombre;

    /**
     * Dispositivo constructor.
     * @param $nombre
     */
    public function __construct($nombre)
    {
        $this->nombre = $nombre;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

}





