<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ApprovalWorkflowProvider extends Entity implements Parsable 
{
    /**
     * Instantiates a new ApprovalWorkflowProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalWorkflowProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalWorkflowProvider {
        return new ApprovalWorkflowProvider();
    }

    /**
     * Gets the businessFlows property value. The businessFlows property
     * @return array<BusinessFlow>|null
    */
    public function getBusinessFlows(): ?array {
        $val = $this->getBackingStore()->get('businessFlows');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BusinessFlow::class);
            /** @var array<BusinessFlow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'businessFlows'");
    }

    /**
     * Gets the businessFlowsWithRequestsAwaitingMyDecision property value. The businessFlowsWithRequestsAwaitingMyDecision property
     * @return array<BusinessFlow>|null
    */
    public function getBusinessFlowsWithRequestsAwaitingMyDecision(): ?array {
        $val = $this->getBackingStore()->get('businessFlowsWithRequestsAwaitingMyDecision');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, BusinessFlow::class);
            /** @var array<BusinessFlow>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'businessFlowsWithRequestsAwaitingMyDecision'");
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'businessFlows' => fn(ParseNode $n) => $o->setBusinessFlows($n->getCollectionOfObjectValues([BusinessFlow::class, 'createFromDiscriminatorValue'])),
            'businessFlowsWithRequestsAwaitingMyDecision' => fn(ParseNode $n) => $o->setBusinessFlowsWithRequestsAwaitingMyDecision($n->getCollectionOfObjectValues([BusinessFlow::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'policyTemplates' => fn(ParseNode $n) => $o->setPolicyTemplates($n->getCollectionOfObjectValues([GovernancePolicyTemplate::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the policyTemplates property value. The policyTemplates property
     * @return array<GovernancePolicyTemplate>|null
    */
    public function getPolicyTemplates(): ?array {
        $val = $this->getBackingStore()->get('policyTemplates');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GovernancePolicyTemplate::class);
            /** @var array<GovernancePolicyTemplate>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'policyTemplates'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('businessFlows', $this->getBusinessFlows());
        $writer->writeCollectionOfObjectValues('businessFlowsWithRequestsAwaitingMyDecision', $this->getBusinessFlowsWithRequestsAwaitingMyDecision());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('policyTemplates', $this->getPolicyTemplates());
    }

    /**
     * Sets the businessFlows property value. The businessFlows property
     * @param array<BusinessFlow>|null $value Value to set for the businessFlows property.
    */
    public function setBusinessFlows(?array $value): void {
        $this->getBackingStore()->set('businessFlows', $value);
    }

    /**
     * Sets the businessFlowsWithRequestsAwaitingMyDecision property value. The businessFlowsWithRequestsAwaitingMyDecision property
     * @param array<BusinessFlow>|null $value Value to set for the businessFlowsWithRequestsAwaitingMyDecision property.
    */
    public function setBusinessFlowsWithRequestsAwaitingMyDecision(?array $value): void {
        $this->getBackingStore()->set('businessFlowsWithRequestsAwaitingMyDecision', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the policyTemplates property value. The policyTemplates property
     * @param array<GovernancePolicyTemplate>|null $value Value to set for the policyTemplates property.
    */
    public function setPolicyTemplates(?array $value): void {
        $this->getBackingStore()->set('policyTemplates', $value);
    }

}
