<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class DeploymentSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new deploymentSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeploymentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeploymentSettings {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.windowsUpdates.windowsDeploymentSettings': return new WindowsDeploymentSettings();
            }
        }
        return new DeploymentSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'monitoring' => fn(ParseNode $n) => $o->setMonitoring($n->getObjectValue([MonitoringSettings::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'rollout' => fn(ParseNode $n) => $o->setRollout($n->getObjectValue([RolloutSettings::class, 'createFromDiscriminatorValue'])),
            'safeguard' => fn(ParseNode $n) => $o->setSafeguard($n->getObjectValue([SafeguardSettings::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the monitoring property value. Settings governing conditions to monitor and automated actions to take.
     * @return MonitoringSettings|null
    */
    public function getMonitoring(): ?MonitoringSettings {
        return $this->getBackingStore()->get('monitoring');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the rollout property value. Settings governing how the content is rolled out.
     * @return RolloutSettings|null
    */
    public function getRollout(): ?RolloutSettings {
        return $this->getBackingStore()->get('rollout');
    }

    /**
     * Gets the safeguard property value. Settings governing safeguard holds on offering content.
     * @return SafeguardSettings|null
    */
    public function getSafeguard(): ?SafeguardSettings {
        return $this->getBackingStore()->get('safeguard');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('monitoring', $this->getMonitoring());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('rollout', $this->getRollout());
        $writer->writeObjectValue('safeguard', $this->getSafeguard());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the monitoring property value. Settings governing conditions to monitor and automated actions to take.
     *  @param MonitoringSettings|null $value Value to set for the monitoring property.
    */
    public function setMonitoring(?MonitoringSettings $value): void {
        $this->getBackingStore()->set('monitoring', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the rollout property value. Settings governing how the content is rolled out.
     *  @param RolloutSettings|null $value Value to set for the rollout property.
    */
    public function setRollout(?RolloutSettings $value): void {
        $this->getBackingStore()->set('rollout', $value);
    }

    /**
     * Sets the safeguard property value. Settings governing safeguard holds on offering content.
     *  @param SafeguardSettings|null $value Value to set for the safeguard property.
    */
    public function setSafeguard(?SafeguardSettings $value): void {
        $this->getBackingStore()->set('safeguard', $value);
    }

}
