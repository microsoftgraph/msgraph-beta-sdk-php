<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationCategory extends Entity implements Parsable 
{
    /**
     * @var string|null $categoryDescription Description of the category header
    */
    private ?string $categoryDescription = null;
    
    /**
     * @var array<string>|null $childCategoryIds List of child ids of the category.
    */
    private ?array $childCategoryIds = null;
    
    /**
     * @var string|null $description Description of the item
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Display name of the item
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $helpText Help text of the item
    */
    private ?string $helpText = null;
    
    /**
     * @var string|null $name Name of the item
    */
    private ?string $name = null;
    
    /**
     * @var string|null $parentCategoryId Parent id of the category.
    */
    private ?string $parentCategoryId = null;
    
    /**
     * @var DeviceManagementConfigurationPlatforms|null $platforms Supported platform types.
    */
    private ?DeviceManagementConfigurationPlatforms $platforms = null;
    
    /**
     * @var string|null $rootCategoryId Root id of the category.
    */
    private ?string $rootCategoryId = null;
    
    /**
     * @var DeviceManagementConfigurationSettingUsage|null $settingUsage Supported setting types
    */
    private ?DeviceManagementConfigurationSettingUsage $settingUsage = null;
    
    /**
     * @var DeviceManagementConfigurationTechnologies|null $technologies Describes which technology this setting can be deployed with
    */
    private ?DeviceManagementConfigurationTechnologies $technologies = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.deviceManagementConfigurationCategory');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationCategory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationCategory {
        return new DeviceManagementConfigurationCategory();
    }

    /**
     * Gets the categoryDescription property value. Description of the category header
     * @return string|null
    */
    public function getCategoryDescription(): ?string {
        return $this->categoryDescription;
    }

    /**
     * Gets the childCategoryIds property value. List of child ids of the category.
     * @return array<string>|null
    */
    public function getChildCategoryIds(): ?array {
        return $this->childCategoryIds;
    }

    /**
     * Gets the description property value. Description of the item
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Display name of the item
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
        return array_merge(parent::getFieldDeserializers(), [
            'categoryDescription' => fn(ParseNode $n) => $o->setCategoryDescription($n->getStringValue()),
            'childCategoryIds' => fn(ParseNode $n) => $o->setChildCategoryIds($n->getCollectionOfPrimitiveValues()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'helpText' => fn(ParseNode $n) => $o->setHelpText($n->getStringValue()),
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'parentCategoryId' => fn(ParseNode $n) => $o->setParentCategoryId($n->getStringValue()),
            'platforms' => fn(ParseNode $n) => $o->setPlatforms($n->getEnumValue(DeviceManagementConfigurationPlatforms::class)),
            'rootCategoryId' => fn(ParseNode $n) => $o->setRootCategoryId($n->getStringValue()),
            'settingUsage' => fn(ParseNode $n) => $o->setSettingUsage($n->getEnumValue(DeviceManagementConfigurationSettingUsage::class)),
            'technologies' => fn(ParseNode $n) => $o->setTechnologies($n->getEnumValue(DeviceManagementConfigurationTechnologies::class)),
        ]);
    }

    /**
     * Gets the helpText property value. Help text of the item
     * @return string|null
    */
    public function getHelpText(): ?string {
        return $this->helpText;
    }

    /**
     * Gets the name property value. Name of the item
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the parentCategoryId property value. Parent id of the category.
     * @return string|null
    */
    public function getParentCategoryId(): ?string {
        return $this->parentCategoryId;
    }

    /**
     * Gets the platforms property value. Supported platform types.
     * @return DeviceManagementConfigurationPlatforms|null
    */
    public function getPlatforms(): ?DeviceManagementConfigurationPlatforms {
        return $this->platforms;
    }

    /**
     * Gets the rootCategoryId property value. Root id of the category.
     * @return string|null
    */
    public function getRootCategoryId(): ?string {
        return $this->rootCategoryId;
    }

    /**
     * Gets the settingUsage property value. Supported setting types
     * @return DeviceManagementConfigurationSettingUsage|null
    */
    public function getSettingUsage(): ?DeviceManagementConfigurationSettingUsage {
        return $this->settingUsage;
    }

    /**
     * Gets the technologies property value. Describes which technology this setting can be deployed with
     * @return DeviceManagementConfigurationTechnologies|null
    */
    public function getTechnologies(): ?DeviceManagementConfigurationTechnologies {
        return $this->technologies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('categoryDescription', $this->categoryDescription);
        $writer->writeCollectionOfPrimitiveValues('childCategoryIds', $this->childCategoryIds);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('helpText', $this->helpText);
        $writer->writeStringValue('name', $this->name);
        $writer->writeStringValue('parentCategoryId', $this->parentCategoryId);
        $writer->writeEnumValue('platforms', $this->platforms);
        $writer->writeStringValue('rootCategoryId', $this->rootCategoryId);
        $writer->writeEnumValue('settingUsage', $this->settingUsage);
        $writer->writeEnumValue('technologies', $this->technologies);
    }

    /**
     * Sets the categoryDescription property value. Description of the category header
     *  @param string|null $value Value to set for the categoryDescription property.
    */
    public function setCategoryDescription(?string $value ): void {
        $this->categoryDescription = $value;
    }

    /**
     * Sets the childCategoryIds property value. List of child ids of the category.
     *  @param array<string>|null $value Value to set for the childCategoryIds property.
    */
    public function setChildCategoryIds(?array $value ): void {
        $this->childCategoryIds = $value;
    }

    /**
     * Sets the description property value. Description of the item
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Display name of the item
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the helpText property value. Help text of the item
     *  @param string|null $value Value to set for the helpText property.
    */
    public function setHelpText(?string $value ): void {
        $this->helpText = $value;
    }

    /**
     * Sets the name property value. Name of the item
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the parentCategoryId property value. Parent id of the category.
     *  @param string|null $value Value to set for the parentCategoryId property.
    */
    public function setParentCategoryId(?string $value ): void {
        $this->parentCategoryId = $value;
    }

    /**
     * Sets the platforms property value. Supported platform types.
     *  @param DeviceManagementConfigurationPlatforms|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?DeviceManagementConfigurationPlatforms $value ): void {
        $this->platforms = $value;
    }

    /**
     * Sets the rootCategoryId property value. Root id of the category.
     *  @param string|null $value Value to set for the rootCategoryId property.
    */
    public function setRootCategoryId(?string $value ): void {
        $this->rootCategoryId = $value;
    }

    /**
     * Sets the settingUsage property value. Supported setting types
     *  @param DeviceManagementConfigurationSettingUsage|null $value Value to set for the settingUsage property.
    */
    public function setSettingUsage(?DeviceManagementConfigurationSettingUsage $value ): void {
        $this->settingUsage = $value;
    }

    /**
     * Sets the technologies property value. Describes which technology this setting can be deployed with
     *  @param DeviceManagementConfigurationTechnologies|null $value Value to set for the technologies property.
    */
    public function setTechnologies(?DeviceManagementConfigurationTechnologies $value ): void {
        $this->technologies = $value;
    }

}
