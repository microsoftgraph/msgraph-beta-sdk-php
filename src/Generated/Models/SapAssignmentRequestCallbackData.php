<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SapAssignmentRequestCallbackData extends CustomExtensionData implements Parsable 
{
    /**
     * Instantiates a new SapAssignmentRequestCallbackData and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.sapAssignmentRequestCallbackData');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SapAssignmentRequestCallbackData
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SapAssignmentRequestCallbackData {
        return new SapAssignmentRequestCallbackData();
    }

    /**
     * Gets the detail property value. The detail property
     * @return string|null
    */
    public function getDetail(): ?string {
        $val = $this->getBackingStore()->get('detail');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'detail'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detail' => fn(ParseNode $n) => $o->setDetail($n->getStringValue()),
            'requestNumber' => fn(ParseNode $n) => $o->setRequestNumber($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getStringValue()),
        ]);
    }

    /**
     * Gets the requestNumber property value. The requestNumber property
     * @return string|null
    */
    public function getRequestNumber(): ?string {
        $val = $this->getBackingStore()->get('requestNumber');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestNumber'");
    }

    /**
     * Gets the state property value. The state property
     * @return string|null
    */
    public function getState(): ?string {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || is_string($val)) {
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
        $writer->writeStringValue('detail', $this->getDetail());
        $writer->writeStringValue('requestNumber', $this->getRequestNumber());
        $writer->writeStringValue('state', $this->getState());
    }

    /**
     * Sets the detail property value. The detail property
     * @param string|null $value Value to set for the detail property.
    */
    public function setDetail(?string $value): void {
        $this->getBackingStore()->set('detail', $value);
    }

    /**
     * Sets the requestNumber property value. The requestNumber property
     * @param string|null $value Value to set for the requestNumber property.
    */
    public function setRequestNumber(?string $value): void {
        $this->getBackingStore()->set('requestNumber', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param string|null $value Value to set for the state property.
    */
    public function setState(?string $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
