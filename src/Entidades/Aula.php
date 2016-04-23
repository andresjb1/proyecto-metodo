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
 * @table(name="aula")
 */

class Aula
{
    /**
     * @id
     * @column(type="integer", name="id_aula")
     * @generatedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @column(type="integer", name="numero")
     */
    private $numero;

    /**
     * @column(type="string", name="edificio")
     */
    private $edificio;

    /**
     * @column(type="integer", name="capacidad")
     */
    private $capacidad;

    /**
     * @OneToMany(targetEntity="Equipo", mappedBy="aula")
     */
    private $equipos;

    /**
     * @OneToMany(targetEntity="Prestamo", mappedBy="aula")
     */
    private $prestamos;

    /**
     * @var ArrayCollection
     * @ManyToMany(targetEntity="Horario")
     * @JoinTable(name="aulas_has_horario",
     *      joinColumns={@JoinColumn(name="aula_id", referencedColumnName="id_aula")},
     *      inverseJoinColumns={@JoinColumn(name="horario_id", referencedColumnName="id_horario")}
     *      )
     */
    private $horarios;

    /**
     * Aula constructor.
     * @param $numero
     * @param $edificio
     * @param $capacidad
     */
    public function __construct($numero, $edificio, $capacidad, $horarios)
    {
        $this->numero = $numero;
        $this->edificio = $edificio;
        $this->capacidad = $capacidad;
        $this->equipos = new ArrayCollection();
        $this->horarios = $horarios;
    }

    public function tieneHorario(Horario $horario){
        $tiene = false;
        foreach ($this->horarios as $h) {
            if ($h->getId() == $horario->getId()){
                $tiene = true;
                break;
            }
        }
        return $tiene;
    }

    /**
     * @return mixed
     */
    public function getHorarios()
    {
        return $this->horarios;
    }

    /**
     * @param mixed $horarios
     */
    public function setHorarios($horarios)
    {
        $this->horarios = $horarios;
    }

    /**
     * @return Equipo
     */
    public function getEquipos()
    {
        return $this->equipos;
    }

    /**
     * @param Equipo $equipos
     */
    public function setEquipos($equipos)
    {
        $this->equipos = $equipos;
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
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * @return mixed
     */
    public function getEdificio()
    {
        return $this->edificio;
    }

    /**
     * @param mixed $edificio
     */
    public function setEdificio($edificio)
    {
        $this->edificio = $edificio;
    }

    /**
     * @return mixed
     */
    public function getCapacidad()
    {
        return $this->capacidad;
    }

    /**
     * @param mixed $capacidad
     */
    public function setCapacidad($capacidad)
    {
        $this->capacidad = $capacidad;
    }



}