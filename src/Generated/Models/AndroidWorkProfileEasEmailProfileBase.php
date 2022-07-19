<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AndroidWorkProfileEasEmailProfileBase extends DeviceConfiguration implements Parsable 
{
    /**
     * @var EasAuthenticationMethod|null $authenticationMethod Exchange Active Sync authentication method.
    */
    private ?EasAuthenticationMethod $authenticationMethod = null;
    
    /**
     * @var EmailSyncDuration|null $durationOfEmailToSync Possible values for email sync duration.
    */
    private ?EmailSyncDuration $durationOfEmailToSync = null;
    
    /**
     * @var UserEmailSource|null $emailAddressSource Possible values for username source or email source.
    */
    private ?UserEmailSource $emailAddressSource = null;
    
    /**
     * @var string|null $hostName Exchange location (URL) that the mail app connects to.
    */
    private ?string $hostName = null;
    
    /**
     * @var AndroidWorkProfileCertificateProfileBase|null $identityCertificate Identity certificate.
    */
    private ?AndroidWorkProfileCertificateProfileBase $identityCertificate = null;
    
    /**
     * @var bool|null $requireSsl Indicates whether or not to use SSL.
    */
    private ?bool $requireSsl = null;
    
    /**
     * @var AndroidUsernameSource|null $usernameSource Android username source.
    */
    private ?AndroidUsernameSource $usernameSource = null;
    
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
        return $this->authenticationMethod;
    }

    /**
     * Gets the durationOfEmailToSync property value. Possible values for email sync duration.
     * @return EmailSyncDuration|null
    */
    public function getDurationOfEmailToSync(): ?EmailSyncDuration {
        return $this->durationOfEmailToSync;
    }

    /**
     * Gets the emailAddressSource property value. Possible values for username source or email source.
     * @return UserEmailSource|null
    */
    public function getEmailAddressSource(): ?UserEmailSource {
        return $this->emailAddressSource;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getEnumValue(EasAuthenticationMethod::class)); },
            'durationOfEmailToSync' => function (ParseNode $n) use ($o) { $o->setDurationOfEmailToSync($n->getEnumValue(EmailSyncDuration::class)); },
            'emailAddressSource' => function (ParseNode $n) use ($o) { $o->setEmailAddressSource($n->getEnumValue(UserEmailSource::class)); },
            'hostName' => function (ParseNode $n) use ($o) { $o->setHostName($n->getStringValue()); },
            'identityCertificate' => function (ParseNode $n) use ($o) { $o->setIdentityCertificate($n->getObjectValue(array(AndroidWorkProfileCertificateProfileBase::class, 'createFromDiscriminatorValue'))); },
            'requireSsl' => function (ParseNode $n) use ($o) { $o->setRequireSsl($n->getBooleanValue()); },
            'usernameSource' => function (ParseNode $n) use ($o) { $o->setUsernameSource($n->getEnumValue(AndroidUsernameSource::class)); },
        ]);
    }

    /**
     * Gets the hostName property value. Exchange location (URL) that the mail app connects to.
     * @return string|null
    */
    public function getHostName(): ?string {
        return $this->hostName;
    }

    /**
     * Gets the identityCertificate property value. Identity certificate.
     * @return AndroidWorkProfileCertificateProfileBase|null
    */
    public function getIdentityCertificate(): ?AndroidWorkProfileCertificateProfileBase {
        return $this->identityCertificate;
    }

    /**
     * Gets the requireSsl property value. Indicates whether or not to use SSL.
     * @return bool|null
    */
    public function getRequireSsl(): ?bool {
        return $this->requireSsl;
    }

    /**
     * Gets the usernameSource property value. Android username source.
     * @return AndroidUsernameSource|null
    */
    public function getUsernameSource(): ?AndroidUsernameSource {
        return $this->usernameSource;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeEnumValue('durationOfEmailToSync', $this->durationOfEmailToSync);
        $writer->writeEnumValue('emailAddressSource', $this->emailAddressSource);
        $writer->writeStringValue('hostName', $this->hostName);
        $writer->writeObjectValue('identityCertificate', $this->identityCertificate);
        $writer->writeBooleanValue('requireSsl', $this->requireSsl);
        $writer->writeEnumValue('usernameSource', $this->usernameSource);
    }

    /**
     * Sets the authenticationMethod property value. Exchange Active Sync authentication method.
     *  @param EasAuthenticationMethod|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?EasAuthenticationMethod $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the durationOfEmailToSync property value. Possible values for email sync duration.
     *  @param EmailSyncDuration|null $value Value to set for the durationOfEmailToSync property.
    */
    public function setDurationOfEmailToSync(?EmailSyncDuration $value ): void {
        $this->durationOfEmailToSync = $value;
    }

    /**
     * Sets the emailAddressSource property value. Possible values for username source or email source.
     *  @param UserEmailSource|null $value Value to set for the emailAddressSource property.
    */
    public function setEmailAddressSource(?UserEmailSource $value ): void {
        $this->emailAddressSource = $value;
    }

    /**
     * Sets the hostName property value. Exchange location (URL) that the mail app connects to.
     *  @param string|null $value Value to set for the hostName property.
    */
    public function setHostName(?string $value ): void {
        $this->hostName = $value;
    }

    /**
     * Sets the identityCertificate property value. Identity certificate.
     *  @param AndroidWorkProfileCertificateProfileBase|null $value Value to set for the identityCertificate property.
    */
    public function setIdentityCertificate(?AndroidWorkProfileCertificateProfileBase $value ): void {
        $this->identityCertificate = $value;
    }

    /**
     * Sets the requireSsl property value. Indicates whether or not to use SSL.
     *  @param bool|null $value Value to set for the requireSsl property.
    */
    public function setRequireSsl(?bool $value ): void {
        $this->requireSsl = $value;
    }

    /**
     * Sets the usernameSource property value. Android username source.
     *  @param AndroidUsernameSource|null $value Value to set for the usernameSource property.
    */
    public function setUsernameSource(?AndroidUsernameSource $value ): void {
        $this->usernameSource = $value;
    }

}
