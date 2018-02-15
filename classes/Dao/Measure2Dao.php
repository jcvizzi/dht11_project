<?php

namespace Dao;

use Domain\Measure;

class MeasureDao extends DaoBase {

    public function __construct($config) {
        parent::__construct($config);
    }

    public function findAllMeasures() {

        $result = [];

        $reponse = $this->bdd->query("SELECT id, temperature, humidity, datetime FROM dht11 order by id");

        while ($donnees = $reponse->fetch()) {

            $id = $donnees["id"];
            $temperature = $donnees["temperature"];
            $humidity = $donnees["humidity"];

            $measure = new Measure($id, $temperature, $humidity);

            $result[] = $measure;
        }

        return $result;
    }


    public function insertMeasure($measure) {

        $result;

        $query = $this->bdd->prepare("INSERT INTO dth11 (temperature, humidity, datetime) VALUES (:firstName, :lastName)");

        $query->bindParam(":firstName", $user->firstName);
        $query->bindParam(":lastName", $user->lastName);

        $query->execute();

        $id = $this->bdd->lastInsertId();

        $user->id = $id;

        return $id;
    }
}

?>