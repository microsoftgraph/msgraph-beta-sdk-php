<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceScopeActionResult implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $deviceScopeAction The triggered action name. Possible values are: .
    */
    private ?string $deviceScopeAction = null;
    
    /**
     * @var string|null $deviceScopeId The unique identifier of the device scope the action was triggered on.
    */
    private ?string $deviceScopeId = null;
    
    /**
     * @var string|null $failedMessage The message indicates the reason the device scope action failed to trigger.
    */
    private ?string $failedMessage = null;
    
    /**
     * @var DeviceScopeActionStatus|null $status Indicates the status of the attempt device scope action. When succeeded, the action was succeessfully triggered, When failed, the action was failed to trigger. Possible values are: failed, succeeded, unknownFutureValue.
    */
    private ?DeviceScopeActionStatus $status = null;
    
    /**
     * Instantiates a new DeviceScopeActionResult and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceScopeActionResult
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceScopeActionResult {
        return new DeviceScopeActionResult();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceScopeAction property value. The triggered action name. Possible values are: .
     * @return string|null
    */
    public function getDeviceScopeAction(): ?string {
        return $this->deviceScopeAction;
    }

    /**
     * Gets the deviceScopeId property value. The unique identifier of the device scope the action was triggered on.
     * @return string|null
    */
    public function getDeviceScopeId(): ?string {
        return $this->deviceScopeId;
    }

    /**
     * Gets the failedMessage property value. The message indicates the reason the device scope action failed to trigger.
     * @return string|null
    */
    public function getFailedMessage(): ?string {
        return $this->failedMessage;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceScopeAction' => function (ParseNode $n) use ($o) { $o->setDeviceScopeAction($n->getStringValue()); },
            'deviceScopeId' => function (ParseNode $n) use ($o) { $o->setDeviceScopeId($n->getStringValue()); },
            'failedMessage' => function (ParseNode $n) use ($o) { $o->setFailedMessage($n->getStringValue()); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(DeviceScopeActionStatus::class)); },
        ];
    }

    /**
     * Gets the status property value. Indicates the status of the attempt device scope action. When succeeded, the action was succeessfully triggered, When failed, the action was failed to trigger. Possible values are: failed, succeeded, unknownFutureValue.
     * @return DeviceScopeActionStatus|null
    */
    public function getStatus(): ?DeviceScopeActionStatus {
        return $this->status;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('deviceScopeAction', $this->deviceScopeAction);
        $writer->writeStringValue('deviceScopeId', $this->deviceScopeId);
        $writer->writeStringValue('failedMessage', $this->failedMessage);
        $writer->writeEnumValue('status', $this->status);
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
     * Sets the deviceScopeAction property value. The triggered action name. Possible values are: .
     *  @param string|null $value Value to set for the deviceScopeAction property.
    */
    public function setDeviceScopeAction(?string $value ): void {
        $this->deviceScopeAction = $value;
    }

    /**
     * Sets the deviceScopeId property value. The unique identifier of the device scope the action was triggered on.
     *  @param string|null $value Value to set for the deviceScopeId property.
    */
    public function setDeviceScopeId(?string $value ): void {
        $this->deviceScopeId = $value;
    }

    /**
     * Sets the failedMessage property value. The message indicates the reason the device scope action failed to trigger.
     *  @param string|null $value Value to set for the failedMessage property.
    */
    public function setFailedMessage(?string $value ): void {
        $this->failedMessage = $value;
    }

    /**
     * Sets the status property value. Indicates the status of the attempt device scope action. When succeeded, the action was succeessfully triggered, When failed, the action was failed to trigger. Possible values are: failed, succeeded, unknownFutureValue.
     *  @param DeviceScopeActionStatus|null $value Value to set for the status property.
    */
    public function setStatus(?DeviceScopeActionStatus $value ): void {
        $this->status = $value;
    }

}
