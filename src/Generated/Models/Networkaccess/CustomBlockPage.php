<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomBlockPage extends Entity implements Parsable 
{
    /**
     * Instantiates a new CustomBlockPage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomBlockPage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomBlockPage {
        return new CustomBlockPage();
    }

    /**
     * Gets the configuration property value. The current configuration of the customized message. The body can be input in limited markdown language, supporting links via the format: link.
     * @return BlockPageConfigurationBase|null
    */
    public function getConfiguration(): ?BlockPageConfigurationBase {
        $val = $this->getBackingStore()->get('configuration');
        if (is_null($val) || $val instanceof BlockPageConfigurationBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configuration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configuration' => fn(ParseNode $n) => $o->setConfiguration($n->getObjectValue([BlockPageConfigurationBase::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(Status::class)),
        ]);
    }

    /**
     * Gets the state property value. The state property
     * @return Status|null
    */
    public function getState(): ?Status {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof Status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('configuration', $this->getConfiguration());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the configuration property value. The current configuration of the customized message. The body can be input in limited markdown language, supporting links via the format: link.
     * @param BlockPageConfigurationBase|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?BlockPageConfigurationBase $value): void {
        $this->getBackingStore()->set('configuration', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param Status|null $value Value to set for the state property.
    */
    public function setState(?Status $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
