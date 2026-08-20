<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class MediaSegment implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new MediaSegment and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaSegment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaSegment {
        return new MediaSegment();
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the endTimeSec property value. End time of the segment, in seconds from the start of the analyzed live stream. Set to 0 for recorded or offline analysis, where a stream-relative time base doesn't apply.
     * @return int|null
    */
    public function getEndTimeSec(): ?int {
        $val = $this->getBackingStore()->get('endTimeSec');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'endTimeSec'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endTimeSec' => fn(ParseNode $n) => $o->setEndTimeSec($n->getIntegerValue()),
            'frameIndices' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'int');
                }
                /** @var array<int>|null $val */
                $this->setFrameIndices($val);
            },
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'startTimeSec' => fn(ParseNode $n) => $o->setStartTimeSec($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the frameIndices property value. Frame indices that identify the video frames in the segment. Applies only to video analysis; pass an empty array for audio-only segments.
     * @return array<int>|null
    */
    public function getFrameIndices(): ?array {
        $val = $this->getBackingStore()->get('frameIndices');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'int');
            /** @var array<int>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'frameIndices'");
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
     * Gets the startTimeSec property value. Start time of the segment, in seconds from the start of the analyzed live stream. Set to 0 for recorded or offline analysis, where a stream-relative time base doesn't apply.
     * @return int|null
    */
    public function getStartTimeSec(): ?int {
        $val = $this->getBackingStore()->get('startTimeSec');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startTimeSec'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('endTimeSec', $this->getEndTimeSec());
        $writer->writeCollectionOfPrimitiveValues('frameIndices', $this->getFrameIndices());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('startTimeSec', $this->getStartTimeSec());
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
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the endTimeSec property value. End time of the segment, in seconds from the start of the analyzed live stream. Set to 0 for recorded or offline analysis, where a stream-relative time base doesn't apply.
     * @param int|null $value Value to set for the endTimeSec property.
    */
    public function setEndTimeSec(?int $value): void {
        $this->getBackingStore()->set('endTimeSec', $value);
    }

    /**
     * Sets the frameIndices property value. Frame indices that identify the video frames in the segment. Applies only to video analysis; pass an empty array for audio-only segments.
     * @param array<int>|null $value Value to set for the frameIndices property.
    */
    public function setFrameIndices(?array $value): void {
        $this->getBackingStore()->set('frameIndices', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the startTimeSec property value. Start time of the segment, in seconds from the start of the analyzed live stream. Set to 0 for recorded or offline analysis, where a stream-relative time base doesn't apply.
     * @param int|null $value Value to set for the startTimeSec property.
    */
    public function setStartTimeSec(?int $value): void {
        $this->getBackingStore()->set('startTimeSec', $value);
    }

}
