<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OemWarrantyInformationOnboarding extends Entity implements Parsable 
{
    /**
     * Instantiates a new OemWarrantyInformationOnboarding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OemWarrantyInformationOnboarding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OemWarrantyInformationOnboarding {
        return new OemWarrantyInformationOnboarding();
    }

    /**
     * Gets the available property value. Specifies whether warranty API is available. This property is read-only.
     * @return bool|null
    */
    public function getAvailable(): ?bool {
        return $this->getBackingStore()->get('available');
    }

    /**
     * Gets the enabled property value. Specifies whether warranty query is enabled for given OEM. This property is read-only.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        return $this->getBackingStore()->get('enabled');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'available' => fn(ParseNode $n) => $o->setAvailable($n->getBooleanValue()),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'oemName' => fn(ParseNode $n) => $o->setOemName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the oemName property value. OEM name. This property is read-only.
     * @return string|null
    */
    public function getOemName(): ?string {
        return $this->getBackingStore()->get('oemName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

    /**
     * Sets the available property value. Specifies whether warranty API is available. This property is read-only.
     * @param bool|null $value Value to set for the available property.
    */
    public function setAvailable(?bool $value): void {
        $this->getBackingStore()->set('available', $value);
    }

    /**
     * Sets the enabled property value. Specifies whether warranty query is enabled for given OEM. This property is read-only.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the oemName property value. OEM name. This property is read-only.
     * @param string|null $value Value to set for the oemName property.
    */
    public function setOemName(?string $value): void {
        $this->getBackingStore()->set('oemName', $value);
    }

}
