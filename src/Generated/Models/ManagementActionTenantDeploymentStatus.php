<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagementActionDeploymentStatus;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementActionTenantDeploymentStatus extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<ManagementActionDeploymentStatus>|null $statuses The collection of deployment status for each instance of a management action. Optional.
    */
    private ?array $statuses = null;
    
    /**
     * @var string|null $tenantGroupId The identifier for the tenant group that is associated with the management action. Required. Read-only.
    */
    private ?string $tenantGroupId = null;
    
    /**
     * @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new ManagementActionTenantDeploymentStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'statuses' => function (ParseNode $n) use ($o) { $o->setStatuses($n->getCollectionOfObjectValues(array(ManagementActionDeploymentStatus::class, 'createFromDiscriminatorValue'))); },
            'tenantGroupId' => function (ParseNode $n) use ($o) { $o->setTenantGroupId($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the statuses property value. The collection of deployment status for each instance of a management action. Optional.
     * @return array<ManagementActionDeploymentStatus>|null
    */
    public function getStatuses(): ?array {
        return $this->statuses;
    }

    /**
     * Gets the tenantGroupId property value. The identifier for the tenant group that is associated with the management action. Required. Read-only.
     * @return string|null
    */
    public function getTenantGroupId(): ?string {
        return $this->tenantGroupId;
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('statuses', $this->statuses);
        $writer->writeStringValue('tenantGroupId', $this->tenantGroupId);
        $writer->writeStringValue('tenantId', $this->tenantId);
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
     * Sets the statuses property value. The collection of deployment status for each instance of a management action. Optional.
     *  @param array<ManagementActionDeploymentStatus>|null $value Value to set for the statuses property.
    */
    public function setStatuses(?array $value ): void {
        $this->statuses = $value;
    }

    /**
     * Sets the tenantGroupId property value. The identifier for the tenant group that is associated with the management action. Required. Read-only.
     *  @param string|null $value Value to set for the tenantGroupId property.
    */
    public function setTenantGroupId(?string $value ): void {
        $this->tenantGroupId = $value;
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
