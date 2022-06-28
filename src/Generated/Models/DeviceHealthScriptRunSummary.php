<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceHealthScriptRunSummary extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $detectionScriptErrorDeviceCount Number of devices on which the detection script execution encountered an error and did not complete
    */
    private ?int $detectionScriptErrorDeviceCount = null;
    
    /**
     * @var int|null $detectionScriptNotApplicableDeviceCount Number of devices for which the detection script was not applicable
    */
    private ?int $detectionScriptNotApplicableDeviceCount = null;
    
    /**
     * @var int|null $detectionScriptPendingDeviceCount Number of devices which have not yet run the latest version of the device health script
    */
    private ?int $detectionScriptPendingDeviceCount = null;
    
    /**
     * @var int|null $issueDetectedDeviceCount Number of devices for which the detection script found an issue
    */
    private ?int $issueDetectedDeviceCount = null;
    
    /**
     * @var int|null $issueRemediatedCumulativeDeviceCount Number of devices that were remediated over the last 30 days
    */
    private ?int $issueRemediatedCumulativeDeviceCount = null;
    
    /**
     * @var int|null $issueRemediatedDeviceCount Number of devices for which the remediation script was able to resolve the detected issue
    */
    private ?int $issueRemediatedDeviceCount = null;
    
    /**
     * @var int|null $issueReoccurredDeviceCount Number of devices for which the remediation script executed successfully but failed to resolve the detected issue
    */
    private ?int $issueReoccurredDeviceCount = null;
    
    /**
     * @var DateTime|null $lastScriptRunDateTime Last run time for the script across all devices
    */
    private ?DateTime $lastScriptRunDateTime = null;
    
    /**
     * @var int|null $noIssueDetectedDeviceCount Number of devices for which the detection script did not find an issue and the device is healthy
    */
    private ?int $noIssueDetectedDeviceCount = null;
    
    /**
     * @var int|null $remediationScriptErrorDeviceCount Number of devices for which the remediation script execution encountered an error and did not complete
    */
    private ?int $remediationScriptErrorDeviceCount = null;
    
    /**
     * @var int|null $remediationSkippedDeviceCount Number of devices for which remediation was skipped
    */
    private ?int $remediationSkippedDeviceCount = null;
    
    /**
     * Instantiates a new deviceHealthScriptRunSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the detectionScriptErrorDeviceCount property value. Number of devices on which the detection script execution encountered an error and did not complete
     * @return int|null
    */
    public function getDetectionScriptErrorDeviceCount(): ?int {
        return $this->detectionScriptErrorDeviceCount;
    }

    /**
     * Gets the detectionScriptNotApplicableDeviceCount property value. Number of devices for which the detection script was not applicable
     * @return int|null
    */
    public function getDetectionScriptNotApplicableDeviceCount(): ?int {
        return $this->detectionScriptNotApplicableDeviceCount;
    }

    /**
     * Gets the detectionScriptPendingDeviceCount property value. Number of devices which have not yet run the latest version of the device health script
     * @return int|null
    */
    public function getDetectionScriptPendingDeviceCount(): ?int {
        return $this->detectionScriptPendingDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'detectionScriptErrorDeviceCount' => function (ParseNode $n) use ($o) { $o->setDetectionScriptErrorDeviceCount($n->getIntegerValue()); },
            'detectionScriptNotApplicableDeviceCount' => function (ParseNode $n) use ($o) { $o->setDetectionScriptNotApplicableDeviceCount($n->getIntegerValue()); },
            'detectionScriptPendingDeviceCount' => function (ParseNode $n) use ($o) { $o->setDetectionScriptPendingDeviceCount($n->getIntegerValue()); },
            'issueDetectedDeviceCount' => function (ParseNode $n) use ($o) { $o->setIssueDetectedDeviceCount($n->getIntegerValue()); },
            'issueRemediatedCumulativeDeviceCount' => function (ParseNode $n) use ($o) { $o->setIssueRemediatedCumulativeDeviceCount($n->getIntegerValue()); },
            'issueRemediatedDeviceCount' => function (ParseNode $n) use ($o) { $o->setIssueRemediatedDeviceCount($n->getIntegerValue()); },
            'issueReoccurredDeviceCount' => function (ParseNode $n) use ($o) { $o->setIssueReoccurredDeviceCount($n->getIntegerValue()); },
            'lastScriptRunDateTime' => function (ParseNode $n) use ($o) { $o->setLastScriptRunDateTime($n->getDateTimeValue()); },
            'noIssueDetectedDeviceCount' => function (ParseNode $n) use ($o) { $o->setNoIssueDetectedDeviceCount($n->getIntegerValue()); },
            'remediationScriptErrorDeviceCount' => function (ParseNode $n) use ($o) { $o->setRemediationScriptErrorDeviceCount($n->getIntegerValue()); },
            'remediationSkippedDeviceCount' => function (ParseNode $n) use ($o) { $o->setRemediationSkippedDeviceCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the issueDetectedDeviceCount property value. Number of devices for which the detection script found an issue
     * @return int|null
    */
    public function getIssueDetectedDeviceCount(): ?int {
        return $this->issueDetectedDeviceCount;
    }

    /**
     * Gets the issueRemediatedCumulativeDeviceCount property value. Number of devices that were remediated over the last 30 days
     * @return int|null
    */
    public function getIssueRemediatedCumulativeDeviceCount(): ?int {
        return $this->issueRemediatedCumulativeDeviceCount;
    }

    /**
     * Gets the issueRemediatedDeviceCount property value. Number of devices for which the remediation script was able to resolve the detected issue
     * @return int|null
    */
    public function getIssueRemediatedDeviceCount(): ?int {
        return $this->issueRemediatedDeviceCount;
    }

    /**
     * Gets the issueReoccurredDeviceCount property value. Number of devices for which the remediation script executed successfully but failed to resolve the detected issue
     * @return int|null
    */
    public function getIssueReoccurredDeviceCount(): ?int {
        return $this->issueReoccurredDeviceCount;
    }

    /**
     * Gets the lastScriptRunDateTime property value. Last run time for the script across all devices
     * @return DateTime|null
    */
    public function getLastScriptRunDateTime(): ?DateTime {
        return $this->lastScriptRunDateTime;
    }

    /**
     * Gets the noIssueDetectedDeviceCount property value. Number of devices for which the detection script did not find an issue and the device is healthy
     * @return int|null
    */
    public function getNoIssueDetectedDeviceCount(): ?int {
        return $this->noIssueDetectedDeviceCount;
    }

    /**
     * Gets the remediationScriptErrorDeviceCount property value. Number of devices for which the remediation script execution encountered an error and did not complete
     * @return int|null
    */
    public function getRemediationScriptErrorDeviceCount(): ?int {
        return $this->remediationScriptErrorDeviceCount;
    }

    /**
     * Gets the remediationSkippedDeviceCount property value. Number of devices for which remediation was skipped
     * @return int|null
    */
    public function getRemediationSkippedDeviceCount(): ?int {
        return $this->remediationSkippedDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('detectionScriptErrorDeviceCount', $this->detectionScriptErrorDeviceCount);
        $writer->writeIntegerValue('detectionScriptNotApplicableDeviceCount', $this->detectionScriptNotApplicableDeviceCount);
        $writer->writeIntegerValue('detectionScriptPendingDeviceCount', $this->detectionScriptPendingDeviceCount);
        $writer->writeIntegerValue('issueDetectedDeviceCount', $this->issueDetectedDeviceCount);
        $writer->writeIntegerValue('issueRemediatedCumulativeDeviceCount', $this->issueRemediatedCumulativeDeviceCount);
        $writer->writeIntegerValue('issueRemediatedDeviceCount', $this->issueRemediatedDeviceCount);
        $writer->writeIntegerValue('issueReoccurredDeviceCount', $this->issueReoccurredDeviceCount);
        $writer->writeDateTimeValue('lastScriptRunDateTime', $this->lastScriptRunDateTime);
        $writer->writeIntegerValue('noIssueDetectedDeviceCount', $this->noIssueDetectedDeviceCount);
        $writer->writeIntegerValue('remediationScriptErrorDeviceCount', $this->remediationScriptErrorDeviceCount);
        $writer->writeIntegerValue('remediationSkippedDeviceCount', $this->remediationSkippedDeviceCount);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the detectionScriptErrorDeviceCount property value. Number of devices on which the detection script execution encountered an error and did not complete
     *  @param int|null $value Value to set for the detectionScriptErrorDeviceCount property.
    */
    public function setDetectionScriptErrorDeviceCount(?int $value ): void {
        $this->detectionScriptErrorDeviceCount = $value;
    }

    /**
     * Sets the detectionScriptNotApplicableDeviceCount property value. Number of devices for which the detection script was not applicable
     *  @param int|null $value Value to set for the detectionScriptNotApplicableDeviceCount property.
    */
    public function setDetectionScriptNotApplicableDeviceCount(?int $value ): void {
        $this->detectionScriptNotApplicableDeviceCount = $value;
    }

    /**
     * Sets the detectionScriptPendingDeviceCount property value. Number of devices which have not yet run the latest version of the device health script
     *  @param int|null $value Value to set for the detectionScriptPendingDeviceCount property.
    */
    public function setDetectionScriptPendingDeviceCount(?int $value ): void {
        $this->detectionScriptPendingDeviceCount = $value;
    }

    /**
     * Sets the issueDetectedDeviceCount property value. Number of devices for which the detection script found an issue
     *  @param int|null $value Value to set for the issueDetectedDeviceCount property.
    */
    public function setIssueDetectedDeviceCount(?int $value ): void {
        $this->issueDetectedDeviceCount = $value;
    }

    /**
     * Sets the issueRemediatedCumulativeDeviceCount property value. Number of devices that were remediated over the last 30 days
     *  @param int|null $value Value to set for the issueRemediatedCumulativeDeviceCount property.
    */
    public function setIssueRemediatedCumulativeDeviceCount(?int $value ): void {
        $this->issueRemediatedCumulativeDeviceCount = $value;
    }

    /**
     * Sets the issueRemediatedDeviceCount property value. Number of devices for which the remediation script was able to resolve the detected issue
     *  @param int|null $value Value to set for the issueRemediatedDeviceCount property.
    */
    public function setIssueRemediatedDeviceCount(?int $value ): void {
        $this->issueRemediatedDeviceCount = $value;
    }

    /**
     * Sets the issueReoccurredDeviceCount property value. Number of devices for which the remediation script executed successfully but failed to resolve the detected issue
     *  @param int|null $value Value to set for the issueReoccurredDeviceCount property.
    */
    public function setIssueReoccurredDeviceCount(?int $value ): void {
        $this->issueReoccurredDeviceCount = $value;
    }

    /**
     * Sets the lastScriptRunDateTime property value. Last run time for the script across all devices
     *  @param DateTime|null $value Value to set for the lastScriptRunDateTime property.
    */
    public function setLastScriptRunDateTime(?DateTime $value ): void {
        $this->lastScriptRunDateTime = $value;
    }

    /**
     * Sets the noIssueDetectedDeviceCount property value. Number of devices for which the detection script did not find an issue and the device is healthy
     *  @param int|null $value Value to set for the noIssueDetectedDeviceCount property.
    */
    public function setNoIssueDetectedDeviceCount(?int $value ): void {
        $this->noIssueDetectedDeviceCount = $value;
    }

    /**
     * Sets the remediationScriptErrorDeviceCount property value. Number of devices for which the remediation script execution encountered an error and did not complete
     *  @param int|null $value Value to set for the remediationScriptErrorDeviceCount property.
    */
    public function setRemediationScriptErrorDeviceCount(?int $value ): void {
        $this->remediationScriptErrorDeviceCount = $value;
    }

    /**
     * Sets the remediationSkippedDeviceCount property value. Number of devices for which remediation was skipped
     *  @param int|null $value Value to set for the remediationSkippedDeviceCount property.
    */
    public function setRemediationSkippedDeviceCount(?int $value ): void {
        $this->remediationSkippedDeviceCount = $value;
    }

}
