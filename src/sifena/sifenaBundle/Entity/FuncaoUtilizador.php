<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuncaoUtilizador
 */
class FuncaoUtilizador
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \sifena\sifenaBundle\Entity\Utilizador
     */
    private $utilizador;

    /**
     * @var \sifena\sifenaBundle\Entity\Funcao
     */
    private $funcao;


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
     * Set utilizador
     *
     * @param \sifena\sifenaBundle\Entity\Utilizador $utilizador
     * @return FuncaoUtilizador
     */
    public function setUtilizador(\sifena\sifenaBundle\Entity\Utilizador $utilizador = null)
    {
        $this->utilizador = $utilizador;

        return $this;
    }

    /**
     * Get utilizador
     *
     * @return \sifena\sifenaBundle\Entity\Utilizador 
     */
    public function getUtilizador()
    {
        return $this->utilizador;
    }

    /**
     * Set funcao
     *
     * @param \sifena\sifenaBundle\Entity\Funcao $funcao
     * @return FuncaoUtilizador
     */
    public function setFuncao(\sifena\sifenaBundle\Entity\Funcao $funcao = null)
    {
        $this->funcao = $funcao;

        return $this;
    }

    /**
     * Get funcao
     *
     * @return \sifena\sifenaBundle\Entity\Funcao 
     */
    public function getFuncao()
    {
        return $this->funcao;
    }
}
