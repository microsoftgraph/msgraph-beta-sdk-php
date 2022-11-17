<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class CloudPcOnPremisesConnectionHealthCheck implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new cloudPcOnPremisesConnectionHealthCheck and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.cloudPcOnPremisesConnectionHealthCheck');
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the additionalDetails property value. Additional details about the health check or the recommended action.
     * @return string|null
    */
    public function getAdditionalDetails(): ?string {
        return $this->getBackingStore()->get('additionalDetails');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the displayName property value. The display name for this health check item.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the endDateTime property value. The end time of the health check item. Read-only.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->getBackingStore()->get('endDateTime');
    }

    /**
     * Gets the errorType property value. The type of error that occurred during this health check.
     * @return CloudPcOnPremisesConnectionHealthCheckErrorType|null
    */
    public function getErrorType(): ?CloudPcOnPremisesConnectionHealthCheckErrorType {
        return $this->getBackingStore()->get('errorType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalDetails' => fn(ParseNode $n) => $o->setAdditionalDetails($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'endDateTime' => fn(ParseNode $n) => $o->setEndDateTime($n->getDateTimeValue()),
            'errorType' => fn(ParseNode $n) => $o->setErrorType($n->getEnumValue(CloudPcOnPremisesConnectionHealthCheckErrorType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recommendedAction' => fn(ParseNode $n) => $o->setRecommendedAction($n->getStringValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(CloudPcOnPremisesConnectionStatus::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the recommendedAction property value. The recommended action to fix the corresponding error.
     * @return string|null
    */
    public function getRecommendedAction(): ?string {
        return $this->getBackingStore()->get('recommendedAction');
    }

    /**
     * Gets the startDateTime property value. The start time of the health check item. Read-only.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->getBackingStore()->get('startDateTime');
    }

    /**
     * Gets the status property value. The status property
     * @return CloudPcOnPremisesConnectionStatus|null
    */
    public function getStatus(): ?CloudPcOnPremisesConnectionStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('additionalDetails', $this->getAdditionalDetails());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('endDateTime', $this->getEndDateTime());
        $writer->writeEnumValue('errorType', $this->getErrorType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('recommendedAction', $this->getRecommendedAction());
        $writer->writeDateTimeValue('startDateTime', $this->getStartDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the additionalDetails property value. Additional details about the health check or the recommended action.
     *  @param string|null $value Value to set for the additionalDetails property.
    */
    public function setAdditionalDetails(?string $value): void {
        $this->getBackingStore()->set('additionalDetails', $value);
    }

    /**
     * Sets the displayName property value. The display name for this health check item.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the endDateTime property value. The end time of the health check item. Read-only.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('endDateTime', $value);
    }

    /**
     * Sets the errorType property value. The type of error that occurred during this health check.
     *  @param CloudPcOnPremisesConnectionHealthCheckErrorType|null $value Value to set for the errorType property.
    */
    public function setErrorType(?CloudPcOnPremisesConnectionHealthCheckErrorType $value): void {
        $this->getBackingStore()->set('errorType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the recommendedAction property value. The recommended action to fix the corresponding error.
     *  @param string|null $value Value to set for the recommendedAction property.
    */
    public function setRecommendedAction(?string $value): void {
        $this->getBackingStore()->set('recommendedAction', $value);
    }

    /**
     * Sets the startDateTime property value. The start time of the health check item. Read-only.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('startDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     *  @param CloudPcOnPremisesConnectionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?CloudPcOnPremisesConnectionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
