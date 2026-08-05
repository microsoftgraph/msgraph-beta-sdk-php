<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExternalSapAcConnectionInfo extends ConnectionInfo implements Parsable 
{
    /**
     * Instantiates a new ExternalSapAcConnectionInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.externalSapAcConnectionInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExternalSapAcConnectionInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExternalSapAcConnectionInfo {
        return new ExternalSapAcConnectionInfo();
    }

    /**
     * Gets the authenticationInfo property value. The authenticationInfo property
     * @return AuthenticationInfo|null
    */
    public function getAuthenticationInfo(): ?AuthenticationInfo {
        $val = $this->getBackingStore()->get('authenticationInfo');
        if (is_null($val) || $val instanceof AuthenticationInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationInfo'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationInfo' => fn(ParseNode $n) => $o->setAuthenticationInfo($n->getObjectValue([AuthenticationInfo::class, 'createFromDiscriminatorValue'])),
            'keyVaultName' => fn(ParseNode $n) => $o->setKeyVaultName($n->getStringValue()),
            'resourceGroup' => fn(ParseNode $n) => $o->setResourceGroup($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'systemId' => fn(ParseNode $n) => $o->setSystemId($n->getStringValue()),
            'userIdentifier' => fn(ParseNode $n) => $o->setUserIdentifier($n->getStringValue()),
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
     * Gets the systemId property value. The systemId property
     * @return string|null
    */
    public function getSystemId(): ?string {
        $val = $this->getBackingStore()->get('systemId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemId'");
    }

    /**
     * Gets the userIdentifier property value. The userIdentifier property
     * @return string|null
    */
    public function getUserIdentifier(): ?string {
        $val = $this->getBackingStore()->get('userIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userIdentifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('authenticationInfo', $this->getAuthenticationInfo());
        $writer->writeStringValue('keyVaultName', $this->getKeyVaultName());
        $writer->writeStringValue('resourceGroup', $this->getResourceGroup());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('systemId', $this->getSystemId());
        $writer->writeStringValue('userIdentifier', $this->getUserIdentifier());
    }

    /**
     * Sets the authenticationInfo property value. The authenticationInfo property
     * @param AuthenticationInfo|null $value Value to set for the authenticationInfo property.
    */
    public function setAuthenticationInfo(?AuthenticationInfo $value): void {
        $this->getBackingStore()->set('authenticationInfo', $value);
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
     * Sets the subscriptionId property value. The subscriptionId property
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

    /**
     * Sets the systemId property value. The systemId property
     * @param string|null $value Value to set for the systemId property.
    */
    public function setSystemId(?string $value): void {
        $this->getBackingStore()->set('systemId', $value);
    }

    /**
     * Sets the userIdentifier property value. The userIdentifier property
     * @param string|null $value Value to set for the userIdentifier property.
    */
    public function setUserIdentifier(?string $value): void {
        $this->getBackingStore()->set('userIdentifier', $value);
    }

}
