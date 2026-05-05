<?php

namespace rest\model\core;

/**
 * <b>Descripcion:</b> Clase que <br/> contiene los roles de la aplicación
 * <b>Caso de Uso:</b> PANTHER-Seguridad <br/>
 *
 * @author Josué Nicolás Pinzón Villamil <a href = "mailto:jpinzon@j4sysol.com">jpinzon@j4sysol.com</a>
 */
class Rol
{

    /**
     * Identificador de la clase
     * 
     * @var float id
     */
    public $id;

    /**
     * Nombre del rol
     * 
     * @var string name
     */
    public $name;

    /**
     * Descripcion del rol
     * 
     * @var string description
     */
    public $description;

    /**
     *
     * @return float $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @return string $description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *
     * @param float $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
}
