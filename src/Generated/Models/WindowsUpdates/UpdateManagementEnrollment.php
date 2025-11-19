<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class UpdateManagementEnrollment implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new UpdateManagementEnrollment and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateManagementEnrollment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateManagementEnrollment {
        return new UpdateManagementEnrollment();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the driver property value. The driver property
     * @return UpdateCategoryEnrollmentInformation|null
    */
    public function getDriver(): ?UpdateCategoryEnrollmentInformation {
        $val = $this->getBackingStore()->get('driver');
        if (is_null($val) || $val instanceof UpdateCategoryEnrollmentInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driver'");
    }

    /**
     * Gets the feature property value. The feature property
     * @return UpdateCategoryEnrollmentInformation|null
    */
    public function getFeature(): ?UpdateCategoryEnrollmentInformation {
        $val = $this->getBackingStore()->get('feature');
        if (is_null($val) || $val instanceof UpdateCategoryEnrollmentInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'feature'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'driver' => fn(ParseNode $n) => $o->setDriver($n->getObjectValue([UpdateCategoryEnrollmentInformation::class, 'createFromDiscriminatorValue'])),
            'feature' => fn(ParseNode $n) => $o->setFeature($n->getObjectValue([UpdateCategoryEnrollmentInformation::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'quality' => fn(ParseNode $n) => $o->setQuality($n->getObjectValue([UpdateCategoryEnrollmentInformation::class, 'createFromDiscriminatorValue'])),
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
     * Gets the quality property value. The quality property
     * @return UpdateCategoryEnrollmentInformation|null
    */
    public function getQuality(): ?UpdateCategoryEnrollmentInformation {
        $val = $this->getBackingStore()->get('quality');
        if (is_null($val) || $val instanceof UpdateCategoryEnrollmentInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quality'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('driver', $this->getDriver());
        $writer->writeObjectValue('feature', $this->getFeature());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('quality', $this->getQuality());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the driver property value. The driver property
     * @param UpdateCategoryEnrollmentInformation|null $value Value to set for the driver property.
    */
    public function setDriver(?UpdateCategoryEnrollmentInformation $value): void {
        $this->getBackingStore()->set('driver', $value);
    }

    /**
     * Sets the feature property value. The feature property
     * @param UpdateCategoryEnrollmentInformation|null $value Value to set for the feature property.
    */
    public function setFeature(?UpdateCategoryEnrollmentInformation $value): void {
        $this->getBackingStore()->set('feature', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the quality property value. The quality property
     * @param UpdateCategoryEnrollmentInformation|null $value Value to set for the quality property.
    */
    public function setQuality(?UpdateCategoryEnrollmentInformation $value): void {
        $this->getBackingStore()->set('quality', $value);
    }

}
