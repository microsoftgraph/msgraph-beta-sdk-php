<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessDriftDetail extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessDriftDetail and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessDriftDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessDriftDetail {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.entraAccessDriftDetail': return new EntraAccessDriftDetail();
            }
        }
        return new AccessDriftDetail();
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
     * Gets the driftType property value. The driftType property
     * @return AccessDriftType|null
    */
    public function getDriftType(): ?AccessDriftType {
        $val = $this->getBackingStore()->get('driftType');
        if (is_null($val) || $val instanceof AccessDriftType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driftType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'driftSource' => fn(ParseNode $n) => $o->setDriftSource($n->getEnumValue(AccessDriftSource::class)),
            'driftType' => fn(ParseNode $n) => $o->setDriftType($n->getEnumValue(AccessDriftType::class)),
            'identities' => fn(ParseNode $n) => $o->setIdentities($n->getCollectionOfObjectValues([DriftIdentityInfo::class, 'createFromDiscriminatorValue'])),
            'resource' => fn(ParseNode $n) => $o->setResource($n->getObjectValue([DriftResourceInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the identities property value. The identities property
     * @return array<DriftIdentityInfo>|null
    */
    public function getIdentities(): ?array {
        $val = $this->getBackingStore()->get('identities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriftIdentityInfo::class);
            /** @var array<DriftIdentityInfo>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identities'");
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
        $writer->writeEnumValue('driftSource', $this->getDriftSource());
        $writer->writeEnumValue('driftType', $this->getDriftType());
        $writer->writeCollectionOfObjectValues('identities', $this->getIdentities());
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
     * Sets the driftSource property value. The driftSource property
     * @param AccessDriftSource|null $value Value to set for the driftSource property.
    */
    public function setDriftSource(?AccessDriftSource $value): void {
        $this->getBackingStore()->set('driftSource', $value);
    }

    /**
     * Sets the driftType property value. The driftType property
     * @param AccessDriftType|null $value Value to set for the driftType property.
    */
    public function setDriftType(?AccessDriftType $value): void {
        $this->getBackingStore()->set('driftType', $value);
    }

    /**
     * Sets the identities property value. The identities property
     * @param array<DriftIdentityInfo>|null $value Value to set for the identities property.
    */
    public function setIdentities(?array $value): void {
        $this->getBackingStore()->set('identities', $value);
    }

    /**
     * Sets the resource property value. The resource property
     * @param DriftResourceInfo|null $value Value to set for the resource property.
    */
    public function setResource(?DriftResourceInfo $value): void {
        $this->getBackingStore()->set('resource', $value);
    }

}
