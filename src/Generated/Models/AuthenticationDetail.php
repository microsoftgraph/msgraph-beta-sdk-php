<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AuthenticationDetail implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new authenticationDetail and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationDetail
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationDetail {
        return new AuthenticationDetail();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the authenticationMethod property value. The type of authentication method used to perform this step of authentication. Possible values: Password, SMS, Voice, Authenticator App, Software OATH token, Satisfied by token, Previously satisfied.
     * @return string|null
    */
    public function getAuthenticationMethod(): ?string {
        return $this->getBackingStore()->get('authenticationMethod');
    }

    /**
     * Gets the authenticationMethodDetail property value. Details about the authentication method used to perform this authentication step. For example, phone number (for SMS and voice), device name (for Authenticator app), and password source (e.g. cloud, AD FS, PTA, PHS).
     * @return string|null
    */
    public function getAuthenticationMethodDetail(): ?string {
        return $this->getBackingStore()->get('authenticationMethodDetail');
    }

    /**
     * Gets the authenticationStepDateTime property value. Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getAuthenticationStepDateTime(): ?DateTime {
        return $this->getBackingStore()->get('authenticationStepDateTime');
    }

    /**
     * Gets the authenticationStepRequirement property value. The step of authentication that this satisfied. For example, primary authentication, or multi-factor authentication.
     * @return string|null
    */
    public function getAuthenticationStepRequirement(): ?string {
        return $this->getBackingStore()->get('authenticationStepRequirement');
    }

    /**
     * Gets the authenticationStepResultDetail property value. Details about why the step succeeded or failed. For examples, user is blocked, fraud code entered, no phone input - timed out, phone unreachable, or claim in token.
     * @return string|null
    */
    public function getAuthenticationStepResultDetail(): ?string {
        return $this->getBackingStore()->get('authenticationStepResultDetail');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationMethod' => fn(ParseNode $n) => $o->setAuthenticationMethod($n->getStringValue()),
            'authenticationMethodDetail' => fn(ParseNode $n) => $o->setAuthenticationMethodDetail($n->getStringValue()),
            'authenticationStepDateTime' => fn(ParseNode $n) => $o->setAuthenticationStepDateTime($n->getDateTimeValue()),
            'authenticationStepRequirement' => fn(ParseNode $n) => $o->setAuthenticationStepRequirement($n->getStringValue()),
            'authenticationStepResultDetail' => fn(ParseNode $n) => $o->setAuthenticationStepResultDetail($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'succeeded' => fn(ParseNode $n) => $o->setSucceeded($n->getBooleanValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the succeeded property value. Indicates the status of the authentication step. Possible values: succeeded, failed.
     * @return bool|null
    */
    public function getSucceeded(): ?bool {
        return $this->getBackingStore()->get('succeeded');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('authenticationMethod', $this->getAuthenticationMethod());
        $writer->writeStringValue('authenticationMethodDetail', $this->getAuthenticationMethodDetail());
        $writer->writeDateTimeValue('authenticationStepDateTime', $this->getAuthenticationStepDateTime());
        $writer->writeStringValue('authenticationStepRequirement', $this->getAuthenticationStepRequirement());
        $writer->writeStringValue('authenticationStepResultDetail', $this->getAuthenticationStepResultDetail());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeBooleanValue('succeeded', $this->getSucceeded());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the authenticationMethod property value. The type of authentication method used to perform this step of authentication. Possible values: Password, SMS, Voice, Authenticator App, Software OATH token, Satisfied by token, Previously satisfied.
     * @param string|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?string $value): void {
        $this->getBackingStore()->set('authenticationMethod', $value);
    }

    /**
     * Sets the authenticationMethodDetail property value. Details about the authentication method used to perform this authentication step. For example, phone number (for SMS and voice), device name (for Authenticator app), and password source (e.g. cloud, AD FS, PTA, PHS).
     * @param string|null $value Value to set for the authenticationMethodDetail property.
    */
    public function setAuthenticationMethodDetail(?string $value): void {
        $this->getBackingStore()->set('authenticationMethodDetail', $value);
    }

    /**
     * Sets the authenticationStepDateTime property value. Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @param DateTime|null $value Value to set for the authenticationStepDateTime property.
    */
    public function setAuthenticationStepDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('authenticationStepDateTime', $value);
    }

    /**
     * Sets the authenticationStepRequirement property value. The step of authentication that this satisfied. For example, primary authentication, or multi-factor authentication.
     * @param string|null $value Value to set for the authenticationStepRequirement property.
    */
    public function setAuthenticationStepRequirement(?string $value): void {
        $this->getBackingStore()->set('authenticationStepRequirement', $value);
    }

    /**
     * Sets the authenticationStepResultDetail property value. Details about why the step succeeded or failed. For examples, user is blocked, fraud code entered, no phone input - timed out, phone unreachable, or claim in token.
     * @param string|null $value Value to set for the authenticationStepResultDetail property.
    */
    public function setAuthenticationStepResultDetail(?string $value): void {
        $this->getBackingStore()->set('authenticationStepResultDetail', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the succeeded property value. Indicates the status of the authentication step. Possible values: succeeded, failed.
     * @param bool|null $value Value to set for the succeeded property.
    */
    public function setSucceeded(?bool $value): void {
        $this->getBackingStore()->set('succeeded', $value);
    }

}
