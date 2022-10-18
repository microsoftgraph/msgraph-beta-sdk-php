<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnTokenIssuanceStartListener extends AuthenticationEventListener implements Parsable 
{
    /**
     * @var OnTokenIssuanceStartHandler|null $handler The handler property
    */
    private ?OnTokenIssuanceStartHandler $handler = null;
    
    /**
     * Instantiates a new OnTokenIssuanceStartListener and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onTokenIssuanceStartListener');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnTokenIssuanceStartListener
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnTokenIssuanceStartListener {
        return new OnTokenIssuanceStartListener();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'handler' => fn(ParseNode $n) => $o->setHandler($n->getObjectValue([OnTokenIssuanceStartHandler::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the handler property value. The handler property
     * @return OnTokenIssuanceStartHandler|null
    */
    public function getHandler(): ?OnTokenIssuanceStartHandler {
        return $this->handler;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('handler', $this->handler);
    }

    /**
     * Sets the handler property value. The handler property
     *  @param OnTokenIssuanceStartHandler|null $value Value to set for the handler property.
    */
    public function setHandler(?OnTokenIssuanceStartHandler $value ): void {
        $this->handler = $value;
    }

}
