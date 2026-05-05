<?php

/**
 * <b>Descripcion:</b> Clase que <br/> gestiona las excepciones
 * <b>Caso de Uso:</b> PANTHER-Seguridad <br/> 
 * @author Josué Nicolás Pinzón Villamil <a href = "mailto:jpinzon@j4sysol.com">jpinzon@j4sysol.com</a>
 */
class ExcepcionAPI extends Exception
{

    /**
     * Estado de la solicitud
     * 
     * @var string
     */
    public $state;

    /**
     * Constructor de la clase
     * 
     * @param string $state Estado de la excepción
     * @param int|string $code Código de error (HTTP o interno)
     * @param string $message Mensaje descriptivo
     */
    public function __construct($state, $code, $message)
    {
        // Nota: $code y $message ya existen en la clase Exception de la que heredas
        $this->state = $state;
        $this->code = $code;
        $this->message = $message;
    }

    /**
     * Obtiene el estado de la solicitud
     * 
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Define el estado de la solicitud
     * 
     * @param string $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }
}
