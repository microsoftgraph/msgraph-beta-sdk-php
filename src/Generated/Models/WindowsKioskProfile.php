<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskProfile implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var WindowsKioskAppConfiguration|null $appConfiguration The app base class used to identify the application info for the kiosk configuration
    */
    private ?WindowsKioskAppConfiguration $appConfiguration = null;
    
    /**
     * @var string|null $profileId Key of the entity.
    */
    private ?string $profileId = null;
    
    /**
     * @var string|null $profileName This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
    */
    private ?string $profileName = null;
    
    /**
     * @var array<WindowsKioskUser>|null $userAccountsConfiguration The user accounts that will be locked to this kiosk configuration. This collection can contain a maximum of 100 elements.
    */
    private ?array $userAccountsConfiguration = null;
    
    /**
     * Instantiates a new windowsKioskProfile and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the appConfiguration property value. The app base class used to identify the application info for the kiosk configuration
     * @return WindowsKioskAppConfiguration|null
    */
    public function getAppConfiguration(): ?WindowsKioskAppConfiguration {
        return $this->appConfiguration;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'appConfiguration' => function (ParseNode $n) use ($o) { $o->setAppConfiguration($n->getObjectValue(array(WindowsKioskAppConfiguration::class, 'createFromDiscriminatorValue'))); },
            'profileId' => function (ParseNode $n) use ($o) { $o->setProfileId($n->getStringValue()); },
            'profileName' => function (ParseNode $n) use ($o) { $o->setProfileName($n->getStringValue()); },
            'userAccountsConfiguration' => function (ParseNode $n) use ($o) { $o->setUserAccountsConfiguration($n->getCollectionOfObjectValues(array(WindowsKioskUser::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the profileId property value. Key of the entity.
     * @return string|null
    */
    public function getProfileId(): ?string {
        return $this->profileId;
    }

    /**
     * Gets the profileName property value. This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
     * @return string|null
    */
    public function getProfileName(): ?string {
        return $this->profileName;
    }

    /**
     * Gets the userAccountsConfiguration property value. The user accounts that will be locked to this kiosk configuration. This collection can contain a maximum of 100 elements.
     * @return array<WindowsKioskUser>|null
    */
    public function getUserAccountsConfiguration(): ?array {
        return $this->userAccountsConfiguration;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('appConfiguration', $this->appConfiguration);
        $writer->writeStringValue('profileId', $this->profileId);
        $writer->writeStringValue('profileName', $this->profileName);
        $writer->writeCollectionOfObjectValues('userAccountsConfiguration', $this->userAccountsConfiguration);
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
     * Sets the appConfiguration property value. The app base class used to identify the application info for the kiosk configuration
     *  @param WindowsKioskAppConfiguration|null $value Value to set for the appConfiguration property.
    */
    public function setAppConfiguration(?WindowsKioskAppConfiguration $value ): void {
        $this->appConfiguration = $value;
    }

    /**
     * Sets the profileId property value. Key of the entity.
     *  @param string|null $value Value to set for the profileId property.
    */
    public function setProfileId(?string $value ): void {
        $this->profileId = $value;
    }

    /**
     * Sets the profileName property value. This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
     *  @param string|null $value Value to set for the profileName property.
    */
    public function setProfileName(?string $value ): void {
        $this->profileName = $value;
    }

    /**
     * Sets the userAccountsConfiguration property value. The user accounts that will be locked to this kiosk configuration. This collection can contain a maximum of 100 elements.
     *  @param array<WindowsKioskUser>|null $value Value to set for the userAccountsConfiguration property.
    */
    public function setUserAccountsConfiguration(?array $value ): void {
        $this->userAccountsConfiguration = $value;
    }

}
