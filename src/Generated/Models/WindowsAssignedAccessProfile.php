<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

/**
 * Assigned Access profile for Windows.
*/
class WindowsAssignedAccessProfile extends Entity implements Parsable 
{
    /**
     * Instantiates a new WindowsAssignedAccessProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsAssignedAccessProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsAssignedAccessProfile {
        return new WindowsAssignedAccessProfile();
    }

    /**
     * Gets the appUserModelIds property value. These are the only Windows Store Apps that will be available to launch from the Start menu.
     * @return array<string>|null
    */
    public function getAppUserModelIds(): ?array {
        $val = $this->getBackingStore()->get('appUserModelIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'appUserModelIds'");
    }

    /**
     * Gets the desktopAppPaths property value. These are the paths of the Desktop Apps that will be available on the Start menu and the only apps the user will be able to launch.
     * @return array<string>|null
    */
    public function getDesktopAppPaths(): ?array {
        $val = $this->getBackingStore()->get('desktopAppPaths');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'desktopAppPaths'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appUserModelIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAppUserModelIds($val);
            },
            'desktopAppPaths' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setDesktopAppPaths($val);
            },
            'profileName' => fn(ParseNode $n) => $o->setProfileName($n->getStringValue()),
            'showTaskBar' => fn(ParseNode $n) => $o->setShowTaskBar($n->getBooleanValue()),
            'startMenuLayoutXml' => fn(ParseNode $n) => $o->setStartMenuLayoutXml($n->getBinaryContent()),
            'userAccounts' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setUserAccounts($val);
            },
        ]);
    }

    /**
     * Gets the profileName property value. This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
     * @return string|null
    */
    public function getProfileName(): ?string {
        $val = $this->getBackingStore()->get('profileName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'profileName'");
    }

    /**
     * Gets the showTaskBar property value. This setting allows the admin to specify whether the Task Bar is shown or not.
     * @return bool|null
    */
    public function getShowTaskBar(): ?bool {
        $val = $this->getBackingStore()->get('showTaskBar');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'showTaskBar'");
    }

    /**
     * Gets the startMenuLayoutXml property value. Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format.
     * @return StreamInterface|null
    */
    public function getStartMenuLayoutXml(): ?StreamInterface {
        $val = $this->getBackingStore()->get('startMenuLayoutXml');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'startMenuLayoutXml'");
    }

    /**
     * Gets the userAccounts property value. The user accounts that will be locked to this kiosk configuration.
     * @return array<string>|null
    */
    public function getUserAccounts(): ?array {
        $val = $this->getBackingStore()->get('userAccounts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAccounts'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfPrimitiveValues('appUserModelIds', $this->getAppUserModelIds());
        $writer->writeCollectionOfPrimitiveValues('desktopAppPaths', $this->getDesktopAppPaths());
        $writer->writeStringValue('profileName', $this->getProfileName());
        $writer->writeBooleanValue('showTaskBar', $this->getShowTaskBar());
        $writer->writeBinaryContent('startMenuLayoutXml', $this->getStartMenuLayoutXml());
        $writer->writeCollectionOfPrimitiveValues('userAccounts', $this->getUserAccounts());
    }

    /**
     * Sets the appUserModelIds property value. These are the only Windows Store Apps that will be available to launch from the Start menu.
     * @param array<string>|null $value Value to set for the appUserModelIds property.
    */
    public function setAppUserModelIds(?array $value): void {
        $this->getBackingStore()->set('appUserModelIds', $value);
    }

    /**
     * Sets the desktopAppPaths property value. These are the paths of the Desktop Apps that will be available on the Start menu and the only apps the user will be able to launch.
     * @param array<string>|null $value Value to set for the desktopAppPaths property.
    */
    public function setDesktopAppPaths(?array $value): void {
        $this->getBackingStore()->set('desktopAppPaths', $value);
    }

    /**
     * Sets the profileName property value. This is a friendly name used to identify a group of applications, the layout of these apps on the start menu and the users to whom this kiosk configuration is assigned.
     * @param string|null $value Value to set for the profileName property.
    */
    public function setProfileName(?string $value): void {
        $this->getBackingStore()->set('profileName', $value);
    }

    /**
     * Sets the showTaskBar property value. This setting allows the admin to specify whether the Task Bar is shown or not.
     * @param bool|null $value Value to set for the showTaskBar property.
    */
    public function setShowTaskBar(?bool $value): void {
        $this->getBackingStore()->set('showTaskBar', $value);
    }

    /**
     * Sets the startMenuLayoutXml property value. Allows admins to override the default Start layout and prevents the user from changing it. The layout is modified by specifying an XML file based on a layout modification schema. XML needs to be in Binary format.
     * @param StreamInterface|null $value Value to set for the startMenuLayoutXml property.
    */
    public function setStartMenuLayoutXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('startMenuLayoutXml', $value);
    }

    /**
     * Sets the userAccounts property value. The user accounts that will be locked to this kiosk configuration.
     * @param array<string>|null $value Value to set for the userAccounts property.
    */
    public function setUserAccounts(?array $value): void {
        $this->getBackingStore()->set('userAccounts', $value);
    }

}
