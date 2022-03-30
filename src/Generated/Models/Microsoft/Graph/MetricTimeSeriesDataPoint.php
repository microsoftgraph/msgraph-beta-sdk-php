<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MetricTimeSeriesDataPoint implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var DateTime|null $dateTime Time of the metric time series data point */
    private ?DateTime $dateTime = null;
    
    /** @var int|null $value Value of the metric time series data point */
    private ?int $value = null;
    
    /**
     * Instantiates a new metricTimeSeriesDataPoint and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MetricTimeSeriesDataPoint
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MetricTimeSeriesDataPoint {
        return new MetricTimeSeriesDataPoint();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dateTime property value. Time of the metric time series data point
     * @return DateTime|null
    */
    public function getDateTime(): ?DateTime {
        return $this->dateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'dateTime' => function (self $o, ParseNode $n) { $o->setDateTime($n->getDateTimeValue()); },
            'value' => function (self $o, ParseNode $n) { $o->setValue($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the value property value. Value of the metric time series data point
     * @return int|null
    */
    public function getValue(): ?int {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('dateTime', $this->dateTime);
        $writer->writeIntegerValue('value', $this->value);
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
     * Sets the dateTime property value. Time of the metric time series data point
     *  @param DateTime|null $value Value to set for the dateTime property.
    */
    public function setDateTime(?DateTime $value ): void {
        $this->dateTime = $value;
    }

    /**
     * Sets the value property value. Value of the metric time series data point
     *  @param int|null $value Value to set for the value property.
    */
    public function setValue(?int $value ): void {
        $this->value = $value;
    }

}
