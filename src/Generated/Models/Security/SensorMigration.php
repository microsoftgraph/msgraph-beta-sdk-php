<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SensorMigration extends Entity implements Parsable 
{
    /**
     * Instantiates a new SensorMigration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SensorMigration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SensorMigration {
        return new SensorMigration();
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
     * Gets the domainName property value. The domainName property
     * @return string|null
    */
    public function getDomainName(): ?string {
        $val = $this->getBackingStore()->get('domainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'domainName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'domainName' => fn(ParseNode $n) => $o->setDomainName($n->getStringValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getEnumValue(SensorHealthStatus::class)),
            'migrationState' => fn(ParseNode $n) => $o->setMigrationState($n->getEnumValue(MigrationState::class)),
            'sensorType' => fn(ParseNode $n) => $o->setSensorType($n->getEnumValue(SensorType::class)),
            'serviceStatus' => fn(ParseNode $n) => $o->setServiceStatus($n->getEnumValue(ServiceStatus::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return SensorHealthStatus|null
    */
    public function getHealthStatus(): ?SensorHealthStatus {
        $val = $this->getBackingStore()->get('healthStatus');
        if (is_null($val) || $val instanceof SensorHealthStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthStatus'");
    }

    /**
     * Gets the migrationState property value. The migrationState property
     * @return MigrationState|null
    */
    public function getMigrationState(): ?MigrationState {
        $val = $this->getBackingStore()->get('migrationState');
        if (is_null($val) || $val instanceof MigrationState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'migrationState'");
    }

    /**
     * Gets the sensorType property value. The sensorType property
     * @return SensorType|null
    */
    public function getSensorType(): ?SensorType {
        $val = $this->getBackingStore()->get('sensorType');
        if (is_null($val) || $val instanceof SensorType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensorType'");
    }

    /**
     * Gets the serviceStatus property value. The serviceStatus property
     * @return ServiceStatus|null
    */
    public function getServiceStatus(): ?ServiceStatus {
        $val = $this->getBackingStore()->get('serviceStatus');
        if (is_null($val) || $val instanceof ServiceStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceStatus'");
    }

    /**
     * Gets the version property value. The version property
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('domainName', $this->getDomainName());
        $writer->writeEnumValue('healthStatus', $this->getHealthStatus());
        $writer->writeEnumValue('migrationState', $this->getMigrationState());
        $writer->writeEnumValue('sensorType', $this->getSensorType());
        $writer->writeEnumValue('serviceStatus', $this->getServiceStatus());
        $writer->writeStringValue('version', $this->getVersion());
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the domainName property value. The domainName property
     * @param string|null $value Value to set for the domainName property.
    */
    public function setDomainName(?string $value): void {
        $this->getBackingStore()->set('domainName', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     * @param SensorHealthStatus|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?SensorHealthStatus $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the migrationState property value. The migrationState property
     * @param MigrationState|null $value Value to set for the migrationState property.
    */
    public function setMigrationState(?MigrationState $value): void {
        $this->getBackingStore()->set('migrationState', $value);
    }

    /**
     * Sets the sensorType property value. The sensorType property
     * @param SensorType|null $value Value to set for the sensorType property.
    */
    public function setSensorType(?SensorType $value): void {
        $this->getBackingStore()->set('sensorType', $value);
    }

    /**
     * Sets the serviceStatus property value. The serviceStatus property
     * @param ServiceStatus|null $value Value to set for the serviceStatus property.
    */
    public function setServiceStatus(?ServiceStatus $value): void {
        $this->getBackingStore()->set('serviceStatus', $value);
    }

    /**
     * Sets the version property value. The version property
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

}
