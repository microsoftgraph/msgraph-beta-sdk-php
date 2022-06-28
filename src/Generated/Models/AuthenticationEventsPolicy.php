<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationEventsPolicy extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<AuthenticationListener>|null $onSignupStart A list of applicable actions to be taken on sign-up.
    */
    private ?array $onSignupStart = null;
    
    /**
     * Instantiates a new AuthenticationEventsPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
        return array_merge(parent::getFieldDeserializers(), [
            'onSignupStart' => function (ParseNode $n) use ($o) { $o->setOnSignupStart($n->getCollectionOfObjectValues(array(AuthenticationListener::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the onSignupStart property value. A list of applicable actions to be taken on sign-up.
     * @return array<AuthenticationListener>|null
    */
    public function getOnSignupStart(): ?array {
        return $this->onSignupStart;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('onSignupStart', $this->onSignupStart);
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
     * Sets the onSignupStart property value. A list of applicable actions to be taken on sign-up.
     *  @param array<AuthenticationListener>|null $value Value to set for the onSignupStart property.
    */
    public function setOnSignupStart(?array $value ): void {
        $this->onSignupStart = $value;
    }

}
