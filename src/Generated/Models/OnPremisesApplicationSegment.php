<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OnPremisesApplicationSegment implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $alternateUrl The alternateUrl property
    */
    private ?string $alternateUrl = null;
    
    /**
     * @var array<CorsConfiguration>|null $corsConfigurations The corsConfigurations property
    */
    private ?array $corsConfigurations = null;
    
    /**
     * @var string|null $externalUrl The externalUrl property
    */
    private ?string $externalUrl = null;
    
    /**
     * @var string|null $internalUrl The internalUrl property
    */
    private ?string $internalUrl = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new onPremisesApplicationSegment and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.onPremisesApplicationSegment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OnPremisesApplicationSegment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OnPremisesApplicationSegment {
        return new OnPremisesApplicationSegment();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the alternateUrl property value. The alternateUrl property
     * @return string|null
    */
    public function getAlternateUrl(): ?string {
        return $this->alternateUrl;
    }

    /**
     * Gets the corsConfigurations property value. The corsConfigurations property
     * @return array<CorsConfiguration>|null
    */
    public function getCorsConfigurations(): ?array {
        return $this->corsConfigurations;
    }

    /**
     * Gets the externalUrl property value. The externalUrl property
     * @return string|null
    */
    public function getExternalUrl(): ?string {
        return $this->externalUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'alternateUrl' => function (ParseNode $n) use ($o) { $o->setAlternateUrl($n->getStringValue()); },
            'corsConfigurations' => function (ParseNode $n) use ($o) { $o->setCorsConfigurations($n->getCollectionOfObjectValues(array(CorsConfiguration::class, 'createFromDiscriminatorValue'))); },
            'externalUrl' => function (ParseNode $n) use ($o) { $o->setExternalUrl($n->getStringValue()); },
            'internalUrl' => function (ParseNode $n) use ($o) { $o->setInternalUrl($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
        ];
    }

    /**
     * Gets the internalUrl property value. The internalUrl property
     * @return string|null
    */
    public function getInternalUrl(): ?string {
        return $this->internalUrl;
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
        $writer->writeStringValue('alternateUrl', $this->alternateUrl);
        $writer->writeCollectionOfObjectValues('corsConfigurations', $this->corsConfigurations);
        $writer->writeStringValue('externalUrl', $this->externalUrl);
        $writer->writeStringValue('internalUrl', $this->internalUrl);
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
     * Sets the alternateUrl property value. The alternateUrl property
     *  @param string|null $value Value to set for the alternateUrl property.
    */
    public function setAlternateUrl(?string $value ): void {
        $this->alternateUrl = $value;
    }

    /**
     * Sets the corsConfigurations property value. The corsConfigurations property
     *  @param array<CorsConfiguration>|null $value Value to set for the corsConfigurations property.
    */
    public function setCorsConfigurations(?array $value ): void {
        $this->corsConfigurations = $value;
    }

    /**
     * Sets the externalUrl property value. The externalUrl property
     *  @param string|null $value Value to set for the externalUrl property.
    */
    public function setExternalUrl(?string $value ): void {
        $this->externalUrl = $value;
    }

    /**
     * Sets the internalUrl property value. The internalUrl property
     *  @param string|null $value Value to set for the internalUrl property.
    */
    public function setInternalUrl(?string $value ): void {
        $this->internalUrl = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
