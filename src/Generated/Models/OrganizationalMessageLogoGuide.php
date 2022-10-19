<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalMessageLogoGuide implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $assetName The asset name is the key for this specific logo. This is used to compute the required token when accessing the logoCdnUrl to fetch the logo
    */
    private ?string $assetName = null;
    
    /**
     * @var OrganizationalMessageLogoDimensions|null $dimensions The required size dimensions of the logo
    */
    private ?OrganizationalMessageLogoDimensions $dimensions = null;
    
    /**
     * @var string|null $logoCdnUrl The url at which the logo resides
    */
    private ?string $logoCdnUrl = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new organizationalMessageLogoGuide and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.organizationalMessageLogoGuide');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessageLogoGuide
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessageLogoGuide {
        return new OrganizationalMessageLogoGuide();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assetName property value. The asset name is the key for this specific logo. This is used to compute the required token when accessing the logoCdnUrl to fetch the logo
     * @return string|null
    */
    public function getAssetName(): ?string {
        return $this->assetName;
    }

    /**
     * Gets the dimensions property value. The required size dimensions of the logo
     * @return OrganizationalMessageLogoDimensions|null
    */
    public function getDimensions(): ?OrganizationalMessageLogoDimensions {
        return $this->dimensions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assetName' => fn(ParseNode $n) => $o->setAssetName($n->getStringValue()),
            'dimensions' => fn(ParseNode $n) => $o->setDimensions($n->getObjectValue([OrganizationalMessageLogoDimensions::class, 'createFromDiscriminatorValue'])),
            'logoCdnUrl' => fn(ParseNode $n) => $o->setLogoCdnUrl($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the logoCdnUrl property value. The url at which the logo resides
     * @return string|null
    */
    public function getLogoCdnUrl(): ?string {
        return $this->logoCdnUrl;
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
        $writer->writeStringValue('assetName', $this->assetName);
        $writer->writeObjectValue('dimensions', $this->dimensions);
        $writer->writeStringValue('logoCdnUrl', $this->logoCdnUrl);
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
     * Sets the assetName property value. The asset name is the key for this specific logo. This is used to compute the required token when accessing the logoCdnUrl to fetch the logo
     *  @param string|null $value Value to set for the assetName property.
    */
    public function setAssetName(?string $value ): void {
        $this->assetName = $value;
    }

    /**
     * Sets the dimensions property value. The required size dimensions of the logo
     *  @param OrganizationalMessageLogoDimensions|null $value Value to set for the dimensions property.
    */
    public function setDimensions(?OrganizationalMessageLogoDimensions $value ): void {
        $this->dimensions = $value;
    }

    /**
     * Sets the logoCdnUrl property value. The url at which the logo resides
     *  @param string|null $value Value to set for the logoCdnUrl property.
    */
    public function setLogoCdnUrl(?string $value ): void {
        $this->logoCdnUrl = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
