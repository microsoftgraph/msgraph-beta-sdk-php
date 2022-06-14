<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppleVppTokenTroubleshootingEvent extends DeviceManagementTroubleshootingEvent implements Parsable 
{
    /**
     * @var string|null $tokenId Apple Volume Purchase Program Token Identifier.
    */
    private ?string $tokenId = null;
    
    /**
     * Instantiates a new AppleVppTokenTroubleshootingEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppleVppTokenTroubleshootingEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppleVppTokenTroubleshootingEvent {
        return new AppleVppTokenTroubleshootingEvent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'tokenId' => function (ParseNode $n) use ($o) { $o->setTokenId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the tokenId property value. Apple Volume Purchase Program Token Identifier.
     * @return string|null
    */
    public function getTokenId(): ?string {
        return $this->tokenId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('tokenId', $this->tokenId);
    }

    /**
     * Sets the tokenId property value. Apple Volume Purchase Program Token Identifier.
     *  @param string|null $value Value to set for the tokenId property.
    */
    public function setTokenId(?string $value ): void {
        $this->tokenId = $value;
    }

}
