<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants\ManagedTenant;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantRelationship extends Entity 
{
    /** @var array<DelegatedAdminCustomer>|null $delegatedAdminCustomers  */
    private ?array $delegatedAdminCustomers = null;
    
    /** @var array<DelegatedAdminRelationship>|null $delegatedAdminRelationships  */
    private ?array $delegatedAdminRelationships = null;
    
    /** @var ManagedTenant|null $managedTenants The operations available to interact with the multi-tenant management platform. */
    private ?ManagedTenant $managedTenants = null;
    
    /**
     * Instantiates a new tenantRelationship and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantRelationship
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TenantRelationship {
        return new TenantRelationship();
    }

    /**
     * Gets the delegatedAdminCustomers property value. 
     * @return array<DelegatedAdminCustomer>|null
    */
    public function getDelegatedAdminCustomers(): ?array {
        return $this->delegatedAdminCustomers;
    }

    /**
     * Gets the delegatedAdminRelationships property value. 
     * @return array<DelegatedAdminRelationship>|null
    */
    public function getDelegatedAdminRelationships(): ?array {
        return $this->delegatedAdminRelationships;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'delegatedAdminCustomers' => function (self $o, ParseNode $n) { $o->setDelegatedAdminCustomers($n->getCollectionOfObjectValues(DelegatedAdminCustomer::class)); },
            'delegatedAdminRelationships' => function (self $o, ParseNode $n) { $o->setDelegatedAdminRelationships($n->getCollectionOfObjectValues(DelegatedAdminRelationship::class)); },
            'managedTenants' => function (self $o, ParseNode $n) { $o->setManagedTenants($n->getObjectValue(ManagedTenant::class)); },
        ]);
    }

    /**
     * Gets the managedTenants property value. The operations available to interact with the multi-tenant management platform.
     * @return ManagedTenant|null
    */
    public function getManagedTenants(): ?ManagedTenant {
        return $this->managedTenants;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('delegatedAdminCustomers', $this->delegatedAdminCustomers);
        $writer->writeCollectionOfObjectValues('delegatedAdminRelationships', $this->delegatedAdminRelationships);
        $writer->writeObjectValue('managedTenants', $this->managedTenants);
    }

    /**
     * Sets the delegatedAdminCustomers property value. 
     *  @param array<DelegatedAdminCustomer>|null $value Value to set for the delegatedAdminCustomers property.
    */
    public function setDelegatedAdminCustomers(?array $value ): void {
        $this->delegatedAdminCustomers = $value;
    }

    /**
     * Sets the delegatedAdminRelationships property value. 
     *  @param array<DelegatedAdminRelationship>|null $value Value to set for the delegatedAdminRelationships property.
    */
    public function setDelegatedAdminRelationships(?array $value ): void {
        $this->delegatedAdminRelationships = $value;
    }

    /**
     * Sets the managedTenants property value. The operations available to interact with the multi-tenant management platform.
     *  @param ManagedTenant|null $value Value to set for the managedTenants property.
    */
    public function setManagedTenants(?ManagedTenant $value ): void {
        $this->managedTenants = $value;
    }

}
