<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkloadStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName The display name for the workload. Required. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DateTime|null $offboardedDateTime The date and time the workload was offboarded. Optional. Read-only.
    */
    private ?DateTime $offboardedDateTime = null;
    
    /**
     * @var DateTime|null $onboardedDateTime The date and time the workload was onboarded. Optional. Read-only.
    */
    private ?DateTime $onboardedDateTime = null;
    
    /**
     * @var WorkloadOnboardingStatus|null $onboardingStatus The onboardingStatus property
    */
    private ?WorkloadOnboardingStatus $onboardingStatus = null;
    
    /**
     * Instantiates a new workloadStatus and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.managedTenants.workloadStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkloadStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkloadStatus {
        return new WorkloadStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The display name for the workload. Required. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'offboardedDateTime' => fn(ParseNode $n) => $o->setOffboardedDateTime($n->getDateTimeValue()),
            'onboardedDateTime' => fn(ParseNode $n) => $o->setOnboardedDateTime($n->getDateTimeValue()),
            'onboardingStatus' => fn(ParseNode $n) => $o->setOnboardingStatus($n->getEnumValue(WorkloadOnboardingStatus::class)),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the offboardedDateTime property value. The date and time the workload was offboarded. Optional. Read-only.
     * @return DateTime|null
    */
    public function getOffboardedDateTime(): ?DateTime {
        return $this->offboardedDateTime;
    }

    /**
     * Gets the onboardedDateTime property value. The date and time the workload was onboarded. Optional. Read-only.
     * @return DateTime|null
    */
    public function getOnboardedDateTime(): ?DateTime {
        return $this->onboardedDateTime;
    }

    /**
     * Gets the onboardingStatus property value. The onboardingStatus property
     * @return WorkloadOnboardingStatus|null
    */
    public function getOnboardingStatus(): ?WorkloadOnboardingStatus {
        return $this->onboardingStatus;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeDateTimeValue('offboardedDateTime', $this->offboardedDateTime);
        $writer->writeDateTimeValue('onboardedDateTime', $this->onboardedDateTime);
        $writer->writeEnumValue('onboardingStatus', $this->onboardingStatus);
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
     * Sets the displayName property value. The display name for the workload. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the offboardedDateTime property value. The date and time the workload was offboarded. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the offboardedDateTime property.
    */
    public function setOffboardedDateTime(?DateTime $value ): void {
        $this->offboardedDateTime = $value;
    }

    /**
     * Sets the onboardedDateTime property value. The date and time the workload was onboarded. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the onboardedDateTime property.
    */
    public function setOnboardedDateTime(?DateTime $value ): void {
        $this->onboardedDateTime = $value;
    }

    /**
     * Sets the onboardingStatus property value. The onboardingStatus property
     *  @param WorkloadOnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?WorkloadOnboardingStatus $value ): void {
        $this->onboardingStatus = $value;
    }

}
