<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ActivityLog implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ActivityLog and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ActivityLog
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ActivityLog {
        return new ActivityLog();
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'statusFrom' => fn(ParseNode $n) => $o->setStatusFrom($n->getEnumValue(SecurityAlertStatus::class)),
            'statusTo' => fn(ParseNode $n) => $o->setStatusTo($n->getEnumValue(SecurityAlertStatus::class)),
            'updatedBy' => fn(ParseNode $n) => $o->setUpdatedBy($n->getStringValue()),
            'updatedDateTime' => fn(ParseNode $n) => $o->setUpdatedDateTime($n->getDateTimeValue()),
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
     * Gets the statusFrom property value. The statusFrom property
     * @return SecurityAlertStatus|null
    */
    public function getStatusFrom(): ?SecurityAlertStatus {
        $val = $this->getBackingStore()->get('statusFrom');
        if (is_null($val) || $val instanceof SecurityAlertStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusFrom'");
    }

    /**
     * Gets the statusTo property value. The statusTo property
     * @return SecurityAlertStatus|null
    */
    public function getStatusTo(): ?SecurityAlertStatus {
        $val = $this->getBackingStore()->get('statusTo');
        if (is_null($val) || $val instanceof SecurityAlertStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statusTo'");
    }

    /**
     * Gets the updatedBy property value. The UPN of the partner user who did the status update activity. This attribute is set by the system.
     * @return string|null
    */
    public function getUpdatedBy(): ?string {
        $val = $this->getBackingStore()->get('updatedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updatedBy'");
    }

    /**
     * Gets the updatedDateTime property value. The date and time for the status update activity. This attribute is set by the system. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('updatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updatedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('statusFrom', $this->getStatusFrom());
        $writer->writeEnumValue('statusTo', $this->getStatusTo());
        $writer->writeStringValue('updatedBy', $this->getUpdatedBy());
        $writer->writeDateTimeValue('updatedDateTime', $this->getUpdatedDateTime());
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
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the statusFrom property value. The statusFrom property
     * @param SecurityAlertStatus|null $value Value to set for the statusFrom property.
    */
    public function setStatusFrom(?SecurityAlertStatus $value): void {
        $this->getBackingStore()->set('statusFrom', $value);
    }

    /**
     * Sets the statusTo property value. The statusTo property
     * @param SecurityAlertStatus|null $value Value to set for the statusTo property.
    */
    public function setStatusTo(?SecurityAlertStatus $value): void {
        $this->getBackingStore()->set('statusTo', $value);
    }

    /**
     * Sets the updatedBy property value. The UPN of the partner user who did the status update activity. This attribute is set by the system.
     * @param string|null $value Value to set for the updatedBy property.
    */
    public function setUpdatedBy(?string $value): void {
        $this->getBackingStore()->set('updatedBy', $value);
    }

    /**
     * Sets the updatedDateTime property value. The date and time for the status update activity. This attribute is set by the system. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the updatedDateTime property.
    */
    public function setUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('updatedDateTime', $value);
    }

}
