<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementAbstractComplexSettingDefinition extends DeviceManagementSettingDefinition implements Parsable 
{
    /**
     * @var array<string>|null $implementations List of definition IDs for all possible implementations of this abstract complex setting
    */
    private ?array $implementations = null;
    
    /**
     * Instantiates a new DeviceManagementAbstractComplexSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementAbstractComplexSettingDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementAbstractComplexSettingDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementAbstractComplexSettingDefinition {
        return new DeviceManagementAbstractComplexSettingDefinition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'implementations' => function (ParseNode $n) use ($o) { $o->setImplementations($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the implementations property value. List of definition IDs for all possible implementations of this abstract complex setting
     * @return array<string>|null
    */
    public function getImplementations(): ?array {
        return $this->implementations;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('implementations', $this->implementations);
    }

    /**
     * Sets the implementations property value. List of definition IDs for all possible implementations of this abstract complex setting
     *  @param array<string>|null $value Value to set for the implementations property.
    */
    public function setImplementations(?array $value ): void {
        $this->implementations = $value;
    }

}
