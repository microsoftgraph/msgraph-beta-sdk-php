<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageSuggestionSelfAssignmentHistoryBased extends AccessPackageSuggestionReason implements Parsable 
{
    /**
     * Instantiates a new AccessPackageSuggestionSelfAssignmentHistoryBased and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.accessPackageSuggestionSelfAssignmentHistoryBased');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageSuggestionSelfAssignmentHistoryBased
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageSuggestionSelfAssignmentHistoryBased {
        return new AccessPackageSuggestionSelfAssignmentHistoryBased();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'lastAssignmentDateTime' => fn(ParseNode $n) => $o->setLastAssignmentDateTime($n->getDateTimeValue()),
            'pastAssigmentCount' => fn(ParseNode $n) => $o->setPastAssigmentCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastAssignmentDateTime property value. The date and time when the user was last assigned to this access package. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getLastAssignmentDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastAssignmentDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastAssignmentDateTime'");
    }

    /**
     * Gets the pastAssigmentCount property value. The pastAssigmentCount property
     * @return int|null
    */
    public function getPastAssigmentCount(): ?int {
        $val = $this->getBackingStore()->get('pastAssigmentCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pastAssigmentCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastAssignmentDateTime', $this->getLastAssignmentDateTime());
        $writer->writeIntegerValue('pastAssigmentCount', $this->getPastAssigmentCount());
    }

    /**
     * Sets the lastAssignmentDateTime property value. The date and time when the user was last assigned to this access package. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the lastAssignmentDateTime property.
    */
    public function setLastAssignmentDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastAssignmentDateTime', $value);
    }

    /**
     * Sets the pastAssigmentCount property value. The pastAssigmentCount property
     * @param int|null $value Value to set for the pastAssigmentCount property.
    */
    public function setPastAssigmentCount(?int $value): void {
        $this->getBackingStore()->set('pastAssigmentCount', $value);
    }

}
