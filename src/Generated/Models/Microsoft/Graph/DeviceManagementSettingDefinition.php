<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementSettingDefinition extends Entity 
{
    /** @var array<DeviceManagementConstraint>|null $constraints Collection of constraints for the setting value */
    private ?array $constraints = null;
    
    /** @var array<DeviceManagementSettingDependency>|null $dependencies Collection of dependencies on other settings */
    private ?array $dependencies = null;
    
    /** @var string|null $description The setting's description */
    private ?string $description = null;
    
    /** @var string|null $displayName The setting's display name */
    private ?string $displayName = null;
    
    /** @var string|null $documentationUrl Url to setting documentation */
    private ?string $documentationUrl = null;
    
    /** @var string|null $headerSubtitle subtitle of the setting header for more details about the category/section */
    private ?string $headerSubtitle = null;
    
    /** @var string|null $headerTitle title of the setting header represents a category/section of a setting/settings */
    private ?string $headerTitle = null;
    
    /** @var bool|null $isTopLevel If the setting is top level, it can be configured without the need to be wrapped in a collection or complex setting */
    private ?bool $isTopLevel = null;
    
    /** @var array<string>|null $keywords Keywords associated with the setting */
    private ?array $keywords = null;
    
    /** @var string|null $placeholderText Placeholder text as an example of valid input */
    private ?string $placeholderText = null;
    
    /** @var DeviceManangementIntentValueType|null $valueType The data type of the value. Possible values are: integer, boolean, string, complex, collection, abstractComplex. */
    private ?DeviceManangementIntentValueType $valueType = null;
    
    /**
     * Instantiates a new deviceManagementSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementSettingDefinition
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingDefinition {
        return new DeviceManagementSettingDefinition();
    }

    /**
     * Gets the constraints property value. Collection of constraints for the setting value
     * @return array<DeviceManagementConstraint>|null
    */
    public function getConstraints(): ?array {
        return $this->constraints;
    }

    /**
     * Gets the dependencies property value. Collection of dependencies on other settings
     * @return array<DeviceManagementSettingDependency>|null
    */
    public function getDependencies(): ?array {
        return $this->dependencies;
    }

    /**
     * Gets the description property value. The setting's description
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The setting's display name
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the documentationUrl property value. Url to setting documentation
     * @return string|null
    */
    public function getDocumentationUrl(): ?string {
        return $this->documentationUrl;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'constraints' => function (self $o, ParseNode $n) { $o->setConstraints($n->getCollectionOfObjectValues(DeviceManagementConstraint::class)); },
            'dependencies' => function (self $o, ParseNode $n) { $o->setDependencies($n->getCollectionOfObjectValues(DeviceManagementSettingDependency::class)); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'documentationUrl' => function (self $o, ParseNode $n) { $o->setDocumentationUrl($n->getStringValue()); },
            'headerSubtitle' => function (self $o, ParseNode $n) { $o->setHeaderSubtitle($n->getStringValue()); },
            'headerTitle' => function (self $o, ParseNode $n) { $o->setHeaderTitle($n->getStringValue()); },
            'isTopLevel' => function (self $o, ParseNode $n) { $o->setIsTopLevel($n->getBooleanValue()); },
            'keywords' => function (self $o, ParseNode $n) { $o->setKeywords($n->getCollectionOfPrimitiveValues()); },
            'placeholderText' => function (self $o, ParseNode $n) { $o->setPlaceholderText($n->getStringValue()); },
            'valueType' => function (self $o, ParseNode $n) { $o->setValueType($n->getEnumValue(DeviceManangementIntentValueType::class)); },
        ]);
    }

    /**
     * Gets the headerSubtitle property value. subtitle of the setting header for more details about the category/section
     * @return string|null
    */
    public function getHeaderSubtitle(): ?string {
        return $this->headerSubtitle;
    }

    /**
     * Gets the headerTitle property value. title of the setting header represents a category/section of a setting/settings
     * @return string|null
    */
    public function getHeaderTitle(): ?string {
        return $this->headerTitle;
    }

    /**
     * Gets the isTopLevel property value. If the setting is top level, it can be configured without the need to be wrapped in a collection or complex setting
     * @return bool|null
    */
    public function getIsTopLevel(): ?bool {
        return $this->isTopLevel;
    }

    /**
     * Gets the keywords property value. Keywords associated with the setting
     * @return array<string>|null
    */
    public function getKeywords(): ?array {
        return $this->keywords;
    }

    /**
     * Gets the placeholderText property value. Placeholder text as an example of valid input
     * @return string|null
    */
    public function getPlaceholderText(): ?string {
        return $this->placeholderText;
    }

    /**
     * Gets the valueType property value. The data type of the value. Possible values are: integer, boolean, string, complex, collection, abstractComplex.
     * @return DeviceManangementIntentValueType|null
    */
    public function getValueType(): ?DeviceManangementIntentValueType {
        return $this->valueType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('constraints', $this->constraints);
        $writer->writeCollectionOfObjectValues('dependencies', $this->dependencies);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('documentationUrl', $this->documentationUrl);
        $writer->writeStringValue('headerSubtitle', $this->headerSubtitle);
        $writer->writeStringValue('headerTitle', $this->headerTitle);
        $writer->writeBooleanValue('isTopLevel', $this->isTopLevel);
        $writer->writeCollectionOfPrimitiveValues('keywords', $this->keywords);
        $writer->writeStringValue('placeholderText', $this->placeholderText);
        $writer->writeEnumValue('valueType', $this->valueType);
    }

    /**
     * Sets the constraints property value. Collection of constraints for the setting value
     *  @param array<DeviceManagementConstraint>|null $value Value to set for the constraints property.
    */
    public function setConstraints(?array $value ): void {
        $this->constraints = $value;
    }

    /**
     * Sets the dependencies property value. Collection of dependencies on other settings
     *  @param array<DeviceManagementSettingDependency>|null $value Value to set for the dependencies property.
    */
    public function setDependencies(?array $value ): void {
        $this->dependencies = $value;
    }

    /**
     * Sets the description property value. The setting's description
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The setting's display name
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the documentationUrl property value. Url to setting documentation
     *  @param string|null $value Value to set for the documentationUrl property.
    */
    public function setDocumentationUrl(?string $value ): void {
        $this->documentationUrl = $value;
    }

    /**
     * Sets the headerSubtitle property value. subtitle of the setting header for more details about the category/section
     *  @param string|null $value Value to set for the headerSubtitle property.
    */
    public function setHeaderSubtitle(?string $value ): void {
        $this->headerSubtitle = $value;
    }

    /**
     * Sets the headerTitle property value. title of the setting header represents a category/section of a setting/settings
     *  @param string|null $value Value to set for the headerTitle property.
    */
    public function setHeaderTitle(?string $value ): void {
        $this->headerTitle = $value;
    }

    /**
     * Sets the isTopLevel property value. If the setting is top level, it can be configured without the need to be wrapped in a collection or complex setting
     *  @param bool|null $value Value to set for the isTopLevel property.
    */
    public function setIsTopLevel(?bool $value ): void {
        $this->isTopLevel = $value;
    }

    /**
     * Sets the keywords property value. Keywords associated with the setting
     *  @param array<string>|null $value Value to set for the keywords property.
    */
    public function setKeywords(?array $value ): void {
        $this->keywords = $value;
    }

    /**
     * Sets the placeholderText property value. Placeholder text as an example of valid input
     *  @param string|null $value Value to set for the placeholderText property.
    */
    public function setPlaceholderText(?string $value ): void {
        $this->placeholderText = $value;
    }

    /**
     * Sets the valueType property value. The data type of the value. Possible values are: integer, boolean, string, complex, collection, abstractComplex.
     *  @param DeviceManangementIntentValueType|null $value Value to set for the valueType property.
    */
    public function setValueType(?DeviceManangementIntentValueType $value ): void {
        $this->valueType = $value;
    }

}
