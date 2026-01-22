<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalTokenBasedSapIagConnectionInfo extends ConnectionInfo implements Parsable 
{
    /**
     * Instantiates a new ExternalTokenBasedSapIagConnectionInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalTokenBasedSapIagConnectionInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalTokenBasedSapIagConnectionInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalTokenBasedSapIagConnectionInfo {
        return new ExternalTokenBasedSapIagConnectionInfo();
    }

    /**
     * Gets the accessTokenUrl property value. The accessTokenUrl property
     * @return string|null
    */
    public function getAccessTokenUrl(): ?string {
        $val = $this->getBackingStore()->get('accessTokenUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessTokenUrl'");
    }

    /**
     * Gets the clientId property value. The clientId property
     * @return string|null
    */
    public function getClientId(): ?string {
        $val = $this->getBackingStore()->get('clientId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'clientId'");
    }

    /**
     * Gets the domain property value. The domain property
     * @return string|null
    */
    public function getDomain(): ?string {
        $val = $this->getBackingStore()->get('domain');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domain'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessTokenUrl' => fn(ParseNode $n) => $o->setAccessTokenUrl($n->getStringValue()),
            'clientId' => fn(ParseNode $n) => $o->setClientId($n->getStringValue()),
            'domain' => fn(ParseNode $n) => $o->setDomain($n->getStringValue()),
            'keyVaultName' => fn(ParseNode $n) => $o->setKeyVaultName($n->getStringValue()),
            'resourceGroup' => fn(ParseNode $n) => $o->setResourceGroup($n->getStringValue()),
            'secretName' => fn(ParseNode $n) => $o->setSecretName($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the keyVaultName property value. The keyVaultName property
     * @return string|null
    */
    public function getKeyVaultName(): ?string {
        $val = $this->getBackingStore()->get('keyVaultName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keyVaultName'");
    }

    /**
     * Gets the resourceGroup property value. The resourceGroup property
     * @return string|null
    */
    public function getResourceGroup(): ?string {
        $val = $this->getBackingStore()->get('resourceGroup');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceGroup'");
    }

    /**
     * Gets the secretName property value. The secretName property
     * @return string|null
    */
    public function getSecretName(): ?string {
        $val = $this->getBackingStore()->get('secretName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secretName'");
    }

    /**
     * Gets the subscriptionId property value. The subscriptionId property
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        $val = $this->getBackingStore()->get('subscriptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('accessTokenUrl', $this->getAccessTokenUrl());
        $writer->writeStringValue('clientId', $this->getClientId());
        $writer->writeStringValue('domain', $this->getDomain());
        $writer->writeStringValue('keyVaultName', $this->getKeyVaultName());
        $writer->writeStringValue('resourceGroup', $this->getResourceGroup());
        $writer->writeStringValue('secretName', $this->getSecretName());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
    }

    /**
     * Sets the accessTokenUrl property value. The accessTokenUrl property
     * @param string|null $value Value to set for the accessTokenUrl property.
    */
    public function setAccessTokenUrl(?string $value): void {
        $this->getBackingStore()->set('accessTokenUrl', $value);
    }

    /**
     * Sets the clientId property value. The clientId property
     * @param string|null $value Value to set for the clientId property.
    */
    public function setClientId(?string $value): void {
        $this->getBackingStore()->set('clientId', $value);
    }

    /**
     * Sets the domain property value. The domain property
     * @param string|null $value Value to set for the domain property.
    */
    public function setDomain(?string $value): void {
        $this->getBackingStore()->set('domain', $value);
    }

    /**
     * Sets the keyVaultName property value. The keyVaultName property
     * @param string|null $value Value to set for the keyVaultName property.
    */
    public function setKeyVaultName(?string $value): void {
        $this->getBackingStore()->set('keyVaultName', $value);
    }

    /**
     * Sets the resourceGroup property value. The resourceGroup property
     * @param string|null $value Value to set for the resourceGroup property.
    */
    public function setResourceGroup(?string $value): void {
        $this->getBackingStore()->set('resourceGroup', $value);
    }

    /**
     * Sets the secretName property value. The secretName property
     * @param string|null $value Value to set for the secretName property.
    */
    public function setSecretName(?string $value): void {
        $this->getBackingStore()->set('secretName', $value);
    }

    /**
     * Sets the subscriptionId property value. The subscriptionId property
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

}
