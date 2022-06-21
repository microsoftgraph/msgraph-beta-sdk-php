<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Participant extends Entity implements Parsable 
{
    /**
     * @var ParticipantInfo|null $info The info property
    */
    private ?ParticipantInfo $info = null;
    
    /**
     * @var bool|null $isInLobby true if the participant is in lobby.
    */
    private ?bool $isInLobby = null;
    
    /**
     * @var bool|null $isMuted true if the participant is muted (client or server muted).
    */
    private ?bool $isMuted = null;
    
    /**
     * @var array<MediaStream>|null $mediaStreams The list of media streams.
    */
    private ?array $mediaStreams = null;
    
    /**
     * @var string|null $metadata A blob of data provided by the participant in the roster.
    */
    private ?string $metadata = null;
    
    /**
     * @var RecordingInfo|null $recordingInfo Information on whether the participant has recording capability.
    */
    private ?RecordingInfo $recordingInfo = null;
    
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
            'info' => function (ParseNode $n) use ($o) { $o->setInfo($n->getObjectValue(array(ParticipantInfo::class, 'createFromDiscriminatorValue'))); },
            'isInLobby' => function (ParseNode $n) use ($o) { $o->setIsInLobby($n->getBooleanValue()); },
            'isMuted' => function (ParseNode $n) use ($o) { $o->setIsMuted($n->getBooleanValue()); },
            'mediaStreams' => function (ParseNode $n) use ($o) { $o->setMediaStreams($n->getCollectionOfObjectValues(array(MediaStream::class, 'createFromDiscriminatorValue'))); },
            'metadata' => function (ParseNode $n) use ($o) { $o->setMetadata($n->getStringValue()); },
            'recordingInfo' => function (ParseNode $n) use ($o) { $o->setRecordingInfo($n->getObjectValue(array(RecordingInfo::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the info property value. The info property
     * @return ParticipantInfo|null
    */
    public function getInfo(): ?ParticipantInfo {
        return $this->info;
    }

    /**
     * Gets the isInLobby property value. true if the participant is in lobby.
     * @return bool|null
    */
    public function getIsInLobby(): ?bool {
        return $this->isInLobby;
    }

    /**
     * Gets the isMuted property value. true if the participant is muted (client or server muted).
     * @return bool|null
    */
    public function getIsMuted(): ?bool {
        return $this->isMuted;
    }

    /**
     * Gets the mediaStreams property value. The list of media streams.
     * @return array<MediaStream>|null
    */
    public function getMediaStreams(): ?array {
        return $this->mediaStreams;
    }

    /**
     * Gets the metadata property value. A blob of data provided by the participant in the roster.
     * @return string|null
    */
    public function getMetadata(): ?string {
        return $this->metadata;
    }

    /**
     * Gets the recordingInfo property value. Information on whether the participant has recording capability.
     * @return RecordingInfo|null
    */
    public function getRecordingInfo(): ?RecordingInfo {
        return $this->recordingInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('info', $this->info);
        $writer->writeBooleanValue('isInLobby', $this->isInLobby);
        $writer->writeBooleanValue('isMuted', $this->isMuted);
        $writer->writeCollectionOfObjectValues('mediaStreams', $this->mediaStreams);
        $writer->writeStringValue('metadata', $this->metadata);
        $writer->writeObjectValue('recordingInfo', $this->recordingInfo);
    }

    /**
     * Sets the info property value. The info property
     *  @param ParticipantInfo|null $value Value to set for the info property.
    */
    public function setInfo(?ParticipantInfo $value ): void {
        $this->info = $value;
    }

    /**
     * Sets the isInLobby property value. true if the participant is in lobby.
     *  @param bool|null $value Value to set for the isInLobby property.
    */
    public function setIsInLobby(?bool $value ): void {
        $this->isInLobby = $value;
    }

    /**
     * Sets the isMuted property value. true if the participant is muted (client or server muted).
     *  @param bool|null $value Value to set for the isMuted property.
    */
    public function setIsMuted(?bool $value ): void {
        $this->isMuted = $value;
    }

    /**
     * Sets the mediaStreams property value. The list of media streams.
     *  @param array<MediaStream>|null $value Value to set for the mediaStreams property.
    */
    public function setMediaStreams(?array $value ): void {
        $this->mediaStreams = $value;
    }

    /**
     * Sets the metadata property value. A blob of data provided by the participant in the roster.
     *  @param string|null $value Value to set for the metadata property.
    */
    public function setMetadata(?string $value ): void {
        $this->metadata = $value;
    }

    /**
     * Sets the recordingInfo property value. Information on whether the participant has recording capability.
     *  @param RecordingInfo|null $value Value to set for the recordingInfo property.
    */
    public function setRecordingInfo(?RecordingInfo $value ): void {
        $this->recordingInfo = $value;
    }

}
