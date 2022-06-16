<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementTroubleshootingEvent extends Entity 
{
    /** @var array<KeyValuePair>|null $additionalInformation A set of string key and string value pairs which provides additional information on the Troubleshooting event */
    private ?array $additionalInformation = null;
    
    /** @var string|null $correlationId Id used for tracing the failure in the service. */
    private ?string $correlationId = null;
    
    /** @var DateTime|null $eventDateTime Time when the event occurred . */
    private ?DateTime $eventDateTime = null;
    
    /** @var string|null $eventName Event Name corresponding to the Troubleshooting Event. It is an Optional field */
    private ?string $eventName = null;
    
    /** @var DeviceManagementTroubleshootingErrorDetails|null $troubleshootingErrorDetails Object containing detailed information about the error and its remediation. */
    private ?DeviceManagementTroubleshootingErrorDetails $troubleshootingErrorDetails = null;
    
    /**
     * Instantiates a new deviceManagementTroubleshootingEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementTroubleshootingEvent
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementTroubleshootingEvent {
        return new DeviceManagementTroubleshootingEvent();
    }

    /**
     * Gets the additionalInformation property value. A set of string key and string value pairs which provides additional information on the Troubleshooting event
     * @return array<KeyValuePair>|null
    */
    public function getAdditionalInformation(): ?array {
        return $this->additionalInformation;
    }

    /**
     * Gets the correlationId property value. Id used for tracing the failure in the service.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        return $this->correlationId;
    }

    /**
     * Gets the eventDateTime property value. Time when the event occurred .
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        return $this->eventDateTime;
    }

    /**
     * Gets the eventName property value. Event Name corresponding to the Troubleshooting Event. It is an Optional field
     * @return string|null
    */
    public function getEventName(): ?string {
        return $this->eventName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => function (self $o, ParseNode $n) { $o->setAdditionalInformation($n->getCollectionOfObjectValues(KeyValuePair::class)); },
            'correlationId' => function (self $o, ParseNode $n) { $o->setCorrelationId($n->getStringValue()); },
            'eventDateTime' => function (self $o, ParseNode $n) { $o->setEventDateTime($n->getDateTimeValue()); },
            'eventName' => function (self $o, ParseNode $n) { $o->setEventName($n->getStringValue()); },
            'troubleshootingErrorDetails' => function (self $o, ParseNode $n) { $o->setTroubleshootingErrorDetails($n->getObjectValue(DeviceManagementTroubleshootingErrorDetails::class)); },
        ]);
    }

    /**
     * Gets the troubleshootingErrorDetails property value. Object containing detailed information about the error and its remediation.
     * @return DeviceManagementTroubleshootingErrorDetails|null
    */
    public function getTroubleshootingErrorDetails(): ?DeviceManagementTroubleshootingErrorDetails {
        return $this->troubleshootingErrorDetails;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('additionalInformation', $this->additionalInformation);
        $writer->writeStringValue('correlationId', $this->correlationId);
        $writer->writeDateTimeValue('eventDateTime', $this->eventDateTime);
        $writer->writeStringValue('eventName', $this->eventName);
        $writer->writeObjectValue('troubleshootingErrorDetails', $this->troubleshootingErrorDetails);
    }

    /**
     * Sets the additionalInformation property value. A set of string key and string value pairs which provides additional information on the Troubleshooting event
     *  @param array<KeyValuePair>|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?array $value ): void {
        $this->additionalInformation = $value;
    }

    /**
     * Sets the correlationId property value. Id used for tracing the failure in the service.
     *  @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value ): void {
        $this->correlationId = $value;
    }

    /**
     * Sets the eventDateTime property value. Time when the event occurred .
     *  @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value ): void {
        $this->eventDateTime = $value;
    }

    /**
     * Sets the eventName property value. Event Name corresponding to the Troubleshooting Event. It is an Optional field
     *  @param string|null $value Value to set for the eventName property.
    */
    public function setEventName(?string $value ): void {
        $this->eventName = $value;
    }

    /**
     * Sets the troubleshootingErrorDetails property value. Object containing detailed information about the error and its remediation.
     *  @param DeviceManagementTroubleshootingErrorDetails|null $value Value to set for the troubleshootingErrorDetails property.
    */
    public function setTroubleshootingErrorDetails(?DeviceManagementTroubleshootingErrorDetails $value ): void {
        $this->troubleshootingErrorDetails = $value;
    }

}
