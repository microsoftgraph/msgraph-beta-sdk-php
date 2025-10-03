<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Event representing an Apple Vpp Token Troubleshooting Event.
*/
class AppleVppTokenTroubleshootingEvent extends DeviceManagementTroubleshootingEvent implements Parsable 
{
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'tokenId' => fn(ParseNode $n) => $o->setTokenId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the tokenId property value. Apple Volume Purchase Program Token Identifier.
     * @return string|null
    */
    public function getTokenId(): ?string {
        $val = $this->getBackingStore()->get('tokenId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tokenId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('tokenId', $this->getTokenId());
    }

    /**
     * Sets the tokenId property value. Apple Volume Purchase Program Token Identifier.
     * @param string|null $value Value to set for the tokenId property.
    */
    public function setTokenId(?string $value): void {
        $this->getBackingStore()->set('tokenId', $value);
    }

}
