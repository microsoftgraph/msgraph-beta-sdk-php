<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MachineLearningDetectedSensitiveContent extends DetectedSensitiveContent implements Parsable 
{
    /**
     * Instantiates a new MachineLearningDetectedSensitiveContent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.machineLearningDetectedSensitiveContent');
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
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'matchTolerance' => fn(ParseNode $n) => $o->setMatchTolerance($n->getEnumValue(MlClassificationMatchTolerance::class)),
            'modelVersion' => fn(ParseNode $n) => $o->setModelVersion($n->getStringValue()),
        ]);
    }

    /**
     * Gets the matchTolerance property value. The matchTolerance property
     * @return MlClassificationMatchTolerance|null
    */
    public function getMatchTolerance(): ?MlClassificationMatchTolerance {
        return $this->getBackingStore()->get('matchTolerance');
    }

    /**
     * Gets the modelVersion property value. The modelVersion property
     * @return string|null
    */
    public function getModelVersion(): ?string {
        return $this->getBackingStore()->get('modelVersion');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('matchTolerance', $this->getMatchTolerance());
        $writer->writeStringValue('modelVersion', $this->getModelVersion());
    }

    /**
     * Sets the matchTolerance property value. The matchTolerance property
     *  @param MlClassificationMatchTolerance|null $value Value to set for the matchTolerance property.
    */
    public function setMatchTolerance(?MlClassificationMatchTolerance $value): void {
        $this->getBackingStore()->set('matchTolerance', $value);
    }

    /**
     * Sets the modelVersion property value. The modelVersion property
     *  @param string|null $value Value to set for the modelVersion property.
    */
    public function setModelVersion(?string $value): void {
        $this->getBackingStore()->set('modelVersion', $value);
    }

}
