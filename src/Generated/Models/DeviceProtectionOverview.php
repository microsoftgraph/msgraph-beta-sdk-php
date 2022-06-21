<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceProtectionOverview implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var int|null $cleanDeviceCount Clean device count. */
    private ?int $cleanDeviceCount = null;
    
    /** @var int|null $criticalFailuresDeviceCount Critical failures device count. */
    private ?int $criticalFailuresDeviceCount = null;
    
    /** @var int|null $inactiveThreatAgentDeviceCount Device with inactive threat agent count */
    private ?int $inactiveThreatAgentDeviceCount = null;
    
    /** @var int|null $pendingFullScanDeviceCount Pending full scan device count. */
    private ?int $pendingFullScanDeviceCount = null;
    
    /** @var int|null $pendingManualStepsDeviceCount Pending manual steps device count. */
    private ?int $pendingManualStepsDeviceCount = null;
    
    /** @var int|null $pendingOfflineScanDeviceCount Pending offline scan device count. */
    private ?int $pendingOfflineScanDeviceCount = null;
    
    /** @var int|null $pendingQuickScanDeviceCount Pending quick scan device count. Valid values -2147483648 to 2147483647 */
    private ?int $pendingQuickScanDeviceCount = null;
    
    /** @var int|null $pendingRestartDeviceCount Pending restart device count. */
    private ?int $pendingRestartDeviceCount = null;
    
    /** @var int|null $pendingSignatureUpdateDeviceCount Device with old signature count. */
    private ?int $pendingSignatureUpdateDeviceCount = null;
    
    /** @var int|null $totalReportedDeviceCount Total device count. */
    private ?int $totalReportedDeviceCount = null;
    
    /** @var int|null $unknownStateThreatAgentDeviceCount Device with threat agent state as unknown count. */
    private ?int $unknownStateThreatAgentDeviceCount = null;
    
    /**
     * Instantiates a new deviceProtectionOverview and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceProtectionOverview
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceProtectionOverview {
        return new DeviceProtectionOverview();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cleanDeviceCount property value. Clean device count.
     * @return int|null
    */
    public function getCleanDeviceCount(): ?int {
        return $this->cleanDeviceCount;
    }

    /**
     * Gets the criticalFailuresDeviceCount property value. Critical failures device count.
     * @return int|null
    */
    public function getCriticalFailuresDeviceCount(): ?int {
        return $this->criticalFailuresDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'cleanDeviceCount' => function (self $o, ParseNode $n) { $o->setCleanDeviceCount($n->getIntegerValue()); },
            'criticalFailuresDeviceCount' => function (self $o, ParseNode $n) { $o->setCriticalFailuresDeviceCount($n->getIntegerValue()); },
            'inactiveThreatAgentDeviceCount' => function (self $o, ParseNode $n) { $o->setInactiveThreatAgentDeviceCount($n->getIntegerValue()); },
            'pendingFullScanDeviceCount' => function (self $o, ParseNode $n) { $o->setPendingFullScanDeviceCount($n->getIntegerValue()); },
            'pendingManualStepsDeviceCount' => function (self $o, ParseNode $n) { $o->setPendingManualStepsDeviceCount($n->getIntegerValue()); },
            'pendingOfflineScanDeviceCount' => function (self $o, ParseNode $n) { $o->setPendingOfflineScanDeviceCount($n->getIntegerValue()); },
            'pendingQuickScanDeviceCount' => function (self $o, ParseNode $n) { $o->setPendingQuickScanDeviceCount($n->getIntegerValue()); },
            'pendingRestartDeviceCount' => function (self $o, ParseNode $n) { $o->setPendingRestartDeviceCount($n->getIntegerValue()); },
            'pendingSignatureUpdateDeviceCount' => function (self $o, ParseNode $n) { $o->setPendingSignatureUpdateDeviceCount($n->getIntegerValue()); },
            'totalReportedDeviceCount' => function (self $o, ParseNode $n) { $o->setTotalReportedDeviceCount($n->getIntegerValue()); },
            'unknownStateThreatAgentDeviceCount' => function (self $o, ParseNode $n) { $o->setUnknownStateThreatAgentDeviceCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the inactiveThreatAgentDeviceCount property value. Device with inactive threat agent count
     * @return int|null
    */
    public function getInactiveThreatAgentDeviceCount(): ?int {
        return $this->inactiveThreatAgentDeviceCount;
    }

    /**
     * Gets the pendingFullScanDeviceCount property value. Pending full scan device count.
     * @return int|null
    */
    public function getPendingFullScanDeviceCount(): ?int {
        return $this->pendingFullScanDeviceCount;
    }

    /**
     * Gets the pendingManualStepsDeviceCount property value. Pending manual steps device count.
     * @return int|null
    */
    public function getPendingManualStepsDeviceCount(): ?int {
        return $this->pendingManualStepsDeviceCount;
    }

    /**
     * Gets the pendingOfflineScanDeviceCount property value. Pending offline scan device count.
     * @return int|null
    */
    public function getPendingOfflineScanDeviceCount(): ?int {
        return $this->pendingOfflineScanDeviceCount;
    }

    /**
     * Gets the pendingQuickScanDeviceCount property value. Pending quick scan device count. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getPendingQuickScanDeviceCount(): ?int {
        return $this->pendingQuickScanDeviceCount;
    }

    /**
     * Gets the pendingRestartDeviceCount property value. Pending restart device count.
     * @return int|null
    */
    public function getPendingRestartDeviceCount(): ?int {
        return $this->pendingRestartDeviceCount;
    }

    /**
     * Gets the pendingSignatureUpdateDeviceCount property value. Device with old signature count.
     * @return int|null
    */
    public function getPendingSignatureUpdateDeviceCount(): ?int {
        return $this->pendingSignatureUpdateDeviceCount;
    }

    /**
     * Gets the totalReportedDeviceCount property value. Total device count.
     * @return int|null
    */
    public function getTotalReportedDeviceCount(): ?int {
        return $this->totalReportedDeviceCount;
    }

    /**
     * Gets the unknownStateThreatAgentDeviceCount property value. Device with threat agent state as unknown count.
     * @return int|null
    */
    public function getUnknownStateThreatAgentDeviceCount(): ?int {
        return $this->unknownStateThreatAgentDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('cleanDeviceCount', $this->cleanDeviceCount);
        $writer->writeIntegerValue('criticalFailuresDeviceCount', $this->criticalFailuresDeviceCount);
        $writer->writeIntegerValue('inactiveThreatAgentDeviceCount', $this->inactiveThreatAgentDeviceCount);
        $writer->writeIntegerValue('pendingFullScanDeviceCount', $this->pendingFullScanDeviceCount);
        $writer->writeIntegerValue('pendingManualStepsDeviceCount', $this->pendingManualStepsDeviceCount);
        $writer->writeIntegerValue('pendingOfflineScanDeviceCount', $this->pendingOfflineScanDeviceCount);
        $writer->writeIntegerValue('pendingQuickScanDeviceCount', $this->pendingQuickScanDeviceCount);
        $writer->writeIntegerValue('pendingRestartDeviceCount', $this->pendingRestartDeviceCount);
        $writer->writeIntegerValue('pendingSignatureUpdateDeviceCount', $this->pendingSignatureUpdateDeviceCount);
        $writer->writeIntegerValue('totalReportedDeviceCount', $this->totalReportedDeviceCount);
        $writer->writeIntegerValue('unknownStateThreatAgentDeviceCount', $this->unknownStateThreatAgentDeviceCount);
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
     * Sets the cleanDeviceCount property value. Clean device count.
     *  @param int|null $value Value to set for the cleanDeviceCount property.
    */
    public function setCleanDeviceCount(?int $value ): void {
        $this->cleanDeviceCount = $value;
    }

    /**
     * Sets the criticalFailuresDeviceCount property value. Critical failures device count.
     *  @param int|null $value Value to set for the criticalFailuresDeviceCount property.
    */
    public function setCriticalFailuresDeviceCount(?int $value ): void {
        $this->criticalFailuresDeviceCount = $value;
    }

    /**
     * Sets the inactiveThreatAgentDeviceCount property value. Device with inactive threat agent count
     *  @param int|null $value Value to set for the inactiveThreatAgentDeviceCount property.
    */
    public function setInactiveThreatAgentDeviceCount(?int $value ): void {
        $this->inactiveThreatAgentDeviceCount = $value;
    }

    /**
     * Sets the pendingFullScanDeviceCount property value. Pending full scan device count.
     *  @param int|null $value Value to set for the pendingFullScanDeviceCount property.
    */
    public function setPendingFullScanDeviceCount(?int $value ): void {
        $this->pendingFullScanDeviceCount = $value;
    }

    /**
     * Sets the pendingManualStepsDeviceCount property value. Pending manual steps device count.
     *  @param int|null $value Value to set for the pendingManualStepsDeviceCount property.
    */
    public function setPendingManualStepsDeviceCount(?int $value ): void {
        $this->pendingManualStepsDeviceCount = $value;
    }

    /**
     * Sets the pendingOfflineScanDeviceCount property value. Pending offline scan device count.
     *  @param int|null $value Value to set for the pendingOfflineScanDeviceCount property.
    */
    public function setPendingOfflineScanDeviceCount(?int $value ): void {
        $this->pendingOfflineScanDeviceCount = $value;
    }

    /**
     * Sets the pendingQuickScanDeviceCount property value. Pending quick scan device count. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the pendingQuickScanDeviceCount property.
    */
    public function setPendingQuickScanDeviceCount(?int $value ): void {
        $this->pendingQuickScanDeviceCount = $value;
    }

    /**
     * Sets the pendingRestartDeviceCount property value. Pending restart device count.
     *  @param int|null $value Value to set for the pendingRestartDeviceCount property.
    */
    public function setPendingRestartDeviceCount(?int $value ): void {
        $this->pendingRestartDeviceCount = $value;
    }

    /**
     * Sets the pendingSignatureUpdateDeviceCount property value. Device with old signature count.
     *  @param int|null $value Value to set for the pendingSignatureUpdateDeviceCount property.
    */
    public function setPendingSignatureUpdateDeviceCount(?int $value ): void {
        $this->pendingSignatureUpdateDeviceCount = $value;
    }

    /**
     * Sets the totalReportedDeviceCount property value. Total device count.
     *  @param int|null $value Value to set for the totalReportedDeviceCount property.
    */
    public function setTotalReportedDeviceCount(?int $value ): void {
        $this->totalReportedDeviceCount = $value;
    }

    /**
     * Sets the unknownStateThreatAgentDeviceCount property value. Device with threat agent state as unknown count.
     *  @param int|null $value Value to set for the unknownStateThreatAgentDeviceCount property.
    */
    public function setUnknownStateThreatAgentDeviceCount(?int $value ): void {
        $this->unknownStateThreatAgentDeviceCount = $value;
    }

}
