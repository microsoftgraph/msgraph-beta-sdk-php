<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * Base for Android Work Profile EAS Email profiles
*/
class AndroidWorkProfileEasEmailProfileBase extends DeviceConfiguration implements Parsable 
{
    /**
     * Instantiates a new AndroidWorkProfileEasEmailProfileBase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.androidWorkProfileEasEmailProfileBase');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidWorkProfileEasEmailProfileBase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidWorkProfileEasEmailProfileBase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.androidWorkProfileGmailEasConfiguration': return new AndroidWorkProfileGmailEasConfiguration();
                case '#microsoft.graph.androidWorkProfileNineWorkEasConfiguration': return new AndroidWorkProfileNineWorkEasConfiguration();
            }
        }
        return new AndroidWorkProfileEasEmailProfileBase();
    }

    /**
     * Gets the authenticationMethod property value. Exchange Active Sync authentication method.
     * @return EasAuthenticationMethod|null
    */
    public function getAuthenticationMethod(): ?EasAuthenticationMethod {
        $val = $this->getBackingStore()->get('authenticationMethod');
        if (is_null($val) || $val instanceof EasAuthenticationMethod) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'authenticationMethod'");
    }

    /**
     * Gets the durationOfEmailToSync property value. Possible values for email sync duration.
     * @return EmailSyncDuration|null
    */
    public function getDurationOfEmailToSync(): ?EmailSyncDuration {
        $val = $this->getBackingStore()->get('durationOfEmailToSync');
        if (is_null($val) || $val instanceof EmailSyncDuration) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationOfEmailToSync'");
    }

    /**
     * Gets the emailAddressSource property value. Possible values for username source or email source.
     * @return UserEmailSource|null
    */
    public function getEmailAddressSource(): ?UserEmailSource {
        $val = $this->getBackingStore()->get('emailAddressSource');
        if (is_null($val) || $val instanceof UserEmailSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'emailAddressSource'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getEnumValue(EasAuthenticationMethod::class)),
            'durationOfEmailToSync' => fn(ParseNode $n) => $o->setDurationOfEmailToSync($n->getEnumValue(EmailSyncDuration::class)),
            'emailAddressSource' => fn(ParseNode $n) => $o->setEmailAddressSource($n->getEnumValue(UserEmailSource::class)),
            'hostName' => fn(ParseNode $n) => $o->setHostName($n->getStringValue()),
            'identityCertificate' => fn(ParseNode $n) => $o->setIdentityCertificate($n->getObjectValue([AndroidWorkProfileCertificateProfileBase::class, 'createFromDiscriminatorValue'])),
            'requireSsl' => fn(ParseNode $n) => $o->setRequireSsl($n->getBooleanValue()),
            'usernameSource' => fn(ParseNode $n) => $o->setUsernameSource($n->getEnumValue(AndroidUsernameSource::class)),
        ]);
    }

    /**
     * Gets the hostName property value. Exchange location (URL) that the mail app connects to.
     * @return string|null
    */
    public function getHostName(): ?string {
        $val = $this->getBackingStore()->get('hostName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'hostName'");
    }

    /**
     * Gets the identityCertificate property value. Identity certificate.
     * @return AndroidWorkProfileCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?AndroidWorkProfileCertificateProfileBase {
        $val = $this->getBackingStore()->get('identityCertificate');
        if (is_null($val) || $val instanceof AndroidWorkProfileCertificateProfileBase) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'identityCertificate'");
    }

    /**
     * Gets the requireSsl property value. Indicates whether or not to use SSL.
     * @return bool|null
    */
    public function getRequireSsl(): ?bool {
        $val = $this->getBackingStore()->get('requireSsl');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requireSsl'");
    }

    /**
     * Gets the usernameSource property value. Android username source.
     * @return AndroidUsernameSource|null
    */
    public function getUsernameSource(): ?AndroidUsernameSource {
        $val = $this->getBackingStore()->get('usernameSource');
        if (is_null($val) || $val instanceof AndroidUsernameSource) {
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
        $writer->writeEnumValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeEnumValue('durationOfEmailToSync', $this->getDurationOfEmailToSync());
        $writer->writeEnumValue('emailAddressSource', $this->getEmailAddressSource());
        $writer->writeStringValue('hostName', $this->getHostName());
        $writer->writeObjectValue('identityCertificate', $this->getIdentityCertificate());
        $writer->writeBooleanValue('requireSsl', $this->getRequireSsl());
        $writer->writeEnumValue('usernameSource', $this->getUsernameSource());
    }

    /**
     * Sets the authenticationMethod property value. Exchange Active Sync authentication method.
     * @param EasAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?EasAuthenticationMethod $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the durationOfEmailToSync property value. Possible values for email sync duration.
     * @param EmailSyncDuration|null $value Value to set for the durationOfEmailToSync property.
    */
    public function setDurationOfEmailToSync(?EmailSyncDuration $value): void {
        $this->getBackingStore()->set('durationOfEmailToSync', $value);
    }

    /**
     * Sets the emailAddressSource property value. Possible values for username source or email source.
     * @param UserEmailSource|null $value Value to set for the emailAddressSource property.
    */
    public function setEmailAddressSource(?UserEmailSource $value): void {
        $this->getBackingStore()->set('emailAddressSource', $value);
    }

    /**
     * Sets the hostName property value. Exchange location (URL) that the mail app connects to.
     * @param string|null $value Value to set for the hostName property.
    */
    public function setHostName(?string $value): void {
        $this->getBackingStore()->set('hostName', $value);
    }

    /**
     * Sets the identityCertificate property value. Identity certificate.
     * @param AndroidWorkProfileCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?AndroidWorkProfileCertificateProfileBase $value): void {
        $this->getBackingStore()->set('identityCertificate', $value);
    }

    /**
     * Sets the requireSsl property value. Indicates whether or not to use SSL.
     * @param bool|null $value Value to set for the requireSsl property.
    */
    public function setRequireSsl(?bool $value): void {
        $this->getBackingStore()->set('requireSsl', $value);
    }

    /**
     * Sets the usernameSource property value. Android username source.
     * @param AndroidUsernameSource|null $value Value to set for the usernameSource property.
    */
    public function setUsernameSource(?AndroidUsernameSource $value): void {
        $this->getBackingStore()->set('usernameSource', $value);
    }

}
