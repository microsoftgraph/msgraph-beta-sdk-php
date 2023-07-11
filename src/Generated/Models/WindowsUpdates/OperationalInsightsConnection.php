<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OperationalInsightsConnection extends ResourceConnection implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new operationalInsightsConnection and sets the default values.
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
        $val = $this->getBackingStore()->get('azureResourceGroupName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureResourceGroupName'");
    }

    /**
     * Gets the azureSubscriptionId property value. The Azure subscription ID that contains the Log Analytics workspace.
     * @return string|null
    */
    public function getAzureSubscriptionId(): ?string {
        $val = $this->getBackingStore()->get('azureSubscriptionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'azureSubscriptionId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'azureResourceGroupName' => fn(ParseNode $n) => $o->setAzureResourceGroupName($n->getStringValue()),
            'azureSubscriptionId' => fn(ParseNode $n) => $o->setAzureSubscriptionId($n->getStringValue()),
            'workspaceName' => fn(ParseNode $n) => $o->setWorkspaceName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the workspaceName property value. The name of the Log Analytics workspace.
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
        $writer->writeStringValue('azureResourceGroupName', $this->getAzureResourceGroupName());
        $writer->writeStringValue('azureSubscriptionId', $this->getAzureSubscriptionId());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('workspaceName', $this->getWorkspaceName());
    }

    /**
     * Sets the azureResourceGroupName property value. The name of the Azure resource group that contains the Log Analytics workspace.
     * @param string|null $value Value to set for the azureResourceGroupName property.
    */
    public function setAzureResourceGroupName(?string $value): void {
        $this->getBackingStore()->set('azureResourceGroupName', $value);
    }

    /**
     * Sets the azureSubscriptionId property value. The Azure subscription ID that contains the Log Analytics workspace.
     * @param string|null $value Value to set for the azureSubscriptionId property.
    */
    public function setAzureSubscriptionId(?string $value): void {
        $this->getBackingStore()->set('azureSubscriptionId', $value);
    }

    /**
     * Sets the workspaceName property value. The name of the Log Analytics workspace.
     * @param string|null $value Value to set for the workspaceName property.
    */
    public function setWorkspaceName(?string $value): void {
        $this->getBackingStore()->set('workspaceName', $value);
    }

}
