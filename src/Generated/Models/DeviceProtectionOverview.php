<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Hardware information of a given device.
*/
class DeviceProtectionOverview implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deviceProtectionOverview and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceProtectionOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceProtectionOverview {
        return new DeviceProtectionOverview();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cleanDeviceCount property value. Clean device count.
     * @return int|null
    */
    public function getCleanDeviceCount(): ?int {
        return $this->getBackingStore()->get('cleanDeviceCount');
    }

    /**
     * Gets the criticalFailuresDeviceCount property value. Critical failures device count.
     * @return int|null
    */
    public function getCriticalFailuresDeviceCount(): ?int {
        return $this->getBackingStore()->get('criticalFailuresDeviceCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'cleanDeviceCount' => fn(ParseNode $n) => $o->setCleanDeviceCount($n->getIntegerValue()),
            'criticalFailuresDeviceCount' => fn(ParseNode $n) => $o->setCriticalFailuresDeviceCount($n->getIntegerValue()),
            'inactiveThreatAgentDeviceCount' => fn(ParseNode $n) => $o->setInactiveThreatAgentDeviceCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pendingFullScanDeviceCount' => fn(ParseNode $n) => $o->setPendingFullScanDeviceCount($n->getIntegerValue()),
            'pendingManualStepsDeviceCount' => fn(ParseNode $n) => $o->setPendingManualStepsDeviceCount($n->getIntegerValue()),
            'pendingOfflineScanDeviceCount' => fn(ParseNode $n) => $o->setPendingOfflineScanDeviceCount($n->getIntegerValue()),
            'pendingQuickScanDeviceCount' => fn(ParseNode $n) => $o->setPendingQuickScanDeviceCount($n->getIntegerValue()),
            'pendingRestartDeviceCount' => fn(ParseNode $n) => $o->setPendingRestartDeviceCount($n->getIntegerValue()),
            'pendingSignatureUpdateDeviceCount' => fn(ParseNode $n) => $o->setPendingSignatureUpdateDeviceCount($n->getIntegerValue()),
            'totalReportedDeviceCount' => fn(ParseNode $n) => $o->setTotalReportedDeviceCount($n->getIntegerValue()),
            'unknownStateThreatAgentDeviceCount' => fn(ParseNode $n) => $o->setUnknownStateThreatAgentDeviceCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the inactiveThreatAgentDeviceCount property value. Device with inactive threat agent count
     * @return int|null
    */
    public function getInactiveThreatAgentDeviceCount(): ?int {
        return $this->getBackingStore()->get('inactiveThreatAgentDeviceCount');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the pendingFullScanDeviceCount property value. Pending full scan device count.
     * @return int|null
    */
    public function getPendingFullScanDeviceCount(): ?int {
        return $this->getBackingStore()->get('pendingFullScanDeviceCount');
    }

    /**
     * Gets the pendingManualStepsDeviceCount property value. Pending manual steps device count.
     * @return int|null
    */
    public function getPendingManualStepsDeviceCount(): ?int {
        return $this->getBackingStore()->get('pendingManualStepsDeviceCount');
    }

    /**
     * Gets the pendingOfflineScanDeviceCount property value. Pending offline scan device count.
     * @return int|null
    */
    public function getPendingOfflineScanDeviceCount(): ?int {
        return $this->getBackingStore()->get('pendingOfflineScanDeviceCount');
    }

    /**
     * Gets the pendingQuickScanDeviceCount property value. Pending quick scan device count. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getPendingQuickScanDeviceCount(): ?int {
        return $this->getBackingStore()->get('pendingQuickScanDeviceCount');
    }

    /**
     * Gets the pendingRestartDeviceCount property value. Pending restart device count.
     * @return int|null
    */
    public function getPendingRestartDeviceCount(): ?int {
        return $this->getBackingStore()->get('pendingRestartDeviceCount');
    }

    /**
     * Gets the pendingSignatureUpdateDeviceCount property value. Device with old signature count.
     * @return int|null
    */
    public function getPendingSignatureUpdateDeviceCount(): ?int {
        return $this->getBackingStore()->get('pendingSignatureUpdateDeviceCount');
    }

    /**
     * Gets the totalReportedDeviceCount property value. Total device count.
     * @return int|null
    */
    public function getTotalReportedDeviceCount(): ?int {
        return $this->getBackingStore()->get('totalReportedDeviceCount');
    }

    /**
     * Gets the unknownStateThreatAgentDeviceCount property value. Device with threat agent state as unknown count.
     * @return int|null
    */
    public function getUnknownStateThreatAgentDeviceCount(): ?int {
        return $this->getBackingStore()->get('unknownStateThreatAgentDeviceCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('cleanDeviceCount', $this->getCleanDeviceCount());
        $writer->writeIntegerValue('criticalFailuresDeviceCount', $this->getCriticalFailuresDeviceCount());
        $writer->writeIntegerValue('inactiveThreatAgentDeviceCount', $this->getInactiveThreatAgentDeviceCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('pendingFullScanDeviceCount', $this->getPendingFullScanDeviceCount());
        $writer->writeIntegerValue('pendingManualStepsDeviceCount', $this->getPendingManualStepsDeviceCount());
        $writer->writeIntegerValue('pendingOfflineScanDeviceCount', $this->getPendingOfflineScanDeviceCount());
        $writer->writeIntegerValue('pendingQuickScanDeviceCount', $this->getPendingQuickScanDeviceCount());
        $writer->writeIntegerValue('pendingRestartDeviceCount', $this->getPendingRestartDeviceCount());
        $writer->writeIntegerValue('pendingSignatureUpdateDeviceCount', $this->getPendingSignatureUpdateDeviceCount());
        $writer->writeIntegerValue('totalReportedDeviceCount', $this->getTotalReportedDeviceCount());
        $writer->writeIntegerValue('unknownStateThreatAgentDeviceCount', $this->getUnknownStateThreatAgentDeviceCount());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cleanDeviceCount property value. Clean device count.
     * @param int|null $value Value to set for the cleanDeviceCount property.
    */
    public function setCleanDeviceCount(?int $value): void {
        $this->getBackingStore()->set('cleanDeviceCount', $value);
    }

    /**
     * Sets the criticalFailuresDeviceCount property value. Critical failures device count.
     * @param int|null $value Value to set for the criticalFailuresDeviceCount property.
    */
    public function setCriticalFailuresDeviceCount(?int $value): void {
        $this->getBackingStore()->set('criticalFailuresDeviceCount', $value);
    }

    /**
     * Sets the inactiveThreatAgentDeviceCount property value. Device with inactive threat agent count
     * @param int|null $value Value to set for the inactiveThreatAgentDeviceCount property.
    */
    public function setInactiveThreatAgentDeviceCount(?int $value): void {
        $this->getBackingStore()->set('inactiveThreatAgentDeviceCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pendingFullScanDeviceCount property value. Pending full scan device count.
     * @param int|null $value Value to set for the pendingFullScanDeviceCount property.
    */
    public function setPendingFullScanDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingFullScanDeviceCount', $value);
    }

    /**
     * Sets the pendingManualStepsDeviceCount property value. Pending manual steps device count.
     * @param int|null $value Value to set for the pendingManualStepsDeviceCount property.
    */
    public function setPendingManualStepsDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingManualStepsDeviceCount', $value);
    }

    /**
     * Sets the pendingOfflineScanDeviceCount property value. Pending offline scan device count.
     * @param int|null $value Value to set for the pendingOfflineScanDeviceCount property.
    */
    public function setPendingOfflineScanDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingOfflineScanDeviceCount', $value);
    }

    /**
     * Sets the pendingQuickScanDeviceCount property value. Pending quick scan device count. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the pendingQuickScanDeviceCount property.
    */
    public function setPendingQuickScanDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingQuickScanDeviceCount', $value);
    }

    /**
     * Sets the pendingRestartDeviceCount property value. Pending restart device count.
     * @param int|null $value Value to set for the pendingRestartDeviceCount property.
    */
    public function setPendingRestartDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingRestartDeviceCount', $value);
    }

    /**
     * Sets the pendingSignatureUpdateDeviceCount property value. Device with old signature count.
     * @param int|null $value Value to set for the pendingSignatureUpdateDeviceCount property.
    */
    public function setPendingSignatureUpdateDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingSignatureUpdateDeviceCount', $value);
    }

    /**
     * Sets the totalReportedDeviceCount property value. Total device count.
     * @param int|null $value Value to set for the totalReportedDeviceCount property.
    */
    public function setTotalReportedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('totalReportedDeviceCount', $value);
    }

    /**
     * Sets the unknownStateThreatAgentDeviceCount property value. Device with threat agent state as unknown count.
     * @param int|null $value Value to set for the unknownStateThreatAgentDeviceCount property.
    */
    public function setUnknownStateThreatAgentDeviceCount(?int $value): void {
        $this->getBackingStore()->set('unknownStateThreatAgentDeviceCount', $value);
    }

}
