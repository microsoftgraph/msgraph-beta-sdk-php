<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementTroubleshootingEvent extends Entity implements Parsable 
{
    /**
     * @var array<KeyValuePair>|null $additionalInformation A set of string key and string value pairs which provides additional information on the Troubleshooting event
    */
    private ?array $additionalInformation = null;
    
    /**
     * @var string|null $correlationId Id used for tracing the failure in the service.
    */
    private ?string $correlationId = null;
    
    /**
     * @var DateTime|null $eventDateTime Time when the event occurred .
    */
    private ?DateTime $eventDateTime = null;
    
    /**
     * @var string|null $eventName Event Name corresponding to the Troubleshooting Event. It is an Optional field
    */
    private ?string $eventName = null;
    
    /**
     * @var DeviceManagementTroubleshootingErrorDetails|null $troubleshootingErrorDetails Object containing detailed information about the error and its remediation.
    */
    private ?DeviceManagementTroubleshootingErrorDetails $troubleshootingErrorDetails = null;
    
    /**
     * @var string|null $type The type property
    */
    private ?string $type = null;
    
    /**
     * Instantiates a new DeviceManagementTroubleshootingEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementTroubleshootingEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementTroubleshootingEvent {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.appleVppTokenTroubleshootingEvent': return new AppleVppTokenTroubleshootingEvent();
                case '#microsoft.graph.enrollmentTroubleshootingEvent': return new EnrollmentTroubleshootingEvent();
                case '#microsoft.graph.mobileAppTroubleshootingEvent': return new MobileAppTroubleshootingEvent();
            }
        }
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => function (ParseNode $n) use ($o) { $o->setAdditionalInformation($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'correlationId' => function (ParseNode $n) use ($o) { $o->setCorrelationId($n->getStringValue()); },
            'eventDateTime' => function (ParseNode $n) use ($o) { $o->setEventDateTime($n->getDateTimeValue()); },
            'eventName' => function (ParseNode $n) use ($o) { $o->setEventName($n->getStringValue()); },
            'troubleshootingErrorDetails' => function (ParseNode $n) use ($o) { $o->setTroubleshootingErrorDetails($n->getObjectValue(array(DeviceManagementTroubleshootingErrorDetails::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdatatype($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the @odata.type property value. The type property
     * @return string|null
    */
    public function getOdatatype(): ?string {
        return $this->type;
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
        $writer->writeStringValue('@odata.type', $this->type);
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
     * Sets the @odata.type property value. The type property
     *  @param string|null $value Value to set for the type property.
    */
    public function setOdatatype(?string $value ): void {
        $this->type = $value;
    }

    /**
     * Sets the troubleshootingErrorDetails property value. Object containing detailed information about the error and its remediation.
     *  @param DeviceManagementTroubleshootingErrorDetails|null $value Value to set for the troubleshootingErrorDetails property.
    */
    public function setTroubleshootingErrorDetails(?DeviceManagementTroubleshootingErrorDetails $value ): void {
        $this->troubleshootingErrorDetails = $value;
    }

}
