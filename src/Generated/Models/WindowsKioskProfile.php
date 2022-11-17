<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class WindowsKioskProfile implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new windowsKioskProfile and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.windowsKioskProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskProfile {
        return new WindowsKioskProfile();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the appConfiguration property value. The app base class used to identify the application info for the kiosk configuration
     * @return WindowsKioskAppConfiguration|null
    */
    public function getAppConfiguration(): ?WindowsKioskAppConfiguration {
        return $this->getBackingStore()->get('appConfiguration');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appConfiguration' => fn(ParseNode $n) => $o->setAppConfiguration($n->getObjectValue([WindowsKioskAppConfiguration::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'profileId' => fn(ParseNode $n) => $o->setProfileId($n->getStringValue()),
            'profileName' => fn(ParseNode $n) => $o->setProfileName($n->getStringValue()),
            'userAccountsConfiguration' => fn(ParseNode $n) => $o->setUserAccountsConfiguration($n->getCollectionOfObjectValues([WindowsKioskUser::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the profileId property value. Key of the entity.
     * @return string|null
    */
    public function getProfileId(): ?string {
        return $this->getBackingStore()->get('profileId');
    }

    /**
     * Gets the profileName property value. This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
     * @return string|null
    */
    public function getProfileName(): ?string {
        return $this->getBackingStore()->get('profileName');
    }

    /**
     * Gets the userAccountsConfiguration property value. The user accounts that will be locked to this kiosk configuration. This collection can contain a maximum of 100 elements.
     * @return array<WindowsKioskUser>|null
    */
    public function getUserAccountsConfiguration(): ?array {
        return $this->getBackingStore()->get('userAccountsConfiguration');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('appConfiguration', $this->getAppConfiguration());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('profileId', $this->getProfileId());
        $writer->writeStringValue('profileName', $this->getProfileName());
        $writer->writeCollectionOfObjectValues('userAccountsConfiguration', $this->getUserAccountsConfiguration());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the appConfiguration property value. The app base class used to identify the application info for the kiosk configuration
     *  @param WindowsKioskAppConfiguration|null $value Value to set for the appConfiguration property.
    */
    public function setAppConfiguration(?WindowsKioskAppConfiguration $value): void {
        $this->getBackingStore()->set('appConfiguration', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the profileId property value. Key of the entity.
     *  @param string|null $value Value to set for the profileId property.
    */
    public function setProfileId(?string $value): void {
        $this->getBackingStore()->set('profileId', $value);
    }

    /**
     * Sets the profileName property value. This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
     *  @param string|null $value Value to set for the profileName property.
    */
    public function setProfileName(?string $value): void {
        $this->getBackingStore()->set('profileName', $value);
    }

    /**
     * Sets the userAccountsConfiguration property value. The user accounts that will be locked to this kiosk configuration. This collection can contain a maximum of 100 elements.
     *  @param array<WindowsKioskUser>|null $value Value to set for the userAccountsConfiguration property.
    */
    public function setUserAccountsConfiguration(?array $value): void {
        $this->getBackingStore()->set('userAccountsConfiguration', $value);
    }

}
