<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSimpleSettingCollectionDefinition extends DeviceManagementConfigurationSimpleSettingDefinition implements Parsable 
{
    /**
     * Instantiates a new DeviceManagementConfigurationSimpleSettingCollectionDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSimpleSettingCollectionDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSimpleSettingCollectionDefinition {
        return new DeviceManagementConfigurationSimpleSettingCollectionDefinition();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maximumCount' => fn(ParseNode $n) => $o->setMaximumCount($n->getIntegerValue()),
            'minimumCount' => fn(ParseNode $n) => $o->setMinimumCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the maximumCount property value. Maximum number of simple settings in the collection
     * @return int|null
    */
    public function getMaximumCount(): ?int {
        $val = $this->getBackingStore()->get('maximumCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumCount'");
    }

    /**
     * Gets the minimumCount property value. Minimum number of simple settings in the collection
     * @return int|null
    */
    public function getMinimumCount(): ?int {
        $val = $this->getBackingStore()->get('minimumCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maximumCount', $this->getMaximumCount());
        $writer->writeIntegerValue('minimumCount', $this->getMinimumCount());
    }

    /**
     * Sets the maximumCount property value. Maximum number of simple settings in the collection
     * @param int|null $value Value to set for the maximumCount property.
    */
    public function setMaximumCount(?int $value): void {
        $this->getBackingStore()->set('maximumCount', $value);
    }

    /**
     * Sets the minimumCount property value. Minimum number of simple settings in the collection
     * @param int|null $value Value to set for the minimumCount property.
    */
    public function setMinimumCount(?int $value): void {
        $this->getBackingStore()->set('minimumCount', $value);
    }

}
