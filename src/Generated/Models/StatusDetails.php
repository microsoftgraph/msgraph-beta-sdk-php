<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class StatusDetails extends StatusBase implements Parsable 
{
    /**
     * @var string|null $additionalDetails Additional details in case of error.
    */
    private ?string $additionalDetails = null;
    
    /**
     * @var ProvisioningStatusErrorCategory|null $errorCategory Categorizes the error code. Possible values are Failure, NonServiceFailure, Success.
    */
    private ?ProvisioningStatusErrorCategory $errorCategory = null;
    
    /**
     * @var string|null $errorCode Unique error code if any occurred. Learn more
    */
    private ?string $errorCode = null;
    
    /**
     * @var string|null $reason Summarizes the status and describes why the status happened.
    */
    private ?string $reason = null;
    
    /**
     * @var string|null $recommendedAction Provides the resolution for the corresponding error.
    */
    private ?string $recommendedAction = null;
    
    /**
     * Instantiates a new StatusDetails and sets the default values.
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
        return $this->additionalDetails;
    }

    /**
     * Gets the errorCategory property value. Categorizes the error code. Possible values are Failure, NonServiceFailure, Success.
     * @return ProvisioningStatusErrorCategory|null
    */
    public function getErrorCategory(): ?ProvisioningStatusErrorCategory {
        return $this->errorCategory;
    }

    /**
     * Gets the errorCode property value. Unique error code if any occurred. Learn more
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'additionalDetails' => function (ParseNode $n) use ($o) { $o->setAdditionalDetails($n->getStringValue()); },
            'errorCategory' => function (ParseNode $n) use ($o) { $o->setErrorCategory($n->getEnumValue(ProvisioningStatusErrorCategory::class)); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getStringValue()); },
            'reason' => function (ParseNode $n) use ($o) { $o->setReason($n->getStringValue()); },
            'recommendedAction' => function (ParseNode $n) use ($o) { $o->setRecommendedAction($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the reason property value. Summarizes the status and describes why the status happened.
     * @return string|null
    */
    public function getReason(): ?string {
        return $this->reason;
    }

    /**
     * Gets the recommendedAction property value. Provides the resolution for the corresponding error.
     * @return string|null
    */
    public function getRecommendedAction(): ?string {
        return $this->recommendedAction;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('additionalDetails', $this->additionalDetails);
        $writer->writeEnumValue('errorCategory', $this->errorCategory);
        $writer->writeStringValue('errorCode', $this->errorCode);
        $writer->writeStringValue('reason', $this->reason);
        $writer->writeStringValue('recommendedAction', $this->recommendedAction);
    }

    /**
     * Sets the additionalDetails property value. Additional details in case of error.
     *  @param string|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?string $value ): void {
        $this->additionalDetails = $value;
    }

    /**
     * Sets the errorCategory property value. Categorizes the error code. Possible values are Failure, NonServiceFailure, Success.
     *  @param ProvisioningStatusErrorCategory|null $value Value to set for the errorCategory property.
    */
    public function setErrorCategory(?ProvisioningStatusErrorCategory $value ): void {
        $this->errorCategory = $value;
    }

    /**
     * Sets the errorCode property value. Unique error code if any occurred. Learn more
     *  @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the reason property value. Summarizes the status and describes why the status happened.
     *  @param string|null $value Value to set for the reason property.
    */
    public function setReason(?string $value ): void {
        $this->reason = $value;
    }

    /**
     * Sets the recommendedAction property value. Provides the resolution for the corresponding error.
     *  @param string|null $value Value to set for the recommendedAction property.
    */
    public function setRecommendedAction(?string $value ): void {
        $this->recommendedAction = $value;
    }

}
