<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplateDetailedInfo implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ManagementCategory|null $category The management category for the management template. Possible values are: custom, devices, identity, unknownFutureValue. Required. Read-only. */
    private ?ManagementCategory $category = null;
    
    /** @var string|null $displayName The display name for the management template. Required. Read-only. */
    private ?string $displayName = null;
    
    /** @var string|null $managementTemplateId The unique identifier for the management template. Required. Read-only. */
    private ?string $managementTemplateId = null;
    
    /** @var int|null $version  */
    private ?int $version = null;
    
    /**
     * Instantiates a new managementTemplateDetailedInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementTemplateDetailedInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplateDetailedInfo {
        return new ManagementTemplateDetailedInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the category property value. The management category for the management template. Possible values are: custom, devices, identity, unknownFutureValue. Required. Read-only.
     * @return ManagementCategory|null
    */
    public function getCategory(): ?ManagementCategory {
        return $this->category;
    }

    /**
     * Gets the displayName property value. The display name for the management template. Required. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'category' => function (self $o, ParseNode $n) { $o->setCategory($n->getEnumValue(ManagementCategory::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'managementTemplateId' => function (self $o, ParseNode $n) { $o->setManagementTemplateId($n->getStringValue()); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the managementTemplateId property value. The unique identifier for the management template. Required. Read-only.
     * @return string|null
    */
    public function getManagementTemplateId(): ?string {
        return $this->managementTemplateId;
    }

    /**
     * Gets the version property value. 
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('category', $this->category);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('managementTemplateId', $this->managementTemplateId);
        $writer->writeIntegerValue('version', $this->version);
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
     * Sets the category property value. The management category for the management template. Possible values are: custom, devices, identity, unknownFutureValue. Required. Read-only.
     *  @param ManagementCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ManagementCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the displayName property value. The display name for the management template. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the managementTemplateId property value. The unique identifier for the management template. Required. Read-only.
     *  @param string|null $value Value to set for the managementTemplateId property.
    */
    public function setManagementTemplateId(?string $value ): void {
        $this->managementTemplateId = $value;
    }

    /**
     * Sets the version property value. 
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

}
