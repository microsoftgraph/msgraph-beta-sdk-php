<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftAuthenticatorAuthenticationMethodTarget extends AuthenticationMethodTarget implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var MicrosoftAuthenticatorAuthenticationMode|null $authenticationMode Determines which types of notifications can be used for sign-in. The possible values are: deviceBasedPush (passwordless only), push, and any.
    */
    private ?MicrosoftAuthenticatorAuthenticationMode $authenticationMode = null;
    
    /**
     * @var AdvancedConfigState|null $displayAppInformationRequiredState Determines whether the user is shown additional context in their Authenticator app notification. In the body of the Authenticator notification, the user will be shown the app they are signing into along with the location that the authentication request originated from. Possible values are: enabled, disabled, default.
    */
    private ?AdvancedConfigState $displayAppInformationRequiredState = null;
    
    /**
     * @var AdvancedConfigState|null $numberMatchingRequiredState Requires number matching for MFA notifications. Value is ignored for phone sign-in notifications. Possible values are: enabled, disabled, default.
    */
    private ?AdvancedConfigState $numberMatchingRequiredState = null;
    
    /**
     * Instantiates a new MicrosoftAuthenticatorAuthenticationMethodTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MicrosoftAuthenticatorAuthenticationMethodTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MicrosoftAuthenticatorAuthenticationMethodTarget {
        return new MicrosoftAuthenticatorAuthenticationMethodTarget();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticationMode property value. Determines which types of notifications can be used for sign-in. The possible values are: deviceBasedPush (passwordless only), push, and any.
     * @return MicrosoftAuthenticatorAuthenticationMode|null
    */
    public function getAuthenticationMode(): ?MicrosoftAuthenticatorAuthenticationMode {
        return $this->authenticationMode;
    }

    /**
     * Gets the displayAppInformationRequiredState property value. Determines whether the user is shown additional context in their Authenticator app notification. In the body of the Authenticator notification, the user will be shown the app they are signing into along with the location that the authentication request originated from. Possible values are: enabled, disabled, default.
     * @return AdvancedConfigState|null
    */
    public function getDisplayAppInformationRequiredState(): ?AdvancedConfigState {
        return $this->displayAppInformationRequiredState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationMode' => function (ParseNode $n) use ($o) { $o->setAuthenticationMode($n->getEnumValue(MicrosoftAuthenticatorAuthenticationMode::class)); },
            'displayAppInformationRequiredState' => function (ParseNode $n) use ($o) { $o->setDisplayAppInformationRequiredState($n->getEnumValue(AdvancedConfigState::class)); },
            'numberMatchingRequiredState' => function (ParseNode $n) use ($o) { $o->setNumberMatchingRequiredState($n->getEnumValue(AdvancedConfigState::class)); },
        ]);
    }

    /**
     * Gets the numberMatchingRequiredState property value. Requires number matching for MFA notifications. Value is ignored for phone sign-in notifications. Possible values are: enabled, disabled, default.
     * @return AdvancedConfigState|null
    */
    public function getNumberMatchingRequiredState(): ?AdvancedConfigState {
        return $this->numberMatchingRequiredState;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('authenticationMode', $this->authenticationMode);
        $writer->writeEnumValue('displayAppInformationRequiredState', $this->displayAppInformationRequiredState);
        $writer->writeEnumValue('numberMatchingRequiredState', $this->numberMatchingRequiredState);
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
     * Sets the authenticationMode property value. Determines which types of notifications can be used for sign-in. The possible values are: deviceBasedPush (passwordless only), push, and any.
     *  @param MicrosoftAuthenticatorAuthenticationMode|null $value Value to set for the authenticationMode property.
    */
    public function setAuthenticationMode(?MicrosoftAuthenticatorAuthenticationMode $value ): void {
        $this->authenticationMode = $value;
    }

    /**
     * Sets the displayAppInformationRequiredState property value. Determines whether the user is shown additional context in their Authenticator app notification. In the body of the Authenticator notification, the user will be shown the app they are signing into along with the location that the authentication request originated from. Possible values are: enabled, disabled, default.
     *  @param AdvancedConfigState|null $value Value to set for the displayAppInformationRequiredState property.
    */
    public function setDisplayAppInformationRequiredState(?AdvancedConfigState $value ): void {
        $this->displayAppInformationRequiredState = $value;
    }

    /**
     * Sets the numberMatchingRequiredState property value. Requires number matching for MFA notifications. Value is ignored for phone sign-in notifications. Possible values are: enabled, disabled, default.
     *  @param AdvancedConfigState|null $value Value to set for the numberMatchingRequiredState property.
    */
    public function setNumberMatchingRequiredState(?AdvancedConfigState $value ): void {
        $this->numberMatchingRequiredState = $value;
    }

}
