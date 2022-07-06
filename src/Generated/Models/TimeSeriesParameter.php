<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TimeSeriesParameter implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $endDateTime End time of the series being requested. Optional; if not specified, current time is used.
    */
    private ?DateTime $endDateTime = null;
    
    /**
     * @var string|null $metricName The name of the metric for which a time series is requested.
    */
    private ?string $metricName = null;
    
    /**
     * @var DateTime|null $startDateTime Start time of the series being requested.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new timeSeriesParameter and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TimeSeriesParameter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TimeSeriesParameter {
        return new TimeSeriesParameter();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the endDateTime property value. End time of the series being requested. Optional; if not specified, current time is used.
     * @return DateTime|null
    */
    public function getEndDateTime(): ?DateTime {
        return $this->endDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'endDateTime' => function (ParseNode $n) use ($o) { $o->setEndDateTime($n->getDateTimeValue()); },
            'metricName' => function (ParseNode $n) use ($o) { $o->setMetricName($n->getStringValue()); },
            'startDateTime' => function (ParseNode $n) use ($o) { $o->setStartDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the metricName property value. The name of the metric for which a time series is requested.
     * @return string|null
    */
    public function getMetricName(): ?string {
        return $this->metricName;
    }

    /**
     * Gets the startDateTime property value. Start time of the series being requested.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('endDateTime', $this->endDateTime);
        $writer->writeStringValue('metricName', $this->metricName);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
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
     * Sets the endDateTime property value. End time of the series being requested. Optional; if not specified, current time is used.
     *  @param DateTime|null $value Value to set for the endDateTime property.
    */
    public function setEndDateTime(?DateTime $value ): void {
        $this->endDateTime = $value;
    }

    /**
     * Sets the metricName property value. The name of the metric for which a time series is requested.
     *  @param string|null $value Value to set for the metricName property.
    */
    public function setMetricName(?string $value ): void {
        $this->metricName = $value;
    }

    /**
     * Sets the startDateTime property value. Start time of the series being requested.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
