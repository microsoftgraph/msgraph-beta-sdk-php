<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UnsupportedDeviceConfiguration extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new UnsupportedDeviceConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.unsupportedDeviceConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UnsupportedDeviceConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UnsupportedDeviceConfiguration {
        return new UnsupportedDeviceConfiguration();
    }

    /**
     * Gets the details property value. Details describing why the entity is unsupported. This collection can contain a maximum of 1000 elements.
     * @return array<UnsupportedDeviceConfigurationDetail>|null
    */
    public function getDetails(): ?array {
        return $this->getBackingStore()->get('details');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfObjectValues([UnsupportedDeviceConfigurationDetail::class, 'createFromDiscriminatorValue'])),
            'originalEntityTypeName' => fn(ParseNode $n) => $o->setOriginalEntityTypeName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the originalEntityTypeName property value. The type of entity that would be returned otherwise.
     * @return string|null
    */
    public function getOriginalEntityTypeName(): ?string {
        return $this->getBackingStore()->get('originalEntityTypeName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('details', $this->getDetails());
        $writer->writeStringValue('originalEntityTypeName', $this->getOriginalEntityTypeName());
    }

    /**
     * Sets the details property value. Details describing why the entity is unsupported. This collection can contain a maximum of 1000 elements.
     *  @param array<UnsupportedDeviceConfigurationDetail>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the originalEntityTypeName property value. The type of entity that would be returned otherwise.
     *  @param string|null $value Value to set for the originalEntityTypeName property.
    */
    public function setOriginalEntityTypeName(?string $value): void {
        $this->getBackingStore()->set('originalEntityTypeName', $value);
    }

}
