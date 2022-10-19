<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OperatingSystemVersionRange implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $description The description of this range (e.g. Valid 1702 builds)
    */
    private ?string $description = null;
    
    /**
     * @var string|null $highestVersion The highest inclusive version that this range contains.
    */
    private ?string $highestVersion = null;
    
    /**
     * @var string|null $lowestVersion The lowest inclusive version that this range contains.
    */
    private ?string $lowestVersion = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new operatingSystemVersionRange and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.operatingSystemVersionRange');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OperatingSystemVersionRange
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OperatingSystemVersionRange {
        return new OperatingSystemVersionRange();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the description property value. The description of this range (e.g. Valid 1702 builds)
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'highestVersion' => fn(ParseNode $n) => $o->setHighestVersion($n->getStringValue()),
            'lowestVersion' => fn(ParseNode $n) => $o->setLowestVersion($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the highestVersion property value. The highest inclusive version that this range contains.
     * @return string|null
    */
    public function getHighestVersion(): ?string {
        return $this->highestVersion;
    }

    /**
     * Gets the lowestVersion property value. The lowest inclusive version that this range contains.
     * @return string|null
    */
    public function getLowestVersion(): ?string {
        return $this->lowestVersion;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('highestVersion', $this->highestVersion);
        $writer->writeStringValue('lowestVersion', $this->lowestVersion);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the description property value. The description of this range (e.g. Valid 1702 builds)
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the highestVersion property value. The highest inclusive version that this range contains.
     *  @param string|null $value Value to set for the highestVersion property.
    */
    public function setHighestVersion(?string $value ): void {
        $this->highestVersion = $value;
    }

    /**
     * Sets the lowestVersion property value. The lowest inclusive version that this range contains.
     *  @param string|null $value Value to set for the lowestVersion property.
    */
    public function setLowestVersion(?string $value ): void {
        $this->lowestVersion = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
