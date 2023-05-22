<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceAppPerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceAppPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceAppPerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceAppPerformance {
        return new DeviceAppPerformance();
    }

    /**
     * Gets the appFriendlyName property value. The appFriendlyName property
     * @return string|null
    */
    public function getAppFriendlyName(): ?string {
        return $this->getBackingStore()->get('appFriendlyName');
    }

    /**
     * Gets the appName property value. The appName property
     * @return string|null
    */
    public function getAppName(): ?string {
        return $this->getBackingStore()->get('appName');
    }

    /**
     * Gets the appPublisher property value. The appPublisher property
     * @return string|null
    */
    public function getAppPublisher(): ?string {
        return $this->getBackingStore()->get('appPublisher');
    }

    /**
     * Gets the appVersion property value. The appVersion property
     * @return string|null
    */
    public function getAppVersion(): ?string {
        return $this->getBackingStore()->get('appVersion');
    }

    /**
     * Gets the deviceId property value. The deviceId property
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->getBackingStore()->get('deviceId');
    }

    /**
     * Gets the deviceManufacturer property value. The deviceManufacturer property
     * @return string|null
    */
    public function getDeviceManufacturer(): ?string {
        return $this->getBackingStore()->get('deviceManufacturer');
    }

    /**
     * Gets the deviceModel property value. The deviceModel property
     * @return string|null
    */
    public function getDeviceModel(): ?string {
        return $this->getBackingStore()->get('deviceModel');
    }

    /**
     * Gets the deviceName property value. The deviceName property
     * @return string|null
    */
    public function getDeviceName(): ?string {
        return $this->getBackingStore()->get('deviceName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appFriendlyName' => fn(ParseNode $n) => $o->setAppFriendlyName($n->getStringValue()),
            'appName' => fn(ParseNode $n) => $o->setAppName($n->getStringValue()),
            'appPublisher' => fn(ParseNode $n) => $o->setAppPublisher($n->getStringValue()),
            'appVersion' => fn(ParseNode $n) => $o->setAppVersion($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'deviceManufacturer' => fn(ParseNode $n) => $o->setDeviceManufacturer($n->getStringValue()),
            'deviceModel' => fn(ParseNode $n) => $o->setDeviceModel($n->getStringValue()),
            'deviceName' => fn(ParseNode $n) => $o->setDeviceName($n->getStringValue()),
            'healthStatus' => fn(ParseNode $n) => $o->setHealthStatus($n->getStringValue()),
            'isLatestUsedVersion' => fn(ParseNode $n) => $o->setIsLatestUsedVersion($n->getIntegerValue()),
            'isMostUsedVersion' => fn(ParseNode $n) => $o->setIsMostUsedVersion($n->getIntegerValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'totalAppCrashCount' => fn(ParseNode $n) => $o->setTotalAppCrashCount($n->getIntegerValue()),
            'totalAppFreezeCount' => fn(ParseNode $n) => $o->setTotalAppFreezeCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the healthStatus property value. The healthStatus property
     * @return string|null
    */
    public function getHealthStatus(): ?string {
        return $this->getBackingStore()->get('healthStatus');
    }

    /**
     * Gets the isLatestUsedVersion property value. The isLatestUsedVersion property
     * @return int|null
    */
    public function getIsLatestUsedVersion(): ?int {
        return $this->getBackingStore()->get('isLatestUsedVersion');
    }

    /**
     * Gets the isMostUsedVersion property value. The isMostUsedVersion property
     * @return int|null
    */
    public function getIsMostUsedVersion(): ?int {
        return $this->getBackingStore()->get('isMostUsedVersion');
    }

    /**
     * Gets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastUpdatedDateTime');
    }

    /**
     * Gets the tenantDisplayName property value. The tenantDisplayName property
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        return $this->getBackingStore()->get('tenantDisplayName');
    }

    /**
     * Gets the tenantId property value. The tenantId property
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Gets the totalAppCrashCount property value. The totalAppCrashCount property
     * @return int|null
    */
    public function getTotalAppCrashCount(): ?int {
        return $this->getBackingStore()->get('totalAppCrashCount');
    }

    /**
     * Gets the totalAppFreezeCount property value. The totalAppFreezeCount property
     * @return int|null
    */
    public function getTotalAppFreezeCount(): ?int {
        return $this->getBackingStore()->get('totalAppFreezeCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appFriendlyName', $this->getAppFriendlyName());
        $writer->writeStringValue('appName', $this->getAppName());
        $writer->writeStringValue('appPublisher', $this->getAppPublisher());
        $writer->writeStringValue('appVersion', $this->getAppVersion());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeStringValue('deviceManufacturer', $this->getDeviceManufacturer());
        $writer->writeStringValue('deviceModel', $this->getDeviceModel());
        $writer->writeStringValue('deviceName', $this->getDeviceName());
        $writer->writeStringValue('healthStatus', $this->getHealthStatus());
        $writer->writeIntegerValue('isLatestUsedVersion', $this->getIsLatestUsedVersion());
        $writer->writeIntegerValue('isMostUsedVersion', $this->getIsMostUsedVersion());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('tenantDisplayName', $this->getTenantDisplayName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeIntegerValue('totalAppCrashCount', $this->getTotalAppCrashCount());
        $writer->writeIntegerValue('totalAppFreezeCount', $this->getTotalAppFreezeCount());
    }

    /**
     * Sets the appFriendlyName property value. The appFriendlyName property
     * @param string|null $value Value to set for the appFriendlyName property.
    */
    public function setAppFriendlyName(?string $value): void {
        $this->getBackingStore()->set('appFriendlyName', $value);
    }

    /**
     * Sets the appName property value. The appName property
     * @param string|null $value Value to set for the appName property.
    */
    public function setAppName(?string $value): void {
        $this->getBackingStore()->set('appName', $value);
    }

    /**
     * Sets the appPublisher property value. The appPublisher property
     * @param string|null $value Value to set for the appPublisher property.
    */
    public function setAppPublisher(?string $value): void {
        $this->getBackingStore()->set('appPublisher', $value);
    }

    /**
     * Sets the appVersion property value. The appVersion property
     * @param string|null $value Value to set for the appVersion property.
    */
    public function setAppVersion(?string $value): void {
        $this->getBackingStore()->set('appVersion', $value);
    }

    /**
     * Sets the deviceId property value. The deviceId property
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the deviceManufacturer property value. The deviceManufacturer property
     * @param string|null $value Value to set for the deviceManufacturer property.
    */
    public function setDeviceManufacturer(?string $value): void {
        $this->getBackingStore()->set('deviceManufacturer', $value);
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
     * Sets the isLatestUsedVersion property value. The isLatestUsedVersion property
     * @param int|null $value Value to set for the isLatestUsedVersion property.
    */
    public function setIsLatestUsedVersion(?int $value): void {
        $this->getBackingStore()->set('isLatestUsedVersion', $value);
    }

    /**
     * Sets the isMostUsedVersion property value. The isMostUsedVersion property
     * @param int|null $value Value to set for the isMostUsedVersion property.
    */
    public function setIsMostUsedVersion(?int $value): void {
        $this->getBackingStore()->set('isMostUsedVersion', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
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
     * Sets the totalAppCrashCount property value. The totalAppCrashCount property
     * @param int|null $value Value to set for the totalAppCrashCount property.
    */
    public function setTotalAppCrashCount(?int $value): void {
        $this->getBackingStore()->set('totalAppCrashCount', $value);
    }

    /**
     * Sets the totalAppFreezeCount property value. The totalAppFreezeCount property
     * @param int|null $value Value to set for the totalAppFreezeCount property.
    */
    public function setTotalAppFreezeCount(?int $value): void {
        $this->getBackingStore()->set('totalAppFreezeCount', $value);
    }

}
