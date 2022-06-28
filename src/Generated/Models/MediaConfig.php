<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MediaConfig implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $removeFromDefaultAudioGroup The removeFromDefaultAudioGroup property
    */
    private ?bool $removeFromDefaultAudioGroup = null;
    
    /**
     * Instantiates a new mediaConfig and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MediaConfig
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MediaConfig {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.appHostedMediaConfig': return new AppHostedMediaConfig();
                case '#microsoft.graph.serviceHostedMediaConfig': return new ServiceHostedMediaConfig();
            }
        }
        return new MediaConfig();
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
        return  [
            'removeFromDefaultAudioGroup' => function (ParseNode $n) use ($o) { $o->setRemoveFromDefaultAudioGroup($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the removeFromDefaultAudioGroup property value. The removeFromDefaultAudioGroup property
     * @return bool|null
    */
    public function getRemoveFromDefaultAudioGroup(): ?bool {
        return $this->removeFromDefaultAudioGroup;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('removeFromDefaultAudioGroup', $this->removeFromDefaultAudioGroup);
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
     * Sets the removeFromDefaultAudioGroup property value. The removeFromDefaultAudioGroup property
     *  @param bool|null $value Value to set for the removeFromDefaultAudioGroup property.
    */
    public function setRemoveFromDefaultAudioGroup(?bool $value ): void {
        $this->removeFromDefaultAudioGroup = $value;
    }

}
