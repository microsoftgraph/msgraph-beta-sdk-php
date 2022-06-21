<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthoredNote extends Entity implements Parsable 
{
    /**
     * @var Identity|null $author Identity information about the note's author.
    */
    private ?Identity $author = null;
    
    /**
     * @var ItemBody|null $content The content of the note.
    */
    private ?ItemBody $content = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * Instantiates a new authoredNote and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthoredNote
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthoredNote {
        return new AuthoredNote();
    }

    /**
     * Gets the author property value. Identity information about the note's author.
     * @return Identity|null
    */
    public function getAuthor(): ?Identity {
        return $this->author;
    }

    /**
     * Gets the content property value. The content of the note.
     * @return ItemBody|null
    */
    public function getContent(): ?ItemBody {
        return $this->content;
    }

    /**
     * Gets the createdDateTime property value. The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'author' => function (ParseNode $n) use ($o) { $o->setAuthor($n->getObjectValue(array(Identity::class, 'createFromDiscriminatorValue'))); },
            'content' => function (ParseNode $n) use ($o) { $o->setContent($n->getObjectValue(array(ItemBody::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('author', $this->author);
        $writer->writeObjectValue('content', $this->content);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
    }

    /**
     * Sets the author property value. Identity information about the note's author.
     *  @param Identity|null $value Value to set for the author property.
    */
    public function setAuthor(?Identity $value ): void {
        $this->author = $value;
    }

    /**
     * Sets the content property value. The content of the note.
     *  @param ItemBody|null $value Value to set for the content property.
    */
    public function setContent(?ItemBody $value ): void {
        $this->content = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time when the entity was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

}
