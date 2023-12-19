<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PrinterDefaults implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new printerDefaults and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterDefaults
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterDefaults {
        return new PrinterDefaults();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the colorMode property value. The default color mode to use when printing the document. Valid values are described in the following table.
     * @return PrinterDefaults_colorMode|null
    */
    public function getColorMode(): ?PrinterDefaults_colorMode {
        $val = $this->getBackingStore()->get('colorMode');
        if (is_null($val) || $val instanceof PrinterDefaults_colorMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'colorMode'");
    }

    /**
     * Gets the contentType property value. The default content (MIME) type to use when processing documents.
     * @return string|null
    */
    public function getContentType(): ?string {
        $val = $this->getBackingStore()->get('contentType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentType'");
    }

    /**
     * Gets the copiesPerJob property value. The default number of copies printed per job.
     * @return int|null
    */
    public function getCopiesPerJob(): ?int {
        $val = $this->getBackingStore()->get('copiesPerJob');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'copiesPerJob'");
    }

    /**
     * Gets the documentMimeType property value. The documentMimeType property
     * @return string|null
    */
    public function getDocumentMimeType(): ?string {
        $val = $this->getBackingStore()->get('documentMimeType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentMimeType'");
    }

    /**
     * Gets the dpi property value. The default resolution in DPI to use when printing the job.
     * @return int|null
    */
    public function getDpi(): ?int {
        $val = $this->getBackingStore()->get('dpi');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dpi'");
    }

    /**
     * Gets the duplexConfiguration property value. The duplexConfiguration property
     * @return PrinterDefaults_duplexConfiguration|null
    */
    public function getDuplexConfiguration(): ?PrinterDefaults_duplexConfiguration {
        $val = $this->getBackingStore()->get('duplexConfiguration');
        if (is_null($val) || $val instanceof PrinterDefaults_duplexConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duplexConfiguration'");
    }

    /**
     * Gets the duplexMode property value. The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table.
     * @return PrinterDefaults_duplexMode|null
    */
    public function getDuplexMode(): ?PrinterDefaults_duplexMode {
        $val = $this->getBackingStore()->get('duplexMode');
        if (is_null($val) || $val instanceof PrinterDefaults_duplexMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duplexMode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'colorMode' => fn(ParseNode $n) => $o->setColorMode($n->getEnumValue(PrinterDefaults_colorMode::class)),
            'contentType' => fn(ParseNode $n) => $o->setContentType($n->getStringValue()),
            'copiesPerJob' => fn(ParseNode $n) => $o->setCopiesPerJob($n->getIntegerValue()),
            'documentMimeType' => fn(ParseNode $n) => $o->setDocumentMimeType($n->getStringValue()),
            'dpi' => fn(ParseNode $n) => $o->setDpi($n->getIntegerValue()),
            'duplexConfiguration' => fn(ParseNode $n) => $o->setDuplexConfiguration($n->getEnumValue(PrinterDefaults_duplexConfiguration::class)),
            'duplexMode' => fn(ParseNode $n) => $o->setDuplexMode($n->getEnumValue(PrinterDefaults_duplexMode::class)),
            'finishings' => fn(ParseNode $n) => $o->setFinishings($n->getCollectionOfEnumValues(PrinterDefaults_finishings::class)),
            'fitPdfToPage' => fn(ParseNode $n) => $o->setFitPdfToPage($n->getBooleanValue()),
            'inputBin' => fn(ParseNode $n) => $o->setInputBin($n->getStringValue()),
            'mediaColor' => fn(ParseNode $n) => $o->setMediaColor($n->getStringValue()),
            'mediaSize' => fn(ParseNode $n) => $o->setMediaSize($n->getStringValue()),
            'mediaType' => fn(ParseNode $n) => $o->setMediaType($n->getStringValue()),
            'multipageLayout' => fn(ParseNode $n) => $o->setMultipageLayout($n->getEnumValue(PrinterDefaults_multipageLayout::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'orientation' => fn(ParseNode $n) => $o->setOrientation($n->getEnumValue(PrinterDefaults_orientation::class)),
            'outputBin' => fn(ParseNode $n) => $o->setOutputBin($n->getStringValue()),
            'pagesPerSheet' => fn(ParseNode $n) => $o->setPagesPerSheet($n->getIntegerValue()),
            'pdfFitToPage' => fn(ParseNode $n) => $o->setPdfFitToPage($n->getBooleanValue()),
            'presentationDirection' => fn(ParseNode $n) => $o->setPresentationDirection($n->getEnumValue(PrinterDefaults_presentationDirection::class)),
            'printColorConfiguration' => fn(ParseNode $n) => $o->setPrintColorConfiguration($n->getEnumValue(PrinterDefaults_printColorConfiguration::class)),
            'printQuality' => fn(ParseNode $n) => $o->setPrintQuality($n->getEnumValue(PrinterDefaults_printQuality::class)),
            'quality' => fn(ParseNode $n) => $o->setQuality($n->getEnumValue(PrinterDefaults_quality::class)),
            'scaling' => fn(ParseNode $n) => $o->setScaling($n->getEnumValue(PrinterDefaults_scaling::class)),
        ];
    }

    /**
     * Gets the finishings property value. The default set of finishings to apply to print jobs. Valid values are described in the following table.
     * @return array<PrinterDefaults_finishings>|null
    */
    public function getFinishings(): ?array {
        $val = $this->getBackingStore()->get('finishings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrinterDefaults_finishings::class);
            /** @var array<PrinterDefaults_finishings>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'finishings'");
    }

    /**
     * Gets the fitPdfToPage property value. The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions.
     * @return bool|null
    */
    public function getFitPdfToPage(): ?bool {
        $val = $this->getBackingStore()->get('fitPdfToPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'fitPdfToPage'");
    }

    /**
     * Gets the inputBin property value. The default input bin that serves as the paper source.
     * @return string|null
    */
    public function getInputBin(): ?string {
        $val = $this->getBackingStore()->get('inputBin');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'inputBin'");
    }

    /**
     * Gets the mediaColor property value. The default media (such as paper) color to print the document on.
     * @return string|null
    */
    public function getMediaColor(): ?string {
        $val = $this->getBackingStore()->get('mediaColor');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaColor'");
    }

    /**
     * Gets the mediaSize property value. The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic.
     * @return string|null
    */
    public function getMediaSize(): ?string {
        $val = $this->getBackingStore()->get('mediaSize');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaSize'");
    }

    /**
     * Gets the mediaType property value. The default media (such as paper) type to print the document on.
     * @return string|null
    */
    public function getMediaType(): ?string {
        $val = $this->getBackingStore()->get('mediaType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediaType'");
    }

    /**
     * Gets the multipageLayout property value. The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     * @return PrinterDefaults_multipageLayout|null
    */
    public function getMultipageLayout(): ?PrinterDefaults_multipageLayout {
        $val = $this->getBackingStore()->get('multipageLayout');
        if (is_null($val) || $val instanceof PrinterDefaults_multipageLayout) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'multipageLayout'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the orientation property value. The default orientation to use when printing the document. Valid values are described in the following table.
     * @return PrinterDefaults_orientation|null
    */
    public function getOrientation(): ?PrinterDefaults_orientation {
        $val = $this->getBackingStore()->get('orientation');
        if (is_null($val) || $val instanceof PrinterDefaults_orientation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orientation'");
    }

    /**
     * Gets the outputBin property value. The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
     * @return string|null
    */
    public function getOutputBin(): ?string {
        $val = $this->getBackingStore()->get('outputBin');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'outputBin'");
    }

    /**
     * Gets the pagesPerSheet property value. The default number of document pages to print on each sheet.
     * @return int|null
    */
    public function getPagesPerSheet(): ?int {
        $val = $this->getBackingStore()->get('pagesPerSheet');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pagesPerSheet'");
    }

    /**
     * Gets the pdfFitToPage property value. The pdfFitToPage property
     * @return bool|null
    */
    public function getPdfFitToPage(): ?bool {
        $val = $this->getBackingStore()->get('pdfFitToPage');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pdfFitToPage'");
    }

    /**
     * Gets the presentationDirection property value. The presentationDirection property
     * @return PrinterDefaults_presentationDirection|null
    */
    public function getPresentationDirection(): ?PrinterDefaults_presentationDirection {
        $val = $this->getBackingStore()->get('presentationDirection');
        if (is_null($val) || $val instanceof PrinterDefaults_presentationDirection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presentationDirection'");
    }

    /**
     * Gets the printColorConfiguration property value. The printColorConfiguration property
     * @return PrinterDefaults_printColorConfiguration|null
    */
    public function getPrintColorConfiguration(): ?PrinterDefaults_printColorConfiguration {
        $val = $this->getBackingStore()->get('printColorConfiguration');
        if (is_null($val) || $val instanceof PrinterDefaults_printColorConfiguration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'printColorConfiguration'");
    }

    /**
     * Gets the printQuality property value. The printQuality property
     * @return PrinterDefaults_printQuality|null
    */
    public function getPrintQuality(): ?PrinterDefaults_printQuality {
        $val = $this->getBackingStore()->get('printQuality');
        if (is_null($val) || $val instanceof PrinterDefaults_printQuality) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'printQuality'");
    }

    /**
     * Gets the quality property value. The default quality to use when printing the document. Valid values are described in the following table.
     * @return PrinterDefaults_quality|null
    */
    public function getQuality(): ?PrinterDefaults_quality {
        $val = $this->getBackingStore()->get('quality');
        if (is_null($val) || $val instanceof PrinterDefaults_quality) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quality'");
    }

    /**
     * Gets the scaling property value. Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table.
     * @return PrinterDefaults_scaling|null
    */
    public function getScaling(): ?PrinterDefaults_scaling {
        $val = $this->getBackingStore()->get('scaling');
        if (is_null($val) || $val instanceof PrinterDefaults_scaling) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scaling'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('colorMode', $this->getColorMode());
        $writer->writeStringValue('contentType', $this->getContentType());
        $writer->writeIntegerValue('copiesPerJob', $this->getCopiesPerJob());
        $writer->writeStringValue('documentMimeType', $this->getDocumentMimeType());
        $writer->writeIntegerValue('dpi', $this->getDpi());
        $writer->writeEnumValue('duplexConfiguration', $this->getDuplexConfiguration());
        $writer->writeEnumValue('duplexMode', $this->getDuplexMode());
        $writer->writeCollectionOfEnumValues('finishings', $this->getFinishings());
        $writer->writeBooleanValue('fitPdfToPage', $this->getFitPdfToPage());
        $writer->writeStringValue('inputBin', $this->getInputBin());
        $writer->writeStringValue('mediaColor', $this->getMediaColor());
        $writer->writeStringValue('mediaSize', $this->getMediaSize());
        $writer->writeStringValue('mediaType', $this->getMediaType());
        $writer->writeEnumValue('multipageLayout', $this->getMultipageLayout());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('orientation', $this->getOrientation());
        $writer->writeStringValue('outputBin', $this->getOutputBin());
        $writer->writeIntegerValue('pagesPerSheet', $this->getPagesPerSheet());
        $writer->writeBooleanValue('pdfFitToPage', $this->getPdfFitToPage());
        $writer->writeEnumValue('presentationDirection', $this->getPresentationDirection());
        $writer->writeEnumValue('printColorConfiguration', $this->getPrintColorConfiguration());
        $writer->writeEnumValue('printQuality', $this->getPrintQuality());
        $writer->writeEnumValue('quality', $this->getQuality());
        $writer->writeEnumValue('scaling', $this->getScaling());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the colorMode property value. The default color mode to use when printing the document. Valid values are described in the following table.
     * @param PrinterDefaults_colorMode|null $value Value to set for the colorMode property.
    */
    public function setColorMode(?PrinterDefaults_colorMode $value): void {
        $this->getBackingStore()->set('colorMode', $value);
    }

    /**
     * Sets the contentType property value. The default content (MIME) type to use when processing documents.
     * @param string|null $value Value to set for the contentType property.
    */
    public function setContentType(?string $value): void {
        $this->getBackingStore()->set('contentType', $value);
    }

    /**
     * Sets the copiesPerJob property value. The default number of copies printed per job.
     * @param int|null $value Value to set for the copiesPerJob property.
    */
    public function setCopiesPerJob(?int $value): void {
        $this->getBackingStore()->set('copiesPerJob', $value);
    }

    /**
     * Sets the documentMimeType property value. The documentMimeType property
     * @param string|null $value Value to set for the documentMimeType property.
    */
    public function setDocumentMimeType(?string $value): void {
        $this->getBackingStore()->set('documentMimeType', $value);
    }

    /**
     * Sets the dpi property value. The default resolution in DPI to use when printing the job.
     * @param int|null $value Value to set for the dpi property.
    */
    public function setDpi(?int $value): void {
        $this->getBackingStore()->set('dpi', $value);
    }

    /**
     * Sets the duplexConfiguration property value. The duplexConfiguration property
     * @param PrinterDefaults_duplexConfiguration|null $value Value to set for the duplexConfiguration property.
    */
    public function setDuplexConfiguration(?PrinterDefaults_duplexConfiguration $value): void {
        $this->getBackingStore()->set('duplexConfiguration', $value);
    }

    /**
     * Sets the duplexMode property value. The default duplex (double-sided) configuration to use when printing a document. Valid values are described in the following table.
     * @param PrinterDefaults_duplexMode|null $value Value to set for the duplexMode property.
    */
    public function setDuplexMode(?PrinterDefaults_duplexMode $value): void {
        $this->getBackingStore()->set('duplexMode', $value);
    }

    /**
     * Sets the finishings property value. The default set of finishings to apply to print jobs. Valid values are described in the following table.
     * @param array<PrinterDefaults_finishings>|null $value Value to set for the finishings property.
    */
    public function setFinishings(?array $value): void {
        $this->getBackingStore()->set('finishings', $value);
    }

    /**
     * Sets the fitPdfToPage property value. The default fitPdfToPage setting. True to fit each page of a PDF document to a physical sheet of media; false to let the printer decide how to lay out impressions.
     * @param bool|null $value Value to set for the fitPdfToPage property.
    */
    public function setFitPdfToPage(?bool $value): void {
        $this->getBackingStore()->set('fitPdfToPage', $value);
    }

    /**
     * Sets the inputBin property value. The default input bin that serves as the paper source.
     * @param string|null $value Value to set for the inputBin property.
    */
    public function setInputBin(?string $value): void {
        $this->getBackingStore()->set('inputBin', $value);
    }

    /**
     * Sets the mediaColor property value. The default media (such as paper) color to print the document on.
     * @param string|null $value Value to set for the mediaColor property.
    */
    public function setMediaColor(?string $value): void {
        $this->getBackingStore()->set('mediaColor', $value);
    }

    /**
     * Sets the mediaSize property value. The default media size to use. Supports standard size names for ISO and ANSI media sizes. Valid values are listed in the printerCapabilities topic.
     * @param string|null $value Value to set for the mediaSize property.
    */
    public function setMediaSize(?string $value): void {
        $this->getBackingStore()->set('mediaSize', $value);
    }

    /**
     * Sets the mediaType property value. The default media (such as paper) type to print the document on.
     * @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value): void {
        $this->getBackingStore()->set('mediaType', $value);
    }

    /**
     * Sets the multipageLayout property value. The default direction to lay out pages when multiple pages are being printed per sheet. Valid values are described in the following table.
     * @param PrinterDefaults_multipageLayout|null $value Value to set for the multipageLayout property.
    */
    public function setMultipageLayout(?PrinterDefaults_multipageLayout $value): void {
        $this->getBackingStore()->set('multipageLayout', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the orientation property value. The default orientation to use when printing the document. Valid values are described in the following table.
     * @param PrinterDefaults_orientation|null $value Value to set for the orientation property.
    */
    public function setOrientation(?PrinterDefaults_orientation $value): void {
        $this->getBackingStore()->set('orientation', $value);
    }

    /**
     * Sets the outputBin property value. The default output bin to place completed prints into. See the printer's capabilities for a list of supported output bins.
     * @param string|null $value Value to set for the outputBin property.
    */
    public function setOutputBin(?string $value): void {
        $this->getBackingStore()->set('outputBin', $value);
    }

    /**
     * Sets the pagesPerSheet property value. The default number of document pages to print on each sheet.
     * @param int|null $value Value to set for the pagesPerSheet property.
    */
    public function setPagesPerSheet(?int $value): void {
        $this->getBackingStore()->set('pagesPerSheet', $value);
    }

    /**
     * Sets the pdfFitToPage property value. The pdfFitToPage property
     * @param bool|null $value Value to set for the pdfFitToPage property.
    */
    public function setPdfFitToPage(?bool $value): void {
        $this->getBackingStore()->set('pdfFitToPage', $value);
    }

    /**
     * Sets the presentationDirection property value. The presentationDirection property
     * @param PrinterDefaults_presentationDirection|null $value Value to set for the presentationDirection property.
    */
    public function setPresentationDirection(?PrinterDefaults_presentationDirection $value): void {
        $this->getBackingStore()->set('presentationDirection', $value);
    }

    /**
     * Sets the printColorConfiguration property value. The printColorConfiguration property
     * @param PrinterDefaults_printColorConfiguration|null $value Value to set for the printColorConfiguration property.
    */
    public function setPrintColorConfiguration(?PrinterDefaults_printColorConfiguration $value): void {
        $this->getBackingStore()->set('printColorConfiguration', $value);
    }

    /**
     * Sets the printQuality property value. The printQuality property
     * @param PrinterDefaults_printQuality|null $value Value to set for the printQuality property.
    */
    public function setPrintQuality(?PrinterDefaults_printQuality $value): void {
        $this->getBackingStore()->set('printQuality', $value);
    }

    /**
     * Sets the quality property value. The default quality to use when printing the document. Valid values are described in the following table.
     * @param PrinterDefaults_quality|null $value Value to set for the quality property.
    */
    public function setQuality(?PrinterDefaults_quality $value): void {
        $this->getBackingStore()->set('quality', $value);
    }

    /**
     * Sets the scaling property value. Specifies how the printer scales the document data to fit the requested media. Valid values are described in the following table.
     * @param PrinterDefaults_scaling|null $value Value to set for the scaling property.
    */
    public function setScaling(?PrinterDefaults_scaling $value): void {
        $this->getBackingStore()->set('scaling', $value);
    }

}
