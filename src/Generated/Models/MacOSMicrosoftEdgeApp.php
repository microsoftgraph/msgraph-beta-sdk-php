<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSMicrosoftEdgeApp extends MobileApp implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var MicrosoftEdgeChannel|null $channel The channel to install on target devices. Possible values are: dev, beta, stable.
    */
    private ?MicrosoftEdgeChannel $channel = null;
    
    /**
     * Instantiates a new MacOSMicrosoftEdgeApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the channel property value. The channel to install on target devices. Possible values are: dev, beta, stable.
     *  @param MicrosoftEdgeChannel|null $value Value to set for the channel property.
    */
    public function setChannel(?MicrosoftEdgeChannel $value ): void {
        $this->channel = $value;
    }

}
