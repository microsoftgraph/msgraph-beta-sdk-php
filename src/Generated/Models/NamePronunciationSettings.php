<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NamePronunciationSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new NamePronunciationSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NamePronunciationSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NamePronunciationSettings {
        return new NamePronunciationSettings();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isEnabledInOrganization' => fn(ParseNode $n) => $o->setIsEnabledInOrganization($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isEnabledInOrganization property value. true to enable name pronunciation in the organization; otherwise, false. The default value is false.
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isEnabledInOrganization', $this->getIsEnabledInOrganization());
    }

    /**
     * Sets the isEnabledInOrganization property value. true to enable name pronunciation in the organization; otherwise, false. The default value is false.
     * @param bool|null $value Value to set for the isEnabledInOrganization property.
    */
    public function setIsEnabledInOrganization(?bool $value): void {
        $this->getBackingStore()->set('isEnabledInOrganization', $value);
    }

}
