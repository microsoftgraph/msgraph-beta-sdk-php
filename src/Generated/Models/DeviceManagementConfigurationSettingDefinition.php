<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceManagementConfigurationSettingDefinition extends Entity implements Parsable 
{
    /**
     * @var DeviceManagementConfigurationSettingAccessTypes|null $accessTypes Read/write access mode of the setting. Possible values are: none, add, copy, delete, get, replace, execute.
    */
    private ?DeviceManagementConfigurationSettingAccessTypes $accessTypes = null;
    
    /**
     * @var DeviceManagementConfigurationSettingApplicability|null $applicability Details which device setting is applicable on
    */
    private ?DeviceManagementConfigurationSettingApplicability $applicability = null;
    
    /**
     * @var string|null $baseUri Base CSP Path
    */
    private ?string $baseUri = null;
    
    /**
     * @var string|null $categoryId Specifies the area group under which the setting is configured in a specified configuration service provider (CSP)
    */
    private ?string $categoryId = null;
    
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
     * @var array<string>|null $infoUrls List of links more info for the setting can be found at
    */
    private ?array $infoUrls = null;
    
    /**
     * @var array<string>|null $keywords Tokens which to search settings on
    */
    private ?array $keywords = null;
    
    /**
     * @var string|null $name Name of the item
    */
    private ?string $name = null;
    
    /**
     * @var DeviceManagementConfigurationSettingOccurrence|null $occurrence Indicates whether the setting is required or not
    */
    private ?DeviceManagementConfigurationSettingOccurrence $occurrence = null;
    
    /**
     * @var string|null $offsetUri Offset CSP Path from Base
    */
    private ?string $offsetUri = null;
    
    /**
     * @var array<DeviceManagementConfigurationReferredSettingInformation>|null $referredSettingInformationList List of referred setting information.
    */
    private ?array $referredSettingInformationList = null;
    
    /**
     * @var string|null $rootDefinitionId Root setting definition if the setting is a child setting.
    */
    private ?string $rootDefinitionId = null;
    
    /**
     * @var DeviceManagementConfigurationSettingUsage|null $settingUsage Setting type, for example, configuration and compliance. Possible values are: none, configuration, compliance.
    */
    private ?DeviceManagementConfigurationSettingUsage $settingUsage = null;
    
    /**
     * @var DeviceManagementConfigurationControlType|null $uxBehavior Setting control type representation in the UX. Possible values are: default, dropdown, smallTextBox, largeTextBox, toggle, multiheaderGrid, contextPane.
    */
    private ?DeviceManagementConfigurationControlType $uxBehavior = null;
    
    /**
     * @var string|null $version Item Version
    */
    private ?string $version = null;
    
    /**
     * @var DeviceManagementConfigurationSettingVisibility|null $visibility Setting visibility scope to UX. Possible values are: none, settingsCatalog, template.
    */
    private ?DeviceManagementConfigurationSettingVisibility $visibility = null;
    
    /**
     * Instantiates a new deviceManagementConfigurationSettingDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceManagementConfigurationSettingDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementConfigurationSettingDefinition {
        $mappingValueNode = ParseNode::getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementConfigurationChoiceSettingDefinition': return new DeviceManagementConfigurationChoiceSettingDefinition();
                case '#microsoft.graph.deviceManagementConfigurationRedirectSettingDefinition': return new DeviceManagementConfigurationRedirectSettingDefinition();
                case '#microsoft.graph.deviceManagementConfigurationSettingGroupDefinition': return new DeviceManagementConfigurationSettingGroupDefinition();
                case '#microsoft.graph.deviceManagementConfigurationSimpleSettingDefinition': return new DeviceManagementConfigurationSimpleSettingDefinition();
            }
        }
        return new DeviceManagementConfigurationSettingDefinition();
    }

    /**
     * Gets the accessTypes property value. Read/write access mode of the setting. Possible values are: none, add, copy, delete, get, replace, execute.
     * @return DeviceManagementConfigurationSettingAccessTypes|null
    */
    public function getAccessTypes(): ?DeviceManagementConfigurationSettingAccessTypes {
        return $this->accessTypes;
    }

    /**
     * Gets the applicability property value. Details which device setting is applicable on
     * @return DeviceManagementConfigurationSettingApplicability|null
    */
    public function getApplicability(): ?DeviceManagementConfigurationSettingApplicability {
        return $this->applicability;
    }

    /**
     * Gets the baseUri property value. Base CSP Path
     * @return string|null
    */
    public function getBaseUri(): ?string {
        return $this->baseUri;
    }

    /**
     * Gets the categoryId property value. Specifies the area group under which the setting is configured in a specified configuration service provider (CSP)
     * @return string|null
    */
    public function getCategoryId(): ?string {
        return $this->categoryId;
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
            'accessTypes' => function (ParseNode $n) use ($o) { $o->setAccessTypes($n->getEnumValue(DeviceManagementConfigurationSettingAccessTypes::class)); },
            'applicability' => function (ParseNode $n) use ($o) { $o->setApplicability($n->getObjectValue(array(DeviceManagementConfigurationSettingApplicability::class, 'createFromDiscriminatorValue'))); },
            'baseUri' => function (ParseNode $n) use ($o) { $o->setBaseUri($n->getStringValue()); },
            'categoryId' => function (ParseNode $n) use ($o) { $o->setCategoryId($n->getStringValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'helpText' => function (ParseNode $n) use ($o) { $o->setHelpText($n->getStringValue()); },
            'infoUrls' => function (ParseNode $n) use ($o) { $o->setInfoUrls($n->getCollectionOfPrimitiveValues()); },
            'keywords' => function (ParseNode $n) use ($o) { $o->setKeywords($n->getCollectionOfPrimitiveValues()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'occurrence' => function (ParseNode $n) use ($o) { $o->setOccurrence($n->getObjectValue(array(DeviceManagementConfigurationSettingOccurrence::class, 'createFromDiscriminatorValue'))); },
            'offsetUri' => function (ParseNode $n) use ($o) { $o->setOffsetUri($n->getStringValue()); },
            'referredSettingInformationList' => function (ParseNode $n) use ($o) { $o->setReferredSettingInformationList($n->getCollectionOfObjectValues(array(DeviceManagementConfigurationReferredSettingInformation::class, 'createFromDiscriminatorValue'))); },
            'rootDefinitionId' => function (ParseNode $n) use ($o) { $o->setRootDefinitionId($n->getStringValue()); },
            'settingUsage' => function (ParseNode $n) use ($o) { $o->setSettingUsage($n->getEnumValue(DeviceManagementConfigurationSettingUsage::class)); },
            'uxBehavior' => function (ParseNode $n) use ($o) { $o->setUxBehavior($n->getEnumValue(DeviceManagementConfigurationControlType::class)); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
            'visibility' => function (ParseNode $n) use ($o) { $o->setVisibility($n->getEnumValue(DeviceManagementConfigurationSettingVisibility::class)); },
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
     * Gets the infoUrls property value. List of links more info for the setting can be found at
     * @return array<string>|null
    */
    public function getInfoUrls(): ?array {
        return $this->infoUrls;
    }

    /**
     * Gets the keywords property value. Tokens which to search settings on
     * @return array<string>|null
    */
    public function getKeywords(): ?array {
        return $this->keywords;
    }

    /**
     * Gets the name property value. Name of the item
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the occurrence property value. Indicates whether the setting is required or not
     * @return DeviceManagementConfigurationSettingOccurrence|null
    */
    public function getOccurrence(): ?DeviceManagementConfigurationSettingOccurrence {
        return $this->occurrence;
    }

    /**
     * Gets the offsetUri property value. Offset CSP Path from Base
     * @return string|null
    */
    public function getOffsetUri(): ?string {
        return $this->offsetUri;
    }

    /**
     * Gets the referredSettingInformationList property value. List of referred setting information.
     * @return array<DeviceManagementConfigurationReferredSettingInformation>|null
    */
    public function getReferredSettingInformationList(): ?array {
        return $this->referredSettingInformationList;
    }

    /**
     * Gets the rootDefinitionId property value. Root setting definition if the setting is a child setting.
     * @return string|null
    */
    public function getRootDefinitionId(): ?string {
        return $this->rootDefinitionId;
    }

    /**
     * Gets the settingUsage property value. Setting type, for example, configuration and compliance. Possible values are: none, configuration, compliance.
     * @return DeviceManagementConfigurationSettingUsage|null
    */
    public function getSettingUsage(): ?DeviceManagementConfigurationSettingUsage {
        return $this->settingUsage;
    }

    /**
     * Gets the uxBehavior property value. Setting control type representation in the UX. Possible values are: default, dropdown, smallTextBox, largeTextBox, toggle, multiheaderGrid, contextPane.
     * @return DeviceManagementConfigurationControlType|null
    */
    public function getUxBehavior(): ?DeviceManagementConfigurationControlType {
        return $this->uxBehavior;
    }

    /**
     * Gets the version property value. Item Version
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Gets the visibility property value. Setting visibility scope to UX. Possible values are: none, settingsCatalog, template.
     * @return DeviceManagementConfigurationSettingVisibility|null
    */
    public function getVisibility(): ?DeviceManagementConfigurationSettingVisibility {
        return $this->visibility;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessTypes', $this->accessTypes);
        $writer->writeObjectValue('applicability', $this->applicability);
        $writer->writeStringValue('baseUri', $this->baseUri);
        $writer->writeStringValue('categoryId', $this->categoryId);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('helpText', $this->helpText);
        $writer->writeCollectionOfPrimitiveValues('infoUrls', $this->infoUrls);
        $writer->writeCollectionOfPrimitiveValues('keywords', $this->keywords);
        $writer->writeStringValue('name', $this->name);
        $writer->writeObjectValue('occurrence', $this->occurrence);
        $writer->writeStringValue('offsetUri', $this->offsetUri);
        $writer->writeCollectionOfObjectValues('referredSettingInformationList', $this->referredSettingInformationList);
        $writer->writeStringValue('rootDefinitionId', $this->rootDefinitionId);
        $writer->writeEnumValue('settingUsage', $this->settingUsage);
        $writer->writeEnumValue('uxBehavior', $this->uxBehavior);
        $writer->writeStringValue('version', $this->version);
        $writer->writeEnumValue('visibility', $this->visibility);
    }

    /**
     * Sets the accessTypes property value. Read/write access mode of the setting. Possible values are: none, add, copy, delete, get, replace, execute.
     *  @param DeviceManagementConfigurationSettingAccessTypes|null $value Value to set for the accessTypes property.
    */
    public function setAccessTypes(?DeviceManagementConfigurationSettingAccessTypes $value ): void {
        $this->accessTypes = $value;
    }

    /**
     * Sets the applicability property value. Details which device setting is applicable on
     *  @param DeviceManagementConfigurationSettingApplicability|null $value Value to set for the applicability property.
    */
    public function setApplicability(?DeviceManagementConfigurationSettingApplicability $value ): void {
        $this->applicability = $value;
    }

    /**
     * Sets the baseUri property value. Base CSP Path
     *  @param string|null $value Value to set for the baseUri property.
    */
    public function setBaseUri(?string $value ): void {
        $this->baseUri = $value;
    }

    /**
     * Sets the categoryId property value. Specifies the area group under which the setting is configured in a specified configuration service provider (CSP)
     *  @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value ): void {
        $this->categoryId = $value;
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
     * Sets the infoUrls property value. List of links more info for the setting can be found at
     *  @param array<string>|null $value Value to set for the infoUrls property.
    */
    public function setInfoUrls(?array $value ): void {
        $this->infoUrls = $value;
    }

    /**
     * Sets the keywords property value. Tokens which to search settings on
     *  @param array<string>|null $value Value to set for the keywords property.
    */
    public function setKeywords(?array $value ): void {
        $this->keywords = $value;
    }

    /**
     * Sets the name property value. Name of the item
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the occurrence property value. Indicates whether the setting is required or not
     *  @param DeviceManagementConfigurationSettingOccurrence|null $value Value to set for the occurrence property.
    */
    public function setOccurrence(?DeviceManagementConfigurationSettingOccurrence $value ): void {
        $this->occurrence = $value;
    }

    /**
     * Sets the offsetUri property value. Offset CSP Path from Base
     *  @param string|null $value Value to set for the offsetUri property.
    */
    public function setOffsetUri(?string $value ): void {
        $this->offsetUri = $value;
    }

    /**
     * Sets the referredSettingInformationList property value. List of referred setting information.
     *  @param array<DeviceManagementConfigurationReferredSettingInformation>|null $value Value to set for the referredSettingInformationList property.
    */
    public function setReferredSettingInformationList(?array $value ): void {
        $this->referredSettingInformationList = $value;
    }

    /**
     * Sets the rootDefinitionId property value. Root setting definition if the setting is a child setting.
     *  @param string|null $value Value to set for the rootDefinitionId property.
    */
    public function setRootDefinitionId(?string $value ): void {
        $this->rootDefinitionId = $value;
    }

    /**
     * Sets the settingUsage property value. Setting type, for example, configuration and compliance. Possible values are: none, configuration, compliance.
     *  @param DeviceManagementConfigurationSettingUsage|null $value Value to set for the settingUsage property.
    */
    public function setSettingUsage(?DeviceManagementConfigurationSettingUsage $value ): void {
        $this->settingUsage = $value;
    }

    /**
     * Sets the uxBehavior property value. Setting control type representation in the UX. Possible values are: default, dropdown, smallTextBox, largeTextBox, toggle, multiheaderGrid, contextPane.
     *  @param DeviceManagementConfigurationControlType|null $value Value to set for the uxBehavior property.
    */
    public function setUxBehavior(?DeviceManagementConfigurationControlType $value ): void {
        $this->uxBehavior = $value;
    }

    /**
     * Sets the version property value. Item Version
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

    /**
     * Sets the visibility property value. Setting visibility scope to UX. Possible values are: none, settingsCatalog, template.
     *  @param DeviceManagementConfigurationSettingVisibility|null $value Value to set for the visibility property.
    */
    public function setVisibility(?DeviceManagementConfigurationSettingVisibility $value ): void {
        $this->visibility = $value;
    }

}
