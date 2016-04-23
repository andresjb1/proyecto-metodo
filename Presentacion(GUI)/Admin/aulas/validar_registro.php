<?php
/**
 * Created by PhpStorm.
 * User: Andrés
 * Date: 22/04/2016
 * Time: 23:34
 */
include "../../../vendor/autoload.php";
include "../../../config/db.php";

$numero = $_POST['numero'];
$edificio = $_POST['edificio'];
$capacidad = $_POST['capacidad'];
$idsHorarios = $_POST['horarios']; // ids de horarios

$qb = $entityManager->createQueryBuilder();
$qb->select('h');
$qb->from(\proyecto\Entidades\Horario::class, 'h');
$qb->where($qb->expr()->in('h.id',$idsHorarios ));
$horarios = $qb->getQuery()->getResult();

$aula = new \proyecto\Entidades\Aula($numero, $edificio, $capacidad, $horarios);
$entityManager->persist($aula);
$entityManager->flush();
header('Location: lista.php');