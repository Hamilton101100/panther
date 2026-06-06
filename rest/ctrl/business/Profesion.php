<?php
class Profesion extends Request {
    const NAME_TABLE = "profesiones";

    public static function init() {
        parent::$nameTable   = self::NAME_TABLE;
        parent::$queryInsert = INSERT_PROFESION;
        parent::$queryUpdate = UPDATE_PROFESION;
    }

    public static function insertParameter($object, $statement) {
        $statement->bindParam(1, $object->nombre);

    }
    public static function updateParameter($object, $statement, $id) {
        $statement->bindParam(1, $object->nombre);
        $statement->bindParam(2, $id);
    }
}

class Profesiones extends Profesion {}