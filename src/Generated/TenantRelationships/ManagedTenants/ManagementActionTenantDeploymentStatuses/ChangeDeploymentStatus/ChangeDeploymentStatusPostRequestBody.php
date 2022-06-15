<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\ChangeDeploymentStatus;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChangeDeploymentStatusPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $managementActionId The managementActionId property
    */
    private ?string $managementActionId = null;
    
    /**
     * @var string|null $managementTemplateId The managementTemplateId property
    */
    private ?string $managementTemplateId = null;
    
    /**
     * @var int|null $managementTemplateVersion The managementTemplateVersion property
    */
    private ?int $managementTemplateVersion = null;
    
    /**
     * @var string|null $status The status property
    */
    private ?string $status = null;
    
    /**
     * @var string|null $tenantGroupId The tenantGroupId property
    */
    private ?string $tenantGroupId = null;
    
    /**
     * @var string|null $tenantId The tenantId property
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new changeDeploymentStatusPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
        return  [
            'managementActionId' => function (ParseNode $n) use ($o) { $o->setManagementActionId($n->getStringValue()); },
            'managementTemplateId' => function (ParseNode $n) use ($o) { $o->setManagementTemplateId($n->getStringValue()); },
            'managementTemplateVersion' => function (ParseNode $n) use ($o) { $o->setManagementTemplateVersion($n->getIntegerValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getStringValue()); },
            'tenantGroupId' => function (ParseNode $n) use ($o) { $o->setTenantGroupId($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the managementActionId property value. The managementActionId property
     * @return string|null
    */
    public function getManagementActionId(): ?string {
        return $this->managementActionId;
    }

    /**
     * Gets the managementTemplateId property value. The managementTemplateId property
     * @return string|null
    */
    public function getManagementTemplateId(): ?string {
        return $this->managementTemplateId;
    }

    /**
     * Gets the managementTemplateVersion property value. The managementTemplateVersion property
     * @return int|null
    */
    public function getManagementTemplateVersion(): ?int {
        return $this->managementTemplateVersion;
    }

    /**
     * Gets the status property value. The status property
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the tenantGroupId property value. The tenantGroupId property
     * @return string|null
    */
    public function getTenantGroupId(): ?string {
        return $this->tenantGroupId;
    }

    /**
     * Gets the tenantId property value. The tenantId property
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
        $writer->writeStringValue('managementActionId', $this->managementActionId);
        $writer->writeStringValue('managementTemplateId', $this->managementTemplateId);
        $writer->writeIntegerValue('managementTemplateVersion', $this->managementTemplateVersion);
        $writer->writeStringValue('status', $this->status);
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
     * Sets the managementActionId property value. The managementActionId property
     *  @param string|null $value Value to set for the managementActionId property.
    */
    public function setManagementActionId(?string $value ): void {
        $this->managementActionId = $value;
    }

    /**
     * Sets the managementTemplateId property value. The managementTemplateId property
     *  @param string|null $value Value to set for the managementTemplateId property.
    */
    public function setManagementTemplateId(?string $value ): void {
        $this->managementTemplateId = $value;
    }

    /**
     * Sets the managementTemplateVersion property value. The managementTemplateVersion property
     *  @param int|null $value Value to set for the managementTemplateVersion property.
    */
    public function setManagementTemplateVersion(?int $value ): void {
        $this->managementTemplateVersion = $value;
    }

    /**
     * Sets the status property value. The status property
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the tenantGroupId property value. The tenantGroupId property
     *  @param string|null $value Value to set for the tenantGroupId property.
    */
    public function setTenantGroupId(?string $value ): void {
        $this->tenantGroupId = $value;
    }

    /**
     * Sets the tenantId property value. The tenantId property
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
