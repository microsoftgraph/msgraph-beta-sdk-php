<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CopilotPeopleAdminSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new CopilotPeopleAdminSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotPeopleAdminSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotPeopleAdminSetting {
        return new CopilotPeopleAdminSetting();
    }

    /**
     * Gets the enhancedPersonalization property value. The enhancedPersonalization property
     * @return EnhancedPersonalizationSetting|null
    */
    public function getEnhancedPersonalization(): ?EnhancedPersonalizationSetting {
        $val = $this->getBackingStore()->get('enhancedPersonalization');
        if (is_null($val) || $val instanceof EnhancedPersonalizationSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enhancedPersonalization'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enhancedPersonalization' => fn(ParseNode $n) => $o->setEnhancedPersonalization($n->getObjectValue([EnhancedPersonalizationSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('enhancedPersonalization', $this->getEnhancedPersonalization());
    }

    /**
     * Sets the enhancedPersonalization property value. The enhancedPersonalization property
     * @param EnhancedPersonalizationSetting|null $value Value to set for the enhancedPersonalization property.
    */
    public function setEnhancedPersonalization(?EnhancedPersonalizationSetting $value): void {
        $this->getBackingStore()->set('enhancedPersonalization', $value);
    }

}
