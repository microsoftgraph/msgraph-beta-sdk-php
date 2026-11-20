<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPasswordUpdateListener extends AuthenticationEventListener implements Parsable 
{
    /**
     * Instantiates a new OnPasswordUpdateListener and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onPasswordUpdateListener');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPasswordUpdateListener
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPasswordUpdateListener {
        return new OnPasswordUpdateListener();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'handler' => fn(ParseNode $n) => $o->setHandler($n->getObjectValue([OnPasswordUpdateHandler::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the handler property value. Configuration for the handler to invoke when this listener is triggered. This is typically an onPasswordUpdateCustomExtensionHandler.
     * @return OnPasswordUpdateHandler|null
    */
    public function getHandler(): ?OnPasswordUpdateHandler {
        $val = $this->getBackingStore()->get('handler');
        if (is_null($val) || $val instanceof OnPasswordUpdateHandler) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'handler'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('handler', $this->getHandler());
    }

    /**
     * Sets the handler property value. Configuration for the handler to invoke when this listener is triggered. This is typically an onPasswordUpdateCustomExtensionHandler.
     * @param OnPasswordUpdateHandler|null $value Value to set for the handler property.
    */
    public function setHandler(?OnPasswordUpdateHandler $value): void {
        $this->getBackingStore()->set('handler', $value);
    }

}
