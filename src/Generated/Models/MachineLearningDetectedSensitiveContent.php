<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MachineLearningDetectedSensitiveContent extends DetectedSensitiveContent implements Parsable 
{
    /**
     * Instantiates a new machineLearningDetectedSensitiveContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MachineLearningDetectedSensitiveContent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MachineLearningDetectedSensitiveContent {
        return new MachineLearningDetectedSensitiveContent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'matchTolerance' => fn(ParseNode $n) => $o->setMatchTolerance($n->getEnumValue(MlClassificationMatchTolerance::class)),
            'modelVersion' => fn(ParseNode $n) => $o->setModelVersion($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the matchTolerance property value. The matchTolerance property
     * @return MlClassificationMatchTolerance|null
    */
    public function getMatchTolerance(): ?MlClassificationMatchTolerance {
        $val = $this->getBackingStore()->get('matchTolerance');
        if (is_null($val) || $val instanceof MlClassificationMatchTolerance) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchTolerance'");
    }

    /**
     * Gets the modelVersion property value. The modelVersion property
     * @return string|null
    */
    public function getModelVersion(): ?string {
        $val = $this->getBackingStore()->get('modelVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modelVersion'");
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('matchTolerance', $this->getMatchTolerance());
        $writer->writeStringValue('modelVersion', $this->getModelVersion());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the matchTolerance property value. The matchTolerance property
     * @param MlClassificationMatchTolerance|null $value Value to set for the matchTolerance property.
    */
    public function setMatchTolerance(?MlClassificationMatchTolerance $value): void {
        $this->getBackingStore()->set('matchTolerance', $value);
    }

    /**
     * Sets the modelVersion property value. The modelVersion property
     * @param string|null $value Value to set for the modelVersion property.
    */
    public function setModelVersion(?string $value): void {
        $this->getBackingStore()->set('modelVersion', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
