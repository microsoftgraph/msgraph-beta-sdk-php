<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcDisasterRecoveryMicrosoftHostedNetworkSetting extends CloudPcDisasterRecoveryNetworkSetting implements Parsable 
{
    /**
     * Instantiates a new CloudPcDisasterRecoveryMicrosoftHostedNetworkSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcDisasterRecoveryMicrosoftHostedNetworkSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcDisasterRecoveryMicrosoftHostedNetworkSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcDisasterRecoveryMicrosoftHostedNetworkSetting {
        return new CloudPcDisasterRecoveryMicrosoftHostedNetworkSetting();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'regionGroup' => fn(ParseNode $n) => $o->setRegionGroup($n->getEnumValue(CloudPcRegionGroup::class)),
            'regionName' => fn(ParseNode $n) => $o->setRegionName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the regionGroup property value. The regionGroup property
     * @return CloudPcRegionGroup|null
    */
    public function getRegionGroup(): ?CloudPcRegionGroup {
        $val = $this->getBackingStore()->get('regionGroup');
        if (is_null($val) || $val instanceof CloudPcRegionGroup) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regionGroup'");
    }

    /**
     * Gets the regionName property value. The regionName property
     * @return string|null
    */
    public function getRegionName(): ?string {
        $val = $this->getBackingStore()->get('regionName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'regionName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('regionGroup', $this->getRegionGroup());
        $writer->writeStringValue('regionName', $this->getRegionName());
    }

    /**
     * Sets the regionGroup property value. The regionGroup property
     * @param CloudPcRegionGroup|null $value Value to set for the regionGroup property.
    */
    public function setRegionGroup(?CloudPcRegionGroup $value): void {
        $this->getBackingStore()->set('regionGroup', $value);
    }

    /**
     * Sets the regionName property value. The regionName property
     * @param string|null $value Value to set for the regionName property.
    */
    public function setRegionName(?string $value): void {
        $this->getBackingStore()->set('regionName', $value);
    }

}
