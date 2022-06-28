<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AudioRoutingGroup extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $receivers List of receiving participant ids.
    */
    private ?array $receivers = null;
    
    /**
     * @var RoutingMode|null $routingMode Routing group mode.  Possible values are: oneToOne, multicast.
    */
    private ?RoutingMode $routingMode = null;
    
    /**
     * @var array<string>|null $sources List of source participant ids.
    */
    private ?array $sources = null;
    
    /**
     * Instantiates a new audioRoutingGroup and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AudioRoutingGroup
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AudioRoutingGroup {
        return new AudioRoutingGroup();
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
        return array_merge(parent::getFieldDeserializers(), [
            'receivers' => function (ParseNode $n) use ($o) { $o->setReceivers($n->getCollectionOfPrimitiveValues()); },
            'routingMode' => function (ParseNode $n) use ($o) { $o->setRoutingMode($n->getEnumValue(RoutingMode::class)); },
            'sources' => function (ParseNode $n) use ($o) { $o->setSources($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the receivers property value. List of receiving participant ids.
     * @return array<string>|null
    */
    public function getReceivers(): ?array {
        return $this->receivers;
    }

    /**
     * Gets the routingMode property value. Routing group mode.  Possible values are: oneToOne, multicast.
     * @return RoutingMode|null
    */
    public function getRoutingMode(): ?RoutingMode {
        return $this->routingMode;
    }

    /**
     * Gets the sources property value. List of source participant ids.
     * @return array<string>|null
    */
    public function getSources(): ?array {
        return $this->sources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('receivers', $this->receivers);
        $writer->writeEnumValue('routingMode', $this->routingMode);
        $writer->writeCollectionOfPrimitiveValues('sources', $this->sources);
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
     * Sets the receivers property value. List of receiving participant ids.
     *  @param array<string>|null $value Value to set for the receivers property.
    */
    public function setReceivers(?array $value ): void {
        $this->receivers = $value;
    }

    /**
     * Sets the routingMode property value. Routing group mode.  Possible values are: oneToOne, multicast.
     *  @param RoutingMode|null $value Value to set for the routingMode property.
    */
    public function setRoutingMode(?RoutingMode $value ): void {
        $this->routingMode = $value;
    }

    /**
     * Sets the sources property value. List of source participant ids.
     *  @param array<string>|null $value Value to set for the sources property.
    */
    public function setSources(?array $value ): void {
        $this->sources = $value;
    }

}
