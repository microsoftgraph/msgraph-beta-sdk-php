<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementApplicabilityRuleOsVersion implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $maxOSVersion Max OS version for Applicability Rule.
    */
    private ?string $maxOSVersion = null;
    
    /**
     * @var string|null $minOSVersion Min OS version for Applicability Rule.
    */
    private ?string $minOSVersion = null;
    
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
     * Instantiates a new deviceManagementApplicabilityRuleOsVersion and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagementApplicabilityRuleOsVersion');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementApplicabilityRuleOsVersion
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementApplicabilityRuleOsVersion {
        return new DeviceManagementApplicabilityRuleOsVersion();
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
            'maxOSVersion' => function (ParseNode $n) use ($o) { $o->setMaxOSVersion($n->getStringValue()); },
            'minOSVersion' => function (ParseNode $n) use ($o) { $o->setMinOSVersion($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'ruleType' => function (ParseNode $n) use ($o) { $o->setRuleType($n->getEnumValue(DeviceManagementApplicabilityRuleType::class)); },
        ];
    }

    /**
     * Gets the maxOSVersion property value. Max OS version for Applicability Rule.
     * @return string|null
    */
    public function getMaxOSVersion(): ?string {
        return $this->maxOSVersion;
    }

    /**
     * Gets the minOSVersion property value. Min OS version for Applicability Rule.
     * @return string|null
    */
    public function getMinOSVersion(): ?string {
        return $this->minOSVersion;
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
        $writer->writeStringValue('maxOSVersion', $this->maxOSVersion);
        $writer->writeStringValue('minOSVersion', $this->minOSVersion);
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
     * Sets the maxOSVersion property value. Max OS version for Applicability Rule.
     *  @param string|null $value Value to set for the maxOSVersion property.
    */
    public function setMaxOSVersion(?string $value ): void {
        $this->maxOSVersion = $value;
    }

    /**
     * Sets the minOSVersion property value. Min OS version for Applicability Rule.
     *  @param string|null $value Value to set for the minOSVersion property.
    */
    public function setMinOSVersion(?string $value ): void {
        $this->minOSVersion = $value;
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
