<?php

namespace Microsoft\Graph\Beta\Generated\Teamwork\Devices\Item\UpdateSoftware;

use Microsoft\Graph\Beta\Generated\Models\TeamworkSoftwareType;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UpdateSoftwarePostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TeamworkSoftwareType|null $softwareType The softwareType property
    */
    private ?TeamworkSoftwareType $softwareType = null;
    
    /**
     * @var string|null $softwareVersion The softwareVersion property
    */
    private ?string $softwareVersion = null;
    
    /**
     * Instantiates a new updateSoftwarePostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UpdateSoftwarePostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UpdateSoftwarePostRequestBody {
        return new UpdateSoftwarePostRequestBody();
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
            'softwareType' => function (ParseNode $n) use ($o) { $o->setSoftwareType($n->getEnumValue(TeamworkSoftwareType::class)); },
            'softwareVersion' => function (ParseNode $n) use ($o) { $o->setSoftwareVersion($n->getStringValue()); },
        ];
    }

    /**
     * Gets the softwareType property value. The softwareType property
     * @return TeamworkSoftwareType|null
    */
    public function getSoftwareType(): ?TeamworkSoftwareType {
        return $this->softwareType;
    }

    /**
     * Gets the softwareVersion property value. The softwareVersion property
     * @return string|null
    */
    public function getSoftwareVersion(): ?string {
        return $this->softwareVersion;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('softwareType', $this->softwareType);
        $writer->writeStringValue('softwareVersion', $this->softwareVersion);
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
     * Sets the softwareType property value. The softwareType property
     *  @param TeamworkSoftwareType|null $value Value to set for the softwareType property.
    */
    public function setSoftwareType(?TeamworkSoftwareType $value ): void {
        $this->softwareType = $value;
    }

    /**
     * Sets the softwareVersion property value. The softwareVersion property
     *  @param string|null $value Value to set for the softwareVersion property.
    */
    public function setSoftwareVersion(?string $value ): void {
        $this->softwareVersion = $value;
    }

}
