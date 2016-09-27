<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documento
 */
class Documento
{
    /**
     * @var string
     */
    private $tipoDocumento;

    /**
     * @var string
     */
    private $ndi;

    /**
     * @var integer
     */
    private $id;

    
    /**
     * Set tipoDocumento
     *
     * @param string $tipoDocumento
     * @return Documento
     */
    public function setTipoDocumento($tipoDocumento)
    {
        $this->tipoDocumento = $tipoDocumento;

        return $this;
    }

    /**
     * Get tipoDocumento
     *
     * @return string 
     */
    public function getTipoDocumento()
    {
        return $this->tipoDocumento;
    }

    /**
     * Set ndi
     *
     * @param string $ndi
     * @return Documento
     */
    public function setNdi($ndi)
    {
        $this->ndi = $ndi;

        return $this;
    }

    /**
     * Get ndi
     *
     * @return string 
     */
    public function getNdi()
    {
        return $this->ndi;
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
