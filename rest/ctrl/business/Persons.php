<?php

/**
 * <b>Descripcion:</b> Clase que <br/>Gestiona las personas
 * <b>Caso de Uso:</b> PANTHER- Business <br/>
 *
 * @author Josué Nicolás Pinzón Villamil <a href = "mailto:jpinzon@j4sysol.com">jpinzon@j4sysol.com</a>
 */
class Persons extends Request
{
    /**
     * Datos de la tabla "person"
     *
     * @var string
     */
    const NAME_TABLE = "person";

    public static function init()
    {
        parent::$nameTable = self::NAME_TABLE;
        parent::$queryInsert = INTSERT_PERSON;
        parent::$queryUpdate = UPDATE_PERSON;
    }
    /**
     * @param Person $object Objeto con los datos de la persona
     * @param \PDOStatement $statement
     * @param float|int $id Identificador único
     */

public static function insertParameter($object, $statement)
{
    $statement->bindParam(1, $object->name);
    $statement->bindParam(2, $object->lastName);
    $statement->bindParam(3, $object->phone);
    $tipoDoc = isset($object->tipo_documento_id) ? $object->tipo_documento_id : null;
    $statement->bindParam(4, $tipoDoc);
    $numDoc = isset($object->numero_documento) ? $object->numero_documento : null;
    $statement->bindParam(5, $numDoc);
    $countryId = isset($object->country_id) ? $object->country_id : null;
    $statement->bindParam(6, $countryId);
    $stateId = isset($object->state_id) ? $object->state_id : null;
    $statement->bindParam(7, $stateId);
    $cityId = isset($object->city_id) ? $object->city_id : null;
    $statement->bindParam(8, $cityId);
}

public static function updateParameter($object, $statement, $id)
{
    $statement->bindParam(1, $object->name);
    $statement->bindParam(2, $object->lastName);
    $statement->bindParam(3, $object->phone);
    $tipoDoc = isset($object->tipo_documento_id) ? $object->tipo_documento_id : null;
    $statement->bindParam(4, $tipoDoc);
    $numDoc = isset($object->numero_documento) ? $object->numero_documento : null;
    $statement->bindParam(5, $numDoc);
    $countryId = isset($object->country_id) ? $object->country_id : null;
    $statement->bindParam(6, $countryId);
    $stateId = isset($object->state_id) ? $object->state_id : null;
    $statement->bindParam(7, $stateId);
    $cityId = isset($object->city_id) ? $object->city_id : null;
    $statement->bindParam(8, $cityId);
    $statement->bindParam(9, $id);
}
}
