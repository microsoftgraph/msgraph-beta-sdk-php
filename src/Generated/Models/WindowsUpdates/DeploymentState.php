<?php

namespace Microsoft\Graph\Beta\Generated\Models\WindowsUpdates;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeploymentState implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<DeploymentStateReason>|null $reasons Specifies the reasons the deployment has its state value. Read-only. */
    private ?array $reasons = null;
    
    /** @var RequestedDeploymentStateValue|null $requestedValue Specifies the requested state of the deployment. Supports a subset of the values for requestedDeploymentStateValue. Possible values are: none, paused, unknownFutureValue. */
    private ?RequestedDeploymentStateValue $requestedValue = null;
    
    /** @var DeploymentStateValue|null $value Specifies the state of the deployment. Supports a subset of the values for deploymentStateValue. Possible values are: scheduled, offering, paused, unknownFutureValue. Read-only. */
    private ?DeploymentStateValue $value = null;
    
    /**
     * Instantiates a new deploymentState and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeploymentState
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeploymentState {
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
        return  [
            'reasons' => function (self $o, ParseNode $n) { $o->setReasons($n->getCollectionOfObjectValues(DeploymentStateReason::class)); },
            'requestedValue' => function (self $o, ParseNode $n) { $o->setRequestedValue($n->getEnumValue(RequestedDeploymentStateValue::class)); },
            'value' => function (self $o, ParseNode $n) { $o->setValue($n->getEnumValue(DeploymentStateValue::class)); },
        ];
    }

    /**
     * Gets the reasons property value. Specifies the reasons the deployment has its state value. Read-only.
     * @return array<DeploymentStateReason>|null
    */
    public function getReasons(): ?array {
        return $this->reasons;
    }

    /**
     * Gets the requestedValue property value. Specifies the requested state of the deployment. Supports a subset of the values for requestedDeploymentStateValue. Possible values are: none, paused, unknownFutureValue.
     * @return RequestedDeploymentStateValue|null
    */
    public function getRequestedValue(): ?RequestedDeploymentStateValue {
        return $this->requestedValue;
    }

    /**
     * Gets the value property value. Specifies the state of the deployment. Supports a subset of the values for deploymentStateValue. Possible values are: scheduled, offering, paused, unknownFutureValue. Read-only.
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
     * Sets the reasons property value. Specifies the reasons the deployment has its state value. Read-only.
     *  @param array<DeploymentStateReason>|null $value Value to set for the reasons property.
    */
    public function setReasons(?array $value ): void {
        $this->reasons = $value;
    }

    /**
     * Sets the requestedValue property value. Specifies the requested state of the deployment. Supports a subset of the values for requestedDeploymentStateValue. Possible values are: none, paused, unknownFutureValue.
     *  @param RequestedDeploymentStateValue|null $value Value to set for the requestedValue property.
    */
    public function setRequestedValue(?RequestedDeploymentStateValue $value ): void {
        $this->requestedValue = $value;
    }

    /**
     * Sets the value property value. Specifies the state of the deployment. Supports a subset of the values for deploymentStateValue. Possible values are: scheduled, offering, paused, unknownFutureValue. Read-only.
     *  @param DeploymentStateValue|null $value Value to set for the value property.
    */
    public function setValue(?DeploymentStateValue $value ): void {
        $this->value = $value;
    }

}
