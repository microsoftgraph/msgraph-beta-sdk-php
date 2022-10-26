<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SmsAuthenticationMethodTarget extends AuthenticationMethodTarget implements Parsable 
{
    /**
     * @var bool|null $isUsableForSignIn Determines if the users or groups can use this authentication method to sign in to Azure AD. The value is always true.
    */
    private ?bool $isUsableForSignIn = null;
    
    /**
     * Instantiates a new SmsAuthenticationMethodTarget and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.smsAuthenticationMethodTarget');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SmsAuthenticationMethodTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SmsAuthenticationMethodTarget {
        return new SmsAuthenticationMethodTarget();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isUsableForSignIn' => fn(ParseNode $n) => $o->setIsUsableForSignIn($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the isUsableForSignIn property value. Determines if the users or groups can use this authentication method to sign in to Azure AD. The value is always true.
     * @return bool|null
    */
    public function getIsUsableForSignIn(): ?bool {
        return $this->isUsableForSignIn;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isUsableForSignIn', $this->isUsableForSignIn);
    }

    /**
     * Sets the isUsableForSignIn property value. Determines if the users or groups can use this authentication method to sign in to Azure AD. The value is always true.
     *  @param bool|null $value Value to set for the isUsableForSignIn property.
    */
    public function setIsUsableForSignIn(?bool $value ): void {
        $this->isUsableForSignIn = $value;
    }

}
