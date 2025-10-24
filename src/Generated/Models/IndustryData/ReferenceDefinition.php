<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\IndustryData;

use DateTime;
use Microsoft\\Graph\\Beta\\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ReferenceDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new ReferenceDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ReferenceDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ReferenceDefinition {
        return new ReferenceDefinition();
    }

    /**
     * Gets the code property value. The code value for the definition that must be unique within the referenceType.
     * @return string|null
    */
    public function getCode(): ?string {
        $val = $this->getBackingStore()->get('code');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'code'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the definition was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the displayName property value. A human-readable representation of the reference code value for display in a user interface.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'code' => fn(ParseNode $n) => $o->setCode($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'isDisabled' => fn(ParseNode $n) => $o->setIsDisabled($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'referenceType' => fn(ParseNode $n) => $o->setReferenceType($n->getStringValue()),
            'sortIndex' => fn(ParseNode $n) => $o->setSortIndex($n->getIntegerValue()),
            'source' => fn(ParseNode $n) => $o->setSource($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isDisabled property value. Indicates whether the definition is disabled.
     * @return bool|null
    */
    public function getIsDisabled(): ?bool {
        $val = $this->getBackingStore()->get('isDisabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDisabled'");
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time when the definition was most recently changed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
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
     * Gets the referenceType property value. The categorical type for a collection of enumerated values.
     * @return string|null
    */
    public function getReferenceType(): ?string {
        $val = $this->getBackingStore()->get('referenceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referenceType'");
    }

    /**
     * Gets the sortIndex property value. The index that specifies the order in which to present the definition to the user. Must be unique within the referenceType.
     * @return int|null
    */
    public function getSortIndex(): ?int {
        $val = $this->getBackingStore()->get('sortIndex');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sortIndex'");
    }

    /**
     * Gets the source property value. The standards body or organization source which defined the code.
     * @return string|null
    */
    public function getSource(): ?string {
        $val = $this->getBackingStore()->get('source');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'source'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('code', $this->getCode());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeBooleanValue('isDisabled', $this->getIsDisabled());
        $writer->writeStringValue('referenceType', $this->getReferenceType());
        $writer->writeIntegerValue('sortIndex', $this->getSortIndex());
    }

    /**
     * Sets the code property value. The code value for the definition that must be unique within the referenceType.
     * @param string|null $value Value to set for the code property.
    */
    public function setCode(?string $value): void {
        $this->getBackingStore()->set('code', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the definition was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. A human-readable representation of the reference code value for display in a user interface.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the isDisabled property value. Indicates whether the definition is disabled.
     * @param bool|null $value Value to set for the isDisabled property.
    */
    public function setIsDisabled(?bool $value): void {
        $this->getBackingStore()->set('isDisabled', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time when the definition was most recently changed. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the referenceType property value. The categorical type for a collection of enumerated values.
     * @param string|null $value Value to set for the referenceType property.
    */
    public function setReferenceType(?string $value): void {
        $this->getBackingStore()->set('referenceType', $value);
    }

    /**
     * Sets the sortIndex property value. The index that specifies the order in which to present the definition to the user. Must be unique within the referenceType.
     * @param int|null $value Value to set for the sortIndex property.
    */
    public function setSortIndex(?int $value): void {
        $this->getBackingStore()->set('sortIndex', $value);
    }

    /**
     * Sets the source property value. The standards body or organization source which defined the code.
     * @param string|null $value Value to set for the source property.
    */
    public function setSource(?string $value): void {
        $this->getBackingStore()->set('source', $value);
    }

}
