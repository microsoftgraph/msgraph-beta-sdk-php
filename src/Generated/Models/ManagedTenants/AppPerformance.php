<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppPerformance extends Entity implements Parsable 
{
    /**
     * Instantiates a new appPerformance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppPerformance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppPerformance {
        return new AppPerformance();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appFriendlyName' => fn(ParseNode $n) => $o->setAppFriendlyName($n->getStringValue()),
            'appName' => fn(ParseNode $n) => $o->setAppName($n->getStringValue()),
            'appPublisher' => fn(ParseNode $n) => $o->setAppPublisher($n->getStringValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'meanTimeToFailureInMinutes' => fn(ParseNode $n) => $o->setMeanTimeToFailureInMinutes($n->getIntegerValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'totalActiveDeviceCount' => fn(ParseNode $n) => $o->setTotalActiveDeviceCount($n->getIntegerValue()),
            'totalAppCrashCount' => fn(ParseNode $n) => $o->setTotalAppCrashCount($n->getIntegerValue()),
            'totalAppFreezeCount' => fn(ParseNode $n) => $o->setTotalAppFreezeCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastUpdatedDateTime');
    }

    /**
     * Gets the meanTimeToFailureInMinutes property value. The meanTimeToFailureInMinutes property
     * @return int|null
    */
    public function getMeanTimeToFailureInMinutes(): ?int {
        return $this->getBackingStore()->get('meanTimeToFailureInMinutes');
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
     * Gets the totalActiveDeviceCount property value. The totalActiveDeviceCount property
     * @return int|null
    */
    public function getTotalActiveDeviceCount(): ?int {
        return $this->getBackingStore()->get('totalActiveDeviceCount');
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
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeIntegerValue('meanTimeToFailureInMinutes', $this->getMeanTimeToFailureInMinutes());
        $writer->writeStringValue('tenantDisplayName', $this->getTenantDisplayName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeIntegerValue('totalActiveDeviceCount', $this->getTotalActiveDeviceCount());
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
     * Sets the lastUpdatedDateTime property value. The lastUpdatedDateTime property
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the meanTimeToFailureInMinutes property value. The meanTimeToFailureInMinutes property
     * @param int|null $value Value to set for the meanTimeToFailureInMinutes property.
    */
    public function setMeanTimeToFailureInMinutes(?int $value): void {
        $this->getBackingStore()->set('meanTimeToFailureInMinutes', $value);
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
     * Sets the totalActiveDeviceCount property value. The totalActiveDeviceCount property
     * @param int|null $value Value to set for the totalActiveDeviceCount property.
    */
    public function setTotalActiveDeviceCount(?int $value): void {
        $this->getBackingStore()->set('totalActiveDeviceCount', $value);
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
