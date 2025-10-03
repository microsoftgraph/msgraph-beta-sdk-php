<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApprovalSolution extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApprovalSolution and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalSolution
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalSolution {
        return new ApprovalSolution();
    }

    /**
     * Gets the approvalItems property value. A collection of approval items.
     * @return array<ApprovalItem>|null
    */
    public function getApprovalItems(): ?array {
        $val = $this->getBackingStore()->get('approvalItems');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApprovalItem::class);
            /** @var array<ApprovalItem>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'approvalItems'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'approvalItems' => fn(ParseNode $n) => $o->setApprovalItems($n->getCollectionOfObjectValues([ApprovalItem::class, 'createFromDiscriminatorValue'])),
            'operations' => fn(ParseNode $n) => $o->setOperations($n->getCollectionOfObjectValues([ApprovalOperation::class, 'createFromDiscriminatorValue'])),
            'provisioningStatus' => fn(ParseNode $n) => $o->setProvisioningStatus($n->getEnumValue(ProvisionState::class)),
        ]);
    }

    /**
     * Gets the operations property value. The operations property
     * @return array<ApprovalOperation>|null
    */
    public function getOperations(): ?array {
        $val = $this->getBackingStore()->get('operations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ApprovalOperation::class);
            /** @var array<ApprovalOperation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operations'");
    }

    /**
     * Gets the provisioningStatus property value. The approval provisioning status for a tenant on an environment. The possible values are: notProvisioned, provisioningInProgress, provisioningFailed, provisioningCompleted, unknownFutureValue.
     * @return ProvisionState|null
    */
    public function getProvisioningStatus(): ?ProvisionState {
        $val = $this->getBackingStore()->get('provisioningStatus');
        if (is_null($val) || $val instanceof ProvisionState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'provisioningStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('approvalItems', $this->getApprovalItems());
        $writer->writeCollectionOfObjectValues('operations', $this->getOperations());
        $writer->writeEnumValue('provisioningStatus', $this->getProvisioningStatus());
    }

    /**
     * Sets the approvalItems property value. A collection of approval items.
     * @param array<ApprovalItem>|null $value Value to set for the approvalItems property.
    */
    public function setApprovalItems(?array $value): void {
        $this->getBackingStore()->set('approvalItems', $value);
    }

    /**
     * Sets the operations property value. The operations property
     * @param array<ApprovalOperation>|null $value Value to set for the operations property.
    */
    public function setOperations(?array $value): void {
        $this->getBackingStore()->set('operations', $value);
    }

    /**
     * Sets the provisioningStatus property value. The approval provisioning status for a tenant on an environment. The possible values are: notProvisioned, provisioningInProgress, provisioningFailed, provisioningCompleted, unknownFutureValue.
     * @param ProvisionState|null $value Value to set for the provisioningStatus property.
    */
    public function setProvisioningStatus(?ProvisionState $value): void {
        $this->getBackingStore()->set('provisioningStatus', $value);
    }

}
