<?php

namespace sifena\sifenaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * Utilizador
 *
 * @ORM\Table(name="utilizador")
 * @ORM\Entity(repositoryClass="sifena\sifenaBundle\Repository\UtilizadorRepository")
 */
class Utilizador implements AdvancedUserInterface,  \Serializable {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=64)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=60)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    public function __construct() {
        $this->isActive = true;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Utilizador
     */
    public function setUsername($username) {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Utilizador
     */
    public function setPassword($password) {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword() {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Utilizador
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return Utilizador
     */
    public function setIsActive($isActive) {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive() {
        return $this->isActive;
    }

    /** @see \Serializable::serialize() */
    public function serialize() {
        return serialize(array(
            $this->id,
            $this->username,
            $this->password,
            $this->isActive
// see section on salt below
// $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized) {
        list (
                $this->id,
                $this->username,
                $this->password,
                $this->isActive,
                ) = unserialize($serialized);
    }

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        return array('ROLE_ADMIN');
    }

    public function getSalt() {
        // you *may* need a real salt depending on your encoder
// see section on salt below
        return null;
    }

    public function isAccountNonExpired() {
       return true; 
    }

    public function isAccountNonLocked() {
       return true; 
    }

    public function isCredentialsNonExpired() {
       return true; 
    }

    public function isEnabled() {
        return $this->isActive;
    }
    
    public function __toString() {
        return $this->getUsername();
    }

}
