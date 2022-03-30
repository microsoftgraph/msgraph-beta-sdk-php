<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementExchangeDeviceClass implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $name Name of the device class which will be impacted by this rule. */
    private ?string $name = null;
    
    /** @var DeviceManagementExchangeAccessRuleType|null $type Type of device which is impacted by this rule e.g. Model, Family. Possible values are: family, model. */
    private ?DeviceManagementExchangeAccessRuleType $type = null;
    
    /**
     * Instantiates a new deviceManagementExchangeDeviceClass and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementExchangeDeviceClass
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementExchangeDeviceClass {
        return new DeviceManagementExchangeDeviceClass();
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
            'name' => function (self $o, ParseNode $n) { $o->setName($n->getStringValue()); },
            'type' => function (self $o, ParseNode $n) { $o->setType($n->getEnumValue(DeviceManagementExchangeAccessRuleType::class)); },
        ];
    }

    /**
     * Gets the name property value. Name of the device class which will be impacted by this rule.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the type property value. Type of device which is impacted by this rule e.g. Model, Family. Possible values are: family, model.
     * @return DeviceManagementExchangeAccessRuleType|null
    */
    public function getType(): ?DeviceManagementExchangeAccessRuleType {
        return $this->type;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('name', $this->name);
        $writer->writeEnumValue('type', $this->type);
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
     * Sets the name property value. Name of the device class which will be impacted by this rule.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the type property value. Type of device which is impacted by this rule e.g. Model, Family. Possible values are: family, model.
     *  @param DeviceManagementExchangeAccessRuleType|null $value Value to set for the type property.
    */
    public function setType(?DeviceManagementExchangeAccessRuleType $value ): void {
        $this->type = $value;
    }

}
