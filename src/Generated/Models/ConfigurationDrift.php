<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ConfigurationDrift extends Entity implements Parsable 
{
    /**
     * Instantiates a new ConfigurationDrift and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationDrift
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationDrift {
        return new ConfigurationDrift();
    }

    /**
     * Gets the baselineResourceDisplayName property value. The baselineResourceDisplayName property
     * @return string|null
    */
    public function getBaselineResourceDisplayName(): ?string {
        $val = $this->getBackingStore()->get('baselineResourceDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'baselineResourceDisplayName'");
    }

    /**
     * Gets the driftedProperties property value. The driftedProperties property
     * @return array<DriftedProperty>|null
    */
    public function getDriftedProperties(): ?array {
        $val = $this->getBackingStore()->get('driftedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DriftedProperty::class);
            /** @var array<DriftedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'driftedProperties'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'baselineResourceDisplayName' => fn(ParseNode $n) => $o->setBaselineResourceDisplayName($n->getStringValue()),
            'driftedProperties' => fn(ParseNode $n) => $o->setDriftedProperties($n->getCollectionOfObjectValues([DriftedProperty::class, 'createFromDiscriminatorValue'])),
            'firstReportedDateTime' => fn(ParseNode $n) => $o->setFirstReportedDateTime($n->getDateTimeValue()),
            'monitorId' => fn(ParseNode $n) => $o->setMonitorId($n->getStringValue()),
            'resourceInstanceIdentifier' => fn(ParseNode $n) => $o->setResourceInstanceIdentifier($n->getObjectValue([OpenComplexDictionaryType::class, 'createFromDiscriminatorValue'])),
            'resourceType' => fn(ParseNode $n) => $o->setResourceType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(DriftStatus::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the firstReportedDateTime property value. The firstReportedDateTime property
     * @return DateTime|null
    */
    public function getFirstReportedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('firstReportedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'firstReportedDateTime'");
    }

    /**
     * Gets the monitorId property value. The monitorId property
     * @return string|null
    */
    public function getMonitorId(): ?string {
        $val = $this->getBackingStore()->get('monitorId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monitorId'");
    }

    /**
     * Gets the resourceInstanceIdentifier property value. The resourceInstanceIdentifier property
     * @return OpenComplexDictionaryType|null
    */
    public function getResourceInstanceIdentifier(): ?OpenComplexDictionaryType {
        $val = $this->getBackingStore()->get('resourceInstanceIdentifier');
        if (is_null($val) || $val instanceof OpenComplexDictionaryType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceInstanceIdentifier'");
    }

    /**
     * Gets the resourceType property value. The resourceType property
     * @return string|null
    */
    public function getResourceType(): ?string {
        $val = $this->getBackingStore()->get('resourceType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceType'");
    }

    /**
     * Gets the status property value. The status property
     * @return DriftStatus|null
    */
    public function getStatus(): ?DriftStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof DriftStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('resourceInstanceIdentifier', $this->getResourceInstanceIdentifier());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the baselineResourceDisplayName property value. The baselineResourceDisplayName property
     * @param string|null $value Value to set for the baselineResourceDisplayName property.
    */
    public function setBaselineResourceDisplayName(?string $value): void {
        $this->getBackingStore()->set('baselineResourceDisplayName', $value);
    }

    /**
     * Sets the driftedProperties property value. The driftedProperties property
     * @param array<DriftedProperty>|null $value Value to set for the driftedProperties property.
    */
    public function setDriftedProperties(?array $value): void {
        $this->getBackingStore()->set('driftedProperties', $value);
    }

    /**
     * Sets the firstReportedDateTime property value. The firstReportedDateTime property
     * @param DateTime|null $value Value to set for the firstReportedDateTime property.
    */
    public function setFirstReportedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('firstReportedDateTime', $value);
    }

    /**
     * Sets the monitorId property value. The monitorId property
     * @param string|null $value Value to set for the monitorId property.
    */
    public function setMonitorId(?string $value): void {
        $this->getBackingStore()->set('monitorId', $value);
    }

    /**
     * Sets the resourceInstanceIdentifier property value. The resourceInstanceIdentifier property
     * @param OpenComplexDictionaryType|null $value Value to set for the resourceInstanceIdentifier property.
    */
    public function setResourceInstanceIdentifier(?OpenComplexDictionaryType $value): void {
        $this->getBackingStore()->set('resourceInstanceIdentifier', $value);
    }

    /**
     * Sets the resourceType property value. The resourceType property
     * @param string|null $value Value to set for the resourceType property.
    */
    public function setResourceType(?string $value): void {
        $this->getBackingStore()->set('resourceType', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param DriftStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DriftStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
