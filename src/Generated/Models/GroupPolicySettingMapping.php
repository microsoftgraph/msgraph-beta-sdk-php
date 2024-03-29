<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The Group Policy setting to MDM/Intune mapping.
*/
class GroupPolicySettingMapping extends Entity implements Parsable 
{
    /**
     * Instantiates a new GroupPolicySettingMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicySettingMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicySettingMapping {
        return new GroupPolicySettingMapping();
    }

    /**
     * Gets the admxSettingDefinitionId property value. Admx Group Policy Id
     * @return string|null
    */
    public function getAdmxSettingDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('admxSettingDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'admxSettingDefinitionId'");
    }

    /**
     * Gets the childIdList property value. List of Child Ids of the group policy setting.
     * @return array<string>|null
    */
    public function getChildIdList(): ?array {
        $val = $this->getBackingStore()->get('childIdList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'childIdList'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'admxSettingDefinitionId' => fn(ParseNode $n) => $o->setAdmxSettingDefinitionId($n->getStringValue()),
            'childIdList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setChildIdList($val);
            },
            'intuneSettingDefinitionId' => fn(ParseNode $n) => $o->setIntuneSettingDefinitionId($n->getStringValue()),
            'intuneSettingUriList' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setIntuneSettingUriList($val);
            },
            'isMdmSupported' => fn(ParseNode $n) => $o->setIsMdmSupported($n->getBooleanValue()),
            'mdmCspName' => fn(ParseNode $n) => $o->setMdmCspName($n->getStringValue()),
            'mdmMinimumOSVersion' => fn(ParseNode $n) => $o->setMdmMinimumOSVersion($n->getIntegerValue()),
            'mdmSettingUri' => fn(ParseNode $n) => $o->setMdmSettingUri($n->getStringValue()),
            'mdmSupportedState' => fn(ParseNode $n) => $o->setMdmSupportedState($n->getEnumValue(MdmSupportedState::class)),
            'parentId' => fn(ParseNode $n) => $o->setParentId($n->getStringValue()),
            'settingCategory' => fn(ParseNode $n) => $o->setSettingCategory($n->getStringValue()),
            'settingDisplayName' => fn(ParseNode $n) => $o->setSettingDisplayName($n->getStringValue()),
            'settingDisplayValue' => fn(ParseNode $n) => $o->setSettingDisplayValue($n->getStringValue()),
            'settingDisplayValueType' => fn(ParseNode $n) => $o->setSettingDisplayValueType($n->getStringValue()),
            'settingName' => fn(ParseNode $n) => $o->setSettingName($n->getStringValue()),
            'settingScope' => fn(ParseNode $n) => $o->setSettingScope($n->getEnumValue(GroupPolicySettingScope::class)),
            'settingType' => fn(ParseNode $n) => $o->setSettingType($n->getEnumValue(GroupPolicySettingType::class)),
            'settingValue' => fn(ParseNode $n) => $o->setSettingValue($n->getStringValue()),
            'settingValueDisplayUnits' => fn(ParseNode $n) => $o->setSettingValueDisplayUnits($n->getStringValue()),
            'settingValueType' => fn(ParseNode $n) => $o->setSettingValueType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the intuneSettingDefinitionId property value. The Intune Setting Definition Id
     * @return string|null
    */
    public function getIntuneSettingDefinitionId(): ?string {
        $val = $this->getBackingStore()->get('intuneSettingDefinitionId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intuneSettingDefinitionId'");
    }

    /**
     * Gets the intuneSettingUriList property value. The list of Intune Setting URIs this group policy setting maps to
     * @return array<string>|null
    */
    public function getIntuneSettingUriList(): ?array {
        $val = $this->getBackingStore()->get('intuneSettingUriList');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'intuneSettingUriList'");
    }

    /**
     * Gets the isMdmSupported property value. Indicates if the setting is supported by Intune or not
     * @return bool|null
    */
    public function getIsMdmSupported(): ?bool {
        $val = $this->getBackingStore()->get('isMdmSupported');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isMdmSupported'");
    }

    /**
     * Gets the mdmCspName property value. The CSP name this group policy setting maps to.
     * @return string|null
    */
    public function getMdmCspName(): ?string {
        $val = $this->getBackingStore()->get('mdmCspName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdmCspName'");
    }

    /**
     * Gets the mdmMinimumOSVersion property value. The minimum OS version this mdm setting supports.
     * @return int|null
    */
    public function getMdmMinimumOSVersion(): ?int {
        $val = $this->getBackingStore()->get('mdmMinimumOSVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdmMinimumOSVersion'");
    }

    /**
     * Gets the mdmSettingUri property value. The MDM CSP URI this group policy setting maps to.
     * @return string|null
    */
    public function getMdmSettingUri(): ?string {
        $val = $this->getBackingStore()->get('mdmSettingUri');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdmSettingUri'");
    }

    /**
     * Gets the mdmSupportedState property value. Mdm Support Status of the setting.
     * @return MdmSupportedState|null
    */
    public function getMdmSupportedState(): ?MdmSupportedState {
        $val = $this->getBackingStore()->get('mdmSupportedState');
        if (is_null($val) || $val instanceof MdmSupportedState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mdmSupportedState'");
    }

    /**
     * Gets the parentId property value. Parent Id of the group policy setting.
     * @return string|null
    */
    public function getParentId(): ?string {
        $val = $this->getBackingStore()->get('parentId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'parentId'");
    }

    /**
     * Gets the settingCategory property value. The category the group policy setting is in.
     * @return string|null
    */
    public function getSettingCategory(): ?string {
        $val = $this->getBackingStore()->get('settingCategory');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingCategory'");
    }

    /**
     * Gets the settingDisplayName property value. The display name of this group policy setting.
     * @return string|null
    */
    public function getSettingDisplayName(): ?string {
        $val = $this->getBackingStore()->get('settingDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingDisplayName'");
    }

    /**
     * Gets the settingDisplayValue property value. The display value of this group policy setting.
     * @return string|null
    */
    public function getSettingDisplayValue(): ?string {
        $val = $this->getBackingStore()->get('settingDisplayValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingDisplayValue'");
    }

    /**
     * Gets the settingDisplayValueType property value. The display value type of this group policy setting.
     * @return string|null
    */
    public function getSettingDisplayValueType(): ?string {
        $val = $this->getBackingStore()->get('settingDisplayValueType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingDisplayValueType'");
    }

    /**
     * Gets the settingName property value. The name of this group policy setting.
     * @return string|null
    */
    public function getSettingName(): ?string {
        $val = $this->getBackingStore()->get('settingName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingName'");
    }

    /**
     * Gets the settingScope property value. Scope of the group policy setting.
     * @return GroupPolicySettingScope|null
    */
    public function getSettingScope(): ?GroupPolicySettingScope {
        $val = $this->getBackingStore()->get('settingScope');
        if (is_null($val) || $val instanceof GroupPolicySettingScope) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingScope'");
    }

    /**
     * Gets the settingType property value. Setting type of the group policy.
     * @return GroupPolicySettingType|null
    */
    public function getSettingType(): ?GroupPolicySettingType {
        $val = $this->getBackingStore()->get('settingType');
        if (is_null($val) || $val instanceof GroupPolicySettingType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingType'");
    }

    /**
     * Gets the settingValue property value. The value of this group policy setting.
     * @return string|null
    */
    public function getSettingValue(): ?string {
        $val = $this->getBackingStore()->get('settingValue');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingValue'");
    }

    /**
     * Gets the settingValueDisplayUnits property value. The display units of this group policy setting value
     * @return string|null
    */
    public function getSettingValueDisplayUnits(): ?string {
        $val = $this->getBackingStore()->get('settingValueDisplayUnits');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingValueDisplayUnits'");
    }

    /**
     * Gets the settingValueType property value. The value type of this group policy setting.
     * @return string|null
    */
    public function getSettingValueType(): ?string {
        $val = $this->getBackingStore()->get('settingValueType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingValueType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('admxSettingDefinitionId', $this->getAdmxSettingDefinitionId());
        $writer->writeCollectionOfPrimitiveValues('childIdList', $this->getChildIdList());
        $writer->writeStringValue('intuneSettingDefinitionId', $this->getIntuneSettingDefinitionId());
        $writer->writeCollectionOfPrimitiveValues('intuneSettingUriList', $this->getIntuneSettingUriList());
        $writer->writeBooleanValue('isMdmSupported', $this->getIsMdmSupported());
        $writer->writeStringValue('mdmCspName', $this->getMdmCspName());
        $writer->writeIntegerValue('mdmMinimumOSVersion', $this->getMdmMinimumOSVersion());
        $writer->writeStringValue('mdmSettingUri', $this->getMdmSettingUri());
        $writer->writeEnumValue('mdmSupportedState', $this->getMdmSupportedState());
        $writer->writeStringValue('parentId', $this->getParentId());
        $writer->writeStringValue('settingCategory', $this->getSettingCategory());
        $writer->writeStringValue('settingDisplayName', $this->getSettingDisplayName());
        $writer->writeStringValue('settingDisplayValue', $this->getSettingDisplayValue());
        $writer->writeStringValue('settingDisplayValueType', $this->getSettingDisplayValueType());
        $writer->writeStringValue('settingName', $this->getSettingName());
        $writer->writeEnumValue('settingScope', $this->getSettingScope());
        $writer->writeEnumValue('settingType', $this->getSettingType());
        $writer->writeStringValue('settingValue', $this->getSettingValue());
        $writer->writeStringValue('settingValueDisplayUnits', $this->getSettingValueDisplayUnits());
        $writer->writeStringValue('settingValueType', $this->getSettingValueType());
    }

    /**
     * Sets the admxSettingDefinitionId property value. Admx Group Policy Id
     * @param string|null $value Value to set for the admxSettingDefinitionId property.
    */
    public function setAdmxSettingDefinitionId(?string $value): void {
        $this->getBackingStore()->set('admxSettingDefinitionId', $value);
    }

    /**
     * Sets the childIdList property value. List of Child Ids of the group policy setting.
     * @param array<string>|null $value Value to set for the childIdList property.
    */
    public function setChildIdList(?array $value): void {
        $this->getBackingStore()->set('childIdList', $value);
    }

    /**
     * Sets the intuneSettingDefinitionId property value. The Intune Setting Definition Id
     * @param string|null $value Value to set for the intuneSettingDefinitionId property.
    */
    public function setIntuneSettingDefinitionId(?string $value): void {
        $this->getBackingStore()->set('intuneSettingDefinitionId', $value);
    }

    /**
     * Sets the intuneSettingUriList property value. The list of Intune Setting URIs this group policy setting maps to
     * @param array<string>|null $value Value to set for the intuneSettingUriList property.
    */
    public function setIntuneSettingUriList(?array $value): void {
        $this->getBackingStore()->set('intuneSettingUriList', $value);
    }

    /**
     * Sets the isMdmSupported property value. Indicates if the setting is supported by Intune or not
     * @param bool|null $value Value to set for the isMdmSupported property.
    */
    public function setIsMdmSupported(?bool $value): void {
        $this->getBackingStore()->set('isMdmSupported', $value);
    }

    /**
     * Sets the mdmCspName property value. The CSP name this group policy setting maps to.
     * @param string|null $value Value to set for the mdmCspName property.
    */
    public function setMdmCspName(?string $value): void {
        $this->getBackingStore()->set('mdmCspName', $value);
    }

    /**
     * Sets the mdmMinimumOSVersion property value. The minimum OS version this mdm setting supports.
     * @param int|null $value Value to set for the mdmMinimumOSVersion property.
    */
    public function setMdmMinimumOSVersion(?int $value): void {
        $this->getBackingStore()->set('mdmMinimumOSVersion', $value);
    }

    /**
     * Sets the mdmSettingUri property value. The MDM CSP URI this group policy setting maps to.
     * @param string|null $value Value to set for the mdmSettingUri property.
    */
    public function setMdmSettingUri(?string $value): void {
        $this->getBackingStore()->set('mdmSettingUri', $value);
    }

    /**
     * Sets the mdmSupportedState property value. Mdm Support Status of the setting.
     * @param MdmSupportedState|null $value Value to set for the mdmSupportedState property.
    */
    public function setMdmSupportedState(?MdmSupportedState $value): void {
        $this->getBackingStore()->set('mdmSupportedState', $value);
    }

    /**
     * Sets the parentId property value. Parent Id of the group policy setting.
     * @param string|null $value Value to set for the parentId property.
    */
    public function setParentId(?string $value): void {
        $this->getBackingStore()->set('parentId', $value);
    }

    /**
     * Sets the settingCategory property value. The category the group policy setting is in.
     * @param string|null $value Value to set for the settingCategory property.
    */
    public function setSettingCategory(?string $value): void {
        $this->getBackingStore()->set('settingCategory', $value);
    }

    /**
     * Sets the settingDisplayName property value. The display name of this group policy setting.
     * @param string|null $value Value to set for the settingDisplayName property.
    */
    public function setSettingDisplayName(?string $value): void {
        $this->getBackingStore()->set('settingDisplayName', $value);
    }

    /**
     * Sets the settingDisplayValue property value. The display value of this group policy setting.
     * @param string|null $value Value to set for the settingDisplayValue property.
    */
    public function setSettingDisplayValue(?string $value): void {
        $this->getBackingStore()->set('settingDisplayValue', $value);
    }

    /**
     * Sets the settingDisplayValueType property value. The display value type of this group policy setting.
     * @param string|null $value Value to set for the settingDisplayValueType property.
    */
    public function setSettingDisplayValueType(?string $value): void {
        $this->getBackingStore()->set('settingDisplayValueType', $value);
    }

    /**
     * Sets the settingName property value. The name of this group policy setting.
     * @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value): void {
        $this->getBackingStore()->set('settingName', $value);
    }

    /**
     * Sets the settingScope property value. Scope of the group policy setting.
     * @param GroupPolicySettingScope|null $value Value to set for the settingScope property.
    */
    public function setSettingScope(?GroupPolicySettingScope $value): void {
        $this->getBackingStore()->set('settingScope', $value);
    }

    /**
     * Sets the settingType property value. Setting type of the group policy.
     * @param GroupPolicySettingType|null $value Value to set for the settingType property.
    */
    public function setSettingType(?GroupPolicySettingType $value): void {
        $this->getBackingStore()->set('settingType', $value);
    }

    /**
     * Sets the settingValue property value. The value of this group policy setting.
     * @param string|null $value Value to set for the settingValue property.
    */
    public function setSettingValue(?string $value): void {
        $this->getBackingStore()->set('settingValue', $value);
    }

    /**
     * Sets the settingValueDisplayUnits property value. The display units of this group policy setting value
     * @param string|null $value Value to set for the settingValueDisplayUnits property.
    */
    public function setSettingValueDisplayUnits(?string $value): void {
        $this->getBackingStore()->set('settingValueDisplayUnits', $value);
    }

    /**
     * Sets the settingValueType property value. The value type of this group policy setting.
     * @param string|null $value Value to set for the settingValueType property.
    */
    public function setSettingValueType(?string $value): void {
        $this->getBackingStore()->set('settingValueType', $value);
    }

}
