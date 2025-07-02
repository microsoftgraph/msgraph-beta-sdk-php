<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExchangeSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new ExchangeSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExchangeSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ExchangeSettings {
        return new ExchangeSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'inPlaceArchiveMailboxId' => fn(ParseNode $n) => $o->setInPlaceArchiveMailboxId($n->getStringValue()),
            'primaryMailboxId' => fn(ParseNode $n) => $o->setPrimaryMailboxId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the inPlaceArchiveMailboxId property value. The inPlaceArchiveMailboxId property
     * @return string|null
    */
    public function getInPlaceArchiveMailboxId(): ?string {
        $val = $this->getBackingStore()->get('inPlaceArchiveMailboxId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inPlaceArchiveMailboxId'");
    }

    /**
     * Gets the primaryMailboxId property value. The unique identifier for the user's primary mailbox.
     * @return string|null
    */
    public function getPrimaryMailboxId(): ?string {
        $val = $this->getBackingStore()->get('primaryMailboxId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryMailboxId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('inPlaceArchiveMailboxId', $this->getInPlaceArchiveMailboxId());
        $writer->writeStringValue('primaryMailboxId', $this->getPrimaryMailboxId());
    }

    /**
     * Sets the inPlaceArchiveMailboxId property value. The inPlaceArchiveMailboxId property
     * @param string|null $value Value to set for the inPlaceArchiveMailboxId property.
    */
    public function setInPlaceArchiveMailboxId(?string $value): void {
        $this->getBackingStore()->set('inPlaceArchiveMailboxId', $value);
    }

    /**
     * Sets the primaryMailboxId property value. The unique identifier for the user's primary mailbox.
     * @param string|null $value Value to set for the primaryMailboxId property.
    */
    public function setPrimaryMailboxId(?string $value): void {
        $this->getBackingStore()->set('primaryMailboxId', $value);
    }

}
