<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserCloudCommunication extends Entity implements Parsable 
{
    /**
     * Instantiates a new UserCloudCommunication and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserCloudCommunication
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserCloudCommunication {
        return new UserCloudCommunication();
    }

    /**
     * Gets the callSettings property value. The call settings assigned to the user.
     * @return CallSettings|null
    */
    public function getCallSettings(): ?CallSettings {
        $val = $this->getBackingStore()->get('callSettings');
        if (is_null($val) || $val instanceof CallSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'callSettings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'callSettings' => fn(ParseNode $n) => $o->setCallSettings($n->getObjectValue([CallSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('callSettings', $this->getCallSettings());
    }

    /**
     * Sets the callSettings property value. The call settings assigned to the user.
     * @param CallSettings|null $value Value to set for the callSettings property.
    */
    public function setCallSettings(?CallSettings $value): void {
        $this->getBackingStore()->set('callSettings', $value);
    }

}
