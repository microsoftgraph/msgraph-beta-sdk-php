<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkAccountConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkOnPremisesCalendarSyncConfiguration|null $onPremisesCalendarSyncConfiguration The account used to sync the calendar.
    */
    private ?TeamworkOnPremisesCalendarSyncConfiguration $onPremisesCalendarSyncConfiguration = null;
    
    /**
     * @var TeamworkSupportedClient|null $supportedClient The supported client for Teams Rooms devices. The possible values are: unknown, skypeDefaultAndTeams, teamsDefaultAndSkype, skypeOnly, teamsOnly, unknownFutureValue.
    */
    private ?TeamworkSupportedClient $supportedClient = null;
    
    /**
     * Instantiates a new teamworkAccountConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
            'onPremisesCalendarSyncConfiguration' => function (ParseNode $n) use ($o) { $o->setOnPremisesCalendarSyncConfiguration($n->getObjectValue(array(TeamworkOnPremisesCalendarSyncConfiguration::class, 'createFromDiscriminatorValue'))); },
            'supportedClient' => function (ParseNode $n) use ($o) { $o->setSupportedClient($n->getEnumValue(TeamworkSupportedClient::class)); },
        ];
    }

    /**
     * Gets the onPremisesCalendarSyncConfiguration property value. The account used to sync the calendar.
     * @return TeamworkOnPremisesCalendarSyncConfiguration|null
    */
    public function getOnPremisesCalendarSyncConfiguration(): ?TeamworkOnPremisesCalendarSyncConfiguration {
        return $this->onPremisesCalendarSyncConfiguration;
    }

    /**
     * Gets the supportedClient property value. The supported client for Teams Rooms devices. The possible values are: unknown, skypeDefaultAndTeams, teamsDefaultAndSkype, skypeOnly, teamsOnly, unknownFutureValue.
     * @return TeamworkSupportedClient|null
    */
    public function getSupportedClient(): ?TeamworkSupportedClient {
        return $this->supportedClient;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('onPremisesCalendarSyncConfiguration', $this->onPremisesCalendarSyncConfiguration);
        $writer->writeEnumValue('supportedClient', $this->supportedClient);
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
     * Sets the onPremisesCalendarSyncConfiguration property value. The account used to sync the calendar.
     *  @param TeamworkOnPremisesCalendarSyncConfiguration|null $value Value to set for the onPremisesCalendarSyncConfiguration property.
    */
    public function setOnPremisesCalendarSyncConfiguration(?TeamworkOnPremisesCalendarSyncConfiguration $value ): void {
        $this->onPremisesCalendarSyncConfiguration = $value;
    }

    /**
     * Sets the supportedClient property value. The supported client for Teams Rooms devices. The possible values are: unknown, skypeDefaultAndTeams, teamsDefaultAndSkype, skypeOnly, teamsOnly, unknownFutureValue.
     *  @param TeamworkSupportedClient|null $value Value to set for the supportedClient property.
    */
    public function setSupportedClient(?TeamworkSupportedClient $value ): void {
        $this->supportedClient = $value;
    }

}
