<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Conversation extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $hasAttachments Indicates whether any of the posts within this Conversation has at least one attachment. Supports $filter (eq, ne) and $search.
    */
    private ?bool $hasAttachments = null;
    
    /**
     * @var DateTime|null $lastDeliveredDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, le, ge).
    */
    private ?DateTime $lastDeliveredDateTime = null;
    
    /**
     * @var string|null $preview A short summary from the body of the latest post in this conversation.
    */
    private ?string $preview = null;
    
    /**
     * @var array<ConversationThread>|null $threads A collection of all the conversation threads in the conversation. A navigation property. Read-only. Nullable.
    */
    private ?array $threads = null;
    
    /**
     * @var string|null $topic The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated.
    */
    private ?string $topic = null;
    
    /**
     * @var array<string>|null $uniqueSenders All the users that sent a message to this Conversation.
    */
    private ?array $uniqueSenders = null;
    
    /**
     * Instantiates a new conversation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Conversation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Conversation {
        return new Conversation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'hasAttachments' => function (ParseNode $n) use ($o) { $o->setHasAttachments($n->getBooleanValue()); },
            'lastDeliveredDateTime' => function (ParseNode $n) use ($o) { $o->setLastDeliveredDateTime($n->getDateTimeValue()); },
            'preview' => function (ParseNode $n) use ($o) { $o->setPreview($n->getStringValue()); },
            'threads' => function (ParseNode $n) use ($o) { $o->setThreads($n->getCollectionOfObjectValues(array(ConversationThread::class, 'createFromDiscriminatorValue'))); },
            'topic' => function (ParseNode $n) use ($o) { $o->setTopic($n->getStringValue()); },
            'uniqueSenders' => function (ParseNode $n) use ($o) { $o->setUniqueSenders($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the hasAttachments property value. Indicates whether any of the posts within this Conversation has at least one attachment. Supports $filter (eq, ne) and $search.
     * @return bool|null
    */
    public function getHasAttachments(): ?bool {
        return $this->hasAttachments;
    }

    /**
     * Gets the lastDeliveredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, le, ge).
     * @return DateTime|null
    */
    public function getLastDeliveredDateTime(): ?DateTime {
        return $this->lastDeliveredDateTime;
    }

    /**
     * Gets the preview property value. A short summary from the body of the latest post in this conversation.
     * @return string|null
    */
    public function getPreview(): ?string {
        return $this->preview;
    }

    /**
     * Gets the threads property value. A collection of all the conversation threads in the conversation. A navigation property. Read-only. Nullable.
     * @return array<ConversationThread>|null
    */
    public function getThreads(): ?array {
        return $this->threads;
    }

    /**
     * Gets the topic property value. The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated.
     * @return string|null
    */
    public function getTopic(): ?string {
        return $this->topic;
    }

    /**
     * Gets the uniqueSenders property value. All the users that sent a message to this Conversation.
     * @return array<string>|null
    */
    public function getUniqueSenders(): ?array {
        return $this->uniqueSenders;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('hasAttachments', $this->hasAttachments);
        $writer->writeDateTimeValue('lastDeliveredDateTime', $this->lastDeliveredDateTime);
        $writer->writeStringValue('preview', $this->preview);
        $writer->writeCollectionOfObjectValues('threads', $this->threads);
        $writer->writeStringValue('topic', $this->topic);
        $writer->writeCollectionOfPrimitiveValues('uniqueSenders', $this->uniqueSenders);
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
     * Sets the hasAttachments property value. Indicates whether any of the posts within this Conversation has at least one attachment. Supports $filter (eq, ne) and $search.
     *  @param bool|null $value Value to set for the hasAttachments property.
    */
    public function setHasAttachments(?bool $value ): void {
        $this->hasAttachments = $value;
    }

    /**
     * Sets the lastDeliveredDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, le, ge).
     *  @param DateTime|null $value Value to set for the lastDeliveredDateTime property.
    */
    public function setLastDeliveredDateTime(?DateTime $value ): void {
        $this->lastDeliveredDateTime = $value;
    }

    /**
     * Sets the preview property value. A short summary from the body of the latest post in this conversation.
     *  @param string|null $value Value to set for the preview property.
    */
    public function setPreview(?string $value ): void {
        $this->preview = $value;
    }

    /**
     * Sets the threads property value. A collection of all the conversation threads in the conversation. A navigation property. Read-only. Nullable.
     *  @param array<ConversationThread>|null $value Value to set for the threads property.
    */
    public function setThreads(?array $value ): void {
        $this->threads = $value;
    }

    /**
     * Sets the topic property value. The topic of the conversation. This property can be set when the conversation is created, but it cannot be updated.
     *  @param string|null $value Value to set for the topic property.
    */
    public function setTopic(?string $value ): void {
        $this->topic = $value;
    }

    /**
     * Sets the uniqueSenders property value. All the users that sent a message to this Conversation.
     *  @param array<string>|null $value Value to set for the uniqueSenders property.
    */
    public function setUniqueSenders(?array $value ): void {
        $this->uniqueSenders = $value;
    }

}
