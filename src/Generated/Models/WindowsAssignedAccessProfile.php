<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class WindowsAssignedAccessProfile extends Entity 
{
    /** @var array<string>|null $appUserModelIds These are the only Windows Store Apps that will be available to launch from the Start menu. */
    private ?array $appUserModelIds = null;
    
    /** @var array<string>|null $desktopAppPaths These are the paths of the Desktop Apps that will be available on the Start menu and the only apps the user will be able to launch. */
    private ?array $desktopAppPaths = null;
    
    /** @var string|null $profileName This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned. */
    private ?string $profileName = null;
    
    /** @var bool|null $showTaskBar This setting allows the admin to specify whether the Task Bar is shown or not. */
    private ?bool $showTaskBar = null;
    
    /** @var StreamInterface|null $startMenuLayoutXml Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format. */
    private ?StreamInterface $startMenuLayoutXml = null;
    
    /** @var array<string>|null $userAccounts The user accounts that will be locked to this kiosk configuration. */
    private ?array $userAccounts = null;
    
    /**
     * Instantiates a new windowsAssignedAccessProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAssignedAccessProfile
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAssignedAccessProfile {
        return new WindowsAssignedAccessProfile();
    }

    /**
     * Gets the appUserModelIds property value. These are the only Windows Store Apps that will be available to launch from the Start menu.
     * @return array<string>|null
    */
    public function getAppUserModelIds(): ?array {
        return $this->appUserModelIds;
    }

    /**
     * Gets the desktopAppPaths property value. These are the paths of the Desktop Apps that will be available on the Start menu and the only apps the user will be able to launch.
     * @return array<string>|null
    */
    public function getDesktopAppPaths(): ?array {
        return $this->desktopAppPaths;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'appUserModelIds' => function (self $o, ParseNode $n) { $o->setAppUserModelIds($n->getCollectionOfPrimitiveValues()); },
            'desktopAppPaths' => function (self $o, ParseNode $n) { $o->setDesktopAppPaths($n->getCollectionOfPrimitiveValues()); },
            'profileName' => function (self $o, ParseNode $n) { $o->setProfileName($n->getStringValue()); },
            'showTaskBar' => function (self $o, ParseNode $n) { $o->setShowTaskBar($n->getBooleanValue()); },
            'startMenuLayoutXml' => function (self $o, ParseNode $n) { $o->setStartMenuLayoutXml($n->getBinaryContent()); },
            'userAccounts' => function (self $o, ParseNode $n) { $o->setUserAccounts($n->getCollectionOfPrimitiveValues()); },
        ]);
    }

    /**
     * Gets the profileName property value. This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
     * @return string|null
    */
    public function getProfileName(): ?string {
        return $this->profileName;
    }

    /**
     * Gets the showTaskBar property value. This setting allows the admin to specify whether the Task Bar is shown or not.
     * @return bool|null
    */
    public function getShowTaskBar(): ?bool {
        return $this->showTaskBar;
    }

    /**
     * Gets the startMenuLayoutXml property value. Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format.
     * @return StreamInterface|null
    */
    public function getStartMenuLayoutXml(): ?StreamInterface {
        return $this->startMenuLayoutXml;
    }

    /**
     * Gets the userAccounts property value. The user accounts that will be locked to this kiosk configuration.
     * @return array<string>|null
    */
    public function getUserAccounts(): ?array {
        return $this->userAccounts;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('appUserModelIds', $this->appUserModelIds);
        $writer->writeCollectionOfPrimitiveValues('desktopAppPaths', $this->desktopAppPaths);
        $writer->writeStringValue('profileName', $this->profileName);
        $writer->writeBooleanValue('showTaskBar', $this->showTaskBar);
        $writer->writeBinaryContent('startMenuLayoutXml', $this->startMenuLayoutXml);
        $writer->writeCollectionOfPrimitiveValues('userAccounts', $this->userAccounts);
    }

    /**
     * Sets the appUserModelIds property value. These are the only Windows Store Apps that will be available to launch from the Start menu.
     *  @param array<string>|null $value Value to set for the appUserModelIds property.
    */
    public function setAppUserModelIds(?array $value ): void {
        $this->appUserModelIds = $value;
    }

    /**
     * Sets the desktopAppPaths property value. These are the paths of the Desktop Apps that will be available on the Start menu and the only apps the user will be able to launch.
     *  @param array<string>|null $value Value to set for the desktopAppPaths property.
    */
    public function setDesktopAppPaths(?array $value ): void {
        $this->desktopAppPaths = $value;
    }

    /**
     * Sets the profileName property value. This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
     *  @param string|null $value Value to set for the profileName property.
    */
    public function setProfileName(?string $value ): void {
        $this->profileName = $value;
    }

    /**
     * Sets the showTaskBar property value. This setting allows the admin to specify whether the Task Bar is shown or not.
     *  @param bool|null $value Value to set for the showTaskBar property.
    */
    public function setShowTaskBar(?bool $value ): void {
        $this->showTaskBar = $value;
    }

    /**
     * Sets the startMenuLayoutXml property value. Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format.
     *  @param StreamInterface|null $value Value to set for the startMenuLayoutXml property.
    */
    public function setStartMenuLayoutXml(?StreamInterface $value ): void {
        $this->startMenuLayoutXml = $value;
    }

    /**
     * Sets the userAccounts property value. The user accounts that will be locked to this kiosk configuration.
     *  @param array<string>|null $value Value to set for the userAccounts property.
    */
    public function setUserAccounts(?array $value ): void {
        $this->userAccounts = $value;
    }

}
