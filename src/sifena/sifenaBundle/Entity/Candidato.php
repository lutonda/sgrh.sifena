<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Candidato
 */
class Candidato {

    /**
     * @var \DateTime
     */
    private $dataCandidatura;

    /**
     * @var string
     */
    private $anexo;

    /**
     * @var string
     */
    private $observacao;

    /**
     * @var string
     */
    private $estado="A";

    /**
     * @var \sifena\sifenaBundle\Entity\Pessoa
     */
    private $pessoa;

    /**
     * @var \sifena\sifenaBundle\Entity\Formacao
     */
    private $formacao;

    /**
     * Set dataCandidatura
     *
     * @param \DateTime $dataCandidatura
     * @return Candidato
     */
    public function setDataCandidatura($dataCandidatura) {
        $this->dataCandidatura = $dataCandidatura;

        return $this;
    }

    /**
     * Get dataCandidatura
     *
     * @return \DateTime 
     */
    public function getDataCandidatura() {
        return $this->dataCandidatura;
    }

    /**
     * Set anexo
     *
     * @param string $anexo
     * @return Candidato
     */
    public function setAnexo($anexo) {
        $this->anexo = $anexo;

        return $this;
    }

    /**
     * Get anexo
     *
     * @return string 
     */
    public function getAnexo() {
        return $this->anexo;
    }

    /**
     * Set observacao
     *
     * @param string $observacao
     * @return Candidato
     */
    public function setObservacao($observacao) {
        $this->observacao = $observacao;

        return $this;
    }

    /**
     * Get observacao
     *
     * @return string 
     */
    public function getObservacao() {
        return $this->observacao;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Candidato
     */
    public function setEstado($estado) {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado() {
        return $this->estado;
    }

    /**
     * Set pessoa
     *
     * @param \sifena\sifenaBundle\Entity\Pessoa $pessoa
     * @return Candidato
     */
    public function setPessoa(\sifena\sifenaBundle\Entity\Pessoa $pessoa) {
        $this->pessoa = $pessoa;

        return $this;
    }

    /**
     * Get pessoa
     *
     * @return \sifena\sifenaBundle\Entity\Pessoa 
     */
    public function getPessoa() {
        return $this->pessoa;
    }

    /**
     * Set formacao
     *
     * @param \sifena\sifenaBundle\Entity\Formacao $formacao
     * @return Candidato
     */
    public function setFormacao(\sifena\sifenaBundle\Entity\Formacao $formacao = null) {
        $this->formacao = $formacao;

        return $this;
    }

    /**
     * Get formacao
     *
     * @return \sifena\sifenaBundle\Entity\Formacao 
     */
    public function getFormacao() {
        return $this->formacao;
    }

}
