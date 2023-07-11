<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PronounsSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new pronounsSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PronounsSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PronounsSettings {
        return new PronounsSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isEnabledInOrganization' => fn(ParseNode $n) => $o->setIsEnabledInOrganization($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isEnabledInOrganization property value. true to enable pronouns in the organization, false otherwise. The default is false, and pronouns are disabled.
     * @return bool|null
    */
    public function getIsEnabledInOrganization(): ?bool {
        $val = $this->getBackingStore()->get('isEnabledInOrganization');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isEnabledInOrganization'");
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
        $writer->writeBooleanValue('isEnabledInOrganization', $this->getIsEnabledInOrganization());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the isEnabledInOrganization property value. true to enable pronouns in the organization, false otherwise. The default is false, and pronouns are disabled.
     * @param bool|null $value Value to set for the isEnabledInOrganization property.
    */
    public function setIsEnabledInOrganization(?bool $value): void {
        $this->getBackingStore()->set('isEnabledInOrganization', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
