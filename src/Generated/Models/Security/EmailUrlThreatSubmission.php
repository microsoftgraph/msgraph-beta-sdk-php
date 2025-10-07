<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailUrlThreatSubmission extends EmailThreatSubmission implements Parsable 
{
    /**
     * Instantiates a new EmailUrlThreatSubmission and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.emailUrlThreatSubmission');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailUrlThreatSubmission
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EmailUrlThreatSubmission {
        return new EmailUrlThreatSubmission();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'messageUrl' => fn(ParseNode $n) => $o->setMessageUrl($n->getStringValue()),
        ]);
    }

    /**
     * Gets the messageUrl property value. Specifies the url of the message to be submitted.
     * @return string|null
    */
    public function getMessageUrl(): ?string {
        $val = $this->getBackingStore()->get('messageUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'messageUrl'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('messageUrl', $this->getMessageUrl());
    }

    /**
     * Sets the messageUrl property value. Specifies the url of the message to be submitted.
     * @param string|null $value Value to set for the messageUrl property.
    */
    public function setMessageUrl(?string $value): void {
        $this->getBackingStore()->set('messageUrl', $value);
    }

}
