<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceComplianceScriptRunSummary extends Entity implements Parsable 
{
    /**
     * @var int|null $detectionScriptErrorDeviceCount Number of devices on which the detection script execution encountered an error and did not complete. Valid values -2147483648 to 2147483647
    */
    private ?int $detectionScriptErrorDeviceCount = null;
    
    /**
     * @var int|null $detectionScriptPendingDeviceCount Number of devices which have not yet run the latest version of the device compliance script. Valid values -2147483648 to 2147483647
    */
    private ?int $detectionScriptPendingDeviceCount = null;
    
    /**
     * @var int|null $issueDetectedDeviceCount Number of devices for which the detection script found an issue. Valid values -2147483648 to 2147483647
    */
    private ?int $issueDetectedDeviceCount = null;
    
    /**
     * @var DateTime|null $lastScriptRunDateTime Last run time for the script across all devices
    */
    private ?DateTime $lastScriptRunDateTime = null;
    
    /**
     * @var int|null $noIssueDetectedDeviceCount Number of devices for which the detection script did not find an issue and the device is healthy. Valid values -2147483648 to 2147483647
    */
    private ?int $noIssueDetectedDeviceCount = null;
    
    /**
     * Instantiates a new deviceComplianceScriptRunSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceComplianceScriptRunSummary');
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
        return $this->detectionScriptErrorDeviceCount;
    }

    /**
     * Gets the detectionScriptPendingDeviceCount property value. Number of devices which have not yet run the latest version of the device compliance script. Valid values -2147483648 to 2147483647
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
            'detectionScriptPendingDeviceCount' => function (ParseNode $n) use ($o) { $o->setDetectionScriptPendingDeviceCount($n->getIntegerValue()); },
            'issueDetectedDeviceCount' => function (ParseNode $n) use ($o) { $o->setIssueDetectedDeviceCount($n->getIntegerValue()); },
            'lastScriptRunDateTime' => function (ParseNode $n) use ($o) { $o->setLastScriptRunDateTime($n->getDateTimeValue()); },
            'noIssueDetectedDeviceCount' => function (ParseNode $n) use ($o) { $o->setNoIssueDetectedDeviceCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the issueDetectedDeviceCount property value. Number of devices for which the detection script found an issue. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getIssueDetectedDeviceCount(): ?int {
        return $this->issueDetectedDeviceCount;
    }

    /**
     * Gets the lastScriptRunDateTime property value. Last run time for the script across all devices
     * @return DateTime|null
    */
    public function getLastScriptRunDateTime(): ?DateTime {
        return $this->lastScriptRunDateTime;
    }

    /**
     * Gets the noIssueDetectedDeviceCount property value. Number of devices for which the detection script did not find an issue and the device is healthy. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getNoIssueDetectedDeviceCount(): ?int {
        return $this->noIssueDetectedDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('detectionScriptErrorDeviceCount', $this->detectionScriptErrorDeviceCount);
        $writer->writeIntegerValue('detectionScriptPendingDeviceCount', $this->detectionScriptPendingDeviceCount);
        $writer->writeIntegerValue('issueDetectedDeviceCount', $this->issueDetectedDeviceCount);
        $writer->writeDateTimeValue('lastScriptRunDateTime', $this->lastScriptRunDateTime);
        $writer->writeIntegerValue('noIssueDetectedDeviceCount', $this->noIssueDetectedDeviceCount);
    }

    /**
     * Sets the detectionScriptErrorDeviceCount property value. Number of devices on which the detection script execution encountered an error and did not complete. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the detectionScriptErrorDeviceCount property.
    */
    public function setDetectionScriptErrorDeviceCount(?int $value ): void {
        $this->detectionScriptErrorDeviceCount = $value;
    }

    /**
     * Sets the detectionScriptPendingDeviceCount property value. Number of devices which have not yet run the latest version of the device compliance script. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the detectionScriptPendingDeviceCount property.
    */
    public function setDetectionScriptPendingDeviceCount(?int $value ): void {
        $this->detectionScriptPendingDeviceCount = $value;
    }

    /**
     * Sets the issueDetectedDeviceCount property value. Number of devices for which the detection script found an issue. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the issueDetectedDeviceCount property.
    */
    public function setIssueDetectedDeviceCount(?int $value ): void {
        $this->issueDetectedDeviceCount = $value;
    }

    /**
     * Sets the lastScriptRunDateTime property value. Last run time for the script across all devices
     *  @param DateTime|null $value Value to set for the lastScriptRunDateTime property.
    */
    public function setLastScriptRunDateTime(?DateTime $value ): void {
        $this->lastScriptRunDateTime = $value;
    }

    /**
     * Sets the noIssueDetectedDeviceCount property value. Number of devices for which the detection script did not find an issue and the device is healthy. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the noIssueDetectedDeviceCount property.
    */
    public function setNoIssueDetectedDeviceCount(?int $value ): void {
        $this->noIssueDetectedDeviceCount = $value;
    }

}
