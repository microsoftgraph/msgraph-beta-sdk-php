<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActionTenantDeploymentStatuses\ChangeDeploymentStatus;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChangeDeploymentStatusRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $managementActionId  */
    private ?string $managementActionId = null;
    
    /** @var string|null $managementTemplateId  */
    private ?string $managementTemplateId = null;
    
    /** @var int|null $managementTemplateVersion  */
    private ?int $managementTemplateVersion = null;
    
    /** @var string|null $status  */
    private ?string $status = null;
    
    /** @var string|null $tenantGroupId  */
    private ?string $tenantGroupId = null;
    
    /** @var string|null $tenantId  */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new changeDeploymentStatusRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChangeDeploymentStatusRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ChangeDeploymentStatusRequestBody {
        return new ChangeDeploymentStatusRequestBody();
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
            'status' => function (self $o, ParseNode $n) { $o->setStatus($n->getStringValue()); },
            'tenantGroupId' => function (self $o, ParseNode $n) { $o->setTenantGroupId($n->getStringValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the managementActionId property value. 
     * @return string|null
    */
    public function getManagementActionId(): ?string {
        return $this->managementActionId;
    }

    /**
     * Gets the managementTemplateId property value. 
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
     * Gets the status property value. 
     * @return string|null
    */
    public function getStatus(): ?string {
        return $this->status;
    }

    /**
     * Gets the tenantGroupId property value. 
     * @return string|null
    */
    public function getTenantGroupId(): ?string {
        return $this->tenantGroupId;
    }

    /**
     * Gets the tenantId property value. 
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
     * Sets the managementActionId property value. 
     *  @param string|null $value Value to set for the managementActionId property.
    */
    public function setManagementActionId(?string $value ): void {
        $this->managementActionId = $value;
    }

    /**
     * Sets the managementTemplateId property value. 
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
     * Sets the status property value. 
     *  @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the tenantGroupId property value. 
     *  @param string|null $value Value to set for the tenantGroupId property.
    */
    public function setTenantGroupId(?string $value ): void {
        $this->tenantGroupId = $value;
    }

    /**
     * Sets the tenantId property value. 
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
