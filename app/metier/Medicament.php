<?php
/**
 * Created by PhpStorm.
 * User: Seb
 * Date: 30/05/2019
 * Time: 17:13
 */

namespace App\metier;


class Medicament extends Model
{

//On déclare la table Sejour
    protected $table = 'medicament';
    public $timestamps = true;
    protected $fillable = [
        'id_medicament',
        'id_famille',
        //'depot_legal',
        'nom_commercial',
        //'effets',
        //'contre_indication',
        'prix_echantillon'
    ];

    public function getId_medicament() {
        return $this->id_medicament;
    }
    public function setId_medicament($id) {
        $this->id_medicament = $id;
    }

    public function getId_famille() {
        return $this->id_famille;
    }
    public function setId_famille($id) {
        $this->id_famille = $id;
    }
/*
    public function getDepot_legal() {
        return $this->depot_legal;
    }
    public function setDepot_legal($id) {
        $this->depot_legal = $id;
    }
*/
    public function getNom_commercial() {
        return $this->nom_commercial;
    }
    public function setNom_commercial($id) {
        $this->nom_commercial = $id;
    }
/*
    public function getEffets() {
        return $this->effets;
    }
    public function setEffets($id) {
        $this->effets = $id;
    }

    public function getContre_indication() {
        return $this->contre_indication;
    }
    public function setContre_indication($id) {
        $this->contre_indication = $id;
    }*/

    public function getPrix_echantillon() {
        return $this->prix_echantillon;
    }
    public function setPrix_echantillon($id) {
        $this->prix_echantillon = $id;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}