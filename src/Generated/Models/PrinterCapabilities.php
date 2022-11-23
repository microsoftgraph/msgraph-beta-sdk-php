<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class PrinterCapabilities implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new printerCapabilities and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterCapabilities
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterCapabilities {
        return new PrinterCapabilities();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the bottomMargins property value. A list of supported bottom margins(in microns) for the printer.
     * @return array<int>|null
    */
    public function getBottomMargins(): ?array {
        return $this->getBackingStore()->get('bottomMargins');
    }

    /**
     * Gets the collation property value. True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise.
     * @return bool|null
    */
    public function getCollation(): ?bool {
        return $this->getBackingStore()->get('collation');
    }

    /**
     * Gets the colorModes property value. The color modes supported by the printer. Valid values are described in the following table.
     * @return array<PrintColorMode>|null
    */
    public function getColorModes(): ?array {
        return $this->getBackingStore()->get('colorModes');
    }

    /**
     * Gets the contentTypes property value. A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types.
     * @return array<string>|null
    */
    public function getContentTypes(): ?array {
        return $this->getBackingStore()->get('contentTypes');
    }

    /**
     * Gets the copiesPerJob property value. The range of copies per job supported by the printer.
     * @return IntegerRange|null
    */
    public function getCopiesPerJob(): ?IntegerRange {
        return $this->getBackingStore()->get('copiesPerJob');
    }

    /**
     * Gets the dpis property value. The list of print resolutions in DPI that are supported by the printer.
     * @return array<int>|null
    */
    public function getDpis(): ?array {
        return $this->getBackingStore()->get('dpis');
    }

    /**
     * Gets the duplexModes property value. The list of duplex modes that are supported by the printer. Valid values are described in the following table.
     * @return array<PrintDuplexMode>|null
    */
    public function getDuplexModes(): ?array {
        return $this->getBackingStore()->get('duplexModes');
    }

    /**
     * Gets the feedDirections property value. The feedDirections property
     * @return array<PrinterFeedDirection>|null
    */
    public function getFeedDirections(): ?array {
        return $this->getBackingStore()->get('feedDirections');
    }

    /**
     * Gets the feedOrientations property value. The list of feed orientations that are supported by the printer.
     * @return array<PrinterFeedOrientation>|null
    */
    public function getFeedOrientations(): ?array {
        return $this->getBackingStore()->get('feedOrientations');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bottomMargins' => fn(ParseNode $n) => $o->setBottomMargins($n->getCollectionOfPrimitiveValues()),
            'collation' => fn(ParseNode $n) => $o->setCollation($n->getBooleanValue()),
            'colorModes' => fn(ParseNode $n) => $o->setColorModes($n->getCollectionOfEnumValues(PrintColorMode::class)),
            'contentTypes' => fn(ParseNode $n) => $o->setContentTypes($n->getCollectionOfPrimitiveValues()),
            'copiesPerJob' => fn(ParseNode $n) => $o->setCopiesPerJob($n->getObjectValue([IntegerRange::class, 'createFromDiscriminatorValue'])),
            'dpis' => fn(ParseNode $n) => $o->setDpis($n->getCollectionOfPrimitiveValues()),
            'duplexModes' => fn(ParseNode $n) => $o->setDuplexModes($n->getCollectionOfEnumValues(PrintDuplexMode::class)),
            'feedDirections' => fn(ParseNode $n) => $o->setFeedDirections($n->getCollectionOfEnumValues(PrinterFeedDirection::class)),
            'feedOrientations' => fn(ParseNode $n) => $o->setFeedOrientations($n->getCollectionOfEnumValues(PrinterFeedOrientation::class)),
            'finishings' => fn(ParseNode $n) => $o->setFinishings($n->getCollectionOfEnumValues(PrintFinishing::class)),
            'inputBins' => fn(ParseNode $n) => $o->setInputBins($n->getCollectionOfPrimitiveValues()),
            'isColorPrintingSupported' => fn(ParseNode $n) => $o->setIsColorPrintingSupported($n->getBooleanValue()),
            'isPageRangeSupported' => fn(ParseNode $n) => $o->setIsPageRangeSupported($n->getBooleanValue()),
            'leftMargins' => fn(ParseNode $n) => $o->setLeftMargins($n->getCollectionOfPrimitiveValues()),
            'mediaColors' => fn(ParseNode $n) => $o->setMediaColors($n->getCollectionOfPrimitiveValues()),
            'mediaSizes' => fn(ParseNode $n) => $o->setMediaSizes($n->getCollectionOfPrimitiveValues()),
            'mediaTypes' => fn(ParseNode $n) => $o->setMediaTypes($n->getCollectionOfPrimitiveValues()),
            'multipageLayouts' => fn(ParseNode $n) => $o->setMultipageLayouts($n->getCollectionOfEnumValues(PrintMultipageLayout::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'orientations' => fn(ParseNode $n) => $o->setOrientations($n->getCollectionOfEnumValues(PrintOrientation::class)),
            'outputBins' => fn(ParseNode $n) => $o->setOutputBins($n->getCollectionOfPrimitiveValues()),
            'pagesPerSheet' => fn(ParseNode $n) => $o->setPagesPerSheet($n->getCollectionOfPrimitiveValues()),
            'qualities' => fn(ParseNode $n) => $o->setQualities($n->getCollectionOfEnumValues(PrintQuality::class)),
            'rightMargins' => fn(ParseNode $n) => $o->setRightMargins($n->getCollectionOfPrimitiveValues()),
            'scalings' => fn(ParseNode $n) => $o->setScalings($n->getCollectionOfEnumValues(PrintScaling::class)),
            'supportedColorConfigurations' => fn(ParseNode $n) => $o->setSupportedColorConfigurations($n->getCollectionOfEnumValues(PrintColorConfiguration::class)),
            'supportedCopiesPerJob' => fn(ParseNode $n) => $o->setSupportedCopiesPerJob($n->getObjectValue([IntegerRange::class, 'createFromDiscriminatorValue'])),
            'supportedDocumentMimeTypes' => fn(ParseNode $n) => $o->setSupportedDocumentMimeTypes($n->getCollectionOfPrimitiveValues()),
            'supportedDuplexConfigurations' => fn(ParseNode $n) => $o->setSupportedDuplexConfigurations($n->getCollectionOfEnumValues(PrintDuplexConfiguration::class)),
            'supportedFinishings' => fn(ParseNode $n) => $o->setSupportedFinishings($n->getCollectionOfEnumValues(PrintFinishing::class)),
            'supportedMediaColors' => fn(ParseNode $n) => $o->setSupportedMediaColors($n->getCollectionOfPrimitiveValues()),
            'supportedMediaSizes' => fn(ParseNode $n) => $o->setSupportedMediaSizes($n->getCollectionOfPrimitiveValues()),
            'supportedMediaTypes' => fn(ParseNode $n) => $o->setSupportedMediaTypes($n->getCollectionOfEnumValues(PrintMediaType::class)),
            'supportedOrientations' => fn(ParseNode $n) => $o->setSupportedOrientations($n->getCollectionOfEnumValues(PrintOrientation::class)),
            'supportedOutputBins' => fn(ParseNode $n) => $o->setSupportedOutputBins($n->getCollectionOfPrimitiveValues()),
            'supportedPagesPerSheet' => fn(ParseNode $n) => $o->setSupportedPagesPerSheet($n->getObjectValue([IntegerRange::class, 'createFromDiscriminatorValue'])),
            'supportedPresentationDirections' => fn(ParseNode $n) => $o->setSupportedPresentationDirections($n->getCollectionOfEnumValues(PrintPresentationDirection::class)),
            'supportedPrintQualities' => fn(ParseNode $n) => $o->setSupportedPrintQualities($n->getCollectionOfEnumValues(PrintQuality::class)),
            'supportsFitPdfToPage' => fn(ParseNode $n) => $o->setSupportsFitPdfToPage($n->getBooleanValue()),
            'topMargins' => fn(ParseNode $n) => $o->setTopMargins($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the finishings property value. Finishing processes the printer supports for a printed document.
     * @return array<PrintFinishing>|null
    */
    public function getFinishings(): ?array {
        return $this->getBackingStore()->get('finishings');
    }

    /**
     * Gets the inputBins property value. Supported input bins for the printer.
     * @return array<string>|null
    */
    public function getInputBins(): ?array {
        return $this->getBackingStore()->get('inputBins');
    }

    /**
     * Gets the isColorPrintingSupported property value. True if color printing is supported by the printer; false otherwise. Read-only.
     * @return bool|null
    */
    public function getIsColorPrintingSupported(): ?bool {
        return $this->getBackingStore()->get('isColorPrintingSupported');
    }

    /**
     * Gets the isPageRangeSupported property value. True if the printer supports printing by page ranges; false otherwise.
     * @return bool|null
    */
    public function getIsPageRangeSupported(): ?bool {
        return $this->getBackingStore()->get('isPageRangeSupported');
    }

    /**
     * Gets the leftMargins property value. A list of supported left margins(in microns) for the printer.
     * @return array<int>|null
    */
    public function getLeftMargins(): ?array {
        return $this->getBackingStore()->get('leftMargins');
    }

    /**
     * Gets the mediaColors property value. The media (i.e., paper) colors supported by the printer.
     * @return array<string>|null
    */
    public function getMediaColors(): ?array {
        return $this->getBackingStore()->get('mediaColors');
    }

    /**
     * Gets the mediaSizes property value. The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes. Valid values are in the following table.
     * @return array<string>|null
    */
    public function getMediaSizes(): ?array {
        return $this->getBackingStore()->get('mediaSizes');
    }

    /**
     * Gets the mediaTypes property value. The media types supported by the printer.
     * @return array<string>|null
    */
    public function getMediaTypes(): ?array {
        return $this->getBackingStore()->get('mediaTypes');
    }

    /**
     * Gets the multipageLayouts property value. The presentation directions supported by the printer. Supported values are described in the following table.
     * @return array<PrintMultipageLayout>|null
    */
    public function getMultipageLayouts(): ?array {
        return $this->getBackingStore()->get('multipageLayouts');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the orientations property value. The print orientations supported by the printer. Valid values are described in the following table.
     * @return array<PrintOrientation>|null
    */
    public function getOrientations(): ?array {
        return $this->getBackingStore()->get('orientations');
    }

    /**
     * Gets the outputBins property value. The printer's supported output bins (trays).
     * @return array<string>|null
    */
    public function getOutputBins(): ?array {
        return $this->getBackingStore()->get('outputBins');
    }

    /**
     * Gets the pagesPerSheet property value. Supported number of Input Pages to impose upon a single Impression.
     * @return array<int>|null
    */
    public function getPagesPerSheet(): ?array {
        return $this->getBackingStore()->get('pagesPerSheet');
    }

    /**
     * Gets the qualities property value. The print qualities supported by the printer.
     * @return array<PrintQuality>|null
    */
    public function getQualities(): ?array {
        return $this->getBackingStore()->get('qualities');
    }

    /**
     * Gets the rightMargins property value. A list of supported right margins(in microns) for the printer.
     * @return array<int>|null
    */
    public function getRightMargins(): ?array {
        return $this->getBackingStore()->get('rightMargins');
    }

    /**
     * Gets the scalings property value. Supported print scalings.
     * @return array<PrintScaling>|null
    */
    public function getScalings(): ?array {
        return $this->getBackingStore()->get('scalings');
    }

    /**
     * Gets the supportedColorConfigurations property value. The supportedColorConfigurations property
     * @return array<PrintColorConfiguration>|null
    */
    public function getSupportedColorConfigurations(): ?array {
        return $this->getBackingStore()->get('supportedColorConfigurations');
    }

    /**
     * Gets the supportedCopiesPerJob property value. The supportedCopiesPerJob property
     * @return IntegerRange|null
    */
    public function getSupportedCopiesPerJob(): ?IntegerRange {
        return $this->getBackingStore()->get('supportedCopiesPerJob');
    }

    /**
     * Gets the supportedDocumentMimeTypes property value. The supportedDocumentMimeTypes property
     * @return array<string>|null
    */
    public function getSupportedDocumentMimeTypes(): ?array {
        return $this->getBackingStore()->get('supportedDocumentMimeTypes');
    }

    /**
     * Gets the supportedDuplexConfigurations property value. The supportedDuplexConfigurations property
     * @return array<PrintDuplexConfiguration>|null
    */
    public function getSupportedDuplexConfigurations(): ?array {
        return $this->getBackingStore()->get('supportedDuplexConfigurations');
    }

    /**
     * Gets the supportedFinishings property value. The supportedFinishings property
     * @return array<PrintFinishing>|null
    */
    public function getSupportedFinishings(): ?array {
        return $this->getBackingStore()->get('supportedFinishings');
    }

    /**
     * Gets the supportedMediaColors property value. The supportedMediaColors property
     * @return array<string>|null
    */
    public function getSupportedMediaColors(): ?array {
        return $this->getBackingStore()->get('supportedMediaColors');
    }

    /**
     * Gets the supportedMediaSizes property value. The supportedMediaSizes property
     * @return array<string>|null
    */
    public function getSupportedMediaSizes(): ?array {
        return $this->getBackingStore()->get('supportedMediaSizes');
    }

    /**
     * Gets the supportedMediaTypes property value. The supportedMediaTypes property
     * @return array<PrintMediaType>|null
    */
    public function getSupportedMediaTypes(): ?array {
        return $this->getBackingStore()->get('supportedMediaTypes');
    }

    /**
     * Gets the supportedOrientations property value. The supportedOrientations property
     * @return array<PrintOrientation>|null
    */
    public function getSupportedOrientations(): ?array {
        return $this->getBackingStore()->get('supportedOrientations');
    }

    /**
     * Gets the supportedOutputBins property value. The supportedOutputBins property
     * @return array<string>|null
    */
    public function getSupportedOutputBins(): ?array {
        return $this->getBackingStore()->get('supportedOutputBins');
    }

    /**
     * Gets the supportedPagesPerSheet property value. The supportedPagesPerSheet property
     * @return IntegerRange|null
    */
    public function getSupportedPagesPerSheet(): ?IntegerRange {
        return $this->getBackingStore()->get('supportedPagesPerSheet');
    }

    /**
     * Gets the supportedPresentationDirections property value. The supportedPresentationDirections property
     * @return array<PrintPresentationDirection>|null
    */
    public function getSupportedPresentationDirections(): ?array {
        return $this->getBackingStore()->get('supportedPresentationDirections');
    }

    /**
     * Gets the supportedPrintQualities property value. The supportedPrintQualities property
     * @return array<PrintQuality>|null
    */
    public function getSupportedPrintQualities(): ?array {
        return $this->getBackingStore()->get('supportedPrintQualities');
    }

    /**
     * Gets the supportsFitPdfToPage property value. True if the printer supports scaling PDF pages to match the print media size; false otherwise.
     * @return bool|null
    */
    public function getSupportsFitPdfToPage(): ?bool {
        return $this->getBackingStore()->get('supportsFitPdfToPage');
    }

    /**
     * Gets the topMargins property value. A list of supported top margins(in microns) for the printer.
     * @return array<int>|null
    */
    public function getTopMargins(): ?array {
        return $this->getBackingStore()->get('topMargins');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('bottomMargins', $this->getBottomMargins());
        $writer->writeBooleanValue('collation', $this->getCollation());
        $writer->writeCollectionOfEnumValues('colorModes', $this->getColorModes());
        $writer->writeCollectionOfPrimitiveValues('contentTypes', $this->getContentTypes());
        $writer->writeObjectValue('copiesPerJob', $this->getCopiesPerJob());
        $writer->writeCollectionOfPrimitiveValues('dpis', $this->getDpis());
        $writer->writeCollectionOfEnumValues('duplexModes', $this->getDuplexModes());
        $writer->writeCollectionOfEnumValues('feedDirections', $this->getFeedDirections());
        $writer->writeCollectionOfEnumValues('feedOrientations', $this->getFeedOrientations());
        $writer->writeCollectionOfEnumValues('finishings', $this->getFinishings());
        $writer->writeCollectionOfPrimitiveValues('inputBins', $this->getInputBins());
        $writer->writeBooleanValue('isColorPrintingSupported', $this->getIsColorPrintingSupported());
        $writer->writeBooleanValue('isPageRangeSupported', $this->getIsPageRangeSupported());
        $writer->writeCollectionOfPrimitiveValues('leftMargins', $this->getLeftMargins());
        $writer->writeCollectionOfPrimitiveValues('mediaColors', $this->getMediaColors());
        $writer->writeCollectionOfPrimitiveValues('mediaSizes', $this->getMediaSizes());
        $writer->writeCollectionOfPrimitiveValues('mediaTypes', $this->getMediaTypes());
        $writer->writeCollectionOfEnumValues('multipageLayouts', $this->getMultipageLayouts());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfEnumValues('orientations', $this->getOrientations());
        $writer->writeCollectionOfPrimitiveValues('outputBins', $this->getOutputBins());
        $writer->writeCollectionOfPrimitiveValues('pagesPerSheet', $this->getPagesPerSheet());
        $writer->writeCollectionOfEnumValues('qualities', $this->getQualities());
        $writer->writeCollectionOfPrimitiveValues('rightMargins', $this->getRightMargins());
        $writer->writeCollectionOfEnumValues('scalings', $this->getScalings());
        $writer->writeCollectionOfEnumValues('supportedColorConfigurations', $this->getSupportedColorConfigurations());
        $writer->writeObjectValue('supportedCopiesPerJob', $this->getSupportedCopiesPerJob());
        $writer->writeCollectionOfPrimitiveValues('supportedDocumentMimeTypes', $this->getSupportedDocumentMimeTypes());
        $writer->writeCollectionOfEnumValues('supportedDuplexConfigurations', $this->getSupportedDuplexConfigurations());
        $writer->writeCollectionOfEnumValues('supportedFinishings', $this->getSupportedFinishings());
        $writer->writeCollectionOfPrimitiveValues('supportedMediaColors', $this->getSupportedMediaColors());
        $writer->writeCollectionOfPrimitiveValues('supportedMediaSizes', $this->getSupportedMediaSizes());
        $writer->writeCollectionOfEnumValues('supportedMediaTypes', $this->getSupportedMediaTypes());
        $writer->writeCollectionOfEnumValues('supportedOrientations', $this->getSupportedOrientations());
        $writer->writeCollectionOfPrimitiveValues('supportedOutputBins', $this->getSupportedOutputBins());
        $writer->writeObjectValue('supportedPagesPerSheet', $this->getSupportedPagesPerSheet());
        $writer->writeCollectionOfEnumValues('supportedPresentationDirections', $this->getSupportedPresentationDirections());
        $writer->writeCollectionOfEnumValues('supportedPrintQualities', $this->getSupportedPrintQualities());
        $writer->writeBooleanValue('supportsFitPdfToPage', $this->getSupportsFitPdfToPage());
        $writer->writeCollectionOfPrimitiveValues('topMargins', $this->getTopMargins());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the bottomMargins property value. A list of supported bottom margins(in microns) for the printer.
     *  @param array<int>|null $value Value to set for the bottomMargins property.
    */
    public function setBottomMargins(?array $value): void {
        $this->getBackingStore()->set('bottomMargins', $value);
    }

    /**
     * Sets the collation property value. True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise.
     *  @param bool|null $value Value to set for the collation property.
    */
    public function setCollation(?bool $value): void {
        $this->getBackingStore()->set('collation', $value);
    }

    /**
     * Sets the colorModes property value. The color modes supported by the printer. Valid values are described in the following table.
     *  @param array<PrintColorMode>|null $value Value to set for the colorModes property.
    */
    public function setColorModes(?array $value): void {
        $this->getBackingStore()->set('colorModes', $value);
    }

    /**
     * Sets the contentTypes property value. A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types.
     *  @param array<string>|null $value Value to set for the contentTypes property.
    */
    public function setContentTypes(?array $value): void {
        $this->getBackingStore()->set('contentTypes', $value);
    }

    /**
     * Sets the copiesPerJob property value. The range of copies per job supported by the printer.
     *  @param IntegerRange|null $value Value to set for the copiesPerJob property.
    */
    public function setCopiesPerJob(?IntegerRange $value): void {
        $this->getBackingStore()->set('copiesPerJob', $value);
    }

    /**
     * Sets the dpis property value. The list of print resolutions in DPI that are supported by the printer.
     *  @param array<int>|null $value Value to set for the dpis property.
    */
    public function setDpis(?array $value): void {
        $this->getBackingStore()->set('dpis', $value);
    }

    /**
     * Sets the duplexModes property value. The list of duplex modes that are supported by the printer. Valid values are described in the following table.
     *  @param array<PrintDuplexMode>|null $value Value to set for the duplexModes property.
    */
    public function setDuplexModes(?array $value): void {
        $this->getBackingStore()->set('duplexModes', $value);
    }

    /**
     * Sets the feedDirections property value. The feedDirections property
     *  @param array<PrinterFeedDirection>|null $value Value to set for the feedDirections property.
    */
    public function setFeedDirections(?array $value): void {
        $this->getBackingStore()->set('feedDirections', $value);
    }

    /**
     * Sets the feedOrientations property value. The list of feed orientations that are supported by the printer.
     *  @param array<PrinterFeedOrientation>|null $value Value to set for the feedOrientations property.
    */
    public function setFeedOrientations(?array $value): void {
        $this->getBackingStore()->set('feedOrientations', $value);
    }

    /**
     * Sets the finishings property value. Finishing processes the printer supports for a printed document.
     *  @param array<PrintFinishing>|null $value Value to set for the finishings property.
    */
    public function setFinishings(?array $value): void {
        $this->getBackingStore()->set('finishings', $value);
    }

    /**
     * Sets the inputBins property value. Supported input bins for the printer.
     *  @param array<string>|null $value Value to set for the inputBins property.
    */
    public function setInputBins(?array $value): void {
        $this->getBackingStore()->set('inputBins', $value);
    }

    /**
     * Sets the isColorPrintingSupported property value. True if color printing is supported by the printer; false otherwise. Read-only.
     *  @param bool|null $value Value to set for the isColorPrintingSupported property.
    */
    public function setIsColorPrintingSupported(?bool $value): void {
        $this->getBackingStore()->set('isColorPrintingSupported', $value);
    }

    /**
     * Sets the isPageRangeSupported property value. True if the printer supports printing by page ranges; false otherwise.
     *  @param bool|null $value Value to set for the isPageRangeSupported property.
    */
    public function setIsPageRangeSupported(?bool $value): void {
        $this->getBackingStore()->set('isPageRangeSupported', $value);
    }

    /**
     * Sets the leftMargins property value. A list of supported left margins(in microns) for the printer.
     *  @param array<int>|null $value Value to set for the leftMargins property.
    */
    public function setLeftMargins(?array $value): void {
        $this->getBackingStore()->set('leftMargins', $value);
    }

    /**
     * Sets the mediaColors property value. The media (i.e., paper) colors supported by the printer.
     *  @param array<string>|null $value Value to set for the mediaColors property.
    */
    public function setMediaColors(?array $value): void {
        $this->getBackingStore()->set('mediaColors', $value);
    }

    /**
     * Sets the mediaSizes property value. The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes. Valid values are in the following table.
     *  @param array<string>|null $value Value to set for the mediaSizes property.
    */
    public function setMediaSizes(?array $value): void {
        $this->getBackingStore()->set('mediaSizes', $value);
    }

    /**
     * Sets the mediaTypes property value. The media types supported by the printer.
     *  @param array<string>|null $value Value to set for the mediaTypes property.
    */
    public function setMediaTypes(?array $value): void {
        $this->getBackingStore()->set('mediaTypes', $value);
    }

    /**
     * Sets the multipageLayouts property value. The presentation directions supported by the printer. Supported values are described in the following table.
     *  @param array<PrintMultipageLayout>|null $value Value to set for the multipageLayouts property.
    */
    public function setMultipageLayouts(?array $value): void {
        $this->getBackingStore()->set('multipageLayouts', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the orientations property value. The print orientations supported by the printer. Valid values are described in the following table.
     *  @param array<PrintOrientation>|null $value Value to set for the orientations property.
    */
    public function setOrientations(?array $value): void {
        $this->getBackingStore()->set('orientations', $value);
    }

    /**
     * Sets the outputBins property value. The printer's supported output bins (trays).
     *  @param array<string>|null $value Value to set for the outputBins property.
    */
    public function setOutputBins(?array $value): void {
        $this->getBackingStore()->set('outputBins', $value);
    }

    /**
     * Sets the pagesPerSheet property value. Supported number of Input Pages to impose upon a single Impression.
     *  @param array<int>|null $value Value to set for the pagesPerSheet property.
    */
    public function setPagesPerSheet(?array $value): void {
        $this->getBackingStore()->set('pagesPerSheet', $value);
    }

    /**
     * Sets the qualities property value. The print qualities supported by the printer.
     *  @param array<PrintQuality>|null $value Value to set for the qualities property.
    */
    public function setQualities(?array $value): void {
        $this->getBackingStore()->set('qualities', $value);
    }

    /**
     * Sets the rightMargins property value. A list of supported right margins(in microns) for the printer.
     *  @param array<int>|null $value Value to set for the rightMargins property.
    */
    public function setRightMargins(?array $value): void {
        $this->getBackingStore()->set('rightMargins', $value);
    }

    /**
     * Sets the scalings property value. Supported print scalings.
     *  @param array<PrintScaling>|null $value Value to set for the scalings property.
    */
    public function setScalings(?array $value): void {
        $this->getBackingStore()->set('scalings', $value);
    }

    /**
     * Sets the supportedColorConfigurations property value. The supportedColorConfigurations property
     *  @param array<PrintColorConfiguration>|null $value Value to set for the supportedColorConfigurations property.
    */
    public function setSupportedColorConfigurations(?array $value): void {
        $this->getBackingStore()->set('supportedColorConfigurations', $value);
    }

    /**
     * Sets the supportedCopiesPerJob property value. The supportedCopiesPerJob property
     *  @param IntegerRange|null $value Value to set for the supportedCopiesPerJob property.
    */
    public function setSupportedCopiesPerJob(?IntegerRange $value): void {
        $this->getBackingStore()->set('supportedCopiesPerJob', $value);
    }

    /**
     * Sets the supportedDocumentMimeTypes property value. The supportedDocumentMimeTypes property
     *  @param array<string>|null $value Value to set for the supportedDocumentMimeTypes property.
    */
    public function setSupportedDocumentMimeTypes(?array $value): void {
        $this->getBackingStore()->set('supportedDocumentMimeTypes', $value);
    }

    /**
     * Sets the supportedDuplexConfigurations property value. The supportedDuplexConfigurations property
     *  @param array<PrintDuplexConfiguration>|null $value Value to set for the supportedDuplexConfigurations property.
    */
    public function setSupportedDuplexConfigurations(?array $value): void {
        $this->getBackingStore()->set('supportedDuplexConfigurations', $value);
    }

    /**
     * Sets the supportedFinishings property value. The supportedFinishings property
     *  @param array<PrintFinishing>|null $value Value to set for the supportedFinishings property.
    */
    public function setSupportedFinishings(?array $value): void {
        $this->getBackingStore()->set('supportedFinishings', $value);
    }

    /**
     * Sets the supportedMediaColors property value. The supportedMediaColors property
     *  @param array<string>|null $value Value to set for the supportedMediaColors property.
    */
    public function setSupportedMediaColors(?array $value): void {
        $this->getBackingStore()->set('supportedMediaColors', $value);
    }

    /**
     * Sets the supportedMediaSizes property value. The supportedMediaSizes property
     *  @param array<string>|null $value Value to set for the supportedMediaSizes property.
    */
    public function setSupportedMediaSizes(?array $value): void {
        $this->getBackingStore()->set('supportedMediaSizes', $value);
    }

    /**
     * Sets the supportedMediaTypes property value. The supportedMediaTypes property
     *  @param array<PrintMediaType>|null $value Value to set for the supportedMediaTypes property.
    */
    public function setSupportedMediaTypes(?array $value): void {
        $this->getBackingStore()->set('supportedMediaTypes', $value);
    }

    /**
     * Sets the supportedOrientations property value. The supportedOrientations property
     *  @param array<PrintOrientation>|null $value Value to set for the supportedOrientations property.
    */
    public function setSupportedOrientations(?array $value): void {
        $this->getBackingStore()->set('supportedOrientations', $value);
    }

    /**
     * Sets the supportedOutputBins property value. The supportedOutputBins property
     *  @param array<string>|null $value Value to set for the supportedOutputBins property.
    */
    public function setSupportedOutputBins(?array $value): void {
        $this->getBackingStore()->set('supportedOutputBins', $value);
    }

    /**
     * Sets the supportedPagesPerSheet property value. The supportedPagesPerSheet property
     *  @param IntegerRange|null $value Value to set for the supportedPagesPerSheet property.
    */
    public function setSupportedPagesPerSheet(?IntegerRange $value): void {
        $this->getBackingStore()->set('supportedPagesPerSheet', $value);
    }

    /**
     * Sets the supportedPresentationDirections property value. The supportedPresentationDirections property
     *  @param array<PrintPresentationDirection>|null $value Value to set for the supportedPresentationDirections property.
    */
    public function setSupportedPresentationDirections(?array $value): void {
        $this->getBackingStore()->set('supportedPresentationDirections', $value);
    }

    /**
     * Sets the supportedPrintQualities property value. The supportedPrintQualities property
     *  @param array<PrintQuality>|null $value Value to set for the supportedPrintQualities property.
    */
    public function setSupportedPrintQualities(?array $value): void {
        $this->getBackingStore()->set('supportedPrintQualities', $value);
    }

    /**
     * Sets the supportsFitPdfToPage property value. True if the printer supports scaling PDF pages to match the print media size; false otherwise.
     *  @param bool|null $value Value to set for the supportsFitPdfToPage property.
    */
    public function setSupportsFitPdfToPage(?bool $value): void {
        $this->getBackingStore()->set('supportsFitPdfToPage', $value);
    }

    /**
     * Sets the topMargins property value. A list of supported top margins(in microns) for the printer.
     *  @param array<int>|null $value Value to set for the topMargins property.
    */
    public function setTopMargins(?array $value): void {
        $this->getBackingStore()->set('topMargins', $value);
    }

}
