<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Dependency extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new Dependency and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Dependency
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Dependency {
        return new Dependency();
    }

    /**
     * Gets the archivalInfo property value. Information about whether the entity is archived, and when it was archived.
     * @return PlannerArchivalInfo|null
    */
    public function getArchivalInfo(): ?PlannerArchivalInfo {
        $val = $this->getBackingStore()->get('archivalInfo');
        if (is_null($val) || $val instanceof PlannerArchivalInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'archivalInfo'");
    }

    /**
     * Gets the constraint property value. The constraint property
     * @return DependencyType|null
    */
    public function getConstraint(): ?DependencyType {
        $val = $this->getBackingStore()->get('constraint');
        if (is_null($val) || $val instanceof DependencyType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'constraint'");
    }

    /**
     * Gets the creationInfo property value. Read-only creation metadata for the entity.
     * @return CreationInfo|null
    */
    public function getCreationInfo(): ?CreationInfo {
        $val = $this->getBackingStore()->get('creationInfo');
        if (is_null($val) || $val instanceof CreationInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'creationInfo'");
    }

    /**
     * Gets the extensions property value. Custom extension field values set on the entity. Supports $select.
     * @return ExtensionFieldCollection|null
    */
    public function getExtensions(): ?ExtensionFieldCollection {
        $val = $this->getBackingStore()->get('extensions');
        if (is_null($val) || $val instanceof ExtensionFieldCollection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'extensions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'archivalInfo' => fn(ParseNode $n) => $o->setArchivalInfo($n->getObjectValue([PlannerArchivalInfo::class, 'createFromDiscriminatorValue'])),
            'constraint' => fn(ParseNode $n) => $o->setConstraint($n->getEnumValue(DependencyType::class)),
            'creationInfo' => fn(ParseNode $n) => $o->setCreationInfo($n->getObjectValue([CreationInfo::class, 'createFromDiscriminatorValue'])),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getObjectValue([ExtensionFieldCollection::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'sourceItemId' => fn(ParseNode $n) => $o->setSourceItemId($n->getStringValue()),
            'targetItemId' => fn(ParseNode $n) => $o->setTargetItemId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. Identity of the user (or application) who last modified the entity. Read-only.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('lastModifiedBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedBy'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Date and time the entity was last modified. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
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
     * Gets the sourceItemId property value. ID of the source item in the dependency.
     * @return string|null
    */
    public function getSourceItemId(): ?string {
        $val = $this->getBackingStore()->get('sourceItemId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceItemId'");
    }

    /**
     * Gets the targetItemId property value. ID of the target item in the dependency.
     * @return string|null
    */
    public function getTargetItemId(): ?string {
        $val = $this->getBackingStore()->get('targetItemId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetItemId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('archivalInfo', $this->getArchivalInfo());
        $writer->writeEnumValue('constraint', $this->getConstraint());
        $writer->writeObjectValue('extensions', $this->getExtensions());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('sourceItemId', $this->getSourceItemId());
        $writer->writeStringValue('targetItemId', $this->getTargetItemId());
    }

    /**
     * Sets the archivalInfo property value. Information about whether the entity is archived, and when it was archived.
     * @param PlannerArchivalInfo|null $value Value to set for the archivalInfo property.
    */
    public function setArchivalInfo(?PlannerArchivalInfo $value): void {
        $this->getBackingStore()->set('archivalInfo', $value);
    }

    /**
     * Sets the constraint property value. The constraint property
     * @param DependencyType|null $value Value to set for the constraint property.
    */
    public function setConstraint(?DependencyType $value): void {
        $this->getBackingStore()->set('constraint', $value);
    }

    /**
     * Sets the creationInfo property value. Read-only creation metadata for the entity.
     * @param CreationInfo|null $value Value to set for the creationInfo property.
    */
    public function setCreationInfo(?CreationInfo $value): void {
        $this->getBackingStore()->set('creationInfo', $value);
    }

    /**
     * Sets the extensions property value. Custom extension field values set on the entity. Supports $select.
     * @param ExtensionFieldCollection|null $value Value to set for the extensions property.
    */
    public function setExtensions(?ExtensionFieldCollection $value): void {
        $this->getBackingStore()->set('extensions', $value);
    }

    /**
     * Sets the lastModifiedBy property value. Identity of the user (or application) who last modified the entity. Read-only.
     * @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Date and time the entity was last modified. The value is represented in ISO 8601 format and is always in UTC time. Read-only.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the sourceItemId property value. ID of the source item in the dependency.
     * @param string|null $value Value to set for the sourceItemId property.
    */
    public function setSourceItemId(?string $value): void {
        $this->getBackingStore()->set('sourceItemId', $value);
    }

    /**
     * Sets the targetItemId property value. ID of the target item in the dependency.
     * @param string|null $value Value to set for the targetItemId property.
    */
    public function setTargetItemId(?string $value): void {
        $this->getBackingStore()->set('targetItemId', $value);
    }

}
