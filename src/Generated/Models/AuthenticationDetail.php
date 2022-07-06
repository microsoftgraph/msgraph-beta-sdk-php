<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationDetail implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $authenticationMethod The type of authentication method used to perform this step of authentication. Possible values: Password, SMS, Voice, Authenticator App, Software OATH token, Satisfied by token, Previously satisfied.
    */
    private ?string $authenticationMethod = null;
    
    /**
     * @var string|null $authenticationMethodDetail Details about the authentication method used to perform this authentication step. For example, phone number (for SMS and voice), device name (for Authenticator app), and password source (e.g. cloud, AD FS, PTA, PHS).
    */
    private ?string $authenticationMethodDetail = null;
    
    /**
     * @var DateTime|null $authenticationStepDateTime Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
    */
    private ?DateTime $authenticationStepDateTime = null;
    
    /**
     * @var string|null $authenticationStepRequirement The step of authentication that this satisfied. For example, primary authentication, or multi-factor authentication.
    */
    private ?string $authenticationStepRequirement = null;
    
    /**
     * @var string|null $authenticationStepResultDetail Details about why the step succeeded or failed. For examples, user is blocked, fraud code entered, no phone input - timed out, phone unreachable, or claim in token.
    */
    private ?string $authenticationStepResultDetail = null;
    
    /**
     * @var bool|null $succeeded Indicates the status of the authentication step. Possible values: succeeded, failed.
    */
    private ?bool $succeeded = null;
    
    /**
     * Instantiates a new authenticationDetail and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
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
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticationMethod property value. The type of authentication method used to perform this step of authentication. Possible values: Password, SMS, Voice, Authenticator App, Software OATH token, Satisfied by token, Previously satisfied.
     * @return string|null
    */
    public function getAuthenticationMethod(): ?string {
        return $this->authenticationMethod;
    }

    /**
     * Gets the authenticationMethodDetail property value. Details about the authentication method used to perform this authentication step. For example, phone number (for SMS and voice), device name (for Authenticator app), and password source (e.g. cloud, AD FS, PTA, PHS).
     * @return string|null
    */
    public function getAuthenticationMethodDetail(): ?string {
        return $this->authenticationMethodDetail;
    }

    /**
     * Gets the authenticationStepDateTime property value. Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     * @return DateTime|null
    */
    public function getAuthenticationStepDateTime(): ?DateTime {
        return $this->authenticationStepDateTime;
    }

    /**
     * Gets the authenticationStepRequirement property value. The step of authentication that this satisfied. For example, primary authentication, or multi-factor authentication.
     * @return string|null
    */
    public function getAuthenticationStepRequirement(): ?string {
        return $this->authenticationStepRequirement;
    }

    /**
     * Gets the authenticationStepResultDetail property value. Details about why the step succeeded or failed. For examples, user is blocked, fraud code entered, no phone input - timed out, phone unreachable, or claim in token.
     * @return string|null
    */
    public function getAuthenticationStepResultDetail(): ?string {
        return $this->authenticationStepResultDetail;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'authenticationMethod' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethod($n->getStringValue()); },
            'authenticationMethodDetail' => function (ParseNode $n) use ($o) { $o->setAuthenticationMethodDetail($n->getStringValue()); },
            'authenticationStepDateTime' => function (ParseNode $n) use ($o) { $o->setAuthenticationStepDateTime($n->getDateTimeValue()); },
            'authenticationStepRequirement' => function (ParseNode $n) use ($o) { $o->setAuthenticationStepRequirement($n->getStringValue()); },
            'authenticationStepResultDetail' => function (ParseNode $n) use ($o) { $o->setAuthenticationStepResultDetail($n->getStringValue()); },
            'succeeded' => function (ParseNode $n) use ($o) { $o->setSucceeded($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the succeeded property value. Indicates the status of the authentication step. Possible values: succeeded, failed.
     * @return bool|null
    */
    public function getSucceeded(): ?bool {
        return $this->succeeded;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('authenticationMethod', $this->authenticationMethod);
        $writer->writeStringValue('authenticationMethodDetail', $this->authenticationMethodDetail);
        $writer->writeDateTimeValue('authenticationStepDateTime', $this->authenticationStepDateTime);
        $writer->writeStringValue('authenticationStepRequirement', $this->authenticationStepRequirement);
        $writer->writeStringValue('authenticationStepResultDetail', $this->authenticationStepResultDetail);
        $writer->writeBooleanValue('succeeded', $this->succeeded);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the authenticationMethod property value. The type of authentication method used to perform this step of authentication. Possible values: Password, SMS, Voice, Authenticator App, Software OATH token, Satisfied by token, Previously satisfied.
     *  @param string|null $value Value to set for the authenticationMethod property.
    */
    public function setAuthenticationMethod(?string $value ): void {
        $this->authenticationMethod = $value;
    }

    /**
     * Sets the authenticationMethodDetail property value. Details about the authentication method used to perform this authentication step. For example, phone number (for SMS and voice), device name (for Authenticator app), and password source (e.g. cloud, AD FS, PTA, PHS).
     *  @param string|null $value Value to set for the authenticationMethodDetail property.
    */
    public function setAuthenticationMethodDetail(?string $value ): void {
        $this->authenticationMethodDetail = $value;
    }

    /**
     * Sets the authenticationStepDateTime property value. Represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z.
     *  @param DateTime|null $value Value to set for the authenticationStepDateTime property.
    */
    public function setAuthenticationStepDateTime(?DateTime $value ): void {
        $this->authenticationStepDateTime = $value;
    }

    /**
     * Sets the authenticationStepRequirement property value. The step of authentication that this satisfied. For example, primary authentication, or multi-factor authentication.
     *  @param string|null $value Value to set for the authenticationStepRequirement property.
    */
    public function setAuthenticationStepRequirement(?string $value ): void {
        $this->authenticationStepRequirement = $value;
    }

    /**
     * Sets the authenticationStepResultDetail property value. Details about why the step succeeded or failed. For examples, user is blocked, fraud code entered, no phone input - timed out, phone unreachable, or claim in token.
     *  @param string|null $value Value to set for the authenticationStepResultDetail property.
    */
    public function setAuthenticationStepResultDetail(?string $value ): void {
        $this->authenticationStepResultDetail = $value;
    }

    /**
     * Sets the succeeded property value. Indicates the status of the authentication step. Possible values: succeeded, failed.
     *  @param bool|null $value Value to set for the succeeded property.
    */
    public function setSucceeded(?bool $value ): void {
        $this->succeeded = $value;
    }

}
