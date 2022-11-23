<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EdiscoveryExportOperation extends CaseOperation implements Parsable 
{
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
        return $this->getBackingStore()->get('azureBlobContainer');
    }

    /**
     * Gets the azureBlobToken property value. The SAS token for the Azure storage location.  This only applies to exports stored in your own Azure storage location.
     * @return string|null
    */
    public function getAzureBlobToken(): ?string {
        return $this->getBackingStore()->get('azureBlobToken');
    }

    /**
     * Gets the description property value. The description provided for the export.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the exportOptions property value. The options provided for the export. For more details, see reviewSet: export. Possible values are: originalFiles, text, pdfReplacement, fileInfo, tags.
     * @return ExportOptions|null
    */
    public function getExportOptions(): ?ExportOptions {
        return $this->getBackingStore()->get('exportOptions');
    }

    /**
     * Gets the exportStructure property value. The options provided that specify the structure of the export. For more details, see reviewSet: export. Possible values are: none, directory, pst.
     * @return ExportFileStructure|null
    */
    public function getExportStructure(): ?ExportFileStructure {
        return $this->getBackingStore()->get('exportStructure');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureBlobContainer' => fn(ParseNode $n) => $o->setAzureBlobContainer($n->getStringValue()),
            'azureBlobToken' => fn(ParseNode $n) => $o->setAzureBlobToken($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'exportOptions' => fn(ParseNode $n) => $o->setExportOptions($n->getEnumValue(ExportOptions::class)),
            'exportStructure' => fn(ParseNode $n) => $o->setExportStructure($n->getEnumValue(ExportFileStructure::class)),
            'outputFolderId' => fn(ParseNode $n) => $o->setOutputFolderId($n->getStringValue()),
            'outputName' => fn(ParseNode $n) => $o->setOutputName($n->getStringValue()),
            'reviewSet' => fn(ParseNode $n) => $o->setReviewSet($n->getObjectValue([EdiscoveryReviewSet::class, 'createFromDiscriminatorValue'])),
            'reviewSetQuery' => fn(ParseNode $n) => $o->setReviewSetQuery($n->getObjectValue([EdiscoveryReviewSetQuery::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the outputFolderId property value. The outputFolderId property
     * @return string|null
    */
    public function getOutputFolderId(): ?string {
        return $this->getBackingStore()->get('outputFolderId');
    }

    /**
     * Gets the outputName property value. The name provided for the export.
     * @return string|null
    */
    public function getOutputName(): ?string {
        return $this->getBackingStore()->get('outputName');
    }

    /**
     * Gets the reviewSet property value. Review set from where documents are exported.
     * @return EdiscoveryReviewSet|null
    */
    public function getReviewSet(): ?EdiscoveryReviewSet {
        return $this->getBackingStore()->get('reviewSet');
    }

    /**
     * Gets the reviewSetQuery property value. The review set query which is used to filter the documents for export.
     * @return EdiscoveryReviewSetQuery|null
    */
    public function getReviewSetQuery(): ?EdiscoveryReviewSetQuery {
        return $this->getBackingStore()->get('reviewSetQuery');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureBlobContainer', $this->getAzureBlobContainer());
        $writer->writeStringValue('azureBlobToken', $this->getAzureBlobToken());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeEnumValue('exportOptions', $this->getExportOptions());
        $writer->writeEnumValue('exportStructure', $this->getExportStructure());
        $writer->writeStringValue('outputFolderId', $this->getOutputFolderId());
        $writer->writeStringValue('outputName', $this->getOutputName());
        $writer->writeObjectValue('reviewSet', $this->getReviewSet());
        $writer->writeObjectValue('reviewSetQuery', $this->getReviewSetQuery());
    }

    /**
     * Sets the azureBlobContainer property value. The name of the Azure storage location where the export will be stored. This only applies to exports stored in your own Azure storage location.
     *  @param string|null $value Value to set for the azureBlobContainer property.
    */
    public function setAzureBlobContainer(?string $value): void {
        $this->getBackingStore()->set('azureBlobContainer', $value);
    }

    /**
     * Sets the azureBlobToken property value. The SAS token for the Azure storage location.  This only applies to exports stored in your own Azure storage location.
     *  @param string|null $value Value to set for the azureBlobToken property.
    */
    public function setAzureBlobToken(?string $value): void {
        $this->getBackingStore()->set('azureBlobToken', $value);
    }

    /**
     * Sets the description property value. The description provided for the export.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the exportOptions property value. The options provided for the export. For more details, see reviewSet: export. Possible values are: originalFiles, text, pdfReplacement, fileInfo, tags.
     *  @param ExportOptions|null $value Value to set for the exportOptions property.
    */
    public function setExportOptions(?ExportOptions $value): void {
        $this->getBackingStore()->set('exportOptions', $value);
    }

    /**
     * Sets the exportStructure property value. The options provided that specify the structure of the export. For more details, see reviewSet: export. Possible values are: none, directory, pst.
     *  @param ExportFileStructure|null $value Value to set for the exportStructure property.
    */
    public function setExportStructure(?ExportFileStructure $value): void {
        $this->getBackingStore()->set('exportStructure', $value);
    }

    /**
     * Sets the outputFolderId property value. The outputFolderId property
     *  @param string|null $value Value to set for the outputFolderId property.
    */
    public function setOutputFolderId(?string $value): void {
        $this->getBackingStore()->set('outputFolderId', $value);
    }

    /**
     * Sets the outputName property value. The name provided for the export.
     *  @param string|null $value Value to set for the outputName property.
    */
    public function setOutputName(?string $value): void {
        $this->getBackingStore()->set('outputName', $value);
    }

    /**
     * Sets the reviewSet property value. Review set from where documents are exported.
     *  @param EdiscoveryReviewSet|null $value Value to set for the reviewSet property.
    */
    public function setReviewSet(?EdiscoveryReviewSet $value): void {
        $this->getBackingStore()->set('reviewSet', $value);
    }

    /**
     * Sets the reviewSetQuery property value. The review set query which is used to filter the documents for export.
     *  @param EdiscoveryReviewSetQuery|null $value Value to set for the reviewSetQuery property.
    */
    public function setReviewSetQuery(?EdiscoveryReviewSetQuery $value): void {
        $this->getBackingStore()->set('reviewSetQuery', $value);
    }

}
