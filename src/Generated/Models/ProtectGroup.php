<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ProtectGroup extends LabelActionBase implements Parsable 
{
    /**
     * Instantiates a new protectGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.protectGroup');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ProtectGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ProtectGroup {
        return new ProtectGroup();
    }

    /**
     * Gets the allowEmailFromGuestUsers property value. The allowEmailFromGuestUsers property
     * @return bool|null
    */
    public function getAllowEmailFromGuestUsers(): ?bool {
        $val = $this->getBackingStore()->get('allowEmailFromGuestUsers');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowEmailFromGuestUsers'");
    }

    /**
     * Gets the allowGuestUsers property value. The allowGuestUsers property
     * @return bool|null
    */
    public function getAllowGuestUsers(): ?bool {
        $val = $this->getBackingStore()->get('allowGuestUsers');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowGuestUsers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowEmailFromGuestUsers' => fn(ParseNode $n) => $o->setAllowEmailFromGuestUsers($n->getBooleanValue()),
            'allowGuestUsers' => fn(ParseNode $n) => $o->setAllowGuestUsers($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'privacy' => fn(ParseNode $n) => $o->setPrivacy($n->getEnumValue(GroupPrivacy::class)),
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
     * Gets the privacy property value. The privacy property
     * @return GroupPrivacy|null
    */
    public function getPrivacy(): ?GroupPrivacy {
        $val = $this->getBackingStore()->get('privacy');
        if (is_null($val) || $val instanceof GroupPrivacy) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'privacy'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('allowEmailFromGuestUsers', $this->getAllowEmailFromGuestUsers());
        $writer->writeBooleanValue('allowGuestUsers', $this->getAllowGuestUsers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('privacy', $this->getPrivacy());
    }

    /**
     * Sets the allowEmailFromGuestUsers property value. The allowEmailFromGuestUsers property
     * @param bool|null $value Value to set for the allowEmailFromGuestUsers property.
    */
    public function setAllowEmailFromGuestUsers(?bool $value): void {
        $this->getBackingStore()->set('allowEmailFromGuestUsers', $value);
    }

    /**
     * Sets the allowGuestUsers property value. The allowGuestUsers property
     * @param bool|null $value Value to set for the allowGuestUsers property.
    */
    public function setAllowGuestUsers(?bool $value): void {
        $this->getBackingStore()->set('allowGuestUsers', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the privacy property value. The privacy property
     * @param GroupPrivacy|null $value Value to set for the privacy property.
    */
    public function setPrivacy(?GroupPrivacy $value): void {
        $this->getBackingStore()->set('privacy', $value);
    }

}
