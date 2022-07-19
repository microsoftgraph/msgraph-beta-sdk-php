<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OperationalInsightsConnection extends ResourceConnection implements Parsable 
{
    /**
     * @var string|null $azureResourceGroupName The name of the Azure resource group that contains the Log Analytics workspace.
    */
    private ?string $azureResourceGroupName = null;
    
    /**
     * @var string|null $azureSubscriptionId The Azure subscription ID that contains the Log Analytics workspace.
    */
    private ?string $azureSubscriptionId = null;
    
    /**
     * @var string|null $workspaceName The name of the Log Analytics workspace.
    */
    private ?string $workspaceName = null;
    
    /**
     * Instantiates a new OperationalInsightsConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsUpdates.operationalInsightsConnection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OperationalInsightsConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OperationalInsightsConnection {
        return new OperationalInsightsConnection();
    }

    /**
     * Gets the azureResourceGroupName property value. The name of the Azure resource group that contains the Log Analytics workspace.
     * @return string|null
    */
    public function getAzureResourceGroupName(): ?string {
        return $this->azureResourceGroupName;
    }

    /**
     * Gets the azureSubscriptionId property value. The Azure subscription ID that contains the Log Analytics workspace.
     * @return string|null
    */
    public function getAzureSubscriptionId(): ?string {
        return $this->azureSubscriptionId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureResourceGroupName' => function (ParseNode $n) use ($o) { $o->setAzureResourceGroupName($n->getStringValue()); },
            'azureSubscriptionId' => function (ParseNode $n) use ($o) { $o->setAzureSubscriptionId($n->getStringValue()); },
            'workspaceName' => function (ParseNode $n) use ($o) { $o->setWorkspaceName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the workspaceName property value. The name of the Log Analytics workspace.
     * @return string|null
    */
    public function getWorkspaceName(): ?string {
        return $this->workspaceName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('azureResourceGroupName', $this->azureResourceGroupName);
        $writer->writeStringValue('azureSubscriptionId', $this->azureSubscriptionId);
        $writer->writeStringValue('workspaceName', $this->workspaceName);
    }

    /**
     * Sets the azureResourceGroupName property value. The name of the Azure resource group that contains the Log Analytics workspace.
     *  @param string|null $value Value to set for the azureResourceGroupName property.
    */
    public function setAzureResourceGroupName(?string $value ): void {
        $this->azureResourceGroupName = $value;
    }

    /**
     * Sets the azureSubscriptionId property value. The Azure subscription ID that contains the Log Analytics workspace.
     *  @param string|null $value Value to set for the azureSubscriptionId property.
    */
    public function setAzureSubscriptionId(?string $value ): void {
        $this->azureSubscriptionId = $value;
    }

    /**
     * Sets the workspaceName property value. The name of the Log Analytics workspace.
     *  @param string|null $value Value to set for the workspaceName property.
    */
    public function setWorkspaceName(?string $value ): void {
        $this->workspaceName = $value;
    }

}
