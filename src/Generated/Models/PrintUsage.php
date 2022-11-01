<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Date;

class PrintUsage extends Entity implements Parsable 
{
    /**
     * @var int|null $blackAndWhitePageCount The blackAndWhitePageCount property
    */
    private ?int $blackAndWhitePageCount = null;
    
    /**
     * @var int|null $colorPageCount The colorPageCount property
    */
    private ?int $colorPageCount = null;
    
    /**
     * @var int|null $completedBlackAndWhiteJobCount The completedBlackAndWhiteJobCount property
    */
    private ?int $completedBlackAndWhiteJobCount = null;
    
    /**
     * @var int|null $completedColorJobCount The completedColorJobCount property
    */
    private ?int $completedColorJobCount = null;
    
    /**
     * @var int|null $completedJobCount The completedJobCount property
    */
    private ?int $completedJobCount = null;
    
    /**
     * @var int|null $doubleSidedSheetCount The doubleSidedSheetCount property
    */
    private ?int $doubleSidedSheetCount = null;
    
    /**
     * @var int|null $incompleteJobCount The incompleteJobCount property
    */
    private ?int $incompleteJobCount = null;
    
    /**
     * @var int|null $mediaSheetCount The mediaSheetCount property
    */
    private ?int $mediaSheetCount = null;
    
    /**
     * @var int|null $pageCount The pageCount property
    */
    private ?int $pageCount = null;
    
    /**
     * @var int|null $singleSidedSheetCount The singleSidedSheetCount property
    */
    private ?int $singleSidedSheetCount = null;
    
    /**
     * @var Date|null $usageDate The usageDate property
    */
    private ?Date $usageDate = null;
    
    /**
     * Instantiates a new printUsage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.printUsage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PrintUsage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PrintUsage {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.printUsageByPrinter': return new PrintUsageByPrinter();
                case '#microsoft.graph.printUsageByUser': return new PrintUsageByUser();
            }
        }
        return new PrintUsage();
    }

    /**
     * Gets the blackAndWhitePageCount property value. The blackAndWhitePageCount property
     * @return int|null
    */
    public function getBlackAndWhitePageCount(): ?int {
        return $this->blackAndWhitePageCount;
    }

    /**
     * Gets the colorPageCount property value. The colorPageCount property
     * @return int|null
    */
    public function getColorPageCount(): ?int {
        return $this->colorPageCount;
    }

    /**
     * Gets the completedBlackAndWhiteJobCount property value. The completedBlackAndWhiteJobCount property
     * @return int|null
    */
    public function getCompletedBlackAndWhiteJobCount(): ?int {
        return $this->completedBlackAndWhiteJobCount;
    }

    /**
     * Gets the completedColorJobCount property value. The completedColorJobCount property
     * @return int|null
    */
    public function getCompletedColorJobCount(): ?int {
        return $this->completedColorJobCount;
    }

    /**
     * Gets the completedJobCount property value. The completedJobCount property
     * @return int|null
    */
    public function getCompletedJobCount(): ?int {
        return $this->completedJobCount;
    }

