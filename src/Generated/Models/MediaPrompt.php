<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MediaPrompt extends Prompt implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $loop The loop property
    */
    private ?int $loop = null;
    
    /**
     * @var MediaInfo|null $mediaInfo The mediaInfo property
    */
    private ?MediaInfo $mediaInfo = null;
    
    /**
     * Instantiates a new MediaPrompt and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaPrompt
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaPrompt {
        return new MediaPrompt();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'loop' => function (ParseNode $n) use ($o) { $o->setLoop($n->getIntegerValue()); },
            'mediaInfo' => function (ParseNode $n) use ($o) { $o->setMediaInfo($n->getObjectValue(array(MediaInfo::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the loop property value. The loop property
     * @return int|null
    */
    public function getLoop(): ?int {
        return $this->loop;
    }

    /**
     * Gets the mediaInfo property value. The mediaInfo property
     * @return MediaInfo|null
    */
    public function getMediaInfo(): ?MediaInfo {
        return $this->mediaInfo;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('loop', $this->loop);
        $writer->writeObjectValue('mediaInfo', $this->mediaInfo);
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
     * Sets the loop property value. The loop property
     *  @param int|null $value Value to set for the loop property.
    */
    public function setLoop(?int $value ): void {
        $this->loop = $value;
    }

    /**
     * Sets the mediaInfo property value. The mediaInfo property
     *  @param MediaInfo|null $value Value to set for the mediaInfo property.
    */
    public function setMediaInfo(?MediaInfo $value ): void {
        $this->mediaInfo = $value;
    }

}
