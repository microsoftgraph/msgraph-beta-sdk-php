<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class QualityUpdateFilter extends WindowsUpdateFilter implements Parsable 
{
    /**
     * Instantiates a new QualityUpdateFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.qualityUpdateFilter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return QualityUpdateFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): QualityUpdateFilter {
        return new QualityUpdateFilter();
    }

    /**
     * Gets the cadence property value. Specifies the cadence for publishing quality updates of the filter. The possible values are: monthly, outOfBand, unknownFutureValue.
     * @return QualityUpdateCadence|null
    */
    public function getCadence(): ?QualityUpdateCadence {
        $val = $this->getBackingStore()->get('cadence');
        if (is_null($val) || $val instanceof QualityUpdateCadence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cadence'");
    }

    /**
     * Gets the classification property value. Specifies the quality update classification of the filter. The possible values are: all, security, nonSecurity, unknownFutureValue.
     * @return QualityUpdateClassification|null
    */
    public function getClassification(): ?QualityUpdateClassification {
        $val = $this->getBackingStore()->get('classification');
        if (is_null($val) || $val instanceof QualityUpdateClassification) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'classification'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'cadence' => fn(ParseNode $n) => $o->setCadence($n->getEnumValue(QualityUpdateCadence::class)),
            'classification' => fn(ParseNode $n) => $o->setClassification($n->getEnumValue(QualityUpdateClassification::class)),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('cadence', $this->getCadence());
        $writer->writeEnumValue('classification', $this->getClassification());
    }

    /**
     * Sets the cadence property value. Specifies the cadence for publishing quality updates of the filter. The possible values are: monthly, outOfBand, unknownFutureValue.
     * @param QualityUpdateCadence|null $value Value to set for the cadence property.
    */
    public function setCadence(?QualityUpdateCadence $value): void {
        $this->getBackingStore()->set('cadence', $value);
    }

    /**
     * Sets the classification property value. Specifies the quality update classification of the filter. The possible values are: all, security, nonSecurity, unknownFutureValue.
     * @param QualityUpdateClassification|null $value Value to set for the classification property.
    */
    public function setClassification(?QualityUpdateClassification $value): void {
        $this->getBackingStore()->set('classification', $value);
    }

}
