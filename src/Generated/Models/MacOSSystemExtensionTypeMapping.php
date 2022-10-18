<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MacOSSystemExtensionTypeMapping implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var MacOSSystemExtensionType|null $allowedTypes Flag enum representing the allowed macOS system extension types.
    */
    private ?MacOSSystemExtensionType $allowedTypes = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $teamIdentifier Gets or sets the team identifier used to sign the system extension.
    */
    private ?string $teamIdentifier = null;
    
    /**
     * Instantiates a new macOSSystemExtensionTypeMapping and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.macOSSystemExtensionTypeMapping');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MacOSSystemExtensionTypeMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MacOSSystemExtensionTypeMapping {
        return new MacOSSystemExtensionTypeMapping();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the allowedTypes property value. Flag enum representing the allowed macOS system extension types.
     * @return MacOSSystemExtensionType|null
    */
    public function getAllowedTypes(): ?MacOSSystemExtensionType {
        return $this->allowedTypes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'allowedTypes' => fn(ParseNode $n) => $o->setAllowedTypes($n->getEnumValue(MacOSSystemExtensionType::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'teamIdentifier' => fn(ParseNode $n) => $o->setTeamIdentifier($n->getStringValue()),
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
     * Gets the teamIdentifier property value. Gets or sets the team identifier used to sign the system extension.
     * @return string|null
    */
    public function getTeamIdentifier(): ?string {
        return $this->teamIdentifier;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('allowedTypes', $this->allowedTypes);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('teamIdentifier', $this->teamIdentifier);
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
     * Sets the allowedTypes property value. Flag enum representing the allowed macOS system extension types.
     *  @param MacOSSystemExtensionType|null $value Value to set for the allowedTypes property.
    */
    public function setAllowedTypes(?MacOSSystemExtensionType $value ): void {
        $this->allowedTypes = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the teamIdentifier property value. Gets or sets the team identifier used to sign the system extension.
     *  @param string|null $value Value to set for the teamIdentifier property.
    */
    public function setTeamIdentifier(?string $value ): void {
        $this->teamIdentifier = $value;
    }

}
