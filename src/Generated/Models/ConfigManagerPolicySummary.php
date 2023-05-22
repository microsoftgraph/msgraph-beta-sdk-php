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
 * A ConfigManager policy summary.
*/
class ConfigManagerPolicySummary implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new configManagerPolicySummary and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigManagerPolicySummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConfigManagerPolicySummary {
        return new ConfigManagerPolicySummary();
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
     * Gets the compliantDeviceCount property value. The number of devices evaluated to be compliant by the policy.
     * @return int|null
    */
    public function getCompliantDeviceCount(): ?int {
        return $this->getBackingStore()->get('compliantDeviceCount');
    }

    /**
     * Gets the enforcedDeviceCount property value. The number of devices that have have been remediated by the policy.
     * @return int|null
    */
    public function getEnforcedDeviceCount(): ?int {
        return $this->getBackingStore()->get('enforcedDeviceCount');
    }

    /**
     * Gets the failedDeviceCount property value. The number of devices that failed to be evaluated by the policy.
     * @return int|null
    */
    public function getFailedDeviceCount(): ?int {
        return $this->getBackingStore()->get('failedDeviceCount');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'compliantDeviceCount' => fn(ParseNode $n) => $o->setCompliantDeviceCount($n->getIntegerValue()),
            'enforcedDeviceCount' => fn(ParseNode $n) => $o->setEnforcedDeviceCount($n->getIntegerValue()),
            'failedDeviceCount' => fn(ParseNode $n) => $o->setFailedDeviceCount($n->getIntegerValue()),
            'nonCompliantDeviceCount' => fn(ParseNode $n) => $o->setNonCompliantDeviceCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'pendingDeviceCount' => fn(ParseNode $n) => $o->setPendingDeviceCount($n->getIntegerValue()),
            'targetedDeviceCount' => fn(ParseNode $n) => $o->setTargetedDeviceCount($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the nonCompliantDeviceCount property value. The number of devices evaluated to be noncompliant by the policy.
     * @return int|null
    */
    public function getNonCompliantDeviceCount(): ?int {
        return $this->getBackingStore()->get('nonCompliantDeviceCount');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the pendingDeviceCount property value. The number of devices that have acknowledged the policy but are pending evaluation.
     * @return int|null
    */
    public function getPendingDeviceCount(): ?int {
        return $this->getBackingStore()->get('pendingDeviceCount');
    }

    /**
     * Gets the targetedDeviceCount property value. The number of devices targeted by the policy.
     * @return int|null
    */
    public function getTargetedDeviceCount(): ?int {
        return $this->getBackingStore()->get('targetedDeviceCount');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('compliantDeviceCount', $this->getCompliantDeviceCount());
        $writer->writeIntegerValue('enforcedDeviceCount', $this->getEnforcedDeviceCount());
        $writer->writeIntegerValue('failedDeviceCount', $this->getFailedDeviceCount());
        $writer->writeIntegerValue('nonCompliantDeviceCount', $this->getNonCompliantDeviceCount());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('pendingDeviceCount', $this->getPendingDeviceCount());
        $writer->writeIntegerValue('targetedDeviceCount', $this->getTargetedDeviceCount());
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
     * Sets the compliantDeviceCount property value. The number of devices evaluated to be compliant by the policy.
     * @param int|null $value Value to set for the compliantDeviceCount property.
    */
    public function setCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('compliantDeviceCount', $value);
    }

    /**
     * Sets the enforcedDeviceCount property value. The number of devices that have have been remediated by the policy.
     * @param int|null $value Value to set for the enforcedDeviceCount property.
    */
    public function setEnforcedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('enforcedDeviceCount', $value);
    }

    /**
     * Sets the failedDeviceCount property value. The number of devices that failed to be evaluated by the policy.
     * @param int|null $value Value to set for the failedDeviceCount property.
    */
    public function setFailedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('failedDeviceCount', $value);
    }

    /**
     * Sets the nonCompliantDeviceCount property value. The number of devices evaluated to be noncompliant by the policy.
     * @param int|null $value Value to set for the nonCompliantDeviceCount property.
    */
    public function setNonCompliantDeviceCount(?int $value): void {
        $this->getBackingStore()->set('nonCompliantDeviceCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the pendingDeviceCount property value. The number of devices that have acknowledged the policy but are pending evaluation.
     * @param int|null $value Value to set for the pendingDeviceCount property.
    */
    public function setPendingDeviceCount(?int $value): void {
        $this->getBackingStore()->set('pendingDeviceCount', $value);
    }

    /**
     * Sets the targetedDeviceCount property value. The number of devices targeted by the policy.
     * @param int|null $value Value to set for the targetedDeviceCount property.
    */
    public function setTargetedDeviceCount(?int $value): void {
        $this->getBackingStore()->set('targetedDeviceCount', $value);
    }

}
