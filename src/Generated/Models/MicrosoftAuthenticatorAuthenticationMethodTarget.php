<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MicrosoftAuthenticatorAuthenticationMethodTarget extends AuthenticationMethodTarget implements Parsable 
{
    /**
     * @var MicrosoftAuthenticatorAuthenticationMode|null $authenticationMode The authenticationMode property
    */
    private ?MicrosoftAuthenticatorAuthenticationMode $authenticationMode = null;
    
    /**
     * @var AdvancedConfigState|null $displayAppInformationRequiredState The displayAppInformationRequiredState property
    */
    private ?AdvancedConfigState $displayAppInformationRequiredState = null;
    
    /**
     * @var AdvancedConfigState|null $numberMatchingRequiredState The numberMatchingRequiredState property
    */
    private ?AdvancedConfigState $numberMatchingRequiredState = null;
    
    /**
     * Instantiates a new MicrosoftAuthenticatorAuthenticationMethodTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.microsoftAuthenticatorAuthenticationMethodTarget');
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
     * Gets the authenticationMode property value. The authenticationMode property
     * @return MicrosoftAuthenticatorAuthenticationMode|null
    */
    public function getAuthenticationMode(): ?MicrosoftAuthenticatorAuthenticationMode {
        return $this->authenticationMode;
    }

    /**
     * Gets the displayAppInformationRequiredState property value. The displayAppInformationRequiredState property
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
     * Gets the numberMatchingRequiredState property value. The numberMatchingRequiredState property
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
    }

    /**
     * Sets the authenticationMode property value. The authenticationMode property
     *  @param MicrosoftAuthenticatorAuthenticationMode|null $value Value to set for the authenticationMode property.
    */
    public function setAuthenticationMode(?MicrosoftAuthenticatorAuthenticationMode $value ): void {
        $this->authenticationMode = $value;
    }

    /**
     * Sets the displayAppInformationRequiredState property value. The displayAppInformationRequiredState property
     *  @param AdvancedConfigState|null $value Value to set for the displayAppInformationRequiredState property.
    */
    public function setDisplayAppInformationRequiredState(?AdvancedConfigState $value ): void {
        $this->displayAppInformationRequiredState = $value;
    }

    /**
     * Sets the numberMatchingRequiredState property value. The numberMatchingRequiredState property
     *  @param AdvancedConfigState|null $value Value to set for the numberMatchingRequiredState property.
    */
    public function setNumberMatchingRequiredState(?AdvancedConfigState $value ): void {
        $this->numberMatchingRequiredState = $value;
    }

}
