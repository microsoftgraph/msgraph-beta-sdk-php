<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkSpeakerConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkPeripheral|null $defaultCommunicationSpeaker The defaultCommunicationSpeaker property
    */
    private ?TeamworkPeripheral $defaultCommunicationSpeaker = null;
    
    /**
     * @var TeamworkPeripheral|null $defaultSpeaker The defaultSpeaker property
    */
    private ?TeamworkPeripheral $defaultSpeaker = null;
    
    /**
     * @var bool|null $isCommunicationSpeakerOptional True if the communication speaker is optional. Used to compute the health state if the communication speaker is not optional.
    */
    private ?bool $isCommunicationSpeakerOptional = null;
    
    /**
     * @var bool|null $isSpeakerOptional True if the configured speaker is optional. Used to compute the health state if the speaker is not optional.
    */
    private ?bool $isSpeakerOptional = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<TeamworkPeripheral>|null $speakers The speakers property
    */
    private ?array $speakers = null;
    
    /**
     * Instantiates a new teamworkSpeakerConfiguration and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkSpeakerConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkSpeakerConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkSpeakerConfiguration {
        return new TeamworkSpeakerConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the defaultCommunicationSpeaker property value. The defaultCommunicationSpeaker property
     * @return TeamworkPeripheral|null
    */
    public function getDefaultCommunicationSpeaker(): ?TeamworkPeripheral {
        return $this->defaultCommunicationSpeaker;
    }

    /**
     * Gets the defaultSpeaker property value. The defaultSpeaker property
     * @return TeamworkPeripheral|null
    */
    public function getDefaultSpeaker(): ?TeamworkPeripheral {
        return $this->defaultSpeaker;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultCommunicationSpeaker' => function (ParseNode $n) use ($o) { $o->setDefaultCommunicationSpeaker($n->getObjectValue(array(TeamworkPeripheral::class, 'createFromDiscriminatorValue'))); },
            'defaultSpeaker' => function (ParseNode $n) use ($o) { $o->setDefaultSpeaker($n->getObjectValue(array(TeamworkPeripheral::class, 'createFromDiscriminatorValue'))); },
            'isCommunicationSpeakerOptional' => function (ParseNode $n) use ($o) { $o->setIsCommunicationSpeakerOptional($n->getBooleanValue()); },
            'isSpeakerOptional' => function (ParseNode $n) use ($o) { $o->setIsSpeakerOptional($n->getBooleanValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'speakers' => function (ParseNode $n) use ($o) { $o->setSpeakers($n->getCollectionOfObjectValues(array(TeamworkPeripheral::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the isCommunicationSpeakerOptional property value. True if the communication speaker is optional. Used to compute the health state if the communication speaker is not optional.
     * @return bool|null
    */
    public function getIsCommunicationSpeakerOptional(): ?bool {
        return $this->isCommunicationSpeakerOptional;
    }

    /**
     * Gets the isSpeakerOptional property value. True if the configured speaker is optional. Used to compute the health state if the speaker is not optional.
     * @return bool|null
    */
    public function getIsSpeakerOptional(): ?bool {
        return $this->isSpeakerOptional;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the speakers property value. The speakers property
     * @return array<TeamworkPeripheral>|null
    */
    public function getSpeakers(): ?array {
        return $this->speakers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('defaultCommunicationSpeaker', $this->defaultCommunicationSpeaker);
        $writer->writeObjectValue('defaultSpeaker', $this->defaultSpeaker);
        $writer->writeBooleanValue('isCommunicationSpeakerOptional', $this->isCommunicationSpeakerOptional);
        $writer->writeBooleanValue('isSpeakerOptional', $this->isSpeakerOptional);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('speakers', $this->speakers);
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
     * Sets the defaultCommunicationSpeaker property value. The defaultCommunicationSpeaker property
     *  @param TeamworkPeripheral|null $value Value to set for the defaultCommunicationSpeaker property.
    */
    public function setDefaultCommunicationSpeaker(?TeamworkPeripheral $value ): void {
        $this->defaultCommunicationSpeaker = $value;
    }

    /**
     * Sets the defaultSpeaker property value. The defaultSpeaker property
     *  @param TeamworkPeripheral|null $value Value to set for the defaultSpeaker property.
    */
    public function setDefaultSpeaker(?TeamworkPeripheral $value ): void {
        $this->defaultSpeaker = $value;
    }

    /**
     * Sets the isCommunicationSpeakerOptional property value. True if the communication speaker is optional. Used to compute the health state if the communication speaker is not optional.
     *  @param bool|null $value Value to set for the isCommunicationSpeakerOptional property.
    */
    public function setIsCommunicationSpeakerOptional(?bool $value ): void {
        $this->isCommunicationSpeakerOptional = $value;
    }

    /**
     * Sets the isSpeakerOptional property value. True if the configured speaker is optional. Used to compute the health state if the speaker is not optional.
     *  @param bool|null $value Value to set for the isSpeakerOptional property.
    */
    public function setIsSpeakerOptional(?bool $value ): void {
        $this->isSpeakerOptional = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the speakers property value. The speakers property
     *  @param array<TeamworkPeripheral>|null $value Value to set for the speakers property.
    */
    public function setSpeakers(?array $value ): void {
        $this->speakers = $value;
    }

}
