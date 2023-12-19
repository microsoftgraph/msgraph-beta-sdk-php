<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrivilegedSignupStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new privilegedSignupStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrivilegedSignupStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrivilegedSignupStatus {
        return new PrivilegedSignupStatus();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isRegistered' => fn(ParseNode $n) => $o->setIsRegistered($n->getBooleanValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(PrivilegedSignupStatus_status::class)),
        ]);
    }

    /**
     * Gets the isRegistered property value. The isRegistered property
     * @return bool|null
    */
    public function getIsRegistered(): ?bool {
        $val = $this->getBackingStore()->get('isRegistered');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRegistered'");
    }

    /**
     * Gets the status property value. The status property
     * @return PrivilegedSignupStatus_status|null
    */
    public function getStatus(): ?PrivilegedSignupStatus_status {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof PrivilegedSignupStatus_status) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isRegistered', $this->getIsRegistered());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the isRegistered property value. The isRegistered property
     * @param bool|null $value Value to set for the isRegistered property.
    */
    public function setIsRegistered(?bool $value): void {
        $this->getBackingStore()->set('isRegistered', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param PrivilegedSignupStatus_status|null $value Value to set for the status property.
    */
    public function setStatus(?PrivilegedSignupStatus_status $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
