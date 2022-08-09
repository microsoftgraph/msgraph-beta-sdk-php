<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidManagedStoreAppTrack implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $trackAlias Friendly name for track.
    */
    private ?string $trackAlias = null;
    
    /**
     * @var string|null $trackId Unique track identifier.
    */
    private ?string $trackId = null;
    
    /**
     * Instantiates a new androidManagedStoreAppTrack and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.androidManagedStoreAppTrack');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidManagedStoreAppTrack
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidManagedStoreAppTrack {
        return new AndroidManagedStoreAppTrack();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'trackAlias' => function (ParseNode $n) use ($o) { $o->setTrackAlias($n->getStringValue()); },
            'trackId' => function (ParseNode $n) use ($o) { $o->setTrackId($n->getStringValue()); },
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
     * Gets the trackAlias property value. Friendly name for track.
     * @return string|null
    */
    public function getTrackAlias(): ?string {
        return $this->trackAlias;
    }

    /**
     * Gets the trackId property value. Unique track identifier.
     * @return string|null
    */
    public function getTrackId(): ?string {
        return $this->trackId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('trackAlias', $this->trackAlias);
        $writer->writeStringValue('trackId', $this->trackId);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the trackAlias property value. Friendly name for track.
     *  @param string|null $value Value to set for the trackAlias property.
    */
    public function setTrackAlias(?string $value ): void {
        $this->trackAlias = $value;
    }

    /**
     * Sets the trackId property value. Unique track identifier.
     *  @param string|null $value Value to set for the trackId property.
    */
    public function setTrackId(?string $value ): void {
        $this->trackId = $value;
    }

}