    /**
     * Gets the doubleSidedSheetCount property value. The doubleSidedSheetCount property
     * @return int|null
    */
    public function getDoubleSidedSheetCount(): ?int {
        return $this->doubleSidedSheetCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'blackAndWhitePageCount' => fn(ParseNode $n) => $o->setBlackAndWhitePageCount($n->getIntegerValue()),
            'colorPageCount' => fn(ParseNode $n) => $o->setColorPageCount($n->getIntegerValue()),
            'completedBlackAndWhiteJobCount' => fn(ParseNode $n) => $o->setCompletedBlackAndWhiteJobCount($n->getIntegerValue()),
            'completedColorJobCount' => fn(ParseNode $n) => $o->setCompletedColorJobCount($n->getIntegerValue()),
            'completedJobCount' => fn(ParseNode $n) => $o->setCompletedJobCount($n->getIntegerValue()),
            'doubleSidedSheetCount' => fn(ParseNode $n) => $o->setDoubleSidedSheetCount($n->getIntegerValue()),
            'incompleteJobCount' => fn(ParseNode $n) => $o->setIncompleteJobCount($n->getIntegerValue()),
            'mediaSheetCount' => fn(ParseNode $n) => $o->setMediaSheetCount($n->getIntegerValue()),
            'pageCount' => fn(ParseNode $n) => $o->setPageCount($n->getIntegerValue()),
            'singleSidedSheetCount' => fn(ParseNode $n) => $o->setSingleSidedSheetCount($n->getIntegerValue()),
            'usageDate' => fn(ParseNode $n) => $o->setUsageDate($n->getDateValue()),
        ]);
    }

    /**
     * Gets the incompleteJobCount property value. The incompleteJobCount property
     * @return int|null
    */
    public function getIncompleteJobCount(): ?int {
        return $this->incompleteJobCount;
    }

    /**
     * Gets the mediaSheetCount property value. The mediaSheetCount property
     * @return int|null
    */
    public function getMediaSheetCount(): ?int {
        return $this->mediaSheetCount;
    }

    /**
     * Gets the pageCount property value. The pageCount property
     * @return int|null
    */
    public function getPageCount(): ?int {
        return $this->pageCount;
    }

    /**
     * Gets the singleSidedSheetCount property value. The singleSidedSheetCount property
     * @return int|null
    */
    public function getSingleSidedSheetCount(): ?int {
        return $this->singleSidedSheetCount;
    }

    /**
     * Gets the usageDate property value. The usageDate property
     * @return Date|null
    */
    public function getUsageDate(): ?Date {
        return $this->usageDate;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('blackAndWhitePageCount', $this->blackAndWhitePageCount);
        $writer->writeIntegerValue('colorPageCount', $this->colorPageCount);
        $writer->writeIntegerValue('completedBlackAndWhiteJobCount', $this->completedBlackAndWhiteJobCount);
        $writer->writeIntegerValue('completedColorJobCount', $this->completedColorJobCount);
        $writer->writeIntegerValue('completedJobCount', $this->completedJobCount);
        $writer->writeIntegerValue('doubleSidedSheetCount', $this->doubleSidedSheetCount);
        $writer->writeIntegerValue('incompleteJobCount', $this->incompleteJobCount);
        $writer->writeIntegerValue('mediaSheetCount', $this->mediaSheetCount);
        $writer->writeIntegerValue('pageCount', $this->pageCount);
        $writer->writeIntegerValue('singleSidedSheetCount', $this->singleSidedSheetCount);
        $writer->writeDateValue('usageDate', $this->usageDate);
    }

    /**
     * Sets the blackAndWhitePageCount property value. The blackAndWhitePageCount property
     *  @param int|null $value Value to set for the blackAndWhitePageCount property.
    */
    public function setBlackAndWhitePageCount(?int $value ): void {
        $this->blackAndWhitePageCount = $value;
    }

    /**
     * Sets the colorPageCount property value. The colorPageCount property
     *  @param int|null $value Value to set for the colorPageCount property.
    */
    public function setColorPageCount(?int $value ): void {
        $this->colorPageCount = $value;
    }

    /**
     * Sets the completedBlackAndWhiteJobCount property value. The completedBlackAndWhiteJobCount property
     *  @param int|null $value Value to set for the completedBlackAndWhiteJobCount property.
    */
    public function setCompletedBlackAndWhiteJobCount(?int $value ): void {
        $this->completedBlackAndWhiteJobCount = $value;
    }

    /**
     * Sets the completedColorJobCount property value. The completedColorJobCount property
     *  @param int|null $value Value to set for the completedColorJobCount property.
    */
    public function setCompletedColorJobCount(?int $value ): void {
        $this->completedColorJobCount = $value;
    }

    /**
     * Sets the completedJobCount property value. The completedJobCount property
     *  @param int|null $value Value to set for the completedJobCount property.
    */
    public function setCompletedJobCount(?int $value ): void {
        $this->completedJobCount = $value;
    }

    /**
     * Sets the doubleSidedSheetCount property value. The doubleSidedSheetCount property
     *  @param int|null $value Value to set for the doubleSidedSheetCount property.
    */
    public function setDoubleSidedSheetCount(?int $value ): void {
        $this->doubleSidedSheetCount = $value;
    }

    /**
     * Sets the incompleteJobCount property value. The incompleteJobCount property
     *  @param int|null $value Value to set for the incompleteJobCount property.
    */
    public function setIncompleteJobCount(?int $value ): void {
        $this->incompleteJobCount = $value;
    }

    /**
     * Sets the mediaSheetCount property value. The mediaSheetCount property
     *  @param int|null $value Value to set for the mediaSheetCount property.
    */
    public function setMediaSheetCount(?int $value ): void {
        $this->mediaSheetCount = $value;
    }

    /**
     * Sets the pageCount property value. The pageCount property
     *  @param int|null $value Value to set for the pageCount property.
    */
    public function setPageCount(?int $value ): void {
        $this->pageCount = $value;
    }

    /**
     * Sets the singleSidedSheetCount property value. The singleSidedSheetCount property
     *  @param int|null $value Value to set for the singleSidedSheetCount property.
    */
    public function setSingleSidedSheetCount(?int $value ): void {
        $this->singleSidedSheetCount = $value;
    }

    /**
     * Sets the usageDate property value. The usageDate property
     *  @param Date|null $value Value to set for the usageDate property.
    */
    public function setUsageDate(?Date $value ): void {
        $this->usageDate = $value;
    }

}
