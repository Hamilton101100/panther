<?php
class Cities extends Request {
    const NAME_TABLE = "cities";

    public static function init() {
        parent::$nameTable = self::NAME_TABLE;
    }

    public static function get($request)
    {
        UserAction::authenticator();

        if (isset($_GET['state_id']) && is_numeric($_GET['state_id'])) {
            return self::getByStateId($_GET['state_id']);
        }

        if (empty($request[0])) {
            return self::getRequest(null);
        }

        if ($request[0] === 'state' && isset($request[1]) && is_numeric($request[1])) {
            return self::getByStateId($request[1]);
        }

        if (is_numeric($request[0])) {
            return self::getRequest($request);
        }

        throw new ExcepcionApi(BAD_REQUEST, ST400, error_url);
    }

    private static function getByStateId($stateId)
    {
        try {
            $query = "SELECT * FROM " . self::$nameTable . " WHERE state_id = ?";
            $statement = Connection::getInstance()->getConnection()->prepare($query);
            $statement->bindParam(1, $stateId, PDO::PARAM_INT);
            $statement->execute();
            $tempo = $statement->fetchAll(PDO::FETCH_ASSOC);

            if (count($tempo) > 0) {
                return new ContentBody(OK, ST200, $tempo);
            }

            throw new ExcepcionApi(NO_CONTENT, ST204, "no_result");
        } catch (Exception $e) {
            throw new ExcepcionApi(INTERNAL_SERVER_ERROR, ST500, $e->getMessage());
        }
    }

    public static function insertParameter($object, $statement) {}
    public static function updateParameter($object, $statement, $id) {}
}