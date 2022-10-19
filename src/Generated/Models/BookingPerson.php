<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BookingPerson extends BookingNamedEntity implements Parsable 
{
    /**
     * @var string|null $emailAddress The email address of the person.
    */
    private ?string $emailAddress = null;
    
    /**
     * Instantiates a new bookingPerson and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.bookingPerson');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BookingPerson
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BookingPerson {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.bookingCustomer': return new BookingCustomer();
                case '#microsoft.graph.bookingStaffMember': return new BookingStaffMember();
            }
        }
        return new BookingPerson();
    }

    /**
     * Gets the emailAddress property value. The email address of the person.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'emailAddress' => fn(ParseNode $n) => $o->setEmailAddress($n->getStringValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('emailAddress', $this->emailAddress);
    }

    /**
     * Sets the emailAddress property value. The email address of the person.
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value ): void {
        $this->emailAddress = $value;
    }

}
