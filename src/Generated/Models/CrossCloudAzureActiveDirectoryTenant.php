<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CrossCloudAzureActiveDirectoryTenant extends IdentitySource implements Parsable 
{
    /**
     * @var string|null $cloudInstance The ID of the cloud where the tenant is located, one of microsoftonline.com, microsoftonline.us or partner.microsoftonline.cn. Read only.
    */
    private ?string $cloudInstance = null;
    
    /**
     * @var string|null $displayName The name of the Azure Active Directory tenant. Read only.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $tenantId The ID of the Azure Active Directory tenant. Read only.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new CrossCloudAzureActiveDirectoryTenant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.crossCloudAzureActiveDirectoryTenant');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CrossCloudAzureActiveDirectoryTenant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CrossCloudAzureActiveDirectoryTenant {
        return new CrossCloudAzureActiveDirectoryTenant();
    }

    /**
     * Gets the cloudInstance property value. The ID of the cloud where the tenant is located, one of microsoftonline.com, microsoftonline.us or partner.microsoftonline.cn. Read only.
     * @return string|null
    */
    public function getCloudInstance(): ?string {
        return $this->cloudInstance;
    }

    /**
     * Gets the displayName property value. The name of the Azure Active Directory tenant. Read only.
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
            'cloudInstance' => function (ParseNode $n) use ($o) { $o->setCloudInstance($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the tenantId property value. The ID of the Azure Active Directory tenant. Read only.
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
        $writer->writeStringValue('cloudInstance', $this->cloudInstance);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the cloudInstance property value. The ID of the cloud where the tenant is located, one of microsoftonline.com, microsoftonline.us or partner.microsoftonline.cn. Read only.
     *  @param string|null $value Value to set for the cloudInstance property.
    */
    public function setCloudInstance(?string $value ): void {
        $this->cloudInstance = $value;
    }

    /**
     * Sets the displayName property value. The name of the Azure Active Directory tenant. Read only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the tenantId property value. The ID of the Azure Active Directory tenant. Read only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
