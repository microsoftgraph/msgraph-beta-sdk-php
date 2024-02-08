<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VerifiableCredentialRequired extends VerifiableCredentialRequirementStatus implements Parsable 
{
    /**
     * Instantiates a new VerifiableCredentialRequired and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.verifiableCredentialRequired');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VerifiableCredentialRequired
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VerifiableCredentialRequired {
        return new VerifiableCredentialRequired();
    }

    /**
     * Gets the expiryDateTime property value. When the presentation request will expire and a new one will need to be generated.
     * @return DateTime|null
    */
    public function getExpiryDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expiryDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expiryDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'expiryDateTime' => fn(ParseNode $n) => $o->setExpiryDateTime($n->getDateTimeValue()),
            'url' => fn(ParseNode $n) => $o->setUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the url property value. A URL that launches the digital wallet and starts the presentation process. You can present this URL to the user if they can't scan the QR code.
     * @return string|null
    */
    public function getUrl(): ?string {
        $val = $this->getBackingStore()->get('url');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'url'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('expiryDateTime', $this->getExpiryDateTime());
        $writer->writeStringValue('url', $this->getUrl());
    }

    /**
     * Sets the expiryDateTime property value. When the presentation request will expire and a new one will need to be generated.
     * @param DateTime|null $value Value to set for the expiryDateTime property.
    */
    public function setExpiryDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expiryDateTime', $value);
    }

    /**
     * Sets the url property value. A URL that launches the digital wallet and starts the presentation process. You can present this URL to the user if they can't scan the QR code.
     * @param string|null $value Value to set for the url property.
    */
    public function setUrl(?string $value): void {
        $this->getBackingStore()->set('url', $value);
    }

}
