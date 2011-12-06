<?php

namespace Dnu\SiteBundle\Entity;

class Member
{
    protected $firstName;

    protected $lastName;

    protected $birthCommune;

    protected $birthProvince;

    protected $birthDate;

    protected $parentFirstName;

    protected $parentLastName;

    protected $residencyCommune;

    protected $residencyProvince;

    protected $address;

    protected $civNum;

    protected $telephone;

    protected $email;

    protected $privacyAcceptance;

    protected $termsAcceptance;

    protected $newsletterAcceptance;

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function getBirthCommune()
    {
        return $this->birthCommune;
    }

    public function setBirthCommune($birthCommune)
    {
        $this->birthCommune = $birthCommune;
    }

    public function getBirthProvince()
    {
        return $this->birthProvince;
    }

    public function setBirthProvince($birthProvince)
    {
        $this->birthProvince = $birthProvince;
    }

    public function getBirthDate()
    {
        return $this->birthDate;
    }

    public function setBirthDate(\DateTime $birthDate)
    {
        $this->birthDate = $birthDate;
    }

    public function getParentFirstName()
    {
        return $this->parentFirstName;
    }

    public function setParentFirstName($parentFirstName)
    {
        $this->parentFirstName = $parentFirstName;
    }

    public function getParentLastName()
    { 
        return $this->parentLastName;
    }
    
    public function setParentLastName($parentLastName)
    {
        $this->parentLastName = $parentLastName;
    }

    public function getResidencyCommune()
    {
        return $this->residencyCommune;
    }

    public function setResidencyCommune($residencyCommune)
    {
        $this->residencyCommune = $residencyCommune;
    }
 
    public function getResidencyProvince()
    {
        return $this->residencyProvince;
    }
 
    public function setResidencyProvince($residencyProvince)
    {
        $this->residencyProvince = $residencyProvince;
    }
    
    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function getCivNum()
    {
        return $this->civNum;
    }

    public function setCivNum($civNum)
    {
        $this->civNum = $civNum;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPrivacyAcceptance()
    {
        return $this->privacyAcceptance;
    }

    public function setPrivacyAcceptance($privacyAcceptance)
    {
        $this->privacyAcceptance = $privacyAcceptance;
    }

    public function getTermsAcceptance()
    {
        return $this->termsAcceptance;
    }

    public function setTermsAcceptance($termsAcceptance)
    {
        $this->termsAcceptance = $termsAcceptance;
    }

    public function getNewsletterAcceptance()
    {
        return $this->newsletterAcceptance;
    }

    public function setNewsletterAcceptance($newsletterAcceptance)
    {
        $this->newsletterAcceptance = $newsletterAcceptance;
    }

    public function getPrivacyText()
    {
        return file_get_contents('bundles/dnusite/privacy.txt');
    }

    public function setPrivacyText($dummy) {}

    public function getTermsText()
    {
        return file_get_contents('bundles/dnusite/acceptance.txt');
    }

    public function setTermsText($dummy) {}
}
