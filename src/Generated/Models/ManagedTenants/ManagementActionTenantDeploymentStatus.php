<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ManagementActionTenantDeploymentStatus extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new managementActionTenantDeploymentStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementActionTenantDeploymentStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementActionTenantDeploymentStatus {
        return new ManagementActionTenantDeploymentStatus();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'statuses' => fn(ParseNode $n) => $o->setStatuses($n->getCollectionOfObjectValues([ManagementActionDeploymentStatus::class, 'createFromDiscriminatorValue'])),
            'tenantGroupId' => fn(ParseNode $n) => $o->setTenantGroupId($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the statuses property value. The collection of deployment status for each instance of a management action. Optional.
     * @return array<ManagementActionDeploymentStatus>|null
    */
    public function getStatuses(): ?array {
        $val = $this->getBackingStore()->get('statuses');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagementActionDeploymentStatus::class);
            /** @var array<ManagementActionDeploymentStatus>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'statuses'");
    }

    /**
     * Gets the tenantGroupId property value. The identifier for the tenant group that is associated with the management action. Required. Read-only.
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
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
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
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('statuses', $this->getStatuses());
        $writer->writeStringValue('tenantGroupId', $this->getTenantGroupId());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the statuses property value. The collection of deployment status for each instance of a management action. Optional.
     * @param array<ManagementActionDeploymentStatus>|null $value Value to set for the statuses property.
    */
    public function setStatuses(?array $value): void {
        $this->getBackingStore()->set('statuses', $value);
    }

    /**
     * Sets the tenantGroupId property value. The identifier for the tenant group that is associated with the management action. Required. Read-only.
     * @param string|null $value Value to set for the tenantGroupId property.
    */
    public function setTenantGroupId(?string $value): void {
        $this->getBackingStore()->set('tenantGroupId', $value);
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
