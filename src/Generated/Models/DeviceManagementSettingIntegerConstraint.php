<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingIntegerConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * @var int|null $maximumValue The maximum permitted value
    */
    private ?int $maximumValue = null;
    
    /**
     * @var int|null $minimumValue The minimum permitted value
    */
    private ?int $minimumValue = null;
    
    /**
     * Instantiates a new DeviceManagementSettingIntegerConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingIntegerConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingIntegerConstraint {
        return new DeviceManagementSettingIntegerConstraint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maximumValue' => function (ParseNode $n) use ($o) { $o->setMaximumValue($n->getIntegerValue()); },
            'minimumValue' => function (ParseNode $n) use ($o) { $o->setMinimumValue($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the maximumValue property value. The maximum permitted value
     * @return int|null
    */
    public function getMaximumValue(): ?int {
        return $this->maximumValue;
    }

    /**
     * Gets the minimumValue property value. The minimum permitted value
     * @return int|null
    */
    public function getMinimumValue(): ?int {
        return $this->minimumValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maximumValue', $this->maximumValue);
        $writer->writeIntegerValue('minimumValue', $this->minimumValue);
    }

    /**
     * Sets the maximumValue property value. The maximum permitted value
     *  @param int|null $value Value to set for the maximumValue property.
    */
    public function setMaximumValue(?int $value ): void {
        $this->maximumValue = $value;
    }

    /**
     * Sets the minimumValue property value. The minimum permitted value
     *  @param int|null $value Value to set for the minimumValue property.
    */
    public function setMinimumValue(?int $value ): void {
        $this->minimumValue = $value;
    }

}
