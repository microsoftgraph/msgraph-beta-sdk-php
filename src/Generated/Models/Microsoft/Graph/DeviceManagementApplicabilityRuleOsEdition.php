<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementApplicabilityRuleOsEdition implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $name Name for object. */
    private ?string $name = null;
    
    /** @var array<Windows10EditionType>|null $osEditionTypes Applicability rule OS edition type. */
    private ?array $osEditionTypes = null;
    
    /** @var DeviceManagementApplicabilityRuleType|null $ruleType Applicability Rule type. Possible values are: include, exclude. */
    private ?DeviceManagementApplicabilityRuleType $ruleType = null;
    
    /**
     * Instantiates a new deviceManagementApplicabilityRuleOsEdition and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementApplicabilityRuleOsEdition
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementApplicabilityRuleOsEdition {
        return new DeviceManagementApplicabilityRuleOsEdition();
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
            'osEditionTypes' => function (self $o, ParseNode $n) { $o->setOsEditionTypes($n->getCollectionOfEnumValues(Windows10EditionType::class)); },
            'ruleType' => function (self $o, ParseNode $n) { $o->setRuleType($n->getEnumValue(DeviceManagementApplicabilityRuleType::class)); },
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
     * Gets the osEditionTypes property value. Applicability rule OS edition type.
     * @return array<Windows10EditionType>|null
    */
    public function getOsEditionTypes(): ?array {
        return $this->osEditionTypes;
    }

    /**
     * Gets the ruleType property value. Applicability Rule type. Possible values are: include, exclude.
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
        $writer->writeStringValue('name', $this->name);
        $writer->writeCollectionOfEnumValues('osEditionTypes', $this->osEditionTypes);
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
     * Sets the name property value. Name for object.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the osEditionTypes property value. Applicability rule OS edition type.
     *  @param array<Windows10EditionType>|null $value Value to set for the osEditionTypes property.
    */
    public function setOsEditionTypes(?array $value ): void {
        $this->osEditionTypes = $value;
    }

    /**
     * Sets the ruleType property value. Applicability Rule type. Possible values are: include, exclude.
     *  @param DeviceManagementApplicabilityRuleType|null $value Value to set for the ruleType property.
    */
    public function setRuleType(?DeviceManagementApplicabilityRuleType $value ): void {
        $this->ruleType = $value;
    }

}
