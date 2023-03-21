<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class IndustryDataRunStatistics implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new industryDataRunStatistics and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IndustryDataRunStatistics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IndustryDataRunStatistics {
        return new IndustryDataRunStatistics();
    }

    /**
     * Gets the activityStatistics property value. The collection of statistics for each activity included in this run.
     * @return array<IndustryDataActivityStatistics>|null
    */
    public function getActivityStatistics(): ?array {
        return $this->getBackingStore()->get('activityStatistics');
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'activityStatistics' => fn(ParseNode $n) => $o->setActivityStatistics($n->getCollectionOfObjectValues([IndustryDataActivityStatistics::class, 'createFromDiscriminatorValue'])),
            'inboundTotals' => fn(ParseNode $n) => $o->setInboundTotals($n->getObjectValue([AggregatedInboundStatistics::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'runId' => fn(ParseNode $n) => $o->setRunId($n->getStringValue()),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(IndustryDataRunStatus::class)),
        ];
    }

    /**
     * Gets the inboundTotals property value. The aggregate statistics for all inbound flows.
     * @return AggregatedInboundStatistics|null
    */
    public function getInboundTotals(): ?AggregatedInboundStatistics {
        return $this->getBackingStore()->get('inboundTotals');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the runId property value. The ID of the underlying run for the statistics.
     * @return string|null
    */
    public function getRunId(): ?string {
        return $this->getBackingStore()->get('runId');
    }

    /**
     * Gets the status property value. The status property
     * @return IndustryDataRunStatus|null
    */
    public function getStatus(): ?IndustryDataRunStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('status', $this->getStatus());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the activityStatistics property value. The collection of statistics for each activity included in this run.
     * @param array<IndustryDataActivityStatistics>|null $value Value to set for the activityStatistics property.
    */
    public function setActivityStatistics(?array $value): void {
        $this->getBackingStore()->set('activityStatistics', $value);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the inboundTotals property value. The aggregate statistics for all inbound flows.
     * @param AggregatedInboundStatistics|null $value Value to set for the inboundTotals property.
    */
    public function setInboundTotals(?AggregatedInboundStatistics $value): void {
        $this->getBackingStore()->set('inboundTotals', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the runId property value. The ID of the underlying run for the statistics.
     * @param string|null $value Value to set for the runId property.
    */
    public function setRunId(?string $value): void {
        $this->getBackingStore()->set('runId', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param IndustryDataRunStatus|null $value Value to set for the status property.
    */
    public function setStatus(?IndustryDataRunStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
