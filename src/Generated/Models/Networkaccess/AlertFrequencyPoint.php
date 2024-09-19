<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AlertFrequencyPoint implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AlertFrequencyPoint and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertFrequencyPoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertFrequencyPoint {
        return new AlertFrequencyPoint();
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
            'highSeverityCount' => fn(ParseNode $n) => $o->setHighSeverityCount($n->getIntegerValue()),
            'informationalSeverityCount' => fn(ParseNode $n) => $o->setInformationalSeverityCount($n->getIntegerValue()),
            'lowSeverityCount' => fn(ParseNode $n) => $o->setLowSeverityCount($n->getIntegerValue()),
            'mediumSeverityCount' => fn(ParseNode $n) => $o->setMediumSeverityCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'timeStampDateTime' => fn(ParseNode $n) => $o->setTimeStampDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the highSeverityCount property value. The highSeverityCount property
     * @return int|null
    */
    public function getHighSeverityCount(): ?int {
        $val = $this->getBackingStore()->get('highSeverityCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'highSeverityCount'");
    }

    /**
     * Gets the informationalSeverityCount property value. The informationalSeverityCount property
     * @return int|null
    */
    public function getInformationalSeverityCount(): ?int {
        $val = $this->getBackingStore()->get('informationalSeverityCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'informationalSeverityCount'");
    }

    /**
     * Gets the lowSeverityCount property value. The lowSeverityCount property
     * @return int|null
    */
    public function getLowSeverityCount(): ?int {
        $val = $this->getBackingStore()->get('lowSeverityCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lowSeverityCount'");
    }

    /**
     * Gets the mediumSeverityCount property value. The mediumSeverityCount property
     * @return int|null
    */
    public function getMediumSeverityCount(): ?int {
        $val = $this->getBackingStore()->get('mediumSeverityCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediumSeverityCount'");
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
     * Gets the timeStampDateTime property value. The timeStampDateTime property
     * @return DateTime|null
    */
    public function getTimeStampDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('timeStampDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'timeStampDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('highSeverityCount', $this->getHighSeverityCount());
        $writer->writeIntegerValue('informationalSeverityCount', $this->getInformationalSeverityCount());
        $writer->writeIntegerValue('lowSeverityCount', $this->getLowSeverityCount());
        $writer->writeIntegerValue('mediumSeverityCount', $this->getMediumSeverityCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('timeStampDateTime', $this->getTimeStampDateTime());
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
     * Sets the highSeverityCount property value. The highSeverityCount property
     * @param int|null $value Value to set for the highSeverityCount property.
    */
    public function setHighSeverityCount(?int $value): void {
        $this->getBackingStore()->set('highSeverityCount', $value);
    }

    /**
     * Sets the informationalSeverityCount property value. The informationalSeverityCount property
     * @param int|null $value Value to set for the informationalSeverityCount property.
    */
    public function setInformationalSeverityCount(?int $value): void {
        $this->getBackingStore()->set('informationalSeverityCount', $value);
    }

    /**
     * Sets the lowSeverityCount property value. The lowSeverityCount property
     * @param int|null $value Value to set for the lowSeverityCount property.
    */
    public function setLowSeverityCount(?int $value): void {
        $this->getBackingStore()->set('lowSeverityCount', $value);
    }

    /**
     * Sets the mediumSeverityCount property value. The mediumSeverityCount property
     * @param int|null $value Value to set for the mediumSeverityCount property.
    */
    public function setMediumSeverityCount(?int $value): void {
        $this->getBackingStore()->set('mediumSeverityCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the timeStampDateTime property value. The timeStampDateTime property
     * @param DateTime|null $value Value to set for the timeStampDateTime property.
    */
    public function setTimeStampDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('timeStampDateTime', $value);
    }

}
