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

class CloudPcConnectivityEvent implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new cloudPcConnectivityEvent and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcConnectivityEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcConnectivityEvent {
        return new CloudPcConnectivityEvent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the eventDateTime property value. Indicates the date and time when this event was created. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        return $this->getBackingStore()->get('eventDateTime');
    }

    /**
     * Gets the eventName property value. Name of the event.
     * @return string|null
    */
    public function getEventName(): ?string {
        return $this->getBackingStore()->get('eventName');
    }

    /**
     * Gets the eventResult property value. The eventResult property
     * @return CloudPcConnectivityEventResult|null
    */
    public function getEventResult(): ?CloudPcConnectivityEventResult {
        return $this->getBackingStore()->get('eventResult');
    }

    /**
     * Gets the eventType property value. The eventType property
     * @return CloudPcConnectivityEventType|null
    */
    public function getEventType(): ?CloudPcConnectivityEventType {
        return $this->getBackingStore()->get('eventType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            'eventName' => fn(ParseNode $n) => $o->setEventName($n->getStringValue()),
            'eventResult' => fn(ParseNode $n) => $o->setEventResult($n->getEnumValue(CloudPcConnectivityEventResult::class)),
            'eventType' => fn(ParseNode $n) => $o->setEventType($n->getEnumValue(CloudPcConnectivityEventType::class)),
            'message' => fn(ParseNode $n) => $o->setMessage($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the message property value. Additional message for this event.
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->getBackingStore()->get('message');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeStringValue('eventName', $this->getEventName());
        $writer->writeEnumValue('eventResult', $this->getEventResult());
        $writer->writeEnumValue('eventType', $this->getEventType());
        $writer->writeStringValue('message', $this->getMessage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the eventDateTime property value. Indicates the date and time when this event was created. The timestamp is shown in ISO 8601 format and Coordinated Universal Time (UTC). For example, midnight UTC on Jan 1, 2014 appears as 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the eventName property value. Name of the event.
     * @param string|null $value Value to set for the eventName property.
    */
    public function setEventName(?string $value): void {
        $this->getBackingStore()->set('eventName', $value);
    }

    /**
     * Sets the eventResult property value. The eventResult property
     * @param CloudPcConnectivityEventResult|null $value Value to set for the eventResult property.
    */
    public function setEventResult(?CloudPcConnectivityEventResult $value): void {
        $this->getBackingStore()->set('eventResult', $value);
    }

    /**
     * Sets the eventType property value. The eventType property
     * @param CloudPcConnectivityEventType|null $value Value to set for the eventType property.
    */
    public function setEventType(?CloudPcConnectivityEventType $value): void {
        $this->getBackingStore()->set('eventType', $value);
    }

    /**
     * Sets the message property value. Additional message for this event.
     * @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value): void {
        $this->getBackingStore()->set('message', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
