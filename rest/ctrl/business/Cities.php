<?php
class Cities extends Request {
    const NAME_TABLE = "cities";

    public static function init() {
        parent::$nameTable = self::NAME_TABLE;
    }

    public static function insertParameter($object, $statement) {}
    public static function updateParameter($object, $statement, $id) {}
}