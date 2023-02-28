<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Participant extends Entity implements Parsable 
{
    /**
     * Instantiates a new participant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Participant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Participant {
        return new Participant();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'info' => fn(ParseNode $n) => $o->setInfo($n->getObjectValue([ParticipantInfo::class, 'createFromDiscriminatorValue'])),
            'isIdentityAnonymized' => fn(ParseNode $n) => $o->setIsIdentityAnonymized($n->getBooleanValue()),
            'isInLobby' => fn(ParseNode $n) => $o->setIsInLobby($n->getBooleanValue()),
            'isMuted' => fn(ParseNode $n) => $o->setIsMuted($n->getBooleanValue()),
            'mediaStreams' => fn(ParseNode $n) => $o->setMediaStreams($n->getCollectionOfObjectValues([MediaStream::class, 'createFromDiscriminatorValue'])),
            'metadata' => fn(ParseNode $n) => $o->setMetadata($n->getStringValue()),
            'recordingInfo' => fn(ParseNode $n) => $o->setRecordingInfo($n->getObjectValue([RecordingInfo::class, 'createFromDiscriminatorValue'])),
            'restrictedExperience' => fn(ParseNode $n) => $o->setRestrictedExperience($n->getObjectValue([OnlineMeetingRestricted::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the info property value. The info property
     * @return ParticipantInfo|null
    */
    public function getInfo(): ?ParticipantInfo {
        return $this->getBackingStore()->get('info');
    }

    /**
     * Gets the isIdentityAnonymized property value. The isIdentityAnonymized property
     * @return bool|null
    */
    public function getIsIdentityAnonymized(): ?bool {
        return $this->getBackingStore()->get('isIdentityAnonymized');
    }

    /**
     * Gets the isInLobby property value. true if the participant is in lobby.
     * @return bool|null
    */
    public function getIsInLobby(): ?bool {
        return $this->getBackingStore()->get('isInLobby');
    }

    /**
     * Gets the isMuted property value. true if the participant is muted (client or server muted).
     * @return bool|null
    */
    public function getIsMuted(): ?bool {
        return $this->getBackingStore()->get('isMuted');
    }

    /**
     * Gets the mediaStreams property value. The list of media streams.
     * @return array<MediaStream>|null
    */
    public function getMediaStreams(): ?array {
        return $this->getBackingStore()->get('mediaStreams');
    }

    /**
     * Gets the metadata property value. A blob of data provided by the participant in the roster.
     * @return string|null
    */
    public function getMetadata(): ?string {
        return $this->getBackingStore()->get('metadata');
    }

    /**
     * Gets the recordingInfo property value. Information on whether the participant has recording capability.
     * @return RecordingInfo|null
    */
    public function getRecordingInfo(): ?RecordingInfo {
        return $this->getBackingStore()->get('recordingInfo');
    }

    /**
     * Gets the restrictedExperience property value. Indicates the reason or reasons why media content from this participant is restricted.
     * @return OnlineMeetingRestricted|null
    */
    public function getRestrictedExperience(): ?OnlineMeetingRestricted {
        return $this->getBackingStore()->get('restrictedExperience');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('info', $this->getInfo());
        $writer->writeBooleanValue('isIdentityAnonymized', $this->getIsIdentityAnonymized());
        $writer->writeBooleanValue('isInLobby', $this->getIsInLobby());
        $writer->writeBooleanValue('isMuted', $this->getIsMuted());
        $writer->writeCollectionOfObjectValues('mediaStreams', $this->getMediaStreams());
        $writer->writeStringValue('metadata', $this->getMetadata());
        $writer->writeObjectValue('recordingInfo', $this->getRecordingInfo());
        $writer->writeObjectValue('restrictedExperience', $this->getRestrictedExperience());
    }

    /**
     * Sets the info property value. The info property
     * @param ParticipantInfo|null $value Value to set for the info property.
    */
    public function setInfo(?ParticipantInfo $value): void {
        $this->getBackingStore()->set('info', $value);
    }

    /**
     * Sets the isIdentityAnonymized property value. The isIdentityAnonymized property
     * @param bool|null $value Value to set for the isIdentityAnonymized property.
    */
    public function setIsIdentityAnonymized(?bool $value): void {
        $this->getBackingStore()->set('isIdentityAnonymized', $value);
    }

    /**
     * Sets the isInLobby property value. true if the participant is in lobby.
     * @param bool|null $value Value to set for the isInLobby property.
    */
    public function setIsInLobby(?bool $value): void {
        $this->getBackingStore()->set('isInLobby', $value);
    }

    /**
     * Sets the isMuted property value. true if the participant is muted (client or server muted).
     * @param bool|null $value Value to set for the isMuted property.
    */
    public function setIsMuted(?bool $value): void {
        $this->getBackingStore()->set('isMuted', $value);
    }

    /**
     * Sets the mediaStreams property value. The list of media streams.
     * @param array<MediaStream>|null $value Value to set for the mediaStreams property.
    */
    public function setMediaStreams(?array $value): void {
        $this->getBackingStore()->set('mediaStreams', $value);
    }

    /**
     * Sets the metadata property value. A blob of data provided by the participant in the roster.
     * @param string|null $value Value to set for the metadata property.
    */
    public function setMetadata(?string $value): void {
        $this->getBackingStore()->set('metadata', $value);
    }

    /**
     * Sets the recordingInfo property value. Information on whether the participant has recording capability.
     * @param RecordingInfo|null $value Value to set for the recordingInfo property.
    */
    public function setRecordingInfo(?RecordingInfo $value): void {
        $this->getBackingStore()->set('recordingInfo', $value);
    }

    /**
     * Sets the restrictedExperience property value. Indicates the reason or reasons why media content from this participant is restricted.
     * @param OnlineMeetingRestricted|null $value Value to set for the restrictedExperience property.
    */
    public function setRestrictedExperience(?OnlineMeetingRestricted $value): void {
        $this->getBackingStore()->set('restrictedExperience', $value);
    }

}
