<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSMicrosoftEdgeApp extends MobileApp implements Parsable 
{
    /**
     * @var MicrosoftEdgeChannel|null $channel The channel to install on target devices. Possible values are: dev, beta, stable.
    */
    private ?MicrosoftEdgeChannel $channel = null;
    
    /**
     * Instantiates a new MacOSMicrosoftEdgeApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSMicrosoftEdgeApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSMicrosoftEdgeApp {
        return new MacOSMicrosoftEdgeApp();
    }

    /**
     * Gets the channel property value. The channel to install on target devices. Possible values are: dev, beta, stable.
     * @return MicrosoftEdgeChannel|null
    */
    public function getChannel(): ?MicrosoftEdgeChannel {
        return $this->channel;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'channel' => function (ParseNode $n) use ($o) { $o->setChannel($n->getEnumValue(MicrosoftEdgeChannel::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('channel', $this->channel);
    }

    /**
     * Sets the channel property value. The channel to install on target devices. Possible values are: dev, beta, stable.
     *  @param MicrosoftEdgeChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?MicrosoftEdgeChannel $value ): void {
        $this->channel = $value;
    }

}
