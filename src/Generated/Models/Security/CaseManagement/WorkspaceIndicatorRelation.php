<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WorkspaceIndicatorRelation extends Relation implements Parsable 
{
    /**
     * Instantiates a new WorkspaceIndicatorRelation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.workspaceIndicatorRelation');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WorkspaceIndicatorRelation
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WorkspaceIndicatorRelation {
        return new WorkspaceIndicatorRelation();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'resourceGroupName' => fn(ParseNode $n) => $o->setResourceGroupName($n->getStringValue()),
            'subscriptionId' => fn(ParseNode $n) => $o->setSubscriptionId($n->getStringValue()),
            'workspaceName' => fn(ParseNode $n) => $o->setWorkspaceName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the resourceGroupName property value. The Azure resource group name for the workspace.
     * @return string|null
    */
    public function getResourceGroupName(): ?string {
        $val = $this->getBackingStore()->get('resourceGroupName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'resourceGroupName'");
    }

    /**
     * Gets the subscriptionId property value. The Azure subscription identifier for the workspace.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        $val = $this->getBackingStore()->get('subscriptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'subscriptionId'");
    }

    /**
     * Gets the workspaceName property value. The Log Analytics workspace name.
     * @return string|null
    */
    public function getWorkspaceName(): ?string {
        $val = $this->getBackingStore()->get('workspaceName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workspaceName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('resourceGroupName', $this->getResourceGroupName());
        $writer->writeStringValue('subscriptionId', $this->getSubscriptionId());
        $writer->writeStringValue('workspaceName', $this->getWorkspaceName());
    }

    /**
     * Sets the resourceGroupName property value. The Azure resource group name for the workspace.
     * @param string|null $value Value to set for the resourceGroupName property.
    */
    public function setResourceGroupName(?string $value): void {
        $this->getBackingStore()->set('resourceGroupName', $value);
    }

    /**
     * Sets the subscriptionId property value. The Azure subscription identifier for the workspace.
     * @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('subscriptionId', $value);
    }

    /**
     * Sets the workspaceName property value. The Log Analytics workspace name.
     * @param string|null $value Value to set for the workspaceName property.
    */
    public function setWorkspaceName(?string $value): void {
        $this->getBackingStore()->set('workspaceName', $value);
    }

}
