<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcOnPremisesConnectionHealthCheck implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $additionalDetails Additional details about the health check or the recommended action.
    */
    private ?string $additionalDetails = null;
    
    /**
     * @var string|null $displayName The display name for this health check item.
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $endDateTime The end time of the health check item. Read-only.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var CloudPcOnPremisesConnectionHealthCheckErrorType|null $errorType The type of error that occurred during this health check.
    */
    private ?CloudPcOnPremisesConnectionHealthCheckErrorType $errorType = null;
    
    /**
     * @var string|null $recommendedAction The recommended action to fix the corresponding error.
    */
    private ?string $recommendedAction = null;
    
    /**
     * @var DateTime|null $startDateTime The start time of the health check item. Read-only.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * @var CloudPcOnPremisesConnectionStatus|null $status The status of the health check item. Possible values are: pending, running, passed, failed, unknownFutureValue. Read-only.
    */
    private ?CloudPcOnPremisesConnectionStatus $status = null;
    
    /**
     * Instantiates a new cloudPcOnPremisesConnectionHealthCheck and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcOnPremisesConnectionHealthCheck
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcOnPremisesConnectionHealthCheck {
        return new CloudPcOnPremisesConnectionHealthCheck();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the additionalDetails property value. Additional details about the health check or the recommended action.
     * @return string|null
    */
    public function getAdditionalDetails(): ?string {
        return $this->additionalDetails;
    }

    /**
     * Gets the displayName property value. The display name for this health check item.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the endDateTime property value. The end time of the health check item. Read-only.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * Gets the errorType property value. The type of error that occurred during this health check.
     * @return CloudPcOnPremisesConnectionHealthCheckErrorType|null
    */
    public function getErrorType(): ?CloudPcOnPremisesConnectionHealthCheckErrorType {
        return $this->errorType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalDetails' => function (ParseNode $n) use ($o) { $o->setAdditionalDetails($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'errorType' => function (ParseNode $n) use ($o) { $o->setErrorType($n->getEnumValue(CloudPcOnPremisesConnectionHealthCheckErrorType::class)); },
            'recommendedAction' => function (ParseNode $n) use ($o) { $o->setRecommendedAction($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(CloudPcOnPremisesConnectionStatus::class)); },
        ];
    }

    /**
     * Gets the recommendedAction property value. The recommended action to fix the corresponding error.
     * @return string|null
    */
    public function getRecommendedAction(): ?string {
        return $this->recommendedAction;
    }

    /**
     * Gets the startDateTime property value. The start time of the health check item. Read-only.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Gets the status property value. The status of the health check item. Possible values are: pending, running, passed, failed, unknownFutureValue. Read-only.
     * @return CloudPcOnPremisesConnectionStatus|null
    */
    public function getStatus(): ?CloudPcOnPremisesConnectionStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('additionalDetails', $this->additionalDetails);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeEnumValue('errorType', $this->errorType);
        $writer->writeStringValue('recommendedAction', $this->recommendedAction);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the additionalDetails property value. Additional details about the health check or the recommended action.
     *  @param string|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?string $value ): void {
        $this->additionalDetails = $value;
    }

    /**
     * Sets the displayName property value. The display name for this health check item.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the endDateTime property value. The end time of the health check item. Read-only.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the errorType property value. The type of error that occurred during this health check.
     *  @param CloudPcOnPremisesConnectionHealthCheckErrorType|null $value Value to set for the errorType property.
    */
    public function setErrorType(?CloudPcOnPremisesConnectionHealthCheckErrorType $value ): void {
        $this->errorType = $value;
    }

    /**
     * Sets the recommendedAction property value. The recommended action to fix the corresponding error.
     *  @param string|null $value Value to set for the recommendedAction property.
    */
    public function setRecommendedAction(?string $value ): void {
        $this->recommendedAction = $value;
    }

    /**
     * Sets the startDateTime property value. The start time of the health check item. Read-only.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

    /**
     * Sets the status property value. The status of the health check item. Possible values are: pending, running, passed, failed, unknownFutureValue. Read-only.
     *  @param CloudPcOnPremisesConnectionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcOnPremisesConnectionStatus $value ): void {
        $this->status = $value;
    }

}
