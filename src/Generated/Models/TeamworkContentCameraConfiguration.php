<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkContentCameraConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $isContentCameraInverted True if the content camera is inverted.
    */
    private ?bool $isContentCameraInverted = null;
    
    /**
     * @var bool|null $isContentCameraOptional True if the content camera is optional.
    */
    private ?bool $isContentCameraOptional = null;
    
    /**
     * @var bool|null $isContentEnhancementEnabled True if the content enhancement is enabled.
    */
    private ?bool $isContentEnhancementEnabled = null;
    
    /**
     * Instantiates a new teamworkContentCameraConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkContentCameraConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkContentCameraConfiguration {
        return new TeamworkContentCameraConfiguration();
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
            'isContentCameraInverted' => function (ParseNode $n) use ($o) { $o->setIsContentCameraInverted($n->getBooleanValue()); },
            'isContentCameraOptional' => function (ParseNode $n) use ($o) { $o->setIsContentCameraOptional($n->getBooleanValue()); },
            'isContentEnhancementEnabled' => function (ParseNode $n) use ($o) { $o->setIsContentEnhancementEnabled($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the isContentCameraInverted property value. True if the content camera is inverted.
     * @return bool|null
    */
    public function getIsContentCameraInverted(): ?bool {
        return $this->isContentCameraInverted;
    }

    /**
     * Gets the isContentCameraOptional property value. True if the content camera is optional.
     * @return bool|null
    */
    public function getIsContentCameraOptional(): ?bool {
        return $this->isContentCameraOptional;
    }

    /**
     * Gets the isContentEnhancementEnabled property value. True if the content enhancement is enabled.
     * @return bool|null
    */
    public function getIsContentEnhancementEnabled(): ?bool {
        return $this->isContentEnhancementEnabled;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('isContentCameraInverted', $this->isContentCameraInverted);
        $writer->writeBooleanValue('isContentCameraOptional', $this->isContentCameraOptional);
        $writer->writeBooleanValue('isContentEnhancementEnabled', $this->isContentEnhancementEnabled);
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
     * Sets the isContentCameraInverted property value. True if the content camera is inverted.
     *  @param bool|null $value Value to set for the isContentCameraInverted property.
    */
    public function setIsContentCameraInverted(?bool $value ): void {
        $this->isContentCameraInverted = $value;
    }

    /**
     * Sets the isContentCameraOptional property value. True if the content camera is optional.
     *  @param bool|null $value Value to set for the isContentCameraOptional property.
    */
    public function setIsContentCameraOptional(?bool $value ): void {
        $this->isContentCameraOptional = $value;
    }

    /**
     * Sets the isContentEnhancementEnabled property value. True if the content enhancement is enabled.
     *  @param bool|null $value Value to set for the isContentEnhancementEnabled property.
    */
    public function setIsContentEnhancementEnabled(?bool $value ): void {
        $this->isContentEnhancementEnabled = $value;
    }

}
