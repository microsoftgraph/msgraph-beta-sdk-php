<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\GenericError;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkloadActionDeploymentStatus implements AdditionalDataHolder, Parsable 
{
    /** @var string|null $actionId The unique identifier for the workload action. Required. Read-only. */
    private ?string $actionId = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $deployedPolicyId The identifier of any policy that was created by applying the workload action. Optional. Read-only. */
    private ?string $deployedPolicyId = null;
    
    /** @var GenericError|null $error The detailed information for exceptions that occur when deploying the workload action. Optional. Required. */
    private ?GenericError $error = null;
    
    /** @var array<string>|null $excludeGroups  */
    private ?array $excludeGroups = null;
    
    /** @var bool|null $includeAllUsers  */
    private ?bool $includeAllUsers = null;
    
    /** @var array<string>|null $includeGroups  */
    private ?array $includeGroups = null;
    
    /** @var DateTime|null $lastDeploymentDateTime The date and time the workload action was last deployed. Optional. */
    private ?DateTime $lastDeploymentDateTime = null;
    
    /** @var WorkloadActionStatus|null $status The status of the workload action deployment. Possible values are: toAddress, completed, error, timeOut, inProgress, unknownFutureValue. Required. Read-only. */
    private ?WorkloadActionStatus $status = null;
    
    /**
     * Instantiates a new workloadActionDeploymentStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkloadActionDeploymentStatus
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WorkloadActionDeploymentStatus {
        return new WorkloadActionDeploymentStatus();
    }

    /**
     * Gets the actionId property value. The unique identifier for the workload action. Required. Read-only.
     * @return string|null
    */
    public function getActionId(): ?string {
        return $this->actionId;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deployedPolicyId property value. The identifier of any policy that was created by applying the workload action. Optional. Read-only.
     * @return string|null
    */
    public function getDeployedPolicyId(): ?string {
        return $this->deployedPolicyId;
    }

    /**
     * Gets the error property value. The detailed information for exceptions that occur when deploying the workload action. Optional. Required.
     * @return GenericError|null
    */
    public function getError(): ?GenericError {
        return $this->error;
    }

    /**
     * Gets the excludeGroups property value. 
     * @return array<string>|null
    */
    public function getExcludeGroups(): ?array {
        return $this->excludeGroups;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'actionId' => function (self $o, ParseNode $n) { $o->setActionId($n->getStringValue()); },
            'deployedPolicyId' => function (self $o, ParseNode $n) { $o->setDeployedPolicyId($n->getStringValue()); },
            'error' => function (self $o, ParseNode $n) { $o->setError($n->getObjectValue(GenericError::class)); },
            'excludeGroups' => function (self $o, ParseNode $n) { $o->setExcludeGroups($n->getCollectionOfPrimitiveValues()); },
            'includeAllUsers' => function (self $o, ParseNode $n) { $o->setIncludeAllUsers($n->getBooleanValue()); },
            'includeGroups' => function (self $o, ParseNode $n) { $o->setIncludeGroups($n->getCollectionOfPrimitiveValues()); },
            'lastDeploymentDateTime' => function (self $o, ParseNode $n) { $o->setLastDeploymentDateTime($n->getDateTimeValue()); },
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getEnumValue(WorkloadActionStatus::class)); },
        ];
    }

    /**
     * Gets the includeAllUsers property value. 
     * @return bool|null
    */
    public function getIncludeAllUsers(): ?bool {
        return $this->includeAllUsers;
    }

    /**
     * Gets the includeGroups property value. 
     * @return array<string>|null
    */
    public function getIncludeGroups(): ?array {
        return $this->includeGroups;
    }

    /**
     * Gets the lastDeploymentDateTime property value. The date and time the workload action was last deployed. Optional.
     * @return DateTime|null
    */
    public function getLastDeploymentDateTime(): ?DateTime {
        return $this->lastDeploymentDateTime;
    }

    /**
     * Gets the status property value. The status of the workload action deployment. Possible values are: toAddress, completed, error, timeOut, inProgress, unknownFutureValue. Required. Read-only.
     * @return WorkloadActionStatus|null
    */
    public function getStatus(): ?WorkloadActionStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionId', $this->actionId);
        $writer->writeStringValue('deployedPolicyId', $this->deployedPolicyId);
        $writer->writeObjectValue('error', $this->error);
        $writer->writeCollectionOfPrimitiveValues('excludeGroups', $this->excludeGroups);
        $writer->writeBooleanValue('includeAllUsers', $this->includeAllUsers);
        $writer->writeCollectionOfPrimitiveValues('includeGroups', $this->includeGroups);
        $writer->writeDateTimeValue('lastDeploymentDateTime', $this->lastDeploymentDateTime);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionId property value. The unique identifier for the workload action. Required. Read-only.
     *  @param string|null $value Value to set for the actionId property.
    */
    public function setActionId(?string $value ): void {
        $this->actionId = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deployedPolicyId property value. The identifier of any policy that was created by applying the workload action. Optional. Read-only.
     *  @param string|null $value Value to set for the deployedPolicyId property.
    */
    public function setDeployedPolicyId(?string $value ): void {
        $this->deployedPolicyId = $value;
    }

    /**
     * Sets the error property value. The detailed information for exceptions that occur when deploying the workload action. Optional. Required.
     *  @param GenericError|null $value Value to set for the error property.
    */
    public function setError(?GenericError $value ): void {
        $this->error = $value;
    }

    /**
     * Sets the excludeGroups property value. 
     *  @param array<string>|null $value Value to set for the excludeGroups property.
    */
    public function setExcludeGroups(?array $value ): void {
        $this->excludeGroups = $value;
    }

    /**
     * Sets the includeAllUsers property value. 
     *  @param bool|null $value Value to set for the includeAllUsers property.
    */
    public function setIncludeAllUsers(?bool $value ): void {
        $this->includeAllUsers = $value;
    }

    /**
     * Sets the includeGroups property value. 
     *  @param array<string>|null $value Value to set for the includeGroups property.
    */
    public function setIncludeGroups(?array $value ): void {
        $this->includeGroups = $value;
    }

    /**
     * Sets the lastDeploymentDateTime property value. The date and time the workload action was last deployed. Optional.
     *  @param DateTime|null $value Value to set for the lastDeploymentDateTime property.
    */
    public function setLastDeploymentDateTime(?DateTime $value ): void {
        $this->lastDeploymentDateTime = $value;
    }

    /**
     * Sets the status property value. The status of the workload action deployment. Possible values are: toAddress, completed, error, timeOut, inProgress, unknownFutureValue. Required. Read-only.
     *  @param WorkloadActionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?WorkloadActionStatus $value ): void {
        $this->status = $value;
    }

}
