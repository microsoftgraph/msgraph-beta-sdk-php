<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcConnectivityEvent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $eventDateTime The eventDateTime property
    */
    private ?DateTime $eventDateTime = null;
    
    /**
     * @var string|null $eventName The eventName property
    */
    private ?string $eventName = null;
    
    /**
     * @var CloudPcConnectivityEventResult|null $eventResult The eventResult property
    */
    private ?CloudPcConnectivityEventResult $eventResult = null;
    
    /**
     * @var CloudPcConnectivityEventType|null $eventType The eventType property
    */
    private ?CloudPcConnectivityEventType $eventType = null;
    
    /**
     * @var string|null $message The message property
    */
    private ?string $message = null;
    
    /**
     * Instantiates a new cloudPcConnectivityEvent and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the eventDateTime property value. The eventDateTime property
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        return $this->eventDateTime;
    }

    /**
     * Gets the eventName property value. The eventName property
     * @return string|null
    */
    public function getEventName(): ?string {
        return $this->eventName;
    }

    /**
     * Gets the eventResult property value. The eventResult property
     * @return CloudPcConnectivityEventResult|null
    */
    public function getEventResult(): ?CloudPcConnectivityEventResult {
        return $this->eventResult;
    }

    /**
     * Gets the eventType property value. The eventType property
     * @return CloudPcConnectivityEventType|null
    */
    public function getEventType(): ?CloudPcConnectivityEventType {
        return $this->eventType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'eventDateTime' => function (ParseNode $n) use ($o) { $o->setEventDateTime($n->getDateTimeValue()); },
            'eventName' => function (ParseNode $n) use ($o) { $o->setEventName($n->getStringValue()); },
            'eventResult' => function (ParseNode $n) use ($o) { $o->setEventResult($n->getEnumValue(CloudPcConnectivityEventResult::class)); },
            'eventType' => function (ParseNode $n) use ($o) { $o->setEventType($n->getEnumValue(CloudPcConnectivityEventType::class)); },
            'message' => function (ParseNode $n) use ($o) { $o->setMessage($n->getStringValue()); },
        ];
    }

    /**
     * Gets the message property value. The message property
     * @return string|null
    */
    public function getMessage(): ?string {
        return $this->message;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('eventDateTime', $this->eventDateTime);
        $writer->writeStringValue('eventName', $this->eventName);
        $writer->writeEnumValue('eventResult', $this->eventResult);
        $writer->writeEnumValue('eventType', $this->eventType);
        $writer->writeStringValue('message', $this->message);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the eventDateTime property value. The eventDateTime property
     *  @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value ): void {
        $this->eventDateTime = $value;
    }

    /**
     * Sets the eventName property value. The eventName property
     *  @param string|null $value Value to set for the eventName property.
    */
    public function setEventName(?string $value ): void {
        $this->eventName = $value;
    }

    /**
     * Sets the eventResult property value. The eventResult property
     *  @param CloudPcConnectivityEventResult|null $value Value to set for the eventResult property.
    */
    public function setEventResult(?CloudPcConnectivityEventResult $value ): void {
        $this->eventResult = $value;
    }

    /**
     * Sets the eventType property value. The eventType property
     *  @param CloudPcConnectivityEventType|null $value Value to set for the eventType property.
    */
    public function setEventType(?CloudPcConnectivityEventType $value ): void {
        $this->eventType = $value;
    }

    /**
     * Sets the message property value. The message property
     *  @param string|null $value Value to set for the message property.
    */
    public function setMessage(?string $value ): void {
        $this->message = $value;
    }

}
