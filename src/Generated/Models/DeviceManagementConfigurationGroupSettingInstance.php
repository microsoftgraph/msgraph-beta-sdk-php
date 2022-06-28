<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationGroupSettingInstance extends DeviceManagementConfigurationSettingInstance implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DeviceManagementConfigurationGroupSettingValue|null $groupSettingValue The groupSettingValue property
    */
    private ?DeviceManagementConfigurationGroupSettingValue $groupSettingValue = null;
    
    /**
     * Instantiates a new DeviceManagementConfigurationGroupSettingInstance and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationGroupSettingInstance
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationGroupSettingInstance {
        return new DeviceManagementConfigurationGroupSettingInstance();
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
        return array_merge(parent::getFieldDeserializers(), [
            'groupSettingValue' => function (ParseNode $n) use ($o) { $o->setGroupSettingValue($n->getObjectValue(array(DeviceManagementConfigurationGroupSettingValue::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the groupSettingValue property value. The groupSettingValue property
     * @return DeviceManagementConfigurationGroupSettingValue|null
    */
    public function getGroupSettingValue(): ?DeviceManagementConfigurationGroupSettingValue {
        return $this->groupSettingValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('groupSettingValue', $this->groupSettingValue);
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
     * Sets the groupSettingValue property value. The groupSettingValue property
     *  @param DeviceManagementConfigurationGroupSettingValue|null $value Value to set for the groupSettingValue property.
    */
    public function setGroupSettingValue(?DeviceManagementConfigurationGroupSettingValue $value ): void {
        $this->groupSettingValue = $value;
    }

}
