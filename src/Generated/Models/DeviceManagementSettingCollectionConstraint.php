<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Base entity for a constraint
*/
class DeviceManagementSettingCollectionConstraint extends DeviceManagementConstraint implements Parsable 
{
    /**
     * Instantiates a new deviceManagementSettingCollectionConstraint and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementSettingCollectionConstraint');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingCollectionConstraint
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingCollectionConstraint {
        return new DeviceManagementSettingCollectionConstraint();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'maximumLength' => fn(ParseNode $n) => $o->setMaximumLength($n->getIntegerValue()),
            'minimumLength' => fn(ParseNode $n) => $o->setMinimumLength($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the maximumLength property value. The maximum number of elements in the collection
     * @return int|null
    */
    public function getMaximumLength(): ?int {
        $val = $this->getBackingStore()->get('maximumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'maximumLength'");
    }

    /**
     * Gets the minimumLength property value. The minimum number of elements in the collection
     * @return int|null
    */
    public function getMinimumLength(): ?int {
        $val = $this->getBackingStore()->get('minimumLength');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'minimumLength'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('maximumLength', $this->getMaximumLength());
        $writer->writeIntegerValue('minimumLength', $this->getMinimumLength());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the maximumLength property value. The maximum number of elements in the collection
     * @param int|null $value Value to set for the maximumLength property.
    */
    public function setMaximumLength(?int $value): void {
        $this->getBackingStore()->set('maximumLength', $value);
    }

    /**
     * Sets the minimumLength property value. The minimum number of elements in the collection
     * @param int|null $value Value to set for the minimumLength property.
    */
    public function setMinimumLength(?int $value): void {
        $this->getBackingStore()->set('minimumLength', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
