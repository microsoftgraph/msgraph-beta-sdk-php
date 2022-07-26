<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\TriggerConfigurationManagerAction;

use Microsoft\Graph\Beta\Generated\Models\ConfigurationManagerAction;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TriggerConfigurationManagerActionPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var ConfigurationManagerAction|null $configurationManagerAction Parameter for action triggerConfigurationManagerAction
    */
    private ?ConfigurationManagerAction $configurationManagerAction = null;
    
    /**
     * Instantiates a new triggerConfigurationManagerActionPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TriggerConfigurationManagerActionPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TriggerConfigurationManagerActionPostRequestBody {
        return new TriggerConfigurationManagerActionPostRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the configurationManagerAction property value. Parameter for action triggerConfigurationManagerAction
     * @return ConfigurationManagerAction|null
    */
    public function getConfigurationManagerAction(): ?ConfigurationManagerAction {
        return $this->configurationManagerAction;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'configurationManagerAction' => function (ParseNode $n) use ($o) { $o->setConfigurationManagerAction($n->getObjectValue(array(ConfigurationManagerAction::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('configurationManagerAction', $this->configurationManagerAction);
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
     * Sets the configurationManagerAction property value. Parameter for action triggerConfigurationManagerAction
     *  @param ConfigurationManagerAction|null $value Value to set for the configurationManagerAction property.
    */
    public function setConfigurationManagerAction(?ConfigurationManagerAction $value ): void {
        $this->configurationManagerAction = $value;
    }

}
