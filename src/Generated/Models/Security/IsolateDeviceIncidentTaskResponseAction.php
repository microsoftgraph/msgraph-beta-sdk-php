<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class IsolateDeviceIncidentTaskResponseAction extends IncidentTaskResponseAction implements Parsable 
{
    /**
     * Instantiates a new IsolateDeviceIncidentTaskResponseAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.isolateDeviceIncidentTaskResponseAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IsolateDeviceIncidentTaskResponseAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IsolateDeviceIncidentTaskResponseAction {
        return new IsolateDeviceIncidentTaskResponseAction();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isolationType' => fn(ParseNode $n) => $o->setIsolationType($n->getEnumValue(IsolationType::class)),
        ]);
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
        $writer->writeEnumValue('isolationType', $this->getIsolationType());
    }

    /**
     * Sets the isolationType property value. The isolationType property
     * @param IsolationType|null $value Value to set for the isolationType property.
    */
    public function setIsolationType(?IsolationType $value): void {
        $this->getBackingStore()->set('isolationType', $value);
    }

}
