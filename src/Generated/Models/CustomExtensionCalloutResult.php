<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomExtensionCalloutResult extends AuthenticationEventHandlerResult implements Parsable 
{
    /**
     * Instantiates a new CustomExtensionCalloutResult and sets the default values.
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
     * Gets the calloutDateTime property value. The calloutDateTime property
     * @return DateTime|null
    */
    public function getCalloutDateTime(): ?DateTime {
        return $this->getBackingStore()->get('calloutDateTime');
    }

    /**
     * Gets the customExtensionId property value. The customExtensionId property
     * @return string|null
    */
    public function getCustomExtensionId(): ?string {
        return $this->getBackingStore()->get('customExtensionId');
    }

    /**
     * Gets the errorCode property value. The errorCode property
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->getBackingStore()->get('errorCode');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the httpStatus property value. The httpStatus property
     * @return int|null
    */
    public function getHttpStatus(): ?int {
        return $this->getBackingStore()->get('httpStatus');
    }

    /**
     * Gets the numberOfAttempts property value. The numberOfAttempts property
     * @return int|null
    */
    public function getNumberOfAttempts(): ?int {
        return $this->getBackingStore()->get('numberOfAttempts');
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
     * Sets the calloutDateTime property value. The calloutDateTime property
     *  @param DateTime|null $value Value to set for the calloutDateTime property.
    */
    public function setCalloutDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('calloutDateTime', $value);
    }

    /**
     * Sets the customExtensionId property value. The customExtensionId property
     *  @param string|null $value Value to set for the customExtensionId property.
    */
    public function setCustomExtensionId(?string $value): void {
        $this->getBackingStore()->set('customExtensionId', $value);
    }

    /**
     * Sets the errorCode property value. The errorCode property
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the httpStatus property value. The httpStatus property
     *  @param int|null $value Value to set for the httpStatus property.
    */
    public function setHttpStatus(?int $value): void {
        $this->getBackingStore()->set('httpStatus', $value);
    }

    /**
     * Sets the numberOfAttempts property value. The numberOfAttempts property
     *  @param int|null $value Value to set for the numberOfAttempts property.
    */
    public function setNumberOfAttempts(?int $value): void {
        $this->getBackingStore()->set('numberOfAttempts', $value);
    }

}
