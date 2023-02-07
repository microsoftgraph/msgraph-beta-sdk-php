<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Mention extends Entity implements Parsable 
{
    /**
     * Instantiates a new mention and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Mention
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Mention {
        return new Mention();
    }

    /**
     * Gets the application property value. The name of the application where the mention is created. Optional. Not used and defaulted as null for message.
     * @return string|null
    */
    public function getApplication(): ?string {
        return $this->getBackingStore()->get('application');
    }

    /**
     * Gets the clientReference property value. A unique identifier that represents a parent of the resource instance. Optional. Not used and defaulted as null for message.
     * @return string|null
    */
    public function getClientReference(): ?string {
        return $this->getBackingStore()->get('clientReference');
    }

    /**
     * Gets the createdBy property value. The email information of the user who made the mention.
     * @return EmailAddress|null
    */
    public function getCreatedBy(): ?EmailAddress {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The date and time that the mention is created on the client.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the deepLink property value. A deep web link to the context of the mention in the resource instance. Optional. Not used and defaulted as null for message.
     * @return string|null
    */
    public function getDeepLink(): ?string {
        return $this->getBackingStore()->get('deepLink');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'application' => fn(ParseNode $n) => $o->setApplication($n->getStringValue()),
            'clientReference' => fn(ParseNode $n) => $o->setClientReference($n->getStringValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([EmailAddress::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deepLink' => fn(ParseNode $n) => $o->setDeepLink($n->getStringValue()),
            'mentioned' => fn(ParseNode $n) => $o->setMentioned($n->getObjectValue([EmailAddress::class, 'createFromDiscriminatorValue'])),
            'mentionText' => fn(ParseNode $n) => $o->setMentionText($n->getStringValue()),
            'serverCreatedDateTime' => fn(ParseNode $n) => $o->setServerCreatedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the mentioned property value. The mentioned property
     * @return EmailAddress|null
    */
    public function getMentioned(): ?EmailAddress {
        return $this->getBackingStore()->get('mentioned');
    }

    /**
     * Gets the mentionText property value. Optional. Not used and defaulted as null for message. To get the mentions in a message, see the bodyPreview property of the message instead.
     * @return string|null
    */
    public function getMentionText(): ?string {
        return $this->getBackingStore()->get('mentionText');
    }

    /**
     * Gets the serverCreatedDateTime property value. The date and time that the mention is created on the server. Optional. Not used and defaulted as null for message.
     * @return DateTime|null
    */
    public function getServerCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('serverCreatedDateTime');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('application', $this->getApplication());
        $writer->writeStringValue('clientReference', $this->getClientReference());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('deepLink', $this->getDeepLink());
        $writer->writeObjectValue('mentioned', $this->getMentioned());
        $writer->writeStringValue('mentionText', $this->getMentionText());
        $writer->writeDateTimeValue('serverCreatedDateTime', $this->getServerCreatedDateTime());
    }

    /**
     * Sets the application property value. The name of the application where the mention is created. Optional. Not used and defaulted as null for message.
     * @param string|null $value Value to set for the application property.
    */
    public function setApplication(?string $value): void {
        $this->getBackingStore()->set('application', $value);
    }

    /**
     * Sets the clientReference property value. A unique identifier that represents a parent of the resource instance. Optional. Not used and defaulted as null for message.
     * @param string|null $value Value to set for the clientReference property.
    */
    public function setClientReference(?string $value): void {
        $this->getBackingStore()->set('clientReference', $value);
    }

    /**
     * Sets the createdBy property value. The email information of the user who made the mention.
     * @param EmailAddress|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailAddress $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time that the mention is created on the client.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deepLink property value. A deep web link to the context of the mention in the resource instance. Optional. Not used and defaulted as null for message.
     * @param string|null $value Value to set for the deepLink property.
    */
    public function setDeepLink(?string $value): void {
        $this->getBackingStore()->set('deepLink', $value);
    }

    /**
     * Sets the mentioned property value. The mentioned property
     * @param EmailAddress|null $value Value to set for the mentioned property.
    */
    public function setMentioned(?EmailAddress $value): void {
        $this->getBackingStore()->set('mentioned', $value);
    }

    /**
     * Sets the mentionText property value. Optional. Not used and defaulted as null for message. To get the mentions in a message, see the bodyPreview property of the message instead.
     * @param string|null $value Value to set for the mentionText property.
    */
    public function setMentionText(?string $value): void {
        $this->getBackingStore()->set('mentionText', $value);
    }

    /**
     * Sets the serverCreatedDateTime property value. The date and time that the mention is created on the server. Optional. Not used and defaulted as null for message.
     * @param DateTime|null $value Value to set for the serverCreatedDateTime property.
    */
    public function setServerCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('serverCreatedDateTime', $value);
    }

}
