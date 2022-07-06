<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PrinterDocumentConfiguration implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $collate The collate property
    */
    private ?bool $collate = null;
    
    /**
     * @var PrintColorMode|null $colorMode The colorMode property
    */
    private ?PrintColorMode $colorMode = null;
    
    /**
     * @var int|null $copies The copies property
    */
    private ?int $copies = null;
    
    /**
     * @var int|null $dpi The dpi property
    */
    private ?int $dpi = null;
    
    /**
     * @var PrintDuplexMode|null $duplexMode The duplexMode property
    */
    private ?PrintDuplexMode $duplexMode = null;
    
    /**
     * @var PrinterFeedDirection|null $feedDirection The feedDirection property
    */
    private ?PrinterFeedDirection $feedDirection = null;
    
    /**
     * @var PrinterFeedOrientation|null $feedOrientation The feedOrientation property
    */
    private ?PrinterFeedOrientation $feedOrientation = null;
    
    /**
     * @var array<string>|null $finishings The finishings property
    */
    private ?array $finishings = null;
    
    /**
     * @var bool|null $fitPdfToPage The fitPdfToPage property
    */
    private ?bool $fitPdfToPage = null;
    
    /**
     * @var string|null $inputBin The inputBin property
    */
    private ?string $inputBin = null;
    
    /**
     * @var PrintMargin|null $margin The margin property
    */
    private ?PrintMargin $margin = null;
    
    /**
     * @var string|null $mediaSize The mediaSize property
    */
    private ?string $mediaSize = null;
    
    /**
     * @var string|null $mediaType The mediaType property
    */
    private ?string $mediaType = null;
    
    /**
     * @var PrintMultipageLayout|null $multipageLayout The multipageLayout property
    */
    private ?PrintMultipageLayout $multipageLayout = null;
    
    /**
     * @var PrintOrientation|null $orientation The orientation property
    */
    private ?PrintOrientation $orientation = null;
    
    /**
     * @var string|null $outputBin The outputBin property
    */
    private ?string $outputBin = null;
    
    /**
     * @var array<IntegerRange>|null $pageRanges The pageRanges property
    */
    private ?array $pageRanges = null;
    
    /**
     * @var int|null $pagesPerSheet The pagesPerSheet property
    */
    private ?int $pagesPerSheet = null;
    
    /**
     * @var PrintQuality|null $quality The quality property
    */
    private ?PrintQuality $quality = null;
    
    /**
     * @var PrintScaling|null $scaling The scaling property
    */
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrinterDocumentConfiguration {
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
     * Gets the collate property value. The collate property
     * @return bool|null
    */
    public function getCollate(): ?bool {
        return $this->collate;
    }

    /**
     * Gets the colorMode property value. The colorMode property
     * @return PrintColorMode|null
    */
    public function getColorMode(): ?PrintColorMode {
        return $this->colorMode;
    }

    /**
     * Gets the copies property value. The copies property
     * @return int|null
    */
    public function getCopies(): ?int {
        return $this->copies;
    }

    /**
     * Gets the dpi property value. The dpi property
     * @return int|null
    */
    public function getDpi(): ?int {
        return $this->dpi;
    }

    /**
     * Gets the duplexMode property value. The duplexMode property
     * @return PrintDuplexMode|null
    */
    public function getDuplexMode(): ?PrintDuplexMode {
        return $this->duplexMode;
    }

    /**
     * Gets the feedDirection property value. The feedDirection property
     * @return PrinterFeedDirection|null
    */
    public function getFeedDirection(): ?PrinterFeedDirection {
        return $this->feedDirection;
    }

    /**
     * Gets the feedOrientation property value. The feedOrientation property
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
        $o = $this;
        return  [
            'collate' => function (ParseNode $n) use ($o) { $o->setCollate($n->getBooleanValue()); },
            'colorMode' => function (ParseNode $n) use ($o) { $o->setColorMode($n->getEnumValue(PrintColorMode::class)); },
            'copies' => function (ParseNode $n) use ($o) { $o->setCopies($n->getIntegerValue()); },
            'dpi' => function (ParseNode $n) use ($o) { $o->setDpi($n->getIntegerValue()); },
            'duplexMode' => function (ParseNode $n) use ($o) { $o->setDuplexMode($n->getEnumValue(PrintDuplexMode::class)); },
            'feedDirection' => function (ParseNode $n) use ($o) { $o->setFeedDirection($n->getEnumValue(PrinterFeedDirection::class)); },
            'feedOrientation' => function (ParseNode $n) use ($o) { $o->setFeedOrientation($n->getEnumValue(PrinterFeedOrientation::class)); },
            'finishings' => function (ParseNode $n) use ($o) { $o->setFinishings($n->getCollectionOfPrimitiveValues()); },
            'fitPdfToPage' => function (ParseNode $n) use ($o) { $o->setFitPdfToPage($n->getBooleanValue()); },
            'inputBin' => function (ParseNode $n) use ($o) { $o->setInputBin($n->getStringValue()); },
            'margin' => function (ParseNode $n) use ($o) { $o->setMargin($n->getObjectValue(array(PrintMargin::class, 'createFromDiscriminatorValue'))); },
            'mediaSize' => function (ParseNode $n) use ($o) { $o->setMediaSize($n->getStringValue()); },
            'mediaType' => function (ParseNode $n) use ($o) { $o->setMediaType($n->getStringValue()); },
            'multipageLayout' => function (ParseNode $n) use ($o) { $o->setMultipageLayout($n->getEnumValue(PrintMultipageLayout::class)); },
            'orientation' => function (ParseNode $n) use ($o) { $o->setOrientation($n->getEnumValue(PrintOrientation::class)); },
            'outputBin' => function (ParseNode $n) use ($o) { $o->setOutputBin($n->getStringValue()); },
            'pageRanges' => function (ParseNode $n) use ($o) { $o->setPageRanges($n->getCollectionOfObjectValues(array(IntegerRange::class, 'createFromDiscriminatorValue'))); },
            'pagesPerSheet' => function (ParseNode $n) use ($o) { $o->setPagesPerSheet($n->getIntegerValue()); },
            'quality' => function (ParseNode $n) use ($o) { $o->setQuality($n->getEnumValue(PrintQuality::class)); },
            'scaling' => function (ParseNode $n) use ($o) { $o->setScaling($n->getEnumValue(PrintScaling::class)); },
        ];
    }

    /**
     * Gets the finishings property value. The finishings property
     * @return array<string>|null
    */
    public function getFinishings(): ?array {
        return $this->finishings;
    }

    /**
     * Gets the fitPdfToPage property value. The fitPdfToPage property
     * @return bool|null
    */
    public function getFitPdfToPage(): ?bool {
        return $this->fitPdfToPage;
    }

    /**
     * Gets the inputBin property value. The inputBin property
     * @return string|null
    */
    public function getInputBin(): ?string {
        return $this->inputBin;
    }

    /**
     * Gets the margin property value. The margin property
     * @return PrintMargin|null
    */
    public function getMargin(): ?PrintMargin {
        return $this->margin;
    }

    /**
     * Gets the mediaSize property value. The mediaSize property
     * @return string|null
    */
    public function getMediaSize(): ?string {
        return $this->mediaSize;
    }

    /**
     * Gets the mediaType property value. The mediaType property
     * @return string|null
    */
    public function getMediaType(): ?string {
        return $this->mediaType;
    }

    /**
     * Gets the multipageLayout property value. The multipageLayout property
     * @return PrintMultipageLayout|null
    */
    public function getMultipageLayout(): ?PrintMultipageLayout {
        return $this->multipageLayout;
    }

    /**
     * Gets the orientation property value. The orientation property
     * @return PrintOrientation|null
    */
    public function getOrientation(): ?PrintOrientation {
        return $this->orientation;
    }

    /**
     * Gets the outputBin property value. The outputBin property
     * @return string|null
    */
    public function getOutputBin(): ?string {
        return $this->outputBin;
    }

    /**
     * Gets the pageRanges property value. The pageRanges property
     * @return array<IntegerRange>|null
    */
    public function getPageRanges(): ?array {
        return $this->pageRanges;
    }

    /**
     * Gets the pagesPerSheet property value. The pagesPerSheet property
     * @return int|null
    */
    public function getPagesPerSheet(): ?int {
        return $this->pagesPerSheet;
    }

    /**
     * Gets the quality property value. The quality property
     * @return PrintQuality|null
    */
    public function getQuality(): ?PrintQuality {
        return $this->quality;
    }

    /**
     * Gets the scaling property value. The scaling property
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
        $writer->writeCollectionOfPrimitiveValues('finishings', $this->finishings);
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
     * Sets the collate property value. The collate property
     *  @param bool|null $value Value to set for the collate property.
    */
    public function setCollate(?bool $value ): void {
        $this->collate = $value;
    }

    /**
     * Sets the colorMode property value. The colorMode property
     *  @param PrintColorMode|null $value Value to set for the colorMode property.
    */
    public function setColorMode(?PrintColorMode $value ): void {
        $this->colorMode = $value;
    }

    /**
     * Sets the copies property value. The copies property
     *  @param int|null $value Value to set for the copies property.
    */
    public function setCopies(?int $value ): void {
        $this->copies = $value;
    }

    /**
     * Sets the dpi property value. The dpi property
     *  @param int|null $value Value to set for the dpi property.
    */
    public function setDpi(?int $value ): void {
        $this->dpi = $value;
    }

    /**
     * Sets the duplexMode property value. The duplexMode property
     *  @param PrintDuplexMode|null $value Value to set for the duplexMode property.
    */
    public function setDuplexMode(?PrintDuplexMode $value ): void {
        $this->duplexMode = $value;
    }

    /**
     * Sets the feedDirection property value. The feedDirection property
     *  @param PrinterFeedDirection|null $value Value to set for the feedDirection property.
    */
    public function setFeedDirection(?PrinterFeedDirection $value ): void {
        $this->feedDirection = $value;
    }

    /**
     * Sets the feedOrientation property value. The feedOrientation property
     *  @param PrinterFeedOrientation|null $value Value to set for the feedOrientation property.
    */
    public function setFeedOrientation(?PrinterFeedOrientation $value ): void {
        $this->feedOrientation = $value;
    }

    /**
     * Sets the finishings property value. The finishings property
     *  @param array<string>|null $value Value to set for the finishings property.
    */
    public function setFinishings(?array $value ): void {
        $this->finishings = $value;
    }

    /**
     * Sets the fitPdfToPage property value. The fitPdfToPage property
     *  @param bool|null $value Value to set for the fitPdfToPage property.
    */
    public function setFitPdfToPage(?bool $value ): void {
        $this->fitPdfToPage = $value;
    }

    /**
     * Sets the inputBin property value. The inputBin property
     *  @param string|null $value Value to set for the inputBin property.
    */
    public function setInputBin(?string $value ): void {
        $this->inputBin = $value;
    }

    /**
     * Sets the margin property value. The margin property
     *  @param PrintMargin|null $value Value to set for the margin property.
    */
    public function setMargin(?PrintMargin $value ): void {
        $this->margin = $value;
    }

    /**
     * Sets the mediaSize property value. The mediaSize property
     *  @param string|null $value Value to set for the mediaSize property.
    */
    public function setMediaSize(?string $value ): void {
        $this->mediaSize = $value;
    }

    /**
     * Sets the mediaType property value. The mediaType property
     *  @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value ): void {
        $this->mediaType = $value;
    }

    /**
     * Sets the multipageLayout property value. The multipageLayout property
     *  @param PrintMultipageLayout|null $value Value to set for the multipageLayout property.
    */
    public function setMultipageLayout(?PrintMultipageLayout $value ): void {
        $this->multipageLayout = $value;
    }

    /**
     * Sets the orientation property value. The orientation property
     *  @param PrintOrientation|null $value Value to set for the orientation property.
    */
    public function setOrientation(?PrintOrientation $value ): void {
        $this->orientation = $value;
    }

    /**
     * Sets the outputBin property value. The outputBin property
     *  @param string|null $value Value to set for the outputBin property.
    */
    public function setOutputBin(?string $value ): void {
        $this->outputBin = $value;
    }

    /**
     * Sets the pageRanges property value. The pageRanges property
     *  @param array<IntegerRange>|null $value Value to set for the pageRanges property.
    */
    public function setPageRanges(?array $value ): void {
        $this->pageRanges = $value;
    }

    /**
     * Sets the pagesPerSheet property value. The pagesPerSheet property
     *  @param int|null $value Value to set for the pagesPerSheet property.
    */
    public function setPagesPerSheet(?int $value ): void {
        $this->pagesPerSheet = $value;
    }

    /**
     * Sets the quality property value. The quality property
     *  @param PrintQuality|null $value Value to set for the quality property.
    */
    public function setQuality(?PrintQuality $value ): void {
        $this->quality = $value;
    }

    /**
     * Sets the scaling property value. The scaling property
     *  @param PrintScaling|null $value Value to set for the scaling property.
    */
    public function setScaling(?PrintScaling $value ): void {
        $this->scaling = $value;
    }

}
