<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The security baseline compliance state of a setting for a device
*/
class SecurityBaselineSettingState extends Entity implements Parsable 
{
    /**
     * Instantiates a new SecurityBaselineSettingState and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityBaselineSettingState
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityBaselineSettingState {
        return new SecurityBaselineSettingState();
    }

    /**
     * Gets the contributingPolicies property value. The policies that contribute to this setting instance
     * @return array<SecurityBaselineContributingPolicy>|null
    */
    public function getContributingPolicies(): ?array {
        $val = $this->getBackingStore()->get('contributingPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SecurityBaselineContributingPolicy::class);
            /** @var array<SecurityBaselineContributingPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contributingPolicies'");
    }

    /**
     * Gets the errorCode property value. The error code if the setting is in error state
     * @return string|null
    */
    public function getErrorCode(): ?string {
        $val = $this->getBackingStore()->get('errorCode');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCode'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contributingPolicies' => fn(ParseNode $n) => $o->setContributingPolicies($n->getCollectionOfObjectValues([SecurityBaselineContributingPolicy::class, 'createFromDiscriminatorValue'])),
            'errorCode' => fn(ParseNode $n) => $o->setErrorCode($n->getStringValue()),
            'settingCategoryId' => fn(ParseNode $n) => $o->setSettingCategoryId($n->getStringValue()),
            'settingCategoryName' => fn(ParseNode $n) => $o->setSettingCategoryName($n->getStringValue()),
            'settingId' => fn(ParseNode $n) => $o->setSettingId($n->getStringValue()),
            'settingName' => fn(ParseNode $n) => $o->setSettingName($n->getStringValue()),
            'sourcePolicies' => fn(ParseNode $n) => $o->setSourcePolicies($n->getCollectionOfObjectValues([SettingSource::class, 'createFromDiscriminatorValue'])),
            'state' => fn(ParseNode $n) => $o->setState($n->getEnumValue(SecurityBaselineComplianceState::class)),
        ]);
    }

    /**
     * Gets the settingCategoryId property value. The setting category id which this setting belongs to
     * @return string|null
    */
    public function getSettingCategoryId(): ?string {
        $val = $this->getBackingStore()->get('settingCategoryId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingCategoryId'");
    }

    /**
     * Gets the settingCategoryName property value. The setting category name which this setting belongs to
     * @return string|null
    */
    public function getSettingCategoryName(): ?string {
        $val = $this->getBackingStore()->get('settingCategoryName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingCategoryName'");
    }

    /**
     * Gets the settingId property value. The setting id guid
     * @return string|null
    */
    public function getSettingId(): ?string {
        $val = $this->getBackingStore()->get('settingId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settingId'");
    }

    /**
     * Gets the settingName property value. The setting name that is being reported
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
     * Gets the sourcePolicies property value. The policies that contribute to this setting instance
     * @return array<SettingSource>|null
    */
    public function getSourcePolicies(): ?array {
        $val = $this->getBackingStore()->get('sourcePolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SettingSource::class);
            /** @var array<SettingSource>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourcePolicies'");
    }

    /**
     * Gets the state property value. Security Baseline Compliance State
     * @return SecurityBaselineComplianceState|null
    */
    public function getState(): ?SecurityBaselineComplianceState {
        $val = $this->getBackingStore()->get('state');
        if (is_null($val) || $val instanceof SecurityBaselineComplianceState) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'state'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('contributingPolicies', $this->getContributingPolicies());
        $writer->writeStringValue('errorCode', $this->getErrorCode());
        $writer->writeStringValue('settingCategoryId', $this->getSettingCategoryId());
        $writer->writeStringValue('settingCategoryName', $this->getSettingCategoryName());
        $writer->writeStringValue('settingId', $this->getSettingId());
        $writer->writeStringValue('settingName', $this->getSettingName());
        $writer->writeCollectionOfObjectValues('sourcePolicies', $this->getSourcePolicies());
        $writer->writeEnumValue('state', $this->getState());
    }

    /**
     * Sets the contributingPolicies property value. The policies that contribute to this setting instance
     * @param array<SecurityBaselineContributingPolicy>|null $value Value to set for the contributingPolicies property.
    */
    public function setContributingPolicies(?array $value): void {
        $this->getBackingStore()->set('contributingPolicies', $value);
    }

    /**
     * Sets the errorCode property value. The error code if the setting is in error state
     * @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value): void {
        $this->getBackingStore()->set('errorCode', $value);
    }

    /**
     * Sets the settingCategoryId property value. The setting category id which this setting belongs to
     * @param string|null $value Value to set for the settingCategoryId property.
    */
    public function setSettingCategoryId(?string $value): void {
        $this->getBackingStore()->set('settingCategoryId', $value);
    }

    /**
     * Sets the settingCategoryName property value. The setting category name which this setting belongs to
     * @param string|null $value Value to set for the settingCategoryName property.
    */
    public function setSettingCategoryName(?string $value): void {
        $this->getBackingStore()->set('settingCategoryName', $value);
    }

    /**
     * Sets the settingId property value. The setting id guid
     * @param string|null $value Value to set for the settingId property.
    */
    public function setSettingId(?string $value): void {
        $this->getBackingStore()->set('settingId', $value);
    }

    /**
     * Sets the settingName property value. The setting name that is being reported
     * @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value): void {
        $this->getBackingStore()->set('settingName', $value);
    }

    /**
     * Sets the sourcePolicies property value. The policies that contribute to this setting instance
     * @param array<SettingSource>|null $value Value to set for the sourcePolicies property.
    */
    public function setSourcePolicies(?array $value): void {
        $this->getBackingStore()->set('sourcePolicies', $value);
    }

    /**
     * Sets the state property value. Security Baseline Compliance State
     * @param SecurityBaselineComplianceState|null $value Value to set for the state property.
    */
    public function setState(?SecurityBaselineComplianceState $value): void {
        $this->getBackingStore()->set('state', $value);
    }

}
