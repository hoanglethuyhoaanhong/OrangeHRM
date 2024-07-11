<?php

namespace DoctrineProxies\__CG__\OrangeHRM\Entity;


/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ClaimAttachment extends \OrangeHRM\Entity\ClaimAttachment implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'requestId', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'attachId', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'size', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'description', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'filename', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'attachment', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'fileType', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'user', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'attachedDate', 'entityDecorator'];
        }

        return ['__isInitialized__', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'requestId', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'attachId', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'size', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'description', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'filename', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'attachment', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'fileType', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'user', '' . "\0" . 'OrangeHRM\\Entity\\ClaimAttachment' . "\0" . 'attachedDate', 'entityDecorator'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ClaimAttachment $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
    public function __load(): void
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized(): bool
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized): void
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null): void
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer(): ?\Closure
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null): void
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner(): ?\Closure
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties(): array
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getRequestId(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getRequestId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRequestId', []);

        return parent::getRequestId();
    }

    /**
     * {@inheritDoc}
     */
    public function setRequestId(int $requestId): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRequestId', [$requestId]);

        parent::setRequestId($requestId);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttachId(): int
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getAttachId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttachId', []);

        return parent::getAttachId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttachId(int $attachId): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttachId', [$attachId]);

        parent::setAttachId($attachId);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', []);

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setSize(?int $size): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', [$size]);

        parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(?string $description): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilename(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilename', []);

        return parent::getFilename();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilename(?string $filename): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilename', [$filename]);

        parent::setFilename($filename);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttachment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttachment', []);

        return parent::getAttachment();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttachment(string $attachment): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttachment', [$attachment]);

        parent::setAttachment($attachment);
    }

    /**
     * {@inheritDoc}
     */
    public function getFileType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFileType', []);

        return parent::getFileType();
    }

    /**
     * {@inheritDoc}
     */
    public function setFileType(?string $fileType): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFileType', [$fileType]);

        parent::setFileType($fileType);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\OrangeHRM\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\OrangeHRM\Entity\User $user): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttachedDate(): \DateTime
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttachedDate', []);

        return parent::getAttachedDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttachedDate(\DateTime $attachedDate): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttachedDate', [$attachedDate]);

        parent::setAttachedDate($attachedDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDecorator(): object
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDecorator', []);

        return parent::getDecorator();
    }

}
