<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AzureADJoinPolicy implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AzureADJoinPolicy and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureADJoinPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AzureADJoinPolicy {
        return new AzureADJoinPolicy();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the allowedToJoin property value. Determines if Microsoft Entra join is allowed.
     * @return DeviceRegistrationMembership|null
    */
    public function getAllowedToJoin(): ?DeviceRegistrationMembership {
        $val = $this->getBackingStore()->get('allowedToJoin');
        if (is_null($val) || $val instanceof DeviceRegistrationMembership) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowedToJoin'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedToJoin' => fn(ParseNode $n) => $o->setAllowedToJoin($n->getObjectValue([DeviceRegistrationMembership::class, 'createFromDiscriminatorValue'])),
            'isAdminConfigurable' => fn(ParseNode $n) => $o->setIsAdminConfigurable($n->getBooleanValue()),
            'localAdmins' => fn(ParseNode $n) => $o->setLocalAdmins($n->getObjectValue([LocalAdminSettings::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isAdminConfigurable property value. Determines if administrators can modify this policy.
     * @return bool|null
    */
    public function getIsAdminConfigurable(): ?bool {
        $val = $this->getBackingStore()->get('isAdminConfigurable');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isAdminConfigurable'");
    }

    /**
     * Gets the localAdmins property value. Determines who becomes a local administrator on joined devices.
     * @return LocalAdminSettings|null
    */
    public function getLocalAdmins(): ?LocalAdminSettings {
        $val = $this->getBackingStore()->get('localAdmins');
        if (is_null($val) || $val instanceof LocalAdminSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localAdmins'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('allowedToJoin', $this->getAllowedToJoin());
        $writer->writeBooleanValue('isAdminConfigurable', $this->getIsAdminConfigurable());
        $writer->writeObjectValue('localAdmins', $this->getLocalAdmins());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowedToJoin property value. Determines if Microsoft Entra join is allowed.
     * @param DeviceRegistrationMembership|null $value Value to set for the allowedToJoin property.
    */
    public function setAllowedToJoin(?DeviceRegistrationMembership $value): void {
        $this->getBackingStore()->set('allowedToJoin', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isAdminConfigurable property value. Determines if administrators can modify this policy.
     * @param bool|null $value Value to set for the isAdminConfigurable property.
    */
    public function setIsAdminConfigurable(?bool $value): void {
        $this->getBackingStore()->set('isAdminConfigurable', $value);
    }

    /**
     * Sets the localAdmins property value. Determines who becomes a local administrator on joined devices.
     * @param LocalAdminSettings|null $value Value to set for the localAdmins property.
    */
    public function setLocalAdmins(?LocalAdminSettings $value): void {
        $this->getBackingStore()->set('localAdmins', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
