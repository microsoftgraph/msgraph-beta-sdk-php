<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class CredentialUserRegistrationCount extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'totalUserCount' => fn(ParseNode $n) => $o->setTotalUserCount($n->getIntegerValue()),
            'userRegistrationCounts' => fn(ParseNode $n) => $o->setUserRegistrationCounts($n->getCollectionOfObjectValues([UserRegistrationCount::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the totalUserCount property value. Provides the count of users with accountEnabled set to true in the tenant.
     * @return int|null
    */
    public function getTotalUserCount(): ?int {
        $val = $this->getBackingStore()->get('totalUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalUserCount'");
    }

    /**
     * Gets the userRegistrationCounts property value. A collection of registration count and status information for users in your tenant.
     * @return array<UserRegistrationCount>|null
    */
    public function getUserRegistrationCounts(): ?array {
        $val = $this->getBackingStore()->get('userRegistrationCounts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserRegistrationCount::class);
            /** @var array<UserRegistrationCount>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userRegistrationCounts'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('totalUserCount', $this->getTotalUserCount());
        $writer->writeCollectionOfObjectValues('userRegistrationCounts', $this->getUserRegistrationCounts());
    }

    /**
     * Sets the totalUserCount property value. Provides the count of users with accountEnabled set to true in the tenant.
     * @param int|null $value Value to set for the totalUserCount property.
    */
    public function setTotalUserCount(?int $value): void {
        $this->getBackingStore()->set('totalUserCount', $value);
    }

    /**
     * Sets the userRegistrationCounts property value. A collection of registration count and status information for users in your tenant.
     * @param array<UserRegistrationCount>|null $value Value to set for the userRegistrationCounts property.
    */
    public function setUserRegistrationCounts(?array $value): void {
        $this->getBackingStore()->set('userRegistrationCounts', $value);
    }

}
