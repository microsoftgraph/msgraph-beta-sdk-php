<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class VirtualEventPresenterInfo extends MeetingParticipantInfo implements Parsable 
{
    /**
     * Instantiates a new virtualEventPresenterInfo and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.virtualEventPresenterInfo');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return VirtualEventPresenterInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): VirtualEventPresenterInfo {
        return new VirtualEventPresenterInfo();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'presenterDetails' => fn(ParseNode $n) => $o->setPresenterDetails($n->getObjectValue([VirtualEventPresenterDetails::class, 'createFromDiscriminatorValue'])),
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
     * Gets the presenterDetails property value. The presenterDetails property
     * @return VirtualEventPresenterDetails|null
    */
    public function getPresenterDetails(): ?VirtualEventPresenterDetails {
        $val = $this->getBackingStore()->get('presenterDetails');
        if (is_null($val) || $val instanceof VirtualEventPresenterDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presenterDetails'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('presenterDetails', $this->getPresenterDetails());
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the presenterDetails property value. The presenterDetails property
     * @param VirtualEventPresenterDetails|null $value Value to set for the presenterDetails property.
    */
    public function setPresenterDetails(?VirtualEventPresenterDetails $value): void {
        $this->getBackingStore()->set('presenterDetails', $value);
    }

}
