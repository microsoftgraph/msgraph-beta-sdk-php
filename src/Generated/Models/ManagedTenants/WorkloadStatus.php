<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WorkloadStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new workloadStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the displayName property value. The display name for the workload. Required. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
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
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the offboardedDateTime property value. The date and time the workload was offboarded. Optional. Read-only.
     * @return DateTime|null
    */
    public function getOffboardedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('offboardedDateTime');
    }

    /**
     * Gets the onboardedDateTime property value. The date and time the workload was onboarded. Optional. Read-only.
     * @return DateTime|null
    */
    public function getOnboardedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('onboardedDateTime');
    }

    /**
     * Gets the onboardingStatus property value. The onboardingStatus property
     * @return WorkloadOnboardingStatus|null
    */
    public function getOnboardingStatus(): ?WorkloadOnboardingStatus {
        return $this->getBackingStore()->get('onboardingStatus');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeDateTimeValue('offboardedDateTime', $this->getOffboardedDateTime());
        $writer->writeDateTimeValue('onboardedDateTime', $this->getOnboardedDateTime());
        $writer->writeEnumValue('onboardingStatus', $this->getOnboardingStatus());
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
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the displayName property value. The display name for the workload. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the offboardedDateTime property value. The date and time the workload was offboarded. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the offboardedDateTime property.
    */
    public function setOffboardedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('offboardedDateTime', $value);
    }

    /**
     * Sets the onboardedDateTime property value. The date and time the workload was onboarded. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the onboardedDateTime property.
    */
    public function setOnboardedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('onboardedDateTime', $value);
    }

    /**
     * Sets the onboardingStatus property value. The onboardingStatus property
     *  @param WorkloadOnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?WorkloadOnboardingStatus $value): void {
        $this->getBackingStore()->set('onboardingStatus', $value);
    }

}
