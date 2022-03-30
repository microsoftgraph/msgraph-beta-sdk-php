<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingInstance extends Entity 
{
    /** @var string|null $definitionId The ID of the setting definition for this instance */
    private ?string $definitionId = null;
    
    /** @var string|null $valueJson JSON representation of the value */
    private ?string $valueJson = null;
    
    /**
     * Instantiates a new deviceManagementSettingInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingInstance
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingInstance {
        return new DeviceManagementSettingInstance();
    }

    /**
     * Gets the definitionId property value. The ID of the setting definition for this instance
     * @return string|null
    */
    public function getDefinitionId(): ?string {
        return $this->definitionId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'definitionId' => function (self $o, ParseNode $n) { $o->setDefinitionId($n->getStringValue()); },
            'valueJson' => function (self $o, ParseNode $n) { $o->setValueJson($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the valueJson property value. JSON representation of the value
     * @return string|null
    */
    public function getValueJson(): ?string {
        return $this->valueJson;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('definitionId', $this->definitionId);
        $writer->writeStringValue('valueJson', $this->valueJson);
    }

    /**
     * Sets the definitionId property value. The ID of the setting definition for this instance
     *  @param string|null $value Value to set for the definitionId property.
    */
    public function setDefinitionId(?string $value ): void {
        $this->definitionId = $value;
    }

    /**
     * Sets the valueJson property value. JSON representation of the value
     *  @param string|null $value Value to set for the valueJson property.
    */
    public function setValueJson(?string $value ): void {
        $this->valueJson = $value;
    }

}
