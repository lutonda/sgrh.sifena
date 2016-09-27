<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrato
 * @ORM\Entity(repositoryClass="sifena\sifenaBundle\Repository\ContratoRepository")
 */
class Contrato
{
    /**
     * @var \DateTime
     */
    private $dataInicio;

    /**
     * @var \DateTime
     */
    private $dataFim;

    /**
     * @var string
     */
    private $estado;

    /**
     * @var string
     */
    private $observacao;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \sifena\sifenaBundle\Entity\Trabalhador
     */
    private $trabalhador;

    /**
     * @var \sifena\sifenaBundle\Entity\TipoContrato
     */
    private $tipoContrato;


    /**
     * Set dataInicio
     *
     * @param \DateTime $dataInicio
     * @return Contrato
     */
    public function setDataInicio($dataInicio)
    {
        $this->dataInicio = $dataInicio;

        return $this;
    }

    /**
     * Get dataInicio
     *
     * @return \DateTime 
     */
    public function getDataInicio()
    {
        return $this->dataInicio;
    }

    /**
     * Set dataFim
     *
     * @param \DateTime $dataFim
     * @return Contrato
     */
    public function setDataFim($dataFim)
    {
        $this->dataFim = $dataFim;

        return $this;
    }

    /**
     * Get dataFim
     *
     * @return \DateTime 
     */
    public function getDataFim()
    {
        return $this->dataFim;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Contrato
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     * @return Contrato
     */
    public function setObservacao($observacao)
    {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string 
     */
    public function getObservacao()
    {
        return $this->observacao;
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
     * Set trabalhador
     *
     * @param \sifena\sifenaBundle\Entity\Trabalhador $trabalhador
     * @return Contrato
     */
    public function setTrabalhador(\sifena\sifenaBundle\Entity\Trabalhador $trabalhador = null)
    {
        $this->trabalhador = $trabalhador;

        return $this;
    }

    /**
     * Get trabalhador
     *
     * @return \sifena\sifenaBundle\Entity\Trabalhador 
     */
    public function getTrabalhador()
    {
        return $this->trabalhador;
    }

    /**
     * Set tipoContrato
     *
     * @param \sifena\sifenaBundle\Entity\TipoContrato $tipoContrato
     * @return Contrato
     */
    public function setTipoContrato(\sifena\sifenaBundle\Entity\TipoContrato $tipoContrato = null)
    {
        $this->tipoContrato = $tipoContrato;

        return $this;
    }

    /**
     * Get tipoContrato
     *
     * @return \sifena\sifenaBundle\Entity\TipoContrato 
     */
    public function getTipoContrato()
    {
        return $this->tipoContrato;
    }
    
    public function __toString() {
        return $this->getEstado();
    }
}
