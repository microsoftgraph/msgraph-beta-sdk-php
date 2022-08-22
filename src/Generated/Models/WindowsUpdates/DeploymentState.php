<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeploymentState implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<DeploymentStateReason>|null $reasons Specifies the reasons the deployment has its state value. Read-only.
    */
    private ?array $reasons = null;
    
    /**
     * @var RequestedDeploymentStateValue|null $requestedValue The requestedValue property
    */
    private ?RequestedDeploymentStateValue $requestedValue = null;
    
    /**
     * @var DeploymentStateValue|null $value The value property
    */
    private ?DeploymentStateValue $value = null;
    
    /**
     * Instantiates a new deploymentState and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.windowsUpdates.deploymentState');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeploymentState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeploymentState {
        return new DeploymentState();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'reasons' => function (ParseNode $n) use ($o) { $o->setReasons($n->getCollectionOfObjectValues(array(DeploymentStateReason::class, 'createFromDiscriminatorValue'))); },
            'requestedValue' => function (ParseNode $n) use ($o) { $o->setRequestedValue($n->getEnumValue(RequestedDeploymentStateValue::class)); },
            'value' => function (ParseNode $n) use ($o) { $o->setValue($n->getEnumValue(DeploymentStateValue::class)); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the reasons property value. Specifies the reasons the deployment has its state value. Read-only.
     * @return array<DeploymentStateReason>|null
    */
    public function getReasons(): ?array {
        return $this->reasons;
    }

    /**
     * Gets the requestedValue property value. The requestedValue property
     * @return RequestedDeploymentStateValue|null
    */
    public function getRequestedValue(): ?RequestedDeploymentStateValue {
        return $this->requestedValue;
    }

    /**
     * Gets the value property value. The value property
     * @return DeploymentStateValue|null
    */
    public function getValue(): ?DeploymentStateValue {
        return $this->value;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfObjectValues('reasons', $this->reasons);
        $writer->writeEnumValue('requestedValue', $this->requestedValue);
        $writer->writeEnumValue('value', $this->value);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the reasons property value. Specifies the reasons the deployment has its state value. Read-only.
     *  @param array<DeploymentStateReason>|null $value Value to set for the reasons property.
    */
    public function setReasons(?array $value ): void {
        $this->reasons = $value;
    }

    /**
     * Sets the requestedValue property value. The requestedValue property
     *  @param RequestedDeploymentStateValue|null $value Value to set for the requestedValue property.
    */
    public function setRequestedValue(?RequestedDeploymentStateValue $value ): void {
        $this->requestedValue = $value;
    }

    /**
     * Sets the value property value. The value property
     *  @param DeploymentStateValue|null $value Value to set for the value property.
    */
    public function setValue(?DeploymentStateValue $value ): void {
        $this->value = $value;
    }

}
