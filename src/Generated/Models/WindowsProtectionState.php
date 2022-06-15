<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsProtectionState extends Entity implements Parsable 
{
    /**
     * @var string|null $antiMalwareVersion Current anti malware version
    */
    private ?string $antiMalwareVersion = null;
    
    /**
     * @var array<WindowsDeviceMalwareState>|null $detectedMalwareState Device malware list
    */
    private ?array $detectedMalwareState = null;
    
    /**
     * @var WindowsDeviceHealthState|null $deviceState Computer's state (like clean or pending full scan or pending reboot etc). Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical.
    */
    private ?WindowsDeviceHealthState $deviceState = null;
    
    /**
     * @var string|null $engineVersion Current endpoint protection engine's version
    */
    private ?string $engineVersion = null;
    
    /**
     * @var bool|null $fullScanOverdue Full scan overdue or not?
    */
    private ?bool $fullScanOverdue = null;
    
    /**
     * @var bool|null $fullScanRequired Full scan required or not?
    */
    private ?bool $fullScanRequired = null;
    
    /**
     * @var bool|null $isVirtualMachine Indicates whether the device is a virtual machine.
    */
    private ?bool $isVirtualMachine = null;
    
    /**
     * @var DateTime|null $lastFullScanDateTime Last quick scan datetime
    */
    private ?DateTime $lastFullScanDateTime = null;
    
    /**
     * @var string|null $lastFullScanSignatureVersion Last full scan signature version
    */
    private ?string $lastFullScanSignatureVersion = null;
    
    /**
     * @var DateTime|null $lastQuickScanDateTime Last quick scan datetime
    */
    private ?DateTime $lastQuickScanDateTime = null;
    
    /**
     * @var string|null $lastQuickScanSignatureVersion Last quick scan signature version
    */
    private ?string $lastQuickScanSignatureVersion = null;
    
    /**
     * @var DateTime|null $lastReportedDateTime Last device health status reported time
    */
    private ?DateTime $lastReportedDateTime = null;
    
    /**
     * @var bool|null $malwareProtectionEnabled Anti malware is enabled or not
    */
    private ?bool $malwareProtectionEnabled = null;
    
    /**
     * @var bool|null $networkInspectionSystemEnabled Network inspection system enabled or not?
    */
    private ?bool $networkInspectionSystemEnabled = null;
    
    /**
     * @var WindowsDefenderProductStatus|null $productStatus Product Status of Windows Defender Antivirus. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall.
    */
    private ?WindowsDefenderProductStatus $productStatus = null;
    
    /**
     * @var bool|null $quickScanOverdue Quick scan overdue or not?
    */
    private ?bool $quickScanOverdue = null;
    
    /**
     * @var bool|null $realTimeProtectionEnabled Real time protection is enabled or not?
    */
    private ?bool $realTimeProtectionEnabled = null;
    
    /**
     * @var bool|null $rebootRequired Reboot required or not?
    */
    private ?bool $rebootRequired = null;
    
    /**
     * @var bool|null $signatureUpdateOverdue Signature out of date or not?
    */
    private ?bool $signatureUpdateOverdue = null;
    
    /**
     * @var string|null $signatureVersion Current malware definitions version
    */
    private ?string $signatureVersion = null;
    
    /**
     * @var bool|null $tamperProtectionEnabled Indicates whether the Windows Defender tamper protection feature is enabled.
    */
    private ?bool $tamperProtectionEnabled = null;
    
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
     * Gets the antiMalwareVersion property value. Current anti malware version
     * @return string|null
    */
    public function getAntiMalwareVersion(): ?string {
        return $this->antiMalwareVersion;
    }

    /**
     * Gets the detectedMalwareState property value. Device malware list
     * @return array<WindowsDeviceMalwareState>|null
    */
    public function getDetectedMalwareState(): ?array {
        return $this->detectedMalwareState;
    }

    /**
     * Gets the deviceState property value. Computer's state (like clean or pending full scan or pending reboot etc). Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical.
     * @return WindowsDeviceHealthState|null
    */
    public function getDeviceState(): ?WindowsDeviceHealthState {
        return $this->deviceState;
    }

    /**
     * Gets the engineVersion property value. Current endpoint protection engine's version
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
            'antiMalwareVersion' => function (ParseNode $n) use ($o) { $o->setAntiMalwareVersion($n->getStringValue()); },
            'detectedMalwareState' => function (ParseNode $n) use ($o) { $o->setDetectedMalwareState($n->getCollectionOfObjectValues(array(WindowsDeviceMalwareState::class, 'createFromDiscriminatorValue'))); },
            'deviceState' => function (ParseNode $n) use ($o) { $o->setDeviceState($n->getEnumValue(WindowsDeviceHealthState::class)); },
            'engineVersion' => function (ParseNode $n) use ($o) { $o->setEngineVersion($n->getStringValue()); },
            'fullScanOverdue' => function (ParseNode $n) use ($o) { $o->setFullScanOverdue($n->getBooleanValue()); },
            'fullScanRequired' => function (ParseNode $n) use ($o) { $o->setFullScanRequired($n->getBooleanValue()); },
            'isVirtualMachine' => function (ParseNode $n) use ($o) { $o->setIsVirtualMachine($n->getBooleanValue()); },
            'lastFullScanDateTime' => function (ParseNode $n) use ($o) { $o->setLastFullScanDateTime($n->getDateTimeValue()); },
            'lastFullScanSignatureVersion' => function (ParseNode $n) use ($o) { $o->setLastFullScanSignatureVersion($n->getStringValue()); },
            'lastQuickScanDateTime' => function (ParseNode $n) use ($o) { $o->setLastQuickScanDateTime($n->getDateTimeValue()); },
            'lastQuickScanSignatureVersion' => function (ParseNode $n) use ($o) { $o->setLastQuickScanSignatureVersion($n->getStringValue()); },
            'lastReportedDateTime' => function (ParseNode $n) use ($o) { $o->setLastReportedDateTime($n->getDateTimeValue()); },
            'malwareProtectionEnabled' => function (ParseNode $n) use ($o) { $o->setMalwareProtectionEnabled($n->getBooleanValue()); },
            'networkInspectionSystemEnabled' => function (ParseNode $n) use ($o) { $o->setNetworkInspectionSystemEnabled($n->getBooleanValue()); },
            'productStatus' => function (ParseNode $n) use ($o) { $o->setProductStatus($n->getEnumValue(WindowsDefenderProductStatus::class)); },
            'quickScanOverdue' => function (ParseNode $n) use ($o) { $o->setQuickScanOverdue($n->getBooleanValue()); },
            'realTimeProtectionEnabled' => function (ParseNode $n) use ($o) { $o->setRealTimeProtectionEnabled($n->getBooleanValue()); },
            'rebootRequired' => function (ParseNode $n) use ($o) { $o->setRebootRequired($n->getBooleanValue()); },
            'signatureUpdateOverdue' => function (ParseNode $n) use ($o) { $o->setSignatureUpdateOverdue($n->getBooleanValue()); },
            'signatureVersion' => function (ParseNode $n) use ($o) { $o->setSignatureVersion($n->getStringValue()); },
            'tamperProtectionEnabled' => function (ParseNode $n) use ($o) { $o->setTamperProtectionEnabled($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the fullScanOverdue property value. Full scan overdue or not?
     * @return bool|null
    */
    public function getFullScanOverdue(): ?bool {
        return $this->fullScanOverdue;
    }

    /**
     * Gets the fullScanRequired property value. Full scan required or not?
     * @return bool|null
    */
    public function getFullScanRequired(): ?bool {
        return $this->fullScanRequired;
    }

    /**
     * Gets the isVirtualMachine property value. Indicates whether the device is a virtual machine.
     * @return bool|null
    */
    public function getIsVirtualMachine(): ?bool {
        return $this->isVirtualMachine;
    }

    /**
     * Gets the lastFullScanDateTime property value. Last quick scan datetime
     * @return DateTime|null
    */
    public function getLastFullScanDateTime(): ?DateTime {
        return $this->lastFullScanDateTime;
    }

    /**
     * Gets the lastFullScanSignatureVersion property value. Last full scan signature version
     * @return string|null
    */
    public function getLastFullScanSignatureVersion(): ?string {
        return $this->lastFullScanSignatureVersion;
    }

    /**
     * Gets the lastQuickScanDateTime property value. Last quick scan datetime
     * @return DateTime|null
    */
    public function getLastQuickScanDateTime(): ?DateTime {
        return $this->lastQuickScanDateTime;
    }

    /**
     * Gets the lastQuickScanSignatureVersion property value. Last quick scan signature version
     * @return string|null
    */
    public function getLastQuickScanSignatureVersion(): ?string {
        return $this->lastQuickScanSignatureVersion;
    }

    /**
     * Gets the lastReportedDateTime property value. Last device health status reported time
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        return $this->lastReportedDateTime;
    }

    /**
     * Gets the malwareProtectionEnabled property value. Anti malware is enabled or not
     * @return bool|null
    */
    public function getMalwareProtectionEnabled(): ?bool {
        return $this->malwareProtectionEnabled;
    }

    /**
     * Gets the networkInspectionSystemEnabled property value. Network inspection system enabled or not?
     * @return bool|null
    */
    public function getNetworkInspectionSystemEnabled(): ?bool {
        return $this->networkInspectionSystemEnabled;
    }

    /**
     * Gets the productStatus property value. Product Status of Windows Defender Antivirus. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall.
     * @return WindowsDefenderProductStatus|null
    */
    public function getProductStatus(): ?WindowsDefenderProductStatus {
        return $this->productStatus;
    }

    /**
     * Gets the quickScanOverdue property value. Quick scan overdue or not?
     * @return bool|null
    */
    public function getQuickScanOverdue(): ?bool {
        return $this->quickScanOverdue;
    }

    /**
     * Gets the realTimeProtectionEnabled property value. Real time protection is enabled or not?
     * @return bool|null
    */
    public function getRealTimeProtectionEnabled(): ?bool {
        return $this->realTimeProtectionEnabled;
    }

    /**
     * Gets the rebootRequired property value. Reboot required or not?
     * @return bool|null
    */
    public function getRebootRequired(): ?bool {
        return $this->rebootRequired;
    }

    /**
     * Gets the signatureUpdateOverdue property value. Signature out of date or not?
     * @return bool|null
    */
    public function getSignatureUpdateOverdue(): ?bool {
        return $this->signatureUpdateOverdue;
    }

    /**
     * Gets the signatureVersion property value. Current malware definitions version
     * @return string|null
    */
    public function getSignatureVersion(): ?string {
        return $this->signatureVersion;
    }

    /**
     * Gets the tamperProtectionEnabled property value. Indicates whether the Windows Defender tamper protection feature is enabled.
     * @return bool|null
    */
    public function getTamperProtectionEnabled(): ?bool {
        return $this->tamperProtectionEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('antiMalwareVersion', $this->antiMalwareVersion);
        $writer->writeCollectionOfObjectValues('detectedMalwareState', $this->detectedMalwareState);
        $writer->writeEnumValue('deviceState', $this->deviceState);
        $writer->writeStringValue('engineVersion', $this->engineVersion);
        $writer->writeBooleanValue('fullScanOverdue', $this->fullScanOverdue);
        $writer->writeBooleanValue('fullScanRequired', $this->fullScanRequired);
        $writer->writeBooleanValue('isVirtualMachine', $this->isVirtualMachine);
        $writer->writeDateTimeValue('lastFullScanDateTime', $this->lastFullScanDateTime);
        $writer->writeStringValue('lastFullScanSignatureVersion', $this->lastFullScanSignatureVersion);
        $writer->writeDateTimeValue('lastQuickScanDateTime', $this->lastQuickScanDateTime);
        $writer->writeStringValue('lastQuickScanSignatureVersion', $this->lastQuickScanSignatureVersion);
        $writer->writeDateTimeValue('lastReportedDateTime', $this->lastReportedDateTime);
        $writer->writeBooleanValue('malwareProtectionEnabled', $this->malwareProtectionEnabled);
        $writer->writeBooleanValue('networkInspectionSystemEnabled', $this->networkInspectionSystemEnabled);
        $writer->writeEnumValue('productStatus', $this->productStatus);
        $writer->writeBooleanValue('quickScanOverdue', $this->quickScanOverdue);
        $writer->writeBooleanValue('realTimeProtectionEnabled', $this->realTimeProtectionEnabled);
        $writer->writeBooleanValue('rebootRequired', $this->rebootRequired);
        $writer->writeBooleanValue('signatureUpdateOverdue', $this->signatureUpdateOverdue);
        $writer->writeStringValue('signatureVersion', $this->signatureVersion);
        $writer->writeBooleanValue('tamperProtectionEnabled', $this->tamperProtectionEnabled);
    }

    /**
     * Sets the antiMalwareVersion property value. Current anti malware version
     *  @param string|null $value Value to set for the antiMalwareVersion property.
    */
    public function setAntiMalwareVersion(?string $value ): void {
        $this->antiMalwareVersion = $value;
    }

    /**
     * Sets the detectedMalwareState property value. Device malware list
     *  @param array<WindowsDeviceMalwareState>|null $value Value to set for the detectedMalwareState property.
    */
    public function setDetectedMalwareState(?array $value ): void {
        $this->detectedMalwareState = $value;
    }

    /**
     * Sets the deviceState property value. Computer's state (like clean or pending full scan or pending reboot etc). Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical.
     *  @param WindowsDeviceHealthState|null $value Value to set for the deviceState property.
    */
    public function setDeviceState(?WindowsDeviceHealthState $value ): void {
        $this->deviceState = $value;
    }

    /**
     * Sets the engineVersion property value. Current endpoint protection engine's version
     *  @param string|null $value Value to set for the engineVersion property.
    */
    public function setEngineVersion(?string $value ): void {
        $this->engineVersion = $value;
    }

    /**
     * Sets the fullScanOverdue property value. Full scan overdue or not?
     *  @param bool|null $value Value to set for the fullScanOverdue property.
    */
    public function setFullScanOverdue(?bool $value ): void {
        $this->fullScanOverdue = $value;
    }

    /**
     * Sets the fullScanRequired property value. Full scan required or not?
     *  @param bool|null $value Value to set for the fullScanRequired property.
    */
    public function setFullScanRequired(?bool $value ): void {
        $this->fullScanRequired = $value;
    }

    /**
     * Sets the isVirtualMachine property value. Indicates whether the device is a virtual machine.
     *  @param bool|null $value Value to set for the isVirtualMachine property.
    */
    public function setIsVirtualMachine(?bool $value ): void {
        $this->isVirtualMachine = $value;
    }

    /**
     * Sets the lastFullScanDateTime property value. Last quick scan datetime
     *  @param DateTime|null $value Value to set for the lastFullScanDateTime property.
    */
    public function setLastFullScanDateTime(?DateTime $value ): void {
        $this->lastFullScanDateTime = $value;
    }

    /**
     * Sets the lastFullScanSignatureVersion property value. Last full scan signature version
     *  @param string|null $value Value to set for the lastFullScanSignatureVersion property.
    */
    public function setLastFullScanSignatureVersion(?string $value ): void {
        $this->lastFullScanSignatureVersion = $value;
    }

    /**
     * Sets the lastQuickScanDateTime property value. Last quick scan datetime
     *  @param DateTime|null $value Value to set for the lastQuickScanDateTime property.
    */
    public function setLastQuickScanDateTime(?DateTime $value ): void {
        $this->lastQuickScanDateTime = $value;
    }

    /**
     * Sets the lastQuickScanSignatureVersion property value. Last quick scan signature version
     *  @param string|null $value Value to set for the lastQuickScanSignatureVersion property.
    */
    public function setLastQuickScanSignatureVersion(?string $value ): void {
        $this->lastQuickScanSignatureVersion = $value;
    }

    /**
     * Sets the lastReportedDateTime property value. Last device health status reported time
     *  @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value ): void {
        $this->lastReportedDateTime = $value;
    }

    /**
     * Sets the malwareProtectionEnabled property value. Anti malware is enabled or not
     *  @param bool|null $value Value to set for the malwareProtectionEnabled property.
    */
    public function setMalwareProtectionEnabled(?bool $value ): void {
        $this->malwareProtectionEnabled = $value;
    }

    /**
     * Sets the networkInspectionSystemEnabled property value. Network inspection system enabled or not?
     *  @param bool|null $value Value to set for the networkInspectionSystemEnabled property.
    */
    public function setNetworkInspectionSystemEnabled(?bool $value ): void {
        $this->networkInspectionSystemEnabled = $value;
    }

    /**
     * Sets the productStatus property value. Product Status of Windows Defender Antivirus. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall.
     *  @param WindowsDefenderProductStatus|null $value Value to set for the productStatus property.
    */
    public function setProductStatus(?WindowsDefenderProductStatus $value ): void {
        $this->productStatus = $value;
    }

    /**
     * Sets the quickScanOverdue property value. Quick scan overdue or not?
     *  @param bool|null $value Value to set for the quickScanOverdue property.
    */
    public function setQuickScanOverdue(?bool $value ): void {
        $this->quickScanOverdue = $value;
    }

    /**
     * Sets the realTimeProtectionEnabled property value. Real time protection is enabled or not?
     *  @param bool|null $value Value to set for the realTimeProtectionEnabled property.
    */
    public function setRealTimeProtectionEnabled(?bool $value ): void {
        $this->realTimeProtectionEnabled = $value;
    }

    /**
     * Sets the rebootRequired property value. Reboot required or not?
     *  @param bool|null $value Value to set for the rebootRequired property.
    */
    public function setRebootRequired(?bool $value ): void {
        $this->rebootRequired = $value;
    }

    /**
     * Sets the signatureUpdateOverdue property value. Signature out of date or not?
     *  @param bool|null $value Value to set for the signatureUpdateOverdue property.
    */
    public function setSignatureUpdateOverdue(?bool $value ): void {
        $this->signatureUpdateOverdue = $value;
    }

    /**
     * Sets the signatureVersion property value. Current malware definitions version
     *  @param string|null $value Value to set for the signatureVersion property.
    */
    public function setSignatureVersion(?string $value ): void {
        $this->signatureVersion = $value;
    }

    /**
     * Sets the tamperProtectionEnabled property value. Indicates whether the Windows Defender tamper protection feature is enabled.
     *  @param bool|null $value Value to set for the tamperProtectionEnabled property.
    */
    public function setTamperProtectionEnabled(?bool $value ): void {
        $this->tamperProtectionEnabled = $value;
    }

}
