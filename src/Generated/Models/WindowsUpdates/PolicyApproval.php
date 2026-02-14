<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PolicyApproval extends Entity implements Parsable 
{
    /**
     * Instantiates a new PolicyApproval and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyApproval
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyApproval {
        return new PolicyApproval();
    }

    /**
     * Gets the catalogEntry property value. The content that you can approve for deployment. Read-only.
     * @return CatalogEntry|null
    */
    public function getCatalogEntry(): ?CatalogEntry {
        $val = $this->getBackingStore()->get('catalogEntry');
        if (is_null($val) || $val instanceof CatalogEntry) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogEntry'");
    }

    /**
     * Gets the catalogEntryId property value. The catalog entry ID to approve.
     * @return string|null
    */
    public function getCatalogEntryId(): ?string {
        $val = $this->getBackingStore()->get('catalogEntryId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogEntryId'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the policy approval is created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'catalogEntry' => fn(ParseNode $n) => $o->setCatalogEntry($n->getObjectValue([CatalogEntry::class, 'createFromDiscriminatorValue'])),
            'catalogEntryId' => fn(ParseNode $n) => $o->setCatalogEntryId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(ApprovalStatus::class)),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the policy approval was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the status property value. The status property
     * @return ApprovalStatus|null
    */
    public function getStatus(): ?ApprovalStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof ApprovalStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('catalogEntry', $this->getCatalogEntry());
        $writer->writeStringValue('catalogEntryId', $this->getCatalogEntryId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the catalogEntry property value. The content that you can approve for deployment. Read-only.
     * @param CatalogEntry|null $value Value to set for the catalogEntry property.
    */
    public function setCatalogEntry(?CatalogEntry $value): void {
        $this->getBackingStore()->set('catalogEntry', $value);
    }

    /**
     * Sets the catalogEntryId property value. The catalog entry ID to approve.
     * @param string|null $value Value to set for the catalogEntryId property.
    */
    public function setCatalogEntryId(?string $value): void {
        $this->getBackingStore()->set('catalogEntryId', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the policy approval is created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the policy approval was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param ApprovalStatus|null $value Value to set for the status property.
    */
    public function setStatus(?ApprovalStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
