<?php
namespace proyecto\Entidades;
/**
 * @entity
 * @table(name="Usuario")
 */
class Usuario {

    /**
     * @id
     * @column(type="integer", name="id_usuario")
     * @generatedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @column(type="string", name="password")
     */
    private $password;

    /**
     * @column(type="string", name="correo")
     */
    private $correo;

    /**
     * @column(type="string", name="nombre")
     */
    private $nombre;

    /**
     * @column(type="string", name="apellidos")
     */
    private $apellidos;

    /**
     * @column(type="string", name="telefono")
     */
    private $telefono;

    /**
     * @var Rol
     * @OneToOne(targetEntity="Rol")
     * @JoinColumn(name="rol_id", referencedColumnName="id_rol")
     **/
    protected $rol;

    /**
     * Usuario constructor.
     * @param $password
     * @param $correo
     * @param $nombre
     * @param $apellidos
     * @param $telefono
     * @param Rol $rol
     */
    public function __construct($password, $correo, $nombre, $apellidos, $telefono, Rol $rol)
    {
        $this->password = $password;
        $this->correo = $correo;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->telefono = $telefono;
        $this->rol = $rol;
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
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getCorreo()
    {
        return $this->correo;
    }

    /**
     * @param mixed $correo
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;
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

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return Rol
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * @param Rol $rol
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    }


}
