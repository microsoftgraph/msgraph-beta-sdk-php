<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MeetingParticipants implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new meetingParticipants and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the attendees property value. Information of the meeting attendees.
     * @return array<MeetingParticipantInfo>|null
    */
    public function getAttendees(): ?array {
        return $this->getBackingStore()->get('attendees');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the contributors property value. The contributors property
     * @return array<MeetingParticipantInfo>|null
    */
    public function getContributors(): ?array {
        return $this->getBackingStore()->get('contributors');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'attendees' => fn(ParseNode $n) => $o->setAttendees($n->getCollectionOfObjectValues([MeetingParticipantInfo::class, 'createFromDiscriminatorValue'])),
            'contributors' => fn(ParseNode $n) => $o->setContributors($n->getCollectionOfObjectValues([MeetingParticipantInfo::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'organizer' => fn(ParseNode $n) => $o->setOrganizer($n->getObjectValue([MeetingParticipantInfo::class, 'createFromDiscriminatorValue'])),
            'producers' => fn(ParseNode $n) => $o->setProducers($n->getCollectionOfObjectValues([MeetingParticipantInfo::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the organizer property value. Information of the meeting organizer.
     * @return MeetingParticipantInfo|null
    */
    public function getOrganizer(): ?MeetingParticipantInfo {
        return $this->getBackingStore()->get('organizer');
    }

    /**
     * Gets the producers property value. The producers property
     * @return array<MeetingParticipantInfo>|null
    */
    public function getProducers(): ?array {
        return $this->getBackingStore()->get('producers');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('attendees', $this->getAttendees());
        $writer->writeCollectionOfObjectValues('contributors', $this->getContributors());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('organizer', $this->getOrganizer());
        $writer->writeCollectionOfObjectValues('producers', $this->getProducers());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the attendees property value. Information of the meeting attendees.
     * @param array<MeetingParticipantInfo>|null $value Value to set for the attendees property.
    */
    public function setAttendees(?array $value): void {
        $this->getBackingStore()->set('attendees', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the contributors property value. The contributors property
     * @param array<MeetingParticipantInfo>|null $value Value to set for the contributors property.
    */
    public function setContributors(?array $value): void {
        $this->getBackingStore()->set('contributors', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the organizer property value. Information of the meeting organizer.
     * @param MeetingParticipantInfo|null $value Value to set for the organizer property.
    */
    public function setOrganizer(?MeetingParticipantInfo $value): void {
        $this->getBackingStore()->set('organizer', $value);
    }

    /**
     * Sets the producers property value. The producers property
     * @param array<MeetingParticipantInfo>|null $value Value to set for the producers property.
    */
    public function setProducers(?array $value): void {
        $this->getBackingStore()->set('producers', $value);
    }

}
