<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkCameraConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<TeamworkPeripheral>|null $cameras The cameras property
    */
    private ?array $cameras = null;
    
    /**
     * @var TeamworkContentCameraConfiguration|null $contentCameraConfiguration The configuration for the content camera.
    */
    private ?TeamworkContentCameraConfiguration $contentCameraConfiguration = null;
    
    /**
     * @var TeamworkPeripheral|null $defaultContentCamera The defaultContentCamera property
    */
    private ?TeamworkPeripheral $defaultContentCamera = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new teamworkCameraConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkCameraConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkCameraConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkCameraConfiguration {
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
     * Gets the cameras property value. The cameras property
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
     * Gets the defaultContentCamera property value. The defaultContentCamera property
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
        $o = $this;
        return  [
            'cameras' => fn(ParseNode $n) => $o->setCameras($n->getCollectionOfObjectValues([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            'contentCameraConfiguration' => fn(ParseNode $n) => $o->setContentCameraConfiguration($n->getObjectValue([TeamworkContentCameraConfiguration::class, 'createFromDiscriminatorValue'])),
            'defaultContentCamera' => fn(ParseNode $n) => $o->setDefaultContentCamera($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('cameras', $this->cameras);
        $writer->writeObjectValue('contentCameraConfiguration', $this->contentCameraConfiguration);
        $writer->writeObjectValue('defaultContentCamera', $this->defaultContentCamera);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the cameras property value. The cameras property
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
     * Sets the defaultContentCamera property value. The defaultContentCamera property
     *  @param TeamworkPeripheral|null $value Value to set for the defaultContentCamera property.
    */
    public function setDefaultContentCamera(?TeamworkPeripheral $value ): void {
        $this->defaultContentCamera = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
