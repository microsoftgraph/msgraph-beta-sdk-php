<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DlpEvaluationWindowsDevicesInput extends DlpEvaluationInput implements Parsable 
{
    /**
     * Instantiates a new dlpEvaluationWindowsDevicesInput and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.dlpEvaluationWindowsDevicesInput');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DlpEvaluationWindowsDevicesInput
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DlpEvaluationWindowsDevicesInput {
        return new DlpEvaluationWindowsDevicesInput();
    }

    /**
     * Gets the contentProperties property value. The contentProperties property
     * @return ContentProperties|null
    */
    public function getContentProperties(): ?ContentProperties {
        $val = $this->getBackingStore()->get('contentProperties');
        if (is_null($val) || $val instanceof ContentProperties) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentProperties'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentProperties' => fn(ParseNode $n) => $o->setContentProperties($n->getObjectValue([ContentProperties::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'sharedBy' => fn(ParseNode $n) => $o->setSharedBy($n->getStringValue()),
        ]);
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
     * Gets the sharedBy property value. The sharedBy property
     * @return string|null
    */
    public function getSharedBy(): ?string {
        $val = $this->getBackingStore()->get('sharedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sharedBy'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contentProperties', $this->getContentProperties());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('sharedBy', $this->getSharedBy());
    }

    /**
     * Sets the contentProperties property value. The contentProperties property
     * @param ContentProperties|null $value Value to set for the contentProperties property.
    */
    public function setContentProperties(?ContentProperties $value): void {
        $this->getBackingStore()->set('contentProperties', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the sharedBy property value. The sharedBy property
     * @param string|null $value Value to set for the sharedBy property.
    */
    public function setSharedBy(?string $value): void {
        $this->getBackingStore()->set('sharedBy', $value);
    }

}
