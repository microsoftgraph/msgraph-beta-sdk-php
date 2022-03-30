<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementActionDeploymentStatus implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $managementActionId The identifier for the management action. Required. Read-only. */
    private ?string $managementActionId = null;
    
    /** @var string|null $managementTemplateId The management template identifier that was used to generate the management action. Required. Read-only. */
    private ?string $managementTemplateId = null;
    
    /** @var int|null $managementTemplateVersion  */
    private ?int $managementTemplateVersion = null;
    
    /** @var ManagementActionStatus|null $status The status of the management action. Possible values are: toAddress, completed, error, timeOut, inProgress, planned, resolvedBy3rdParty, resolvedThroughAlternateMitigation, riskAccepted, unknownFutureValue. Required. */
    private ?ManagementActionStatus $status = null;
    
    /** @var array<WorkloadActionDeploymentStatus>|null $workloadActionDeploymentStatuses The collection of workload action deployment statues for the given management action. Optional. */
    private ?array $workloadActionDeploymentStatuses = null;
    
    /**
     * Instantiates a new managementActionDeploymentStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementActionDeploymentStatus
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagementActionDeploymentStatus {
        return new ManagementActionDeploymentStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'managementActionId' => function (self $o, ParseNode $n) { $o->setManagementActionId($n->getStringValue()); },
            'managementTemplateId' => function (self $o, ParseNode $n) { $o->setManagementTemplateId($n->getStringValue()); },
            'managementTemplateVersion' => function (self $o, ParseNode $n) { $o->setManagementTemplateVersion($n->getIntegerValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(ManagementActionStatus::class)); },
            'workloadActionDeploymentStatuses' => function (self $o, ParseNode $n) { $o->setWorkloadActionDeploymentStatuses($n->getCollectionOfObjectValues(WorkloadActionDeploymentStatus::class)); },
        ];
    }

    /**
     * Gets the managementActionId property value. The identifier for the management action. Required. Read-only.
     * @return string|null
    */
    public function getManagementActionId(): ?string {
        return $this->managementActionId;
    }

    /**
     * Gets the managementTemplateId property value. The management template identifier that was used to generate the management action. Required. Read-only.
     * @return string|null
    */
    public function getManagementTemplateId(): ?string {
        return $this->managementTemplateId;
    }

    /**
     * Gets the managementTemplateVersion property value. 
     * @return int|null
    */
    public function getManagementTemplateVersion(): ?int {
        return $this->managementTemplateVersion;
    }

    /**
     * Gets the status property value. The status of the management action. Possible values are: toAddress, completed, error, timeOut, inProgress, planned, resolvedBy3rdParty, resolvedThroughAlternateMitigation, riskAccepted, unknownFutureValue. Required.
     * @return ManagementActionStatus|null
    */
    public function getStatus(): ?ManagementActionStatus {
        return $this->status;
    }

    /**
     * Gets the workloadActionDeploymentStatuses property value. The collection of workload action deployment statues for the given management action. Optional.
     * @return array<WorkloadActionDeploymentStatus>|null
    */
    public function getWorkloadActionDeploymentStatuses(): ?array {
        return $this->workloadActionDeploymentStatuses;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('managementActionId', $this->managementActionId);
        $writer->writeStringValue('managementTemplateId', $this->managementTemplateId);
        $writer->writeIntegerValue('managementTemplateVersion', $this->managementTemplateVersion);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeCollectionOfObjectValues('workloadActionDeploymentStatuses', $this->workloadActionDeploymentStatuses);
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
     * Sets the managementActionId property value. The identifier for the management action. Required. Read-only.
     *  @param string|null $value Value to set for the managementActionId property.
    */
    public function setManagementActionId(?string $value ): void {
        $this->managementActionId = $value;
    }

    /**
     * Sets the managementTemplateId property value. The management template identifier that was used to generate the management action. Required. Read-only.
     *  @param string|null $value Value to set for the managementTemplateId property.
    */
    public function setManagementTemplateId(?string $value ): void {
        $this->managementTemplateId = $value;
    }

    /**
     * Sets the managementTemplateVersion property value. 
     *  @param int|null $value Value to set for the managementTemplateVersion property.
    */
    public function setManagementTemplateVersion(?int $value ): void {
        $this->managementTemplateVersion = $value;
    }

    /**
     * Sets the status property value. The status of the management action. Possible values are: toAddress, completed, error, timeOut, inProgress, planned, resolvedBy3rdParty, resolvedThroughAlternateMitigation, riskAccepted, unknownFutureValue. Required.
     *  @param ManagementActionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ManagementActionStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the workloadActionDeploymentStatuses property value. The collection of workload action deployment statues for the given management action. Optional.
     *  @param array<WorkloadActionDeploymentStatus>|null $value Value to set for the workloadActionDeploymentStatuses property.
    */
    public function setWorkloadActionDeploymentStatuses(?array $value ): void {
        $this->workloadActionDeploymentStatuses = $value;
    }

}
