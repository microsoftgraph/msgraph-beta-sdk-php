<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Graph\Beta\Generated\Models\ManagedTenants\ManagedTenant;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantRelationship extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<DelegatedAdminCustomer>|null $delegatedAdminCustomers The customer who has a delegated admin relationship with a Microsoft partner.
    */
    private ?array $delegatedAdminCustomers = null;
    
    /**
     * @var array<DelegatedAdminRelationship>|null $delegatedAdminRelationships The details of the delegated administrative privileges that a Microsoft partner has in a customer tenant.
    */
    private ?array $delegatedAdminRelationships = null;
    
    /**
     * @var ManagedTenant|null $managedTenants The operations available to interact with the multi-tenant management platform.
    */
    private ?ManagedTenant $managedTenants = null;
    
    /**
     * Instantiates a new TenantRelationship and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantRelationship
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantRelationship {
        return new TenantRelationship();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the delegatedAdminCustomers property value. The customer who has a delegated admin relationship with a Microsoft partner.
     * @return array<DelegatedAdminCustomer>|null
    */
    public function getDelegatedAdminCustomers(): ?array {
        return $this->delegatedAdminCustomers;
    }

    /**
     * Gets the delegatedAdminRelationships property value. The details of the delegated administrative privileges that a Microsoft partner has in a customer tenant.
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'delegatedAdminCustomers' => function (ParseNode $n) use ($o) { $o->setDelegatedAdminCustomers($n->getCollectionOfObjectValues(array(DelegatedAdminCustomer::class, 'createFromDiscriminatorValue'))); },
            'delegatedAdminRelationships' => function (ParseNode $n) use ($o) { $o->setDelegatedAdminRelationships($n->getCollectionOfObjectValues(array(DelegatedAdminRelationship::class, 'createFromDiscriminatorValue'))); },
            'managedTenants' => function (ParseNode $n) use ($o) { $o->setManagedTenants($n->getObjectValue(array(ManagedTenant::class, 'createFromDiscriminatorValue'))); },
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
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the delegatedAdminCustomers property value. The customer who has a delegated admin relationship with a Microsoft partner.
     *  @param array<DelegatedAdminCustomer>|null $value Value to set for the delegatedAdminCustomers property.
    */
    public function setDelegatedAdminCustomers(?array $value ): void {
        $this->delegatedAdminCustomers = $value;
    }

    /**
     * Sets the delegatedAdminRelationships property value. The details of the delegated administrative privileges that a Microsoft partner has in a customer tenant.
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
