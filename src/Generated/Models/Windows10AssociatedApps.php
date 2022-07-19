<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10AssociatedApps implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Windows10AppType|null $appType Windows 10 Application type.
    */
    private ?Windows10AppType $appType = null;
    
    /**
     * @var string|null $identifier Identifier.
    */
    private ?string $identifier = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new windows10AssociatedApps and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.windows10AssociatedApps');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10AssociatedApps
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10AssociatedApps {
        return new Windows10AssociatedApps();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appType property value. Windows 10 Application type.
     * @return Windows10AppType|null
    */
    public function getAppType(): ?Windows10AppType {
        return $this->appType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appType' => function (ParseNode $n) use ($o) { $o->setAppType($n->getEnumValue(Windows10AppType::class)); },
            'identifier' => function (ParseNode $n) use ($o) { $o->setIdentifier($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the identifier property value. Identifier.
     * @return string|null
    */
    public function getIdentifier(): ?string {
        return $this->identifier;
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
        $writer->writeEnumValue('appType', $this->appType);
        $writer->writeStringValue('identifier', $this->identifier);
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
     * Sets the appType property value. Windows 10 Application type.
     *  @param Windows10AppType|null $value Value to set for the appType property.
    */
    public function setAppType(?Windows10AppType $value ): void {
        $this->appType = $value;
    }

    /**
     * Sets the identifier property value. Identifier.
     *  @param string|null $value Value to set for the identifier property.
    */
    public function setIdentifier(?string $value ): void {
        $this->identifier = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
