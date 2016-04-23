<?php
/**
 * Created by PhpStorm.
 * User: Andrés
 * Date: 22/04/2016
 * Time: 19:47
 */

namespace proyecto\Entidades;

/**
 * Class Horario
 * @package proyecto\Entidades
 * @entity
 * @table(name="horario")
 */
class Horario
{

    /**
     * @id
     * @column(type="integer", name="id_horario")
     * @generatedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     * @column(type="time", name="hora_entrada")
     */
    private $horaEntrada;

    /**
     * @var \DateTime
     * @column(type="time", name="hora_salida")
     */
    private $horaSalida;

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
     * @return \DateTime
     */
    public function getHoraEntrada()
    {
        return $this->horaEntrada;
    }

    /**
     * @param \DateTime $horaEntrada
     */
    public function setHoraEntrada($horaEntrada)
    {
        $this->horaEntrada = $horaEntrada;
    }

    /**
     * @return \DateTime
     */
    public function getHoraSalida()
    {
        return $this->horaSalida;
    }

    /**
     * @param \DateTime $horaSalida
     */
    public function setHoraSalida($horaSalida)
    {
        $this->horaSalida = $horaSalida;
    }


}