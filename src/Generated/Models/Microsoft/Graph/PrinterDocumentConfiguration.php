<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterDocumentConfiguration implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $collate  */
    private ?bool $collate = null;
    
    /** @var PrintColorMode|null $colorMode  */
    private ?PrintColorMode $colorMode = null;
    
    /** @var int|null $copies  */
    private ?int $copies = null;
    
    /** @var int|null $dpi  */
    private ?int $dpi = null;
    
    /** @var PrintDuplexMode|null $duplexMode  */
    private ?PrintDuplexMode $duplexMode = null;
    
    /** @var PrinterFeedDirection|null $feedDirection  */
    private ?PrinterFeedDirection $feedDirection = null;
    
    /** @var PrinterFeedOrientation|null $feedOrientation  */
    private ?PrinterFeedOrientation $feedOrientation = null;
    
    /** @var array<PrintFinishing>|null $finishings  */
    private ?array $finishings = null;
    
    /** @var bool|null $fitPdfToPage  */
    private ?bool $fitPdfToPage = null;
    
    /** @var string|null $inputBin  */
    private ?string $inputBin = null;
    
    /** @var PrintMargin|null $margin  */
    private ?PrintMargin $margin = null;
    
    /** @var string|null $mediaSize  */
    private ?string $mediaSize = null;
    
    /** @var string|null $mediaType  */
    private ?string $mediaType = null;
    
    /** @var PrintMultipageLayout|null $multipageLayout  */
    private ?PrintMultipageLayout $multipageLayout = null;
    
    /** @var PrintOrientation|null $orientation  */
    private ?PrintOrientation $orientation = null;
    
    /** @var string|null $outputBin  */
    private ?string $outputBin = null;
    
    /** @var array<IntegerRange>|null $pageRanges  */
    private ?array $pageRanges = null;
    
    /** @var int|null $pagesPerSheet  */
    private ?int $pagesPerSheet = null;
    
    /** @var PrintQuality|null $quality  */
    private ?PrintQuality $quality = null;
    
    /** @var PrintScaling|null $scaling  */
    private ?PrintScaling $scaling = null;
    
    /**
     * Instantiates a new printerDocumentConfiguration and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrinterDocumentConfiguration
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): PrinterDocumentConfiguration {
        return new PrinterDocumentConfiguration();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the collate property value. 
     * @return bool|null
    */
    public function getCollate(): ?bool {
        return $this->collate;
    }

    /**
     * Gets the colorMode property value. 
     * @return PrintColorMode|null
    */
    public function getColorMode(): ?PrintColorMode {
        return $this->colorMode;
    }

    /**
     * Gets the copies property value. 
     * @return int|null
    */
    public function getCopies(): ?int {
        return $this->copies;
    }

    /**
     * Gets the dpi property value. 
     * @return int|null
    */
    public function getDpi(): ?int {
        return $this->dpi;
    }

    /**
     * Gets the duplexMode property value. 
     * @return PrintDuplexMode|null
    */
    public function getDuplexMode(): ?PrintDuplexMode {
        return $this->duplexMode;
    }

    /**
     * Gets the feedDirection property value. 
     * @return PrinterFeedDirection|null
    */
    public function getFeedDirection(): ?PrinterFeedDirection {
        return $this->feedDirection;
    }

    /**
     * Gets the feedOrientation property value. 
     * @return PrinterFeedOrientation|null
    */
    public function getFeedOrientation(): ?PrinterFeedOrientation {
        return $this->feedOrientation;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'collate' => function (self $o, ParseNode $n) { $o->setCollate($n->getBooleanValue()); },
            'colorMode' => function (self $o, ParseNode $n) { $o->setColorMode($n->getEnumValue(PrintColorMode::class)); },
            'copies' => function (self $o, ParseNode $n) { $o->setCopies($n->getIntegerValue()); },
            'dpi' => function (self $o, ParseNode $n) { $o->setDpi($n->getIntegerValue()); },
            'duplexMode' => function (self $o, ParseNode $n) { $o->setDuplexMode($n->getEnumValue(PrintDuplexMode::class)); },
            'feedDirection' => function (self $o, ParseNode $n) { $o->setFeedDirection($n->getEnumValue(PrinterFeedDirection::class)); },
            'feedOrientation' => function (self $o, ParseNode $n) { $o->setFeedOrientation($n->getEnumValue(PrinterFeedOrientation::class)); },
            'finishings' => function (self $o, ParseNode $n) { $o->setFinishings($n->getCollectionOfEnumValues(PrintFinishing::class)); },
            'fitPdfToPage' => function (self $o, ParseNode $n) { $o->setFitPdfToPage($n->getBooleanValue()); },
            'inputBin' => function (self $o, ParseNode $n) { $o->setInputBin($n->getStringValue()); },
            'margin' => function (self $o, ParseNode $n) { $o->setMargin($n->getObjectValue(PrintMargin::class)); },
            'mediaSize' => function (self $o, ParseNode $n) { $o->setMediaSize($n->getStringValue()); },
            'mediaType' => function (self $o, ParseNode $n) { $o->setMediaType($n->getStringValue()); },
            'multipageLayout' => function (self $o, ParseNode $n) { $o->setMultipageLayout($n->getEnumValue(PrintMultipageLayout::class)); },
            'orientation' => function (self $o, ParseNode $n) { $o->setOrientation($n->getEnumValue(PrintOrientation::class)); },
            'outputBin' => function (self $o, ParseNode $n) { $o->setOutputBin($n->getStringValue()); },
            'pageRanges' => function (self $o, ParseNode $n) { $o->setPageRanges($n->getCollectionOfObjectValues(IntegerRange::class)); },
            'pagesPerSheet' => function (self $o, ParseNode $n) { $o->setPagesPerSheet($n->getIntegerValue()); },
            'quality' => function (self $o, ParseNode $n) { $o->setQuality($n->getEnumValue(PrintQuality::class)); },
            'scaling' => function (self $o, ParseNode $n) { $o->setScaling($n->getEnumValue(PrintScaling::class)); },
        ];
    }

    /**
     * Gets the finishings property value. 
     * @return array<PrintFinishing>|null
    */
    public function getFinishings(): ?array {
        return $this->finishings;
    }

    /**
     * Gets the fitPdfToPage property value. 
     * @return bool|null
    */
    public function getFitPdfToPage(): ?bool {
        return $this->fitPdfToPage;
    }

    /**
     * Gets the inputBin property value. 
     * @return string|null
    */
    public function getInputBin(): ?string {
        return $this->inputBin;
    }

    /**
     * Gets the margin property value. 
     * @return PrintMargin|null
    */
    public function getMargin(): ?PrintMargin {
        return $this->margin;
    }

    /**
     * Gets the mediaSize property value. 
     * @return string|null
    */
    public function getMediaSize(): ?string {
        return $this->mediaSize;
    }

    /**
     * Gets the mediaType property value. 
     * @return string|null
    */
    public function getMediaType(): ?string {
        return $this->mediaType;
    }

    /**
     * Gets the multipageLayout property value. 
     * @return PrintMultipageLayout|null
    */
    public function getMultipageLayout(): ?PrintMultipageLayout {
        return $this->multipageLayout;
    }

    /**
     * Gets the orientation property value. 
     * @return PrintOrientation|null
    */
    public function getOrientation(): ?PrintOrientation {
        return $this->orientation;
    }

    /**
     * Gets the outputBin property value. 
     * @return string|null
    */
    public function getOutputBin(): ?string {
        return $this->outputBin;
    }

    /**
     * Gets the pageRanges property value. 
     * @return array<IntegerRange>|null
    */
    public function getPageRanges(): ?array {
        return $this->pageRanges;
    }

    /**
     * Gets the pagesPerSheet property value. 
     * @return int|null
    */
    public function getPagesPerSheet(): ?int {
        return $this->pagesPerSheet;
    }

    /**
     * Gets the quality property value. 
     * @return PrintQuality|null
    */
    public function getQuality(): ?PrintQuality {
        return $this->quality;
    }

    /**
     * Gets the scaling property value. 
     * @return PrintScaling|null
    */
    public function getScaling(): ?PrintScaling {
        return $this->scaling;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('collate', $this->collate);
        $writer->writeEnumValue('colorMode', $this->colorMode);
        $writer->writeIntegerValue('copies', $this->copies);
        $writer->writeIntegerValue('dpi', $this->dpi);
        $writer->writeEnumValue('duplexMode', $this->duplexMode);
        $writer->writeEnumValue('feedDirection', $this->feedDirection);
        $writer->writeEnumValue('feedOrientation', $this->feedOrientation);
        $writer->writeCollectionOfEnumValues('finishings', $this->finishings);
        $writer->writeBooleanValue('fitPdfToPage', $this->fitPdfToPage);
        $writer->writeStringValue('inputBin', $this->inputBin);
        $writer->writeObjectValue('margin', $this->margin);
        $writer->writeStringValue('mediaSize', $this->mediaSize);
        $writer->writeStringValue('mediaType', $this->mediaType);
        $writer->writeEnumValue('multipageLayout', $this->multipageLayout);
        $writer->writeEnumValue('orientation', $this->orientation);
        $writer->writeStringValue('outputBin', $this->outputBin);
        $writer->writeCollectionOfObjectValues('pageRanges', $this->pageRanges);
        $writer->writeIntegerValue('pagesPerSheet', $this->pagesPerSheet);
        $writer->writeEnumValue('quality', $this->quality);
        $writer->writeEnumValue('scaling', $this->scaling);
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
     * Sets the collate property value. 
     *  @param bool|null $value Value to set for the collate property.
    */
    public function setCollate(?bool $value ): void {
        $this->collate = $value;
    }

    /**
     * Sets the colorMode property value. 
     *  @param PrintColorMode|null $value Value to set for the colorMode property.
    */
    public function setColorMode(?PrintColorMode $value ): void {
        $this->colorMode = $value;
    }

    /**
     * Sets the copies property value. 
     *  @param int|null $value Value to set for the copies property.
    */
    public function setCopies(?int $value ): void {
        $this->copies = $value;
    }

    /**
     * Sets the dpi property value. 
     *  @param int|null $value Value to set for the dpi property.
    */
    public function setDpi(?int $value ): void {
        $this->dpi = $value;
    }

    /**
     * Sets the duplexMode property value. 
     *  @param PrintDuplexMode|null $value Value to set for the duplexMode property.
    */
    public function setDuplexMode(?PrintDuplexMode $value ): void {
        $this->duplexMode = $value;
    }

    /**
     * Sets the feedDirection property value. 
     *  @param PrinterFeedDirection|null $value Value to set for the feedDirection property.
    */
    public function setFeedDirection(?PrinterFeedDirection $value ): void {
        $this->feedDirection = $value;
    }

    /**
     * Sets the feedOrientation property value. 
     *  @param PrinterFeedOrientation|null $value Value to set for the feedOrientation property.
    */
    public function setFeedOrientation(?PrinterFeedOrientation $value ): void {
        $this->feedOrientation = $value;
    }

    /**
     * Sets the finishings property value. 
     *  @param array<PrintFinishing>|null $value Value to set for the finishings property.
    */
    public function setFinishings(?array $value ): void {
        $this->finishings = $value;
    }

    /**
     * Sets the fitPdfToPage property value. 
     *  @param bool|null $value Value to set for the fitPdfToPage property.
    */
    public function setFitPdfToPage(?bool $value ): void {
        $this->fitPdfToPage = $value;
    }

    /**
     * Sets the inputBin property value. 
     *  @param string|null $value Value to set for the inputBin property.
    */
    public function setInputBin(?string $value ): void {
        $this->inputBin = $value;
    }

    /**
     * Sets the margin property value. 
     *  @param PrintMargin|null $value Value to set for the margin property.
    */
    public function setMargin(?PrintMargin $value ): void {
        $this->margin = $value;
    }

    /**
     * Sets the mediaSize property value. 
     *  @param string|null $value Value to set for the mediaSize property.
    */
    public function setMediaSize(?string $value ): void {
        $this->mediaSize = $value;
    }

    /**
     * Sets the mediaType property value. 
     *  @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value ): void {
        $this->mediaType = $value;
    }

    /**
     * Sets the multipageLayout property value. 
     *  @param PrintMultipageLayout|null $value Value to set for the multipageLayout property.
    */
    public function setMultipageLayout(?PrintMultipageLayout $value ): void {
        $this->multipageLayout = $value;
    }

    /**
     * Sets the orientation property value. 
     *  @param PrintOrientation|null $value Value to set for the orientation property.
    */
    public function setOrientation(?PrintOrientation $value ): void {
        $this->orientation = $value;
    }

    /**
     * Sets the outputBin property value. 
     *  @param string|null $value Value to set for the outputBin property.
    */
    public function setOutputBin(?string $value ): void {
        $this->outputBin = $value;
    }

    /**
     * Sets the pageRanges property value. 
     *  @param array<IntegerRange>|null $value Value to set for the pageRanges property.
    */
    public function setPageRanges(?array $value ): void {
        $this->pageRanges = $value;
    }

    /**
     * Sets the pagesPerSheet property value. 
     *  @param int|null $value Value to set for the pagesPerSheet property.
    */
    public function setPagesPerSheet(?int $value ): void {
        $this->pagesPerSheet = $value;
    }

    /**
     * Sets the quality property value. 
     *  @param PrintQuality|null $value Value to set for the quality property.
    */
    public function setQuality(?PrintQuality $value ): void {
        $this->quality = $value;
    }

    /**
     * Sets the scaling property value. 
     *  @param PrintScaling|null $value Value to set for the scaling property.
    */
    public function setScaling(?PrintScaling $value ): void {
        $this->scaling = $value;
    }

}
