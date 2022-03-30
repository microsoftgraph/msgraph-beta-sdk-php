<?php

namespace Microsoft\Graph\Beta\Generated\TenantRelationships\ManagedTenants\ManagementActions\Item\Apply;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApplyRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $excludeGroups  */
    private ?array $excludeGroups = null;
    
    /** @var bool|null $includeAllUsers  */
    private ?bool $includeAllUsers = null;
    
    /** @var array<string>|null $includeGroups  */
    private ?array $includeGroups = null;
    
    /** @var string|null $managementTemplateId  */
    private ?string $managementTemplateId = null;
    
    /** @var string|null $tenantGroupId  */
    private ?string $tenantGroupId = null;
    
    /** @var string|null $tenantId  */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new applyRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApplyRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ApplyRequestBody {
        return new ApplyRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
            'excludeGroups' => function (self $o, ParseNode $n) { $o->setExcludeGroups($n->getCollectionOfPrimitiveValues()); },
            'includeAllUsers' => function (self $o, ParseNode $n) { $o->setIncludeAllUsers($n->getBooleanValue()); },
            'includeGroups' => function (self $o, ParseNode $n) { $o->setIncludeGroups($n->getCollectionOfPrimitiveValues()); },
            'managementTemplateId' => function (self $o, ParseNode $n) { $o->setManagementTemplateId($n->getStringValue()); },
            'tenantGroupId' => function (self $o, ParseNode $n) { $o->setTenantGroupId($n->getStringValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
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
     * Gets the managementTemplateId property value. 
     * @return string|null
    */
    public function getManagementTemplateId(): ?string {
        return $this->managementTemplateId;
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
        $writer->writeCollectionOfPrimitiveValues('excludeGroups', $this->excludeGroups);
        $writer->writeBooleanValue('includeAllUsers', $this->includeAllUsers);
        $writer->writeCollectionOfPrimitiveValues('includeGroups', $this->includeGroups);
        $writer->writeStringValue('managementTemplateId', $this->managementTemplateId);
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
     * Sets the managementTemplateId property value. 
     *  @param string|null $value Value to set for the managementTemplateId property.
    */
    public function setManagementTemplateId(?string $value ): void {
        $this->managementTemplateId = $value;
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
