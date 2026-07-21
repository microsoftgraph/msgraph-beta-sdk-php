<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AlertCounts implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AlertCounts and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AlertCounts
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AlertCounts {
        return new AlertCounts();
    }

    /**
     * Gets the active property value. The number of active alerts.
     * @return int|null
    */
    public function getActive(): ?int {
        $val = $this->getBackingStore()->get('active');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'active'");
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
     * Gets the bySeverity property value. The alert counts grouped by incident severity.
     * @return IncidentSeverityCounts|null
    */
    public function getBySeverity(): ?IncidentSeverityCounts {
        $val = $this->getBackingStore()->get('bySeverity');
        if (is_null($val) || $val instanceof IncidentSeverityCounts) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bySeverity'");
    }

    /**
     * Gets the byStatus property value. The alert counts grouped by alert status.
     * @return AlertStatusCounts|null
    */
    public function getByStatus(): ?AlertStatusCounts {
        $val = $this->getBackingStore()->get('byStatus');
        if (is_null($val) || $val instanceof AlertStatusCounts) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'byStatus'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'active' => fn(ParseNode $n) => $o->setActive($n->getIntegerValue()),
            'bySeverity' => fn(ParseNode $n) => $o->setBySeverity($n->getObjectValue([IncidentSeverityCounts::class, 'createFromDiscriminatorValue'])),
            'byStatus' => fn(ParseNode $n) => $o->setByStatus($n->getObjectValue([AlertStatusCounts::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'total' => fn(ParseNode $n) => $o->setTotal($n->getIntegerValue()),
        ];
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
     * Gets the total property value. The total number of alerts.
     * @return int|null
    */
    public function getTotal(): ?int {
        $val = $this->getBackingStore()->get('total');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'total'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('active', $this->getActive());
        $writer->writeObjectValue('bySeverity', $this->getBySeverity());
        $writer->writeObjectValue('byStatus', $this->getByStatus());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('total', $this->getTotal());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the active property value. The number of active alerts.
     * @param int|null $value Value to set for the active property.
    */
    public function setActive(?int $value): void {
        $this->getBackingStore()->set('active', $value);
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
     * Sets the bySeverity property value. The alert counts grouped by incident severity.
     * @param IncidentSeverityCounts|null $value Value to set for the bySeverity property.
    */
    public function setBySeverity(?IncidentSeverityCounts $value): void {
        $this->getBackingStore()->set('bySeverity', $value);
    }

    /**
     * Sets the byStatus property value. The alert counts grouped by alert status.
     * @param AlertStatusCounts|null $value Value to set for the byStatus property.
    */
    public function setByStatus(?AlertStatusCounts $value): void {
        $this->getBackingStore()->set('byStatus', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the total property value. The total number of alerts.
     * @param int|null $value Value to set for the total property.
    */
    public function setTotal(?int $value): void {
        $this->getBackingStore()->set('total', $value);
    }

}
