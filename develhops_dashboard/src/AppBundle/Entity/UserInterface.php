<?php
namespace AppBundle\Entity;

interface UserInterface
{
  /**
   * @inheritDoc
   */
  public function getUsername();

  /**
   * @inheritDoc
   */
  public function getSalt();

  /**
   * @inheritDoc
   */
  public function getPassword();

  /**
   * @see \Serializable::serialize()
   */
  public function serialize();

  /**
   * @see \Serializable::unserialize()
   */
  public function unserialize($serialized);

  /**
   * Get id
   *
   * @return integer
   */
  public function getId();

  /**
   * Set username
   *
   * @param string $username
   * @return User
   */
  public function setUsername($username);

  /**
   * Set salt
   *
   * @param string $salt
   * @return User
   */
  public function setSalt($salt);

  /**
   * Set password
   *
   * @param string $password
   * @return User
   */
  public function setPassword($password);

  /**
   * Set isAdmin
   *
   * @param boolean $isAdmin
   * @return User
   */
  public function setIsAdmin($isAdmin);

  /**
   * Get isAdmin
   *
   * @return boolean
   */
  public function getIsAdmin();

}
