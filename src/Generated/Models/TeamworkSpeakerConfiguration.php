<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkSpeakerConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkSpeakerConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
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
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the defaultCommunicationSpeaker property value. The defaultCommunicationSpeaker property
     * @return TeamworkPeripheral|null
    */
    public function getDefaultCommunicationSpeaker(): ?TeamworkPeripheral {
        return $this->getBackingStore()->get('defaultCommunicationSpeaker');
    }

    /**
     * Gets the defaultSpeaker property value. The defaultSpeaker property
     * @return TeamworkPeripheral|null
    */
    public function getDefaultSpeaker(): ?TeamworkPeripheral {
        return $this->getBackingStore()->get('defaultSpeaker');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultCommunicationSpeaker' => fn(ParseNode $n) => $o->setDefaultCommunicationSpeaker($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            'defaultSpeaker' => fn(ParseNode $n) => $o->setDefaultSpeaker($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            'isCommunicationSpeakerOptional' => fn(ParseNode $n) => $o->setIsCommunicationSpeakerOptional($n->getBooleanValue()),
            'isSpeakerOptional' => fn(ParseNode $n) => $o->setIsSpeakerOptional($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'speakers' => fn(ParseNode $n) => $o->setSpeakers($n->getCollectionOfObjectValues([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the isCommunicationSpeakerOptional property value. True if the communication speaker is optional. Used to compute the health state if the communication speaker is not optional.
     * @return bool|null
    */
    public function getIsCommunicationSpeakerOptional(): ?bool {
        return $this->getBackingStore()->get('isCommunicationSpeakerOptional');
    }

    /**
     * Gets the isSpeakerOptional property value. True if the configured speaker is optional. Used to compute the health state if the speaker is not optional.
     * @return bool|null
    */
    public function getIsSpeakerOptional(): ?bool {
        return $this->getBackingStore()->get('isSpeakerOptional');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the speakers property value. The speakers property
     * @return array<TeamworkPeripheral>|null
    */
    public function getSpeakers(): ?array {
        return $this->getBackingStore()->get('speakers');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('defaultCommunicationSpeaker', $this->getDefaultCommunicationSpeaker());
        $writer->writeObjectValue('defaultSpeaker', $this->getDefaultSpeaker());
        $writer->writeBooleanValue('isCommunicationSpeakerOptional', $this->getIsCommunicationSpeakerOptional());
        $writer->writeBooleanValue('isSpeakerOptional', $this->getIsSpeakerOptional());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('speakers', $this->getSpeakers());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the defaultCommunicationSpeaker property value. The defaultCommunicationSpeaker property
     *  @param TeamworkPeripheral|null $value Value to set for the defaultCommunicationSpeaker property.
    */
    public function setDefaultCommunicationSpeaker(?TeamworkPeripheral $value): void {
        $this->getBackingStore()->set('defaultCommunicationSpeaker', $value);
    }

    /**
     * Sets the defaultSpeaker property value. The defaultSpeaker property
     *  @param TeamworkPeripheral|null $value Value to set for the defaultSpeaker property.
    */
    public function setDefaultSpeaker(?TeamworkPeripheral $value): void {
        $this->getBackingStore()->set('defaultSpeaker', $value);
    }

    /**
     * Sets the isCommunicationSpeakerOptional property value. True if the communication speaker is optional. Used to compute the health state if the communication speaker is not optional.
     *  @param bool|null $value Value to set for the isCommunicationSpeakerOptional property.
    */
    public function setIsCommunicationSpeakerOptional(?bool $value): void {
        $this->getBackingStore()->set('isCommunicationSpeakerOptional', $value);
    }

    /**
     * Sets the isSpeakerOptional property value. True if the configured speaker is optional. Used to compute the health state if the speaker is not optional.
     *  @param bool|null $value Value to set for the isSpeakerOptional property.
    */
    public function setIsSpeakerOptional(?bool $value): void {
        $this->getBackingStore()->set('isSpeakerOptional', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the speakers property value. The speakers property
     *  @param array<TeamworkPeripheral>|null $value Value to set for the speakers property.
    */
    public function setSpeakers(?array $value): void {
        $this->getBackingStore()->set('speakers', $value);
    }

}
