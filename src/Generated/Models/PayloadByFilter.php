<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * This entity represents a single payload with requested assignment filter Id
*/
class PayloadByFilter implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new payloadByFilter and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * Gets the assignmentFilterType property value. Represents type of the assignment filter.
     * @return DeviceAndAppManagementAssignmentFilterType|null
    */
    public function getAssignmentFilterType(): ?DeviceAndAppManagementAssignmentFilterType {
        $val = $this->getBackingStore()->get('assignmentFilterType');
        if (is_null($val) || $val instanceof DeviceAndAppManagementAssignmentFilterType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignmentFilterType'");
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'assignmentFilterType' => fn(ParseNode $n) => $o->setAssignmentFilterType($n->getEnumValue(DeviceAndAppManagementAssignmentFilterType::class)),
            'groupId' => fn(ParseNode $n) => $o->setGroupId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'payloadId' => fn(ParseNode $n) => $o->setPayloadId($n->getStringValue()),
            'payloadType' => fn(ParseNode $n) => $o->setPayloadType($n->getEnumValue(AssociatedAssignmentPayloadType::class)),
        ];
    }

    /**
     * Gets the groupId property value. The Azure AD security group ID
     * @return string|null
    */
    public function getGroupId(): ?string {
        $val = $this->getBackingStore()->get('groupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupId'");
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
     * Gets the payloadId property value. The policy identifier
     * @return string|null
    */
    public function getPayloadId(): ?string {
        $val = $this->getBackingStore()->get('payloadId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloadId'");
    }

    /**
     * Gets the payloadType property value. This enum represents associated assignment payload type
     * @return AssociatedAssignmentPayloadType|null
    */
    public function getPayloadType(): ?AssociatedAssignmentPayloadType {
        $val = $this->getBackingStore()->get('payloadType');
        if (is_null($val) || $val instanceof AssociatedAssignmentPayloadType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'payloadType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('assignmentFilterType', $this->getAssignmentFilterType());
        $writer->writeStringValue('groupId', $this->getGroupId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('payloadId', $this->getPayloadId());
        $writer->writeEnumValue('payloadType', $this->getPayloadType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the assignmentFilterType property value. Represents type of the assignment filter.
     * @param DeviceAndAppManagementAssignmentFilterType|null $value Value to set for the assignmentFilterType property.
    */
    public function setAssignmentFilterType(?DeviceAndAppManagementAssignmentFilterType $value): void {
        $this->getBackingStore()->set('assignmentFilterType', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the groupId property value. The Azure AD security group ID
     * @param string|null $value Value to set for the groupId property.
    */
    public function setGroupId(?string $value): void {
        $this->getBackingStore()->set('groupId', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the payloadId property value. The policy identifier
     * @param string|null $value Value to set for the payloadId property.
    */
    public function setPayloadId(?string $value): void {
        $this->getBackingStore()->set('payloadId', $value);
    }

    /**
     * Sets the payloadType property value. This enum represents associated assignment payload type
     * @param AssociatedAssignmentPayloadType|null $value Value to set for the payloadType property.
    */
    public function setPayloadType(?AssociatedAssignmentPayloadType $value): void {
        $this->getBackingStore()->set('payloadType', $value);
    }

}
