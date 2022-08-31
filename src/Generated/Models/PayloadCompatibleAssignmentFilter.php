<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PayloadCompatibleAssignmentFilter extends DeviceAndAppManagementAssignmentFilter implements Parsable 
{
    /**
     * @var AssignmentFilterPayloadType|null $payloadType Represents the payload type AssignmentFilter is being assigned to.
    */
    private ?AssignmentFilterPayloadType $payloadType = null;
    
    /**
     * Instantiates a new PayloadCompatibleAssignmentFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.payloadCompatibleAssignmentFilter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PayloadCompatibleAssignmentFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PayloadCompatibleAssignmentFilter {
        return new PayloadCompatibleAssignmentFilter();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'payloadType' => function (ParseNode $n) use ($o) { $o->setPayloadType($n->getEnumValue(AssignmentFilterPayloadType::class)); },
        ]);
    }

    /**
     * Gets the payloadType property value. Represents the payload type AssignmentFilter is being assigned to.
     * @return AssignmentFilterPayloadType|null
    */
    public function getPayloadType(): ?AssignmentFilterPayloadType {
        return $this->payloadType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('payloadType', $this->payloadType);
    }

    /**
     * Sets the payloadType property value. Represents the payload type AssignmentFilter is being assigned to.
     *  @param AssignmentFilterPayloadType|null $value Value to set for the payloadType property.
    */
    public function setPayloadType(?AssignmentFilterPayloadType $value ): void {
        $this->payloadType = $value;
    }

}
