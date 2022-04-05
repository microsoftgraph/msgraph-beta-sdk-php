<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementIntentInfo implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $managementIntentDisplayName The display name for the management intent. Optional. Read-only. */
    private ?string $managementIntentDisplayName = null;
    
    /** @var string|null $managementIntentId The identifier for the management intent. Required. Read-only. */
    private ?string $managementIntentId = null;
    
    /** @var array<ManagementTemplateDetailedInfo>|null $managementTemplates The collection of management template information associated with the management intent. Optional. Read-only. */
    private ?array $managementTemplates = null;
    
    /**
     * Instantiates a new managementIntentInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementIntentInfo
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagementIntentInfo {
        return new ManagementIntentInfo();
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
            'managementIntentDisplayName' => function (self $o, ParseNode $n) { $o->setManagementIntentDisplayName($n->getStringValue()); },
            'managementIntentId' => function (self $o, ParseNode $n) { $o->setManagementIntentId($n->getStringValue()); },
            'managementTemplates' => function (self $o, ParseNode $n) { $o->setManagementTemplates($n->getCollectionOfObjectValues(ManagementTemplateDetailedInfo::class)); },
        ];
    }

    /**
     * Gets the managementIntentDisplayName property value. The display name for the management intent. Optional. Read-only.
     * @return string|null
    */
    public function getManagementIntentDisplayName(): ?string {
        return $this->managementIntentDisplayName;
    }

    /**
     * Gets the managementIntentId property value. The identifier for the management intent. Required. Read-only.
     * @return string|null
    */
    public function getManagementIntentId(): ?string {
        return $this->managementIntentId;
    }

    /**
     * Gets the managementTemplates property value. The collection of management template information associated with the management intent. Optional. Read-only.
     * @return array<ManagementTemplateDetailedInfo>|null
    */
    public function getManagementTemplates(): ?array {
        return $this->managementTemplates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('managementIntentDisplayName', $this->managementIntentDisplayName);
        $writer->writeStringValue('managementIntentId', $this->managementIntentId);
        $writer->writeCollectionOfObjectValues('managementTemplates', $this->managementTemplates);
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
     * Sets the managementIntentDisplayName property value. The display name for the management intent. Optional. Read-only.
     *  @param string|null $value Value to set for the managementIntentDisplayName property.
    */
    public function setManagementIntentDisplayName(?string $value ): void {
        $this->managementIntentDisplayName = $value;
    }

    /**
     * Sets the managementIntentId property value. The identifier for the management intent. Required. Read-only.
     *  @param string|null $value Value to set for the managementIntentId property.
    */
    public function setManagementIntentId(?string $value ): void {
        $this->managementIntentId = $value;
    }

    /**
     * Sets the managementTemplates property value. The collection of management template information associated with the management intent. Optional. Read-only.
     *  @param array<ManagementTemplateDetailedInfo>|null $value Value to set for the managementTemplates property.
    */
    public function setManagementTemplates(?array $value ): void {
        $this->managementTemplates = $value;
    }

}
