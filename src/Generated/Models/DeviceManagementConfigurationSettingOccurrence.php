<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingOccurrence implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $maxDeviceOccurrence Maximum times setting can be set on device.
    */
    private ?int $maxDeviceOccurrence = null;
    
    /**
     * @var int|null $minDeviceOccurrence Minimum times setting can be set on device. A MinDeviceOccurrence of 0 means setting is optional
    */
    private ?int $minDeviceOccurrence = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSettingOccurrence and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingOccurrence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingOccurrence {
        return new DeviceManagementConfigurationSettingOccurrence();
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
            'maxDeviceOccurrence' => function (ParseNode $n) use ($o) { $o->setMaxDeviceOccurrence($n->getIntegerValue()); },
            'minDeviceOccurrence' => function (ParseNode $n) use ($o) { $o->setMinDeviceOccurrence($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the maxDeviceOccurrence property value. Maximum times setting can be set on device.
     * @return int|null
    */
    public function getMaxDeviceOccurrence(): ?int {
        return $this->maxDeviceOccurrence;
    }

    /**
     * Gets the minDeviceOccurrence property value. Minimum times setting can be set on device. A MinDeviceOccurrence of 0 means setting is optional
     * @return int|null
    */
    public function getMinDeviceOccurrence(): ?int {
        return $this->minDeviceOccurrence;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('maxDeviceOccurrence', $this->maxDeviceOccurrence);
        $writer->writeIntegerValue('minDeviceOccurrence', $this->minDeviceOccurrence);
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
     * Sets the maxDeviceOccurrence property value. Maximum times setting can be set on device.
     *  @param int|null $value Value to set for the maxDeviceOccurrence property.
    */
    public function setMaxDeviceOccurrence(?int $value ): void {
        $this->maxDeviceOccurrence = $value;
    }

    /**
     * Sets the minDeviceOccurrence property value. Minimum times setting can be set on device. A MinDeviceOccurrence of 0 means setting is optional
     *  @param int|null $value Value to set for the minDeviceOccurrence property.
    */
    public function setMinDeviceOccurrence(?int $value ): void {
        $this->minDeviceOccurrence = $value;
    }

}
