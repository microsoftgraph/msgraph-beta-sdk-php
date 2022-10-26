<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LoginPageTextVisibilitySettings implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $hideAccountResetCredentials Option to hide the self-service password reset (SSPR) hyperlinks such as 'Can't access your account?', 'Forgot my password' and 'Reset it now' on the sign-in form.
    */
    private ?bool $hideAccountResetCredentials = null;
    
    /**
     * @var bool|null $hideCannotAccessYourAccount Option to hide the self-service password reset (SSPR) 'Can't access your account?' hyperlink on the sign-in form.
    */
    private ?bool $hideCannotAccessYourAccount = null;
    
    /**
     * @var bool|null $hideForgotMyPassword Option to hide the self-service password reset (SSPR) 'Forgot my password' hyperlink on the sign-in form.
    */
    private ?bool $hideForgotMyPassword = null;
    
    /**
     * @var bool|null $hidePrivacyAndCookies Option to hide the 'Privacy & Cookies' hyperlink in the footer.
    */
    private ?bool $hidePrivacyAndCookies = null;
    
    /**
     * @var bool|null $hideResetItNow Option to hide the self-service password reset (SSPR) 'reset it now' hyperlink on the sign-in form.
    */
    private ?bool $hideResetItNow = null;
    
    /**
     * @var bool|null $hideTermsOfUse Option to hide the 'Terms of Use' hyperlink in the footer.
    */
    private ?bool $hideTermsOfUse = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new loginPageTextVisibilitySettings and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.loginPageTextVisibilitySettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LoginPageTextVisibilitySettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LoginPageTextVisibilitySettings {
        return new LoginPageTextVisibilitySettings();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'hideAccountResetCredentials' => fn(ParseNode $n) => $o->setHideAccountResetCredentials($n->getBooleanValue()),
            'hideCannotAccessYourAccount' => fn(ParseNode $n) => $o->setHideCannotAccessYourAccount($n->getBooleanValue()),
            'hideForgotMyPassword' => fn(ParseNode $n) => $o->setHideForgotMyPassword($n->getBooleanValue()),
            'hidePrivacyAndCookies' => fn(ParseNode $n) => $o->setHidePrivacyAndCookies($n->getBooleanValue()),
            'hideResetItNow' => fn(ParseNode $n) => $o->setHideResetItNow($n->getBooleanValue()),
            'hideTermsOfUse' => fn(ParseNode $n) => $o->setHideTermsOfUse($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the hideAccountResetCredentials property value. Option to hide the self-service password reset (SSPR) hyperlinks such as 'Can't access your account?', 'Forgot my password' and 'Reset it now' on the sign-in form.
     * @return bool|null
    */
    public function getHideAccountResetCredentials(): ?bool {
        return $this->hideAccountResetCredentials;
    }

    /**
     * Gets the hideCannotAccessYourAccount property value. Option to hide the self-service password reset (SSPR) 'Can't access your account?' hyperlink on the sign-in form.
     * @return bool|null
    */
    public function getHideCannotAccessYourAccount(): ?bool {
        return $this->hideCannotAccessYourAccount;
    }

    /**
     * Gets the hideForgotMyPassword property value. Option to hide the self-service password reset (SSPR) 'Forgot my password' hyperlink on the sign-in form.
     * @return bool|null
    */
    public function getHideForgotMyPassword(): ?bool {
        return $this->hideForgotMyPassword;
    }

    /**
     * Gets the hidePrivacyAndCookies property value. Option to hide the 'Privacy & Cookies' hyperlink in the footer.
     * @return bool|null
    */
    public function getHidePrivacyAndCookies(): ?bool {
        return $this->hidePrivacyAndCookies;
    }

    /**
     * Gets the hideResetItNow property value. Option to hide the self-service password reset (SSPR) 'reset it now' hyperlink on the sign-in form.
     * @return bool|null
    */
    public function getHideResetItNow(): ?bool {
        return $this->hideResetItNow;
    }

    /**
     * Gets the hideTermsOfUse property value. Option to hide the 'Terms of Use' hyperlink in the footer.
     * @return bool|null
    */
    public function getHideTermsOfUse(): ?bool {
        return $this->hideTermsOfUse;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('hideAccountResetCredentials', $this->hideAccountResetCredentials);
        $writer->writeBooleanValue('hideCannotAccessYourAccount', $this->hideCannotAccessYourAccount);
        $writer->writeBooleanValue('hideForgotMyPassword', $this->hideForgotMyPassword);
        $writer->writeBooleanValue('hidePrivacyAndCookies', $this->hidePrivacyAndCookies);
        $writer->writeBooleanValue('hideResetItNow', $this->hideResetItNow);
        $writer->writeBooleanValue('hideTermsOfUse', $this->hideTermsOfUse);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the hideAccountResetCredentials property value. Option to hide the self-service password reset (SSPR) hyperlinks such as 'Can't access your account?', 'Forgot my password' and 'Reset it now' on the sign-in form.
     *  @param bool|null $value Value to set for the hideAccountResetCredentials property.
    */
    public function setHideAccountResetCredentials(?bool $value ): void {
        $this->hideAccountResetCredentials = $value;
    }

    /**
     * Sets the hideCannotAccessYourAccount property value. Option to hide the self-service password reset (SSPR) 'Can't access your account?' hyperlink on the sign-in form.
     *  @param bool|null $value Value to set for the hideCannotAccessYourAccount property.
    */
    public function setHideCannotAccessYourAccount(?bool $value ): void {
        $this->hideCannotAccessYourAccount = $value;
    }

    /**
     * Sets the hideForgotMyPassword property value. Option to hide the self-service password reset (SSPR) 'Forgot my password' hyperlink on the sign-in form.
     *  @param bool|null $value Value to set for the hideForgotMyPassword property.
    */
    public function setHideForgotMyPassword(?bool $value ): void {
        $this->hideForgotMyPassword = $value;
    }

    /**
     * Sets the hidePrivacyAndCookies property value. Option to hide the 'Privacy & Cookies' hyperlink in the footer.
     *  @param bool|null $value Value to set for the hidePrivacyAndCookies property.
    */
    public function setHidePrivacyAndCookies(?bool $value ): void {
        $this->hidePrivacyAndCookies = $value;
    }

    /**
     * Sets the hideResetItNow property value. Option to hide the self-service password reset (SSPR) 'reset it now' hyperlink on the sign-in form.
     *  @param bool|null $value Value to set for the hideResetItNow property.
    */
    public function setHideResetItNow(?bool $value ): void {
        $this->hideResetItNow = $value;
    }

    /**
     * Sets the hideTermsOfUse property value. Option to hide the 'Terms of Use' hyperlink in the footer.
     *  @param bool|null $value Value to set for the hideTermsOfUse property.
    */
    public function setHideTermsOfUse(?bool $value ): void {
        $this->hideTermsOfUse = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
