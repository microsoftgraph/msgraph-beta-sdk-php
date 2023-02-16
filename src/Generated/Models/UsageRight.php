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
        return $this->getBackingStore()->get('catalogId');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'catalogId' => fn(ParseNode $n) => $o->setCatalogId($n->getStringValue()),
            'serviceIdentifier' => fn(ParseNode $n) => $o->setServiceIdentifier($n->getStringValue()),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(UsageRightState::class)),
        ]);
    }

    /**
     * Gets the serviceIdentifier property value. Identifier of the service corresponding to the usage right.
     * @return string|null
    */
    public function getServiceIdentifier(): ?string {
        return $this->getBackingStore()->get('serviceIdentifier');
    }

    /**
     * Gets the state property value. The state property
     * @return UsageRightState|null
    */
    public function getState(): ?UsageRightState {
        return $this->getBackingStore()->get('state');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('catalogId', $this->getCatalogId());
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
