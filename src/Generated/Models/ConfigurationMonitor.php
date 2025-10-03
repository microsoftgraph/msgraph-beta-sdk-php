<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfigurationMonitor extends Entity implements Parsable 
{
    /**
     * Instantiates a new ConfigurationMonitor and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationMonitor
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationMonitor {
        return new ConfigurationMonitor();
    }

    /**
     * Gets the baseline property value. The baseline property
     * @return ConfigurationBaseline|null
    */
    public function getBaseline(): ?ConfigurationBaseline {
        $val = $this->getBackingStore()->get('baseline');
        if (is_null($val) || $val instanceof ConfigurationBaseline) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'baseline'");
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
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
     * Gets the description property value. The description property
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
     * Gets the displayName property value. The displayName property
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
            'baseline' => fn(ParseNode $n) => $o->setBaseline($n->getObjectValue([ConfigurationBaseline::class, 'createFromDiscriminatorValue'])),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'mode' => fn(ParseNode $n) => $o->setMode($n->getEnumValue(MonitorMode::class)),
            'monitorRunFrequencyInHours' => fn(ParseNode $n) => $o->setMonitorRunFrequencyInHours($n->getIntegerValue()),
            'parameters' => fn(ParseNode $n) => $o->setParameters($n->getObjectValue([OpenComplexDictionaryType::class, 'createFromDiscriminatorValue'])),
            'runningOnBehalfOf' => fn(ParseNode $n) => $o->setRunningOnBehalfOf($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(MonitorStatus::class)),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
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
     * Gets the mode property value. The mode property
     * @return MonitorMode|null
    */
    public function getMode(): ?MonitorMode {
        $val = $this->getBackingStore()->get('mode');
        if (is_null($val) || $val instanceof MonitorMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mode'");
    }

    /**
     * Gets the monitorRunFrequencyInHours property value. The monitorRunFrequencyInHours property
     * @return int|null
    */
    public function getMonitorRunFrequencyInHours(): ?int {
        $val = $this->getBackingStore()->get('monitorRunFrequencyInHours');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'monitorRunFrequencyInHours'");
    }

    /**
     * Gets the parameters property value. The parameters property
     * @return OpenComplexDictionaryType|null
    */
    public function getParameters(): ?OpenComplexDictionaryType {
        $val = $this->getBackingStore()->get('parameters');
        if (is_null($val) || $val instanceof OpenComplexDictionaryType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parameters'");
    }

    /**
     * Gets the runningOnBehalfOf property value. The runningOnBehalfOf property
     * @return IdentitySet|null
    */
    public function getRunningOnBehalfOf(): ?IdentitySet {
        $val = $this->getBackingStore()->get('runningOnBehalfOf');
        if (is_null($val) || $val instanceof IdentitySet) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'runningOnBehalfOf'");
    }

    /**
     * Gets the status property value. The status property
     * @return MonitorStatus|null
    */
    public function getStatus(): ?MonitorStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof MonitorStatus) {
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
        $writer->writeObjectValue('baseline', $this->getBaseline());
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeEnumValue('mode', $this->getMode());
        $writer->writeObjectValue('parameters', $this->getParameters());
        $writer->writeObjectValue('runningOnBehalfOf', $this->getRunningOnBehalfOf());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the baseline property value. The baseline property
     * @param ConfigurationBaseline|null $value Value to set for the baseline property.
    */
    public function setBaseline(?ConfigurationBaseline $value): void {
        $this->getBackingStore()->set('baseline', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the mode property value. The mode property
     * @param MonitorMode|null $value Value to set for the mode property.
    */
    public function setMode(?MonitorMode $value): void {
        $this->getBackingStore()->set('mode', $value);
    }

    /**
     * Sets the monitorRunFrequencyInHours property value. The monitorRunFrequencyInHours property
     * @param int|null $value Value to set for the monitorRunFrequencyInHours property.
    */
    public function setMonitorRunFrequencyInHours(?int $value): void {
        $this->getBackingStore()->set('monitorRunFrequencyInHours', $value);
    }

    /**
     * Sets the parameters property value. The parameters property
     * @param OpenComplexDictionaryType|null $value Value to set for the parameters property.
    */
    public function setParameters(?OpenComplexDictionaryType $value): void {
        $this->getBackingStore()->set('parameters', $value);
    }

    /**
     * Sets the runningOnBehalfOf property value. The runningOnBehalfOf property
     * @param IdentitySet|null $value Value to set for the runningOnBehalfOf property.
    */
    public function setRunningOnBehalfOf(?IdentitySet $value): void {
        $this->getBackingStore()->set('runningOnBehalfOf', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param MonitorStatus|null $value Value to set for the status property.
    */
    public function setStatus(?MonitorStatus $value): void {
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
