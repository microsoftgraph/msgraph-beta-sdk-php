<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkLoginStatus implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkLoginStatus and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkLoginStatus');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkLoginStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkLoginStatus {
        return new TeamworkLoginStatus();
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
     * Gets the exchangeConnection property value. Information about the Exchange connection.
     * @return TeamworkConnection|null
    */
    public function getExchangeConnection(): ?TeamworkConnection {
        return $this->getBackingStore()->get('exchangeConnection');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'exchangeConnection' => fn(ParseNode $n) => $o->setExchangeConnection($n->getObjectValue([TeamworkConnection::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'skypeConnection' => fn(ParseNode $n) => $o->setSkypeConnection($n->getObjectValue([TeamworkConnection::class, 'createFromDiscriminatorValue'])),
            'teamsConnection' => fn(ParseNode $n) => $o->setTeamsConnection($n->getObjectValue([TeamworkConnection::class, 'createFromDiscriminatorValue'])),
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
     * Gets the skypeConnection property value. Information about the Skype for Business connection.
     * @return TeamworkConnection|null
    */
    public function getSkypeConnection(): ?TeamworkConnection {
        return $this->getBackingStore()->get('skypeConnection');
    }

    /**
     * Gets the teamsConnection property value. Information about the Teams connection.
     * @return TeamworkConnection|null
    */
    public function getTeamsConnection(): ?TeamworkConnection {
        return $this->getBackingStore()->get('teamsConnection');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('exchangeConnection', $this->getExchangeConnection());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('skypeConnection', $this->getSkypeConnection());
        $writer->writeObjectValue('teamsConnection', $this->getTeamsConnection());
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
     * Sets the exchangeConnection property value. Information about the Exchange connection.
     *  @param TeamworkConnection|null $value Value to set for the exchangeConnection property.
    */
    public function setExchangeConnection(?TeamworkConnection $value): void {
        $this->getBackingStore()->set('exchangeConnection', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the skypeConnection property value. Information about the Skype for Business connection.
     *  @param TeamworkConnection|null $value Value to set for the skypeConnection property.
    */
    public function setSkypeConnection(?TeamworkConnection $value): void {
        $this->getBackingStore()->set('skypeConnection', $value);
    }

    /**
     * Sets the teamsConnection property value. Information about the Teams connection.
     *  @param TeamworkConnection|null $value Value to set for the teamsConnection property.
    */
    public function setTeamsConnection(?TeamworkConnection $value): void {
        $this->getBackingStore()->set('teamsConnection', $value);
    }

}
