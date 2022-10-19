<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationOptionDefinition implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DeviceManagementConfigurationSettingDependedOnBy>|null $dependedOnBy List of Settings that depends on this option
    */
    private ?array $dependedOnBy = null;
    
    /**
     * @var array<DeviceManagementConfigurationDependentOn>|null $dependentOn List of dependent settings for this option
    */
    private ?array $dependentOn = null;
    
    /**
     * @var string|null $description Description of the option
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Friendly name of the option
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $helpText Help text of the option
    */
    private ?string $helpText = null;
    
    /**
     * @var string|null $itemId Identifier of option
    */
    private ?string $itemId = null;
    
    /**
     * @var string|null $name Name of the option
    */
    private ?string $name = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var DeviceManagementConfigurationSettingValue|null $optionValue Value of the option
    */
    private ?DeviceManagementConfigurationSettingValue $optionValue = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationOptionDefinition and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationOptionDefinition');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationOptionDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationOptionDefinition {
        return new DeviceManagementConfigurationOptionDefinition();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the dependedOnBy property value. List of Settings that depends on this option
     * @return array<DeviceManagementConfigurationSettingDependedOnBy>|null
    */
    public function getDependedOnBy(): ?array {
        return $this->dependedOnBy;
    }

    /**
     * Gets the dependentOn property value. List of dependent settings for this option
     * @return array<DeviceManagementConfigurationDependentOn>|null
    */
    public function getDependentOn(): ?array {
        return $this->dependentOn;
    }

    /**
     * Gets the description property value. Description of the option
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Friendly name of the option
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'dependedOnBy' => fn(ParseNode $n) => $o->setDependedOnBy($n->getCollectionOfObjectValues([DeviceManagementConfigurationSettingDependedOnBy::class, 'createFromDiscriminatorValue'])),
            'dependentOn' => fn(ParseNode $n) => $o->setDependentOn($n->getCollectionOfObjectValues([DeviceManagementConfigurationDependentOn::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'helpText' => fn(ParseNode $n) => $o->setHelpText($n->getStringValue()),
            'itemId' => fn(ParseNode $n) => $o->setItemId($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'optionValue' => fn(ParseNode $n) => $o->setOptionValue($n->getObjectValue([DeviceManagementConfigurationSettingValue::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the helpText property value. Help text of the option
     * @return string|null
    */
    public function getHelpText(): ?string {
        return $this->helpText;
    }

    /**
     * Gets the itemId property value. Identifier of option
     * @return string|null
    */
    public function getItemId(): ?string {
        return $this->itemId;
    }

    /**
     * Gets the name property value. Name of the option
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
     * Gets the optionValue property value. Value of the option
     * @return DeviceManagementConfigurationSettingValue|null
    */
    public function getOptionValue(): ?DeviceManagementConfigurationSettingValue {
        return $this->optionValue;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('dependedOnBy', $this->dependedOnBy);
        $writer->writeCollectionOfObjectValues('dependentOn', $this->dependentOn);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('helpText', $this->helpText);
        $writer->writeStringValue('itemId', $this->itemId);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeObjectValue('optionValue', $this->optionValue);
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
     * Sets the dependedOnBy property value. List of Settings that depends on this option
     *  @param array<DeviceManagementConfigurationSettingDependedOnBy>|null $value Value to set for the dependedOnBy property.
    */
    public function setDependedOnBy(?array $value ): void {
        $this->dependedOnBy = $value;
    }

    /**
     * Sets the dependentOn property value. List of dependent settings for this option
     *  @param array<DeviceManagementConfigurationDependentOn>|null $value Value to set for the dependentOn property.
    */
    public function setDependentOn(?array $value ): void {
        $this->dependentOn = $value;
    }

    /**
     * Sets the description property value. Description of the option
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Friendly name of the option
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the helpText property value. Help text of the option
     *  @param string|null $value Value to set for the helpText property.
    */
    public function setHelpText(?string $value ): void {
        $this->helpText = $value;
    }

    /**
     * Sets the itemId property value. Identifier of option
     *  @param string|null $value Value to set for the itemId property.
    */
    public function setItemId(?string $value ): void {
        $this->itemId = $value;
    }

    /**
     * Sets the name property value. Name of the option
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
     * Sets the optionValue property value. Value of the option
     *  @param DeviceManagementConfigurationSettingValue|null $value Value to set for the optionValue property.
    */
    public function setOptionValue(?DeviceManagementConfigurationSettingValue $value ): void {
        $this->optionValue = $value;
    }

}
