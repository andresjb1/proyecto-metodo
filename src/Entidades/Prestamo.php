<?php
/**
 * Created by PhpStorm.
 * User: Andrés
 * Date: 19/04/2016
 * Time: 19:23
 */

namespace proyecto\Entidades;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @entity
 * @table(name="prestamo")
 */

class Prestamo
{
    /**
     * @id
     * @column(type="integer", name="id_prestamo")
     * @generatedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Usuario
     * @ManyToOne(targetEntity="Usuario")
     * @JoinColumn(name="usuario_id", referencedColumnName="id_usuario")
     **/
    protected $usuario;

    /**
     * @var Dispositivo
     * @OneToOne(targetEntity="Dispositivo")
     * @JoinColumn(name="dispositivo_id", referencedColumnName="id_dispositivo")
     **/
    protected $dispositivo;

    /**
     * @var Dispositivo
     * @OneToOne(targetEntity="Aula")
     * @JoinColumn(name="aula_id", referencedColumnName="id_aula")
     **/
    protected $aula;

    /**
     * @var \DateTime
     * @column(type="datetime", name="fecha_registro")
     */
    private $fechaRegistro;

    /**
     * @var \DateTime
     * @column(type="datetime", name="fecha_devolucion")
     */
    private $fechaDevolucion;

    /**
     * Prestamo constructor.
     * @param Usuario $usuario
     * @param Dispositivo $dispositivo
     * @param Dispositivo $aula
     * @param \DateTime $fechaRegistro
     * @param \DateTime $fechaDevolucion
     */
    public function __construct(Usuario $usuario, Dispositivo $dispositivo, Dispositivo $aula, \DateTime $fechaRegistro, \DateTime $fechaDevolucion)
    {
        $this->usuario = $usuario;
        $this->dispositivo = $dispositivo;
        $this->aula = $aula;
        $this->fechaRegistro = $fechaRegistro;
        $this->fechaDevolucion = $fechaDevolucion;
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
     * @return Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param Usuario $usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * @return Dispositivo
     */
    public function getDispositivo()
    {
        return $this->dispositivo;
    }

    /**
     * @param Dispositivo $dispositivo
     */
    public function setDispositivo($dispositivo)
    {
        $this->dispositivo = $dispositivo;
    }

    /**
     * @return Dispositivo
     */
    public function getAula()
    {
        return $this->aula;
    }

    /**
     * @param Dispositivo $aula
     */
    public function setAula($aula)
    {
        $this->aula = $aula;
    }

    /**
     * @return mixed
     */
    public function getFechaRegistro()
    {
        return $this->fechaRegistro;
    }

    /**
     * @param mixed $fechaRegistro
     */
    public function setFechaRegistro($fechaRegistro)
    {
        $this->fechaRegistro = $fechaRegistro;
    }

    /**
     * @return \DateTime
     */
    public function getFechaDevolucion()
    {
        return $this->fechaDevolucion;
    }

    /**
     * @param \DateTime $fechaDevolucion
     */
    public function setFechaDevolucion($fechaDevolucion)
    {
        $this->fechaDevolucion = $fechaDevolucion;
    }


}