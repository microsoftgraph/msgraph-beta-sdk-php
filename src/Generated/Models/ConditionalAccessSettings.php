<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConditionalAccessSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new ConditionalAccessSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConditionalAccessSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConditionalAccessSettings {
        return new ConditionalAccessSettings();
    }

    /**
     * Gets the exclusions property value. The tenant-wide exclusions configuration.
     * @return ConditionalAccessExclusions|null
    */
    public function getExclusions(): ?ConditionalAccessExclusions {
        $val = $this->getBackingStore()->get('exclusions');
        if (is_null($val) || $val instanceof ConditionalAccessExclusions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'exclusions'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'exclusions' => fn(ParseNode $n) => $o->setExclusions($n->getObjectValue([ConditionalAccessExclusions::class, 'createFromDiscriminatorValue'])),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Gets the modifiedDateTime property value. The date and time the settings were last modified, in ISO 8601 format and UTC. Nullable. Read-only.
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('modifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedDateTime'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('exclusions', $this->getExclusions());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
    }

    /**
     * Sets the exclusions property value. The tenant-wide exclusions configuration.
     * @param ConditionalAccessExclusions|null $value Value to set for the exclusions property.
    */
    public function setExclusions(?ConditionalAccessExclusions $value): void {
        $this->getBackingStore()->set('exclusions', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The date and time the settings were last modified, in ISO 8601 format and UTC. Nullable. Read-only.
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

}
