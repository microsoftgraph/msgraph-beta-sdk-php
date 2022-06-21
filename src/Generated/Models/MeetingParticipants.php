<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MeetingParticipants implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<MeetingParticipantInfo>|null $attendees Information of the meeting attendees.
    */
    private ?array $attendees = null;
    
    /**
     * @var array<MeetingParticipantInfo>|null $contributors The contributors property
    */
    private ?array $contributors = null;
    
    /**
     * @var MeetingParticipantInfo|null $organizer Information of the meeting organizer.
    */
    private ?MeetingParticipantInfo $organizer = null;
    
    /**
     * @var array<MeetingParticipantInfo>|null $producers The producers property
    */
    private ?array $producers = null;
    
    /**
     * Instantiates a new meetingParticipants and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MeetingParticipants
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MeetingParticipants {
        return new MeetingParticipants();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the attendees property value. Information of the meeting attendees.
     * @return array<MeetingParticipantInfo>|null
    */
    public function getAttendees(): ?array {
        return $this->attendees;
    }

    /**
     * Gets the contributors property value. The contributors property
     * @return array<MeetingParticipantInfo>|null
    */
    public function getContributors(): ?array {
        return $this->contributors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attendees' => function (ParseNode $n) use ($o) { $o->setAttendees($n->getCollectionOfObjectValues(array(MeetingParticipantInfo::class, 'createFromDiscriminatorValue'))); },
            'contributors' => function (ParseNode $n) use ($o) { $o->setContributors($n->getCollectionOfObjectValues(array(MeetingParticipantInfo::class, 'createFromDiscriminatorValue'))); },
            'organizer' => function (ParseNode $n) use ($o) { $o->setOrganizer($n->getObjectValue(array(MeetingParticipantInfo::class, 'createFromDiscriminatorValue'))); },
            'producers' => function (ParseNode $n) use ($o) { $o->setProducers($n->getCollectionOfObjectValues(array(MeetingParticipantInfo::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the organizer property value. Information of the meeting organizer.
     * @return MeetingParticipantInfo|null
    */
    public function getOrganizer(): ?MeetingParticipantInfo {
        return $this->organizer;
    }

    /**
     * Gets the producers property value. The producers property
     * @return array<MeetingParticipantInfo>|null
    */
    public function getProducers(): ?array {
        return $this->producers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attendees', $this->attendees);
        $writer->writeCollectionOfObjectValues('contributors', $this->contributors);
        $writer->writeObjectValue('organizer', $this->organizer);
        $writer->writeCollectionOfObjectValues('producers', $this->producers);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the attendees property value. Information of the meeting attendees.
     *  @param array<MeetingParticipantInfo>|null $value Value to set for the attendees property.
    */
    public function setAttendees(?array $value ): void {
        $this->attendees = $value;
    }

    /**
     * Sets the contributors property value. The contributors property
     *  @param array<MeetingParticipantInfo>|null $value Value to set for the contributors property.
    */
    public function setContributors(?array $value ): void {
        $this->contributors = $value;
    }

    /**
     * Sets the organizer property value. Information of the meeting organizer.
     *  @param MeetingParticipantInfo|null $value Value to set for the organizer property.
    */
    public function setOrganizer(?MeetingParticipantInfo $value ): void {
        $this->organizer = $value;
    }

    /**
     * Sets the producers property value. The producers property
     *  @param array<MeetingParticipantInfo>|null $value Value to set for the producers property.
    */
    public function setProducers(?array $value ): void {
        $this->producers = $value;
    }

}
