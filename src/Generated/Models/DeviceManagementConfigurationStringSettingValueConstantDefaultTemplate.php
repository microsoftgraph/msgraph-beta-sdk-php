<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationStringSettingValueConstantDefaultTemplate extends DeviceManagementConfigurationStringSettingValueDefaultTemplate implements Parsable 
{
    /**
     * @var string|null $constantValue Default Constant Value
    */
    private ?string $constantValue = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationStringSettingValueConstantDefaultTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationStringSettingValueConstantDefaultTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationStringSettingValueConstantDefaultTemplate {
        return new DeviceManagementConfigurationStringSettingValueConstantDefaultTemplate();
    }

    /**
     * Gets the constantValue property value. Default Constant Value
     * @return string|null
    */
    public function getConstantValue(): ?string {
        return $this->constantValue;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'constantValue' => function (ParseNode $n) use ($o) { $o->setConstantValue($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('constantValue', $this->constantValue);
    }

    /**
     * Sets the constantValue property value. Default Constant Value
     *  @param string|null $value Value to set for the constantValue property.
    */
    public function setConstantValue(?string $value ): void {
        $this->constantValue = $value;
    }

}
