<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryExportOperation extends CaseOperation implements Parsable 
{
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
     * @var EdiscoveryReviewSet|null $reviewSet Review set from where documents are exported.
    */
    private ?EdiscoveryReviewSet $reviewSet = null;
    
    /**
     * @var EdiscoveryReviewSetQuery|null $reviewSetQuery The review set query which is used to filter the documents for export.
    */
    private ?EdiscoveryReviewSetQuery $reviewSetQuery = null;
    
    /**
     * Instantiates a new EdiscoveryExportOperation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EdiscoveryExportOperation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EdiscoveryExportOperation {
        return new EdiscoveryExportOperation();
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
            'reviewSet' => function (ParseNode $n) use ($o) { $o->setReviewSet($n->getObjectValue(array(EdiscoveryReviewSet::class, 'createFromDiscriminatorValue'))); },
            'reviewSetQuery' => function (ParseNode $n) use ($o) { $o->setReviewSetQuery($n->getObjectValue(array(EdiscoveryReviewSetQuery::class, 'createFromDiscriminatorValue'))); },
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
     * Gets the reviewSet property value. Review set from where documents are exported.
     * @return EdiscoveryReviewSet|null
    */
    public function getReviewSet(): ?EdiscoveryReviewSet {
        return $this->reviewSet;
    }

    /**
     * Gets the reviewSetQuery property value. The review set query which is used to filter the documents for export.
     * @return EdiscoveryReviewSetQuery|null
    */
    public function getReviewSetQuery(): ?EdiscoveryReviewSetQuery {
        return $this->reviewSetQuery;
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
        $writer->writeObjectValue('reviewSetQuery', $this->reviewSetQuery);
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
     * Sets the reviewSet property value. Review set from where documents are exported.
     *  @param EdiscoveryReviewSet|null $value Value to set for the reviewSet property.
    */
    public function setReviewSet(?EdiscoveryReviewSet $value ): void {
        $this->reviewSet = $value;
    }

    /**
     * Sets the reviewSetQuery property value. The review set query which is used to filter the documents for export.
     *  @param EdiscoveryReviewSetQuery|null $value Value to set for the reviewSetQuery property.
    */
    public function setReviewSetQuery(?EdiscoveryReviewSetQuery $value ): void {
        $this->reviewSetQuery = $value;
    }

}
