<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceHealthScriptRunSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceHealthScriptRunSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptRunSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptRunSummary {
        return new DeviceHealthScriptRunSummary();
    }

    /**
     * Gets the detectionScriptErrorDeviceCount property value. Number of devices on which the detection script execution encountered an error and did not complete
     * @return int|null
    */
    public function getDetectionScriptErrorDeviceCount(): ?int {
        return $this->getBackingStore()->get('detectionScriptErrorDeviceCount');
    }

    /**
     * Gets the detectionScriptNotApplicableDeviceCount property value. Number of devices for which the detection script was not applicable
     * @return int|null
    */
    public function getDetectionScriptNotApplicableDeviceCount(): ?int {
        return $this->getBackingStore()->get('detectionScriptNotApplicableDeviceCount');
    }

    /**
     * Gets the detectionScriptPendingDeviceCount property value. Number of devices which have not yet run the latest version of the device health script
     * @return int|null
    */
    public function getDetectionScriptPendingDeviceCount(): ?int {
        return $this->getBackingStore()->get('detectionScriptPendingDeviceCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detectionScriptErrorDeviceCount' => fn(ParseNode $n) => $o->setDetectionScriptErrorDeviceCount($n->getIntegerValue()),
            'detectionScriptNotApplicableDeviceCount' => fn(ParseNode $n) => $o->setDetectionScriptNotApplicableDeviceCount($n->getIntegerValue()),
            'detectionScriptPendingDeviceCount' => fn(ParseNode $n) => $o->setDetectionScriptPendingDeviceCount($n->getIntegerValue()),
            'issueDetectedDeviceCount' => fn(ParseNode $n) => $o->setIssueDetectedDeviceCount($n->getIntegerValue()),
            'issueRemediatedCumulativeDeviceCount' => fn(ParseNode $n) => $o->setIssueRemediatedCumulativeDeviceCount($n->getIntegerValue()),
            'issueRemediatedDeviceCount' => fn(ParseNode $n) => $o->setIssueRemediatedDeviceCount($n->getIntegerValue()),
            'issueReoccurredDeviceCount' => fn(ParseNode $n) => $o->setIssueReoccurredDeviceCount($n->getIntegerValue()),
            'lastScriptRunDateTime' => fn(ParseNode $n) => $o->setLastScriptRunDateTime($n->getDateTimeValue()),
            'noIssueDetectedDeviceCount' => fn(ParseNode $n) => $o->setNoIssueDetectedDeviceCount($n->getIntegerValue()),
            'remediationScriptErrorDeviceCount' => fn(ParseNode $n) => $o->setRemediationScriptErrorDeviceCount($n->getIntegerValue()),
            'remediationSkippedDeviceCount' => fn(ParseNode $n) => $o->setRemediationSkippedDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the issueDetectedDeviceCount property value. Number of devices for which the detection script found an issue
     * @return int|null
    */
    public function getIssueDetectedDeviceCount(): ?int {
        return $this->getBackingStore()->get('issueDetectedDeviceCount');
    }

    /**
     * Gets the issueRemediatedCumulativeDeviceCount property value. Number of devices that were remediated over the last 30 days
     * @return int|null
    */
    public function getIssueRemediatedCumulativeDeviceCount(): ?int {
        return $this->getBackingStore()->get('issueRemediatedCumulativeDeviceCount');
    }

    /**
     * Gets the issueRemediatedDeviceCount property value. Number of devices for which the remediation script was able to resolve the detected issue
     * @return int|null
    */
    public function getIssueRemediatedDeviceCount(): ?int {
        return $this->getBackingStore()->get('issueRemediatedDeviceCount');
    }

    /**
     * Gets the issueReoccurredDeviceCount property value. Number of devices for which the remediation script executed successfully but failed to resolve the detected issue
     * @return int|null
    */
    public function getIssueReoccurredDeviceCount(): ?int {
        return $this->getBackingStore()->get('issueReoccurredDeviceCount');
    }

    /**
     * Gets the lastScriptRunDateTime property value. Last run time for the script across all devices
     * @return DateTime|null
    */
    public function getLastScriptRunDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastScriptRunDateTime');
    }

    /**
     * Gets the noIssueDetectedDeviceCount property value. Number of devices for which the detection script did not find an issue and the device is healthy
     * @return int|null
    */
    public function getNoIssueDetectedDeviceCount(): ?int {
        return $this->getBackingStore()->get('noIssueDetectedDeviceCount');
    }

    /**
     * Gets the remediationScriptErrorDeviceCount property value. Number of devices for which the remediation script execution encountered an error and did not complete
     * @return int|null
    */
    public function getRemediationScriptErrorDeviceCount(): ?int {
        return $this->getBackingStore()->get('remediationScriptErrorDeviceCount');
    }

    /**
     * Gets the remediationSkippedDeviceCount property value. Number of devices for which remediation was skipped
     * @return int|null
    */
    public function getRemediationSkippedDeviceCount(): ?int {
        return $this->getBackingStore()->get('remediationSkippedDeviceCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('detectionScriptErrorDeviceCount', $this->getDetectionScriptErrorDeviceCount());
        $writer->writeIntegerValue('detectionScriptNotApplicableDeviceCount', $this->getDetectionScriptNotApplicableDeviceCount());
        $writer->writeIntegerValue('detectionScriptPendingDeviceCount', $this->getDetectionScriptPendingDeviceCount());
        $writer->writeIntegerValue('issueDetectedDeviceCount', $this->getIssueDetectedDeviceCount());
        $writer->writeIntegerValue('issueRemediatedCumulativeDeviceCount', $this->getIssueRemediatedCumulativeDeviceCount());
        $writer->writeIntegerValue('issueRemediatedDeviceCount', $this->getIssueRemediatedDeviceCount());
        $writer->writeIntegerValue('issueReoccurredDeviceCount', $this->getIssueReoccurredDeviceCount());
        $writer->writeDateTimeValue('lastScriptRunDateTime', $this->getLastScriptRunDateTime());
        $writer->writeIntegerValue('noIssueDetectedDeviceCount', $this->getNoIssueDetectedDeviceCount());
        $writer->writeIntegerValue('remediationScriptErrorDeviceCount', $this->getRemediationScriptErrorDeviceCount());
        $writer->writeIntegerValue('remediationSkippedDeviceCount', $this->getRemediationSkippedDeviceCount());
    }

    /**
     * Sets the detectionScriptErrorDeviceCount property value. Number of devices on which the detection script execution encountered an error and did not complete
     *  @param int|null $value Value to set for the detectionScriptErrorDeviceCount property.
    */
    public function setDetectionScriptErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('detectionScriptErrorDeviceCount', $value);
    }

    /**
     * Sets the detectionScriptNotApplicableDeviceCount property value. Number of devices for which the detection script was not applicable
     *  @param int|null $value Value to set for the detectionScriptNotApplicableDeviceCount property.
    */
    public function setDetectionScriptNotApplicableDeviceCount(?int $value): void {
        $this->getBackingStore()->set('detectionScriptNotApplicableDeviceCount', $value);
    }

    /**
     * Sets the detectionScriptPendingDeviceCount property value. Number of devices which have not yet run the latest version of the device health script
     *  @param int|null $value Value to set for the detectionScriptPendingDeviceCount property.
    */
    public function setDetectionScriptPendingDeviceCount(?int $value): void {
        $this->getBackingStore()->set('detectionScriptPendingDeviceCount', $value);
    }

    /**
     * Sets the issueDetectedDeviceCount property value. Number of devices for which the detection script found an issue
     *  @param int|null $value Value to set for the issueDetectedDeviceCount property.
    */
    public function setIssueDetectedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('issueDetectedDeviceCount', $value);
    }

    /**
     * Sets the issueRemediatedCumulativeDeviceCount property value. Number of devices that were remediated over the last 30 days
     *  @param int|null $value Value to set for the issueRemediatedCumulativeDeviceCount property.
    */
    public function setIssueRemediatedCumulativeDeviceCount(?int $value): void {
        $this->getBackingStore()->set('issueRemediatedCumulativeDeviceCount', $value);
    }

    /**
     * Sets the issueRemediatedDeviceCount property value. Number of devices for which the remediation script was able to resolve the detected issue
     *  @param int|null $value Value to set for the issueRemediatedDeviceCount property.
    */
    public function setIssueRemediatedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('issueRemediatedDeviceCount', $value);
    }

    /**
     * Sets the issueReoccurredDeviceCount property value. Number of devices for which the remediation script executed successfully but failed to resolve the detected issue
     *  @param int|null $value Value to set for the issueReoccurredDeviceCount property.
    */
    public function setIssueReoccurredDeviceCount(?int $value): void {
        $this->getBackingStore()->set('issueReoccurredDeviceCount', $value);
    }

    /**
     * Sets the lastScriptRunDateTime property value. Last run time for the script across all devices
     *  @param DateTime|null $value Value to set for the lastScriptRunDateTime property.
    */
    public function setLastScriptRunDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastScriptRunDateTime', $value);
    }

    /**
     * Sets the noIssueDetectedDeviceCount property value. Number of devices for which the detection script did not find an issue and the device is healthy
     *  @param int|null $value Value to set for the noIssueDetectedDeviceCount property.
    */
    public function setNoIssueDetectedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('noIssueDetectedDeviceCount', $value);
    }

    /**
     * Sets the remediationScriptErrorDeviceCount property value. Number of devices for which the remediation script execution encountered an error and did not complete
     *  @param int|null $value Value to set for the remediationScriptErrorDeviceCount property.
    */
    public function setRemediationScriptErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('remediationScriptErrorDeviceCount', $value);
    }

    /**
     * Sets the remediationSkippedDeviceCount property value. Number of devices for which remediation was skipped
     *  @param int|null $value Value to set for the remediationSkippedDeviceCount property.
    */
    public function setRemediationSkippedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('remediationSkippedDeviceCount', $value);
    }

}
