<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Event representing an general failure.
*/
class DeviceManagementTroubleshootingEvent extends Entity implements Parsable 
{
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
        $val = $this->getBackingStore()->get('additionalInformation');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, KeyValuePair::class);
            /** @var array<KeyValuePair>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalInformation'");
    }

    /**
     * Gets the correlationId property value. Id used for tracing the failure in the service.
     * @return string|null
    */
    public function getCorrelationId(): ?string {
        $val = $this->getBackingStore()->get('correlationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationId'");
    }

    /**
     * Gets the eventDateTime property value. Time when the event occurred .
     * @return DateTime|null
    */
    public function getEventDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('eventDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventDateTime'");
    }

    /**
     * Gets the eventName property value. Event Name corresponding to the Troubleshooting Event. It is an Optional field
     * @return string|null
    */
    public function getEventName(): ?string {
        $val = $this->getBackingStore()->get('eventName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'eventName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalInformation' => fn(ParseNode $n) => $o->setAdditionalInformation($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'correlationId' => fn(ParseNode $n) => $o->setCorrelationId($n->getStringValue()),
            'eventDateTime' => fn(ParseNode $n) => $o->setEventDateTime($n->getDateTimeValue()),
            'eventName' => fn(ParseNode $n) => $o->setEventName($n->getStringValue()),
            'troubleshootingErrorDetails' => fn(ParseNode $n) => $o->setTroubleshootingErrorDetails($n->getObjectValue([DeviceManagementTroubleshootingErrorDetails::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the troubleshootingErrorDetails property value. Object containing detailed information about the error and its remediation.
     * @return DeviceManagementTroubleshootingErrorDetails|null
    */
    public function getTroubleshootingErrorDetails(): ?DeviceManagementTroubleshootingErrorDetails {
        $val = $this->getBackingStore()->get('troubleshootingErrorDetails');
        if (is_null($val) || $val instanceof DeviceManagementTroubleshootingErrorDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'troubleshootingErrorDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('additionalInformation', $this->getAdditionalInformation());
        $writer->writeStringValue('correlationId', $this->getCorrelationId());
        $writer->writeDateTimeValue('eventDateTime', $this->getEventDateTime());
        $writer->writeStringValue('eventName', $this->getEventName());
        $writer->writeObjectValue('troubleshootingErrorDetails', $this->getTroubleshootingErrorDetails());
    }

    /**
     * Sets the additionalInformation property value. A set of string key and string value pairs which provides additional information on the Troubleshooting event
     * @param array<KeyValuePair>|null $value Value to set for the additionalInformation property.
    */
    public function setAdditionalInformation(?array $value): void {
        $this->getBackingStore()->set('additionalInformation', $value);
    }

    /**
     * Sets the correlationId property value. Id used for tracing the failure in the service.
     * @param string|null $value Value to set for the correlationId property.
    */
    public function setCorrelationId(?string $value): void {
        $this->getBackingStore()->set('correlationId', $value);
    }

    /**
     * Sets the eventDateTime property value. Time when the event occurred .
     * @param DateTime|null $value Value to set for the eventDateTime property.
    */
    public function setEventDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('eventDateTime', $value);
    }

    /**
     * Sets the eventName property value. Event Name corresponding to the Troubleshooting Event. It is an Optional field
     * @param string|null $value Value to set for the eventName property.
    */
    public function setEventName(?string $value): void {
        $this->getBackingStore()->set('eventName', $value);
    }

    /**
     * Sets the troubleshootingErrorDetails property value. Object containing detailed information about the error and its remediation.
     * @param DeviceManagementTroubleshootingErrorDetails|null $value Value to set for the troubleshootingErrorDetails property.
    */
    public function setTroubleshootingErrorDetails(?DeviceManagementTroubleshootingErrorDetails $value): void {
        $this->getBackingStore()->set('troubleshootingErrorDetails', $value);
    }

}
