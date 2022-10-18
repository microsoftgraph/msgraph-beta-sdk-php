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
     * @var string|null $antiMalwareVersion The anti-malware version for the managed device. Optional. Read-only.
    */
    private ?string $antiMalwareVersion = null;
    
    /**
     * @var bool|null $attentionRequired A flag indicating whether attention is required for the managed device. Optional. Read-only.
    */
    private ?bool $attentionRequired = null;
    
    /**
     * @var bool|null $deviceDeleted A flag indicating whether the managed device has been deleted. Optional. Read-only.
    */
    private ?bool $deviceDeleted = null;
    
    /**
     * @var DateTime|null $devicePropertyRefreshDateTime The date and time the device property has been refreshed. Optional. Read-only.
    */
    private ?DateTime $devicePropertyRefreshDateTime = null;
    
    /**
     * @var string|null $engineVersion The anti-virus engine version for the managed device. Optional. Read-only.
    */
    private ?string $engineVersion = null;
    
    /**
     * @var bool|null $fullScanOverdue A flag indicating whether quick scan is overdue for the managed device. Optional. Read-only.
    */
    private ?bool $fullScanOverdue = null;
    
    /**
     * @var bool|null $fullScanRequired A flag indicating whether full scan is overdue for the managed device. Optional. Read-only.
    */
    private ?bool $fullScanRequired = null;
    
    /**
     * @var DateTime|null $lastFullScanDateTime The date and time a full scan was completed. Optional. Read-only.
    */
    private ?DateTime $lastFullScanDateTime = null;
    
    /**
     * @var string|null $lastFullScanSignatureVersion The version anti-malware version used to perform the last full scan. Optional. Read-only.
    */
    private ?string $lastFullScanSignatureVersion = null;
    
    /**
     * @var DateTime|null $lastQuickScanDateTime The date and time a quick scan was completed. Optional. Read-only.
    */
    private ?DateTime $lastQuickScanDateTime = null;
    
    /**
     * @var string|null $lastQuickScanSignatureVersion The version anti-malware version used to perform the last full scan. Optional. Read-only.
    */
    private ?string $lastQuickScanSignatureVersion = null;
    
    /**
     * @var DateTime|null $lastRefreshedDateTime Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
    */
    private ?DateTime $lastRefreshedDateTime = null;
    
    /**
     * @var DateTime|null $lastReportedDateTime The date and time the protection state was last reported for the managed device. Optional. Read-only.
    */
    private ?DateTime $lastReportedDateTime = null;
    
    /**
     * @var bool|null $malwareProtectionEnabled A flag indicating whether malware protection is enabled for the managed device. Optional. Read-only.
    */
    private ?bool $malwareProtectionEnabled = null;
    
    /**
     * @var string|null $managedDeviceHealthState The health state for the managed device. Optional. Read-only.
    */
    private ?string $managedDeviceHealthState = null;
    
    /**
     * @var string|null $managedDeviceId The unique identifier for the managed device. Optional. Read-only.
    */
    private ?string $managedDeviceId = null;
    
    /**
     * @var string|null $managedDeviceName The display name for the managed device. Optional. Read-only.
    */
    private ?string $managedDeviceName = null;
    
    /**
     * @var bool|null $networkInspectionSystemEnabled A flag indicating whether the network inspection system is enabled. Optional. Read-only.
    */
    private ?bool $networkInspectionSystemEnabled = null;
    
    /**
     * @var bool|null $quickScanOverdue A flag indicating weather a quick scan is overdue. Optional. Read-only.
    */
    private ?bool $quickScanOverdue = null;
    
    /**
     * @var bool|null $realTimeProtectionEnabled A flag indicating whether real time protection is enabled. Optional. Read-only.
    */
    private ?bool $realTimeProtectionEnabled = null;
    
    /**
     * @var bool|null $rebootRequired A flag indicating whether a reboot is required. Optional. Read-only.
    */
    private ?bool $rebootRequired = null;
    
    /**
     * @var bool|null $signatureUpdateOverdue A flag indicating whether an signature update is overdue. Optional. Read-only.
    */
    private ?bool $signatureUpdateOverdue = null;
    
    /**
     * @var string|null $signatureVersion The signature version for the managed device. Optional. Read-only.
    */
    private ?string $signatureVersion = null;
    
    /**
     * @var string|null $tenantDisplayName The display name for the managed tenant. Optional. Read-only.
    */
    private ?string $tenantDisplayName = null;
    
    /**
     * @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new windowsProtectionState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.windowsProtectionState');
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
        return $this->antiMalwareVersion;
    }

    /**
     * Gets the attentionRequired property value. A flag indicating whether attention is required for the managed device. Optional. Read-only.
     * @return bool|null
    */
    public function getAttentionRequired(): ?bool {
        return $this->attentionRequired;
    }

    /**
     * Gets the deviceDeleted property value. A flag indicating whether the managed device has been deleted. Optional. Read-only.
     * @return bool|null
    */
    public function getDeviceDeleted(): ?bool {
        return $this->deviceDeleted;
    }

    /**
     * Gets the devicePropertyRefreshDateTime property value. The date and time the device property has been refreshed. Optional. Read-only.
     * @return DateTime|null
    */
    public function getDevicePropertyRefreshDateTime(): ?DateTime {
        return $this->devicePropertyRefreshDateTime;
    }

    /**
     * Gets the engineVersion property value. The anti-virus engine version for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getEngineVersion(): ?string {
        return $this->engineVersion;
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
        return $this->fullScanOverdue;
    }

    /**
     * Gets the fullScanRequired property value. A flag indicating whether full scan is overdue for the managed device. Optional. Read-only.
     * @return bool|null
    */
    public function getFullScanRequired(): ?bool {
        return $this->fullScanRequired;
    }

    /**
     * Gets the lastFullScanDateTime property value. The date and time a full scan was completed. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastFullScanDateTime(): ?DateTime {
        return $this->lastFullScanDateTime;
    }

    /**
     * Gets the lastFullScanSignatureVersion property value. The version anti-malware version used to perform the last full scan. Optional. Read-only.
     * @return string|null
    */
    public function getLastFullScanSignatureVersion(): ?string {
        return $this->lastFullScanSignatureVersion;
    }

    /**
     * Gets the lastQuickScanDateTime property value. The date and time a quick scan was completed. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastQuickScanDateTime(): ?DateTime {
        return $this->lastQuickScanDateTime;
    }

    /**
     * Gets the lastQuickScanSignatureVersion property value. The version anti-malware version used to perform the last full scan. Optional. Read-only.
     * @return string|null
    */
    public function getLastQuickScanSignatureVersion(): ?string {
        return $this->lastQuickScanSignatureVersion;
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->lastRefreshedDateTime;
    }

    /**
     * Gets the lastReportedDateTime property value. The date and time the protection state was last reported for the managed device. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        return $this->lastReportedDateTime;
    }

    /**
     * Gets the malwareProtectionEnabled property value. A flag indicating whether malware protection is enabled for the managed device. Optional. Read-only.
     * @return bool|null
    */
    public function getMalwareProtectionEnabled(): ?bool {
        return $this->malwareProtectionEnabled;
    }

    /**
     * Gets the managedDeviceHealthState property value. The health state for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceHealthState(): ?string {
        return $this->managedDeviceHealthState;
    }

    /**
     * Gets the managedDeviceId property value. The unique identifier for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceId(): ?string {
        return $this->managedDeviceId;
    }

    /**
     * Gets the managedDeviceName property value. The display name for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getManagedDeviceName(): ?string {
        return $this->managedDeviceName;
    }

    /**
     * Gets the networkInspectionSystemEnabled property value. A flag indicating whether the network inspection system is enabled. Optional. Read-only.
     * @return bool|null
    */
    public function getNetworkInspectionSystemEnabled(): ?bool {
        return $this->networkInspectionSystemEnabled;
    }

    /**
     * Gets the quickScanOverdue property value. A flag indicating weather a quick scan is overdue. Optional. Read-only.
     * @return bool|null
    */
    public function getQuickScanOverdue(): ?bool {
        return $this->quickScanOverdue;
    }

    /**
     * Gets the realTimeProtectionEnabled property value. A flag indicating whether real time protection is enabled. Optional. Read-only.
     * @return bool|null
    */
    public function getRealTimeProtectionEnabled(): ?bool {
        return $this->realTimeProtectionEnabled;
    }

    /**
     * Gets the rebootRequired property value. A flag indicating whether a reboot is required. Optional. Read-only.
     * @return bool|null
    */
    public function getRebootRequired(): ?bool {
        return $this->rebootRequired;
    }

    /**
     * Gets the signatureUpdateOverdue property value. A flag indicating whether an signature update is overdue. Optional. Read-only.
     * @return bool|null
    */
    public function getSignatureUpdateOverdue(): ?bool {
        return $this->signatureUpdateOverdue;
    }

    /**
     * Gets the signatureVersion property value. The signature version for the managed device. Optional. Read-only.
     * @return string|null
    */
    public function getSignatureVersion(): ?string {
        return $this->signatureVersion;
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        return $this->tenantDisplayName;
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('antiMalwareVersion', $this->antiMalwareVersion);
        $writer->writeBooleanValue('attentionRequired', $this->attentionRequired);
        $writer->writeBooleanValue('deviceDeleted', $this->deviceDeleted);
        $writer->writeDateTimeValue('devicePropertyRefreshDateTime', $this->devicePropertyRefreshDateTime);
        $writer->writeStringValue('engineVersion', $this->engineVersion);
        $writer->writeBooleanValue('fullScanOverdue', $this->fullScanOverdue);
        $writer->writeBooleanValue('fullScanRequired', $this->fullScanRequired);
        $writer->writeDateTimeValue('lastFullScanDateTime', $this->lastFullScanDateTime);
        $writer->writeStringValue('lastFullScanSignatureVersion', $this->lastFullScanSignatureVersion);
        $writer->writeDateTimeValue('lastQuickScanDateTime', $this->lastQuickScanDateTime);
        $writer->writeStringValue('lastQuickScanSignatureVersion', $this->lastQuickScanSignatureVersion);
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->lastRefreshedDateTime);
        $writer->writeDateTimeValue('lastReportedDateTime', $this->lastReportedDateTime);
        $writer->writeBooleanValue('malwareProtectionEnabled', $this->malwareProtectionEnabled);
        $writer->writeStringValue('managedDeviceHealthState', $this->managedDeviceHealthState);
        $writer->writeStringValue('managedDeviceId', $this->managedDeviceId);
        $writer->writeStringValue('managedDeviceName', $this->managedDeviceName);
        $writer->writeBooleanValue('networkInspectionSystemEnabled', $this->networkInspectionSystemEnabled);
        $writer->writeBooleanValue('quickScanOverdue', $this->quickScanOverdue);
        $writer->writeBooleanValue('realTimeProtectionEnabled', $this->realTimeProtectionEnabled);
        $writer->writeBooleanValue('rebootRequired', $this->rebootRequired);
        $writer->writeBooleanValue('signatureUpdateOverdue', $this->signatureUpdateOverdue);
        $writer->writeStringValue('signatureVersion', $this->signatureVersion);
        $writer->writeStringValue('tenantDisplayName', $this->tenantDisplayName);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the antiMalwareVersion property value. The anti-malware version for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the antiMalwareVersion property.
    */
    public function setAntiMalwareVersion(?string $value ): void {
        $this->antiMalwareVersion = $value;
    }

    /**
     * Sets the attentionRequired property value. A flag indicating whether attention is required for the managed device. Optional. Read-only.
     *  @param bool|null $value Value to set for the attentionRequired property.
    */
    public function setAttentionRequired(?bool $value ): void {
        $this->attentionRequired = $value;
    }

    /**
     * Sets the deviceDeleted property value. A flag indicating whether the managed device has been deleted. Optional. Read-only.
     *  @param bool|null $value Value to set for the deviceDeleted property.
    */
    public function setDeviceDeleted(?bool $value ): void {
        $this->deviceDeleted = $value;
    }

    /**
     * Sets the devicePropertyRefreshDateTime property value. The date and time the device property has been refreshed. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the devicePropertyRefreshDateTime property.
    */
    public function setDevicePropertyRefreshDateTime(?DateTime $value ): void {
        $this->devicePropertyRefreshDateTime = $value;
    }

    /**
     * Sets the engineVersion property value. The anti-virus engine version for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the engineVersion property.
    */
    public function setEngineVersion(?string $value ): void {
        $this->engineVersion = $value;
    }

    /**
     * Sets the fullScanOverdue property value. A flag indicating whether quick scan is overdue for the managed device. Optional. Read-only.
     *  @param bool|null $value Value to set for the fullScanOverdue property.
    */
    public function setFullScanOverdue(?bool $value ): void {
        $this->fullScanOverdue = $value;
    }

    /**
     * Sets the fullScanRequired property value. A flag indicating whether full scan is overdue for the managed device. Optional. Read-only.
     *  @param bool|null $value Value to set for the fullScanRequired property.
    */
    public function setFullScanRequired(?bool $value ): void {
        $this->fullScanRequired = $value;
    }

    /**
     * Sets the lastFullScanDateTime property value. The date and time a full scan was completed. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastFullScanDateTime property.
    */
    public function setLastFullScanDateTime(?DateTime $value ): void {
        $this->lastFullScanDateTime = $value;
    }

    /**
     * Sets the lastFullScanSignatureVersion property value. The version anti-malware version used to perform the last full scan. Optional. Read-only.
     *  @param string|null $value Value to set for the lastFullScanSignatureVersion property.
    */
    public function setLastFullScanSignatureVersion(?string $value ): void {
        $this->lastFullScanSignatureVersion = $value;
    }

    /**
     * Sets the lastQuickScanDateTime property value. The date and time a quick scan was completed. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastQuickScanDateTime property.
    */
    public function setLastQuickScanDateTime(?DateTime $value ): void {
        $this->lastQuickScanDateTime = $value;
    }

    /**
     * Sets the lastQuickScanSignatureVersion property value. The version anti-malware version used to perform the last full scan. Optional. Read-only.
     *  @param string|null $value Value to set for the lastQuickScanSignatureVersion property.
    */
    public function setLastQuickScanSignatureVersion(?string $value ): void {
        $this->lastQuickScanSignatureVersion = $value;
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value ): void {
        $this->lastRefreshedDateTime = $value;
    }

    /**
     * Sets the lastReportedDateTime property value. The date and time the protection state was last reported for the managed device. Optional. Read-only.
     *  @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value ): void {
        $this->lastReportedDateTime = $value;
    }

    /**
     * Sets the malwareProtectionEnabled property value. A flag indicating whether malware protection is enabled for the managed device. Optional. Read-only.
     *  @param bool|null $value Value to set for the malwareProtectionEnabled property.
    */
    public function setMalwareProtectionEnabled(?bool $value ): void {
        $this->malwareProtectionEnabled = $value;
    }

    /**
     * Sets the managedDeviceHealthState property value. The health state for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the managedDeviceHealthState property.
    */
    public function setManagedDeviceHealthState(?string $value ): void {
        $this->managedDeviceHealthState = $value;
    }

    /**
     * Sets the managedDeviceId property value. The unique identifier for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the managedDeviceId property.
    */
    public function setManagedDeviceId(?string $value ): void {
        $this->managedDeviceId = $value;
    }

    /**
     * Sets the managedDeviceName property value. The display name for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the managedDeviceName property.
    */
    public function setManagedDeviceName(?string $value ): void {
        $this->managedDeviceName = $value;
    }

    /**
     * Sets the networkInspectionSystemEnabled property value. A flag indicating whether the network inspection system is enabled. Optional. Read-only.
     *  @param bool|null $value Value to set for the networkInspectionSystemEnabled property.
    */
    public function setNetworkInspectionSystemEnabled(?bool $value ): void {
        $this->networkInspectionSystemEnabled = $value;
    }

    /**
     * Sets the quickScanOverdue property value. A flag indicating weather a quick scan is overdue. Optional. Read-only.
     *  @param bool|null $value Value to set for the quickScanOverdue property.
    */
    public function setQuickScanOverdue(?bool $value ): void {
        $this->quickScanOverdue = $value;
    }

    /**
     * Sets the realTimeProtectionEnabled property value. A flag indicating whether real time protection is enabled. Optional. Read-only.
     *  @param bool|null $value Value to set for the realTimeProtectionEnabled property.
    */
    public function setRealTimeProtectionEnabled(?bool $value ): void {
        $this->realTimeProtectionEnabled = $value;
    }

    /**
     * Sets the rebootRequired property value. A flag indicating whether a reboot is required. Optional. Read-only.
     *  @param bool|null $value Value to set for the rebootRequired property.
    */
    public function setRebootRequired(?bool $value ): void {
        $this->rebootRequired = $value;
    }

    /**
     * Sets the signatureUpdateOverdue property value. A flag indicating whether an signature update is overdue. Optional. Read-only.
     *  @param bool|null $value Value to set for the signatureUpdateOverdue property.
    */
    public function setSignatureUpdateOverdue(?bool $value ): void {
        $this->signatureUpdateOverdue = $value;
    }

    /**
     * Sets the signatureVersion property value. The signature version for the managed device. Optional. Read-only.
     *  @param string|null $value Value to set for the signatureVersion property.
    */
    public function setSignatureVersion(?string $value ): void {
        $this->signatureVersion = $value;
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value ): void {
        $this->tenantDisplayName = $value;
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
