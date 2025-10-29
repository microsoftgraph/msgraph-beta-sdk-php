<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantIdentitySyncPolicyPartner extends PolicyDeletableItem implements Parsable 
{
    /**
     * Instantiates a new CrossTenantIdentitySyncPolicyPartner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.crossTenantIdentitySyncPolicyPartner');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantIdentitySyncPolicyPartner
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantIdentitySyncPolicyPartner {
        return new CrossTenantIdentitySyncPolicyPartner();
    }

    /**
     * Gets the displayName property value. Display name for the cross-tenant user synchronization policy. Use the name of the partner Microsoft Entra tenant to easily identify the policy. Optional.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the externalCloudAuthorizedApplicationId property value. The externalCloudAuthorizedApplicationId property
     * @return string|null
    */
    public function getExternalCloudAuthorizedApplicationId(): ?string {
        $val = $this->getBackingStore()->get('externalCloudAuthorizedApplicationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'externalCloudAuthorizedApplicationId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'externalCloudAuthorizedApplicationId' => fn(ParseNode $n) => $o->setExternalCloudAuthorizedApplicationId($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'userSyncInbound' => fn(ParseNode $n) => $o->setUserSyncInbound($n->getObjectValue([CrossTenantUserSyncInbound::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the tenantId property value. Tenant identifier for the partner Microsoft Entra organization. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the userSyncInbound property value. Defines whether users can be synchronized from the partner tenant. Key.
     * @return CrossTenantUserSyncInbound|null
    */
    public function getUserSyncInbound(): ?CrossTenantUserSyncInbound {
        $val = $this->getBackingStore()->get('userSyncInbound');
        if (is_null($val) || $val instanceof CrossTenantUserSyncInbound) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userSyncInbound'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('externalCloudAuthorizedApplicationId', $this->getExternalCloudAuthorizedApplicationId());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeObjectValue('userSyncInbound', $this->getUserSyncInbound());
    }

    /**
     * Sets the displayName property value. Display name for the cross-tenant user synchronization policy. Use the name of the partner Microsoft Entra tenant to easily identify the policy. Optional.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the externalCloudAuthorizedApplicationId property value. The externalCloudAuthorizedApplicationId property
     * @param string|null $value Value to set for the externalCloudAuthorizedApplicationId property.
    */
    public function setExternalCloudAuthorizedApplicationId(?string $value): void {
        $this->getBackingStore()->set('externalCloudAuthorizedApplicationId', $value);
    }

    /**
     * Sets the tenantId property value. Tenant identifier for the partner Microsoft Entra organization. Read-only.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the userSyncInbound property value. Defines whether users can be synchronized from the partner tenant. Key.
     * @param CrossTenantUserSyncInbound|null $value Value to set for the userSyncInbound property.
    */
    public function setUserSyncInbound(?CrossTenantUserSyncInbound $value): void {
        $this->getBackingStore()->set('userSyncInbound', $value);
    }

}
