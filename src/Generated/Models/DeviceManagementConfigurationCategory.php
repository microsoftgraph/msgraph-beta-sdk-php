<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationCategory extends Entity implements Parsable 
{
    /**
     * Instantiates a new deviceManagementConfigurationCategory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        return $this->getBackingStore()->get('categoryDescription');
    }

    /**
     * Gets the childCategoryIds property value. List of child ids of the category.
     * @return array<string>|null
    */
    public function getChildCategoryIds(): ?array {
        return $this->getBackingStore()->get('childCategoryIds');
    }

    /**
     * Gets the description property value. Description of the item
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. Display name of the item
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
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
        return $this->getBackingStore()->get('helpText');
    }

    /**
     * Gets the name property value. Name of the item
     * @return string|null
    */
    public function getName(): ?string {
        return $this->getBackingStore()->get('name');
    }

    /**
     * Gets the parentCategoryId property value. Parent id of the category.
     * @return string|null
    */
    public function getParentCategoryId(): ?string {
        return $this->getBackingStore()->get('parentCategoryId');
    }

    /**
     * Gets the platforms property value. Supported platform types.
     * @return DeviceManagementConfigurationPlatforms|null
    */
    public function getPlatforms(): ?DeviceManagementConfigurationPlatforms {
        return $this->getBackingStore()->get('platforms');
    }

    /**
     * Gets the rootCategoryId property value. Root id of the category.
     * @return string|null
    */
    public function getRootCategoryId(): ?string {
        return $this->getBackingStore()->get('rootCategoryId');
    }

    /**
     * Gets the settingUsage property value. Supported setting types
     * @return DeviceManagementConfigurationSettingUsage|null
    */
    public function getSettingUsage(): ?DeviceManagementConfigurationSettingUsage {
        return $this->getBackingStore()->get('settingUsage');
    }

    /**
     * Gets the technologies property value. Describes which technology this setting can be deployed with
     * @return DeviceManagementConfigurationTechnologies|null
    */
    public function getTechnologies(): ?DeviceManagementConfigurationTechnologies {
        return $this->getBackingStore()->get('technologies');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('categoryDescription', $this->getCategoryDescription());
        $writer->writeCollectionOfPrimitiveValues('childCategoryIds', $this->getChildCategoryIds());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('helpText', $this->getHelpText());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeStringValue('parentCategoryId', $this->getParentCategoryId());
        $writer->writeEnumValue('platforms', $this->getPlatforms());
        $writer->writeStringValue('rootCategoryId', $this->getRootCategoryId());
        $writer->writeEnumValue('settingUsage', $this->getSettingUsage());
        $writer->writeEnumValue('technologies', $this->getTechnologies());
    }

    /**
     * Sets the categoryDescription property value. Description of the category header
     *  @param string|null $value Value to set for the categoryDescription property.
    */
    public function setCategoryDescription(?string $value): void {
        $this->getBackingStore()->set('categoryDescription', $value);
    }

    /**
     * Sets the childCategoryIds property value. List of child ids of the category.
     *  @param array<string>|null $value Value to set for the childCategoryIds property.
    */
    public function setChildCategoryIds(?array $value): void {
        $this->getBackingStore()->set('childCategoryIds', $value);
    }

    /**
     * Sets the description property value. Description of the item
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name of the item
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the helpText property value. Help text of the item
     *  @param string|null $value Value to set for the helpText property.
    */
    public function setHelpText(?string $value): void {
        $this->getBackingStore()->set('helpText', $value);
    }

    /**
     * Sets the name property value. Name of the item
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the parentCategoryId property value. Parent id of the category.
     *  @param string|null $value Value to set for the parentCategoryId property.
    */
    public function setParentCategoryId(?string $value): void {
        $this->getBackingStore()->set('parentCategoryId', $value);
    }

    /**
     * Sets the platforms property value. Supported platform types.
     *  @param DeviceManagementConfigurationPlatforms|null $value Value to set for the platforms property.
    */
    public function setPlatforms(?DeviceManagementConfigurationPlatforms $value): void {
        $this->getBackingStore()->set('platforms', $value);
    }

    /**
     * Sets the rootCategoryId property value. Root id of the category.
     *  @param string|null $value Value to set for the rootCategoryId property.
    */
    public function setRootCategoryId(?string $value): void {
        $this->getBackingStore()->set('rootCategoryId', $value);
    }

    /**
     * Sets the settingUsage property value. Supported setting types
     *  @param DeviceManagementConfigurationSettingUsage|null $value Value to set for the settingUsage property.
    */
    public function setSettingUsage(?DeviceManagementConfigurationSettingUsage $value): void {
        $this->getBackingStore()->set('settingUsage', $value);
    }

    /**
     * Sets the technologies property value. Describes which technology this setting can be deployed with
     *  @param DeviceManagementConfigurationTechnologies|null $value Value to set for the technologies property.
    */
    public function setTechnologies(?DeviceManagementConfigurationTechnologies $value): void {
        $this->getBackingStore()->set('technologies', $value);
    }

}
