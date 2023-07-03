<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Entity representing the defintion for a given setting
*/
class DeviceManagementSettingDefinition extends Entity implements Parsable 
{
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceManagementSettingDefinition {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.deviceManagementAbstractComplexSettingDefinition': return new DeviceManagementAbstractComplexSettingDefinition();
                case '#microsoft.graph.deviceManagementCollectionSettingDefinition': return new DeviceManagementCollectionSettingDefinition();
                case '#microsoft.graph.deviceManagementComplexSettingDefinition': return new DeviceManagementComplexSettingDefinition();
            }
        }
        return new DeviceManagementSettingDefinition();
    }

    /**
     * Gets the constraints property value. Collection of constraints for the setting value
     * @return array<DeviceManagementConstraint>|null
    */
    public function getConstraints(): ?array {
        $val = $this->getBackingStore()->get('constraints');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementConstraint::class);
            /** @var array<DeviceManagementConstraint>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'constraints'");
    }

    /**
     * Gets the dependencies property value. Collection of dependencies on other settings
     * @return array<DeviceManagementSettingDependency>|null
    */
    public function getDependencies(): ?array {
        $val = $this->getBackingStore()->get('dependencies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DeviceManagementSettingDependency::class);
            /** @var array<DeviceManagementSettingDependency>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dependencies'");
    }

    /**
     * Gets the description property value. The setting's description
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
     * Gets the displayName property value. The setting's display name
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
     * Gets the documentationUrl property value. Url to setting documentation
     * @return string|null
    */
    public function getDocumentationUrl(): ?string {
        $val = $this->getBackingStore()->get('documentationUrl');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentationUrl'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'constraints' => fn(ParseNode $n) => $o->setConstraints($n->getCollectionOfObjectValues([DeviceManagementConstraint::class, 'createFromDiscriminatorValue'])),
            'dependencies' => fn(ParseNode $n) => $o->setDependencies($n->getCollectionOfObjectValues([DeviceManagementSettingDependency::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'documentationUrl' => fn(ParseNode $n) => $o->setDocumentationUrl($n->getStringValue()),
            'headerSubtitle' => fn(ParseNode $n) => $o->setHeaderSubtitle($n->getStringValue()),
            'headerTitle' => fn(ParseNode $n) => $o->setHeaderTitle($n->getStringValue()),
            'isTopLevel' => fn(ParseNode $n) => $o->setIsTopLevel($n->getBooleanValue()),
            'keywords' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setKeywords($val);
            },
            'placeholderText' => fn(ParseNode $n) => $o->setPlaceholderText($n->getStringValue()),
            'valueType' => fn(ParseNode $n) => $o->setValueType($n->getEnumValue(DeviceManangementIntentValueType::class)),
        ]);
    }

    /**
     * Gets the headerSubtitle property value. subtitle of the setting header for more details about the category/section
     * @return string|null
    */
    public function getHeaderSubtitle(): ?string {
        $val = $this->getBackingStore()->get('headerSubtitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'headerSubtitle'");
    }

    /**
     * Gets the headerTitle property value. title of the setting header represents a category/section of a setting/settings
     * @return string|null
    */
    public function getHeaderTitle(): ?string {
        $val = $this->getBackingStore()->get('headerTitle');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'headerTitle'");
    }

    /**
     * Gets the isTopLevel property value. If the setting is top level, it can be configured without the need to be wrapped in a collection or complex setting
     * @return bool|null
    */
    public function getIsTopLevel(): ?bool {
        $val = $this->getBackingStore()->get('isTopLevel');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isTopLevel'");
    }

    /**
     * Gets the keywords property value. Keywords associated with the setting
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
     * Gets the placeholderText property value. Placeholder text as an example of valid input
     * @return string|null
    */
    public function getPlaceholderText(): ?string {
        $val = $this->getBackingStore()->get('placeholderText');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'placeholderText'");
    }

    /**
     * Gets the valueType property value. The valueType property
     * @return DeviceManangementIntentValueType|null
    */
    public function getValueType(): ?DeviceManangementIntentValueType {
        $val = $this->getBackingStore()->get('valueType');
        if (is_null($val) || $val instanceof DeviceManangementIntentValueType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'valueType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('constraints', $this->getConstraints());
        $writer->writeCollectionOfObjectValues('dependencies', $this->getDependencies());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('documentationUrl', $this->getDocumentationUrl());
        $writer->writeStringValue('headerSubtitle', $this->getHeaderSubtitle());
        $writer->writeStringValue('headerTitle', $this->getHeaderTitle());
        $writer->writeBooleanValue('isTopLevel', $this->getIsTopLevel());
        $writer->writeCollectionOfPrimitiveValues('keywords', $this->getKeywords());
        $writer->writeStringValue('placeholderText', $this->getPlaceholderText());
        $writer->writeEnumValue('valueType', $this->getValueType());
    }

    /**
     * Sets the constraints property value. Collection of constraints for the setting value
     * @param array<DeviceManagementConstraint>|null $value Value to set for the constraints property.
    */
    public function setConstraints(?array $value): void {
        $this->getBackingStore()->set('constraints', $value);
    }

    /**
     * Sets the dependencies property value. Collection of dependencies on other settings
     * @param array<DeviceManagementSettingDependency>|null $value Value to set for the dependencies property.
    */
    public function setDependencies(?array $value): void {
        $this->getBackingStore()->set('dependencies', $value);
    }

    /**
     * Sets the description property value. The setting's description
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The setting's display name
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the documentationUrl property value. Url to setting documentation
     * @param string|null $value Value to set for the documentationUrl property.
    */
    public function setDocumentationUrl(?string $value): void {
        $this->getBackingStore()->set('documentationUrl', $value);
    }

    /**
     * Sets the headerSubtitle property value. subtitle of the setting header for more details about the category/section
     * @param string|null $value Value to set for the headerSubtitle property.
    */
    public function setHeaderSubtitle(?string $value): void {
        $this->getBackingStore()->set('headerSubtitle', $value);
    }

    /**
     * Sets the headerTitle property value. title of the setting header represents a category/section of a setting/settings
     * @param string|null $value Value to set for the headerTitle property.
    */
    public function setHeaderTitle(?string $value): void {
        $this->getBackingStore()->set('headerTitle', $value);
    }

    /**
     * Sets the isTopLevel property value. If the setting is top level, it can be configured without the need to be wrapped in a collection or complex setting
     * @param bool|null $value Value to set for the isTopLevel property.
    */
    public function setIsTopLevel(?bool $value): void {
        $this->getBackingStore()->set('isTopLevel', $value);
    }

    /**
     * Sets the keywords property value. Keywords associated with the setting
     * @param array<string>|null $value Value to set for the keywords property.
    */
    public function setKeywords(?array $value): void {
        $this->getBackingStore()->set('keywords', $value);
    }

    /**
     * Sets the placeholderText property value. Placeholder text as an example of valid input
     * @param string|null $value Value to set for the placeholderText property.
    */
    public function setPlaceholderText(?string $value): void {
        $this->getBackingStore()->set('placeholderText', $value);
    }

    /**
     * Sets the valueType property value. The valueType property
     * @param DeviceManangementIntentValueType|null $value Value to set for the valueType property.
    */
    public function setValueType(?DeviceManangementIntentValueType $value): void {
        $this->getBackingStore()->set('valueType', $value);
    }

}
