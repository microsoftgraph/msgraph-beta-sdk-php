<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ManagementActionDeploymentStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new managementActionDeploymentStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementActionDeploymentStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementActionDeploymentStatus {
        return new ManagementActionDeploymentStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'managementActionId' => fn(ParseNode $n) => $o->setManagementActionId($n->getStringValue()),
            'managementTemplateId' => fn(ParseNode $n) => $o->setManagementTemplateId($n->getStringValue()),
            'managementTemplateVersion' => fn(ParseNode $n) => $o->setManagementTemplateVersion($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ManagementActionStatus::class)),
            'workloadActionDeploymentStatuses' => fn(ParseNode $n) => $o->setWorkloadActionDeploymentStatuses($n->getCollectionOfObjectValues([WorkloadActionDeploymentStatus::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the managementActionId property value. The identifier for the management action. Required. Read-only.
     * @return string|null
    */
    public function getManagementActionId(): ?string {
        $val = $this->getBackingStore()->get('managementActionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementActionId'");
    }

    /**
     * Gets the managementTemplateId property value. The management template identifier that was used to generate the management action. Required. Read-only.
     * @return string|null
    */
    public function getManagementTemplateId(): ?string {
        $val = $this->getBackingStore()->get('managementTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementTemplateId'");
    }

    /**
     * Gets the managementTemplateVersion property value. The managementTemplateVersion property
     * @return int|null
    */
    public function getManagementTemplateVersion(): ?int {
        $val = $this->getBackingStore()->get('managementTemplateVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementTemplateVersion'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the status property value. The status property
     * @return ManagementActionStatus|null
    */
    public function getStatus(): ?ManagementActionStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ManagementActionStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the workloadActionDeploymentStatuses property value. The collection of workload action deployment statues for the given management action. Optional.
     * @return array<WorkloadActionDeploymentStatus>|null
    */
    public function getWorkloadActionDeploymentStatuses(): ?array {
        $val = $this->getBackingStore()->get('workloadActionDeploymentStatuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkloadActionDeploymentStatus::class);
            /** @var array<WorkloadActionDeploymentStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workloadActionDeploymentStatuses'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('managementActionId', $this->getManagementActionId());
        $writer->writeStringValue('managementTemplateId', $this->getManagementTemplateId());
        $writer->writeIntegerValue('managementTemplateVersion', $this->getManagementTemplateVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('workloadActionDeploymentStatuses', $this->getWorkloadActionDeploymentStatuses());
        $writer->writeAdditionalData($this->getAdditionalData());
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
     * Sets the managementActionId property value. The identifier for the management action. Required. Read-only.
     * @param string|null $value Value to set for the managementActionId property.
    */
    public function setManagementActionId(?string $value): void {
        $this->getBackingStore()->set('managementActionId', $value);
    }

    /**
     * Sets the managementTemplateId property value. The management template identifier that was used to generate the management action. Required. Read-only.
     * @param string|null $value Value to set for the managementTemplateId property.
    */
    public function setManagementTemplateId(?string $value): void {
        $this->getBackingStore()->set('managementTemplateId', $value);
    }

    /**
     * Sets the managementTemplateVersion property value. The managementTemplateVersion property
     * @param int|null $value Value to set for the managementTemplateVersion property.
    */
    public function setManagementTemplateVersion(?int $value): void {
        $this->getBackingStore()->set('managementTemplateVersion', $value);
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
     * @param ManagementActionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ManagementActionStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the workloadActionDeploymentStatuses property value. The collection of workload action deployment statues for the given management action. Optional.
     * @param array<WorkloadActionDeploymentStatus>|null $value Value to set for the workloadActionDeploymentStatuses property.
    */
    public function setWorkloadActionDeploymentStatuses(?array $value): void {
        $this->getBackingStore()->set('workloadActionDeploymentStatuses', $value);
    }

}
