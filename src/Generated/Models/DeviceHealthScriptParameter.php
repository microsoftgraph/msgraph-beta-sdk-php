<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceHealthScriptParameter implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $applyDefaultValueWhenNotAssigned Whether Apply DefaultValue When Not Assigned
    */
    private ?bool $applyDefaultValueWhenNotAssigned = null;
    
    /**
     * @var string|null $description The description of the param
    */
    private ?string $description = null;
    
    /**
     * @var bool|null $isRequired Whether the param is required
    */
    private ?bool $isRequired = null;
    
    /**
     * @var string|null $name The name of the param
    */
    private ?string $name = null;
    
    /**
     * Instantiates a new deviceHealthScriptParameter and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceHealthScriptParameter
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceHealthScriptParameter {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceHealthScriptBooleanParameter': return new DeviceHealthScriptBooleanParameter();
                case '#microsoft.graph.deviceHealthScriptIntegerParameter': return new DeviceHealthScriptIntegerParameter();
                case '#microsoft.graph.deviceHealthScriptStringParameter': return new DeviceHealthScriptStringParameter();
            }
        }
        return new DeviceHealthScriptParameter();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applyDefaultValueWhenNotAssigned property value. Whether Apply DefaultValue When Not Assigned
     * @return bool|null
    */
    public function getApplyDefaultValueWhenNotAssigned(): ?bool {
        return $this->applyDefaultValueWhenNotAssigned;
    }

    /**
     * Gets the description property value. The description of the param
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'applyDefaultValueWhenNotAssigned' => function (ParseNode $n) use ($o) { $o->setApplyDefaultValueWhenNotAssigned($n->getBooleanValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'isRequired' => function (ParseNode $n) use ($o) { $o->setIsRequired($n->getBooleanValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
        ];
    }

    /**
     * Gets the isRequired property value. Whether the param is required
     * @return bool|null
    */
    public function getIsRequired(): ?bool {
        return $this->isRequired;
    }

    /**
     * Gets the name property value. The name of the param
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('applyDefaultValueWhenNotAssigned', $this->applyDefaultValueWhenNotAssigned);
        $writer->writeStringValue('description', $this->description);
        $writer->writeBooleanValue('isRequired', $this->isRequired);
        $writer->writeStringValue('name', $this->name);
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
     * Sets the applyDefaultValueWhenNotAssigned property value. Whether Apply DefaultValue When Not Assigned
     *  @param bool|null $value Value to set for the applyDefaultValueWhenNotAssigned property.
    */
    public function setApplyDefaultValueWhenNotAssigned(?bool $value ): void {
        $this->applyDefaultValueWhenNotAssigned = $value;
    }

    /**
     * Sets the description property value. The description of the param
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the isRequired property value. Whether the param is required
     *  @param bool|null $value Value to set for the isRequired property.
    */
    public function setIsRequired(?bool $value ): void {
        $this->isRequired = $value;
    }

    /**
     * Sets the name property value. The name of the param
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

}
