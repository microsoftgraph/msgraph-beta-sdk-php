<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkLoginStatus implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var TeamworkConnection|null $exchangeConnection Information about the Exchange connection. */
    private ?TeamworkConnection $exchangeConnection = null;
    
    /** @var TeamworkConnection|null $skypeConnection Information about the Skype for Business connection. */
    private ?TeamworkConnection $skypeConnection = null;
    
    /** @var TeamworkConnection|null $teamsConnection Information about the Teams connection. */
    private ?TeamworkConnection $teamsConnection = null;
    
    /**
     * Instantiates a new teamworkLoginStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkLoginStatus
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkLoginStatus {
        return new TeamworkLoginStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the exchangeConnection property value. Information about the Exchange connection.
     * @return TeamworkConnection|null
    */
    public function getExchangeConnection(): ?TeamworkConnection {
        return $this->exchangeConnection;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'exchangeConnection' => function (self $o, ParseNode $n) { $o->setExchangeConnection($n->getObjectValue(TeamworkConnection::class)); },
            'skypeConnection' => function (self $o, ParseNode $n) { $o->setSkypeConnection($n->getObjectValue(TeamworkConnection::class)); },
            'teamsConnection' => function (self $o, ParseNode $n) { $o->setTeamsConnection($n->getObjectValue(TeamworkConnection::class)); },
        ];
    }

    /**
     * Gets the skypeConnection property value. Information about the Skype for Business connection.
     * @return TeamworkConnection|null
    */
    public function getSkypeConnection(): ?TeamworkConnection {
        return $this->skypeConnection;
    }

    /**
     * Gets the teamsConnection property value. Information about the Teams connection.
     * @return TeamworkConnection|null
    */
    public function getTeamsConnection(): ?TeamworkConnection {
        return $this->teamsConnection;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('exchangeConnection', $this->exchangeConnection);
        $writer->writeObjectValue('skypeConnection', $this->skypeConnection);
        $writer->writeObjectValue('teamsConnection', $this->teamsConnection);
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
     * Sets the exchangeConnection property value. Information about the Exchange connection.
     *  @param TeamworkConnection|null $value Value to set for the exchangeConnection property.
    */
    public function setExchangeConnection(?TeamworkConnection $value ): void {
        $this->exchangeConnection = $value;
    }

    /**
     * Sets the skypeConnection property value. Information about the Skype for Business connection.
     *  @param TeamworkConnection|null $value Value to set for the skypeConnection property.
    */
    public function setSkypeConnection(?TeamworkConnection $value ): void {
        $this->skypeConnection = $value;
    }

    /**
     * Sets the teamsConnection property value. Information about the Teams connection.
     *  @param TeamworkConnection|null $value Value to set for the teamsConnection property.
    */
    public function setTeamsConnection(?TeamworkConnection $value ): void {
        $this->teamsConnection = $value;
    }

}
