<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trabalhador
 * 
 * @ORM\Entity(repositoryClass="sifena\sifenaBundle\Repository\TrabalhadorRepository")
 */
class Trabalhador
{
    /**
     * @var string
     */
    private $grauAcademico;

    /**
     * @var string
     */
    private $numeroInterno;

    /**
     * @var string
     */
    private $numeroConta;

    /**
     * @var string
     */
    private $iban;

    /**
     * @var \sifena\sifenaBundle\Entity\Pessoa
     */
    private $pessoa;

    /**
     * @var \sifena\sifenaBundle\Entity\Sector
     */
    private $sector;

    /**
     * @var \sifena\sifenaBundle\Entity\Profissao
     */
    private $profissao;

    /**
     * @var \sifena\sifenaBundle\Entity\Categoria
     */
    private $categoria;

    /**
     * @var \sifena\sifenaBundle\Entity\InstituicaoBancaria
     */
    private $instituicaoBancaria;


    /**
     * Set grauAcademico
     *
     * @param string $grauAcademico
     * @return Trabalhador
     */
    public function setGrauAcademico($grauAcademico)
    {
        $this->grauAcademico = $grauAcademico;

        return $this;
    }

    /**
     * Get grauAcademico
     *
     * @return string 
     */
    public function getGrauAcademico()
    {
        return $this->grauAcademico;
    }

    /**
     * Set numeroInterno
     *
     * @param string $numeroInterno
     * @return Trabalhador
     */
    public function setNumeroInterno($numeroInterno)
    {
        $this->numeroInterno = $numeroInterno;

        return $this;
    }

    /**
     * Get numeroInterno
     *
     * @return string 
     */
    public function getNumeroInterno()
    {
        return $this->numeroInterno;
    }

    /**
     * Set numeroConta
     *
     * @param string $numeroConta
     * @return Trabalhador
     */
    public function setNumeroConta($numeroConta)
    {
        $this->numeroConta = $numeroConta;

        return $this;
    }

    /**
     * Get numeroConta
     *
     * @return string 
     */
    public function getNumeroConta()
    {
        return $this->numeroConta;
    }

    /**
     * Set iban
     *
     * @param string $iban
     * @return Trabalhador
     */
    public function setIban($iban)
    {
        $this->iban = $iban;

        return $this;
    }

    /**
     * Get iban
     *
     * @return string 
     */
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * Set pessoa
     *
     * @param \sifena\sifenaBundle\Entity\Pessoa $pessoa
     * @return Trabalhador
     */
    public function setPessoa(\sifena\sifenaBundle\Entity\Pessoa $pessoa)
    {
        $this->pessoa = $pessoa;

        return $this;
    }

    /**
     * Get pessoa
     *
     * @return \sifena\sifenaBundle\Entity\Pessoa 
     */
    public function getPessoa()
    {
        return $this->pessoa;
    }

    /**
     * Set sector
     *
     * @param \sifena\sifenaBundle\Entity\Sector $sector
     * @return Trabalhador
     */
    public function setSector(\sifena\sifenaBundle\Entity\Sector $sector = null)
    {
        $this->sector = $sector;

        return $this;
    }

    /**
     * Get sector
     *
     * @return \sifena\sifenaBundle\Entity\Sector 
     */
    public function getSector()
    {
        return $this->sector;
    }

    /**
     * Set profissao
     *
     * @param \sifena\sifenaBundle\Entity\Profissao $profissao
     * @return Trabalhador
     */
    public function setProfissao(\sifena\sifenaBundle\Entity\Profissao $profissao = null)
    {
        $this->profissao = $profissao;

        return $this;
    }

    /**
     * Get profissao
     *
     * @return \sifena\sifenaBundle\Entity\Profissao 
     */
    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * Set categoria
     *
     * @param \sifena\sifenaBundle\Entity\Categoria $categoria
     * @return Trabalhador
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

    /**
     * Set instituicaoBancaria
     *
     * @param \sifena\sifenaBundle\Entity\InstituicaoBancaria $instituicaoBancaria
     * @return Trabalhador
     */
    public function setInstituicaoBancaria(\sifena\sifenaBundle\Entity\InstituicaoBancaria $instituicaoBancaria = null)
    {
        $this->instituicaoBancaria = $instituicaoBancaria;

        return $this;
    }

    /**
     * Get instituicaoBancaria
     *
     * @return \sifena\sifenaBundle\Entity\InstituicaoBancaria 
     */
    public function getInstituicaoBancaria()
    {
        return $this->instituicaoBancaria;
    }
    
    public function __toString() {
        return $this->getPessoa()->getNome()."/".$this->getNumeroInterno();
    }
}
