<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formacao
 */
class Formacao
{
    /**
     * @var string
     */
    private $curso;

    /**
     * @var string
     */
    private $descricao;

    /**
     * @var string
     */
    private $grauAcademico;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set curso
     *
     * @param string $curso
     * @return Formacao
     */
    public function setCurso($curso)
    {
        $this->curso = $curso;

        return $this;
    }

    /**
     * Get curso
     *
     * @return string 
     */
    public function getCurso()
    {
        return $this->curso;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     * @return Formacao
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
     * Set grauAcademico
     *
     * @param string $grauAcademico
     * @return Formacao
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
