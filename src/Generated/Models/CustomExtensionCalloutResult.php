<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomExtensionCalloutResult extends AuthenticationEventHandlerResult implements Parsable 
{
    /**
     * @var DateTime|null $calloutDateTime The calloutDateTime property
    */
    private ?DateTime $calloutDateTime = null;
    
    /**
     * @var string|null $customExtensionId The customExtensionId property
    */
    private ?string $customExtensionId = null;
    
    /**
     * @var int|null $errorCode The errorCode property
    */
    private ?int $errorCode = null;
    
    /**
     * @var int|null $httpStatus The httpStatus property
    */
    private ?int $httpStatus = null;
    
    /**
     * @var int|null $numberOfAttempts The numberOfAttempts property
    */
    private ?int $numberOfAttempts = null;
    
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
        return $this->calloutDateTime;
    }

    /**
     * Gets the customExtensionId property value. The customExtensionId property
     * @return string|null
    */
    public function getCustomExtensionId(): ?string {
        return $this->customExtensionId;
    }

    /**
     * Gets the errorCode property value. The errorCode property
     * @return int|null
    */
    public function getErrorCode(): ?int {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'calloutDateTime' => function (ParseNode $n) use ($o) { $o->setCalloutDateTime($n->getDateTimeValue()); },
            'customExtensionId' => function (ParseNode $n) use ($o) { $o->setCustomExtensionId($n->getStringValue()); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getIntegerValue()); },
            'httpStatus' => function (ParseNode $n) use ($o) { $o->setHttpStatus($n->getIntegerValue()); },
            'numberOfAttempts' => function (ParseNode $n) use ($o) { $o->setNumberOfAttempts($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the httpStatus property value. The httpStatus property
     * @return int|null
    */
    public function getHttpStatus(): ?int {
        return $this->httpStatus;
    }

    /**
     * Gets the numberOfAttempts property value. The numberOfAttempts property
     * @return int|null
    */
    public function getNumberOfAttempts(): ?int {
        return $this->numberOfAttempts;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('calloutDateTime', $this->calloutDateTime);
        $writer->writeStringValue('customExtensionId', $this->customExtensionId);
        $writer->writeIntegerValue('errorCode', $this->errorCode);
        $writer->writeIntegerValue('httpStatus', $this->httpStatus);
        $writer->writeIntegerValue('numberOfAttempts', $this->numberOfAttempts);
    }

    /**
     * Sets the calloutDateTime property value. The calloutDateTime property
     *  @param DateTime|null $value Value to set for the calloutDateTime property.
    */
    public function setCalloutDateTime(?DateTime $value ): void {
        $this->calloutDateTime = $value;
    }

    /**
     * Sets the customExtensionId property value. The customExtensionId property
     *  @param string|null $value Value to set for the customExtensionId property.
    */
    public function setCustomExtensionId(?string $value ): void {
        $this->customExtensionId = $value;
    }

    /**
     * Sets the errorCode property value. The errorCode property
     *  @param int|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?int $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the httpStatus property value. The httpStatus property
     *  @param int|null $value Value to set for the httpStatus property.
    */
    public function setHttpStatus(?int $value ): void {
        $this->httpStatus = $value;
    }

    /**
     * Sets the numberOfAttempts property value. The numberOfAttempts property
     *  @param int|null $value Value to set for the numberOfAttempts property.
    */
    public function setNumberOfAttempts(?int $value ): void {
        $this->numberOfAttempts = $value;
    }

}
