<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DeviceManagementConfigurationSettingDefinition extends Entity implements Parsable 
{
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
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementConfigurationChoiceSettingCollectionDefinition': return new DeviceManagementConfigurationChoiceSettingCollectionDefinition();
                case '#microsoft.graph.deviceManagementConfigurationChoiceSettingDefinition': return new DeviceManagementConfigurationChoiceSettingDefinition();
                case '#microsoft.graph.deviceManagementConfigurationRedirectSettingDefinition': return new DeviceManagementConfigurationRedirectSettingDefinition();
                case '#microsoft.graph.deviceManagementConfigurationSettingGroupCollectionDefinition': return new DeviceManagementConfigurationSettingGroupCollectionDefinition();
                case '#microsoft.graph.deviceManagementConfigurationSettingGroupDefinition': return new DeviceManagementConfigurationSettingGroupDefinition();
                case '#microsoft.graph.deviceManagementConfigurationSimpleSettingCollectionDefinition': return new DeviceManagementConfigurationSimpleSettingCollectionDefinition();
                case '#microsoft.graph.deviceManagementConfigurationSimpleSettingDefinition': return new DeviceManagementConfigurationSimpleSettingDefinition();
            }
        }
        return new DeviceManagementConfigurationSettingDefinition();
    }

    /**
     * Gets the accessTypes property value. The accessTypes property
     * @return DeviceManagementConfigurationSettingAccessTypes|null
    */
    public function getAccessTypes(): ?DeviceManagementConfigurationSettingAccessTypes {
        $val = $this->getBackingStore()->get('accessTypes');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationSettingAccessTypes) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessTypes'");
    }

    /**
     * Gets the applicability property value. Details which device setting is applicable on
     * @return DeviceManagementConfigurationSettingApplicability|null
    */
    public function getApplicability(): ?DeviceManagementConfigurationSettingApplicability {
        $val = $this->getBackingStore()->get('applicability');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationSettingApplicability) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'applicability'");
    }

    /**
     * Gets the baseUri property value. Base CSP Path
     * @return string|null
    */
    public function getBaseUri(): ?string {
        $val = $this->getBackingStore()->get('baseUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'baseUri'");
    }

    /**
     * Gets the categoryId property value. Specifies the area group under which the setting is configured in a specified configuration service provider (CSP)
     * @return string|null
    */
    public function getCategoryId(): ?string {
        $val = $this->getBackingStore()->get('categoryId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'categoryId'");
    }

    /**
     * Gets the description property value. Description of the item
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. Display name of the item
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessTypes' => fn(ParseNode $n) => $o->setAccessTypes($n->getEnumValue(DeviceManagementConfigurationSettingAccessTypes::class)),
            'applicability' => fn(ParseNode $n) => $o->setApplicability($n->getObjectValue([DeviceManagementConfigurationSettingApplicability::class, 'createFromDiscriminatorValue'])),
            'baseUri' => fn(ParseNode $n) => $o->setBaseUri($n->getStringValue()),
            'categoryId' => fn(ParseNode $n) => $o->setCategoryId($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'helpText' => fn(ParseNode $n) => $o->setHelpText($n->getStringValue()),
            'infoUrls' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setInfoUrls($val);
            },
            'keywords' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setKeywords($val);
            },
            'name' => fn(ParseNode $n) => $o->setName($n->getStringValue()),
            'occurrence' => fn(ParseNode $n) => $o->setOccurrence($n->getObjectValue([DeviceManagementConfigurationSettingOccurrence::class, 'createFromDiscriminatorValue'])),
            'offsetUri' => fn(ParseNode $n) => $o->setOffsetUri($n->getStringValue()),
            'referredSettingInformationList' => fn(ParseNode $n) => $o->setReferredSettingInformationList($n->getCollectionOfObjectValues([DeviceManagementConfigurationReferredSettingInformation::class, 'createFromDiscriminatorValue'])),
            'rootDefinitionId' => fn(ParseNode $n) => $o->setRootDefinitionId($n->getStringValue()),
            'settingUsage' => fn(ParseNode $n) => $o->setSettingUsage($n->getEnumValue(DeviceManagementConfigurationSettingUsage::class)),
            'uxBehavior' => fn(ParseNode $n) => $o->setUxBehavior($n->getEnumValue(DeviceManagementConfigurationControlType::class)),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getStringValue()),
            'visibility' => fn(ParseNode $n) => $o->setVisibility($n->getEnumValue(DeviceManagementConfigurationSettingVisibility::class)),
        ]);
    }

    /**
     * Gets the helpText property value. Help text of the item
     * @return string|null
    */
    public function getHelpText(): ?string {
        $val = $this->getBackingStore()->get('helpText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'helpText'");
    }

    /**
     * Gets the infoUrls property value. List of links more info for the setting can be found at
     * @return array<string>|null
    */
    public function getInfoUrls(): ?array {
        $val = $this->getBackingStore()->get('infoUrls');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'infoUrls'");
    }

    /**
     * Gets the keywords property value. Tokens which to search settings on
     * @return array<string>|null
    */
    public function getKeywords(): ?array {
        $val = $this->getBackingStore()->get('keywords');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'keywords'");
    }

    /**
     * Gets the name property value. Name of the item
     * @return string|null
    */
    public function getName(): ?string {
        $val = $this->getBackingStore()->get('name');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'name'");
    }

    /**
     * Gets the occurrence property value. Indicates whether the setting is required or not
     * @return DeviceManagementConfigurationSettingOccurrence|null
    */
    public function getOccurrence(): ?DeviceManagementConfigurationSettingOccurrence {
        $val = $this->getBackingStore()->get('occurrence');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationSettingOccurrence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'occurrence'");
    }

    /**
     * Gets the offsetUri property value. Offset CSP Path from Base
     * @return string|null
    */
    public function getOffsetUri(): ?string {
        $val = $this->getBackingStore()->get('offsetUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'offsetUri'");
    }

    /**
     * Gets the referredSettingInformationList property value. List of referred setting information.
     * @return array<DeviceManagementConfigurationReferredSettingInformation>|null
    */
    public function getReferredSettingInformationList(): ?array {
        $val = $this->getBackingStore()->get('referredSettingInformationList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConfigurationReferredSettingInformation::class);
            /** @var array<DeviceManagementConfigurationReferredSettingInformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referredSettingInformationList'");
    }

    /**
     * Gets the rootDefinitionId property value. Root setting definition if the setting is a child setting.
     * @return string|null
    */
    public function getRootDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('rootDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'rootDefinitionId'");
    }

    /**
     * Gets the settingUsage property value. Supported setting types
     * @return DeviceManagementConfigurationSettingUsage|null
    */
    public function getSettingUsage(): ?DeviceManagementConfigurationSettingUsage {
        $val = $this->getBackingStore()->get('settingUsage');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationSettingUsage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingUsage'");
    }

    /**
     * Gets the uxBehavior property value. Setting control type representation in the UX
     * @return DeviceManagementConfigurationControlType|null
    */
    public function getUxBehavior(): ?DeviceManagementConfigurationControlType {
        $val = $this->getBackingStore()->get('uxBehavior');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationControlType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'uxBehavior'");
    }

    /**
     * Gets the version property value. Item Version
     * @return string|null
    */
    public function getVersion(): ?string {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Gets the visibility property value. Supported setting types
     * @return DeviceManagementConfigurationSettingVisibility|null
    */
    public function getVisibility(): ?DeviceManagementConfigurationSettingVisibility {
        $val = $this->getBackingStore()->get('visibility');
        if (is_null($val) || $val instanceof DeviceManagementConfigurationSettingVisibility) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'visibility'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessTypes', $this->getAccessTypes());
        $writer->writeObjectValue('applicability', $this->getApplicability());
        $writer->writeStringValue('baseUri', $this->getBaseUri());
        $writer->writeStringValue('categoryId', $this->getCategoryId());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('helpText', $this->getHelpText());
        $writer->writeCollectionOfPrimitiveValues('infoUrls', $this->getInfoUrls());
        $writer->writeCollectionOfPrimitiveValues('keywords', $this->getKeywords());
        $writer->writeStringValue('name', $this->getName());
        $writer->writeObjectValue('occurrence', $this->getOccurrence());
        $writer->writeStringValue('offsetUri', $this->getOffsetUri());
        $writer->writeCollectionOfObjectValues('referredSettingInformationList', $this->getReferredSettingInformationList());
        $writer->writeStringValue('rootDefinitionId', $this->getRootDefinitionId());
        $writer->writeEnumValue('settingUsage', $this->getSettingUsage());
        $writer->writeEnumValue('uxBehavior', $this->getUxBehavior());
        $writer->writeStringValue('version', $this->getVersion());
        $writer->writeEnumValue('visibility', $this->getVisibility());
    }

    /**
     * Sets the accessTypes property value. The accessTypes property
     * @param DeviceManagementConfigurationSettingAccessTypes|null $value Value to set for the accessTypes property.
    */
    public function setAccessTypes(?DeviceManagementConfigurationSettingAccessTypes $value): void {
        $this->getBackingStore()->set('accessTypes', $value);
    }

    /**
     * Sets the applicability property value. Details which device setting is applicable on
     * @param DeviceManagementConfigurationSettingApplicability|null $value Value to set for the applicability property.
    */
    public function setApplicability(?DeviceManagementConfigurationSettingApplicability $value): void {
        $this->getBackingStore()->set('applicability', $value);
    }

    /**
     * Sets the baseUri property value. Base CSP Path
     * @param string|null $value Value to set for the baseUri property.
    */
    public function setBaseUri(?string $value): void {
        $this->getBackingStore()->set('baseUri', $value);
    }

    /**
     * Sets the categoryId property value. Specifies the area group under which the setting is configured in a specified configuration service provider (CSP)
     * @param string|null $value Value to set for the categoryId property.
    */
    public function setCategoryId(?string $value): void {
        $this->getBackingStore()->set('categoryId', $value);
    }

    /**
     * Sets the description property value. Description of the item
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. Display name of the item
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the helpText property value. Help text of the item
     * @param string|null $value Value to set for the helpText property.
    */
    public function setHelpText(?string $value): void {
        $this->getBackingStore()->set('helpText', $value);
    }

    /**
     * Sets the infoUrls property value. List of links more info for the setting can be found at
     * @param array<string>|null $value Value to set for the infoUrls property.
    */
    public function setInfoUrls(?array $value): void {
        $this->getBackingStore()->set('infoUrls', $value);
    }

    /**
     * Sets the keywords property value. Tokens which to search settings on
     * @param array<string>|null $value Value to set for the keywords property.
    */
    public function setKeywords(?array $value): void {
        $this->getBackingStore()->set('keywords', $value);
    }

    /**
     * Sets the name property value. Name of the item
     * @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value): void {
        $this->getBackingStore()->set('name', $value);
    }

    /**
     * Sets the occurrence property value. Indicates whether the setting is required or not
     * @param DeviceManagementConfigurationSettingOccurrence|null $value Value to set for the occurrence property.
    */
    public function setOccurrence(?DeviceManagementConfigurationSettingOccurrence $value): void {
        $this->getBackingStore()->set('occurrence', $value);
    }

    /**
     * Sets the offsetUri property value. Offset CSP Path from Base
     * @param string|null $value Value to set for the offsetUri property.
    */
    public function setOffsetUri(?string $value): void {
        $this->getBackingStore()->set('offsetUri', $value);
    }

    /**
     * Sets the referredSettingInformationList property value. List of referred setting information.
     * @param array<DeviceManagementConfigurationReferredSettingInformation>|null $value Value to set for the referredSettingInformationList property.
    */
    public function setReferredSettingInformationList(?array $value): void {
        $this->getBackingStore()->set('referredSettingInformationList', $value);
    }

    /**
     * Sets the rootDefinitionId property value. Root setting definition if the setting is a child setting.
     * @param string|null $value Value to set for the rootDefinitionId property.
    */
    public function setRootDefinitionId(?string $value): void {
        $this->getBackingStore()->set('rootDefinitionId', $value);
    }

    /**
     * Sets the settingUsage property value. Supported setting types
     * @param DeviceManagementConfigurationSettingUsage|null $value Value to set for the settingUsage property.
    */
    public function setSettingUsage(?DeviceManagementConfigurationSettingUsage $value): void {
        $this->getBackingStore()->set('settingUsage', $value);
    }

    /**
     * Sets the uxBehavior property value. Setting control type representation in the UX
     * @param DeviceManagementConfigurationControlType|null $value Value to set for the uxBehavior property.
    */
    public function setUxBehavior(?DeviceManagementConfigurationControlType $value): void {
        $this->getBackingStore()->set('uxBehavior', $value);
    }

    /**
     * Sets the version property value. Item Version
     * @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value): void {
        $this->getBackingStore()->set('version', $value);
    }

    /**
     * Sets the visibility property value. Supported setting types
     * @param DeviceManagementConfigurationSettingVisibility|null $value Value to set for the visibility property.
    */
    public function setVisibility(?DeviceManagementConfigurationSettingVisibility $value): void {
        $this->getBackingStore()->set('visibility', $value);
    }

}
