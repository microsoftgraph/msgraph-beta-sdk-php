<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ClassGroupProvisioningFlow extends ProvisioningFlow implements Parsable 
{
    /**
     * Instantiates a new ClassGroupProvisioningFlow and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.industryData.classGroupProvisioningFlow');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ClassGroupProvisioningFlow
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ClassGroupProvisioningFlow {
        return new ClassGroupProvisioningFlow();
    }

    /**
     * Gets the configuration property value. The configuration property
     * @return ClassGroupConfiguration|null
    */
    public function getConfiguration(): ?ClassGroupConfiguration {
        $val = $this->getBackingStore()->get('configuration');
        if (is_null($val) || $val instanceof ClassGroupConfiguration) {
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
            'configuration' => fn(ParseNode $n) => $o->setConfiguration($n->getObjectValue([ClassGroupConfiguration::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('configuration', $this->getConfiguration());
    }

    /**
     * Sets the configuration property value. The configuration property
     * @param ClassGroupConfiguration|null $value Value to set for the configuration property.
    */
    public function setConfiguration(?ClassGroupConfiguration $value): void {
        $this->getBackingStore()->set('configuration', $value);
    }

}
