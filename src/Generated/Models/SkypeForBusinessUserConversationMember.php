<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SkypeForBusinessUserConversationMember extends ConversationMember implements Parsable 
{
    /**
     * @var string|null $tenantId ID of the tenant that the user belongs to.
    */
    private ?string $tenantId = null;
    
    /**
     * @var string|null $userId ID of the user.
    */
    private ?string $userId = null;
    
    /**
     * Instantiates a new SkypeForBusinessUserConversationMember and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.skypeForBusinessUserConversationMember');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SkypeForBusinessUserConversationMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SkypeForBusinessUserConversationMember {
        return new SkypeForBusinessUserConversationMember();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the tenantId property value. ID of the tenant that the user belongs to.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the userId property value. ID of the user.
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
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('userId', $this->userId);
    }

    /**
     * Sets the tenantId property value. ID of the tenant that the user belongs to.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the userId property value. ID of the user.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
