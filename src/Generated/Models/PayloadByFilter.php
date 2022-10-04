<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PayloadByFilter implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceAndAppManagementAssignmentFilterType|null $assignmentFilterType Represents type of the assignment filter.
    */
    private ?DeviceAndAppManagementAssignmentFilterType $assignmentFilterType = null;
    
    /**
     * @var string|null $groupId The Azure AD security group ID
    */
    private ?string $groupId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $payloadId The policy identifier
    */
    private ?string $payloadId = null;
    
    /**
     * @var AssociatedAssignmentPayloadType|null $payloadType This enum represents associated assignment payload type
    */
    private ?AssociatedAssignmentPayloadType $payloadType = null;
    
    /**
     * Instantiates a new payloadByFilter and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.payloadByFilter');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PayloadByFilter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PayloadByFilter {
        return new PayloadByFilter();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the assignmentFilterType property value. Represents type of the assignment filter.
     * @return DeviceAndAppManagementAssignmentFilterType|null
    */
    public function getAssignmentFilterType(): ?DeviceAndAppManagementAssignmentFilterType {
        return $this->assignmentFilterType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignmentFilterType' => function (ParseNode $n) use ($o) { $o->setAssignmentFilterType($n->getEnumValue(DeviceAndAppManagementAssignmentFilterType::class)); },
            'groupId' => function (ParseNode $n) use ($o) { $o->setGroupId($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'payloadId' => function (ParseNode $n) use ($o) { $o->setPayloadId($n->getStringValue()); },
            'payloadType' => function (ParseNode $n) use ($o) { $o->setPayloadType($n->getEnumValue(AssociatedAssignmentPayloadType::class)); },
        ];
    }

    /**
     * Gets the groupId property value. The Azure AD security group ID
     * @return string|null
    */
    public function getGroupId(): ?string {
        return $this->groupId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the payloadId property value. The policy identifier
     * @return string|null
    */
    public function getPayloadId(): ?string {
        return $this->payloadId;
    }

    /**
     * Gets the payloadType property value. This enum represents associated assignment payload type
     * @return AssociatedAssignmentPayloadType|null
    */
    public function getPayloadType(): ?AssociatedAssignmentPayloadType {
        return $this->payloadType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignmentFilterType', $this->assignmentFilterType);
        $writer->writeStringValue('groupId', $this->groupId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('payloadId', $this->payloadId);
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
     * Sets the assignmentFilterType property value. Represents type of the assignment filter.
     *  @param DeviceAndAppManagementAssignmentFilterType|null $value Value to set for the assignmentFilterType property.
    */
    public function setAssignmentFilterType(?DeviceAndAppManagementAssignmentFilterType $value ): void {
        $this->assignmentFilterType = $value;
    }

    /**
     * Sets the groupId property value. The Azure AD security group ID
     *  @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value ): void {
        $this->groupId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the payloadId property value. The policy identifier
     *  @param string|null $value Value to set for the payloadId property.
    */
    public function setPayloadId(?string $value ): void {
        $this->payloadId = $value;
    }

    /**
     * Sets the payloadType property value. This enum represents associated assignment payload type
     *  @param AssociatedAssignmentPayloadType|null $value Value to set for the payloadType property.
    */
    public function setPayloadType(?AssociatedAssignmentPayloadType $value ): void {
        $this->payloadType = $value;
    }

}
