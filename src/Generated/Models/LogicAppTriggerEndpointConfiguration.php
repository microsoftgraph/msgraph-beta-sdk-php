<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LogicAppTriggerEndpointConfiguration extends CustomExtensionEndpointConfiguration implements Parsable 
{
    /**
     * @var string|null $logicAppWorkflowName The name of the logic app.
    */
    private ?string $logicAppWorkflowName = null;
    
    /**
     * @var string|null $resourceGroupName The Azure resource group name for the logic app.
    */
    private ?string $resourceGroupName = null;
    
    /**
     * @var string|null $subscriptionId Identifier of the Azure subscription for the logic app.
    */
    private ?string $subscriptionId = null;
    
    /**
     * Instantiates a new LogicAppTriggerEndpointConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.logicAppTriggerEndpointConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LogicAppTriggerEndpointConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LogicAppTriggerEndpointConfiguration {
        return new LogicAppTriggerEndpointConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'logicAppWorkflowName' => function (ParseNode $n) use ($o) { $o->setLogicAppWorkflowName($n->getStringValue()); },
            'resourceGroupName' => function (ParseNode $n) use ($o) { $o->setResourceGroupName($n->getStringValue()); },
            'subscriptionId' => function (ParseNode $n) use ($o) { $o->setSubscriptionId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the logicAppWorkflowName property value. The name of the logic app.
     * @return string|null
    */
    public function getLogicAppWorkflowName(): ?string {
        return $this->logicAppWorkflowName;
    }

    /**
     * Gets the resourceGroupName property value. The Azure resource group name for the logic app.
     * @return string|null
    */
    public function getResourceGroupName(): ?string {
        return $this->resourceGroupName;
    }

    /**
     * Gets the subscriptionId property value. Identifier of the Azure subscription for the logic app.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('logicAppWorkflowName', $this->logicAppWorkflowName);
        $writer->writeStringValue('resourceGroupName', $this->resourceGroupName);
        $writer->writeStringValue('subscriptionId', $this->subscriptionId);
    }

    /**
     * Sets the logicAppWorkflowName property value. The name of the logic app.
     *  @param string|null $value Value to set for the logicAppWorkflowName property.
    */
    public function setLogicAppWorkflowName(?string $value ): void {
        $this->logicAppWorkflowName = $value;
    }

    /**
     * Sets the resourceGroupName property value. The Azure resource group name for the logic app.
     *  @param string|null $value Value to set for the resourceGroupName property.
    */
    public function setResourceGroupName(?string $value ): void {
        $this->resourceGroupName = $value;
    }

    /**
     * Sets the subscriptionId property value. Identifier of the Azure subscription for the logic app.
     *  @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value ): void {
        $this->subscriptionId = $value;
    }

}
