<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EasEmailProfileConfigurationBase extends DeviceConfiguration implements Parsable 
{
    /**
     * @var string|null $customDomainName Custom domain name value used while generating an email profile before installing on the device.
    */
    private ?string $customDomainName = null;
    
    /**
     * @var DomainNameSource|null $userDomainNameSource UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
    */
    private ?DomainNameSource $userDomainNameSource = null;
    
    /**
     * @var UsernameSource|null $usernameAADSource Name of the AAD field, that will be used to retrieve UserName for email profile. Possible values are: userPrincipalName, primarySmtpAddress, samAccountName.
    */
    private ?UsernameSource $usernameAADSource = null;
    
    /**
     * @var UserEmailSource|null $usernameSource Username attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
    */
    private ?UserEmailSource $usernameSource = null;
    
    /**
     * Instantiates a new EasEmailProfileConfigurationBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EasEmailProfileConfigurationBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EasEmailProfileConfigurationBase {
        $mappingValueNode = ParseNode::getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.iosEasEmailProfileConfiguration': return new IosEasEmailProfileConfiguration();
                case '#microsoft.graph.windows10EasEmailProfileConfiguration': return new Windows10EasEmailProfileConfiguration();
                case '#microsoft.graph.windowsPhoneEASEmailProfileConfiguration': return new WindowsPhoneEASEmailProfileConfiguration();
            }
        }
        return new EasEmailProfileConfigurationBase();
    }

    /**
     * Gets the customDomainName property value. Custom domain name value used while generating an email profile before installing on the device.
     * @return string|null
    */
    public function getCustomDomainName(): ?string {
        return $this->customDomainName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customDomainName' => function (ParseNode $n) use ($o) { $o->setCustomDomainName($n->getStringValue()); },
            'userDomainNameSource' => function (ParseNode $n) use ($o) { $o->setUserDomainNameSource($n->getEnumValue(DomainNameSource::class)); },
            'usernameAADSource' => function (ParseNode $n) use ($o) { $o->setUsernameAADSource($n->getEnumValue(UsernameSource::class)); },
            'usernameSource' => function (ParseNode $n) use ($o) { $o->setUsernameSource($n->getEnumValue(UserEmailSource::class)); },
        ]);
    }

    /**
     * Gets the userDomainNameSource property value. UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
     * @return DomainNameSource|null
    */
    public function getUserDomainNameSource(): ?DomainNameSource {
        return $this->userDomainNameSource;
    }

    /**
     * Gets the usernameAADSource property value. Name of the AAD field, that will be used to retrieve UserName for email profile. Possible values are: userPrincipalName, primarySmtpAddress, samAccountName.
     * @return UsernameSource|null
    */
    public function getUsernameAADSource(): ?UsernameSource {
        return $this->usernameAADSource;
    }

    /**
     * Gets the usernameSource property value. Username attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
     * @return UserEmailSource|null
    */
    public function getUsernameSource(): ?UserEmailSource {
        return $this->usernameSource;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('customDomainName', $this->customDomainName);
        $writer->writeEnumValue('userDomainNameSource', $this->userDomainNameSource);
        $writer->writeEnumValue('usernameAADSource', $this->usernameAADSource);
        $writer->writeEnumValue('usernameSource', $this->usernameSource);
    }

    /**
     * Sets the customDomainName property value. Custom domain name value used while generating an email profile before installing on the device.
     *  @param string|null $value Value to set for the customDomainName property.
    */
    public function setCustomDomainName(?string $value ): void {
        $this->customDomainName = $value;
    }

    /**
     * Sets the userDomainNameSource property value. UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
     *  @param DomainNameSource|null $value Value to set for the userDomainNameSource property.
    */
    public function setUserDomainNameSource(?DomainNameSource $value ): void {
        $this->userDomainNameSource = $value;
    }

    /**
     * Sets the usernameAADSource property value. Name of the AAD field, that will be used to retrieve UserName for email profile. Possible values are: userPrincipalName, primarySmtpAddress, samAccountName.
     *  @param UsernameSource|null $value Value to set for the usernameAADSource property.
    */
    public function setUsernameAADSource(?UsernameSource $value ): void {
        $this->usernameAADSource = $value;
    }

    /**
     * Sets the usernameSource property value. Username attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: userPrincipalName, primarySmtpAddress.
     *  @param UserEmailSource|null $value Value to set for the usernameSource property.
    */
    public function setUsernameSource(?UserEmailSource $value ): void {
        $this->usernameSource = $value;
    }

}
