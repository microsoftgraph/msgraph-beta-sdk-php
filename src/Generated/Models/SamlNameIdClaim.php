<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SamlNameIdClaim extends CustomClaimBase implements Parsable 
{
    /**
     * Instantiates a new SamlNameIdClaim and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.samlNameIdClaim');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SamlNameIdClaim
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SamlNameIdClaim {
        return new SamlNameIdClaim();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'nameIdFormat' => fn(ParseNode $n) => $o->setNameIdFormat($n->getEnumValue(SamlNameIDFormat::class)),
            'serviceProviderNameQualifier' => fn(ParseNode $n) => $o->setServiceProviderNameQualifier($n->getStringValue()),
        ]);
    }

    /**
     * Gets the nameIdFormat property value. The nameIdFormat property
     * @return SamlNameIDFormat|null
    */
    public function getNameIdFormat(): ?SamlNameIDFormat {
        $val = $this->getBackingStore()->get('nameIdFormat');
        if (is_null($val) || $val instanceof SamlNameIDFormat) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'nameIdFormat'");
    }

    /**
     * Gets the serviceProviderNameQualifier property value. The serviceProviderNameQualifier property
     * @return string|null
    */
    public function getServiceProviderNameQualifier(): ?string {
        $val = $this->getBackingStore()->get('serviceProviderNameQualifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceProviderNameQualifier'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('nameIdFormat', $this->getNameIdFormat());
        $writer->writeStringValue('serviceProviderNameQualifier', $this->getServiceProviderNameQualifier());
    }

    /**
     * Sets the nameIdFormat property value. The nameIdFormat property
     * @param SamlNameIDFormat|null $value Value to set for the nameIdFormat property.
    */
    public function setNameIdFormat(?SamlNameIDFormat $value): void {
        $this->getBackingStore()->set('nameIdFormat', $value);
    }

    /**
     * Sets the serviceProviderNameQualifier property value. The serviceProviderNameQualifier property
     * @param string|null $value Value to set for the serviceProviderNameQualifier property.
    */
    public function setServiceProviderNameQualifier(?string $value): void {
        $this->getBackingStore()->set('serviceProviderNameQualifier', $value);
    }

}
