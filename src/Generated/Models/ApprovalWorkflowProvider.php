<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ApprovalWorkflowProvider extends Entity 
{
    /** @var array<BusinessFlow>|null $businessFlows The businessFlows property */
    private ?array $businessFlows = null;
    
    /** @var array<BusinessFlow>|null $businessFlowsWithRequestsAwaitingMyDecision The businessFlowsWithRequestsAwaitingMyDecision property */
    private ?array $businessFlowsWithRequestsAwaitingMyDecision = null;
    
    /** @var string|null $displayName The displayName property */
    private ?string $displayName = null;
    
    /** @var array<GovernancePolicyTemplate>|null $policyTemplates The policyTemplates property */
    private ?array $policyTemplates = null;
    
    /**
     * Instantiates a new approvalWorkflowProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ApprovalWorkflowProvider
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ApprovalWorkflowProvider {
        return new ApprovalWorkflowProvider();
    }

    /**
     * Gets the businessFlows property value. The businessFlows property
     * @return array<BusinessFlow>|null
    */
    public function getBusinessFlows(): ?array {
        return $this->businessFlows;
    }

    /**
     * Gets the businessFlowsWithRequestsAwaitingMyDecision property value. The businessFlowsWithRequestsAwaitingMyDecision property
     * @return array<BusinessFlow>|null
    */
    public function getBusinessFlowsWithRequestsAwaitingMyDecision(): ?array {
        return $this->businessFlowsWithRequestsAwaitingMyDecision;
    }

    /**
     * Gets the displayName property value. The displayName property
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'businessFlows' => function (self $o, ParseNode $n) { $o->setBusinessFlows($n->getCollectionOfObjectValues(BusinessFlow::class)); },
            'businessFlowsWithRequestsAwaitingMyDecision' => function (self $o, ParseNode $n) { $o->setBusinessFlowsWithRequestsAwaitingMyDecision($n->getCollectionOfObjectValues(BusinessFlow::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'policyTemplates' => function (self $o, ParseNode $n) { $o->setPolicyTemplates($n->getCollectionOfObjectValues(GovernancePolicyTemplate::class)); },
        ]);
    }

    /**
     * Gets the policyTemplates property value. The policyTemplates property
     * @return array<GovernancePolicyTemplate>|null
    */
    public function getPolicyTemplates(): ?array {
        return $this->policyTemplates;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('businessFlows', $this->businessFlows);
        $writer->writeCollectionOfObjectValues('businessFlowsWithRequestsAwaitingMyDecision', $this->businessFlowsWithRequestsAwaitingMyDecision);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('policyTemplates', $this->policyTemplates);
    }

    /**
     * Sets the businessFlows property value. The businessFlows property
     *  @param array<BusinessFlow>|null $value Value to set for the businessFlows property.
    */
    public function setBusinessFlows(?array $value ): void {
        $this->businessFlows = $value;
    }

    /**
     * Sets the businessFlowsWithRequestsAwaitingMyDecision property value. The businessFlowsWithRequestsAwaitingMyDecision property
     *  @param array<BusinessFlow>|null $value Value to set for the businessFlowsWithRequestsAwaitingMyDecision property.
    */
    public function setBusinessFlowsWithRequestsAwaitingMyDecision(?array $value ): void {
        $this->businessFlowsWithRequestsAwaitingMyDecision = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the policyTemplates property value. The policyTemplates property
     *  @param array<GovernancePolicyTemplate>|null $value Value to set for the policyTemplates property.
    */
    public function setPolicyTemplates(?array $value ): void {
        $this->policyTemplates = $value;
    }

}
