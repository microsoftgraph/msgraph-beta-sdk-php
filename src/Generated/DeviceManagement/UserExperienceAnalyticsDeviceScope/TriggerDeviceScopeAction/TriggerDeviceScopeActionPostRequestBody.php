<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\UserExperienceAnalyticsDeviceScope\TriggerDeviceScopeAction;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TriggerDeviceScopeActionPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var string|null $actionName The actionName property
    */
    private ?string $actionName = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $deviceScopeId The deviceScopeId property
    */
    private ?string $deviceScopeId = null;
    
    /**
     * Instantiates a new triggerDeviceScopeActionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TriggerDeviceScopeActionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TriggerDeviceScopeActionPostRequestBody {
        return new TriggerDeviceScopeActionPostRequestBody();
    }

    /**
     * Gets the actionName property value. The actionName property
     * @return string|null
    */
    public function getActionName(): ?string {
        return $this->actionName;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceScopeId property value. The deviceScopeId property
     * @return string|null
    */
    public function getDeviceScopeId(): ?string {
        return $this->deviceScopeId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'actionName' => function (ParseNode $n) use ($o) { $o->setActionName($n->getStringValue()); },
            'deviceScopeId' => function (ParseNode $n) use ($o) { $o->setDeviceScopeId($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('actionName', $this->actionName);
        $writer->writeStringValue('deviceScopeId', $this->deviceScopeId);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the actionName property value. The actionName property
     *  @param string|null $value Value to set for the actionName property.
    */
    public function setActionName(?string $value ): void {
        $this->actionName = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the deviceScopeId property value. The deviceScopeId property
     *  @param string|null $value Value to set for the deviceScopeId property.
    */
    public function setDeviceScopeId(?string $value ): void {
        $this->deviceScopeId = $value;
    }

}
