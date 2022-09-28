<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementCollectionSettingDefinition extends DeviceManagementSettingDefinition implements Parsable 
{
    /**
     * @var string|null $elementDefinitionId The Setting Definition ID that describes what each element of the collection looks like
    */
    private ?string $elementDefinitionId = null;
    
    /**
     * Instantiates a new deviceManagementCollectionSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementCollectionSettingDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementCollectionSettingDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementCollectionSettingDefinition {
        return new DeviceManagementCollectionSettingDefinition();
    }

    /**
     * Gets the elementDefinitionId property value. The Setting Definition ID that describes what each element of the collection looks like
     * @return string|null
    */
    public function getElementDefinitionId(): ?string {
        return $this->elementDefinitionId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'elementDefinitionId' => function (ParseNode $n) use ($o) { $o->setElementDefinitionId($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('elementDefinitionId', $this->elementDefinitionId);
    }

    /**
     * Sets the elementDefinitionId property value. The Setting Definition ID that describes what each element of the collection looks like
     *  @param string|null $value Value to set for the elementDefinitionId property.
    */
    public function setElementDefinitionId(?string $value ): void {
        $this->elementDefinitionId = $value;
    }

}
