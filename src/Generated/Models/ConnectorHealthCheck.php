<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Represents an individual health check result for an NDES connector, containing the metric name and its current status.
*/
class ConnectorHealthCheck implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new ConnectorHealthCheck and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConnectorHealthCheck
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ConnectorHealthCheck {
        return new ConnectorHealthCheck();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
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
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'metricName' => fn(ParseNode $n) => $o->setMetricName($n->getEnumValue(ConnectorHealthCheckMetricName::class)),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(NdesConnectorHealthStatus::class)),
        ];
    }

    /**
     * Gets the metricName property value. The name of the health check metric being evaluated for an NDES connector.
     * @return ConnectorHealthCheckMetricName|null
    */
    public function getMetricName(): ?ConnectorHealthCheckMetricName {
        $val = $this->getBackingStore()->get('metricName');
        if (is_null($val) || $val instanceof ConnectorHealthCheckMetricName) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'metricName'");
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
     * Gets the status property value. The health status of an NDES connector or individual health check metric.
     * @return NdesConnectorHealthStatus|null
    */
    public function getStatus(): ?NdesConnectorHealthStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof NdesConnectorHealthStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('metricName', $this->getMetricName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the metricName property value. The name of the health check metric being evaluated for an NDES connector.
     * @param ConnectorHealthCheckMetricName|null $value Value to set for the metricName property.
    */
    public function setMetricName(?ConnectorHealthCheckMetricName $value): void {
        $this->getBackingStore()->set('metricName', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the status property value. The health status of an NDES connector or individual health check metric.
     * @param NdesConnectorHealthStatus|null $value Value to set for the status property.
    */
    public function setStatus(?NdesConnectorHealthStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
