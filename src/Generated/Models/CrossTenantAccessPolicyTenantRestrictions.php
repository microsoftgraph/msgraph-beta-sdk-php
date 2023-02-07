<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessPolicyTenantRestrictions extends CrossTenantAccessPolicyB2BSetting implements Parsable 
{
    /**
     * Instantiates a new CrossTenantAccessPolicyTenantRestrictions and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.crossTenantAccessPolicyTenantRestrictions');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicyTenantRestrictions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicyTenantRestrictions {
        return new CrossTenantAccessPolicyTenantRestrictions();
    }

    /**
     * Gets the devices property value. The devices property
     * @return DevicesFilter|null
    */
    public function getDevices(): ?DevicesFilter {
        return $this->getBackingStore()->get('devices');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'devices' => fn(ParseNode $n) => $o->setDevices($n->getObjectValue([DevicesFilter::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('devices', $this->getDevices());
    }

    /**
     * Sets the devices property value. The devices property
     * @param DevicesFilter|null $value Value to set for the devices property.
    */
    public function setDevices(?DevicesFilter $value): void {
        $this->getBackingStore()->set('devices', $value);
    }

}
