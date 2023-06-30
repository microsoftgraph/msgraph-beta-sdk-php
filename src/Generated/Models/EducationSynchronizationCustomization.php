<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EducationSynchronizationCustomization implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new educationSynchronizationCustomization and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EducationSynchronizationCustomization
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EducationSynchronizationCustomization {
        return new EducationSynchronizationCustomization();
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
     * Gets the allowDisplayNameUpdate property value. Indicates whether the display name of the resource can be overwritten by the sync.
     * @return bool|null
    */
    public function getAllowDisplayNameUpdate(): ?bool {
        $val = $this->getBackingStore()->get('allowDisplayNameUpdate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowDisplayNameUpdate'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
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
            'allowDisplayNameUpdate' => fn(ParseNode $n) => $o->setAllowDisplayNameUpdate($n->getBooleanValue()),
            'isSyncDeferred' => fn(ParseNode $n) => $o->setIsSyncDeferred($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'optionalPropertiesToSync' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setOptionalPropertiesToSync($val);
            },
            'synchronizationStartDate' => fn(ParseNode $n) => $o->setSynchronizationStartDate($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the isSyncDeferred property value. Indicates whether synchronization of the parent entity is deferred to a later date.
     * @return bool|null
    */
    public function getIsSyncDeferred(): ?bool {
        $val = $this->getBackingStore()->get('isSyncDeferred');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSyncDeferred'");
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
     * Gets the optionalPropertiesToSync property value. The collection of property names to sync. If set to null, all properties will be synchronized. Does not apply to Student Enrollments or Teacher Rosters
     * @return array<string>|null
    */
    public function getOptionalPropertiesToSync(): ?array {
        $val = $this->getBackingStore()->get('optionalPropertiesToSync');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'optionalPropertiesToSync'");
    }

    /**
     * Gets the synchronizationStartDate property value. The date that the synchronization should start. This value should be set to a future date. If set to null, the resource will be synchronized when the profile setup completes. Only applies to Student Enrollments
     * @return DateTime|null
    */
    public function getSynchronizationStartDate(): ?DateTime {
        $val = $this->getBackingStore()->get('synchronizationStartDate');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'synchronizationStartDate'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('allowDisplayNameUpdate', $this->getAllowDisplayNameUpdate());
        $writer->writeBooleanValue('isSyncDeferred', $this->getIsSyncDeferred());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfPrimitiveValues('optionalPropertiesToSync', $this->getOptionalPropertiesToSync());
        $writer->writeDateTimeValue('synchronizationStartDate', $this->getSynchronizationStartDate());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the allowDisplayNameUpdate property value. Indicates whether the display name of the resource can be overwritten by the sync.
     * @param bool|null $value Value to set for the allowDisplayNameUpdate property.
    */
    public function setAllowDisplayNameUpdate(?bool $value): void {
        $this->getBackingStore()->set('allowDisplayNameUpdate', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the isSyncDeferred property value. Indicates whether synchronization of the parent entity is deferred to a later date.
     * @param bool|null $value Value to set for the isSyncDeferred property.
    */
    public function setIsSyncDeferred(?bool $value): void {
        $this->getBackingStore()->set('isSyncDeferred', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the optionalPropertiesToSync property value. The collection of property names to sync. If set to null, all properties will be synchronized. Does not apply to Student Enrollments or Teacher Rosters
     * @param array<string>|null $value Value to set for the optionalPropertiesToSync property.
    */
    public function setOptionalPropertiesToSync(?array $value): void {
        $this->getBackingStore()->set('optionalPropertiesToSync', $value);
    }

    /**
     * Sets the synchronizationStartDate property value. The date that the synchronization should start. This value should be set to a future date. If set to null, the resource will be synchronized when the profile setup completes. Only applies to Student Enrollments
     * @param DateTime|null $value Value to set for the synchronizationStartDate property.
    */
    public function setSynchronizationStartDate(?DateTime $value): void {
        $this->getBackingStore()->set('synchronizationStartDate', $value);
    }

}
