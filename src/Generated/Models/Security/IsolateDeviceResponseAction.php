<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IsolateDeviceResponseAction extends ResponseAction implements Parsable 
{
    /**
     * Instantiates a new IsolateDeviceResponseAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.isolateDeviceResponseAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IsolateDeviceResponseAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IsolateDeviceResponseAction {
        return new IsolateDeviceResponseAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identifier' => fn(ParseNode $n) => $o->setIdentifier($n->getEnumValue(DeviceIdEntityIdentifier::class)),
            'isolationType' => fn(ParseNode $n) => $o->setIsolationType($n->getEnumValue(IsolationType::class)),
        ]);
    }

    /**
     * Gets the identifier property value. The identifier property
     * @return DeviceIdEntityIdentifier|null
    */
    public function getIdentifier(): ?DeviceIdEntityIdentifier {
        $val = $this->getBackingStore()->get('identifier');
        if (is_null($val) || $val instanceof DeviceIdEntityIdentifier) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identifier'");
    }

    /**
     * Gets the isolationType property value. The isolationType property
     * @return IsolationType|null
    */
    public function getIsolationType(): ?IsolationType {
        $val = $this->getBackingStore()->get('isolationType');
        if (is_null($val) || $val instanceof IsolationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isolationType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('identifier', $this->getIdentifier());
        $writer->writeEnumValue('isolationType', $this->getIsolationType());
    }

    /**
     * Sets the identifier property value. The identifier property
     * @param DeviceIdEntityIdentifier|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?DeviceIdEntityIdentifier $value): void {
        $this->getBackingStore()->set('identifier', $value);
    }

    /**
     * Sets the isolationType property value. The isolationType property
     * @param IsolationType|null $value Value to set for the isolationType property.
    */
    public function setIsolationType(?IsolationType $value): void {
        $this->getBackingStore()->set('isolationType', $value);
    }

}
