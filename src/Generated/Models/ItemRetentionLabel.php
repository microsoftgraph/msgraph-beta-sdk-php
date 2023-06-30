<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ItemRetentionLabel extends Entity implements Parsable 
{
    /**
     * Instantiates a new itemRetentionLabel and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ItemRetentionLabel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ItemRetentionLabel {
        return new ItemRetentionLabel();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isLabelAppliedExplicitly' => fn(ParseNode $n) => $o->setIsLabelAppliedExplicitly($n->getBooleanValue()),
            'labelAppliedBy' => fn(ParseNode $n) => $o->setLabelAppliedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'labelAppliedDateTime' => fn(ParseNode $n) => $o->setLabelAppliedDateTime($n->getDateTimeValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'retentionSettings' => fn(ParseNode $n) => $o->setRetentionSettings($n->getObjectValue([RetentionLabelSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the isLabelAppliedExplicitly property value. The isLabelAppliedExplicitly property
     * @return bool|null
    */
    public function getIsLabelAppliedExplicitly(): ?bool {
        $val = $this->getBackingStore()->get('isLabelAppliedExplicitly');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isLabelAppliedExplicitly'");
    }

    /**
     * Gets the labelAppliedBy property value. The labelAppliedBy property
     * @return IdentitySet|null
    */
    public function getLabelAppliedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('labelAppliedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'labelAppliedBy'");
    }

    /**
     * Gets the labelAppliedDateTime property value. The labelAppliedDateTime property
     * @return DateTime|null
    */
    public function getLabelAppliedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('labelAppliedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'labelAppliedDateTime'");
    }

    /**
     * Gets the name property value. The name property
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the retentionSettings property value. The retentionSettings property
     * @return RetentionLabelSettings|null
    */
    public function getRetentionSettings(): ?RetentionLabelSettings {
        $val = $this->getBackingStore()->get('retentionSettings');
        if (is_null($val) || $val instanceof RetentionLabelSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'retentionSettings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isLabelAppliedExplicitly', $this->getIsLabelAppliedExplicitly());
        $writer->writeObjectValue('labelAppliedBy', $this->getLabelAppliedBy());
        $writer->writeDateTimeValue('labelAppliedDateTime', $this->getLabelAppliedDateTime());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('retentionSettings', $this->getRetentionSettings());
    }

    /**
     * Sets the isLabelAppliedExplicitly property value. The isLabelAppliedExplicitly property
     * @param bool|null $value Value to set for the isLabelAppliedExplicitly property.
    */
    public function setIsLabelAppliedExplicitly(?bool $value): void {
        $this->getBackingStore()->set('isLabelAppliedExplicitly', $value);
    }

    /**
     * Sets the labelAppliedBy property value. The labelAppliedBy property
     * @param IdentitySet|null $value Value to set for the labelAppliedBy property.
    */
    public function setLabelAppliedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('labelAppliedBy', $value);
    }

    /**
     * Sets the labelAppliedDateTime property value. The labelAppliedDateTime property
     * @param DateTime|null $value Value to set for the labelAppliedDateTime property.
    */
    public function setLabelAppliedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('labelAppliedDateTime', $value);
    }

    /**
     * Sets the name property value. The name property
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the retentionSettings property value. The retentionSettings property
     * @param RetentionLabelSettings|null $value Value to set for the retentionSettings property.
    */
    public function setRetentionSettings(?RetentionLabelSettings $value): void {
        $this->getBackingStore()->set('retentionSettings', $value);
    }

}
