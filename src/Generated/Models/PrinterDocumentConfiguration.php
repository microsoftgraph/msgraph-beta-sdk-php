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

class PrinterDocumentConfiguration implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new printerDocumentConfiguration and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the collate property value. The collate property
     * @return bool|null
    */
    public function getCollate(): ?bool {
        $val = $this->getBackingStore()->get('collate');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'collate'");
    }

    /**
     * Gets the colorMode property value. The colorMode property
     * @return PrintColorMode|null
    */
    public function getColorMode(): ?PrintColorMode {
        $val = $this->getBackingStore()->get('colorMode');
        if (is_null($val) || $val instanceof PrintColorMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'colorMode'");
    }

    /**
     * Gets the copies property value. The copies property
     * @return int|null
    */
    public function getCopies(): ?int {
        $val = $this->getBackingStore()->get('copies');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'copies'");
    }

    /**
     * Gets the dpi property value. The dpi property
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
     * Gets the duplexMode property value. The duplexMode property
     * @return PrintDuplexMode|null
    */
    public function getDuplexMode(): ?PrintDuplexMode {
        $val = $this->getBackingStore()->get('duplexMode');
        if (is_null($val) || $val instanceof PrintDuplexMode) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'duplexMode'");
    }

    /**
     * Gets the feedDirection property value. The feedDirection property
     * @return PrinterFeedDirection|null
    */
    public function getFeedDirection(): ?PrinterFeedDirection {
        $val = $this->getBackingStore()->get('feedDirection');
        if (is_null($val) || $val instanceof PrinterFeedDirection) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'feedDirection'");
    }

    /**
     * Gets the feedOrientation property value. The feedOrientation property
     * @return PrinterFeedOrientation|null
    */
    public function getFeedOrientation(): ?PrinterFeedOrientation {
        $val = $this->getBackingStore()->get('feedOrientation');
        if (is_null($val) || $val instanceof PrinterFeedOrientation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'feedOrientation'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'collate' => fn(ParseNode $n) => $o->setCollate($n->getBooleanValue()),
            'colorMode' => fn(ParseNode $n) => $o->setColorMode($n->getEnumValue(PrintColorMode::class)),
            'copies' => fn(ParseNode $n) => $o->setCopies($n->getIntegerValue()),
            'dpi' => fn(ParseNode $n) => $o->setDpi($n->getIntegerValue()),
            'duplexMode' => fn(ParseNode $n) => $o->setDuplexMode($n->getEnumValue(PrintDuplexMode::class)),
            'feedDirection' => fn(ParseNode $n) => $o->setFeedDirection($n->getEnumValue(PrinterFeedDirection::class)),
            'feedOrientation' => fn(ParseNode $n) => $o->setFeedOrientation($n->getEnumValue(PrinterFeedOrientation::class)),
            'finishings' => fn(ParseNode $n) => $o->setFinishings($n->getCollectionOfEnumValues(PrintFinishing::class)),
            'fitPdfToPage' => fn(ParseNode $n) => $o->setFitPdfToPage($n->getBooleanValue()),
            'inputBin' => fn(ParseNode $n) => $o->setInputBin($n->getStringValue()),
            'margin' => fn(ParseNode $n) => $o->setMargin($n->getObjectValue([PrintMargin::class, 'createFromDiscriminatorValue'])),
            'mediaSize' => fn(ParseNode $n) => $o->setMediaSize($n->getStringValue()),
            'mediaType' => fn(ParseNode $n) => $o->setMediaType($n->getStringValue()),
            'multipageLayout' => fn(ParseNode $n) => $o->setMultipageLayout($n->getEnumValue(PrintMultipageLayout::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'orientation' => fn(ParseNode $n) => $o->setOrientation($n->getEnumValue(PrintOrientation::class)),
            'outputBin' => fn(ParseNode $n) => $o->setOutputBin($n->getStringValue()),
            'pageRanges' => fn(ParseNode $n) => $o->setPageRanges($n->getCollectionOfObjectValues([IntegerRange::class, 'createFromDiscriminatorValue'])),
            'pagesPerSheet' => fn(ParseNode $n) => $o->setPagesPerSheet($n->getIntegerValue()),
            'quality' => fn(ParseNode $n) => $o->setQuality($n->getEnumValue(PrintQuality::class)),
            'scaling' => fn(ParseNode $n) => $o->setScaling($n->getEnumValue(PrintScaling::class)),
        ];
    }

    /**
     * Gets the finishings property value. The finishings property
     * @return array<PrintFinishing>|null
    */
    public function getFinishings(): ?array {
        $val = $this->getBackingStore()->get('finishings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PrintFinishing::class);
            /** @var array<PrintFinishing>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'finishings'");
    }

    /**
     * Gets the fitPdfToPage property value. The fitPdfToPage property
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
     * Gets the inputBin property value. The inputBin property
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
     * Gets the margin property value. The margin property
     * @return PrintMargin|null
    */
    public function getMargin(): ?PrintMargin {
        $val = $this->getBackingStore()->get('margin');
        if (is_null($val) || $val instanceof PrintMargin) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'margin'");
    }

    /**
     * Gets the mediaSize property value. The mediaSize property
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
     * Gets the mediaType property value. The mediaType property
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
     * Gets the multipageLayout property value. The multipageLayout property
     * @return PrintMultipageLayout|null
    */
    public function getMultipageLayout(): ?PrintMultipageLayout {
        $val = $this->getBackingStore()->get('multipageLayout');
        if (is_null($val) || $val instanceof PrintMultipageLayout) {
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
     * Gets the orientation property value. The orientation property
     * @return PrintOrientation|null
    */
    public function getOrientation(): ?PrintOrientation {
        $val = $this->getBackingStore()->get('orientation');
        if (is_null($val) || $val instanceof PrintOrientation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'orientation'");
    }

    /**
     * Gets the outputBin property value. The outputBin property
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
     * Gets the pageRanges property value. The pageRanges property
     * @return array<IntegerRange>|null
    */
    public function getPageRanges(): ?array {
        $val = $this->getBackingStore()->get('pageRanges');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IntegerRange::class);
            /** @var array<IntegerRange>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pageRanges'");
    }

    /**
     * Gets the pagesPerSheet property value. The pagesPerSheet property
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
     * Gets the quality property value. The quality property
     * @return PrintQuality|null
    */
    public function getQuality(): ?PrintQuality {
        $val = $this->getBackingStore()->get('quality');
        if (is_null($val) || $val instanceof PrintQuality) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'quality'");
    }

    /**
     * Gets the scaling property value. The scaling property
     * @return PrintScaling|null
    */
    public function getScaling(): ?PrintScaling {
        $val = $this->getBackingStore()->get('scaling');
        if (is_null($val) || $val instanceof PrintScaling) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'scaling'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('collate', $this->getCollate());
        $writer->writeEnumValue('colorMode', $this->getColorMode());
        $writer->writeIntegerValue('copies', $this->getCopies());
        $writer->writeIntegerValue('dpi', $this->getDpi());
        $writer->writeEnumValue('duplexMode', $this->getDuplexMode());
        $writer->writeEnumValue('feedDirection', $this->getFeedDirection());
        $writer->writeEnumValue('feedOrientation', $this->getFeedOrientation());
        $writer->writeCollectionOfEnumValues('finishings', $this->getFinishings());
        $writer->writeBooleanValue('fitPdfToPage', $this->getFitPdfToPage());
        $writer->writeStringValue('inputBin', $this->getInputBin());
        $writer->writeObjectValue('margin', $this->getMargin());
        $writer->writeStringValue('mediaSize', $this->getMediaSize());
        $writer->writeStringValue('mediaType', $this->getMediaType());
        $writer->writeEnumValue('multipageLayout', $this->getMultipageLayout());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('orientation', $this->getOrientation());
        $writer->writeStringValue('outputBin', $this->getOutputBin());
        $writer->writeCollectionOfObjectValues('pageRanges', $this->getPageRanges());
        $writer->writeIntegerValue('pagesPerSheet', $this->getPagesPerSheet());
        $writer->writeEnumValue('quality', $this->getQuality());
        $writer->writeEnumValue('scaling', $this->getScaling());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the additionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the backingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the collate property value. The collate property
     * @param bool|null $value Value to set for the collate property.
    */
    public function setCollate(?bool $value): void {
        $this->getBackingStore()->set('collate', $value);
    }

    /**
     * Sets the colorMode property value. The colorMode property
     * @param PrintColorMode|null $value Value to set for the colorMode property.
    */
    public function setColorMode(?PrintColorMode $value): void {
        $this->getBackingStore()->set('colorMode', $value);
    }

    /**
     * Sets the copies property value. The copies property
     * @param int|null $value Value to set for the copies property.
    */
    public function setCopies(?int $value): void {
        $this->getBackingStore()->set('copies', $value);
    }

    /**
     * Sets the dpi property value. The dpi property
     * @param int|null $value Value to set for the dpi property.
    */
    public function setDpi(?int $value): void {
        $this->getBackingStore()->set('dpi', $value);
    }

    /**
     * Sets the duplexMode property value. The duplexMode property
     * @param PrintDuplexMode|null $value Value to set for the duplexMode property.
    */
    public function setDuplexMode(?PrintDuplexMode $value): void {
        $this->getBackingStore()->set('duplexMode', $value);
    }

    /**
     * Sets the feedDirection property value. The feedDirection property
     * @param PrinterFeedDirection|null $value Value to set for the feedDirection property.
    */
    public function setFeedDirection(?PrinterFeedDirection $value): void {
        $this->getBackingStore()->set('feedDirection', $value);
    }

    /**
     * Sets the feedOrientation property value. The feedOrientation property
     * @param PrinterFeedOrientation|null $value Value to set for the feedOrientation property.
    */
    public function setFeedOrientation(?PrinterFeedOrientation $value): void {
        $this->getBackingStore()->set('feedOrientation', $value);
    }

    /**
     * Sets the finishings property value. The finishings property
     * @param array<PrintFinishing>|null $value Value to set for the finishings property.
    */
    public function setFinishings(?array $value): void {
        $this->getBackingStore()->set('finishings', $value);
    }

    /**
     * Sets the fitPdfToPage property value. The fitPdfToPage property
     * @param bool|null $value Value to set for the fitPdfToPage property.
    */
    public function setFitPdfToPage(?bool $value): void {
        $this->getBackingStore()->set('fitPdfToPage', $value);
    }

    /**
     * Sets the inputBin property value. The inputBin property
     * @param string|null $value Value to set for the inputBin property.
    */
    public function setInputBin(?string $value): void {
        $this->getBackingStore()->set('inputBin', $value);
    }

    /**
     * Sets the margin property value. The margin property
     * @param PrintMargin|null $value Value to set for the margin property.
    */
    public function setMargin(?PrintMargin $value): void {
        $this->getBackingStore()->set('margin', $value);
    }

    /**
     * Sets the mediaSize property value. The mediaSize property
     * @param string|null $value Value to set for the mediaSize property.
    */
    public function setMediaSize(?string $value): void {
        $this->getBackingStore()->set('mediaSize', $value);
    }

    /**
     * Sets the mediaType property value. The mediaType property
     * @param string|null $value Value to set for the mediaType property.
    */
    public function setMediaType(?string $value): void {
        $this->getBackingStore()->set('mediaType', $value);
    }

    /**
     * Sets the multipageLayout property value. The multipageLayout property
     * @param PrintMultipageLayout|null $value Value to set for the multipageLayout property.
    */
    public function setMultipageLayout(?PrintMultipageLayout $value): void {
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
     * Sets the orientation property value. The orientation property
     * @param PrintOrientation|null $value Value to set for the orientation property.
    */
    public function setOrientation(?PrintOrientation $value): void {
        $this->getBackingStore()->set('orientation', $value);
    }

    /**
     * Sets the outputBin property value. The outputBin property
     * @param string|null $value Value to set for the outputBin property.
    */
    public function setOutputBin(?string $value): void {
        $this->getBackingStore()->set('outputBin', $value);
    }

    /**
     * Sets the pageRanges property value. The pageRanges property
     * @param array<IntegerRange>|null $value Value to set for the pageRanges property.
    */
    public function setPageRanges(?array $value): void {
        $this->getBackingStore()->set('pageRanges', $value);
    }

    /**
     * Sets the pagesPerSheet property value. The pagesPerSheet property
     * @param int|null $value Value to set for the pagesPerSheet property.
    */
    public function setPagesPerSheet(?int $value): void {
        $this->getBackingStore()->set('pagesPerSheet', $value);
    }

    /**
     * Sets the quality property value. The quality property
     * @param PrintQuality|null $value Value to set for the quality property.
    */
    public function setQuality(?PrintQuality $value): void {
        $this->getBackingStore()->set('quality', $value);
    }

    /**
     * Sets the scaling property value. The scaling property
     * @param PrintScaling|null $value Value to set for the scaling property.
    */
    public function setScaling(?PrintScaling $value): void {
        $this->getBackingStore()->set('scaling', $value);
    }

}
