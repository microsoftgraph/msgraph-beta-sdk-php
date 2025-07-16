<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class Template extends Entity implements Parsable 
{
    /**
     * Instantiates a new Template and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Template
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Template {
        return new Template();
    }

    /**
     * Gets the deviceTemplates property value. Defines the templates that are common to a set of device objects, such as IoT devices.
     * @return array<DeviceTemplate>|null
    */
    public function getDeviceTemplates(): ?array {
        $val = $this->getBackingStore()->get('deviceTemplates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceTemplate::class);
            /** @var array<DeviceTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceTemplates'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceTemplates' => fn(ParseNode $n) => $o->setDeviceTemplates($n->getCollectionOfObjectValues([DeviceTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('deviceTemplates', $this->getDeviceTemplates());
    }

    /**
     * Sets the deviceTemplates property value. Defines the templates that are common to a set of device objects, such as IoT devices.
     * @param array<DeviceTemplate>|null $value Value to set for the deviceTemplates property.
    */
    public function setDeviceTemplates(?array $value): void {
        $this->getBackingStore()->set('deviceTemplates', $value);
    }

}
