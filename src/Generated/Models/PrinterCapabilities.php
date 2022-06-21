<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterCapabilities implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<int>|null $bottomMargins A list of supported bottom margins(in microns) for the printer.
    */
    private ?array $bottomMargins = null;
    
    /**
     * @var bool|null $collation True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise.
    */
    private ?bool $collation = null;
    
    /**
     * @var array<string>|null $colorModes The color modes supported by the printer. Valid values are described in the following table.
    */
    private ?array $colorModes = null;
    
    /**
     * @var array<string>|null $contentTypes A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types.
    */
    private ?array $contentTypes = null;
    
    /**
     * @var IntegerRange|null $copiesPerJob The range of copies per job supported by the printer.
    */
    private ?IntegerRange $copiesPerJob = null;
    
    /**
     * @var array<int>|null $dpis The list of print resolutions in DPI that are supported by the printer.
    */
    private ?array $dpis = null;
    
    /**
     * @var array<string>|null $duplexModes The list of duplex modes that are supported by the printer. Valid values are described in the following table.
    */
    private ?array $duplexModes = null;
    
    /**
     * @var array<string>|null $feedDirections The feedDirections property
    */
    private ?array $feedDirections = null;
    
    /**
     * @var array<string>|null $feedOrientations The list of feed orientations that are supported by the printer.
    */
    private ?array $feedOrientations = null;
    
    /**
     * @var array<string>|null $finishings Finishing processes the printer supports for a printed document.
    */
    private ?array $finishings = null;
    
    /**
     * @var array<string>|null $inputBins Supported input bins for the printer.
    */
    private ?array $inputBins = null;
    
    /**
     * @var bool|null $isColorPrintingSupported True if color printing is supported by the printer; false otherwise. Read-only.
    */
    private ?bool $isColorPrintingSupported = null;
    
    /**
     * @var bool|null $isPageRangeSupported True if the printer supports printing by page ranges; false otherwise.
    */
    private ?bool $isPageRangeSupported = null;
    
    /**
     * @var array<int>|null $leftMargins A list of supported left margins(in microns) for the printer.
    */
    private ?array $leftMargins = null;
    
    /**
     * @var array<string>|null $mediaColors The media (i.e., paper) colors supported by the printer.
    */
    private ?array $mediaColors = null;
    
    /**
     * @var array<string>|null $mediaSizes The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes. Valid values are in the following table.
    */
    private ?array $mediaSizes = null;
    
    /**
     * @var array<string>|null $mediaTypes The media types supported by the printer.
    */
    private ?array $mediaTypes = null;
    
    /**
     * @var array<string>|null $multipageLayouts The presentation directions supported by the printer. Supported values are described in the following table.
    */
    private ?array $multipageLayouts = null;
    
    /**
     * @var array<string>|null $orientations The print orientations supported by the printer. Valid values are described in the following table.
    */
    private ?array $orientations = null;
    
    /**
     * @var array<string>|null $outputBins The printer's supported output bins (trays).
    */
    private ?array $outputBins = null;
    
    /**
     * @var array<int>|null $pagesPerSheet Supported number of Input Pages to impose upon a single Impression.
    */
    private ?array $pagesPerSheet = null;
    
    /**
     * @var array<string>|null $qualities The print qualities supported by the printer.
    */
    private ?array $qualities = null;
    
    /**
     * @var array<int>|null $rightMargins A list of supported right margins(in microns) for the printer.
    */
    private ?array $rightMargins = null;
    
    /**
     * @var array<string>|null $scalings Supported print scalings.
    */
    private ?array $scalings = null;
    
    /**
     * @var array<string>|null $supportedColorConfigurations The supportedColorConfigurations property
    */
    private ?array $supportedColorConfigurations = null;
    
    /**
     * @var IntegerRange|null $supportedCopiesPerJob The supportedCopiesPerJob property
    */
    private ?IntegerRange $supportedCopiesPerJob = null;
    
    /**
     * @var array<string>|null $supportedDocumentMimeTypes The supportedDocumentMimeTypes property
    */
    private ?array $supportedDocumentMimeTypes = null;
    
    /**
     * @var array<string>|null $supportedDuplexConfigurations The supportedDuplexConfigurations property
    */
    private ?array $supportedDuplexConfigurations = null;
    
    /**
     * @var array<string>|null $supportedFinishings The supportedFinishings property
    */
    private ?array $supportedFinishings = null;
    
    /**
     * @var array<string>|null $supportedMediaColors The supportedMediaColors property
    */
    private ?array $supportedMediaColors = null;
    
    /**
     * @var array<string>|null $supportedMediaSizes The supportedMediaSizes property
    */
    private ?array $supportedMediaSizes = null;
    
    /**
     * @var array<string>|null $supportedMediaTypes The supportedMediaTypes property
    */
    private ?array $supportedMediaTypes = null;
    
    /**
     * @var array<string>|null $supportedOrientations The supportedOrientations property
    */
    private ?array $supportedOrientations = null;
    
    /**
     * @var array<string>|null $supportedOutputBins The supportedOutputBins property
    */
    private ?array $supportedOutputBins = null;
    
    /**
     * @var IntegerRange|null $supportedPagesPerSheet The supportedPagesPerSheet property
    */
    private ?IntegerRange $supportedPagesPerSheet = null;
    
    /**
     * @var array<string>|null $supportedPresentationDirections The supportedPresentationDirections property
    */
    private ?array $supportedPresentationDirections = null;
    
    /**
     * @var array<string>|null $supportedPrintQualities The supportedPrintQualities property
    */
    private ?array $supportedPrintQualities = null;
    
    /**
     * @var bool|null $supportsFitPdfToPage True if the printer supports scaling PDF pages to match the print media size; false otherwise.
    */
    private ?bool $supportsFitPdfToPage = null;
    
    /**
     * @var array<int>|null $topMargins A list of supported top margins(in microns) for the printer.
    */
    private ?array $topMargins = null;
    
    /**
     * Instantiates a new printerCapabilities and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the bottomMargins property value. A list of supported bottom margins(in microns) for the printer.
     * @return array<int>|null
    */
    public function getBottomMargins(): ?array {
        return $this->bottomMargins;
    }

    /**
     * Gets the collation property value. True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise.
     * @return bool|null
    */
    public function getCollation(): ?bool {
        return $this->collation;
    }

    /**
     * Gets the colorModes property value. The color modes supported by the printer. Valid values are described in the following table.
     * @return array<string>|null
    */
    public function getColorModes(): ?array {
        return $this->colorModes;
    }

    /**
     * Gets the contentTypes property value. A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types.
     * @return array<string>|null
    */
    public function getContentTypes(): ?array {
        return $this->contentTypes;
    }

    /**
     * Gets the copiesPerJob property value. The range of copies per job supported by the printer.
     * @return IntegerRange|null
    */
    public function getCopiesPerJob(): ?IntegerRange {
        return $this->copiesPerJob;
    }

    /**
     * Gets the dpis property value. The list of print resolutions in DPI that are supported by the printer.
     * @return array<int>|null
    */
    public function getDpis(): ?array {
        return $this->dpis;
    }

    /**
     * Gets the duplexModes property value. The list of duplex modes that are supported by the printer. Valid values are described in the following table.
     * @return array<string>|null
    */
    public function getDuplexModes(): ?array {
        return $this->duplexModes;
    }

    /**
     * Gets the feedDirections property value. The feedDirections property
     * @return array<string>|null
    */
    public function getFeedDirections(): ?array {
        return $this->feedDirections;
    }

    /**
     * Gets the feedOrientations property value. The list of feed orientations that are supported by the printer.
     * @return array<string>|null
    */
    public function getFeedOrientations(): ?array {
        return $this->feedOrientations;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'bottomMargins' => function (ParseNode $n) use ($o) { $o->setBottomMargins($n->getCollectionOfPrimitiveValues()); },
            'collation' => function (ParseNode $n) use ($o) { $o->setCollation($n->getBooleanValue()); },
            'colorModes' => function (ParseNode $n) use ($o) { $o->setColorModes($n->getCollectionOfPrimitiveValues()); },
            'contentTypes' => function (ParseNode $n) use ($o) { $o->setContentTypes($n->getCollectionOfPrimitiveValues()); },
            'copiesPerJob' => function (ParseNode $n) use ($o) { $o->setCopiesPerJob($n->getObjectValue(array(IntegerRange::class, 'createFromDiscriminatorValue'))); },
            'dpis' => function (ParseNode $n) use ($o) { $o->setDpis($n->getCollectionOfPrimitiveValues()); },
            'duplexModes' => function (ParseNode $n) use ($o) { $o->setDuplexModes($n->getCollectionOfPrimitiveValues()); },
            'feedDirections' => function (ParseNode $n) use ($o) { $o->setFeedDirections($n->getCollectionOfPrimitiveValues()); },
            'feedOrientations' => function (ParseNode $n) use ($o) { $o->setFeedOrientations($n->getCollectionOfPrimitiveValues()); },
            'finishings' => function (ParseNode $n) use ($o) { $o->setFinishings($n->getCollectionOfPrimitiveValues()); },
            'inputBins' => function (ParseNode $n) use ($o) { $o->setInputBins($n->getCollectionOfPrimitiveValues()); },
            'isColorPrintingSupported' => function (ParseNode $n) use ($o) { $o->setIsColorPrintingSupported($n->getBooleanValue()); },
            'isPageRangeSupported' => function (ParseNode $n) use ($o) { $o->setIsPageRangeSupported($n->getBooleanValue()); },
            'leftMargins' => function (ParseNode $n) use ($o) { $o->setLeftMargins($n->getCollectionOfPrimitiveValues()); },
            'mediaColors' => function (ParseNode $n) use ($o) { $o->setMediaColors($n->getCollectionOfPrimitiveValues()); },
            'mediaSizes' => function (ParseNode $n) use ($o) { $o->setMediaSizes($n->getCollectionOfPrimitiveValues()); },
            'mediaTypes' => function (ParseNode $n) use ($o) { $o->setMediaTypes($n->getCollectionOfPrimitiveValues()); },
            'multipageLayouts' => function (ParseNode $n) use ($o) { $o->setMultipageLayouts($n->getCollectionOfPrimitiveValues()); },
            'orientations' => function (ParseNode $n) use ($o) { $o->setOrientations($n->getCollectionOfPrimitiveValues()); },
            'outputBins' => function (ParseNode $n) use ($o) { $o->setOutputBins($n->getCollectionOfPrimitiveValues()); },
            'pagesPerSheet' => function (ParseNode $n) use ($o) { $o->setPagesPerSheet($n->getCollectionOfPrimitiveValues()); },
            'qualities' => function (ParseNode $n) use ($o) { $o->setQualities($n->getCollectionOfPrimitiveValues()); },
            'rightMargins' => function (ParseNode $n) use ($o) { $o->setRightMargins($n->getCollectionOfPrimitiveValues()); },
            'scalings' => function (ParseNode $n) use ($o) { $o->setScalings($n->getCollectionOfPrimitiveValues()); },
            'supportedColorConfigurations' => function (ParseNode $n) use ($o) { $o->setSupportedColorConfigurations($n->getCollectionOfPrimitiveValues()); },
            'supportedCopiesPerJob' => function (ParseNode $n) use ($o) { $o->setSupportedCopiesPerJob($n->getObjectValue(array(IntegerRange::class, 'createFromDiscriminatorValue'))); },
            'supportedDocumentMimeTypes' => function (ParseNode $n) use ($o) { $o->setSupportedDocumentMimeTypes($n->getCollectionOfPrimitiveValues()); },
            'supportedDuplexConfigurations' => function (ParseNode $n) use ($o) { $o->setSupportedDuplexConfigurations($n->getCollectionOfPrimitiveValues()); },
            'supportedFinishings' => function (ParseNode $n) use ($o) { $o->setSupportedFinishings($n->getCollectionOfPrimitiveValues()); },
            'supportedMediaColors' => function (ParseNode $n) use ($o) { $o->setSupportedMediaColors($n->getCollectionOfPrimitiveValues()); },
            'supportedMediaSizes' => function (ParseNode $n) use ($o) { $o->setSupportedMediaSizes($n->getCollectionOfPrimitiveValues()); },
            'supportedMediaTypes' => function (ParseNode $n) use ($o) { $o->setSupportedMediaTypes($n->getCollectionOfPrimitiveValues()); },
            'supportedOrientations' => function (ParseNode $n) use ($o) { $o->setSupportedOrientations($n->getCollectionOfPrimitiveValues()); },
            'supportedOutputBins' => function (ParseNode $n) use ($o) { $o->setSupportedOutputBins($n->getCollectionOfPrimitiveValues()); },
            'supportedPagesPerSheet' => function (ParseNode $n) use ($o) { $o->setSupportedPagesPerSheet($n->getObjectValue(array(IntegerRange::class, 'createFromDiscriminatorValue'))); },
            'supportedPresentationDirections' => function (ParseNode $n) use ($o) { $o->setSupportedPresentationDirections($n->getCollectionOfPrimitiveValues()); },
            'supportedPrintQualities' => function (ParseNode $n) use ($o) { $o->setSupportedPrintQualities($n->getCollectionOfPrimitiveValues()); },
            'supportsFitPdfToPage' => function (ParseNode $n) use ($o) { $o->setSupportsFitPdfToPage($n->getBooleanValue()); },
            'topMargins' => function (ParseNode $n) use ($o) { $o->setTopMargins($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the finishings property value. Finishing processes the printer supports for a printed document.
     * @return array<string>|null
    */
    public function getFinishings(): ?array {
        return $this->finishings;
    }

    /**
     * Gets the inputBins property value. Supported input bins for the printer.
     * @return array<string>|null
    */
    public function getInputBins(): ?array {
        return $this->inputBins;
    }

    /**
     * Gets the isColorPrintingSupported property value. True if color printing is supported by the printer; false otherwise. Read-only.
     * @return bool|null
    */
    public function getIsColorPrintingSupported(): ?bool {
        return $this->isColorPrintingSupported;
    }

    /**
     * Gets the isPageRangeSupported property value. True if the printer supports printing by page ranges; false otherwise.
     * @return bool|null
    */
    public function getIsPageRangeSupported(): ?bool {
        return $this->isPageRangeSupported;
    }

    /**
     * Gets the leftMargins property value. A list of supported left margins(in microns) for the printer.
     * @return array<int>|null
    */
    public function getLeftMargins(): ?array {
        return $this->leftMargins;
    }

    /**
     * Gets the mediaColors property value. The media (i.e., paper) colors supported by the printer.
     * @return array<string>|null
    */
    public function getMediaColors(): ?array {
        return $this->mediaColors;
    }

    /**
     * Gets the mediaSizes property value. The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes. Valid values are in the following table.
     * @return array<string>|null
    */
    public function getMediaSizes(): ?array {
        return $this->mediaSizes;
    }

    /**
     * Gets the mediaTypes property value. The media types supported by the printer.
     * @return array<string>|null
    */
    public function getMediaTypes(): ?array {
        return $this->mediaTypes;
    }

    /**
     * Gets the multipageLayouts property value. The presentation directions supported by the printer. Supported values are described in the following table.
     * @return array<string>|null
    */
    public function getMultipageLayouts(): ?array {
        return $this->multipageLayouts;
    }

    /**
     * Gets the orientations property value. The print orientations supported by the printer. Valid values are described in the following table.
     * @return array<string>|null
    */
    public function getOrientations(): ?array {
        return $this->orientations;
    }

    /**
     * Gets the outputBins property value. The printer's supported output bins (trays).
     * @return array<string>|null
    */
    public function getOutputBins(): ?array {
        return $this->outputBins;
    }

    /**
     * Gets the pagesPerSheet property value. Supported number of Input Pages to impose upon a single Impression.
     * @return array<int>|null
    */
    public function getPagesPerSheet(): ?array {
        return $this->pagesPerSheet;
    }

    /**
     * Gets the qualities property value. The print qualities supported by the printer.
     * @return array<string>|null
    */
    public function getQualities(): ?array {
        return $this->qualities;
    }

    /**
     * Gets the rightMargins property value. A list of supported right margins(in microns) for the printer.
     * @return array<int>|null
    */
    public function getRightMargins(): ?array {
        return $this->rightMargins;
    }

    /**
     * Gets the scalings property value. Supported print scalings.
     * @return array<string>|null
    */
    public function getScalings(): ?array {
        return $this->scalings;
    }

    /**
     * Gets the supportedColorConfigurations property value. The supportedColorConfigurations property
     * @return array<string>|null
    */
    public function getSupportedColorConfigurations(): ?array {
        return $this->supportedColorConfigurations;
    }

    /**
     * Gets the supportedCopiesPerJob property value. The supportedCopiesPerJob property
     * @return IntegerRange|null
    */
    public function getSupportedCopiesPerJob(): ?IntegerRange {
        return $this->supportedCopiesPerJob;
    }

    /**
     * Gets the supportedDocumentMimeTypes property value. The supportedDocumentMimeTypes property
     * @return array<string>|null
    */
    public function getSupportedDocumentMimeTypes(): ?array {
        return $this->supportedDocumentMimeTypes;
    }

    /**
     * Gets the supportedDuplexConfigurations property value. The supportedDuplexConfigurations property
     * @return array<string>|null
    */
    public function getSupportedDuplexConfigurations(): ?array {
        return $this->supportedDuplexConfigurations;
    }

    /**
     * Gets the supportedFinishings property value. The supportedFinishings property
     * @return array<string>|null
    */
    public function getSupportedFinishings(): ?array {
        return $this->supportedFinishings;
    }

    /**
     * Gets the supportedMediaColors property value. The supportedMediaColors property
     * @return array<string>|null
    */
    public function getSupportedMediaColors(): ?array {
        return $this->supportedMediaColors;
    }

    /**
     * Gets the supportedMediaSizes property value. The supportedMediaSizes property
     * @return array<string>|null
    */
    public function getSupportedMediaSizes(): ?array {
        return $this->supportedMediaSizes;
    }

    /**
     * Gets the supportedMediaTypes property value. The supportedMediaTypes property
     * @return array<string>|null
    */
    public function getSupportedMediaTypes(): ?array {
        return $this->supportedMediaTypes;
    }

    /**
     * Gets the supportedOrientations property value. The supportedOrientations property
     * @return array<string>|null
    */
    public function getSupportedOrientations(): ?array {
        return $this->supportedOrientations;
    }

    /**
     * Gets the supportedOutputBins property value. The supportedOutputBins property
     * @return array<string>|null
    */
    public function getSupportedOutputBins(): ?array {
        return $this->supportedOutputBins;
    }

    /**
     * Gets the supportedPagesPerSheet property value. The supportedPagesPerSheet property
     * @return IntegerRange|null
    */
    public function getSupportedPagesPerSheet(): ?IntegerRange {
        return $this->supportedPagesPerSheet;
    }

    /**
     * Gets the supportedPresentationDirections property value. The supportedPresentationDirections property
     * @return array<string>|null
    */
    public function getSupportedPresentationDirections(): ?array {
        return $this->supportedPresentationDirections;
    }

    /**
     * Gets the supportedPrintQualities property value. The supportedPrintQualities property
     * @return array<string>|null
    */
    public function getSupportedPrintQualities(): ?array {
        return $this->supportedPrintQualities;
    }

    /**
     * Gets the supportsFitPdfToPage property value. True if the printer supports scaling PDF pages to match the print media size; false otherwise.
     * @return bool|null
    */
    public function getSupportsFitPdfToPage(): ?bool {
        return $this->supportsFitPdfToPage;
    }

    /**
     * Gets the topMargins property value. A list of supported top margins(in microns) for the printer.
     * @return array<int>|null
    */
    public function getTopMargins(): ?array {
        return $this->topMargins;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('bottomMargins', $this->bottomMargins);
        $writer->writeBooleanValue('collation', $this->collation);
        $writer->writeCollectionOfPrimitiveValues('colorModes', $this->colorModes);
        $writer->writeCollectionOfPrimitiveValues('contentTypes', $this->contentTypes);
        $writer->writeObjectValue('copiesPerJob', $this->copiesPerJob);
        $writer->writeCollectionOfPrimitiveValues('dpis', $this->dpis);
        $writer->writeCollectionOfPrimitiveValues('duplexModes', $this->duplexModes);
        $writer->writeCollectionOfPrimitiveValues('feedDirections', $this->feedDirections);
        $writer->writeCollectionOfPrimitiveValues('feedOrientations', $this->feedOrientations);
        $writer->writeCollectionOfPrimitiveValues('finishings', $this->finishings);
        $writer->writeCollectionOfPrimitiveValues('inputBins', $this->inputBins);
        $writer->writeBooleanValue('isColorPrintingSupported', $this->isColorPrintingSupported);
        $writer->writeBooleanValue('isPageRangeSupported', $this->isPageRangeSupported);
        $writer->writeCollectionOfPrimitiveValues('leftMargins', $this->leftMargins);
        $writer->writeCollectionOfPrimitiveValues('mediaColors', $this->mediaColors);
        $writer->writeCollectionOfPrimitiveValues('mediaSizes', $this->mediaSizes);
        $writer->writeCollectionOfPrimitiveValues('mediaTypes', $this->mediaTypes);
        $writer->writeCollectionOfPrimitiveValues('multipageLayouts', $this->multipageLayouts);
        $writer->writeCollectionOfPrimitiveValues('orientations', $this->orientations);
        $writer->writeCollectionOfPrimitiveValues('outputBins', $this->outputBins);
        $writer->writeCollectionOfPrimitiveValues('pagesPerSheet', $this->pagesPerSheet);
        $writer->writeCollectionOfPrimitiveValues('qualities', $this->qualities);
        $writer->writeCollectionOfPrimitiveValues('rightMargins', $this->rightMargins);
        $writer->writeCollectionOfPrimitiveValues('scalings', $this->scalings);
        $writer->writeCollectionOfPrimitiveValues('supportedColorConfigurations', $this->supportedColorConfigurations);
        $writer->writeObjectValue('supportedCopiesPerJob', $this->supportedCopiesPerJob);
        $writer->writeCollectionOfPrimitiveValues('supportedDocumentMimeTypes', $this->supportedDocumentMimeTypes);
        $writer->writeCollectionOfPrimitiveValues('supportedDuplexConfigurations', $this->supportedDuplexConfigurations);
        $writer->writeCollectionOfPrimitiveValues('supportedFinishings', $this->supportedFinishings);
        $writer->writeCollectionOfPrimitiveValues('supportedMediaColors', $this->supportedMediaColors);
        $writer->writeCollectionOfPrimitiveValues('supportedMediaSizes', $this->supportedMediaSizes);
        $writer->writeCollectionOfPrimitiveValues('supportedMediaTypes', $this->supportedMediaTypes);
        $writer->writeCollectionOfPrimitiveValues('supportedOrientations', $this->supportedOrientations);
        $writer->writeCollectionOfPrimitiveValues('supportedOutputBins', $this->supportedOutputBins);
        $writer->writeObjectValue('supportedPagesPerSheet', $this->supportedPagesPerSheet);
        $writer->writeCollectionOfPrimitiveValues('supportedPresentationDirections', $this->supportedPresentationDirections);
        $writer->writeCollectionOfPrimitiveValues('supportedPrintQualities', $this->supportedPrintQualities);
        $writer->writeBooleanValue('supportsFitPdfToPage', $this->supportsFitPdfToPage);
        $writer->writeCollectionOfPrimitiveValues('topMargins', $this->topMargins);
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
     * Sets the bottomMargins property value. A list of supported bottom margins(in microns) for the printer.
     *  @param array<int>|null $value Value to set for the bottomMargins property.
    */
    public function setBottomMargins(?array $value ): void {
        $this->bottomMargins = $value;
    }

    /**
     * Sets the collation property value. True if the printer supports collating when printing muliple copies of a multi-page document; false otherwise.
     *  @param bool|null $value Value to set for the collation property.
    */
    public function setCollation(?bool $value ): void {
        $this->collation = $value;
    }

    /**
     * Sets the colorModes property value. The color modes supported by the printer. Valid values are described in the following table.
     *  @param array<string>|null $value Value to set for the colorModes property.
    */
    public function setColorModes(?array $value ): void {
        $this->colorModes = $value;
    }

    /**
     * Sets the contentTypes property value. A list of supported content (MIME) types that the printer supports. It is not guaranteed that the Universal Print service supports printing all of these MIME types.
     *  @param array<string>|null $value Value to set for the contentTypes property.
    */
    public function setContentTypes(?array $value ): void {
        $this->contentTypes = $value;
    }

    /**
     * Sets the copiesPerJob property value. The range of copies per job supported by the printer.
     *  @param IntegerRange|null $value Value to set for the copiesPerJob property.
    */
    public function setCopiesPerJob(?IntegerRange $value ): void {
        $this->copiesPerJob = $value;
    }

    /**
     * Sets the dpis property value. The list of print resolutions in DPI that are supported by the printer.
     *  @param array<int>|null $value Value to set for the dpis property.
    */
    public function setDpis(?array $value ): void {
        $this->dpis = $value;
    }

    /**
     * Sets the duplexModes property value. The list of duplex modes that are supported by the printer. Valid values are described in the following table.
     *  @param array<string>|null $value Value to set for the duplexModes property.
    */
    public function setDuplexModes(?array $value ): void {
        $this->duplexModes = $value;
    }

    /**
     * Sets the feedDirections property value. The feedDirections property
     *  @param array<string>|null $value Value to set for the feedDirections property.
    */
    public function setFeedDirections(?array $value ): void {
        $this->feedDirections = $value;
    }

    /**
     * Sets the feedOrientations property value. The list of feed orientations that are supported by the printer.
     *  @param array<string>|null $value Value to set for the feedOrientations property.
    */
    public function setFeedOrientations(?array $value ): void {
        $this->feedOrientations = $value;
    }

    /**
     * Sets the finishings property value. Finishing processes the printer supports for a printed document.
     *  @param array<string>|null $value Value to set for the finishings property.
    */
    public function setFinishings(?array $value ): void {
        $this->finishings = $value;
    }

    /**
     * Sets the inputBins property value. Supported input bins for the printer.
     *  @param array<string>|null $value Value to set for the inputBins property.
    */
    public function setInputBins(?array $value ): void {
        $this->inputBins = $value;
    }

    /**
     * Sets the isColorPrintingSupported property value. True if color printing is supported by the printer; false otherwise. Read-only.
     *  @param bool|null $value Value to set for the isColorPrintingSupported property.
    */
    public function setIsColorPrintingSupported(?bool $value ): void {
        $this->isColorPrintingSupported = $value;
    }

    /**
     * Sets the isPageRangeSupported property value. True if the printer supports printing by page ranges; false otherwise.
     *  @param bool|null $value Value to set for the isPageRangeSupported property.
    */
    public function setIsPageRangeSupported(?bool $value ): void {
        $this->isPageRangeSupported = $value;
    }

    /**
     * Sets the leftMargins property value. A list of supported left margins(in microns) for the printer.
     *  @param array<int>|null $value Value to set for the leftMargins property.
    */
    public function setLeftMargins(?array $value ): void {
        $this->leftMargins = $value;
    }

    /**
     * Sets the mediaColors property value. The media (i.e., paper) colors supported by the printer.
     *  @param array<string>|null $value Value to set for the mediaColors property.
    */
    public function setMediaColors(?array $value ): void {
        $this->mediaColors = $value;
    }

    /**
     * Sets the mediaSizes property value. The media sizes supported by the printer. Supports standard size names for ISO and ANSI media sizes. Valid values are in the following table.
     *  @param array<string>|null $value Value to set for the mediaSizes property.
    */
    public function setMediaSizes(?array $value ): void {
        $this->mediaSizes = $value;
    }

    /**
     * Sets the mediaTypes property value. The media types supported by the printer.
     *  @param array<string>|null $value Value to set for the mediaTypes property.
    */
    public function setMediaTypes(?array $value ): void {
        $this->mediaTypes = $value;
    }

    /**
     * Sets the multipageLayouts property value. The presentation directions supported by the printer. Supported values are described in the following table.
     *  @param array<string>|null $value Value to set for the multipageLayouts property.
    */
    public function setMultipageLayouts(?array $value ): void {
        $this->multipageLayouts = $value;
    }

    /**
     * Sets the orientations property value. The print orientations supported by the printer. Valid values are described in the following table.
     *  @param array<string>|null $value Value to set for the orientations property.
    */
    public function setOrientations(?array $value ): void {
        $this->orientations = $value;
    }

    /**
     * Sets the outputBins property value. The printer's supported output bins (trays).
     *  @param array<string>|null $value Value to set for the outputBins property.
    */
    public function setOutputBins(?array $value ): void {
        $this->outputBins = $value;
    }

    /**
     * Sets the pagesPerSheet property value. Supported number of Input Pages to impose upon a single Impression.
     *  @param array<int>|null $value Value to set for the pagesPerSheet property.
    */
    public function setPagesPerSheet(?array $value ): void {
        $this->pagesPerSheet = $value;
    }

    /**
     * Sets the qualities property value. The print qualities supported by the printer.
     *  @param array<string>|null $value Value to set for the qualities property.
    */
    public function setQualities(?array $value ): void {
        $this->qualities = $value;
    }

    /**
     * Sets the rightMargins property value. A list of supported right margins(in microns) for the printer.
     *  @param array<int>|null $value Value to set for the rightMargins property.
    */
    public function setRightMargins(?array $value ): void {
        $this->rightMargins = $value;
    }

    /**
     * Sets the scalings property value. Supported print scalings.
     *  @param array<string>|null $value Value to set for the scalings property.
    */
    public function setScalings(?array $value ): void {
        $this->scalings = $value;
    }

    /**
     * Sets the supportedColorConfigurations property value. The supportedColorConfigurations property
     *  @param array<string>|null $value Value to set for the supportedColorConfigurations property.
    */
    public function setSupportedColorConfigurations(?array $value ): void {
        $this->supportedColorConfigurations = $value;
    }

    /**
     * Sets the supportedCopiesPerJob property value. The supportedCopiesPerJob property
     *  @param IntegerRange|null $value Value to set for the supportedCopiesPerJob property.
    */
    public function setSupportedCopiesPerJob(?IntegerRange $value ): void {
        $this->supportedCopiesPerJob = $value;
    }

    /**
     * Sets the supportedDocumentMimeTypes property value. The supportedDocumentMimeTypes property
     *  @param array<string>|null $value Value to set for the supportedDocumentMimeTypes property.
    */
    public function setSupportedDocumentMimeTypes(?array $value ): void {
        $this->supportedDocumentMimeTypes = $value;
    }

    /**
     * Sets the supportedDuplexConfigurations property value. The supportedDuplexConfigurations property
     *  @param array<string>|null $value Value to set for the supportedDuplexConfigurations property.
    */
    public function setSupportedDuplexConfigurations(?array $value ): void {
        $this->supportedDuplexConfigurations = $value;
    }

    /**
     * Sets the supportedFinishings property value. The supportedFinishings property
     *  @param array<string>|null $value Value to set for the supportedFinishings property.
    */
    public function setSupportedFinishings(?array $value ): void {
        $this->supportedFinishings = $value;
    }

    /**
     * Sets the supportedMediaColors property value. The supportedMediaColors property
     *  @param array<string>|null $value Value to set for the supportedMediaColors property.
    */
    public function setSupportedMediaColors(?array $value ): void {
        $this->supportedMediaColors = $value;
    }

    /**
     * Sets the supportedMediaSizes property value. The supportedMediaSizes property
     *  @param array<string>|null $value Value to set for the supportedMediaSizes property.
    */
    public function setSupportedMediaSizes(?array $value ): void {
        $this->supportedMediaSizes = $value;
    }

    /**
     * Sets the supportedMediaTypes property value. The supportedMediaTypes property
     *  @param array<string>|null $value Value to set for the supportedMediaTypes property.
    */
    public function setSupportedMediaTypes(?array $value ): void {
        $this->supportedMediaTypes = $value;
    }

    /**
     * Sets the supportedOrientations property value. The supportedOrientations property
     *  @param array<string>|null $value Value to set for the supportedOrientations property.
    */
    public function setSupportedOrientations(?array $value ): void {
        $this->supportedOrientations = $value;
    }

    /**
     * Sets the supportedOutputBins property value. The supportedOutputBins property
     *  @param array<string>|null $value Value to set for the supportedOutputBins property.
    */
    public function setSupportedOutputBins(?array $value ): void {
        $this->supportedOutputBins = $value;
    }

    /**
     * Sets the supportedPagesPerSheet property value. The supportedPagesPerSheet property
     *  @param IntegerRange|null $value Value to set for the supportedPagesPerSheet property.
    */
    public function setSupportedPagesPerSheet(?IntegerRange $value ): void {
        $this->supportedPagesPerSheet = $value;
    }

    /**
     * Sets the supportedPresentationDirections property value. The supportedPresentationDirections property
     *  @param array<string>|null $value Value to set for the supportedPresentationDirections property.
    */
    public function setSupportedPresentationDirections(?array $value ): void {
        $this->supportedPresentationDirections = $value;
    }

    /**
     * Sets the supportedPrintQualities property value. The supportedPrintQualities property
     *  @param array<string>|null $value Value to set for the supportedPrintQualities property.
    */
    public function setSupportedPrintQualities(?array $value ): void {
        $this->supportedPrintQualities = $value;
    }

    /**
     * Sets the supportsFitPdfToPage property value. True if the printer supports scaling PDF pages to match the print media size; false otherwise.
     *  @param bool|null $value Value to set for the supportsFitPdfToPage property.
    */
    public function setSupportsFitPdfToPage(?bool $value ): void {
        $this->supportsFitPdfToPage = $value;
    }

    /**
     * Sets the topMargins property value. A list of supported top margins(in microns) for the printer.
     *  @param array<int>|null $value Value to set for the topMargins property.
    */
    public function setTopMargins(?array $value ): void {
        $this->topMargins = $value;
    }

}
