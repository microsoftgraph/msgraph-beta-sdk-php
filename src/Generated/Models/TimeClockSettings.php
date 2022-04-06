<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeClockSettings implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var GeoCoordinates|null $approvedLocation The aprroved location of the timeClock. */
    private ?GeoCoordinates $approvedLocation = null;
    
    /**
     * Instantiates a new timeClockSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeClockSettings
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TimeClockSettings {
        return new TimeClockSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the approvedLocation property value. The aprroved location of the timeClock.
     * @return GeoCoordinates|null
    */
    public function getApprovedLocation(): ?GeoCoordinates {
        return $this->approvedLocation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'approvedLocation' => function (self $o, ParseNode $n) { $o->setApprovedLocation($n->getObjectValue(GeoCoordinates::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('approvedLocation', $this->approvedLocation);
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
     * Sets the approvedLocation property value. The aprroved location of the timeClock.
     *  @param GeoCoordinates|null $value Value to set for the approvedLocation property.
    */
    public function setApprovedLocation(?GeoCoordinates $value ): void {
        $this->approvedLocation = $value;
    }

}
