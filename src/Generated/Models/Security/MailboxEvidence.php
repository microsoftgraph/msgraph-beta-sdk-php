<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MailboxEvidence extends AlertEvidence implements Parsable 
{
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $primaryAddress The primaryAddress property
    */
    private ?string $primaryAddress = null;
    
    /**
     * @var UserAccount|null $userAccount The userAccount property
    */
    private ?UserAccount $userAccount = null;
    
    /**
     * Instantiates a new MailboxEvidence and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.mailboxEvidence');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MailboxEvidence
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): MailboxEvidence {
        return new MailboxEvidence();
    }

    /**
     * Gets the displayName property value. The displayName property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'primaryAddress' => function (ParseNode $n) use ($o) { $o->setPrimaryAddress($n->getStringValue()); },
            'userAccount' => function (ParseNode $n) use ($o) { $o->setUserAccount($n->getObjectValue(array(UserAccount::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the primaryAddress property value. The primaryAddress property
     * @return string|null
    */
    public function getPrimaryAddress(): ?string {
        return $this->primaryAddress;
    }

    /**
     * Gets the userAccount property value. The userAccount property
     * @return UserAccount|null
    */
    public function getUserAccount(): ?UserAccount {
        return $this->userAccount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('primaryAddress', $this->primaryAddress);
        $writer->writeObjectValue('userAccount', $this->userAccount);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the primaryAddress property value. The primaryAddress property
     *  @param string|null $value Value to set for the primaryAddress property.
    */
    public function setPrimaryAddress(?string $value ): void {
        $this->primaryAddress = $value;
    }

    /**
     * Sets the userAccount property value. The userAccount property
     *  @param UserAccount|null $value Value to set for the userAccount property.
    */
    public function setUserAccount(?UserAccount $value ): void {
        $this->userAccount = $value;
    }

}
