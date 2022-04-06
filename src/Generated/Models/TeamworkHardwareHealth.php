<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamworkHardwareHealth implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var TeamworkPeripheralHealth|null $computeHealth The system health details for a teamworkDevice. */
    private ?TeamworkPeripheralHealth $computeHealth = null;
    
    /** @var TeamworkPeripheralHealth|null $hdmiIngestHealth The health details about the HDMI ingest of a device. */
    private ?TeamworkPeripheralHealth $hdmiIngestHealth = null;
    
    /**
     * Instantiates a new teamworkHardwareHealth and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamworkHardwareHealth
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TeamworkHardwareHealth {
        return new TeamworkHardwareHealth();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the computeHealth property value. The system health details for a teamworkDevice.
     * @return TeamworkPeripheralHealth|null
    */
    public function getComputeHealth(): ?TeamworkPeripheralHealth {
        return $this->computeHealth;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'computeHealth' => function (self $o, ParseNode $n) { $o->setComputeHealth($n->getObjectValue(TeamworkPeripheralHealth::class)); },
            'hdmiIngestHealth' => function (self $o, ParseNode $n) { $o->setHdmiIngestHealth($n->getObjectValue(TeamworkPeripheralHealth::class)); },
        ];
    }

    /**
     * Gets the hdmiIngestHealth property value. The health details about the HDMI ingest of a device.
     * @return TeamworkPeripheralHealth|null
    */
    public function getHdmiIngestHealth(): ?TeamworkPeripheralHealth {
        return $this->hdmiIngestHealth;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('computeHealth', $this->computeHealth);
        $writer->writeObjectValue('hdmiIngestHealth', $this->hdmiIngestHealth);
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
     * Sets the computeHealth property value. The system health details for a teamworkDevice.
     *  @param TeamworkPeripheralHealth|null $value Value to set for the computeHealth property.
    */
    public function setComputeHealth(?TeamworkPeripheralHealth $value ): void {
        $this->computeHealth = $value;
    }

    /**
     * Sets the hdmiIngestHealth property value. The health details about the HDMI ingest of a device.
     *  @param TeamworkPeripheralHealth|null $value Value to set for the hdmiIngestHealth property.
    */
    public function setHdmiIngestHealth(?TeamworkPeripheralHealth $value ): void {
        $this->hdmiIngestHealth = $value;
    }

}
