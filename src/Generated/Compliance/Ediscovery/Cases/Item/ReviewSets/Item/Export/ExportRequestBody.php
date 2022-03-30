<?php

namespace Microsoft\Graph\Beta\Generated\Compliance\Ediscovery\Cases\Item\ReviewSets\Item\Export;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Ediscovery\ExportFileStructure;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Ediscovery\ExportOptions;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ExportRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $azureBlobContainer  */
    private ?string $azureBlobContainer = null;
    
    /** @var string|null $azureBlobToken  */
    private ?string $azureBlobToken = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var ExportOptions|null $exportOptions  */
    private ?ExportOptions $exportOptions = null;
    
    /** @var ExportFileStructure|null $exportStructure  */
    private ?ExportFileStructure $exportStructure = null;
    
    /** @var string|null $outputName  */
    private ?string $outputName = null;
    
    /**
     * Instantiates a new exportRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ExportRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ExportRequestBody {
        return new ExportRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the azureBlobContainer property value. 
     * @return string|null
    */
    public function getAzureBlobContainer(): ?string {
        return $this->azureBlobContainer;
    }

    /**
     * Gets the azureBlobToken property value. 
     * @return string|null
    */
    public function getAzureBlobToken(): ?string {
        return $this->azureBlobToken;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the exportOptions property value. 
     * @return ExportOptions|null
    */
    public function getExportOptions(): ?ExportOptions {
        return $this->exportOptions;
    }

    /**
     * Gets the exportStructure property value. 
     * @return ExportFileStructure|null
    */
    public function getExportStructure(): ?ExportFileStructure {
        return $this->exportStructure;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'azureBlobContainer' => function (self $o, ParseNode $n) { $o->setAzureBlobContainer($n->getStringValue()); },
            'azureBlobToken' => function (self $o, ParseNode $n) { $o->setAzureBlobToken($n->getStringValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'exportOptions' => function (self $o, ParseNode $n) { $o->setExportOptions($n->getEnumValue(ExportOptions::class)); },
            'exportStructure' => function (self $o, ParseNode $n) { $o->setExportStructure($n->getEnumValue(ExportFileStructure::class)); },
            'outputName' => function (self $o, ParseNode $n) { $o->setOutputName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the outputName property value. 
     * @return string|null
    */
    public function getOutputName(): ?string {
        return $this->outputName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('azureBlobContainer', $this->azureBlobContainer);
        $writer->writeStringValue('azureBlobToken', $this->azureBlobToken);
        $writer->writeStringValue('description', $this->description);
        $writer->writeEnumValue('exportOptions', $this->exportOptions);
        $writer->writeEnumValue('exportStructure', $this->exportStructure);
        $writer->writeStringValue('outputName', $this->outputName);
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
     * Sets the azureBlobContainer property value. 
     *  @param string|null $value Value to set for the azureBlobContainer property.
    */
    public function setAzureBlobContainer(?string $value ): void {
        $this->azureBlobContainer = $value;
    }

    /**
     * Sets the azureBlobToken property value. 
     *  @param string|null $value Value to set for the azureBlobToken property.
    */
    public function setAzureBlobToken(?string $value ): void {
        $this->azureBlobToken = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the exportOptions property value. 
     *  @param ExportOptions|null $value Value to set for the exportOptions property.
    */
    public function setExportOptions(?ExportOptions $value ): void {
        $this->exportOptions = $value;
    }

    /**
     * Sets the exportStructure property value. 
     *  @param ExportFileStructure|null $value Value to set for the exportStructure property.
    */
    public function setExportStructure(?ExportFileStructure $value ): void {
        $this->exportStructure = $value;
    }

    /**
     * Sets the outputName property value. 
     *  @param string|null $value Value to set for the outputName property.
    */
    public function setOutputName(?string $value ): void {
        $this->outputName = $value;
    }

}
