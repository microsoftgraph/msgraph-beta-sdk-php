<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\MicrosoftGraphManagedTenantsChangeDeploymentStatus;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class ChangeDeploymentStatusPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new changeDeploymentStatusPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangeDeploymentStatusPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChangeDeploymentStatusPostRequestBody {
        return new ChangeDeploymentStatusPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
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
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'tenantGroupId' => fn(ParseNode $n) => $o->setTenantGroupId($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ];
    }

    /**
     * Gets the managementActionId property value. The managementActionId property
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
     * Gets the managementTemplateId property value. The managementTemplateId property
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
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the tenantGroupId property value. The tenantGroupId property
     * @return string|null
    */
    public function getTenantGroupId(): ?string {
        $val = $this->getBackingStore()->get('tenantGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantGroupId'");
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('managementActionId', $this->getManagementActionId());
        $writer->writeStringValue('managementTemplateId', $this->getManagementTemplateId());
        $writer->writeIntegerValue('managementTemplateVersion', $this->getManagementTemplateVersion());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeStringValue('tenantGroupId', $this->getTenantGroupId());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the managementActionId property value. The managementActionId property
     * @param string|null $value Value to set for the managementActionId property.
    */
    public function setManagementActionId(?string $value): void {
        $this->getBackingStore()->set('managementActionId', $value);
    }

    /**
     * Sets the managementTemplateId property value. The managementTemplateId property
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
     * Sets the status property value. The status property
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tenantGroupId property value. The tenantGroupId property
     * @param string|null $value Value to set for the tenantGroupId property.
    */
    public function setTenantGroupId(?string $value): void {
        $this->getBackingStore()->set('tenantGroupId', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
