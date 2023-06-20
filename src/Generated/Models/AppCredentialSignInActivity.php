<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppCredentialSignInActivity extends Entity implements Parsable 
{
    /**
     * Instantiates a new AppCredentialSignInActivity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppCredentialSignInActivity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppCredentialSignInActivity {
        return new AppCredentialSignInActivity();
    }

    /**
     * Gets the appId property value. The globally unique appId (also called client ID on the Azure portal) of the credential application.
     * @return string|null
    */
    public function getAppId(): ?string {
        return $this->getBackingStore()->get('appId');
    }

    /**
     * Gets the appObjectId property value. The ID of the credential application instance.
     * @return string|null
    */
    public function getAppObjectId(): ?string {
        return $this->getBackingStore()->get('appObjectId');
    }

    /**
     * Gets the createdDateTime property value. The date and time when the credential was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the credentialOrigin property value. The credentialOrigin property
     * @return ApplicationKeyOrigin|null
    */
    public function getCredentialOrigin(): ?ApplicationKeyOrigin {
        return $this->getBackingStore()->get('credentialOrigin');
    }

    /**
     * Gets the expirationDateTime property value. The date and time when the credential is set to expire. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'appId' => fn(ParseNode $n) => $o->setAppId($n->getStringValue()),
            'appObjectId' => fn(ParseNode $n) => $o->setAppObjectId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'credentialOrigin' => fn(ParseNode $n) => $o->setCredentialOrigin($n->getEnumValue(ApplicationKeyOrigin::class)),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'keyId' => fn(ParseNode $n) => $o->setKeyId($n->getStringValue()),
            'keyType' => fn(ParseNode $n) => $o->setKeyType($n->getEnumValue(ApplicationKeyType::class)),
            'keyUsage' => fn(ParseNode $n) => $o->setKeyUsage($n->getEnumValue(ApplicationKeyUsage::class)),
            'resourceId' => fn(ParseNode $n) => $o->setResourceId($n->getStringValue()),
            'servicePrincipalObjectId' => fn(ParseNode $n) => $o->setServicePrincipalObjectId($n->getStringValue()),
            'signInActivity' => fn(ParseNode $n) => $o->setSignInActivity($n->getObjectValue([SignInActivity::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the keyId property value. The key ID of the credential.
     * @return string|null
    */
    public function getKeyId(): ?string {
        return $this->getBackingStore()->get('keyId');
    }

    /**
     * Gets the keyType property value. Specifies the key type. The possible values are: clientSecret, certificate, unknownFutureValue.
     * @return ApplicationKeyType|null
    */
    public function getKeyType(): ?ApplicationKeyType {
        return $this->getBackingStore()->get('keyType');
    }

    /**
     * Gets the keyUsage property value. Specifies what the key was used for. The possible values are: sign, verify, unknownFutureValue.
     * @return ApplicationKeyUsage|null
    */
    public function getKeyUsage(): ?ApplicationKeyUsage {
        return $this->getBackingStore()->get('keyUsage');
    }

    /**
     * Gets the resourceId property value. The ID of the accessed resource.
     * @return string|null
    */
    public function getResourceId(): ?string {
        return $this->getBackingStore()->get('resourceId');
    }

    /**
     * Gets the servicePrincipalObjectId property value. The ID of the service principal.
     * @return string|null
    */
    public function getServicePrincipalObjectId(): ?string {
        return $this->getBackingStore()->get('servicePrincipalObjectId');
    }

    /**
     * Gets the signInActivity property value. The signInActivity property
     * @return SignInActivity|null
    */
    public function getSignInActivity(): ?SignInActivity {
        return $this->getBackingStore()->get('signInActivity');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('appId', $this->getAppId());
        $writer->writeStringValue('appObjectId', $this->getAppObjectId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeEnumValue('credentialOrigin', $this->getCredentialOrigin());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('keyId', $this->getKeyId());
        $writer->writeEnumValue('keyType', $this->getKeyType());
        $writer->writeEnumValue('keyUsage', $this->getKeyUsage());
        $writer->writeStringValue('resourceId', $this->getResourceId());
        $writer->writeStringValue('servicePrincipalObjectId', $this->getServicePrincipalObjectId());
        $writer->writeObjectValue('signInActivity', $this->getSignInActivity());
    }

    /**
     * Sets the appId property value. The globally unique appId (also called client ID on the Azure portal) of the credential application.
     * @param string|null $value Value to set for the appId property.
    */
    public function setAppId(?string $value): void {
        $this->getBackingStore()->set('appId', $value);
    }

    /**
     * Sets the appObjectId property value. The ID of the credential application instance.
     * @param string|null $value Value to set for the appObjectId property.
    */
    public function setAppObjectId(?string $value): void {
        $this->getBackingStore()->set('appObjectId', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the credential was created. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the credentialOrigin property value. The credentialOrigin property
     * @param ApplicationKeyOrigin|null $value Value to set for the credentialOrigin property.
    */
    public function setCredentialOrigin(?ApplicationKeyOrigin $value): void {
        $this->getBackingStore()->set('credentialOrigin', $value);
    }

    /**
     * Sets the expirationDateTime property value. The date and time when the credential is set to expire. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the keyId property value. The key ID of the credential.
     * @param string|null $value Value to set for the keyId property.
    */
    public function setKeyId(?string $value): void {
        $this->getBackingStore()->set('keyId', $value);
    }

    /**
     * Sets the keyType property value. Specifies the key type. The possible values are: clientSecret, certificate, unknownFutureValue.
     * @param ApplicationKeyType|null $value Value to set for the keyType property.
    */
    public function setKeyType(?ApplicationKeyType $value): void {
        $this->getBackingStore()->set('keyType', $value);
    }

    /**
     * Sets the keyUsage property value. Specifies what the key was used for. The possible values are: sign, verify, unknownFutureValue.
     * @param ApplicationKeyUsage|null $value Value to set for the keyUsage property.
    */
    public function setKeyUsage(?ApplicationKeyUsage $value): void {
        $this->getBackingStore()->set('keyUsage', $value);
    }

    /**
     * Sets the resourceId property value. The ID of the accessed resource.
     * @param string|null $value Value to set for the resourceId property.
    */
    public function setResourceId(?string $value): void {
        $this->getBackingStore()->set('resourceId', $value);
    }

    /**
     * Sets the servicePrincipalObjectId property value. The ID of the service principal.
     * @param string|null $value Value to set for the servicePrincipalObjectId property.
    */
    public function setServicePrincipalObjectId(?string $value): void {
        $this->getBackingStore()->set('servicePrincipalObjectId', $value);
    }

    /**
     * Sets the signInActivity property value. The signInActivity property
     * @param SignInActivity|null $value Value to set for the signInActivity property.
    */
    public function setSignInActivity(?SignInActivity $value): void {
        $this->getBackingStore()->set('signInActivity', $value);
    }

}
