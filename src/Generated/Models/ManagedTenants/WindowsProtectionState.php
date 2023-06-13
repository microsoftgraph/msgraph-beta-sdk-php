<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsProtectionState extends Entity implements Parsable 
{
    /**
     * Instantiates a new windowsProtectionState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsProtectionState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsProtectionState {
        return new WindowsProtectionState();
    }

    /**
     * Gets the antiMalwareVersion property value. The anti-malware version for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getAntiMalwareVersion(): ?string {
        return $this->getBackingStore()->get('antiMalwareVersion');
    }

    /**
     * Gets the attentionRequired property value. A flag indicating whether attention is required for the managed device. Optional. Read-only.
     * @return bool|null
    */
    public function getAttentionRequired(): ?bool {
        return $this->getBackingStore()->get('attentionRequired');
    }

    /**
     * Gets the deviceDeleted property value. A flag indicating whether the managed device has been deleted. Optional. Read-only.
     * @return bool|null
    */
    public function getDeviceDeleted(): ?bool {
        return $this->getBackingStore()->get('deviceDeleted');
    }

    /**
     * Gets the devicePropertyRefreshDateTime property value. The date and time the device property has been refreshed. Optional. Read-only.
     * @return DateTime|null
    */
    public function getDevicePropertyRefreshDateTime(): ?DateTime {
        return $this->getBackingStore()->get('devicePropertyRefreshDateTime');
    }

    /**
     * Gets the engineVersion property value. The anti-virus engine version for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getEngineVersion(): ?string {
        return $this->getBackingStore()->get('engineVersion');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'antiMalwareVersion' => fn(ParseNode $n) => $o->setAntiMalwareVersion($n->getStringValue()),
            'attentionRequired' => fn(ParseNode $n) => $o->setAttentionRequired($n->getBooleanValue()),
            'deviceDeleted' => fn(ParseNode $n) => $o->setDeviceDeleted($n->getBooleanValue()),
            'devicePropertyRefreshDateTime' => fn(ParseNode $n) => $o->setDevicePropertyRefreshDateTime($n->getDateTimeValue()),
            'engineVersion' => fn(ParseNode $n) => $o->setEngineVersion($n->getStringValue()),
            'fullScanOverdue' => fn(ParseNode $n) => $o->setFullScanOverdue($n->getBooleanValue()),
            'fullScanRequired' => fn(ParseNode $n) => $o->setFullScanRequired($n->getBooleanValue()),
            'lastFullScanDateTime' => fn(ParseNode $n) => $o->setLastFullScanDateTime($n->getDateTimeValue()),
            'lastFullScanSignatureVersion' => fn(ParseNode $n) => $o->setLastFullScanSignatureVersion($n->getStringValue()),
            'lastQuickScanDateTime' => fn(ParseNode $n) => $o->setLastQuickScanDateTime($n->getDateTimeValue()),
            'lastQuickScanSignatureVersion' => fn(ParseNode $n) => $o->setLastQuickScanSignatureVersion($n->getStringValue()),
            'lastRefreshedDateTime' => fn(ParseNode $n) => $o->setLastRefreshedDateTime($n->getDateTimeValue()),
            'lastReportedDateTime' => fn(ParseNode $n) => $o->setLastReportedDateTime($n->getDateTimeValue()),
            'malwareProtectionEnabled' => fn(ParseNode $n) => $o->setMalwareProtectionEnabled($n->getBooleanValue()),
            'managedDeviceHealthState' => fn(ParseNode $n) => $o->setManagedDeviceHealthState($n->getStringValue()),
            'managedDeviceId' => fn(ParseNode $n) => $o->setManagedDeviceId($n->getStringValue()),
            'managedDeviceName' => fn(ParseNode $n) => $o->setManagedDeviceName($n->getStringValue()),
            'networkInspectionSystemEnabled' => fn(ParseNode $n) => $o->setNetworkInspectionSystemEnabled($n->getBooleanValue()),
            'quickScanOverdue' => fn(ParseNode $n) => $o->setQuickScanOverdue($n->getBooleanValue()),
            'realTimeProtectionEnabled' => fn(ParseNode $n) => $o->setRealTimeProtectionEnabled($n->getBooleanValue()),
            'rebootRequired' => fn(ParseNode $n) => $o->setRebootRequired($n->getBooleanValue()),
            'signatureUpdateOverdue' => fn(ParseNode $n) => $o->setSignatureUpdateOverdue($n->getBooleanValue()),
            'signatureVersion' => fn(ParseNode $n) => $o->setSignatureVersion($n->getStringValue()),
            'tenantDisplayName' => fn(ParseNode $n) => $o->setTenantDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the fullScanOverdue property value. A flag indicating whether quick scan is overdue for the managed device. Optional. Read-only.
     * @return bool|null
    */
    public function getFullScanOverdue(): ?bool {
        return $this->getBackingStore()->get('fullScanOverdue');
    }

    /**
     * Gets the fullScanRequired property value. A flag indicating whether full scan is overdue for the managed device. Optional. Read-only.
     * @return bool|null
    */
    public function getFullScanRequired(): ?bool {
        return $this->getBackingStore()->get('fullScanRequired');
    }

    /**
     * Gets the lastFullScanDateTime property value. The date and time a full scan was completed. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastFullScanDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastFullScanDateTime');
    }

    /**
     * Gets the lastFullScanSignatureVersion property value. The version anti-malware version used to perform the last full scan. Optional. Read-only.
     * @return string|null
    */
    public function getLastFullScanSignatureVersion(): ?string {
        return $this->getBackingStore()->get('lastFullScanSignatureVersion');
    }

    /**
     * Gets the lastQuickScanDateTime property value. The date and time a quick scan was completed. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastQuickScanDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastQuickScanDateTime');
    }

    /**
     * Gets the lastQuickScanSignatureVersion property value. The version anti-malware version used to perform the last full scan. Optional. Read-only.
     * @return string|null
    */
    public function getLastQuickScanSignatureVersion(): ?string {
        return $this->getBackingStore()->get('lastQuickScanSignatureVersion');
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastRefreshedDateTime');
    }

    /**
     * Gets the lastReportedDateTime property value. The date and time the protection state was last reported for the managed device. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastReportedDateTime');
    }

    /**
     * Gets the malwareProtectionEnabled property value. A flag indicating whether malware protection is enabled for the managed device. Optional. Read-only.
     * @return bool|null
    */
    public function getMalwareProtectionEnabled(): ?bool {
        return $this->getBackingStore()->get('malwareProtectionEnabled');
    }

    /**
     * Gets the managedDeviceHealthState property value. The health state for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceHealthState(): ?string {
        return $this->getBackingStore()->get('managedDeviceHealthState');
    }

    /**
     * Gets the managedDeviceId property value. The unique identifier for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->getBackingStore()->get('managedDeviceId');
    }

    /**
     * Gets the managedDeviceName property value. The display name for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->getBackingStore()->get('managedDeviceName');
    }

    /**
     * Gets the networkInspectionSystemEnabled property value. A flag indicating whether the network inspection system is enabled. Optional. Read-only.
     * @return bool|null
    */
    public function getNetworkInspectionSystemEnabled(): ?bool {
        return $this->getBackingStore()->get('networkInspectionSystemEnabled');
    }

    /**
     * Gets the quickScanOverdue property value. A flag indicating weather a quick scan is overdue. Optional. Read-only.
     * @return bool|null
    */
    public function getQuickScanOverdue(): ?bool {
        return $this->getBackingStore()->get('quickScanOverdue');
    }

    /**
     * Gets the realTimeProtectionEnabled property value. A flag indicating whether real time protection is enabled. Optional. Read-only.
     * @return bool|null
    */
    public function getRealTimeProtectionEnabled(): ?bool {
        return $this->getBackingStore()->get('realTimeProtectionEnabled');
    }

    /**
     * Gets the rebootRequired property value. A flag indicating whether a reboot is required. Optional. Read-only.
     * @return bool|null
    */
    public function getRebootRequired(): ?bool {
        return $this->getBackingStore()->get('rebootRequired');
    }

    /**
     * Gets the signatureUpdateOverdue property value. A flag indicating whether an signature update is overdue. Optional. Read-only.
     * @return bool|null
    */
    public function getSignatureUpdateOverdue(): ?bool {
        return $this->getBackingStore()->get('signatureUpdateOverdue');
    }

    /**
     * Gets the signatureVersion property value. The signature version for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getSignatureVersion(): ?string {
        return $this->getBackingStore()->get('signatureVersion');
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        return $this->getBackingStore()->get('tenantDisplayName');
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->getBackingStore()->get('tenantId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('antiMalwareVersion', $this->getAntiMalwareVersion());
        $writer->writeBooleanValue('attentionRequired', $this->getAttentionRequired());
        $writer->writeBooleanValue('deviceDeleted', $this->getDeviceDeleted());
        $writer->writeDateTimeValue('devicePropertyRefreshDateTime', $this->getDevicePropertyRefreshDateTime());
        $writer->writeStringValue('engineVersion', $this->getEngineVersion());
        $writer->writeBooleanValue('fullScanOverdue', $this->getFullScanOverdue());
        $writer->writeBooleanValue('fullScanRequired', $this->getFullScanRequired());
        $writer->writeDateTimeValue('lastFullScanDateTime', $this->getLastFullScanDateTime());
        $writer->writeStringValue('lastFullScanSignatureVersion', $this->getLastFullScanSignatureVersion());
        $writer->writeDateTimeValue('lastQuickScanDateTime', $this->getLastQuickScanDateTime());
        $writer->writeStringValue('lastQuickScanSignatureVersion', $this->getLastQuickScanSignatureVersion());
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->getLastRefreshedDateTime());
        $writer->writeDateTimeValue('lastReportedDateTime', $this->getLastReportedDateTime());
        $writer->writeBooleanValue('malwareProtectionEnabled', $this->getMalwareProtectionEnabled());
        $writer->writeStringValue('managedDeviceHealthState', $this->getManagedDeviceHealthState());
        $writer->writeStringValue('managedDeviceId', $this->getManagedDeviceId());
        $writer->writeStringValue('managedDeviceName', $this->getManagedDeviceName());
        $writer->writeBooleanValue('networkInspectionSystemEnabled', $this->getNetworkInspectionSystemEnabled());
        $writer->writeBooleanValue('quickScanOverdue', $this->getQuickScanOverdue());
        $writer->writeBooleanValue('realTimeProtectionEnabled', $this->getRealTimeProtectionEnabled());
        $writer->writeBooleanValue('rebootRequired', $this->getRebootRequired());
        $writer->writeBooleanValue('signatureUpdateOverdue', $this->getSignatureUpdateOverdue());
        $writer->writeStringValue('signatureVersion', $this->getSignatureVersion());
        $writer->writeStringValue('tenantDisplayName', $this->getTenantDisplayName());
        $writer->writeStringValue('tenantId', $this->getTenantId());
    }

    /**
     * Sets the antiMalwareVersion property value. The anti-malware version for the managed device. Optional. Read-only.
     * @param string|null $value Value to set for the antiMalwareVersion property.
    */
    public function setAntiMalwareVersion(?string $value): void {
        $this->getBackingStore()->set('antiMalwareVersion', $value);
    }

    /**
     * Sets the attentionRequired property value. A flag indicating whether attention is required for the managed device. Optional. Read-only.
     * @param bool|null $value Value to set for the attentionRequired property.
    */
    public function setAttentionRequired(?bool $value): void {
        $this->getBackingStore()->set('attentionRequired', $value);
    }

    /**
     * Sets the deviceDeleted property value. A flag indicating whether the managed device has been deleted. Optional. Read-only.
     * @param bool|null $value Value to set for the deviceDeleted property.
    */
    public function setDeviceDeleted(?bool $value): void {
        $this->getBackingStore()->set('deviceDeleted', $value);
    }

    /**
     * Sets the devicePropertyRefreshDateTime property value. The date and time the device property has been refreshed. Optional. Read-only.
     * @param DateTime|null $value Value to set for the devicePropertyRefreshDateTime property.
    */
    public function setDevicePropertyRefreshDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('devicePropertyRefreshDateTime', $value);
    }

    /**
     * Sets the engineVersion property value. The anti-virus engine version for the managed device. Optional. Read-only.
     * @param string|null $value Value to set for the engineVersion property.
    */
    public function setEngineVersion(?string $value): void {
        $this->getBackingStore()->set('engineVersion', $value);
    }

    /**
     * Sets the fullScanOverdue property value. A flag indicating whether quick scan is overdue for the managed device. Optional. Read-only.
     * @param bool|null $value Value to set for the fullScanOverdue property.
    */
    public function setFullScanOverdue(?bool $value): void {
        $this->getBackingStore()->set('fullScanOverdue', $value);
    }

    /**
     * Sets the fullScanRequired property value. A flag indicating whether full scan is overdue for the managed device. Optional. Read-only.
     * @param bool|null $value Value to set for the fullScanRequired property.
    */
    public function setFullScanRequired(?bool $value): void {
        $this->getBackingStore()->set('fullScanRequired', $value);
    }

    /**
     * Sets the lastFullScanDateTime property value. The date and time a full scan was completed. Optional. Read-only.
     * @param DateTime|null $value Value to set for the lastFullScanDateTime property.
    */
    public function setLastFullScanDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastFullScanDateTime', $value);
    }

    /**
     * Sets the lastFullScanSignatureVersion property value. The version anti-malware version used to perform the last full scan. Optional. Read-only.
     * @param string|null $value Value to set for the lastFullScanSignatureVersion property.
    */
    public function setLastFullScanSignatureVersion(?string $value): void {
        $this->getBackingStore()->set('lastFullScanSignatureVersion', $value);
    }

    /**
     * Sets the lastQuickScanDateTime property value. The date and time a quick scan was completed. Optional. Read-only.
     * @param DateTime|null $value Value to set for the lastQuickScanDateTime property.
    */
    public function setLastQuickScanDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastQuickScanDateTime', $value);
    }

    /**
     * Sets the lastQuickScanSignatureVersion property value. The version anti-malware version used to perform the last full scan. Optional. Read-only.
     * @param string|null $value Value to set for the lastQuickScanSignatureVersion property.
    */
    public function setLastQuickScanSignatureVersion(?string $value): void {
        $this->getBackingStore()->set('lastQuickScanSignatureVersion', $value);
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRefreshedDateTime', $value);
    }

    /**
     * Sets the lastReportedDateTime property value. The date and time the protection state was last reported for the managed device. Optional. Read-only.
     * @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastReportedDateTime', $value);
    }

    /**
     * Sets the malwareProtectionEnabled property value. A flag indicating whether malware protection is enabled for the managed device. Optional. Read-only.
     * @param bool|null $value Value to set for the malwareProtectionEnabled property.
    */
    public function setMalwareProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('malwareProtectionEnabled', $value);
    }

    /**
     * Sets the managedDeviceHealthState property value. The health state for the managed device. Optional. Read-only.
     * @param string|null $value Value to set for the managedDeviceHealthState property.
    */
    public function setManagedDeviceHealthState(?string $value): void {
        $this->getBackingStore()->set('managedDeviceHealthState', $value);
    }

    /**
     * Sets the managedDeviceId property value. The unique identifier for the managed device. Optional. Read-only.
     * @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value): void {
        $this->getBackingStore()->set('managedDeviceId', $value);
    }

    /**
     * Sets the managedDeviceName property value. The display name for the managed device. Optional. Read-only.
     * @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value): void {
        $this->getBackingStore()->set('managedDeviceName', $value);
    }

    /**
     * Sets the networkInspectionSystemEnabled property value. A flag indicating whether the network inspection system is enabled. Optional. Read-only.
     * @param bool|null $value Value to set for the networkInspectionSystemEnabled property.
    */
    public function setNetworkInspectionSystemEnabled(?bool $value): void {
        $this->getBackingStore()->set('networkInspectionSystemEnabled', $value);
    }

    /**
     * Sets the quickScanOverdue property value. A flag indicating weather a quick scan is overdue. Optional. Read-only.
     * @param bool|null $value Value to set for the quickScanOverdue property.
    */
    public function setQuickScanOverdue(?bool $value): void {
        $this->getBackingStore()->set('quickScanOverdue', $value);
    }

    /**
     * Sets the realTimeProtectionEnabled property value. A flag indicating whether real time protection is enabled. Optional. Read-only.
     * @param bool|null $value Value to set for the realTimeProtectionEnabled property.
    */
    public function setRealTimeProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('realTimeProtectionEnabled', $value);
    }

    /**
     * Sets the rebootRequired property value. A flag indicating whether a reboot is required. Optional. Read-only.
     * @param bool|null $value Value to set for the rebootRequired property.
    */
    public function setRebootRequired(?bool $value): void {
        $this->getBackingStore()->set('rebootRequired', $value);
    }

    /**
     * Sets the signatureUpdateOverdue property value. A flag indicating whether an signature update is overdue. Optional. Read-only.
     * @param bool|null $value Value to set for the signatureUpdateOverdue property.
    */
    public function setSignatureUpdateOverdue(?bool $value): void {
        $this->getBackingStore()->set('signatureUpdateOverdue', $value);
    }

    /**
     * Sets the signatureVersion property value. The signature version for the managed device. Optional. Read-only.
     * @param string|null $value Value to set for the signatureVersion property.
    */
    public function setSignatureVersion(?string $value): void {
        $this->getBackingStore()->set('signatureVersion', $value);
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value): void {
        $this->getBackingStore()->set('tenantDisplayName', $value);
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

}
