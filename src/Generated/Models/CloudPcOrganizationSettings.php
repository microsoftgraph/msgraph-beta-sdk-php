<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcOrganizationSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new CloudPcOrganizationSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcOrganizationSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcOrganizationSettings {
        return new CloudPcOrganizationSettings();
    }

    /**
     * Gets the enableMEMAutoEnroll property value. Specifies whether new Cloud PCs will be automatically enrolled in Microsoft Endpoint Manager (MEM). The default value is false.
     * @return bool|null
    */
    public function getEnableMEMAutoEnroll(): ?bool {
        return $this->getBackingStore()->get('enableMEMAutoEnroll');
    }

    /**
     * Gets the enableSingleSignOn property value. True if the provisioned Cloud PC can be accessed by single sign-on. False indicates that the provisioned Cloud PC doesn't support this feature. Default value is false. Windows 365 users can use single sign-on to authenticate to Azure Active Directory (Azure AD) with passwordless options (for example, FIDO keys) to access their Cloud PC. Optional.
     * @return bool|null
    */
    public function getEnableSingleSignOn(): ?bool {
        return $this->getBackingStore()->get('enableSingleSignOn');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'enableMEMAutoEnroll' => fn(ParseNode $n) => $o->setEnableMEMAutoEnroll($n->getBooleanValue()),
            'enableSingleSignOn' => fn(ParseNode $n) => $o->setEnableSingleSignOn($n->getBooleanValue()),
            'osVersion' => fn(ParseNode $n) => $o->setOsVersion($n->getEnumValue(CloudPcOperatingSystem::class)),
            'userAccountType' => fn(ParseNode $n) => $o->setUserAccountType($n->getEnumValue(CloudPcUserAccountType::class)),
            'windowsSettings' => fn(ParseNode $n) => $o->setWindowsSettings($n->getObjectValue([CloudPcWindowsSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the osVersion property value. The version of the operating system (OS) to provision on Cloud PCs. The possible values are: windows10, windows11, unknownFutureValue.
     * @return CloudPcOperatingSystem|null
    */
    public function getOsVersion(): ?CloudPcOperatingSystem {
        return $this->getBackingStore()->get('osVersion');
    }

    /**
     * Gets the userAccountType property value. The account type of the user on provisioned Cloud PCs. The possible values are: standardUser, administrator, unknownFutureValue.
     * @return CloudPcUserAccountType|null
    */
    public function getUserAccountType(): ?CloudPcUserAccountType {
        return $this->getBackingStore()->get('userAccountType');
    }

    /**
     * Gets the windowsSettings property value. Represents the Cloud PC organization settings for a tenant. A tenant has only one cloudPcOrganizationSettings object. The default language value en-US.
     * @return CloudPcWindowsSettings|null
    */
    public function getWindowsSettings(): ?CloudPcWindowsSettings {
        return $this->getBackingStore()->get('windowsSettings');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('enableMEMAutoEnroll', $this->getEnableMEMAutoEnroll());
        $writer->writeBooleanValue('enableSingleSignOn', $this->getEnableSingleSignOn());
        $writer->writeEnumValue('osVersion', $this->getOsVersion());
        $writer->writeEnumValue('userAccountType', $this->getUserAccountType());
        $writer->writeObjectValue('windowsSettings', $this->getWindowsSettings());
    }

    /**
     * Sets the enableMEMAutoEnroll property value. Specifies whether new Cloud PCs will be automatically enrolled in Microsoft Endpoint Manager (MEM). The default value is false.
     * @param bool|null $value Value to set for the enableMEMAutoEnroll property.
    */
    public function setEnableMEMAutoEnroll(?bool $value): void {
        $this->getBackingStore()->set('enableMEMAutoEnroll', $value);
    }

    /**
     * Sets the enableSingleSignOn property value. True if the provisioned Cloud PC can be accessed by single sign-on. False indicates that the provisioned Cloud PC doesn't support this feature. Default value is false. Windows 365 users can use single sign-on to authenticate to Azure Active Directory (Azure AD) with passwordless options (for example, FIDO keys) to access their Cloud PC. Optional.
     * @param bool|null $value Value to set for the enableSingleSignOn property.
    */
    public function setEnableSingleSignOn(?bool $value): void {
        $this->getBackingStore()->set('enableSingleSignOn', $value);
    }

    /**
     * Sets the osVersion property value. The version of the operating system (OS) to provision on Cloud PCs. The possible values are: windows10, windows11, unknownFutureValue.
     * @param CloudPcOperatingSystem|null $value Value to set for the osVersion property.
    */
    public function setOsVersion(?CloudPcOperatingSystem $value): void {
        $this->getBackingStore()->set('osVersion', $value);
    }

    /**
     * Sets the userAccountType property value. The account type of the user on provisioned Cloud PCs. The possible values are: standardUser, administrator, unknownFutureValue.
     * @param CloudPcUserAccountType|null $value Value to set for the userAccountType property.
    */
    public function setUserAccountType(?CloudPcUserAccountType $value): void {
        $this->getBackingStore()->set('userAccountType', $value);
    }

    /**
     * Sets the windowsSettings property value. Represents the Cloud PC organization settings for a tenant. A tenant has only one cloudPcOrganizationSettings object. The default language value en-US.
     * @param CloudPcWindowsSettings|null $value Value to set for the windowsSettings property.
    */
    public function setWindowsSettings(?CloudPcWindowsSettings $value): void {
        $this->getBackingStore()->set('windowsSettings', $value);
    }

}
