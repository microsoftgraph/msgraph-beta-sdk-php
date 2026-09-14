<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DateTimeCustomFieldDefinition extends CustomFieldDefinition implements Parsable 
{
    /**
     * Instantiates a new DateTimeCustomFieldDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.dateTimeCustomFieldDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DateTimeCustomFieldDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DateTimeCustomFieldDefinition {
        return new DateTimeCustomFieldDefinition();
    }

    /**
     * Gets the defaultDateTime property value. The default date/time value applied to the field on a new case. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getDefaultDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('defaultDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'defaultDateTime' => fn(ParseNode $n) => $o->setDefaultDateTime($n->getDateTimeValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('defaultDateTime', $this->getDefaultDateTime());
    }

    /**
     * Sets the defaultDateTime property value. The default date/time value applied to the field on a new case. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the defaultDateTime property.
    */
    public function setDefaultDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('defaultDateTime', $value);
    }

}
