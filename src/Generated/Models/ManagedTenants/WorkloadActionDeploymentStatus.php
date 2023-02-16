<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\GenericError;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WorkloadActionDeploymentStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new workloadActionDeploymentStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkloadActionDeploymentStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkloadActionDeploymentStatus {
        return new WorkloadActionDeploymentStatus();
    }

    /**
     * Gets the actionId property value. The unique identifier for the workload action. Required. Read-only.
     * @return string|null
    */
    public function getActionId(): ?string {
        return $this->getBackingStore()->get('actionId');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * Gets the deployedPolicyId property value. The identifier of any policy that was created by applying the workload action. Optional. Read-only.
     * @return string|null
    */
    public function getDeployedPolicyId(): ?string {
        return $this->getBackingStore()->get('deployedPolicyId');
    }

    /**
     * Gets the error property value. The detailed information for exceptions that occur when deploying the workload action. Optional. Required.
     * @return GenericError|null
    */
    public function getError(): ?GenericError {
        return $this->getBackingStore()->get('error');
    }

    /**
     * Gets the excludeGroups property value. The excludeGroups property
     * @return array<string>|null
    */
    public function getExcludeGroups(): ?array {
        return $this->getBackingStore()->get('excludeGroups');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionId' => fn(ParseNode $n) => $o->setActionId($n->getStringValue()),
            'deployedPolicyId' => fn(ParseNode $n) => $o->setDeployedPolicyId($n->getStringValue()),
            'error' => fn(ParseNode $n) => $o->setError($n->getObjectValue([GenericError::class, 'createFromDiscriminatorValue'])),
            'excludeGroups' => fn(ParseNode $n) => $o->setExcludeGroups($n->getCollectionOfPrimitiveValues()),
            'includeAllUsers' => fn(ParseNode $n) => $o->setIncludeAllUsers($n->getBooleanValue()),
            'includeGroups' => fn(ParseNode $n) => $o->setIncludeGroups($n->getCollectionOfPrimitiveValues()),
            'lastDeploymentDateTime' => fn(ParseNode $n) => $o->setLastDeploymentDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(WorkloadActionStatus::class)),
        ];
    }

    /**
     * Gets the includeAllUsers property value. The includeAllUsers property
     * @return bool|null
    */
    public function getIncludeAllUsers(): ?bool {
        return $this->getBackingStore()->get('includeAllUsers');
    }

    /**
     * Gets the includeGroups property value. The includeGroups property
     * @return array<string>|null
    */
    public function getIncludeGroups(): ?array {
        return $this->getBackingStore()->get('includeGroups');
    }

    /**
     * Gets the lastDeploymentDateTime property value. The date and time the workload action was last deployed. Optional.
     * @return DateTime|null
    */
    public function getLastDeploymentDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastDeploymentDateTime');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the status property value. The status property
     * @return WorkloadActionStatus|null
    */
    public function getStatus(): ?WorkloadActionStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionId', $this->getActionId());
        $writer->writeStringValue('deployedPolicyId', $this->getDeployedPolicyId());
        $writer->writeObjectValue('error', $this->getError());
        $writer->writeCollectionOfPrimitiveValues('excludeGroups', $this->getExcludeGroups());
        $writer->writeBooleanValue('includeAllUsers', $this->getIncludeAllUsers());
        $writer->writeCollectionOfPrimitiveValues('includeGroups', $this->getIncludeGroups());
        $writer->writeDateTimeValue('lastDeploymentDateTime', $this->getLastDeploymentDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the actionId property value. The unique identifier for the workload action. Required. Read-only.
     * @param string|null $value Value to set for the actionId property.
    */
    public function setActionId(?string $value): void {
        $this->getBackingStore()->set('actionId', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deployedPolicyId property value. The identifier of any policy that was created by applying the workload action. Optional. Read-only.
     * @param string|null $value Value to set for the deployedPolicyId property.
    */
    public function setDeployedPolicyId(?string $value): void {
        $this->getBackingStore()->set('deployedPolicyId', $value);
    }

    /**
     * Sets the error property value. The detailed information for exceptions that occur when deploying the workload action. Optional. Required.
     * @param GenericError|null $value Value to set for the error property.
    */
    public function setError(?GenericError $value): void {
        $this->getBackingStore()->set('error', $value);
    }

    /**
     * Sets the excludeGroups property value. The excludeGroups property
     * @param array<string>|null $value Value to set for the excludeGroups property.
    */
    public function setExcludeGroups(?array $value): void {
        $this->getBackingStore()->set('excludeGroups', $value);
    }

    /**
     * Sets the includeAllUsers property value. The includeAllUsers property
     * @param bool|null $value Value to set for the includeAllUsers property.
    */
    public function setIncludeAllUsers(?bool $value): void {
        $this->getBackingStore()->set('includeAllUsers', $value);
    }

    /**
     * Sets the includeGroups property value. The includeGroups property
     * @param array<string>|null $value Value to set for the includeGroups property.
    */
    public function setIncludeGroups(?array $value): void {
        $this->getBackingStore()->set('includeGroups', $value);
    }

    /**
     * Sets the lastDeploymentDateTime property value. The date and time the workload action was last deployed. Optional.
     * @param DateTime|null $value Value to set for the lastDeploymentDateTime property.
    */
    public function setLastDeploymentDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastDeploymentDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param WorkloadActionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?WorkloadActionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
