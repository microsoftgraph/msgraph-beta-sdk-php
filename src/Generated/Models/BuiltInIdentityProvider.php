<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BuiltInIdentityProvider extends IdentityProviderBase implements Parsable 
{
    /**
     * @var string|null $identityProviderType The identity provider type. For a B2B scenario, possible values: AADSignup, MicrosoftAccount, EmailOTP. Required.
    */
    private ?string $identityProviderType = null;
    
    /**
     * Instantiates a new BuiltInIdentityProvider and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BuiltInIdentityProvider
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BuiltInIdentityProvider {
        return new BuiltInIdentityProvider();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'identityProviderType' => function (ParseNode $n) use ($o) { $o->setIdentityProviderType($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the identityProviderType property value. The identity provider type. For a B2B scenario, possible values: AADSignup, MicrosoftAccount, EmailOTP. Required.
     * @return string|null
    */
    public function getIdentityProviderType(): ?string {
        return $this->identityProviderType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('identityProviderType', $this->identityProviderType);
    }

    /**
     * Sets the identityProviderType property value. The identity provider type. For a B2B scenario, possible values: AADSignup, MicrosoftAccount, EmailOTP. Required.
     *  @param string|null $value Value to set for the identityProviderType property.
    */
    public function setIdentityProviderType(?string $value ): void {
        $this->identityProviderType = $value;
    }

}
