<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Bucket extends PlannerDelta implements Parsable 
{
    /**
     * Instantiates a new Bucket and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Bucket
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Bucket {
        return new Bucket();
    }

    /**
     * Gets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @return BucketCapability|null
    */
    public function getCapabilities(): ?BucketCapability {
        $val = $this->getBackingStore()->get('capabilities');
        if (is_null($val) || $val instanceof BucketCapability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'capabilities'");
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
     * Gets the displayName property value. Title of the bucket.
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
            'capabilities' => fn(ParseNode $n) => $o->setCapabilities($n->getObjectValue([BucketCapability::class, 'createFromDiscriminatorValue'])),
            'creationInfo' => fn(ParseNode $n) => $o->setCreationInfo($n->getObjectValue([CreationInfo::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'extensions' => fn(ParseNode $n) => $o->setExtensions($n->getObjectValue([ExtensionFieldCollection::class, 'createFromDiscriminatorValue'])),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'planId' => fn(ParseNode $n) => $o->setPlanId($n->getStringValue()),
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
     * Gets the planId property value. ID of the plan that contains the bucket. Immutable after creation.
     * @return string|null
    */
    public function getPlanId(): ?string {
        $val = $this->getBackingStore()->get('planId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'planId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('extensions', $this->getExtensions());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('planId', $this->getPlanId());
    }

    /**
     * Sets the capabilities property value. Server-computed, read-only capability flags indicating which optional features are enabled for the entity.
     * @param BucketCapability|null $value Value to set for the capabilities property.
    */
    public function setCapabilities(?BucketCapability $value): void {
        $this->getBackingStore()->set('capabilities', $value);
    }

    /**
     * Sets the creationInfo property value. Read-only creation metadata for the entity.
     * @param CreationInfo|null $value Value to set for the creationInfo property.
    */
    public function setCreationInfo(?CreationInfo $value): void {
        $this->getBackingStore()->set('creationInfo', $value);
    }

    /**
     * Sets the displayName property value. Title of the bucket.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
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
     * Sets the planId property value. ID of the plan that contains the bucket. Immutable after creation.
     * @param string|null $value Value to set for the planId property.
    */
    public function setPlanId(?string $value): void {
        $this->getBackingStore()->set('planId', $value);
    }

}
