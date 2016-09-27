<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Funcao
 */
class Funcao {

    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $role;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    
    /**
     * Set nome
     *
     * @param string $nome
     * @return Funcao
     */
    public function setNome($nome) {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string 
     */
    public function getNome() {
        return $this->nome;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Funcao
     */
    public function setRole($role) {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string 
     */
    public function getRole() {
        return $this->role;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }
    
    public function __toString() {
        return $this->getNome();
    }

    

}
