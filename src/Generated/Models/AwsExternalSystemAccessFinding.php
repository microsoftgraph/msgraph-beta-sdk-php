<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AwsExternalSystemAccessFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new awsExternalSystemAccessFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsExternalSystemAccessFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsExternalSystemAccessFinding {
        return new AwsExternalSystemAccessFinding();
    }

    /**
     * Gets the accessMethods property value. The accessMethods property
     * @return ExternalSystemAccessMethods|null
    */
    public function getAccessMethods(): ?ExternalSystemAccessMethods {
        $val = $this->getBackingStore()->get('accessMethods');
        if (is_null($val) || $val instanceof ExternalSystemAccessMethods) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessMethods'");
    }

    /**
     * Gets the affectedSystem property value. The affectedSystem property
     * @return AuthorizationSystem|null
    */
    public function getAffectedSystem(): ?AuthorizationSystem {
        $val = $this->getBackingStore()->get('affectedSystem');
        if (is_null($val) || $val instanceof AuthorizationSystem) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'affectedSystem'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessMethods' => fn(ParseNode $n) => $o->setAccessMethods($n->getEnumValue(ExternalSystemAccessMethods::class)),
            'affectedSystem' => fn(ParseNode $n) => $o->setAffectedSystem($n->getObjectValue([AuthorizationSystem::class, 'createFromDiscriminatorValue'])),
            'systemWithAccess' => fn(ParseNode $n) => $o->setSystemWithAccess($n->getObjectValue([AuthorizationSystemInfo::class, 'createFromDiscriminatorValue'])),
            'trustedIdentityCount' => fn(ParseNode $n) => $o->setTrustedIdentityCount($n->getIntegerValue()),
            'trustsAllIdentities' => fn(ParseNode $n) => $o->setTrustsAllIdentities($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the systemWithAccess property value. The systemWithAccess property
     * @return AuthorizationSystemInfo|null
    */
    public function getSystemWithAccess(): ?AuthorizationSystemInfo {
        $val = $this->getBackingStore()->get('systemWithAccess');
        if (is_null($val) || $val instanceof AuthorizationSystemInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'systemWithAccess'");
    }

    /**
     * Gets the trustedIdentityCount property value. The number of identities in the external system that are trusted, if not all. Supports $orderby.
     * @return int|null
    */
    public function getTrustedIdentityCount(): ?int {
        $val = $this->getBackingStore()->get('trustedIdentityCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustedIdentityCount'");
    }

    /**
     * Gets the trustsAllIdentities property value. Flag that determines if all identities in the external system are trusted, or only a subset.
     * @return bool|null
    */
    public function getTrustsAllIdentities(): ?bool {
        $val = $this->getBackingStore()->get('trustsAllIdentities');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'trustsAllIdentities'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('accessMethods', $this->getAccessMethods());
        $writer->writeObjectValue('affectedSystem', $this->getAffectedSystem());
        $writer->writeObjectValue('systemWithAccess', $this->getSystemWithAccess());
        $writer->writeIntegerValue('trustedIdentityCount', $this->getTrustedIdentityCount());
        $writer->writeBooleanValue('trustsAllIdentities', $this->getTrustsAllIdentities());
    }

    /**
     * Sets the accessMethods property value. The accessMethods property
     * @param ExternalSystemAccessMethods|null $value Value to set for the accessMethods property.
    */
    public function setAccessMethods(?ExternalSystemAccessMethods $value): void {
        $this->getBackingStore()->set('accessMethods', $value);
    }

    /**
     * Sets the affectedSystem property value. The affectedSystem property
     * @param AuthorizationSystem|null $value Value to set for the affectedSystem property.
    */
    public function setAffectedSystem(?AuthorizationSystem $value): void {
        $this->getBackingStore()->set('affectedSystem', $value);
    }

    /**
     * Sets the systemWithAccess property value. The systemWithAccess property
     * @param AuthorizationSystemInfo|null $value Value to set for the systemWithAccess property.
    */
    public function setSystemWithAccess(?AuthorizationSystemInfo $value): void {
        $this->getBackingStore()->set('systemWithAccess', $value);
    }

    /**
     * Sets the trustedIdentityCount property value. The number of identities in the external system that are trusted, if not all. Supports $orderby.
     * @param int|null $value Value to set for the trustedIdentityCount property.
    */
    public function setTrustedIdentityCount(?int $value): void {
        $this->getBackingStore()->set('trustedIdentityCount', $value);
    }

    /**
     * Sets the trustsAllIdentities property value. Flag that determines if all identities in the external system are trusted, or only a subset.
     * @param bool|null $value Value to set for the trustsAllIdentities property.
    */
    public function setTrustsAllIdentities(?bool $value): void {
        $this->getBackingStore()->set('trustsAllIdentities', $value);
    }

}
