<?php
class Mascotas extends Request {
    const NAME_TABLE = "mascotas";

    public static function init() {
        parent::$nameTable   = self::NAME_TABLE;
        parent::$queryInsert = INSERT_MASCOTAS;
        parent::$queryUpdate = UPDATE_MASCOTAS;
    }

    public static function insertParameter($object, $statement) {
        $statement->bindParam(1, $object->nombre);
        $statement->bindParam(2, $object->raza);


    }
    public static function updateParameter($object, $statement, $id) {
        $statement->bindParam(1, $object->nombre);
        $statement->bindParam(2, $object->raza);
        $statement->bindParam(3, $id);
    }
}