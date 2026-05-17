<?php
class TipoDocumentos extends Request {

    const NAME_TABLE = "tipo_documento";

    public static function init() {
        parent::$nameTable   = self::NAME_TABLE;
        parent::$queryInsert = INSERT_TIPODOC;
        parent::$queryUpdate = UPDATE_TIPODOC;
    }

    public static function insertParameter($object, $statement) {
        $statement->bindParam(1, $object->nombre_largo);
        $statement->bindParam(2, $object->nombre_corto);
    }

    public static function updateParameter($object, $statement, $id) {
        $statement->bindParam(1, $object->nombre_largo);
        $statement->bindParam(2, $object->nombre_corto);
        $statement->bindParam(3, $id);
    }
}