<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\Ediscovery\ExportFileStructure;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\ExportOptions;
use Microsoft\Graph\Beta\Generated\Models\Ediscovery\ReviewSet;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CaseExportOperation extends CaseOperation implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $azureBlobContainer The name of the Azure storage location where the export will be stored. This only applies to exports stored in your own Azure storage location.
    */
    private ?string $azureBlobContainer = null;
    
    /**
     * @var string|null $azureBlobToken The SAS token for the Azure storage location.  This only applies to exports stored in your own Azure storage location.
    */
    private ?string $azureBlobToken = null;
    
    /**
     * @var string|null $description The description provided for the export.
    */
    private ?string $description = null;
    
    /**
     * @var ExportOptions|null $exportOptions The options provided for the export. For more details, see reviewSet: export. Possible values are: originalFiles, text, pdfReplacement, fileInfo, tags.
    */
    private ?ExportOptions $exportOptions = null;
    
    /**
     * @var ExportFileStructure|null $exportStructure The options provided that specify the structure of the export. For more details, see reviewSet: export. Possible values are: none, directory, pst.
    */
    private ?ExportFileStructure $exportStructure = null;
    
    /**
     * @var string|null $outputFolderId The outputFolderId property
    */
    private ?string $outputFolderId = null;
    
    /**
     * @var string|null $outputName The name provided for the export.
    */
    private ?string $outputName = null;
    
    /**
     * @var ReviewSet|null $reviewSet The review set the content is being exported from.
    */
    private ?ReviewSet $reviewSet = null;
    
    /**
     * Instantiates a new CaseExportOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CaseExportOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CaseExportOperation {
        return new CaseExportOperation();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the azureBlobContainer property value. The name of the Azure storage location where the export will be stored. This only applies to exports stored in your own Azure storage location.
     * @return string|null
    */
    public function getAzureBlobContainer(): ?string {
        return $this->azureBlobContainer;
    }

    /**
     * Gets the azureBlobToken property value. The SAS token for the Azure storage location.  This only applies to exports stored in your own Azure storage location.
     * @return string|null
    */
    public function getAzureBlobToken(): ?string {
        return $this->azureBlobToken;
    }

    /**
     * Gets the description property value. The description provided for the export.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the exportOptions property value. The options provided for the export. For more details, see reviewSet: export. Possible values are: originalFiles, text, pdfReplacement, fileInfo, tags.
     * @return ExportOptions|null
    */
    public function getExportOptions(): ?ExportOptions {
        return $this->exportOptions;
    }

    /**
     * Gets the exportStructure property value. The options provided that specify the structure of the export. For more details, see reviewSet: export. Possible values are: none, directory, pst.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureBlobContainer' => function (ParseNode $n) use ($o) { $o->setAzureBlobContainer($n->getStringValue()); },
            'azureBlobToken' => function (ParseNode $n) use ($o) { $o->setAzureBlobToken($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'exportOptions' => function (ParseNode $n) use ($o) { $o->setExportOptions($n->getEnumValue(ExportOptions::class)); },
            'exportStructure' => function (ParseNode $n) use ($o) { $o->setExportStructure($n->getEnumValue(ExportFileStructure::class)); },
            'outputFolderId' => function (ParseNode $n) use ($o) { $o->setOutputFolderId($n->getStringValue()); },
            'outputName' => function (ParseNode $n) use ($o) { $o->setOutputName($n->getStringValue()); },
            'reviewSet' => function (ParseNode $n) use ($o) { $o->setReviewSet($n->getObjectValue(array(ReviewSet::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the outputFolderId property value. The outputFolderId property
     * @return string|null
    */
    public function getOutputFolderId(): ?string {
        return $this->outputFolderId;
    }

    /**
     * Gets the outputName property value. The name provided for the export.
     * @return string|null
    */
    public function getOutputName(): ?string {
        return $this->outputName;
    }

    /**
     * Gets the reviewSet property value. The review set the content is being exported from.
     * @return ReviewSet|null
    */
    public function getReviewSet(): ?ReviewSet {
        return $this->reviewSet;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureBlobContainer', $this->azureBlobContainer);
        $writer->writeStringValue('azureBlobToken', $this->azureBlobToken);
        $writer->writeStringValue('description', $this->description);
        $writer->writeEnumValue('exportOptions', $this->exportOptions);
        $writer->writeEnumValue('exportStructure', $this->exportStructure);
        $writer->writeStringValue('outputFolderId', $this->outputFolderId);
        $writer->writeStringValue('outputName', $this->outputName);
        $writer->writeObjectValue('reviewSet', $this->reviewSet);
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
     * Sets the azureBlobContainer property value. The name of the Azure storage location where the export will be stored. This only applies to exports stored in your own Azure storage location.
     *  @param string|null $value Value to set for the azureBlobContainer property.
    */
    public function setAzureBlobContainer(?string $value ): void {
        $this->azureBlobContainer = $value;
    }

    /**
     * Sets the azureBlobToken property value. The SAS token for the Azure storage location.  This only applies to exports stored in your own Azure storage location.
     *  @param string|null $value Value to set for the azureBlobToken property.
    */
    public function setAzureBlobToken(?string $value ): void {
        $this->azureBlobToken = $value;
    }

    /**
     * Sets the description property value. The description provided for the export.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the exportOptions property value. The options provided for the export. For more details, see reviewSet: export. Possible values are: originalFiles, text, pdfReplacement, fileInfo, tags.
     *  @param ExportOptions|null $value Value to set for the exportOptions property.
    */
    public function setExportOptions(?ExportOptions $value ): void {
        $this->exportOptions = $value;
    }

    /**
     * Sets the exportStructure property value. The options provided that specify the structure of the export. For more details, see reviewSet: export. Possible values are: none, directory, pst.
     *  @param ExportFileStructure|null $value Value to set for the exportStructure property.
    */
    public function setExportStructure(?ExportFileStructure $value ): void {
        $this->exportStructure = $value;
    }

    /**
     * Sets the outputFolderId property value. The outputFolderId property
     *  @param string|null $value Value to set for the outputFolderId property.
    */
    public function setOutputFolderId(?string $value ): void {
        $this->outputFolderId = $value;
    }

    /**
     * Sets the outputName property value. The name provided for the export.
     *  @param string|null $value Value to set for the outputName property.
    */
    public function setOutputName(?string $value ): void {
        $this->outputName = $value;
    }

    /**
     * Sets the reviewSet property value. The review set the content is being exported from.
     *  @param ReviewSet|null $value Value to set for the reviewSet property.
    */
    public function setReviewSet(?ReviewSet $value ): void {
        $this->reviewSet = $value;
    }

}
