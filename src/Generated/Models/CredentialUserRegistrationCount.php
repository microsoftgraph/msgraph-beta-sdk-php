<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CredentialUserRegistrationCount extends Entity implements Parsable 
{
    /**
     * @var int|null $totalUserCount Provides the total user count in the tenant.
    */
    private ?int $totalUserCount = null;
    
    /**
     * @var array<UserRegistrationCount>|null $userRegistrationCounts A collection of registration count and status information for users in your tenant.
    */
    private ?array $userRegistrationCounts = null;
    
    /**
     * Instantiates a new credentialUserRegistrationCount and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CredentialUserRegistrationCount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CredentialUserRegistrationCount {
        return new CredentialUserRegistrationCount();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'totalUserCount' => function (ParseNode $n) use ($o) { $o->setTotalUserCount($n->getIntegerValue()); },
            'userRegistrationCounts' => function (ParseNode $n) use ($o) { $o->setUserRegistrationCounts($n->getCollectionOfObjectValues(array(UserRegistrationCount::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the totalUserCount property value. Provides the total user count in the tenant.
     * @return int|null
    */
    public function getTotalUserCount(): ?int {
        return $this->totalUserCount;
    }

    /**
     * Gets the userRegistrationCounts property value. A collection of registration count and status information for users in your tenant.
     * @return array<UserRegistrationCount>|null
    */
    public function getUserRegistrationCounts(): ?array {
        return $this->userRegistrationCounts;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('totalUserCount', $this->totalUserCount);
        $writer->writeCollectionOfObjectValues('userRegistrationCounts', $this->userRegistrationCounts);
    }

    /**
     * Sets the totalUserCount property value. Provides the total user count in the tenant.
     *  @param int|null $value Value to set for the totalUserCount property.
    */
    public function setTotalUserCount(?int $value ): void {
        $this->totalUserCount = $value;
    }

    /**
     * Sets the userRegistrationCounts property value. A collection of registration count and status information for users in your tenant.
     *  @param array<UserRegistrationCount>|null $value Value to set for the userRegistrationCounts property.
    */
    public function setUserRegistrationCounts(?array $value ): void {
        $this->userRegistrationCounts = $value;
    }

}
