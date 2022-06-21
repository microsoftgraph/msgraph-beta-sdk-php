<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AadUserConversationMember extends ConversationMember implements Parsable 
{
    /**
     * @var string|null $email The email address of the user.
    */
    private ?string $email = null;
    
    /**
     * @var string|null $tenantId TenantId which the Azure AD user belongs to.
    */
    private ?string $tenantId = null;
    
    /**
     * @var User|null $user The user property
    */
    private ?User $user = null;
    
    /**
     * @var string|null $userId The GUID of the user.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new AadUserConversationMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AadUserConversationMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AadUserConversationMember {
        return new AadUserConversationMember();
    }

    /**
     * Gets the email property value. The email address of the user.
     * @return string|null
    */
    public function getEmail(): ?string {
        return $this->email;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'email' => function (ParseNode $n) use ($o) { $o->setEmail($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
            'user' => function (ParseNode $n) use ($o) { $o->setUser($n->getObjectValue(array(User::class, 'createFromDiscriminatorValue'))); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the tenantId property value. TenantId which the Azure AD user belongs to.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the user property value. The user property
     * @return User|null
    */
    public function getUser(): ?User {
        return $this->user;
    }

    /**
     * Gets the userId property value. The GUID of the user.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('email', $this->email);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeObjectValue('user', $this->user);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the email property value. The email address of the user.
     *  @param string|null $value Value to set for the email property.
    */
    public function setEmail(?string $value ): void {
        $this->email = $value;
    }

    /**
     * Sets the tenantId property value. TenantId which the Azure AD user belongs to.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the user property value. The user property
     *  @param User|null $value Value to set for the user property.
    */
    public function setUser(?User $value ): void {
        $this->user = $value;
    }

    /**
     * Sets the userId property value. The GUID of the user.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
