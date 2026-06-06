<?php
class mascotas extends Request {
    const NAME_TABLE = "Mascotas";

    public static function init() {
        parent::$nameTable = self::NAME_TABLE;
    }

    public static function get($request) {
        UserAction::authenticator();
        if (empty($request[0])) {
            return self::getRequest(null);
        }
        if (is_numeric($request[0])) {
            return self::getRequest($request);
        }
        throw new ExcepcionApi(BAD_REQUEST, ST400, error_url);
    }

    public static function insertParameter($object, $statement) {}
    public static function updateParameter($object, $statement, $id) {}
}