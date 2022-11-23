<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceScriptRunSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceComplianceScriptRunSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceComplianceScriptRunSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceComplianceScriptRunSummary {
        return new DeviceComplianceScriptRunSummary();
    }

    /**
     * Gets the detectionScriptErrorDeviceCount property value. Number of devices on which the detection script execution encountered an error and did not complete. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getDetectionScriptErrorDeviceCount(): ?int {
        return $this->getBackingStore()->get('detectionScriptErrorDeviceCount');
    }

    /**
     * Gets the detectionScriptPendingDeviceCount property value. Number of devices which have not yet run the latest version of the device compliance script. Valid values -2147483648 to 2147483647
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
            'detectionScriptPendingDeviceCount' => fn(ParseNode $n) => $o->setDetectionScriptPendingDeviceCount($n->getIntegerValue()),
            'issueDetectedDeviceCount' => fn(ParseNode $n) => $o->setIssueDetectedDeviceCount($n->getIntegerValue()),
            'lastScriptRunDateTime' => fn(ParseNode $n) => $o->setLastScriptRunDateTime($n->getDateTimeValue()),
            'noIssueDetectedDeviceCount' => fn(ParseNode $n) => $o->setNoIssueDetectedDeviceCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the issueDetectedDeviceCount property value. Number of devices for which the detection script found an issue. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getIssueDetectedDeviceCount(): ?int {
        return $this->getBackingStore()->get('issueDetectedDeviceCount');
    }

    /**
     * Gets the lastScriptRunDateTime property value. Last run time for the script across all devices
     * @return DateTime|null
    */
    public function getLastScriptRunDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastScriptRunDateTime');
    }

    /**
     * Gets the noIssueDetectedDeviceCount property value. Number of devices for which the detection script did not find an issue and the device is healthy. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getNoIssueDetectedDeviceCount(): ?int {
        return $this->getBackingStore()->get('noIssueDetectedDeviceCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('detectionScriptErrorDeviceCount', $this->getDetectionScriptErrorDeviceCount());
        $writer->writeIntegerValue('detectionScriptPendingDeviceCount', $this->getDetectionScriptPendingDeviceCount());
        $writer->writeIntegerValue('issueDetectedDeviceCount', $this->getIssueDetectedDeviceCount());
        $writer->writeDateTimeValue('lastScriptRunDateTime', $this->getLastScriptRunDateTime());
        $writer->writeIntegerValue('noIssueDetectedDeviceCount', $this->getNoIssueDetectedDeviceCount());
    }

    /**
     * Sets the detectionScriptErrorDeviceCount property value. Number of devices on which the detection script execution encountered an error and did not complete. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the detectionScriptErrorDeviceCount property.
    */
    public function setDetectionScriptErrorDeviceCount(?int $value): void {
        $this->getBackingStore()->set('detectionScriptErrorDeviceCount', $value);
    }

    /**
     * Sets the detectionScriptPendingDeviceCount property value. Number of devices which have not yet run the latest version of the device compliance script. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the detectionScriptPendingDeviceCount property.
    */
    public function setDetectionScriptPendingDeviceCount(?int $value): void {
        $this->getBackingStore()->set('detectionScriptPendingDeviceCount', $value);
    }

    /**
     * Sets the issueDetectedDeviceCount property value. Number of devices for which the detection script found an issue. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the issueDetectedDeviceCount property.
    */
    public function setIssueDetectedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('issueDetectedDeviceCount', $value);
    }

    /**
     * Sets the lastScriptRunDateTime property value. Last run time for the script across all devices
     *  @param DateTime|null $value Value to set for the lastScriptRunDateTime property.
    */
    public function setLastScriptRunDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastScriptRunDateTime', $value);
    }

    /**
     * Sets the noIssueDetectedDeviceCount property value. Number of devices for which the detection script did not find an issue and the device is healthy. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the noIssueDetectedDeviceCount property.
    */
    public function setNoIssueDetectedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('noIssueDetectedDeviceCount', $value);
    }

}
