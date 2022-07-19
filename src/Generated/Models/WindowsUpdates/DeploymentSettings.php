<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeploymentSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var MonitoringSettings|null $monitoring Settings governing conditions to monitor and automated actions to take.
    */
    private ?MonitoringSettings $monitoring = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var RolloutSettings|null $rollout Settings governing how the content is rolled out.
    */
    private ?RolloutSettings $rollout = null;
    
    /**
     * @var SafeguardSettings|null $safeguard Settings governing safeguard holds on offering content.
    */
    private ?SafeguardSettings $safeguard = null;
    
    /**
     * Instantiates a new deploymentSettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.windowsUpdates.deploymentSettings');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'monitoring' => function (ParseNode $n) use ($o) { $o->setMonitoring($n->getObjectValue(array(MonitoringSettings::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'rollout' => function (ParseNode $n) use ($o) { $o->setRollout($n->getObjectValue(array(RolloutSettings::class, 'createFromDiscriminatorValue'))); },
            'safeguard' => function (ParseNode $n) use ($o) { $o->setSafeguard($n->getObjectValue(array(SafeguardSettings::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the monitoring property value. Settings governing conditions to monitor and automated actions to take.
     * @return MonitoringSettings|null
    */
    public function getMonitoring(): ?MonitoringSettings {
        return $this->monitoring;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the rollout property value. Settings governing how the content is rolled out.
     * @return RolloutSettings|null
    */
    public function getRollout(): ?RolloutSettings {
        return $this->rollout;
    }

    /**
     * Gets the safeguard property value. Settings governing safeguard holds on offering content.
     * @return SafeguardSettings|null
    */
    public function getSafeguard(): ?SafeguardSettings {
        return $this->safeguard;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('monitoring', $this->monitoring);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('rollout', $this->rollout);
        $writer->writeObjectValue('safeguard', $this->safeguard);
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
     * Sets the monitoring property value. Settings governing conditions to monitor and automated actions to take.
     *  @param MonitoringSettings|null $value Value to set for the monitoring property.
    */
    public function setMonitoring(?MonitoringSettings $value ): void {
        $this->monitoring = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the rollout property value. Settings governing how the content is rolled out.
     *  @param RolloutSettings|null $value Value to set for the rollout property.
    */
    public function setRollout(?RolloutSettings $value ): void {
        $this->rollout = $value;
    }

    /**
     * Sets the safeguard property value. Settings governing safeguard holds on offering content.
     *  @param SafeguardSettings|null $value Value to set for the safeguard property.
    */
    public function setSafeguard(?SafeguardSettings $value ): void {
        $this->safeguard = $value;
    }

}
