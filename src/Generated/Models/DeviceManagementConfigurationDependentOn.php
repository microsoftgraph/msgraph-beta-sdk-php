<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationDependentOn implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $dependentOn Identifier of parent setting/ parent setting option dependent on
    */
    private ?string $dependentOn = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var string|null $parentSettingId Identifier of parent setting/ parent setting id dependent on
    */
    private ?string $parentSettingId = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationDependentOn and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationDependentOn');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationDependentOn
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationDependentOn {
        return new DeviceManagementConfigurationDependentOn();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dependentOn property value. Identifier of parent setting/ parent setting option dependent on
     * @return string|null
    */
    public function getDependentOn(): ?string {
        return $this->dependentOn;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dependentOn' => function (ParseNode $n) use ($o) { $o->setDependentOn($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'parentSettingId' => function (ParseNode $n) use ($o) { $o->setParentSettingId($n->getStringValue()); },
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
     * Gets the parentSettingId property value. Identifier of parent setting/ parent setting id dependent on
     * @return string|null
    */
    public function getParentSettingId(): ?string {
        return $this->parentSettingId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('dependentOn', $this->dependentOn);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeStringValue('parentSettingId', $this->parentSettingId);
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
     * Sets the dependentOn property value. Identifier of parent setting/ parent setting option dependent on
     *  @param string|null $value Value to set for the dependentOn property.
    */
    public function setDependentOn(?string $value ): void {
        $this->dependentOn = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the parentSettingId property value. Identifier of parent setting/ parent setting id dependent on
     *  @param string|null $value Value to set for the parentSettingId property.
    */
    public function setParentSettingId(?string $value ): void {
        $this->parentSettingId = $value;
    }

}
