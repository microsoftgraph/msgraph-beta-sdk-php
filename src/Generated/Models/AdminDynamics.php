<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AdminDynamics extends Entity implements Parsable 
{
    /**
     * Instantiates a new adminDynamics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminDynamics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminDynamics {
        return new AdminDynamics();
    }

    /**
     * Gets the customerVoice property value. The customerVoice property
     * @return CustomerVoiceSettings|null
    */
    public function getCustomerVoice(): ?CustomerVoiceSettings {
        $val = $this->getBackingStore()->get('customerVoice');
        if (is_null($val) || $val instanceof CustomerVoiceSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customerVoice'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customerVoice' => fn(ParseNode $n) => $o->setCustomerVoice($n->getObjectValue([CustomerVoiceSettings::class, 'createFromDiscriminatorValue'])),
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
        $writer->writeObjectValue('customerVoice', $this->getCustomerVoice());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the customerVoice property value. The customerVoice property
     * @param CustomerVoiceSettings|null $value Value to set for the customerVoice property.
    */
    public function setCustomerVoice(?CustomerVoiceSettings $value): void {
        $this->getBackingStore()->set('customerVoice', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
