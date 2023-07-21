<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AppleOwnerTypeEnrollmentType implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new appleOwnerTypeEnrollmentType and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppleOwnerTypeEnrollmentType
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppleOwnerTypeEnrollmentType {
        return new AppleOwnerTypeEnrollmentType();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the enrollmentType property value. The enrollmentType property
     * @return AppleUserInitiatedEnrollmentType|null
    */
    public function getEnrollmentType(): ?AppleUserInitiatedEnrollmentType {
        $val = $this->getBackingStore()->get('enrollmentType');
        if (is_null($val) || $val instanceof AppleUserInitiatedEnrollmentType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'enrollmentType' => fn(ParseNode $n) => $o->setEnrollmentType($n->getEnumValue(AppleUserInitiatedEnrollmentType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ownerType' => fn(ParseNode $n) => $o->setOwnerType($n->getEnumValue(ManagedDeviceOwnerType::class)),
        ];
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
     * Gets the ownerType property value. Owner type of device.
     * @return ManagedDeviceOwnerType|null
    */
    public function getOwnerType(): ?ManagedDeviceOwnerType {
        $val = $this->getBackingStore()->get('ownerType');
        if (is_null($val) || $val instanceof ManagedDeviceOwnerType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('enrollmentType', $this->getEnrollmentType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('ownerType', $this->getOwnerType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the enrollmentType property value. The enrollmentType property
     * @param AppleUserInitiatedEnrollmentType|null $value Value to set for the enrollmentType property.
    */
    public function setEnrollmentType(?AppleUserInitiatedEnrollmentType $value): void {
        $this->getBackingStore()->set('enrollmentType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the ownerType property value. Owner type of device.
     * @param ManagedDeviceOwnerType|null $value Value to set for the ownerType property.
    */
    public function setOwnerType(?ManagedDeviceOwnerType $value): void {
        $this->getBackingStore()->set('ownerType', $value);
    }

}
