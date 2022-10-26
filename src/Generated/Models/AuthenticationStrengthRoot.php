<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationStrengthRoot extends Entity implements Parsable 
{
    /**
     * @var array<AuthenticationMethodModes>|null $authenticationCombinations A collection of all valid authentication method combinations in the system.
    */
    private ?array $authenticationCombinations = null;
    
    /**
     * @var array<AuthenticationMethodModeDetail>|null $authenticationMethodModes Names and descriptions of all valid authentication method modes in the system.
    */
    private ?array $authenticationMethodModes = null;
    
    /**
     * @var array<AuthenticationStrengthPolicy>|null $policies A collection of authentication strength policies that exist for this tenant, including both built-in and custom policies.
    */
    private ?array $policies = null;
    
    /**
     * Instantiates a new AuthenticationStrengthRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.authenticationStrengthRoot');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationStrengthRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationStrengthRoot {
        return new AuthenticationStrengthRoot();
    }

    /**
     * Gets the authenticationCombinations property value. A collection of all valid authentication method combinations in the system.
     * @return array<AuthenticationMethodModes>|null
    */
    public function getAuthenticationCombinations(): ?array {
        return $this->authenticationCombinations;
    }

    /**
     * Gets the authenticationMethodModes property value. Names and descriptions of all valid authentication method modes in the system.
     * @return array<AuthenticationMethodModeDetail>|null
    */
    public function getAuthenticationMethodModes(): ?array {
        return $this->authenticationMethodModes;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'authenticationCombinations' => fn(ParseNode $n) => $o->setAuthenticationCombinations($n->getCollectionOfEnumValues(AuthenticationMethodModes::class)),
            'authenticationMethodModes' => fn(ParseNode $n) => $o->setAuthenticationMethodModes($n->getCollectionOfObjectValues([AuthenticationMethodModeDetail::class, 'createFromDiscriminatorValue'])),
            'policies' => fn(ParseNode $n) => $o->setPolicies($n->getCollectionOfObjectValues([AuthenticationStrengthPolicy::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the policies property value. A collection of authentication strength policies that exist for this tenant, including both built-in and custom policies.
     * @return array<AuthenticationStrengthPolicy>|null
    */
    public function getPolicies(): ?array {
        return $this->policies;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfEnumValues('authenticationCombinations', $this->authenticationCombinations);
        $writer->writeCollectionOfObjectValues('authenticationMethodModes', $this->authenticationMethodModes);
        $writer->writeCollectionOfObjectValues('policies', $this->policies);
    }

    /**
     * Sets the authenticationCombinations property value. A collection of all valid authentication method combinations in the system.
     *  @param array<AuthenticationMethodModes>|null $value Value to set for the authenticationCombinations property.
    */
    public function setAuthenticationCombinations(?array $value ): void {
        $this->authenticationCombinations = $value;
    }

    /**
     * Sets the authenticationMethodModes property value. Names and descriptions of all valid authentication method modes in the system.
     *  @param array<AuthenticationMethodModeDetail>|null $value Value to set for the authenticationMethodModes property.
    */
    public function setAuthenticationMethodModes(?array $value ): void {
        $this->authenticationMethodModes = $value;
    }

    /**
     * Sets the policies property value. A collection of authentication strength policies that exist for this tenant, including both built-in and custom policies.
     *  @param array<AuthenticationStrengthPolicy>|null $value Value to set for the policies property.
    */
    public function setPolicies(?array $value ): void {
        $this->policies = $value;
    }

}
