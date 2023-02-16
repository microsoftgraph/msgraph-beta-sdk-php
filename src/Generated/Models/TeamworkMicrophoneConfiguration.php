<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkMicrophoneConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkMicrophoneConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkMicrophoneConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkMicrophoneConfiguration {
        return new TeamworkMicrophoneConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
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
     * Gets the defaultMicrophone property value. The defaultMicrophone property
     * @return TeamworkPeripheral|null
    */
    public function getDefaultMicrophone(): ?TeamworkPeripheral {
        return $this->getBackingStore()->get('defaultMicrophone');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'defaultMicrophone' => fn(ParseNode $n) => $o->setDefaultMicrophone($n->getObjectValue([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            'isMicrophoneOptional' => fn(ParseNode $n) => $o->setIsMicrophoneOptional($n->getBooleanValue()),
            'microphones' => fn(ParseNode $n) => $o->setMicrophones($n->getCollectionOfObjectValues([TeamworkPeripheral::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the isMicrophoneOptional property value. True if the configured microphone is optional. False if the microphone is not optional and the health state of the device should be computed.
     * @return bool|null
    */
    public function getIsMicrophoneOptional(): ?bool {
        return $this->getBackingStore()->get('isMicrophoneOptional');
    }

    /**
     * Gets the microphones property value. The microphones property
     * @return array<TeamworkPeripheral>|null
    */
    public function getMicrophones(): ?array {
        return $this->getBackingStore()->get('microphones');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('defaultMicrophone', $this->getDefaultMicrophone());
        $writer->writeBooleanValue('isMicrophoneOptional', $this->getIsMicrophoneOptional());
        $writer->writeCollectionOfObjectValues('microphones', $this->getMicrophones());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the defaultMicrophone property value. The defaultMicrophone property
     * @param TeamworkPeripheral|null $value Value to set for the defaultMicrophone property.
    */
    public function setDefaultMicrophone(?TeamworkPeripheral $value): void {
        $this->getBackingStore()->set('defaultMicrophone', $value);
    }

    /**
     * Sets the isMicrophoneOptional property value. True if the configured microphone is optional. False if the microphone is not optional and the health state of the device should be computed.
     * @param bool|null $value Value to set for the isMicrophoneOptional property.
    */
    public function setIsMicrophoneOptional(?bool $value): void {
        $this->getBackingStore()->set('isMicrophoneOptional', $value);
    }

    /**
     * Sets the microphones property value. The microphones property
     * @param array<TeamworkPeripheral>|null $value Value to set for the microphones property.
    */
    public function setMicrophones(?array $value): void {
        $this->getBackingStore()->set('microphones', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
