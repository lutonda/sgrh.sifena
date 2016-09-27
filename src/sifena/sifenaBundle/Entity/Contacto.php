<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contacto
 */
class Contacto
{
    /**
     * @var string
     */
    private $tipo;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set tipo
     *
     * @param string $tipo
     * @return Contacto
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
