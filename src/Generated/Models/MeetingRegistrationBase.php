<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingRegistrationBase extends Entity 
{
    /** @var MeetingAudience|null $allowedRegistrant Specifies who can register for the meeting. */
    private ?MeetingAudience $allowedRegistrant = null;
    
    /** @var array<MeetingRegistrantBase>|null $registrants Registrants of the online meeting. */
    private ?array $registrants = null;
    
    /**
     * Instantiates a new meetingRegistrationBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingRegistrationBase
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MeetingRegistrationBase {
        return new MeetingRegistrationBase();
    }

    /**
     * Gets the allowedRegistrant property value. Specifies who can register for the meeting.
     * @return MeetingAudience|null
    */
    public function getAllowedRegistrant(): ?MeetingAudience {
        return $this->allowedRegistrant;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'allowedRegistrant' => function (self $o, ParseNode $n) { $o->setAllowedRegistrant($n->getEnumValue(MeetingAudience::class)); },
            'registrants' => function (self $o, ParseNode $n) { $o->setRegistrants($n->getCollectionOfObjectValues(MeetingRegistrantBase::class)); },
        ]);
    }

    /**
     * Gets the registrants property value. Registrants of the online meeting.
     * @return array<MeetingRegistrantBase>|null
    */
    public function getRegistrants(): ?array {
        return $this->registrants;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowedRegistrant', $this->allowedRegistrant);
        $writer->writeCollectionOfObjectValues('registrants', $this->registrants);
    }

    /**
     * Sets the allowedRegistrant property value. Specifies who can register for the meeting.
     *  @param MeetingAudience|null $value Value to set for the allowedRegistrant property.
    */
    public function setAllowedRegistrant(?MeetingAudience $value ): void {
        $this->allowedRegistrant = $value;
    }

    /**
     * Sets the registrants property value. Registrants of the online meeting.
     *  @param array<MeetingRegistrantBase>|null $value Value to set for the registrants property.
    */
    public function setRegistrants(?array $value ): void {
        $this->registrants = $value;
    }

}
