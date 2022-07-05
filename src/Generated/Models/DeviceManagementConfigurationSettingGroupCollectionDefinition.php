<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingGroupCollectionDefinition extends DeviceManagementConfigurationSettingGroupDefinition implements Parsable 
{
    /**
     * @var int|null $maximumCount Maximum number of setting group count in the collection. Valid values 1 to 100
    */
    private ?int $maximumCount = null;
    
    /**
     * @var int|null $minimumCount Minimum number of setting group count in the collection. Valid values 1 to 100
    */
    private ?int $minimumCount = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationSettingGroupCollectionDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingGroupCollectionDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingGroupCollectionDefinition {
        return new DeviceManagementConfigurationSettingGroupCollectionDefinition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maximumCount' => function (ParseNode $n) use ($o) { $o->setMaximumCount($n->getIntegerValue()); },
            'minimumCount' => function (ParseNode $n) use ($o) { $o->setMinimumCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the maximumCount property value. Maximum number of setting group count in the collection. Valid values 1 to 100
     * @return int|null
    */
    public function getMaximumCount(): ?int {
        return $this->maximumCount;
    }

    /**
     * Gets the minimumCount property value. Minimum number of setting group count in the collection. Valid values 1 to 100
     * @return int|null
    */
    public function getMinimumCount(): ?int {
        return $this->minimumCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maximumCount', $this->maximumCount);
        $writer->writeIntegerValue('minimumCount', $this->minimumCount);
    }

    /**
     * Sets the maximumCount property value. Maximum number of setting group count in the collection. Valid values 1 to 100
     *  @param int|null $value Value to set for the maximumCount property.
    */
    public function setMaximumCount(?int $value ): void {
        $this->maximumCount = $value;
    }

    /**
     * Sets the minimumCount property value. Minimum number of setting group count in the collection. Valid values 1 to 100
     *  @param int|null $value Value to set for the minimumCount property.
    */
    public function setMinimumCount(?int $value ): void {
        $this->minimumCount = $value;
    }

}
