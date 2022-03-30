<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationStrength implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $authenticationStrengthId Identifier of the authentication strength. */
    private ?string $authenticationStrengthId = null;
    
    /** @var string|null $displayName The name of the authentication strength. */
    private ?string $displayName = null;
    
    /**
     * Instantiates a new authenticationStrength and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationStrength
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationStrength {
        return new AuthenticationStrength();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the authenticationStrengthId property value. Identifier of the authentication strength.
     * @return string|null
    */
    public function getAuthenticationStrengthId(): ?string {
        return $this->authenticationStrengthId;
    }

    /**
     * Gets the displayName property value. The name of the authentication strength.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'authenticationStrengthId' => function (self $o, ParseNode $n) { $o->setAuthenticationStrengthId($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('authenticationStrengthId', $this->authenticationStrengthId);
        $writer->writeStringValue('displayName', $this->displayName);
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
     * Sets the authenticationStrengthId property value. Identifier of the authentication strength.
     *  @param string|null $value Value to set for the authenticationStrengthId property.
    */
    public function setAuthenticationStrengthId(?string $value ): void {
        $this->authenticationStrengthId = $value;
    }

    /**
     * Sets the displayName property value. The name of the authentication strength.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

}
