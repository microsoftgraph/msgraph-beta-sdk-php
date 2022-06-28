<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagementTemplateDetailedInfo;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementIntent extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $displayName The display name for the management intent. Optional. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var bool|null $isGlobal A flag indicating whether the management intent is global. Required. Read-only.
    */
    private ?bool $isGlobal = null;
    
    /**
     * @var array<ManagementTemplateDetailedInfo>|null $managementTemplates The collection of management templates associated with the management intent. Optional. Read-only.
    */
    private ?array $managementTemplates = null;
    
    /**
     * Instantiates a new ManagementIntent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementIntent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementIntent {
        return new ManagementIntent();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The display name for the management intent. Optional. Read-only.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'isGlobal' => function (ParseNode $n) use ($o) { $o->setIsGlobal($n->getBooleanValue()); },
            'managementTemplates' => function (ParseNode $n) use ($o) { $o->setManagementTemplates($n->getCollectionOfObjectValues(array(ManagementTemplateDetailedInfo::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isGlobal property value. A flag indicating whether the management intent is global. Required. Read-only.
     * @return bool|null
    */
    public function getIsGlobal(): ?bool {
        return $this->isGlobal;
    }

    /**
     * Gets the managementTemplates property value. The collection of management templates associated with the management intent. Optional. Read-only.
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
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeBooleanValue('isGlobal', $this->isGlobal);
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
     * Sets the displayName property value. The display name for the management intent. Optional. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the isGlobal property value. A flag indicating whether the management intent is global. Required. Read-only.
     *  @param bool|null $value Value to set for the isGlobal property.
    */
    public function setIsGlobal(?bool $value ): void {
        $this->isGlobal = $value;
    }

    /**
     * Sets the managementTemplates property value. The collection of management templates associated with the management intent. Optional. Read-only.
     *  @param array<ManagementTemplateDetailedInfo>|null $value Value to set for the managementTemplates property.
    */
    public function setManagementTemplates(?array $value ): void {
        $this->managementTemplates = $value;
    }

}
