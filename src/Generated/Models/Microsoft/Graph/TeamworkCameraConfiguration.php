<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkCameraConfiguration implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<TeamworkPeripheral>|null $cameras  */
    private ?array $cameras = null;
    
    /** @var TeamworkContentCameraConfiguration|null $contentCameraConfiguration The configuration for the content camera. */
    private ?TeamworkContentCameraConfiguration $contentCameraConfiguration = null;
    
    /** @var TeamworkPeripheral|null $defaultContentCamera  */
    private ?TeamworkPeripheral $defaultContentCamera = null;
    
    /**
     * Instantiates a new teamworkCameraConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkCameraConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkCameraConfiguration {
        return new TeamworkCameraConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the cameras property value. 
     * @return array<TeamworkPeripheral>|null
    */
    public function getCameras(): ?array {
        return $this->cameras;
    }

    /**
     * Gets the contentCameraConfiguration property value. The configuration for the content camera.
     * @return TeamworkContentCameraConfiguration|null
    */
    public function getContentCameraConfiguration(): ?TeamworkContentCameraConfiguration {
        return $this->contentCameraConfiguration;
    }

    /**
     * Gets the defaultContentCamera property value. 
     * @return TeamworkPeripheral|null
    */
    public function getDefaultContentCamera(): ?TeamworkPeripheral {
        return $this->defaultContentCamera;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'cameras' => function (self $o, ParseNode $n) { $o->setCameras($n->getCollectionOfObjectValues(TeamworkPeripheral::class)); },
            'contentCameraConfiguration' => function (self $o, ParseNode $n) { $o->setContentCameraConfiguration($n->getObjectValue(TeamworkContentCameraConfiguration::class)); },
            'defaultContentCamera' => function (self $o, ParseNode $n) { $o->setDefaultContentCamera($n->getObjectValue(TeamworkPeripheral::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('cameras', $this->cameras);
        $writer->writeObjectValue('contentCameraConfiguration', $this->contentCameraConfiguration);
        $writer->writeObjectValue('defaultContentCamera', $this->defaultContentCamera);
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
     * Sets the cameras property value. 
     *  @param array<TeamworkPeripheral>|null $value Value to set for the cameras property.
    */
    public function setCameras(?array $value ): void {
        $this->cameras = $value;
    }

    /**
     * Sets the contentCameraConfiguration property value. The configuration for the content camera.
     *  @param TeamworkContentCameraConfiguration|null $value Value to set for the contentCameraConfiguration property.
    */
    public function setContentCameraConfiguration(?TeamworkContentCameraConfiguration $value ): void {
        $this->contentCameraConfiguration = $value;
    }

    /**
     * Sets the defaultContentCamera property value. 
     *  @param TeamworkPeripheral|null $value Value to set for the defaultContentCamera property.
    */
    public function setDefaultContentCamera(?TeamworkPeripheral $value ): void {
        $this->defaultContentCamera = $value;
    }

}
