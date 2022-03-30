<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossTenantAccessPolicyConfigurationPartner extends CrossTenantAccessPolicyConfigurationBase 
{
    /** @var bool|null $isServiceProvider Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization. */
    private ?bool $isServiceProvider = null;
    
    /** @var string|null $tenantId The tenant identifier for the partner Azure AD organization. Read-only. Key. */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new crossTenantAccessPolicyConfigurationPartner and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossTenantAccessPolicyConfigurationPartner
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CrossTenantAccessPolicyConfigurationPartner {
        return new CrossTenantAccessPolicyConfigurationPartner();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'isServiceProvider' => function (self $o, ParseNode $n) { $o->setIsServiceProvider($n->getBooleanValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isServiceProvider property value. Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
     * @return bool|null
    */
    public function getIsServiceProvider(): ?bool {
        return $this->isServiceProvider;
    }

    /**
     * Gets the tenantId property value. The tenant identifier for the partner Azure AD organization. Read-only. Key.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isServiceProvider', $this->isServiceProvider);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the isServiceProvider property value. Identifies whether the partner-specific configuration is a Cloud Service Provider for your organization.
     *  @param bool|null $value Value to set for the isServiceProvider property.
    */
    public function setIsServiceProvider(?bool $value ): void {
        $this->isServiceProvider = $value;
    }

    /**
     * Sets the tenantId property value. The tenant identifier for the partner Azure AD organization. Read-only. Key.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
