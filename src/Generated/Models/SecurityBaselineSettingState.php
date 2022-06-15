<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SecurityBaselineSettingState extends Entity implements Parsable 
{
    /**
     * @var array<SecurityBaselineContributingPolicy>|null $contributingPolicies The policies that contribute to this setting instance
    */
    private ?array $contributingPolicies = null;
    
    /**
     * @var string|null $errorCode The error code if the setting is in error state
    */
    private ?string $errorCode = null;
    
    /**
     * @var string|null $settingCategoryId The setting category id which this setting belongs to
    */
    private ?string $settingCategoryId = null;
    
    /**
     * @var string|null $settingCategoryName The setting category name which this setting belongs to
    */
    private ?string $settingCategoryName = null;
    
    /**
     * @var string|null $settingId The setting id guid
    */
    private ?string $settingId = null;
    
    /**
     * @var string|null $settingName The setting name that is being reported
    */
    private ?string $settingName = null;
    
    /**
     * @var array<SettingSource>|null $sourcePolicies The policies that contribute to this setting instance
    */
    private ?array $sourcePolicies = null;
    
    /**
     * @var SecurityBaselineComplianceState|null $state The compliance state of the security baseline setting
    */
    private ?SecurityBaselineComplianceState $state = null;
    
    /**
     * Instantiates a new securityBaselineSettingState and sets the default values.
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
        return $this->contributingPolicies;
    }

    /**
     * Gets the errorCode property value. The error code if the setting is in error state
     * @return string|null
    */
    public function getErrorCode(): ?string {
        return $this->errorCode;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contributingPolicies' => function (ParseNode $n) use ($o) { $o->setContributingPolicies($n->getCollectionOfObjectValues(array(SecurityBaselineContributingPolicy::class, 'createFromDiscriminatorValue'))); },
            'errorCode' => function (ParseNode $n) use ($o) { $o->setErrorCode($n->getStringValue()); },
            'settingCategoryId' => function (ParseNode $n) use ($o) { $o->setSettingCategoryId($n->getStringValue()); },
            'settingCategoryName' => function (ParseNode $n) use ($o) { $o->setSettingCategoryName($n->getStringValue()); },
            'settingId' => function (ParseNode $n) use ($o) { $o->setSettingId($n->getStringValue()); },
            'settingName' => function (ParseNode $n) use ($o) { $o->setSettingName($n->getStringValue()); },
            'sourcePolicies' => function (ParseNode $n) use ($o) { $o->setSourcePolicies($n->getCollectionOfObjectValues(array(SettingSource::class, 'createFromDiscriminatorValue'))); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(SecurityBaselineComplianceState::class)); },
        ]);
    }

    /**
     * Gets the settingCategoryId property value. The setting category id which this setting belongs to
     * @return string|null
    */
    public function getSettingCategoryId(): ?string {
        return $this->settingCategoryId;
    }

    /**
     * Gets the settingCategoryName property value. The setting category name which this setting belongs to
     * @return string|null
    */
    public function getSettingCategoryName(): ?string {
        return $this->settingCategoryName;
    }

    /**
     * Gets the settingId property value. The setting id guid
     * @return string|null
    */
    public function getSettingId(): ?string {
        return $this->settingId;
    }

    /**
     * Gets the settingName property value. The setting name that is being reported
     * @return string|null
    */
    public function getSettingName(): ?string {
        return $this->settingName;
    }

    /**
     * Gets the sourcePolicies property value. The policies that contribute to this setting instance
     * @return array<SettingSource>|null
    */
    public function getSourcePolicies(): ?array {
        return $this->sourcePolicies;
    }

    /**
     * Gets the state property value. The compliance state of the security baseline setting
     * @return SecurityBaselineComplianceState|null
    */
    public function getState(): ?SecurityBaselineComplianceState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('contributingPolicies', $this->contributingPolicies);
        $writer->writeStringValue('errorCode', $this->errorCode);
        $writer->writeStringValue('settingCategoryId', $this->settingCategoryId);
        $writer->writeStringValue('settingCategoryName', $this->settingCategoryName);
        $writer->writeStringValue('settingId', $this->settingId);
        $writer->writeStringValue('settingName', $this->settingName);
        $writer->writeCollectionOfObjectValues('sourcePolicies', $this->sourcePolicies);
        $writer->writeEnumValue('state', $this->state);
    }

    /**
     * Sets the contributingPolicies property value. The policies that contribute to this setting instance
     *  @param array<SecurityBaselineContributingPolicy>|null $value Value to set for the contributingPolicies property.
    */
    public function setContributingPolicies(?array $value ): void {
        $this->contributingPolicies = $value;
    }

    /**
     * Sets the errorCode property value. The error code if the setting is in error state
     *  @param string|null $value Value to set for the errorCode property.
    */
    public function setErrorCode(?string $value ): void {
        $this->errorCode = $value;
    }

    /**
     * Sets the settingCategoryId property value. The setting category id which this setting belongs to
     *  @param string|null $value Value to set for the settingCategoryId property.
    */
    public function setSettingCategoryId(?string $value ): void {
        $this->settingCategoryId = $value;
    }

    /**
     * Sets the settingCategoryName property value. The setting category name which this setting belongs to
     *  @param string|null $value Value to set for the settingCategoryName property.
    */
    public function setSettingCategoryName(?string $value ): void {
        $this->settingCategoryName = $value;
    }

    /**
     * Sets the settingId property value. The setting id guid
     *  @param string|null $value Value to set for the settingId property.
    */
    public function setSettingId(?string $value ): void {
        $this->settingId = $value;
    }

    /**
     * Sets the settingName property value. The setting name that is being reported
     *  @param string|null $value Value to set for the settingName property.
    */
    public function setSettingName(?string $value ): void {
        $this->settingName = $value;
    }

    /**
     * Sets the sourcePolicies property value. The policies that contribute to this setting instance
     *  @param array<SettingSource>|null $value Value to set for the sourcePolicies property.
    */
    public function setSourcePolicies(?array $value ): void {
        $this->sourcePolicies = $value;
    }

    /**
     * Sets the state property value. The compliance state of the security baseline setting
     *  @param SecurityBaselineComplianceState|null $value Value to set for the state property.
    */
    public function setState(?SecurityBaselineComplianceState $value ): void {
        $this->state = $value;
    }

}
