<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class EmailAuthenticationMethod extends AuthenticationMethod 
{
    /** @var string|null $emailAddress The email address registered to this user. */
    private ?string $emailAddress = null;
    
    /**
     * Instantiates a new emailAuthenticationMethod and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EmailAuthenticationMethod
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): EmailAuthenticationMethod {
        return new EmailAuthenticationMethod();
    }

    /**
     * Gets the emailAddress property value. The email address registered to this user.
     * @return string|null
    */
    public function getEmailAddress(): ?string {
        return $this->emailAddress;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'emailAddress' => function (self $o, ParseNode $n) { $o->setEmailAddress($n->getStringValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('emailAddress', $this->emailAddress);
    }

    /**
     * Sets the emailAddress property value. The email address registered to this user.
     *  @param string|null $value Value to set for the emailAddress property.
    */
    public function setEmailAddress(?string $value ): void {
        $this->emailAddress = $value;
    }

}
