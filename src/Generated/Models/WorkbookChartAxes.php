<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkbookChartAxes extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WorkbookChartAxis|null $categoryAxis Represents the category axis in a chart. Read-only.
    */
    private ?WorkbookChartAxis $categoryAxis = null;
    
    /**
     * @var WorkbookChartAxis|null $seriesAxis Represents the series axis of a 3-dimensional chart. Read-only.
    */
    private ?WorkbookChartAxis $seriesAxis = null;
    
    /**
     * @var WorkbookChartAxis|null $valueAxis Represents the value axis in an axis. Read-only.
    */
    private ?WorkbookChartAxis $valueAxis = null;
    
    /**
     * Instantiates a new workbookChartAxes and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkbookChartAxes
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkbookChartAxes {
        return new WorkbookChartAxes();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the categoryAxis property value. Represents the category axis in a chart. Read-only.
     * @return WorkbookChartAxis|null
    */
    public function getCategoryAxis(): ?WorkbookChartAxis {
        return $this->categoryAxis;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'categoryAxis' => function (ParseNode $n) use ($o) { $o->setCategoryAxis($n->getObjectValue(array(WorkbookChartAxis::class, 'createFromDiscriminatorValue'))); },
            'seriesAxis' => function (ParseNode $n) use ($o) { $o->setSeriesAxis($n->getObjectValue(array(WorkbookChartAxis::class, 'createFromDiscriminatorValue'))); },
            'valueAxis' => function (ParseNode $n) use ($o) { $o->setValueAxis($n->getObjectValue(array(WorkbookChartAxis::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the seriesAxis property value. Represents the series axis of a 3-dimensional chart. Read-only.
     * @return WorkbookChartAxis|null
    */
    public function getSeriesAxis(): ?WorkbookChartAxis {
        return $this->seriesAxis;
    }

    /**
     * Gets the valueAxis property value. Represents the value axis in an axis. Read-only.
     * @return WorkbookChartAxis|null
    */
    public function getValueAxis(): ?WorkbookChartAxis {
        return $this->valueAxis;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('categoryAxis', $this->categoryAxis);
        $writer->writeObjectValue('seriesAxis', $this->seriesAxis);
        $writer->writeObjectValue('valueAxis', $this->valueAxis);
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
     * Sets the categoryAxis property value. Represents the category axis in a chart. Read-only.
     *  @param WorkbookChartAxis|null $value Value to set for the categoryAxis property.
    */
    public function setCategoryAxis(?WorkbookChartAxis $value ): void {
        $this->categoryAxis = $value;
    }

    /**
     * Sets the seriesAxis property value. Represents the series axis of a 3-dimensional chart. Read-only.
     *  @param WorkbookChartAxis|null $value Value to set for the seriesAxis property.
    */
    public function setSeriesAxis(?WorkbookChartAxis $value ): void {
        $this->seriesAxis = $value;
    }

    /**
     * Sets the valueAxis property value. Represents the value axis in an axis. Read-only.
     *  @param WorkbookChartAxis|null $value Value to set for the valueAxis property.
    */
    public function setValueAxis(?WorkbookChartAxis $value ): void {
        $this->valueAxis = $value;
    }

}
