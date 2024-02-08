<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceHealthStatus extends Entity implements Parsable 
{
    /**
     * Instantiates a new DeviceHealthStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthStatus {
        return new DeviceHealthStatus();
    }

    /**
     * Gets the blueScreenCount property value. The blueScreenCount property
     * @return int|null
    */
    public function getBlueScreenCount(): ?int {
        $val = $this->getBackingStore()->get('blueScreenCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blueScreenCount'");
    }

    /**
     * Gets the bootTotalDurationInSeconds property value. The bootTotalDurationInSeconds property
     * @return float|null
    */
    public function getBootTotalDurationInSeconds(): ?float {
        $val = $this->getBackingStore()->get('bootTotalDurationInSeconds');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bootTotalDurationInSeconds'");
    }

    /**
     * Gets the deviceId property value. The deviceId property
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * Gets the deviceMake property value. The deviceMake property
     * @return string|null
    */
    public function getDeviceMake(): ?string {
        $val = $this->getBackingStore()->get('deviceMake');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceMake'");
    }

    /**
     * Gets the deviceModel property value. The deviceModel property
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        $val = $this->getBackingStore()->get('deviceModel');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceModel'");
    }

    /**
     * Gets the deviceName property value. The deviceName property
     * @return string|null
    */
    public function getDeviceName(): ?string {
        $val = $this->getBackingStore()->get('deviceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'blueScreenCount' => fn(ParseNode $n) => $o->setBlueScreenCount($n->getIntegerValue()),
            'bootTotalDurationInSeconds' => fn(ParseNode $n) => $o->setBootTotalDurationInSeconds($n->getFloatValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceMake' => fn(ParseNode $n) => $o->setDeviceMake($n->getStringValue()),
            'deviceModel' => fn(ParseNode $n) => $o->setDeviceModel($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getStringValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getStringValue()),
            'primaryDiskType' => fn(ParseNode $n) => $o->setPrimaryDiskType($n->getStringValue()),
            'restartCount' => fn(ParseNode $n) => $o->setRestartCount($n->getIntegerValue()),
            'startupPerformanceScore' => fn(ParseNode $n) => $o->setStartupPerformanceScore($n->getFloatValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'topProcesses' => fn(ParseNode $n) => $o->setTopProcesses($n->getStringValue()),
        ]);
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return string|null
    */
    public function getHealthStatus(): ?string {
        $val = $this->getBackingStore()->get('healthStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'healthStatus'");
    }

    /**
     * Gets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the osVersion property value. The osVersion property
     * @return string|null
    */
    public function getOsVersion(): ?string {
        $val = $this->getBackingStore()->get('osVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'osVersion'");
    }

    /**
     * Gets the primaryDiskType property value. The primaryDiskType property
     * @return string|null
    */
    public function getPrimaryDiskType(): ?string {
        $val = $this->getBackingStore()->get('primaryDiskType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'primaryDiskType'");
    }

    /**
     * Gets the restartCount property value. The restartCount property
     * @return int|null
    */
    public function getRestartCount(): ?int {
        $val = $this->getBackingStore()->get('restartCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'restartCount'");
    }

    /**
     * Gets the startupPerformanceScore property value. The startupPerformanceScore property
     * @return float|null
    */
    public function getStartupPerformanceScore(): ?float {
        $val = $this->getBackingStore()->get('startupPerformanceScore');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startupPerformanceScore'");
    }

    /**
     * Gets the tenantDisplayName property value. The tenantDisplayName property
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        $val = $this->getBackingStore()->get('tenantDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantDisplayName'");
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
     * Gets the topProcesses property value. The topProcesses property
     * @return string|null
    */
    public function getTopProcesses(): ?string {
        $val = $this->getBackingStore()->get('topProcesses');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'topProcesses'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('blueScreenCount', $this->getBlueScreenCount());
        $writer->writeFloatValue('bootTotalDurationInSeconds', $this->getBootTotalDurationInSeconds());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceMake', $this->getDeviceMake());
        $writer->writeStringValue('deviceModel', $this->getDeviceModel());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('healthStatus', $this->getHealthStatus());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('osVersion', $this->getOsVersion());
        $writer->writeStringValue('primaryDiskType', $this->getPrimaryDiskType());
        $writer->writeIntegerValue('restartCount', $this->getRestartCount());
        $writer->writeFloatValue('startupPerformanceScore', $this->getStartupPerformanceScore());
        $writer->writeStringValue('tenantDisplayName', $this->getTenantDisplayName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('topProcesses', $this->getTopProcesses());
    }

    /**
     * Sets the blueScreenCount property value. The blueScreenCount property
     * @param int|null $value Value to set for the blueScreenCount property.
    */
    public function setBlueScreenCount(?int $value): void {
        $this->getBackingStore()->set('blueScreenCount', $value);
    }

    /**
     * Sets the bootTotalDurationInSeconds property value. The bootTotalDurationInSeconds property
     * @param float|null $value Value to set for the bootTotalDurationInSeconds property.
    */
    public function setBootTotalDurationInSeconds(?float $value): void {
        $this->getBackingStore()->set('bootTotalDurationInSeconds', $value);
    }

    /**
     * Sets the deviceId property value. The deviceId property
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceMake property value. The deviceMake property
     * @param string|null $value Value to set for the deviceMake property.
    */
    public function setDeviceMake(?string $value): void {
        $this->getBackingStore()->set('deviceMake', $value);
    }

    /**
     * Sets the deviceModel property value. The deviceModel property
     * @param string|null $value Value to set for the deviceModel property.
    */
    public function setDeviceModel(?string $value): void {
        $this->getBackingStore()->set('deviceModel', $value);
    }

    /**
     * Sets the deviceName property value. The deviceName property
     * @param string|null $value Value to set for the deviceName property.
    */
    public function setDeviceName(?string $value): void {
        $this->getBackingStore()->set('deviceName', $value);
    }

    /**
     * Sets the healthStatus property value. The healthStatus property
     * @param string|null $value Value to set for the healthStatus property.
    */
    public function setHealthStatus(?string $value): void {
        $this->getBackingStore()->set('healthStatus', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the osVersion property value. The osVersion property
     * @param string|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?string $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the primaryDiskType property value. The primaryDiskType property
     * @param string|null $value Value to set for the primaryDiskType property.
    */
    public function setPrimaryDiskType(?string $value): void {
        $this->getBackingStore()->set('primaryDiskType', $value);
    }

    /**
     * Sets the restartCount property value. The restartCount property
     * @param int|null $value Value to set for the restartCount property.
    */
    public function setRestartCount(?int $value): void {
        $this->getBackingStore()->set('restartCount', $value);
    }

    /**
     * Sets the startupPerformanceScore property value. The startupPerformanceScore property
     * @param float|null $value Value to set for the startupPerformanceScore property.
    */
    public function setStartupPerformanceScore(?float $value): void {
        $this->getBackingStore()->set('startupPerformanceScore', $value);
    }

    /**
     * Sets the tenantDisplayName property value. The tenantDisplayName property
     * @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value): void {
        $this->getBackingStore()->set('tenantDisplayName', $value);
    }

    /**
     * Sets the tenantId property value. The tenantId property
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the topProcesses property value. The topProcesses property
     * @param string|null $value Value to set for the topProcesses property.
    */
    public function setTopProcesses(?string $value): void {
        $this->getBackingStore()->set('topProcesses', $value);
    }

}
