<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AgentEndpointConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AgentEndpointConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgentEndpointConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgentEndpointConfiguration {
        return new AgentEndpointConfiguration();
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
     * Gets the apiBased property value. The API-based endpoint details. Populated when configurationType is apiBased; carries the callback URI that Teams posts to. Must be null when configurationType is botBased.
     * @return AgentBlueprintApiBasedEndpointConfigurationDetails|null
    */
    public function getApiBased(): ?AgentBlueprintApiBasedEndpointConfigurationDetails {
        $val = $this->getBackingStore()->get('apiBased');
        if (is_null($val) || $val instanceof AgentBlueprintApiBasedEndpointConfigurationDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'apiBased'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the botBased property value. The bot-based endpoint details. Populated when configurationType is botBased; carries the bot ID that Teams messages. Must be null when configurationType is apiBased.
     * @return AgentBlueprintBotBasedEndpointConfigurationDetails|null
    */
    public function getBotBased(): ?AgentBlueprintBotBasedEndpointConfigurationDetails {
        $val = $this->getBackingStore()->get('botBased');
        if (is_null($val) || $val instanceof AgentBlueprintBotBasedEndpointConfigurationDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'botBased'");
    }

    /**
     * Gets the configurationType property value. The configurationType property
     * @return AgentEndpointConfigurationType|null
    */
    public function getConfigurationType(): ?AgentEndpointConfigurationType {
        $val = $this->getBackingStore()->get('configurationType');
        if (is_null($val) || $val instanceof AgentEndpointConfigurationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'apiBased' => fn(ParseNode $n) => $o->setApiBased($n->getObjectValue([AgentBlueprintApiBasedEndpointConfigurationDetails::class, 'createFromDiscriminatorValue'])),
            'botBased' => fn(ParseNode $n) => $o->setBotBased($n->getObjectValue([AgentBlueprintBotBasedEndpointConfigurationDetails::class, 'createFromDiscriminatorValue'])),
            'configurationType' => fn(ParseNode $n) => $o->setConfigurationType($n->getEnumValue(AgentEndpointConfigurationType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('apiBased', $this->getApiBased());
        $writer->writeObjectValue('botBased', $this->getBotBased());
        $writer->writeEnumValue('configurationType', $this->getConfigurationType());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the apiBased property value. The API-based endpoint details. Populated when configurationType is apiBased; carries the callback URI that Teams posts to. Must be null when configurationType is botBased.
     * @param AgentBlueprintApiBasedEndpointConfigurationDetails|null $value Value to set for the apiBased property.
    */
    public function setApiBased(?AgentBlueprintApiBasedEndpointConfigurationDetails $value): void {
        $this->getBackingStore()->set('apiBased', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the botBased property value. The bot-based endpoint details. Populated when configurationType is botBased; carries the bot ID that Teams messages. Must be null when configurationType is apiBased.
     * @param AgentBlueprintBotBasedEndpointConfigurationDetails|null $value Value to set for the botBased property.
    */
    public function setBotBased(?AgentBlueprintBotBasedEndpointConfigurationDetails $value): void {
        $this->getBackingStore()->set('botBased', $value);
    }

    /**
     * Sets the configurationType property value. The configurationType property
     * @param AgentEndpointConfigurationType|null $value Value to set for the configurationType property.
    */
    public function setConfigurationType(?AgentEndpointConfigurationType $value): void {
        $this->getBackingStore()->set('configurationType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
