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

class UsageProfilingPoint implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new usageProfilingPoint and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsageProfilingPoint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsageProfilingPoint {
        return new UsageProfilingPoint();
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
            'internetAccessTrafficCount' => fn(ParseNode $n) => $o->setInternetAccessTrafficCount($n->getIntegerValue()),
            'microsoft365AccessTrafficCount' => fn(ParseNode $n) => $o->setMicrosoft365AccessTrafficCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'privateAccessTrafficCount' => fn(ParseNode $n) => $o->setPrivateAccessTrafficCount($n->getIntegerValue()),
            'timeStampDateTime' => fn(ParseNode $n) => $o->setTimeStampDateTime($n->getDateTimeValue()),
            'totalTrafficCount' => fn(ParseNode $n) => $o->setTotalTrafficCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the internetAccessTrafficCount property value. The internetAccessTrafficCount property
     * @return int|null
    */
    public function getInternetAccessTrafficCount(): ?int {
        $val = $this->getBackingStore()->get('internetAccessTrafficCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'internetAccessTrafficCount'");
    }

    /**
     * Gets the microsoft365AccessTrafficCount property value. The microsoft365AccessTrafficCount property
     * @return int|null
    */
    public function getMicrosoft365AccessTrafficCount(): ?int {
        $val = $this->getBackingStore()->get('microsoft365AccessTrafficCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'microsoft365AccessTrafficCount'");
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
     * Gets the privateAccessTrafficCount property value. The privateAccessTrafficCount property
     * @return int|null
    */
    public function getPrivateAccessTrafficCount(): ?int {
        $val = $this->getBackingStore()->get('privateAccessTrafficCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privateAccessTrafficCount'");
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
     * Gets the totalTrafficCount property value. The totalTrafficCount property
     * @return int|null
    */
    public function getTotalTrafficCount(): ?int {
        $val = $this->getBackingStore()->get('totalTrafficCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalTrafficCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('internetAccessTrafficCount', $this->getInternetAccessTrafficCount());
        $writer->writeIntegerValue('microsoft365AccessTrafficCount', $this->getMicrosoft365AccessTrafficCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('privateAccessTrafficCount', $this->getPrivateAccessTrafficCount());
        $writer->writeDateTimeValue('timeStampDateTime', $this->getTimeStampDateTime());
        $writer->writeIntegerValue('totalTrafficCount', $this->getTotalTrafficCount());
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
     * Sets the internetAccessTrafficCount property value. The internetAccessTrafficCount property
     * @param int|null $value Value to set for the internetAccessTrafficCount property.
    */
    public function setInternetAccessTrafficCount(?int $value): void {
        $this->getBackingStore()->set('internetAccessTrafficCount', $value);
    }

    /**
     * Sets the microsoft365AccessTrafficCount property value. The microsoft365AccessTrafficCount property
     * @param int|null $value Value to set for the microsoft365AccessTrafficCount property.
    */
    public function setMicrosoft365AccessTrafficCount(?int $value): void {
        $this->getBackingStore()->set('microsoft365AccessTrafficCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the privateAccessTrafficCount property value. The privateAccessTrafficCount property
     * @param int|null $value Value to set for the privateAccessTrafficCount property.
    */
    public function setPrivateAccessTrafficCount(?int $value): void {
        $this->getBackingStore()->set('privateAccessTrafficCount', $value);
    }

    /**
     * Sets the timeStampDateTime property value. The timeStampDateTime property
     * @param DateTime|null $value Value to set for the timeStampDateTime property.
    */
    public function setTimeStampDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('timeStampDateTime', $value);
    }

    /**
     * Sets the totalTrafficCount property value. The totalTrafficCount property
     * @param int|null $value Value to set for the totalTrafficCount property.
    */
    public function setTotalTrafficCount(?int $value): void {
        $this->getBackingStore()->set('totalTrafficCount', $value);
    }

}
