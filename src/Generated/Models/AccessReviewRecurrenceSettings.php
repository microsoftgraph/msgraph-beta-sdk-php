<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AccessReviewRecurrenceSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AccessReviewRecurrenceSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessReviewRecurrenceSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessReviewRecurrenceSettings {
        return new AccessReviewRecurrenceSettings();
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
     * Gets the durationInDays property value. The duration in days for recurrence.
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        $val = $this->getBackingStore()->get('durationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationInDays'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'durationInDays' => fn(ParseNode $n) => $o->setDurationInDays($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recurrenceCount' => fn(ParseNode $n) => $o->setRecurrenceCount($n->getIntegerValue()),
            'recurrenceEndType' => fn(ParseNode $n) => $o->setRecurrenceEndType($n->getStringValue()),
            'recurrenceType' => fn(ParseNode $n) => $o->setRecurrenceType($n->getStringValue()),
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
     * Gets the recurrenceCount property value. The count of recurrences, if the value of recurrenceEndType is occurrences, or 0 otherwise.
     * @return int|null
    */
    public function getRecurrenceCount(): ?int {
        $val = $this->getBackingStore()->get('recurrenceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrenceCount'");
    }

    /**
     * Gets the recurrenceEndType property value. How the recurrence ends. Possible values: never, endBy, occurrences, or recurrenceCount. If it's never, then there's no explicit end of the recurrence series. If it's endBy, then the recurrence ends at a certain date. If it's occurrences, then the series ends after recurrenceCount instances of the review have completed.
     * @return string|null
    */
    public function getRecurrenceEndType(): ?string {
        $val = $this->getBackingStore()->get('recurrenceEndType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrenceEndType'");
    }

    /**
     * Gets the recurrenceType property value. The recurrence interval. Possible values: onetime, weekly, monthly, quarterly, halfyearly or annual.
     * @return string|null
    */
    public function getRecurrenceType(): ?string {
        $val = $this->getBackingStore()->get('recurrenceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recurrenceType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('durationInDays', $this->getDurationInDays());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('recurrenceCount', $this->getRecurrenceCount());
        $writer->writeStringValue('recurrenceEndType', $this->getRecurrenceEndType());
        $writer->writeStringValue('recurrenceType', $this->getRecurrenceType());
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
     * Sets the durationInDays property value. The duration in days for recurrence.
     * @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value): void {
        $this->getBackingStore()->set('durationInDays', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recurrenceCount property value. The count of recurrences, if the value of recurrenceEndType is occurrences, or 0 otherwise.
     * @param int|null $value Value to set for the recurrenceCount property.
    */
    public function setRecurrenceCount(?int $value): void {
        $this->getBackingStore()->set('recurrenceCount', $value);
    }

    /**
     * Sets the recurrenceEndType property value. How the recurrence ends. Possible values: never, endBy, occurrences, or recurrenceCount. If it's never, then there's no explicit end of the recurrence series. If it's endBy, then the recurrence ends at a certain date. If it's occurrences, then the series ends after recurrenceCount instances of the review have completed.
     * @param string|null $value Value to set for the recurrenceEndType property.
    */
    public function setRecurrenceEndType(?string $value): void {
        $this->getBackingStore()->set('recurrenceEndType', $value);
    }

    /**
     * Sets the recurrenceType property value. The recurrence interval. Possible values: onetime, weekly, monthly, quarterly, halfyearly or annual.
     * @param string|null $value Value to set for the recurrenceType property.
    */
    public function setRecurrenceType(?string $value): void {
        $this->getBackingStore()->set('recurrenceType', $value);
    }

}
