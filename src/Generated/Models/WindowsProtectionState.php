<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
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
        $this->setOdataType('#microsoft.graph.windowsProtectionState');
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
        return $this->getBackingStore()->get('antiMalwareVersion');
    }

    /**
     * Gets the detectedMalwareState property value. Device malware list
     * @return array<WindowsDeviceMalwareState>|null
    */
    public function getDetectedMalwareState(): ?array {
        return $this->getBackingStore()->get('detectedMalwareState');
    }

    /**
     * Gets the deviceState property value. Computer's state (like clean or pending full scan or pending reboot etc). Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical.
     * @return WindowsDeviceHealthState|null
    */
    public function getDeviceState(): ?WindowsDeviceHealthState {
        return $this->getBackingStore()->get('deviceState');
    }

    /**
     * Gets the engineVersion property value. Current endpoint protection engine's version
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
            'detectedMalwareState' => fn(ParseNode $n) => $o->setDetectedMalwareState($n->getCollectionOfObjectValues([WindowsDeviceMalwareState::class, 'createFromDiscriminatorValue'])),
            'deviceState' => fn(ParseNode $n) => $o->setDeviceState($n->getEnumValue(WindowsDeviceHealthState::class)),
            'engineVersion' => fn(ParseNode $n) => $o->setEngineVersion($n->getStringValue()),
            'fullScanOverdue' => fn(ParseNode $n) => $o->setFullScanOverdue($n->getBooleanValue()),
            'fullScanRequired' => fn(ParseNode $n) => $o->setFullScanRequired($n->getBooleanValue()),
            'isVirtualMachine' => fn(ParseNode $n) => $o->setIsVirtualMachine($n->getBooleanValue()),
            'lastFullScanDateTime' => fn(ParseNode $n) => $o->setLastFullScanDateTime($n->getDateTimeValue()),
            'lastFullScanSignatureVersion' => fn(ParseNode $n) => $o->setLastFullScanSignatureVersion($n->getStringValue()),
            'lastQuickScanDateTime' => fn(ParseNode $n) => $o->setLastQuickScanDateTime($n->getDateTimeValue()),
            'lastQuickScanSignatureVersion' => fn(ParseNode $n) => $o->setLastQuickScanSignatureVersion($n->getStringValue()),
            'lastReportedDateTime' => fn(ParseNode $n) => $o->setLastReportedDateTime($n->getDateTimeValue()),
            'malwareProtectionEnabled' => fn(ParseNode $n) => $o->setMalwareProtectionEnabled($n->getBooleanValue()),
            'networkInspectionSystemEnabled' => fn(ParseNode $n) => $o->setNetworkInspectionSystemEnabled($n->getBooleanValue()),
            'productStatus' => fn(ParseNode $n) => $o->setProductStatus($n->getEnumValue(WindowsDefenderProductStatus::class)),
            'quickScanOverdue' => fn(ParseNode $n) => $o->setQuickScanOverdue($n->getBooleanValue()),
            'realTimeProtectionEnabled' => fn(ParseNode $n) => $o->setRealTimeProtectionEnabled($n->getBooleanValue()),
            'rebootRequired' => fn(ParseNode $n) => $o->setRebootRequired($n->getBooleanValue()),
            'signatureUpdateOverdue' => fn(ParseNode $n) => $o->setSignatureUpdateOverdue($n->getBooleanValue()),
            'signatureVersion' => fn(ParseNode $n) => $o->setSignatureVersion($n->getStringValue()),
            'tamperProtectionEnabled' => fn(ParseNode $n) => $o->setTamperProtectionEnabled($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the fullScanOverdue property value. Full scan overdue or not?
     * @return bool|null
    */
    public function getFullScanOverdue(): ?bool {
        return $this->getBackingStore()->get('fullScanOverdue');
    }

    /**
     * Gets the fullScanRequired property value. Full scan required or not?
     * @return bool|null
    */
    public function getFullScanRequired(): ?bool {
        return $this->getBackingStore()->get('fullScanRequired');
    }

    /**
     * Gets the isVirtualMachine property value. Indicates whether the device is a virtual machine.
     * @return bool|null
    */
    public function getIsVirtualMachine(): ?bool {
        return $this->getBackingStore()->get('isVirtualMachine');
    }

    /**
     * Gets the lastFullScanDateTime property value. Last quick scan datetime
     * @return DateTime|null
    */
    public function getLastFullScanDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastFullScanDateTime');
    }

    /**
     * Gets the lastFullScanSignatureVersion property value. Last full scan signature version
     * @return string|null
    */
    public function getLastFullScanSignatureVersion(): ?string {
        return $this->getBackingStore()->get('lastFullScanSignatureVersion');
    }

    /**
     * Gets the lastQuickScanDateTime property value. Last quick scan datetime
     * @return DateTime|null
    */
    public function getLastQuickScanDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastQuickScanDateTime');
    }

    /**
     * Gets the lastQuickScanSignatureVersion property value. Last quick scan signature version
     * @return string|null
    */
    public function getLastQuickScanSignatureVersion(): ?string {
        return $this->getBackingStore()->get('lastQuickScanSignatureVersion');
    }

    /**
     * Gets the lastReportedDateTime property value. Last device health status reported time
     * @return DateTime|null
    */
    public function getLastReportedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastReportedDateTime');
    }

    /**
     * Gets the malwareProtectionEnabled property value. Anti malware is enabled or not
     * @return bool|null
    */
    public function getMalwareProtectionEnabled(): ?bool {
        return $this->getBackingStore()->get('malwareProtectionEnabled');
    }

    /**
     * Gets the networkInspectionSystemEnabled property value. Network inspection system enabled or not?
     * @return bool|null
    */
    public function getNetworkInspectionSystemEnabled(): ?bool {
        return $this->getBackingStore()->get('networkInspectionSystemEnabled');
    }

    /**
     * Gets the productStatus property value. Product Status of Windows Defender Antivirus. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall.
     * @return WindowsDefenderProductStatus|null
    */
    public function getProductStatus(): ?WindowsDefenderProductStatus {
        return $this->getBackingStore()->get('productStatus');
    }

    /**
     * Gets the quickScanOverdue property value. Quick scan overdue or not?
     * @return bool|null
    */
    public function getQuickScanOverdue(): ?bool {
        return $this->getBackingStore()->get('quickScanOverdue');
    }

    /**
     * Gets the realTimeProtectionEnabled property value. Real time protection is enabled or not?
     * @return bool|null
    */
    public function getRealTimeProtectionEnabled(): ?bool {
        return $this->getBackingStore()->get('realTimeProtectionEnabled');
    }

    /**
     * Gets the rebootRequired property value. Reboot required or not?
     * @return bool|null
    */
    public function getRebootRequired(): ?bool {
        return $this->getBackingStore()->get('rebootRequired');
    }

    /**
     * Gets the signatureUpdateOverdue property value. Signature out of date or not?
     * @return bool|null
    */
    public function getSignatureUpdateOverdue(): ?bool {
        return $this->getBackingStore()->get('signatureUpdateOverdue');
    }

    /**
     * Gets the signatureVersion property value. Current malware definitions version
     * @return string|null
    */
    public function getSignatureVersion(): ?string {
        return $this->getBackingStore()->get('signatureVersion');
    }

    /**
     * Gets the tamperProtectionEnabled property value. Indicates whether the Windows Defender tamper protection feature is enabled.
     * @return bool|null
    */
    public function getTamperProtectionEnabled(): ?bool {
        return $this->getBackingStore()->get('tamperProtectionEnabled');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('antiMalwareVersion', $this->getAntiMalwareVersion());
        $writer->writeCollectionOfObjectValues('detectedMalwareState', $this->getDetectedMalwareState());
        $writer->writeEnumValue('deviceState', $this->getDeviceState());
        $writer->writeStringValue('engineVersion', $this->getEngineVersion());
        $writer->writeBooleanValue('fullScanOverdue', $this->getFullScanOverdue());
        $writer->writeBooleanValue('fullScanRequired', $this->getFullScanRequired());
        $writer->writeBooleanValue('isVirtualMachine', $this->getIsVirtualMachine());
        $writer->writeDateTimeValue('lastFullScanDateTime', $this->getLastFullScanDateTime());
        $writer->writeStringValue('lastFullScanSignatureVersion', $this->getLastFullScanSignatureVersion());
        $writer->writeDateTimeValue('lastQuickScanDateTime', $this->getLastQuickScanDateTime());
        $writer->writeStringValue('lastQuickScanSignatureVersion', $this->getLastQuickScanSignatureVersion());
        $writer->writeDateTimeValue('lastReportedDateTime', $this->getLastReportedDateTime());
        $writer->writeBooleanValue('malwareProtectionEnabled', $this->getMalwareProtectionEnabled());
        $writer->writeBooleanValue('networkInspectionSystemEnabled', $this->getNetworkInspectionSystemEnabled());
        $writer->writeEnumValue('productStatus', $this->getProductStatus());
        $writer->writeBooleanValue('quickScanOverdue', $this->getQuickScanOverdue());
        $writer->writeBooleanValue('realTimeProtectionEnabled', $this->getRealTimeProtectionEnabled());
        $writer->writeBooleanValue('rebootRequired', $this->getRebootRequired());
        $writer->writeBooleanValue('signatureUpdateOverdue', $this->getSignatureUpdateOverdue());
        $writer->writeStringValue('signatureVersion', $this->getSignatureVersion());
        $writer->writeBooleanValue('tamperProtectionEnabled', $this->getTamperProtectionEnabled());
    }

    /**
     * Sets the antiMalwareVersion property value. Current anti malware version
     *  @param string|null $value Value to set for the antiMalwareVersion property.
    */
    public function setAntiMalwareVersion(?string $value): void {
        $this->getBackingStore()->set('antiMalwareVersion', $value);
    }

    /**
     * Sets the detectedMalwareState property value. Device malware list
     *  @param array<WindowsDeviceMalwareState>|null $value Value to set for the detectedMalwareState property.
    */
    public function setDetectedMalwareState(?array $value): void {
        $this->getBackingStore()->set('detectedMalwareState', $value);
    }

    /**
     * Sets the deviceState property value. Computer's state (like clean or pending full scan or pending reboot etc). Possible values are: clean, fullScanPending, rebootPending, manualStepsPending, offlineScanPending, critical.
     *  @param WindowsDeviceHealthState|null $value Value to set for the deviceState property.
    */
    public function setDeviceState(?WindowsDeviceHealthState $value): void {
        $this->getBackingStore()->set('deviceState', $value);
    }

    /**
     * Sets the engineVersion property value. Current endpoint protection engine's version
     *  @param string|null $value Value to set for the engineVersion property.
    */
    public function setEngineVersion(?string $value): void {
        $this->getBackingStore()->set('engineVersion', $value);
    }

    /**
     * Sets the fullScanOverdue property value. Full scan overdue or not?
     *  @param bool|null $value Value to set for the fullScanOverdue property.
    */
    public function setFullScanOverdue(?bool $value): void {
        $this->getBackingStore()->set('fullScanOverdue', $value);
    }

    /**
     * Sets the fullScanRequired property value. Full scan required or not?
     *  @param bool|null $value Value to set for the fullScanRequired property.
    */
    public function setFullScanRequired(?bool $value): void {
        $this->getBackingStore()->set('fullScanRequired', $value);
    }

    /**
     * Sets the isVirtualMachine property value. Indicates whether the device is a virtual machine.
     *  @param bool|null $value Value to set for the isVirtualMachine property.
    */
    public function setIsVirtualMachine(?bool $value): void {
        $this->getBackingStore()->set('isVirtualMachine', $value);
    }

    /**
     * Sets the lastFullScanDateTime property value. Last quick scan datetime
     *  @param DateTime|null $value Value to set for the lastFullScanDateTime property.
    */
    public function setLastFullScanDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastFullScanDateTime', $value);
    }

    /**
     * Sets the lastFullScanSignatureVersion property value. Last full scan signature version
     *  @param string|null $value Value to set for the lastFullScanSignatureVersion property.
    */
    public function setLastFullScanSignatureVersion(?string $value): void {
        $this->getBackingStore()->set('lastFullScanSignatureVersion', $value);
    }

    /**
     * Sets the lastQuickScanDateTime property value. Last quick scan datetime
     *  @param DateTime|null $value Value to set for the lastQuickScanDateTime property.
    */
    public function setLastQuickScanDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastQuickScanDateTime', $value);
    }

    /**
     * Sets the lastQuickScanSignatureVersion property value. Last quick scan signature version
     *  @param string|null $value Value to set for the lastQuickScanSignatureVersion property.
    */
    public function setLastQuickScanSignatureVersion(?string $value): void {
        $this->getBackingStore()->set('lastQuickScanSignatureVersion', $value);
    }

    /**
     * Sets the lastReportedDateTime property value. Last device health status reported time
     *  @param DateTime|null $value Value to set for the lastReportedDateTime property.
    */
    public function setLastReportedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastReportedDateTime', $value);
    }

    /**
     * Sets the malwareProtectionEnabled property value. Anti malware is enabled or not
     *  @param bool|null $value Value to set for the malwareProtectionEnabled property.
    */
    public function setMalwareProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('malwareProtectionEnabled', $value);
    }

    /**
     * Sets the networkInspectionSystemEnabled property value. Network inspection system enabled or not?
     *  @param bool|null $value Value to set for the networkInspectionSystemEnabled property.
    */
    public function setNetworkInspectionSystemEnabled(?bool $value): void {
        $this->getBackingStore()->set('networkInspectionSystemEnabled', $value);
    }

    /**
     * Sets the productStatus property value. Product Status of Windows Defender Antivirus. Possible values are: noStatus, serviceNotRunning, serviceStartedWithoutMalwareProtection, pendingFullScanDueToThreatAction, pendingRebootDueToThreatAction, pendingManualStepsDueToThreatAction, avSignaturesOutOfDate, asSignaturesOutOfDate, noQuickScanHappenedForSpecifiedPeriod, noFullScanHappenedForSpecifiedPeriod, systemInitiatedScanInProgress, systemInitiatedCleanInProgress, samplesPendingSubmission, productRunningInEvaluationMode, productRunningInNonGenuineMode, productExpired, offlineScanRequired, serviceShutdownAsPartOfSystemShutdown, threatRemediationFailedCritically, threatRemediationFailedNonCritically, noStatusFlagsSet, platformOutOfDate, platformUpdateInProgress, platformAboutToBeOutdated, signatureOrPlatformEndOfLifeIsPastOrIsImpending, windowsSModeSignaturesInUseOnNonWin10SInstall.
     *  @param WindowsDefenderProductStatus|null $value Value to set for the productStatus property.
    */
    public function setProductStatus(?WindowsDefenderProductStatus $value): void {
        $this->getBackingStore()->set('productStatus', $value);
    }

    /**
     * Sets the quickScanOverdue property value. Quick scan overdue or not?
     *  @param bool|null $value Value to set for the quickScanOverdue property.
    */
    public function setQuickScanOverdue(?bool $value): void {
        $this->getBackingStore()->set('quickScanOverdue', $value);
    }

    /**
     * Sets the realTimeProtectionEnabled property value. Real time protection is enabled or not?
     *  @param bool|null $value Value to set for the realTimeProtectionEnabled property.
    */
    public function setRealTimeProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('realTimeProtectionEnabled', $value);
    }

    /**
     * Sets the rebootRequired property value. Reboot required or not?
     *  @param bool|null $value Value to set for the rebootRequired property.
    */
    public function setRebootRequired(?bool $value): void {
        $this->getBackingStore()->set('rebootRequired', $value);
    }

    /**
     * Sets the signatureUpdateOverdue property value. Signature out of date or not?
     *  @param bool|null $value Value to set for the signatureUpdateOverdue property.
    */
    public function setSignatureUpdateOverdue(?bool $value): void {
        $this->getBackingStore()->set('signatureUpdateOverdue', $value);
    }

    /**
     * Sets the signatureVersion property value. Current malware definitions version
     *  @param string|null $value Value to set for the signatureVersion property.
    */
    public function setSignatureVersion(?string $value): void {
        $this->getBackingStore()->set('signatureVersion', $value);
    }

    /**
     * Sets the tamperProtectionEnabled property value. Indicates whether the Windows Defender tamper protection feature is enabled.
     *  @param bool|null $value Value to set for the tamperProtectionEnabled property.
    */
    public function setTamperProtectionEnabled(?bool $value): void {
        $this->getBackingStore()->set('tamperProtectionEnabled', $value);
    }

}
