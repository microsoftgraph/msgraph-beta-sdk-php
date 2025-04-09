<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CopilotSetting extends Entity implements Parsable 
{
    /**
     * Instantiates a new CopilotSetting and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotSetting
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotSetting {
        return new CopilotSetting();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'people' => fn(ParseNode $n) => $o->setPeople($n->getObjectValue([CopilotPeopleAdminSetting::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the people property value. The people property
     * @return CopilotPeopleAdminSetting|null
    */
    public function getPeople(): ?CopilotPeopleAdminSetting {
        $val = $this->getBackingStore()->get('people');
        if (is_null($val) || $val instanceof CopilotPeopleAdminSetting) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'people'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('people', $this->getPeople());
    }

    /**
     * Sets the people property value. The people property
     * @param CopilotPeopleAdminSetting|null $value Value to set for the people property.
    */
    public function setPeople(?CopilotPeopleAdminSetting $value): void {
        $this->getBackingStore()->set('people', $value);
    }

}
