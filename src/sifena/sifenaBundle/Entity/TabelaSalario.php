<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TabelaSalario
 */
class TabelaSalario
{
    /**
     * @var float
     */
    private $salario;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \sifena\sifenaBundle\Entity\Categoria
     */
    private $categoria;


    /**
     * Set salario
     *
     * @param float $salario
     * @return TabelaSalario
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get salario
     *
     * @return float 
     */
    public function getSalario()
    {
        return $this->salario;
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

    /**
     * Set categoria
     *
     * @param \sifena\sifenaBundle\Entity\Categoria $categoria
     * @return TabelaSalario
     */
    public function setCategoria(\sifena\sifenaBundle\Entity\Categoria $categoria = null)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get categoria
     *
     * @return \sifena\sifenaBundle\Entity\Categoria 
     */
    public function getCategoria()
    {
        return $this->categoria;
    }
}
