<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomExtensionCalloutResult extends AuthenticationEventHandlerResult implements Parsable 
{
    /**
     * Instantiates a new customExtensionCalloutResult and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.customExtensionCalloutResult');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomExtensionCalloutResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomExtensionCalloutResult {
        return new CustomExtensionCalloutResult();
    }

    /**
     * Gets the calloutDateTime property value. When the API transaction was initiated, the date and time information uses ISO 8601 format and is always in UTC time. Example: midnight on Jan 1, 2014, is reported as 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCalloutDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('calloutDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calloutDateTime'");
    }

    /**
     * Gets the customExtensionId property value. Identifier of the custom extension that was called.
     * @return string|null
    */
    public function getCustomExtensionId(): ?string {
        $val = $this->getBackingStore()->get('customExtensionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionId'");
    }

    /**
     * Gets the errorCode property value. Error code that was returned when the last API attempt failed.
     * @return int|null
    */
    public function getErrorCode(): ?int {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'calloutDateTime' => fn(ParseNode $n) => $o->setCalloutDateTime($n->getDateTimeValue()),
            'customExtensionId' => fn(ParseNode $n) => $o->setCustomExtensionId($n->getStringValue()),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getIntegerValue()),
            'httpStatus' => fn(ParseNode $n) => $o->setHttpStatus($n->getIntegerValue()),
            'numberOfAttempts' => fn(ParseNode $n) => $o->setNumberOfAttempts($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the httpStatus property value. The HTTP status code that was returned by the target API endpoint after the last API attempt.
     * @return int|null
    */
    public function getHttpStatus(): ?int {
        $val = $this->getBackingStore()->get('httpStatus');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'httpStatus'");
    }

    /**
     * Gets the numberOfAttempts property value. The number of API calls to the customer's API.
     * @return int|null
    */
    public function getNumberOfAttempts(): ?int {
        $val = $this->getBackingStore()->get('numberOfAttempts');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'numberOfAttempts'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('calloutDateTime', $this->getCalloutDateTime());
        $writer->writeStringValue('customExtensionId', $this->getCustomExtensionId());
        $writer->writeIntegerValue('errorCode', $this->getErrorCode());
        $writer->writeIntegerValue('httpStatus', $this->getHttpStatus());
        $writer->writeIntegerValue('numberOfAttempts', $this->getNumberOfAttempts());
    }

    /**
     * Sets the calloutDateTime property value. When the API transaction was initiated, the date and time information uses ISO 8601 format and is always in UTC time. Example: midnight on Jan 1, 2014, is reported as 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the calloutDateTime property.
    */
    public function setCalloutDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('calloutDateTime', $value);
    }

    /**
     * Sets the customExtensionId property value. Identifier of the custom extension that was called.
     * @param string|null $value Value to set for the customExtensionId property.
    */
    public function setCustomExtensionId(?string $value): void {
        $this->getBackingStore()->set('customExtensionId', $value);
    }

    /**
     * Sets the errorCode property value. Error code that was returned when the last API attempt failed.
     * @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the httpStatus property value. The HTTP status code that was returned by the target API endpoint after the last API attempt.
     * @param int|null $value Value to set for the httpStatus property.
    */
    public function setHttpStatus(?int $value): void {
        $this->getBackingStore()->set('httpStatus', $value);
    }

    /**
     * Sets the numberOfAttempts property value. The number of API calls to the customer's API.
     * @param int|null $value Value to set for the numberOfAttempts property.
    */
    public function setNumberOfAttempts(?int $value): void {
        $this->getBackingStore()->set('numberOfAttempts', $value);
    }

}
