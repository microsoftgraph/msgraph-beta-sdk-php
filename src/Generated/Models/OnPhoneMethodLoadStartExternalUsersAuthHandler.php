<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPhoneMethodLoadStartExternalUsersAuthHandler extends OnPhoneMethodLoadStartHandler implements Parsable 
{
    /**
     * Instantiates a new OnPhoneMethodLoadStartExternalUsersAuthHandler and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.onPhoneMethodLoadStartExternalUsersAuthHandler');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPhoneMethodLoadStartExternalUsersAuthHandler
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPhoneMethodLoadStartExternalUsersAuthHandler {
        return new OnPhoneMethodLoadStartExternalUsersAuthHandler();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'smsOptions' => fn(ParseNode $n) => $o->setSmsOptions($n->getObjectValue([PhoneOptions::class, 'createFromDiscriminatorValue'])),
            'voiceOptions' => fn(ParseNode $n) => $o->setVoiceOptions($n->getObjectValue([PhoneOptions::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the smsOptions property value. The smsOptions property
     * @return PhoneOptions|null
    */
    public function getSmsOptions(): ?PhoneOptions {
        $val = $this->getBackingStore()->get('smsOptions');
        if (is_null($val) || $val instanceof PhoneOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'smsOptions'");
    }

    /**
     * Gets the voiceOptions property value. The voiceOptions property
     * @return PhoneOptions|null
    */
    public function getVoiceOptions(): ?PhoneOptions {
        $val = $this->getBackingStore()->get('voiceOptions');
        if (is_null($val) || $val instanceof PhoneOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'voiceOptions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('smsOptions', $this->getSmsOptions());
        $writer->writeObjectValue('voiceOptions', $this->getVoiceOptions());
    }

    /**
     * Sets the smsOptions property value. The smsOptions property
     * @param PhoneOptions|null $value Value to set for the smsOptions property.
    */
    public function setSmsOptions(?PhoneOptions $value): void {
        $this->getBackingStore()->set('smsOptions', $value);
    }

    /**
     * Sets the voiceOptions property value. The voiceOptions property
     * @param PhoneOptions|null $value Value to set for the voiceOptions property.
    */
    public function setVoiceOptions(?PhoneOptions $value): void {
        $this->getBackingStore()->set('voiceOptions', $value);
    }

}
