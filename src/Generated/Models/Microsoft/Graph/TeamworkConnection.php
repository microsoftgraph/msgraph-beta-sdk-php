<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkConnection implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var TeamworkConnectionStatus|null $connectionStatus Indicates whether a component/peripheral is connected/disconnected or its state is unknown. The possible values are: unknown, connected, disconnected, unknownFutureValue. */
    private ?TeamworkConnectionStatus $connectionStatus = null;
    
    /** @var DateTime|null $lastModifiedDateTime Time at which the state was last changed. For example, indicates connected since when the state is connected and disconnected since when the state is disconnected. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * Instantiates a new teamworkConnection and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkConnection
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkConnection {
        return new TeamworkConnection();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the connectionStatus property value. Indicates whether a component/peripheral is connected/disconnected or its state is unknown. The possible values are: unknown, connected, disconnected, unknownFutureValue.
     * @return TeamworkConnectionStatus|null
    */
    public function getConnectionStatus(): ?TeamworkConnectionStatus {
        return $this->connectionStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'connectionStatus' => function (self $o, ParseNode $n) { $o->setConnectionStatus($n->getEnumValue(TeamworkConnectionStatus::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the lastModifiedDateTime property value. Time at which the state was last changed. For example, indicates connected since when the state is connected and disconnected since when the state is disconnected.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('connectionStatus', $this->connectionStatus);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
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
     * Sets the connectionStatus property value. Indicates whether a component/peripheral is connected/disconnected or its state is unknown. The possible values are: unknown, connected, disconnected, unknownFutureValue.
     *  @param TeamworkConnectionStatus|null $value Value to set for the connectionStatus property.
    */
    public function setConnectionStatus(?TeamworkConnectionStatus $value ): void {
        $this->connectionStatus = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Time at which the state was last changed. For example, indicates connected since when the state is connected and disconnected since when the state is disconnected.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

}
