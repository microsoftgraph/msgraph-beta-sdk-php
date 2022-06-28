<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PayloadCompatibleAssignmentFilter extends DeviceAndAppManagementAssignmentFilter implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var AssignmentFilterPayloadType|null $payloadType PayloadType of the Assignment Filter. Possible values are: notSet, enrollmentRestrictions.
    */
    private ?AssignmentFilterPayloadType $payloadType = null;
    
    /**
     * Instantiates a new PayloadCompatibleAssignmentFilter and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'payloadType' => function (ParseNode $n) use ($o) { $o->setPayloadType($n->getEnumValue(AssignmentFilterPayloadType::class)); },
        ]);
    }

    /**
     * Gets the payloadType property value. PayloadType of the Assignment Filter. Possible values are: notSet, enrollmentRestrictions.
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
     * Sets the payloadType property value. PayloadType of the Assignment Filter. Possible values are: notSet, enrollmentRestrictions.
     *  @param AssignmentFilterPayloadType|null $value Value to set for the payloadType property.
    */
    public function setPayloadType(?AssignmentFilterPayloadType $value ): void {
        $this->payloadType = $value;
    }

}
