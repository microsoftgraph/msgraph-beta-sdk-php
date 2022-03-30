<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ConfigurationManagerAction implements AdditionalDataHolder, Parsable 
{
    /** @var ConfigurationManagerActionType|null $action The action type to trigger on Configuration Manager client. Possible values are: refreshMachinePolicy, refreshUserPolicy, wakeUpClient, appEvaluation, quickScan, fullScan, windowsDefenderUpdateSignatures. */
    private ?ConfigurationManagerActionType $action = null;
    
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /**
     * Instantiates a new configurationManagerAction and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ConfigurationManagerAction
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ConfigurationManagerAction {
        return new ConfigurationManagerAction();
    }

    /**
     * Gets the action property value. The action type to trigger on Configuration Manager client. Possible values are: refreshMachinePolicy, refreshUserPolicy, wakeUpClient, appEvaluation, quickScan, fullScan, windowsDefenderUpdateSignatures.
     * @return ConfigurationManagerActionType|null
    */
    public function getAction(): ?ConfigurationManagerActionType {
        return $this->action;
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
            'action' => function (self $o, ParseNode $n) { $o->setAction($n->getEnumValue(ConfigurationManagerActionType::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('action', $this->action);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the action property value. The action type to trigger on Configuration Manager client. Possible values are: refreshMachinePolicy, refreshUserPolicy, wakeUpClient, appEvaluation, quickScan, fullScan, windowsDefenderUpdateSignatures.
     *  @param ConfigurationManagerActionType|null $value Value to set for the action property.
    */
    public function setAction(?ConfigurationManagerActionType $value ): void {
        $this->action = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

}
