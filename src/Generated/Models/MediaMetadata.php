<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class MediaMetadata implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MediaMetadata and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaMetadata
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaMetadata {
        return new MediaMetadata();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the audioMetadata property value. Audio-specific encoding details. Nullable. Set when the analyzed content is audio or multimodal.
     * @return AudioMetadata|null
    */
    public function getAudioMetadata(): ?AudioMetadata {
        $val = $this->getBackingStore()->get('audioMetadata');
        if (is_null($val) || $val instanceof AudioMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'audioMetadata'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the byteSize property value. Size of the content in bytes. Set this value to 0 for live streams where the total size is unknown; for recorded files, specify the actual size.
     * @return int|null
    */
    public function getByteSize(): ?int {
        $val = $this->getBackingStore()->get('byteSize');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'byteSize'");
    }

    /**
     * Gets the duration property value. Duration of the analyzed content in whole seconds. Sub-second or millisecond windows are rounded to the nearest second. For a continuous live stream, set this value to the length of the analysis window.
     * @return int|null
    */
    public function getDuration(): ?int {
        $val = $this->getBackingStore()->get('duration');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duration'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'audioMetadata' => fn(ParseNode $n) => $o->setAudioMetadata($n->getObjectValue([AudioMetadata::class, 'createFromDiscriminatorValue'])),
            'byteSize' => fn(ParseNode $n) => $o->setByteSize($n->getIntegerValue()),
            'duration' => fn(ParseNode $n) => $o->setDuration($n->getIntegerValue()),
            'isRealTime' => fn(ParseNode $n) => $o->setIsRealTime($n->getBooleanValue()),
            'mimeType' => fn(ParseNode $n) => $o->setMimeType($n->getStringValue()),
            'modality' => fn(ParseNode $n) => $o->setModality($n->getEnumValue(ContentModality::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'streamingMetadata' => fn(ParseNode $n) => $o->setStreamingMetadata($n->getObjectValue([StreamingMetadata::class, 'createFromDiscriminatorValue'])),
            'videoMetadata' => fn(ParseNode $n) => $o->setVideoMetadata($n->getObjectValue([VideoMetadata::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isRealTime property value. Indicates whether the analysis was performed in real time on a live stream.
     * @return bool|null
    */
    public function getIsRealTime(): ?bool {
        $val = $this->getBackingStore()->get('isRealTime');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isRealTime'");
    }

    /**
     * Gets the mimeType property value. MIME type of the analyzed content. Common values for Teams media include audio/pcm, video/mp4, and video/h264.
     * @return string|null
    */
    public function getMimeType(): ?string {
        $val = $this->getBackingStore()->get('mimeType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mimeType'");
    }

    /**
     * Gets the modality property value. The modality property
     * @return ContentModality|null
    */
    public function getModality(): ?ContentModality {
        $val = $this->getBackingStore()->get('modality');
        if (is_null($val) || $val instanceof ContentModality) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modality'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the streamingMetadata property value. Network and real-time streaming quality metrics. Nullable. Set when the analyzed content was streamed in real time.
     * @return StreamingMetadata|null
    */
    public function getStreamingMetadata(): ?StreamingMetadata {
        $val = $this->getBackingStore()->get('streamingMetadata');
        if (is_null($val) || $val instanceof StreamingMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'streamingMetadata'");
    }

    /**
     * Gets the videoMetadata property value. Video-specific encoding and quality details. Nullable. Set when the analyzed content is video or multimodal.
     * @return VideoMetadata|null
    */
    public function getVideoMetadata(): ?VideoMetadata {
        $val = $this->getBackingStore()->get('videoMetadata');
        if (is_null($val) || $val instanceof VideoMetadata) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'videoMetadata'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('audioMetadata', $this->getAudioMetadata());
        $writer->writeIntegerValue('byteSize', $this->getByteSize());
        $writer->writeIntegerValue('duration', $this->getDuration());
        $writer->writeBooleanValue('isRealTime', $this->getIsRealTime());
        $writer->writeStringValue('mimeType', $this->getMimeType());
        $writer->writeEnumValue('modality', $this->getModality());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('streamingMetadata', $this->getStreamingMetadata());
        $writer->writeObjectValue('videoMetadata', $this->getVideoMetadata());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the audioMetadata property value. Audio-specific encoding details. Nullable. Set when the analyzed content is audio or multimodal.
     * @param AudioMetadata|null $value Value to set for the audioMetadata property.
    */
    public function setAudioMetadata(?AudioMetadata $value): void {
        $this->getBackingStore()->set('audioMetadata', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the byteSize property value. Size of the content in bytes. Set this value to 0 for live streams where the total size is unknown; for recorded files, specify the actual size.
     * @param int|null $value Value to set for the byteSize property.
    */
    public function setByteSize(?int $value): void {
        $this->getBackingStore()->set('byteSize', $value);
    }

    /**
     * Sets the duration property value. Duration of the analyzed content in whole seconds. Sub-second or millisecond windows are rounded to the nearest second. For a continuous live stream, set this value to the length of the analysis window.
     * @param int|null $value Value to set for the duration property.
    */
    public function setDuration(?int $value): void {
        $this->getBackingStore()->set('duration', $value);
    }

    /**
     * Sets the isRealTime property value. Indicates whether the analysis was performed in real time on a live stream.
     * @param bool|null $value Value to set for the isRealTime property.
    */
    public function setIsRealTime(?bool $value): void {
        $this->getBackingStore()->set('isRealTime', $value);
    }

    /**
     * Sets the mimeType property value. MIME type of the analyzed content. Common values for Teams media include audio/pcm, video/mp4, and video/h264.
     * @param string|null $value Value to set for the mimeType property.
    */
    public function setMimeType(?string $value): void {
        $this->getBackingStore()->set('mimeType', $value);
    }

    /**
     * Sets the modality property value. The modality property
     * @param ContentModality|null $value Value to set for the modality property.
    */
    public function setModality(?ContentModality $value): void {
        $this->getBackingStore()->set('modality', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the streamingMetadata property value. Network and real-time streaming quality metrics. Nullable. Set when the analyzed content was streamed in real time.
     * @param StreamingMetadata|null $value Value to set for the streamingMetadata property.
    */
    public function setStreamingMetadata(?StreamingMetadata $value): void {
        $this->getBackingStore()->set('streamingMetadata', $value);
    }

    /**
     * Sets the videoMetadata property value. Video-specific encoding and quality details. Nullable. Set when the analyzed content is video or multimodal.
     * @param VideoMetadata|null $value Value to set for the videoMetadata property.
    */
    public function setVideoMetadata(?VideoMetadata $value): void {
        $this->getBackingStore()->set('videoMetadata', $value);
    }

}
