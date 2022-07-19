<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingAppConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * @var array<string>|null $supportedTypes Acceptable app types to allow for this setting
    */
    private ?array $supportedTypes = null;
    
    /**
     * Instantiates a new DeviceManagementSettingAppConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementSettingAppConstraint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingAppConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingAppConstraint {
        return new DeviceManagementSettingAppConstraint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'supportedTypes' => function (ParseNode $n) use ($o) { $o->setSupportedTypes($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the supportedTypes property value. Acceptable app types to allow for this setting
     * @return array<string>|null
    */
    public function getSupportedTypes(): ?array {
        return $this->supportedTypes;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('supportedTypes', $this->supportedTypes);
    }

    /**
     * Sets the supportedTypes property value. Acceptable app types to allow for this setting
     *  @param array<string>|null $value Value to set for the supportedTypes property.
    */
    public function setSupportedTypes(?array $value ): void {
        $this->supportedTypes = $value;
    }

}
