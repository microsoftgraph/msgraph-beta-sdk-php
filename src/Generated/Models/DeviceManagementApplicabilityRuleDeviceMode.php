<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementApplicabilityRuleDeviceMode implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var Windows10DeviceModeType|null $deviceMode Windows 10 Device Mode type.
    */
    private ?Windows10DeviceModeType $deviceMode = null;
    
    /**
     * @var string|null $name Name for object.
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DeviceManagementApplicabilityRuleType|null $ruleType Supported Applicability rule types for Device Configuration
    */
    private ?DeviceManagementApplicabilityRuleType $ruleType = null;
    
    /**
     * Instantiates a new deviceManagementApplicabilityRuleDeviceMode and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagementApplicabilityRuleDeviceMode');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementApplicabilityRuleDeviceMode
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementApplicabilityRuleDeviceMode {
        return new DeviceManagementApplicabilityRuleDeviceMode();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceMode property value. Windows 10 Device Mode type.
     * @return Windows10DeviceModeType|null
    */
    public function getDeviceMode(): ?Windows10DeviceModeType {
        return $this->deviceMode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceMode' => fn(ParseNode $n) => $o->setDeviceMode($n->getEnumValue(Windows10DeviceModeType::class)),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'ruleType' => fn(ParseNode $n) => $o->setRuleType($n->getEnumValue(DeviceManagementApplicabilityRuleType::class)),
        ];
    }

    /**
     * Gets the name property value. Name for object.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the ruleType property value. Supported Applicability rule types for Device Configuration
     * @return DeviceManagementApplicabilityRuleType|null
    */
    public function getRuleType(): ?DeviceManagementApplicabilityRuleType {
        return $this->ruleType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('deviceMode', $this->deviceMode);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('ruleType', $this->ruleType);
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
     * Sets the deviceMode property value. Windows 10 Device Mode type.
     *  @param Windows10DeviceModeType|null $value Value to set for the deviceMode property.
    */
    public function setDeviceMode(?Windows10DeviceModeType $value ): void {
        $this->deviceMode = $value;
    }

    /**
     * Sets the name property value. Name for object.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the ruleType property value. Supported Applicability rule types for Device Configuration
     *  @param DeviceManagementApplicabilityRuleType|null $value Value to set for the ruleType property.
    */
    public function setRuleType(?DeviceManagementApplicabilityRuleType $value ): void {
        $this->ruleType = $value;
    }

}
