<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkLoginStatus implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkConnection|null $exchangeConnection Information about the Exchange connection.
    */
    private ?TeamworkConnection $exchangeConnection = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var TeamworkConnection|null $skypeConnection Information about the Skype for Business connection.
    */
    private ?TeamworkConnection $skypeConnection = null;
    
    /**
     * @var TeamworkConnection|null $teamsConnection Information about the Teams connection.
    */
    private ?TeamworkConnection $teamsConnection = null;
    
    /**
     * Instantiates a new teamworkLoginStatus and sets the default values.
    */
    public function __construct() {
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
        $o = $this;
        return  [
            'exchangeConnection' => function (ParseNode $n) use ($o) { $o->setExchangeConnection($n->getObjectValue(array(TeamworkConnection::class, 'createFromDiscriminatorValue'))); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'skypeConnection' => function (ParseNode $n) use ($o) { $o->setSkypeConnection($n->getObjectValue(array(TeamworkConnection::class, 'createFromDiscriminatorValue'))); },
            'teamsConnection' => function (ParseNode $n) use ($o) { $o->setTeamsConnection($n->getObjectValue(array(TeamworkConnection::class, 'createFromDiscriminatorValue'))); },
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
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
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
