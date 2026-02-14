<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Ring extends Entity implements Parsable 
{
    /**
     * Instantiates a new Ring and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Ring
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Ring {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsUpdates.qualityUpdateRing': return new QualityUpdateRing();
            }
        }
        return new Ring();
    }

    /**
     * Gets the createdDateTime property value. The date and time when the ring is created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only
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
     * Gets the deferralInDays property value. The quality update deferral period in days. The value must be between 0 and 30. Optional.
     * @return int|null
    */
    public function getDeferralInDays(): ?int {
        $val = $this->getBackingStore()->get('deferralInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deferralInDays'");
    }

    /**
     * Gets the description property value. The ring description. The maximum length is 1,500 characters. Required
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The ring display name. The maximum length is 200 characters. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the excludedGroupAssignment property value. The excludedGroupAssignment property
     * @return ExcludedGroupAssignment|null
    */
    public function getExcludedGroupAssignment(): ?ExcludedGroupAssignment {
        $val = $this->getBackingStore()->get('excludedGroupAssignment');
        if (is_null($val) || $val instanceof ExcludedGroupAssignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludedGroupAssignment'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'deferralInDays' => fn(ParseNode $n) => $o->setDeferralInDays($n->getIntegerValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'excludedGroupAssignment' => fn(ParseNode $n) => $o->setExcludedGroupAssignment($n->getObjectValue([ExcludedGroupAssignment::class, 'createFromDiscriminatorValue'])),
            'includedGroupAssignment' => fn(ParseNode $n) => $o->setIncludedGroupAssignment($n->getObjectValue([IncludedGroupAssignment::class, 'createFromDiscriminatorValue'])),
            'isPaused' => fn(ParseNode $n) => $o->setIsPaused($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the includedGroupAssignment property value. The includedGroupAssignment property
     * @return IncludedGroupAssignment|null
    */
    public function getIncludedGroupAssignment(): ?IncludedGroupAssignment {
        $val = $this->getBackingStore()->get('includedGroupAssignment');
        if (is_null($val) || $val instanceof IncludedGroupAssignment) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'includedGroupAssignment'");
    }

    /**
     * Gets the isPaused property value. The pause action for the quality update ring policy. Required.
     * @return bool|null
    */
    public function getIsPaused(): ?bool {
        $val = $this->getBackingStore()->get('isPaused');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isPaused'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time whenthe ring was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeIntegerValue('deferralInDays', $this->getDeferralInDays());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('excludedGroupAssignment', $this->getExcludedGroupAssignment());
        $writer->writeObjectValue('includedGroupAssignment', $this->getIncludedGroupAssignment());
        $writer->writeBooleanValue('isPaused', $this->getIsPaused());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
    }

    /**
     * Sets the createdDateTime property value. The date and time when the ring is created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the deferralInDays property value. The quality update deferral period in days. The value must be between 0 and 30. Optional.
     * @param int|null $value Value to set for the deferralInDays property.
    */
    public function setDeferralInDays(?int $value): void {
        $this->getBackingStore()->set('deferralInDays', $value);
    }

    /**
     * Sets the description property value. The ring description. The maximum length is 1,500 characters. Required
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The ring display name. The maximum length is 200 characters. Required.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the excludedGroupAssignment property value. The excludedGroupAssignment property
     * @param ExcludedGroupAssignment|null $value Value to set for the excludedGroupAssignment property.
    */
    public function setExcludedGroupAssignment(?ExcludedGroupAssignment $value): void {
        $this->getBackingStore()->set('excludedGroupAssignment', $value);
    }

    /**
     * Sets the includedGroupAssignment property value. The includedGroupAssignment property
     * @param IncludedGroupAssignment|null $value Value to set for the includedGroupAssignment property.
    */
    public function setIncludedGroupAssignment(?IncludedGroupAssignment $value): void {
        $this->getBackingStore()->set('includedGroupAssignment', $value);
    }

    /**
     * Sets the isPaused property value. The pause action for the quality update ring policy. Required.
     * @param bool|null $value Value to set for the isPaused property.
    */
    public function setIsPaused(?bool $value): void {
        $this->getBackingStore()->set('isPaused', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time whenthe ring was last modified. The timestamp type represents date and time information using ISO 8601 format and is always in UTC. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

}
