<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsPrivacyDataAccessControlItem extends Entity 
{
    /** @var WindowsPrivacyDataAccessLevel|null $accessLevel This indicates an access level for the privacy data category to which the specified application will be given to. Possible values are: notConfigured, forceAllow, forceDeny, userInControl. */
    private ?WindowsPrivacyDataAccessLevel $accessLevel = null;
    
    /** @var string|null $appDisplayName The Package Family Name of a Windows app. When set, the access level applies to the specified application. */
    private ?string $appDisplayName = null;
    
    /** @var string|null $appPackageFamilyName The Package Family Name of a Windows app. When set, the access level applies to the specified application. */
    private ?string $appPackageFamilyName = null;
    
    /** @var WindowsPrivacyDataCategory|null $dataCategory This indicates a privacy data category to which the specific access control will apply. Possible values are: notConfigured, accountInfo, appsRunInBackground, calendar, callHistory, camera, contacts, diagnosticsInfo, email, location, messaging, microphone, motion, notifications, phone, radios, tasks, syncWithDevices, trustedDevices. */
    private ?WindowsPrivacyDataCategory $dataCategory = null;
    
    /**
     * Instantiates a new windowsPrivacyDataAccessControlItem and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsPrivacyDataAccessControlItem
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): WindowsPrivacyDataAccessControlItem {
        return new WindowsPrivacyDataAccessControlItem();
    }

    /**
     * Gets the accessLevel property value. This indicates an access level for the privacy data category to which the specified application will be given to. Possible values are: notConfigured, forceAllow, forceDeny, userInControl.
     * @return WindowsPrivacyDataAccessLevel|null
    */
    public function getAccessLevel(): ?WindowsPrivacyDataAccessLevel {
        return $this->accessLevel;
    }

    /**
     * Gets the appDisplayName property value. The Package Family Name of a Windows app. When set, the access level applies to the specified application.
     * @return string|null
    */
    public function getAppDisplayName(): ?string {
        return $this->appDisplayName;
    }

    /**
     * Gets the appPackageFamilyName property value. The Package Family Name of a Windows app. When set, the access level applies to the specified application.
     * @return string|null
    */
    public function getAppPackageFamilyName(): ?string {
        return $this->appPackageFamilyName;
    }

    /**
     * Gets the dataCategory property value. This indicates a privacy data category to which the specific access control will apply. Possible values are: notConfigured, accountInfo, appsRunInBackground, calendar, callHistory, camera, contacts, diagnosticsInfo, email, location, messaging, microphone, motion, notifications, phone, radios, tasks, syncWithDevices, trustedDevices.
     * @return WindowsPrivacyDataCategory|null
    */
    public function getDataCategory(): ?WindowsPrivacyDataCategory {
        return $this->dataCategory;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'accessLevel' => function (self $o, ParseNode $n) { $o->setAccessLevel($n->getEnumValue(WindowsPrivacyDataAccessLevel::class)); },
            'appDisplayName' => function (self $o, ParseNode $n) { $o->setAppDisplayName($n->getStringValue()); },
            'appPackageFamilyName' => function (self $o, ParseNode $n) { $o->setAppPackageFamilyName($n->getStringValue()); },
            'dataCategory' => function (self $o, ParseNode $n) { $o->setDataCategory($n->getEnumValue(WindowsPrivacyDataCategory::class)); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessLevel', $this->accessLevel);
        $writer->writeStringValue('appDisplayName', $this->appDisplayName);
        $writer->writeStringValue('appPackageFamilyName', $this->appPackageFamilyName);
        $writer->writeEnumValue('dataCategory', $this->dataCategory);
    }

    /**
     * Sets the accessLevel property value. This indicates an access level for the privacy data category to which the specified application will be given to. Possible values are: notConfigured, forceAllow, forceDeny, userInControl.
     *  @param WindowsPrivacyDataAccessLevel|null $value Value to set for the accessLevel property.
    */
    public function setAccessLevel(?WindowsPrivacyDataAccessLevel $value ): void {
        $this->accessLevel = $value;
    }

    /**
     * Sets the appDisplayName property value. The Package Family Name of a Windows app. When set, the access level applies to the specified application.
     *  @param string|null $value Value to set for the appDisplayName property.
    */
    public function setAppDisplayName(?string $value ): void {
        $this->appDisplayName = $value;
    }

    /**
     * Sets the appPackageFamilyName property value. The Package Family Name of a Windows app. When set, the access level applies to the specified application.
     *  @param string|null $value Value to set for the appPackageFamilyName property.
    */
    public function setAppPackageFamilyName(?string $value ): void {
        $this->appPackageFamilyName = $value;
    }

    /**
     * Sets the dataCategory property value. This indicates a privacy data category to which the specific access control will apply. Possible values are: notConfigured, accountInfo, appsRunInBackground, calendar, callHistory, camera, contacts, diagnosticsInfo, email, location, messaging, microphone, motion, notifications, phone, radios, tasks, syncWithDevices, trustedDevices.
     *  @param WindowsPrivacyDataCategory|null $value Value to set for the dataCategory property.
    */
    public function setDataCategory(?WindowsPrivacyDataCategory $value ): void {
        $this->dataCategory = $value;
    }

}
