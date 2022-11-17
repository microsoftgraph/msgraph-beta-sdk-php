<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class TeamworkAccountConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new teamworkAccountConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.teamworkAccountConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkAccountConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkAccountConfiguration {
        return new TeamworkAccountConfiguration();
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
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'onPremisesCalendarSyncConfiguration' => fn(ParseNode $n) => $o->setOnPremisesCalendarSyncConfiguration($n->getObjectValue([TeamworkOnPremisesCalendarSyncConfiguration::class, 'createFromDiscriminatorValue'])),
            'supportedClient' => fn(ParseNode $n) => $o->setSupportedClient($n->getEnumValue(TeamworkSupportedClient::class)),
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
     * Gets the onPremisesCalendarSyncConfiguration property value. The account used to sync the calendar.
     * @return TeamworkOnPremisesCalendarSyncConfiguration|null
    */
    public function getOnPremisesCalendarSyncConfiguration(): ?TeamworkOnPremisesCalendarSyncConfiguration {
        return $this->getBackingStore()->get('onPremisesCalendarSyncConfiguration');
    }

    /**
     * Gets the supportedClient property value. The supported client for Teams Rooms devices. The possible values are: unknown, skypeDefaultAndTeams, teamsDefaultAndSkype, skypeOnly, teamsOnly, unknownFutureValue.
     * @return TeamworkSupportedClient|null
    */
    public function getSupportedClient(): ?TeamworkSupportedClient {
        return $this->getBackingStore()->get('supportedClient');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('onPremisesCalendarSyncConfiguration', $this->getOnPremisesCalendarSyncConfiguration());
        $writer->writeEnumValue('supportedClient', $this->getSupportedClient());
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the onPremisesCalendarSyncConfiguration property value. The account used to sync the calendar.
     *  @param TeamworkOnPremisesCalendarSyncConfiguration|null $value Value to set for the onPremisesCalendarSyncConfiguration property.
    */
    public function setOnPremisesCalendarSyncConfiguration(?TeamworkOnPremisesCalendarSyncConfiguration $value): void {
        $this->getBackingStore()->set('onPremisesCalendarSyncConfiguration', $value);
    }

    /**
     * Sets the supportedClient property value. The supported client for Teams Rooms devices. The possible values are: unknown, skypeDefaultAndTeams, teamsDefaultAndSkype, skypeOnly, teamsOnly, unknownFutureValue.
     *  @param TeamworkSupportedClient|null $value Value to set for the supportedClient property.
    */
    public function setSupportedClient(?TeamworkSupportedClient $value): void {
        $this->getBackingStore()->set('supportedClient', $value);
    }

}
