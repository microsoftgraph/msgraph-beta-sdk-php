<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UsageRight extends Entity implements Parsable 
{
    /**
     * Instantiates a new usageRight and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UsageRight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UsageRight {
        return new UsageRight();
    }

    /**
     * Gets the catalogId property value. Product id corresponding to the usage right.
     * @return string|null
    */
    public function getCatalogId(): ?string {
        $val = $this->getBackingStore()->get('catalogId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'catalogId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'catalogId' => fn(ParseNode $n) => $o->setCatalogId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'serviceIdentifier' => fn(ParseNode $n) => $o->setServiceIdentifier($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(UsageRightState::class)),
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
     * Gets the serviceIdentifier property value. Identifier of the service corresponding to the usage right.
     * @return string|null
    */
    public function getServiceIdentifier(): ?string {
        $val = $this->getBackingStore()->get('serviceIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'serviceIdentifier'");
    }

    /**
     * Gets the state property value. The state property
     * @return UsageRightState|null
    */
    public function getState(): ?UsageRightState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof UsageRightState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('catalogId', $this->getCatalogId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('serviceIdentifier', $this->getServiceIdentifier());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the catalogId property value. Product id corresponding to the usage right.
     * @param string|null $value Value to set for the catalogId property.
    */
    public function setCatalogId(?string $value): void {
        $this->getBackingStore()->set('catalogId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the serviceIdentifier property value. Identifier of the service corresponding to the usage right.
     * @param string|null $value Value to set for the serviceIdentifier property.
    */
    public function setServiceIdentifier(?string $value): void {
        $this->getBackingStore()->set('serviceIdentifier', $value);
    }

    /**
     * Sets the state property value. The state property
     * @param UsageRightState|null $value Value to set for the state property.
    */
    public function setState(?UsageRightState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
