<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DirectorySetting extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName Display name of this group of settings, which comes from the associated template. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $templateId Unique identifier for the template used to create this group of settings. Read-only.
    */
    private ?string $templateId = null;
    
    /**
     * @var array<SettingValue>|null $values Collection of name-value pairs corresponding to the name and defaultValue properties in the referenced directorySettingTemplates object.
    */
    private ?array $values = null;
    
    /**
     * Instantiates a new directorySetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.directorySetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DirectorySetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DirectorySetting {
        return new DirectorySetting();
    }

    /**
     * Gets the displayName property value. Display name of this group of settings, which comes from the associated template. Read-only.
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
            'templateId' => function (ParseNode $n) use ($o) { $o->setTemplateId($n->getStringValue()); },
            'values' => function (ParseNode $n) use ($o) { $o->setValues($n->getCollectionOfObjectValues(array(SettingValue::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the templateId property value. Unique identifier for the template used to create this group of settings. Read-only.
     * @return string|null
    */
    public function getTemplateId(): ?string {
        return $this->templateId;
    }

    /**
     * Gets the values property value. Collection of name-value pairs corresponding to the name and defaultValue properties in the referenced directorySettingTemplates object.
     * @return array<SettingValue>|null
    */
    public function getValues(): ?array {
        return $this->values;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('templateId', $this->templateId);
        $writer->writeCollectionOfObjectValues('values', $this->values);
    }

    /**
     * Sets the displayName property value. Display name of this group of settings, which comes from the associated template. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the templateId property value. Unique identifier for the template used to create this group of settings. Read-only.
     *  @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value ): void {
        $this->templateId = $value;
    }

    /**
     * Sets the values property value. Collection of name-value pairs corresponding to the name and defaultValue properties in the referenced directorySettingTemplates object.
     *  @param array<SettingValue>|null $value Value to set for the values property.
    */
    public function setValues(?array $value ): void {
        $this->values = $value;
    }

}
