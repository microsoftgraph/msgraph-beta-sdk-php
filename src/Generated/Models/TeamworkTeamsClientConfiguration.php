<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkTeamsClientConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkTeamsClientConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkTeamsClientConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkTeamsClientConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkTeamsClientConfiguration {
        return new TeamworkTeamsClientConfiguration();
    }

    /**
     * Gets the accountConfiguration property value. The configuration of the Microsoft Teams client user account for a device.
     * @return TeamworkAccountConfiguration|null
    */
    public function getAccountConfiguration(): ?TeamworkAccountConfiguration {
        return $this->getBackingStore()->get('accountConfiguration');
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
     * Gets the featuresConfiguration property value. The configuration of Microsoft Teams client features for a device.
     * @return TeamworkFeaturesConfiguration|null
    */
    public function getFeaturesConfiguration(): ?TeamworkFeaturesConfiguration {
        return $this->getBackingStore()->get('featuresConfiguration');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'accountConfiguration' => fn(ParseNode $n) => $o->setAccountConfiguration($n->getObjectValue([TeamworkAccountConfiguration::class, 'createFromDiscriminatorValue'])),
            'featuresConfiguration' => fn(ParseNode $n) => $o->setFeaturesConfiguration($n->getObjectValue([TeamworkFeaturesConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
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
        $writer->writeObjectValue('accountConfiguration', $this->getAccountConfiguration());
        $writer->writeObjectValue('featuresConfiguration', $this->getFeaturesConfiguration());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the accountConfiguration property value. The configuration of the Microsoft Teams client user account for a device.
     *  @param TeamworkAccountConfiguration|null $value Value to set for the accountConfiguration property.
    */
    public function setAccountConfiguration(?TeamworkAccountConfiguration $value): void {
        $this->getBackingStore()->set('accountConfiguration', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the featuresConfiguration property value. The configuration of Microsoft Teams client features for a device.
     *  @param TeamworkFeaturesConfiguration|null $value Value to set for the featuresConfiguration property.
    */
    public function setFeaturesConfiguration(?TeamworkFeaturesConfiguration $value): void {
        $this->getBackingStore()->set('featuresConfiguration', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
