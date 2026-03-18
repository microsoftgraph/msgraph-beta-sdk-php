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

class OffboardingDetails implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new OffboardingDetails and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OffboardingDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OffboardingDetails {
        return new OffboardingDetails();
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
     * Gets the cancelledCount property value. The cancelledCount property
     * @return int|null
    */
    public function getCancelledCount(): ?int {
        $val = $this->getBackingStore()->get('cancelledCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cancelledCount'");
    }

    /**
     * Gets the failedCount property value. The failedCount property
     * @return int|null
    */
    public function getFailedCount(): ?int {
        $val = $this->getBackingStore()->get('failedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'failedCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cancelledCount' => fn(ParseNode $n) => $o->setCancelledCount($n->getIntegerValue()),
            'failedCount' => fn(ParseNode $n) => $o->setFailedCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'offboardedCount' => fn(ParseNode $n) => $o->setOffboardedCount($n->getIntegerValue()),
            'offboardEndDateTime' => fn(ParseNode $n) => $o->setOffboardEndDateTime($n->getDateTimeValue()),
            'offboardingStatus' => fn(ParseNode $n) => $o->setOffboardingStatus($n->getStringValue()),
            'offboardStartDateTime' => fn(ParseNode $n) => $o->setOffboardStartDateTime($n->getDateTimeValue()),
            'totalRequestedCount' => fn(ParseNode $n) => $o->setTotalRequestedCount($n->getIntegerValue()),
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
     * Gets the offboardedCount property value. The offboardedCount property
     * @return int|null
    */
    public function getOffboardedCount(): ?int {
        $val = $this->getBackingStore()->get('offboardedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offboardedCount'");
    }

    /**
     * Gets the offboardEndDateTime property value. The offboardEndDateTime property
     * @return DateTime|null
    */
    public function getOffboardEndDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('offboardEndDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offboardEndDateTime'");
    }

    /**
     * Gets the offboardingStatus property value. The offboardingStatus property
     * @return string|null
    */
    public function getOffboardingStatus(): ?string {
        $val = $this->getBackingStore()->get('offboardingStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offboardingStatus'");
    }

    /**
     * Gets the offboardStartDateTime property value. The offboardStartDateTime property
     * @return DateTime|null
    */
    public function getOffboardStartDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('offboardStartDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offboardStartDateTime'");
    }

    /**
     * Gets the totalRequestedCount property value. The totalRequestedCount property
     * @return int|null
    */
    public function getTotalRequestedCount(): ?int {
        $val = $this->getBackingStore()->get('totalRequestedCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalRequestedCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('cancelledCount', $this->getCancelledCount());
        $writer->writeIntegerValue('failedCount', $this->getFailedCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('offboardedCount', $this->getOffboardedCount());
        $writer->writeDateTimeValue('offboardEndDateTime', $this->getOffboardEndDateTime());
        $writer->writeStringValue('offboardingStatus', $this->getOffboardingStatus());
        $writer->writeDateTimeValue('offboardStartDateTime', $this->getOffboardStartDateTime());
        $writer->writeIntegerValue('totalRequestedCount', $this->getTotalRequestedCount());
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
     * Sets the cancelledCount property value. The cancelledCount property
     * @param int|null $value Value to set for the cancelledCount property.
    */
    public function setCancelledCount(?int $value): void {
        $this->getBackingStore()->set('cancelledCount', $value);
    }

    /**
     * Sets the failedCount property value. The failedCount property
     * @param int|null $value Value to set for the failedCount property.
    */
    public function setFailedCount(?int $value): void {
        $this->getBackingStore()->set('failedCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the offboardedCount property value. The offboardedCount property
     * @param int|null $value Value to set for the offboardedCount property.
    */
    public function setOffboardedCount(?int $value): void {
        $this->getBackingStore()->set('offboardedCount', $value);
    }

    /**
     * Sets the offboardEndDateTime property value. The offboardEndDateTime property
     * @param DateTime|null $value Value to set for the offboardEndDateTime property.
    */
    public function setOffboardEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('offboardEndDateTime', $value);
    }

    /**
     * Sets the offboardingStatus property value. The offboardingStatus property
     * @param string|null $value Value to set for the offboardingStatus property.
    */
    public function setOffboardingStatus(?string $value): void {
        $this->getBackingStore()->set('offboardingStatus', $value);
    }

    /**
     * Sets the offboardStartDateTime property value. The offboardStartDateTime property
     * @param DateTime|null $value Value to set for the offboardStartDateTime property.
    */
    public function setOffboardStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('offboardStartDateTime', $value);
    }

    /**
     * Sets the totalRequestedCount property value. The totalRequestedCount property
     * @param int|null $value Value to set for the totalRequestedCount property.
    */
    public function setTotalRequestedCount(?int $value): void {
        $this->getBackingStore()->set('totalRequestedCount', $value);
    }

}
