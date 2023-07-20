<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AuthenticationEventsPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new authenticationEventsPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationEventsPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationEventsPolicy {
        return new AuthenticationEventsPolicy();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'onSignupStart' => fn(ParseNode $n) => $o->setOnSignupStart($n->getCollectionOfObjectValues([AuthenticationListener::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the onSignupStart property value. A list of applicable actions to be taken on sign-up.
     * @return array<AuthenticationListener>|null
    */
    public function getOnSignupStart(): ?array {
        $val = $this->getBackingStore()->get('onSignupStart');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AuthenticationListener::class);
            /** @var array<AuthenticationListener>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onSignupStart'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('onSignupStart', $this->getOnSignupStart());
    }

    /**
     * Sets the onSignupStart property value. A list of applicable actions to be taken on sign-up.
     * @param array<AuthenticationListener>|null $value Value to set for the onSignupStart property.
    */
    public function setOnSignupStart(?array $value): void {
        $this->getBackingStore()->set('onSignupStart', $value);
    }

}
