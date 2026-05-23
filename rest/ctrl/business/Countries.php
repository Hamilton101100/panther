<?php
class Countries extends Request {
    const NAME_TABLE = "countries";

    public static function init() {
        parent::$nameTable = self::NAME_TABLE;
    }

    public static function insertParameter($object, $statement) {}
    public static function updateParameter($object, $statement, $id) {}
}