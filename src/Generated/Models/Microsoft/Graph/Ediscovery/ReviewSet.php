<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Ediscovery;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReviewSet extends Entity 
{
    /** @var IdentitySet|null $createdBy The user who created the review set. Read-only. */
    private ?IdentitySet $createdBy = null;
    
    /** @var DateTime|null $createdDateTime The datetime when the review set was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only. */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $displayName The review set name. The name is unique with a maximum limit of 64 characters. */
    private ?string $displayName = null;
    
    /** @var array<ReviewSetQuery>|null $queries Read-only. Nullable. */
    private ?array $queries = null;
    
    /**
     * Instantiates a new reviewSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReviewSet
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ReviewSet {
        return new ReviewSet();
    }

    /**
     * Gets the createdBy property value. The user who created the review set. Read-only.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The datetime when the review set was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the displayName property value. The review set name. The name is unique with a maximum limit of 64 characters.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'createdBy' => function (self $o, ParseNode $n) { $o->setCreatedBy($n->getObjectValue(IdentitySet::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'queries' => function (self $o, ParseNode $n) { $o->setQueries($n->getCollectionOfObjectValues(ReviewSetQuery::class)); },
        ]);
    }

    /**
     * Gets the queries property value. Read-only. Nullable.
     * @return array<ReviewSetQuery>|null
    */
    public function getQueries(): ?array {
        return $this->queries;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('queries', $this->queries);
    }

    /**
     * Sets the createdBy property value. The user who created the review set. Read-only.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The datetime when the review set was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the displayName property value. The review set name. The name is unique with a maximum limit of 64 characters.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the queries property value. Read-only. Nullable.
     *  @param array<ReviewSetQuery>|null $value Value to set for the queries property.
    */
    public function setQueries(?array $value ): void {
        $this->queries = $value;
    }

}
