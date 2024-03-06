<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InvokeUserFlowListener extends AuthenticationListener implements Parsable 
{
    /**
     * Instantiates a new InvokeUserFlowListener and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.invokeUserFlowListener');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvokeUserFlowListener
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvokeUserFlowListener {
        return new InvokeUserFlowListener();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'userFlow' => fn(ParseNode $n) => $o->setUserFlow($n->getObjectValue([B2xIdentityUserFlow::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the userFlow property value. The user flow that is invoked when this action executes.
     * @return B2xIdentityUserFlow|null
    */
    public function getUserFlow(): ?B2xIdentityUserFlow {
        $val = $this->getBackingStore()->get('userFlow');
        if (is_null($val) || $val instanceof B2xIdentityUserFlow) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userFlow'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('userFlow', $this->getUserFlow());
    }

    /**
     * Sets the userFlow property value. The user flow that is invoked when this action executes.
     * @param B2xIdentityUserFlow|null $value Value to set for the userFlow property.
    */
    public function setUserFlow(?B2xIdentityUserFlow $value): void {
        $this->getBackingStore()->set('userFlow', $value);
    }

}
