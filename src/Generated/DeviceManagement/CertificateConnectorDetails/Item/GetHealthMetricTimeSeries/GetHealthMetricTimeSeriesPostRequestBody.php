<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\CertificateConnectorDetails\Item\GetHealthMetricTimeSeries;

use Microsoft\Graph\Beta\Generated\Models\TimeSeriesParameter;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetHealthMetricTimeSeriesPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var TimeSeriesParameter|null $timeSeries The timeSeries property
    */
    private ?TimeSeriesParameter $timeSeries = null;
    
    /**
     * Instantiates a new getHealthMetricTimeSeriesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetHealthMetricTimeSeriesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GetHealthMetricTimeSeriesPostRequestBody {
        return new GetHealthMetricTimeSeriesPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'timeSeries' => function (ParseNode $n) use ($o) { $o->setTimeSeries($n->getObjectValue(array(TimeSeriesParameter::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the timeSeries property value. The timeSeries property
     * @return TimeSeriesParameter|null
    */
    public function getTimeSeries(): ?TimeSeriesParameter {
        return $this->timeSeries;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('timeSeries', $this->timeSeries);
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
     * Sets the timeSeries property value. The timeSeries property
     *  @param TimeSeriesParameter|null $value Value to set for the timeSeries property.
    */
    public function setTimeSeries(?TimeSeriesParameter $value ): void {
        $this->timeSeries = $value;
    }

}
