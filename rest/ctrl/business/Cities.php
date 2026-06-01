<?php
class Cities extends Request {
    const NAME_TABLE = "cities";

    public static function init() {
        parent::$nameTable = self::NAME_TABLE;
    }

    public static function get() {

        if (isset($_GET['state_id']) && !empty($_GET['state_id'])) {
            $stateId = (int) $_GET['state_id'];
            $db      = Connection::getInstance()->getConnection();
            $stmt    = $db->prepare(
                "SELECT id_city, city, state_id FROM cities WHERE state_id = ? AND is_active = 1 ORDER BY city ASC"
            );
            $stmt->execute([$stateId]);
            $ciudades = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return new ContentBody(OK, ST200, $ciudades);
        }

        return parent::get();
    }

    public static function insertParameter($object, $statement) {}
    public static function updateParameter($object, $statement, $id) {}
}