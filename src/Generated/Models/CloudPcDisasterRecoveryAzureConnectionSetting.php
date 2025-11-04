<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcDisasterRecoveryAzureConnectionSetting extends CloudPcDisasterRecoveryNetworkSetting implements Parsable 
{
    /**
     * Instantiates a new CloudPcDisasterRecoveryAzureConnectionSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcDisasterRecoveryAzureConnectionSetting');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcDisasterRecoveryAzureConnectionSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcDisasterRecoveryAzureConnectionSetting {
        return new CloudPcDisasterRecoveryAzureConnectionSetting();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'onPremisesConnectionId' => fn(ParseNode $n) => $o->setOnPremisesConnectionId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the onPremisesConnectionId property value. Indicates the unique ID of the virtual network that the new Cloud PC joins.
     * @return string|null
    */
    public function getOnPremisesConnectionId(): ?string {
        $val = $this->getBackingStore()->get('onPremisesConnectionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onPremisesConnectionId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('onPremisesConnectionId', $this->getOnPremisesConnectionId());
    }

    /**
     * Sets the onPremisesConnectionId property value. Indicates the unique ID of the virtual network that the new Cloud PC joins.
     * @param string|null $value Value to set for the onPremisesConnectionId property.
    */
    public function setOnPremisesConnectionId(?string $value): void {
        $this->getBackingStore()->set('onPremisesConnectionId', $value);
    }

}
