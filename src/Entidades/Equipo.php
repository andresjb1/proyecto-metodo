<?php

namespace proyecto\Entidades;

/**
 * @entity
 * @table(name="equipo")
 */

class Equipo {

    /**
     * @id
     * @column(type="integer", name="id_equipo")
     * @generatedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @column(type="string", name="nombre_equipo")
     */
    private $nombre;

    /**
     * @var Aula
     * @ManyToOne(targetEntity="Aula")
     * @JoinColumn(name="aula_id", referencedColumnName="id_aula")
     **/
    protected $aula;


}