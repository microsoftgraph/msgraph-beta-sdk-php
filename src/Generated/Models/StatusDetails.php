<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StatusDetails extends StatusBase implements Parsable 
{
    /**
     * Instantiates a new statusDetails and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.statusDetails');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return StatusDetails
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): StatusDetails {
        return new StatusDetails();
    }

    /**
     * Gets the additionalDetails property value. Additional details in case of error.
     * @return string|null
    */
    public function getAdditionalDetails(): ?string {
        $val = $this->getBackingStore()->get('additionalDetails');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalDetails'");
    }

    /**
     * Gets the errorCategory property value. Categorizes the error code. Possible values are Failure, NonServiceFailure, Success.
     * @return ProvisioningStatusErrorCategory|null
    */
    public function getErrorCategory(): ?ProvisioningStatusErrorCategory {
        $val = $this->getBackingStore()->get('errorCategory');
        if (is_null($val) || $val instanceof ProvisioningStatusErrorCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCategory'");
    }

    /**
     * Gets the errorCode property value. Unique error code if any occurred. Learn more
     * @return string|null
    */
    public function getErrorCode(): ?string {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || is_string($val)) {
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
            'additionalDetails' => fn(ParseNode $n) => $o->setAdditionalDetails($n->getStringValue()),
            'errorCategory' => fn(ParseNode $n) => $o->setErrorCategory($n->getEnumValue(ProvisioningStatusErrorCategory::class)),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'reason' => fn(ParseNode $n) => $o->setReason($n->getStringValue()),
            'recommendedAction' => fn(ParseNode $n) => $o->setRecommendedAction($n->getStringValue()),
        ]);
    }

    /**
     * Gets the reason property value. Summarizes the status and describes why the status happened.
     * @return string|null
    */
    public function getReason(): ?string {
        $val = $this->getBackingStore()->get('reason');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reason'");
    }

    /**
     * Gets the recommendedAction property value. Provides the resolution for the corresponding error.
     * @return string|null
    */
    public function getRecommendedAction(): ?string {
        $val = $this->getBackingStore()->get('recommendedAction');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'recommendedAction'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalDetails', $this->getAdditionalDetails());
        $writer->writeEnumValue('errorCategory', $this->getErrorCategory());
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('reason', $this->getReason());
        $writer->writeStringValue('recommendedAction', $this->getRecommendedAction());
    }

    /**
     * Sets the additionalDetails property value. Additional details in case of error.
     * @param string|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?string $value): void {
        $this->getBackingStore()->set('additionalDetails', $value);
    }

    /**
     * Sets the errorCategory property value. Categorizes the error code. Possible values are Failure, NonServiceFailure, Success.
     * @param ProvisioningStatusErrorCategory|null $value Value to set for the errorCategory property.
    */
    public function setErrorCategory(?ProvisioningStatusErrorCategory $value): void {
        $this->getBackingStore()->set('errorCategory', $value);
    }

    /**
     * Sets the errorCode property value. Unique error code if any occurred. Learn more
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the reason property value. Summarizes the status and describes why the status happened.
     * @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value): void {
        $this->getBackingStore()->set('reason', $value);
    }

    /**
     * Sets the recommendedAction property value. Provides the resolution for the corresponding error.
     * @param string|null $value Value to set for the recommendedAction property.
    */
    public function setRecommendedAction(?string $value): void {
        $this->getBackingStore()->set('recommendedAction', $value);
    }

}
