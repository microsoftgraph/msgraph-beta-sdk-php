<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OperationalInsightsConnection extends ResourceConnection implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $azureResourceGroupName The azureResourceGroupName property
    */
    private ?string $azureResourceGroupName = null;
    
    /**
     * @var string|null $azureSubscriptionId The azureSubscriptionId property
    */
    private ?string $azureSubscriptionId = null;
    
    /**
     * @var string|null $workspaceName The workspaceName property
    */
    private ?string $workspaceName = null;
    
    /**
     * Instantiates a new OperationalInsightsConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the azureResourceGroupName property value. The azureResourceGroupName property
     * @return string|null
    */
    public function getAzureResourceGroupName(): ?string {
        return $this->azureResourceGroupName;
    }

    /**
     * Gets the azureSubscriptionId property value. The azureSubscriptionId property
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
     * Gets the workspaceName property value. The workspaceName property
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
     * Sets the azureResourceGroupName property value. The azureResourceGroupName property
     *  @param string|null $value Value to set for the azureResourceGroupName property.
    */
    public function setAzureResourceGroupName(?string $value ): void {
        $this->azureResourceGroupName = $value;
    }

    /**
     * Sets the azureSubscriptionId property value. The azureSubscriptionId property
     *  @param string|null $value Value to set for the azureSubscriptionId property.
    */
    public function setAzureSubscriptionId(?string $value ): void {
        $this->azureSubscriptionId = $value;
    }

    /**
     * Sets the workspaceName property value. The workspaceName property
     *  @param string|null $value Value to set for the workspaceName property.
    */
    public function setWorkspaceName(?string $value ): void {
        $this->workspaceName = $value;
    }

}
