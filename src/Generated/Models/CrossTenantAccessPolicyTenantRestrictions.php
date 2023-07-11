<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessPolicyTenantRestrictions extends CrossTenantAccessPolicyB2BSetting implements Parsable 
{
    /**
     * Instantiates a new crossTenantAccessPolicyTenantRestrictions and sets the default values.
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
     * Gets the devices property value. Defines the rule for filtering devices and whether devices satisfying the rule should be allowed or blocked. Not implemented.
     * @return DevicesFilter|null
    */
    public function getDevices(): ?DevicesFilter {
        $val = $this->getBackingStore()->get('devices');
        if (is_null($val) || $val instanceof DevicesFilter) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'devices'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'devices' => fn(ParseNode $n) => $o->setDevices($n->getObjectValue([DevicesFilter::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('devices', $this->getDevices());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the devices property value. Defines the rule for filtering devices and whether devices satisfying the rule should be allowed or blocked. Not implemented.
     * @param DevicesFilter|null $value Value to set for the devices property.
    */
    public function setDevices(?DevicesFilter $value): void {
        $this->getBackingStore()->set('devices', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
