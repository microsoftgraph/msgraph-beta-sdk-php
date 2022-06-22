<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DelegatedAdminCustomer extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The Azure AD display name of the customer tenant. Read-only. Supports $orderBy.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<DelegatedAdminServiceManagementDetail>|null $serviceManagementDetails Contains the management details of a service in the customer tenant that's managed by delegated administration.
    */
    private ?array $serviceManagementDetails = null;
    
    /**
     * @var string|null $tenantId The Azure AD-assigned tenant ID of the customer. Read-only.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new delegatedAdminCustomer and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DelegatedAdminCustomer
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DelegatedAdminCustomer {
        return new DelegatedAdminCustomer();
    }

    /**
     * Gets the displayName property value. The Azure AD display name of the customer tenant. Read-only. Supports $orderBy.
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
            'serviceManagementDetails' => function (ParseNode $n) use ($o) { $o->setServiceManagementDetails($n->getCollectionOfObjectValues(array(DelegatedAdminServiceManagementDetail::class, 'createFromDiscriminatorValue'))); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the serviceManagementDetails property value. Contains the management details of a service in the customer tenant that's managed by delegated administration.
     * @return array<DelegatedAdminServiceManagementDetail>|null
    */
    public function getServiceManagementDetails(): ?array {
        return $this->serviceManagementDetails;
    }

    /**
     * Gets the tenantId property value. The Azure AD-assigned tenant ID of the customer. Read-only.
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
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('serviceManagementDetails', $this->serviceManagementDetails);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the displayName property value. The Azure AD display name of the customer tenant. Read-only. Supports $orderBy.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the serviceManagementDetails property value. Contains the management details of a service in the customer tenant that's managed by delegated administration.
     *  @param array<DelegatedAdminServiceManagementDetail>|null $value Value to set for the serviceManagementDetails property.
    */
    public function setServiceManagementDetails(?array $value ): void {
        $this->serviceManagementDetails = $value;
    }

    /**
     * Sets the tenantId property value. The Azure AD-assigned tenant ID of the customer. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
