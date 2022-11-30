<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementIntent extends Entity implements Parsable 
{
    /**
     * Instantiates a new managementIntent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
     * Gets the displayName property value. The display name for the management intent. Optional. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isGlobal' => fn(ParseNode $n) => $o->setIsGlobal($n->getBooleanValue()),
            'managementTemplates' => fn(ParseNode $n) => $o->setManagementTemplates($n->getCollectionOfObjectValues([ManagementTemplateDetailedInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isGlobal property value. A flag indicating whether the management intent is global. Required. Read-only.
     * @return bool|null
    */
    public function getIsGlobal(): ?bool {
        return $this->getBackingStore()->get('isGlobal');
    }

    /**
     * Gets the managementTemplates property value. The collection of management templates associated with the management intent. Optional. Read-only.
     * @return array<ManagementTemplateDetailedInfo>|null
    */
    public function getManagementTemplates(): ?array {
        return $this->getBackingStore()->get('managementTemplates');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isGlobal', $this->getIsGlobal());
        $writer->writeCollectionOfObjectValues('managementTemplates', $this->getManagementTemplates());
    }

    /**
     * Sets the displayName property value. The display name for the management intent. Optional. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isGlobal property value. A flag indicating whether the management intent is global. Required. Read-only.
     *  @param bool|null $value Value to set for the isGlobal property.
    */
    public function setIsGlobal(?bool $value): void {
        $this->getBackingStore()->set('isGlobal', $value);
    }

    /**
     * Sets the managementTemplates property value. The collection of management templates associated with the management intent. Optional. Read-only.
     *  @param array<ManagementTemplateDetailedInfo>|null $value Value to set for the managementTemplates property.
    */
    public function setManagementTemplates(?array $value): void {
        $this->getBackingStore()->set('managementTemplates', $value);
    }

}
