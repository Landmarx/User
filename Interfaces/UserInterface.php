<?php
namespace Landmarx\Component\User\Interfaces;

interface UserInterface
{
    /**
     * Get username
     * @return string
     */
    public function getUsername();
    
    /**
     * Set username
     * @param string $username
     * @return UserInterface
     */
    public function setUsername($username);
    
    /**
     * Get email address
     * @return string
     */
    public function getEmail();
    
    /**
     * Set email address
     * @param string $email
     * @return UserInterface
     */
    public function setEmail($email);
    
    /**
     * Get last name
     * @return string
     */
    public function getLastname();
    
    /**
     * Set last name
     * @param string $lastname
     * @return UserInterface
     */
    public function setLastname($lastname);
    
    /**
     * Get first name
     */
    public function getFirstname();
    
    /**
     * Set first name
     * @param string $firstname
     * @return UserInterface
     */
    public function setFirstname($firstname);
    
    /**
     * Get gender
     * @return string
     */
    public function getGender();
    
    /**
     * Set gender
     * @param string $gender
     * @return UserInterface
     */
    public function setGender($gender);
    
    /**
     * Get birthdate
     * @return \DateTime
     */
    public function getBirthdate();
    
    /**
     * Set birthdate
     * @param \DateTime $birthdate
     * @return UserInterface
     */
    public function setBirthdate(\DateTime $birthdate);
    
    /**
     * Get avatar
     * @return string
     */
    public function getAvatar();
    
    /**
     * Set avatar
     * @param string $avatar
     */
    public function setAvatar($avatar);
    
    /**
     * Get slug
     * @return string
     */
    public function getSlug();
    
    /**
     * Set slug
     * @param slug $slug
     * @return UserInterface
     */
    public function setSlug($slug);
}
