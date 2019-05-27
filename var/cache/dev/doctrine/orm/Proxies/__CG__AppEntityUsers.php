<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Users extends \App\Entity\Users implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'idUser', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'emailConfirmed', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'mobile', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'userName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'isPro', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'idMainAddress', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'pidType'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'idUser', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'email', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'emailConfirmed', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'mobile', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'firstName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'lastName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'userName', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'password', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'isPro', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'idMainAddress', '' . "\0" . 'App\\Entity\\Users' . "\0" . 'pidType'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Users $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getIdUser(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getIdUser();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUser', []);

        return parent::getIdUser();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailConfirmed(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailConfirmed', []);

        return parent::getEmailConfirmed();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailConfirmed(?bool $emailConfirmed): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailConfirmed', [$emailConfirmed]);

        return parent::setEmailConfirmed($emailConfirmed);
    }

    /**
     * {@inheritDoc}
     */
    public function getMobile(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMobile', []);

        return parent::getMobile();
    }

    /**
     * {@inheritDoc}
     */
    public function setMobile(string $mobile): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMobile', [$mobile]);

        return parent::setMobile($mobile);
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstName', []);

        return parent::getFirstName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstName(string $firstName): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstName', [$firstName]);

        return parent::setFirstName($firstName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastName', []);

        return parent::getLastName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastName(string $lastName): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastName', [$lastName]);

        return parent::setLastName($lastName);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserName', []);

        return parent::getUserName();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserName(?string $userName): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserName', [$userName]);

        return parent::setUserName($userName);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPro(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPro', []);

        return parent::getIsPro();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPro(?bool $isPro): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPro', [$isPro]);

        return parent::setIsPro($isPro);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdMainAddress(): ?\App\Entity\Addresses
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdMainAddress', []);

        return parent::getIdMainAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdMainAddress(?\App\Entity\Addresses $idMainAddress): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdMainAddress', [$idMainAddress]);

        return parent::setIdMainAddress($idMainAddress);
    }

    /**
     * {@inheritDoc}
     */
    public function getPidType(): ?\App\Entity\TypeIdentifyDocument
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPidType', []);

        return parent::getPidType();
    }

    /**
     * {@inheritDoc}
     */
    public function setPidType(?\App\Entity\TypeIdentifyDocument $pidType): \App\Entity\Users
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPidType', [$pidType]);

        return parent::setPidType($pidType);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function serialize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        return parent::unserialize($serialized);
    }

}
