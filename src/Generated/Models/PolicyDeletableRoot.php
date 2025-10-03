<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PolicyDeletableRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new PolicyDeletableRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PolicyDeletableRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PolicyDeletableRoot {
        return new PolicyDeletableRoot();
    }

    /**
     * Gets the crossTenantPartners property value. Represents the partner-specific configuration for cross-tenant access and tenant restrictions. Cross-tenant access settings include inbound and outbound settings of Microsoft Entra B2B collaboration and B2B direct connect.
     * @return array<CrossTenantAccessPolicyConfigurationPartner>|null
    */
    public function getCrossTenantPartners(): ?array {
        $val = $this->getBackingStore()->get('crossTenantPartners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CrossTenantAccessPolicyConfigurationPartner::class);
            /** @var array<CrossTenantAccessPolicyConfigurationPartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crossTenantPartners'");
    }

    /**
     * Gets the crossTenantSyncPolicyPartners property value. Defines the cross-tenant policy for synchronization of users from a partner tenant. Use this user synchronization policy to streamline collaboration between users in a multi-tenant organization by automating the creation, update, and deletion of users from one tenant to another.
     * @return array<CrossTenantIdentitySyncPolicyPartner>|null
    */
    public function getCrossTenantSyncPolicyPartners(): ?array {
        $val = $this->getBackingStore()->get('crossTenantSyncPolicyPartners');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CrossTenantIdentitySyncPolicyPartner::class);
            /** @var array<CrossTenantIdentitySyncPolicyPartner>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crossTenantSyncPolicyPartners'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'crossTenantPartners' => fn(ParseNode $n) => $o->setCrossTenantPartners($n->getCollectionOfObjectValues([CrossTenantAccessPolicyConfigurationPartner::class, 'createFromDiscriminatorValue'])),
            'crossTenantSyncPolicyPartners' => fn(ParseNode $n) => $o->setCrossTenantSyncPolicyPartners($n->getCollectionOfObjectValues([CrossTenantIdentitySyncPolicyPartner::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('crossTenantPartners', $this->getCrossTenantPartners());
        $writer->writeCollectionOfObjectValues('crossTenantSyncPolicyPartners', $this->getCrossTenantSyncPolicyPartners());
    }

    /**
     * Sets the crossTenantPartners property value. Represents the partner-specific configuration for cross-tenant access and tenant restrictions. Cross-tenant access settings include inbound and outbound settings of Microsoft Entra B2B collaboration and B2B direct connect.
     * @param array<CrossTenantAccessPolicyConfigurationPartner>|null $value Value to set for the crossTenantPartners property.
    */
    public function setCrossTenantPartners(?array $value): void {
        $this->getBackingStore()->set('crossTenantPartners', $value);
    }

    /**
     * Sets the crossTenantSyncPolicyPartners property value. Defines the cross-tenant policy for synchronization of users from a partner tenant. Use this user synchronization policy to streamline collaboration between users in a multi-tenant organization by automating the creation, update, and deletion of users from one tenant to another.
     * @param array<CrossTenantIdentitySyncPolicyPartner>|null $value Value to set for the crossTenantSyncPolicyPartners property.
    */
    public function setCrossTenantSyncPolicyPartners(?array $value): void {
        $this->getBackingStore()->set('crossTenantSyncPolicyPartners', $value);
    }

}
