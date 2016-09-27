<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sector
 */
class Sector
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $descricao;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \sifena\sifenaBundle\Entity\Departamento
     */
    private $departamento;


    /**
     * Set nome
     *
     * @param string $nome
     * @return Sector
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Sector
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string 
     */
    public function getDescricao()
    {
        return $this->descricao;
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
     * Set departamento
     *
     * @param \sifena\sifenaBundle\Entity\Departamento $departamento
     * @return Sector
     */
    public function setDepartamento(\sifena\sifenaBundle\Entity\Departamento $departamento = null)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return \sifena\sifenaBundle\Entity\Departamento 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }
}
