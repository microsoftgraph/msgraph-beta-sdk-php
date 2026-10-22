<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessDriftSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessDriftSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessDriftSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessDriftSummary {
        return new AccessDriftSummary();
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
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
     * Gets the details property value. The details property
     * @return array<AccessDriftDetail>|null
    */
    public function getDetails(): ?array {
        $val = $this->getBackingStore()->get('details');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessDriftDetail::class);
            /** @var array<AccessDriftDetail>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * Gets the driftCounts property value. The driftCounts property
     * @return DriftCounts|null
    */
    public function getDriftCounts(): ?DriftCounts {
        $val = $this->getBackingStore()->get('driftCounts');
        if (is_null($val) || $val instanceof DriftCounts) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driftCounts'");
    }

    /**
     * Gets the driftSource property value. The driftSource property
     * @return AccessDriftSource|null
    */
    public function getDriftSource(): ?AccessDriftSource {
        $val = $this->getBackingStore()->get('driftSource');
        if (is_null($val) || $val instanceof AccessDriftSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driftSource'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getCollectionOfObjectValues([AccessDriftDetail::class, 'createFromDiscriminatorValue'])),
            'driftCounts' => fn(ParseNode $n) => $o->setDriftCounts($n->getObjectValue([DriftCounts::class, 'createFromDiscriminatorValue'])),
            'driftSource' => fn(ParseNode $n) => $o->setDriftSource($n->getEnumValue(AccessDriftSource::class)),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([DriftResourceInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the resource property value. The resource property
     * @return DriftResourceInfo|null
    */
    public function getResource(): ?DriftResourceInfo {
        $val = $this->getBackingStore()->get('resource');
        if (is_null($val) || $val instanceof DriftResourceInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resource'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('details', $this->getDetails());
        $writer->writeObjectValue('driftCounts', $this->getDriftCounts());
        $writer->writeEnumValue('driftSource', $this->getDriftSource());
        $writer->writeObjectValue('resource', $this->getResource());
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the details property value. The details property
     * @param array<AccessDriftDetail>|null $value Value to set for the details property.
    */
    public function setDetails(?array $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the driftCounts property value. The driftCounts property
     * @param DriftCounts|null $value Value to set for the driftCounts property.
    */
    public function setDriftCounts(?DriftCounts $value): void {
        $this->getBackingStore()->set('driftCounts', $value);
    }

    /**
     * Sets the driftSource property value. The driftSource property
     * @param AccessDriftSource|null $value Value to set for the driftSource property.
    */
    public function setDriftSource(?AccessDriftSource $value): void {
        $this->getBackingStore()->set('driftSource', $value);
    }

    /**
     * Sets the resource property value. The resource property
     * @param DriftResourceInfo|null $value Value to set for the resource property.
    */
    public function setResource(?DriftResourceInfo $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
