<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Apple device features configuration profile.
*/
class EasEmailProfileConfigurationBase extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new easEmailProfileConfigurationBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.easEmailProfileConfigurationBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EasEmailProfileConfigurationBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EasEmailProfileConfigurationBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
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
        $val = $this->getBackingStore()->get('customDomainName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customDomainName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'customDomainName' => fn(ParseNode $n) => $o->setCustomDomainName($n->getStringValue()),
            'userDomainNameSource' => fn(ParseNode $n) => $o->setUserDomainNameSource($n->getEnumValue(EasEmailProfileConfigurationBase_userDomainNameSource::class)),
            'usernameAADSource' => fn(ParseNode $n) => $o->setUsernameAADSource($n->getEnumValue(EasEmailProfileConfigurationBase_usernameAADSource::class)),
            'usernameSource' => fn(ParseNode $n) => $o->setUsernameSource($n->getEnumValue(UserEmailSource::class)),
        ]);
    }

    /**
     * Gets the userDomainNameSource property value. UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
     * @return EasEmailProfileConfigurationBase_userDomainNameSource|null
    */
    public function getUserDomainNameSource(): ?EasEmailProfileConfigurationBase_userDomainNameSource {
        $val = $this->getBackingStore()->get('userDomainNameSource');
        if (is_null($val) || $val instanceof EasEmailProfileConfigurationBase_userDomainNameSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userDomainNameSource'");
    }

    /**
     * Gets the usernameAADSource property value. Name of the AAD field, that will be used to retrieve UserName for email profile. Possible values are: userPrincipalName, primarySmtpAddress, samAccountName.
     * @return EasEmailProfileConfigurationBase_usernameAADSource|null
    */
    public function getUsernameAADSource(): ?EasEmailProfileConfigurationBase_usernameAADSource {
        $val = $this->getBackingStore()->get('usernameAADSource');
        if (is_null($val) || $val instanceof EasEmailProfileConfigurationBase_usernameAADSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usernameAADSource'");
    }

    /**
     * Gets the usernameSource property value. Possible values for username source or email source.
     * @return UserEmailSource|null
    */
    public function getUsernameSource(): ?UserEmailSource {
        $val = $this->getBackingStore()->get('usernameSource');
        if (is_null($val) || $val instanceof UserEmailSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'usernameSource'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('customDomainName', $this->getCustomDomainName());
        $writer->writeEnumValue('userDomainNameSource', $this->getUserDomainNameSource());
        $writer->writeEnumValue('usernameAADSource', $this->getUsernameAADSource());
        $writer->writeEnumValue('usernameSource', $this->getUsernameSource());
    }

    /**
     * Sets the customDomainName property value. Custom domain name value used while generating an email profile before installing on the device.
     * @param string|null $value Value to set for the customDomainName property.
    */
    public function setCustomDomainName(?string $value): void {
        $this->getBackingStore()->set('customDomainName', $value);
    }

    /**
     * Sets the userDomainNameSource property value. UserDomainname attribute that is picked from AAD and injected into this profile before installing on the device. Possible values are: fullDomainName, netBiosDomainName.
     * @param EasEmailProfileConfigurationBase_userDomainNameSource|null $value Value to set for the userDomainNameSource property.
    */
    public function setUserDomainNameSource(?EasEmailProfileConfigurationBase_userDomainNameSource $value): void {
        $this->getBackingStore()->set('userDomainNameSource', $value);
    }

    /**
     * Sets the usernameAADSource property value. Name of the AAD field, that will be used to retrieve UserName for email profile. Possible values are: userPrincipalName, primarySmtpAddress, samAccountName.
     * @param EasEmailProfileConfigurationBase_usernameAADSource|null $value Value to set for the usernameAADSource property.
    */
    public function setUsernameAADSource(?EasEmailProfileConfigurationBase_usernameAADSource $value): void {
        $this->getBackingStore()->set('usernameAADSource', $value);
    }

    /**
     * Sets the usernameSource property value. Possible values for username source or email source.
     * @param UserEmailSource|null $value Value to set for the usernameSource property.
    */
    public function setUsernameSource(?UserEmailSource $value): void {
        $this->getBackingStore()->set('usernameSource', $value);
    }

}
