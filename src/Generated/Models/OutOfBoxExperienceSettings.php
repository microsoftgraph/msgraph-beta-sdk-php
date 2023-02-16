<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * Out of box experience setting
*/
class OutOfBoxExperienceSettings implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new outOfBoxExperienceSettings and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
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
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the deviceUsageType property value. The deviceUsageType property
     * @return WindowsDeviceUsageType|null
    */
    public function getDeviceUsageType(): ?WindowsDeviceUsageType {
        return $this->getBackingStore()->get('deviceUsageType');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'deviceUsageType' => fn(ParseNode $n) => $o->setDeviceUsageType($n->getEnumValue(WindowsDeviceUsageType::class)),
            'hideEscapeLink' => fn(ParseNode $n) => $o->setHideEscapeLink($n->getBooleanValue()),
            'hideEULA' => fn(ParseNode $n) => $o->setHideEULA($n->getBooleanValue()),
            'hidePrivacySettings' => fn(ParseNode $n) => $o->setHidePrivacySettings($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'skipKeyboardSelectionPage' => fn(ParseNode $n) => $o->setSkipKeyboardSelectionPage($n->getBooleanValue()),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(WindowsUserType::class)),
        ];
    }

    /**
     * Gets the hideEscapeLink property value. If set to true, then the user can't start over with different account, on company sign-in
     * @return bool|null
    */
    public function getHideEscapeLink(): ?bool {
        return $this->getBackingStore()->get('hideEscapeLink');
    }

    /**
     * Gets the hideEULA property value. Show or hide EULA to user
     * @return bool|null
    */
    public function getHideEULA(): ?bool {
        return $this->getBackingStore()->get('hideEULA');
    }

    /**
     * Gets the hidePrivacySettings property value. Show or hide privacy settings to user
     * @return bool|null
    */
    public function getHidePrivacySettings(): ?bool {
        return $this->getBackingStore()->get('hidePrivacySettings');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the skipKeyboardSelectionPage property value. If set, then skip the keyboard selection page if Language and Region are set
     * @return bool|null
    */
    public function getSkipKeyboardSelectionPage(): ?bool {
        return $this->getBackingStore()->get('skipKeyboardSelectionPage');
    }

    /**
     * Gets the userType property value. The userType property
     * @return WindowsUserType|null
    */
    public function getUserType(): ?WindowsUserType {
        return $this->getBackingStore()->get('userType');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('deviceUsageType', $this->getDeviceUsageType());
        $writer->writeBooleanValue('hideEscapeLink', $this->getHideEscapeLink());
        $writer->writeBooleanValue('hideEULA', $this->getHideEULA());
        $writer->writeBooleanValue('hidePrivacySettings', $this->getHidePrivacySettings());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('skipKeyboardSelectionPage', $this->getSkipKeyboardSelectionPage());
        $writer->writeEnumValue('userType', $this->getUserType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the deviceUsageType property value. The deviceUsageType property
     * @param WindowsDeviceUsageType|null $value Value to set for the deviceUsageType property.
    */
    public function setDeviceUsageType(?WindowsDeviceUsageType $value): void {
        $this->getBackingStore()->set('deviceUsageType', $value);
    }

    /**
     * Sets the hideEscapeLink property value. If set to true, then the user can't start over with different account, on company sign-in
     * @param bool|null $value Value to set for the hideEscapeLink property.
    */
    public function setHideEscapeLink(?bool $value): void {
        $this->getBackingStore()->set('hideEscapeLink', $value);
    }

    /**
     * Sets the hideEULA property value. Show or hide EULA to user
     * @param bool|null $value Value to set for the hideEULA property.
    */
    public function setHideEULA(?bool $value): void {
        $this->getBackingStore()->set('hideEULA', $value);
    }

    /**
     * Sets the hidePrivacySettings property value. Show or hide privacy settings to user
     * @param bool|null $value Value to set for the hidePrivacySettings property.
    */
    public function setHidePrivacySettings(?bool $value): void {
        $this->getBackingStore()->set('hidePrivacySettings', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the skipKeyboardSelectionPage property value. If set, then skip the keyboard selection page if Language and Region are set
     * @param bool|null $value Value to set for the skipKeyboardSelectionPage property.
    */
    public function setSkipKeyboardSelectionPage(?bool $value): void {
        $this->getBackingStore()->set('skipKeyboardSelectionPage', $value);
    }

    /**
     * Sets the userType property value. The userType property
     * @param WindowsUserType|null $value Value to set for the userType property.
    */
    public function setUserType(?WindowsUserType $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
