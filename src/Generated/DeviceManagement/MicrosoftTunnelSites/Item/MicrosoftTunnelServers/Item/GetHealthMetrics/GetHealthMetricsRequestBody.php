<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\MicrosoftTunnelSites\Item\MicrosoftTunnelServers\Item\GetHealthMetrics;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GetHealthMetricsRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<string>|null $metricNames The metricNames property */
    private ?array $metricNames = null;
    
    /**
     * Instantiates a new getHealthMetricsRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GetHealthMetricsRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): GetHealthMetricsRequestBody {
        return new GetHealthMetricsRequestBody();
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
        return  [
            'metricNames' => function (self $o, ParseNode $n) { $o->setMetricNames($n->getCollectionOfPrimitiveValues()); },
        ];
    }

    /**
     * Gets the metricNames property value. The metricNames property
     * @return array<string>|null
    */
    public function getMetricNames(): ?array {
        return $this->metricNames;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('metricNames', $this->metricNames);
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
     * Sets the metricNames property value. The metricNames property
     *  @param array<string>|null $value Value to set for the metricNames property.
    */
    public function setMetricNames(?array $value ): void {
        $this->metricNames = $value;
    }

}
