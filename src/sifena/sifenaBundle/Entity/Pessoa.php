<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pessoa
 */
class Pessoa
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $genero;

    /**
     * @var \DateTime
     */
    private $ddn;

    /**
     * @var string
     */
    private $estadoCivil;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \sifena\sifenaBundle\Entity\Nacionalidade
     */
    private $nacionalidade;

    /**
     * @var \sifena\sifenaBundle\Entity\Documento
     */
    private $documento;


    /**
     * Set nome
     *
     * @param string $nome
     * @return Pessoa
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
     * Set genero
     *
     * @param string $genero
     * @return Pessoa
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }

    /**
     * Get genero
     *
     * @return string 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set ddn
     *
     * @param \DateTime $ddn
     * @return Pessoa
     */
    public function setDdn($ddn)
    {
        $this->ddn = $ddn;

        return $this;
    }

    /**
     * Get ddn
     *
     * @return \DateTime 
     */
    public function getDdn()
    {
        return $this->ddn;
    }

    /**
     * Set estadoCivil
     *
     * @param string $estadoCivil
     * @return Pessoa
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;

        return $this;
    }

    /**
     * Get estadoCivil
     *
     * @return string 
     */
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
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
     * Set nacionalidade
     *
     * @param \sifena\sifenaBundle\Entity\Nacionalidade $nacionalidade
     * @return Pessoa
     */
    public function setNacionalidade(\sifena\sifenaBundle\Entity\Nacionalidade $nacionalidade = null)
    {
        $this->nacionalidade = $nacionalidade;

        return $this;
    }

    /**
     * Get nacionalidade
     *
     * @return \sifena\sifenaBundle\Entity\Nacionalidade 
     */
    public function getNacionalidade()
    {
        return $this->nacionalidade;
    }

    /**
     * Set documento
     *
     * @param \sifena\sifenaBundle\Entity\Documento $documento
     * @return Pessoa
     */
    public function setDocumento(\sifena\sifenaBundle\Entity\Documento $documento = null)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return \sifena\sifenaBundle\Entity\Documento 
     */
    public function getDocumento()
    {
        return $this->documento;
    }
    public function __toString() {
        return utf8_decode(utf8_decode(ucwords(strtolower($this->getNome()))));
    }
}
