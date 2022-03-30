<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Mention extends Entity 
{
    /** @var string|null $application The name of the application where the mention is created. Optional. Not used and defaulted as null for message. */
    private ?string $application = null;
    
    /** @var string|null $clientReference A unique identifier that represents a parent of the resource instance. Optional. Not used and defaulted as null for message. */
    private ?string $clientReference = null;
    
    /** @var EmailAddress|null $createdBy The email information of the user who made the mention. */
    private ?EmailAddress $createdBy = null;
    
    /** @var DateTime|null $createdDateTime The date and time that the mention is created on the client. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $deepLink A deep web link to the context of the mention in the resource instance. Optional. Not used and defaulted as null for message. */
    private ?string $deepLink = null;
    
    /** @var EmailAddress|null $mentioned  */
    private ?EmailAddress $mentioned = null;
    
    /** @var string|null $mentionText Optional. Not used and defaulted as null for message. To get the mentions in a message, see the bodyPreview property of the message instead. */
    private ?string $mentionText = null;
    
    /** @var DateTime|null $serverCreatedDateTime The date and time that the mention is created on the server. Optional. Not used and defaulted as null for message. */
    private ?DateTime $serverCreatedDateTime = null;
    
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): Mention {
        return new Mention();
    }

    /**
     * Gets the application property value. The name of the application where the mention is created. Optional. Not used and defaulted as null for message.
     * @return string|null
    */
    public function getApplication(): ?string {
        return $this->application;
    }

    /**
     * Gets the clientReference property value. A unique identifier that represents a parent of the resource instance. Optional. Not used and defaulted as null for message.
     * @return string|null
    */
    public function getClientReference(): ?string {
        return $this->clientReference;
    }

    /**
     * Gets the createdBy property value. The email information of the user who made the mention.
     * @return EmailAddress|null
    */
    public function getCreatedBy(): ?EmailAddress {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The date and time that the mention is created on the client.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the deepLink property value. A deep web link to the context of the mention in the resource instance. Optional. Not used and defaulted as null for message.
     * @return string|null
    */
    public function getDeepLink(): ?string {
        return $this->deepLink;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'application' => function (self $o, ParseNode $n) { $o->setApplication($n->getStringValue()); },
            'clientReference' => function (self $o, ParseNode $n) { $o->setClientReference($n->getStringValue()); },
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(EmailAddress::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'deepLink' => function (self $o, ParseNode $n) { $o->setDeepLink($n->getStringValue()); },
            'mentioned' => function (self $o, ParseNode $n) { $o->setMentioned($n->getObjectValue(EmailAddress::class)); },
            'mentionText' => function (self $o, ParseNode $n) { $o->setMentionText($n->getStringValue()); },
            'serverCreatedDateTime' => function (self $o, ParseNode $n) { $o->setServerCreatedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the mentioned property value. 
     * @return EmailAddress|null
    */
    public function getMentioned(): ?EmailAddress {
        return $this->mentioned;
    }

    /**
     * Gets the mentionText property value. Optional. Not used and defaulted as null for message. To get the mentions in a message, see the bodyPreview property of the message instead.
     * @return string|null
    */
    public function getMentionText(): ?string {
        return $this->mentionText;
    }

    /**
     * Gets the serverCreatedDateTime property value. The date and time that the mention is created on the server. Optional. Not used and defaulted as null for message.
     * @return DateTime|null
    */
    public function getServerCreatedDateTime(): ?DateTime {
        return $this->serverCreatedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('application', $this->application);
        $writer->writeStringValue('clientReference', $this->clientReference);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('deepLink', $this->deepLink);
        $writer->writeObjectValue('mentioned', $this->mentioned);
        $writer->writeStringValue('mentionText', $this->mentionText);
        $writer->writeDateTimeValue('serverCreatedDateTime', $this->serverCreatedDateTime);
    }

    /**
     * Sets the application property value. The name of the application where the mention is created. Optional. Not used and defaulted as null for message.
     *  @param string|null $value Value to set for the application property.
    */
    public function setApplication(?string $value ): void {
        $this->application = $value;
    }

    /**
     * Sets the clientReference property value. A unique identifier that represents a parent of the resource instance. Optional. Not used and defaulted as null for message.
     *  @param string|null $value Value to set for the clientReference property.
    */
    public function setClientReference(?string $value ): void {
        $this->clientReference = $value;
    }

    /**
     * Sets the createdBy property value. The email information of the user who made the mention.
     *  @param EmailAddress|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?EmailAddress $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time that the mention is created on the client.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the deepLink property value. A deep web link to the context of the mention in the resource instance. Optional. Not used and defaulted as null for message.
     *  @param string|null $value Value to set for the deepLink property.
    */
    public function setDeepLink(?string $value ): void {
        $this->deepLink = $value;
    }

    /**
     * Sets the mentioned property value. 
     *  @param EmailAddress|null $value Value to set for the mentioned property.
    */
    public function setMentioned(?EmailAddress $value ): void {
        $this->mentioned = $value;
    }

    /**
     * Sets the mentionText property value. Optional. Not used and defaulted as null for message. To get the mentions in a message, see the bodyPreview property of the message instead.
     *  @param string|null $value Value to set for the mentionText property.
    */
    public function setMentionText(?string $value ): void {
        $this->mentionText = $value;
    }

    /**
     * Sets the serverCreatedDateTime property value. The date and time that the mention is created on the server. Optional. Not used and defaulted as null for message.
     *  @param DateTime|null $value Value to set for the serverCreatedDateTime property.
    */
    public function setServerCreatedDateTime(?DateTime $value ): void {
        $this->serverCreatedDateTime = $value;
    }

}
