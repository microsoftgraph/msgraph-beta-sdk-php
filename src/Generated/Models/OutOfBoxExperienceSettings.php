<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OutOfBoxExperienceSettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WindowsDeviceUsageType|null $deviceUsageType AAD join authentication type. Possible values are: singleUser, shared.
    */
    private ?WindowsDeviceUsageType $deviceUsageType = null;
    
    /**
     * @var bool|null $hideEscapeLink If set to true, then the user can't start over with different account, on company sign-in
    */
    private ?bool $hideEscapeLink = null;
    
    /**
     * @var bool|null $hideEULA Show or hide EULA to user
    */
    private ?bool $hideEULA = null;
    
    /**
     * @var bool|null $hidePrivacySettings Show or hide privacy settings to user
    */
    private ?bool $hidePrivacySettings = null;
    
    /**
     * @var bool|null $skipKeyboardSelectionPage If set, then skip the keyboard selection page if Language and Region are set
    */
    private ?bool $skipKeyboardSelectionPage = null;
    
    /**
     * @var WindowsUserType|null $userType Type of user. Possible values are: administrator, standard.
    */
    private ?WindowsUserType $userType = null;
    
    /**
     * Instantiates a new outOfBoxExperienceSettings and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OutOfBoxExperienceSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OutOfBoxExperienceSettings {
        return new OutOfBoxExperienceSettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the deviceUsageType property value. AAD join authentication type. Possible values are: singleUser, shared.
     * @return WindowsDeviceUsageType|null
    */
    public function getDeviceUsageType(): ?WindowsDeviceUsageType {
        return $this->deviceUsageType;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceUsageType' => function (ParseNode $n) use ($o) { $o->setDeviceUsageType($n->getEnumValue(WindowsDeviceUsageType::class)); },
            'hideEscapeLink' => function (ParseNode $n) use ($o) { $o->setHideEscapeLink($n->getBooleanValue()); },
            'hideEULA' => function (ParseNode $n) use ($o) { $o->setHideEULA($n->getBooleanValue()); },
            'hidePrivacySettings' => function (ParseNode $n) use ($o) { $o->setHidePrivacySettings($n->getBooleanValue()); },
            'skipKeyboardSelectionPage' => function (ParseNode $n) use ($o) { $o->setSkipKeyboardSelectionPage($n->getBooleanValue()); },
            'userType' => function (ParseNode $n) use ($o) { $o->setUserType($n->getEnumValue(WindowsUserType::class)); },
        ];
    }

    /**
     * Gets the hideEscapeLink property value. If set to true, then the user can't start over with different account, on company sign-in
     * @return bool|null
    */
    public function getHideEscapeLink(): ?bool {
        return $this->hideEscapeLink;
    }

    /**
     * Gets the hideEULA property value. Show or hide EULA to user
     * @return bool|null
    */
    public function getHideEULA(): ?bool {
        return $this->hideEULA;
    }

    /**
     * Gets the hidePrivacySettings property value. Show or hide privacy settings to user
     * @return bool|null
    */
    public function getHidePrivacySettings(): ?bool {
        return $this->hidePrivacySettings;
    }

    /**
     * Gets the skipKeyboardSelectionPage property value. If set, then skip the keyboard selection page if Language and Region are set
     * @return bool|null
    */
    public function getSkipKeyboardSelectionPage(): ?bool {
        return $this->skipKeyboardSelectionPage;
    }

    /**
     * Gets the userType property value. Type of user. Possible values are: administrator, standard.
     * @return WindowsUserType|null
    */
    public function getUserType(): ?WindowsUserType {
        return $this->userType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('deviceUsageType', $this->deviceUsageType);
        $writer->writeBooleanValue('hideEscapeLink', $this->hideEscapeLink);
        $writer->writeBooleanValue('hideEULA', $this->hideEULA);
        $writer->writeBooleanValue('hidePrivacySettings', $this->hidePrivacySettings);
        $writer->writeBooleanValue('skipKeyboardSelectionPage', $this->skipKeyboardSelectionPage);
        $writer->writeEnumValue('userType', $this->userType);
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
     * Sets the deviceUsageType property value. AAD join authentication type. Possible values are: singleUser, shared.
     *  @param WindowsDeviceUsageType|null $value Value to set for the deviceUsageType property.
    */
    public function setDeviceUsageType(?WindowsDeviceUsageType $value ): void {
        $this->deviceUsageType = $value;
    }

    /**
     * Sets the hideEscapeLink property value. If set to true, then the user can't start over with different account, on company sign-in
     *  @param bool|null $value Value to set for the hideEscapeLink property.
    */
    public function setHideEscapeLink(?bool $value ): void {
        $this->hideEscapeLink = $value;
    }

    /**
     * Sets the hideEULA property value. Show or hide EULA to user
     *  @param bool|null $value Value to set for the hideEULA property.
    */
    public function setHideEULA(?bool $value ): void {
        $this->hideEULA = $value;
    }

    /**
     * Sets the hidePrivacySettings property value. Show or hide privacy settings to user
     *  @param bool|null $value Value to set for the hidePrivacySettings property.
    */
    public function setHidePrivacySettings(?bool $value ): void {
        $this->hidePrivacySettings = $value;
    }

    /**
     * Sets the skipKeyboardSelectionPage property value. If set, then skip the keyboard selection page if Language and Region are set
     *  @param bool|null $value Value to set for the skipKeyboardSelectionPage property.
    */
    public function setSkipKeyboardSelectionPage(?bool $value ): void {
        $this->skipKeyboardSelectionPage = $value;
    }

    /**
     * Sets the userType property value. Type of user. Possible values are: administrator, standard.
     *  @param WindowsUserType|null $value Value to set for the userType property.
    */
    public function setUserType(?WindowsUserType $value ): void {
        $this->userType = $value;
    }

}
