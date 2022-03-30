<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantCustomizedInformation extends Entity 
{
    /** @var array<TenantContactInformation>|null $contacts The collection of contacts for the managed tenant. Optional. */
    private ?array $contacts = null;
    
    /** @var string|null $displayName The display name for the managed tenant. Required. Read-only. */
    private ?string $displayName = null;
    
    /** @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only. */
    private ?string $tenantId = null;
    
    /** @var string|null $website The website for the managed tenant. Required. */
    private ?string $website = null;
    
    /**
     * Instantiates a new tenantCustomizedInformation and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantCustomizedInformation
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): TenantCustomizedInformation {
        return new TenantCustomizedInformation();
    }

    /**
     * Gets the contacts property value. The collection of contacts for the managed tenant. Optional.
     * @return array<TenantContactInformation>|null
    */
    public function getContacts(): ?array {
        return $this->contacts;
    }

    /**
     * Gets the displayName property value. The display name for the managed tenant. Required. Read-only.
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
        return array_merge(parent::getFieldDeserializers(), [
            'contacts' => function (self $o, ParseNode $n) { $o->setContacts($n->getCollectionOfObjectValues(TenantContactInformation::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'tenantId' => function (self $o, ParseNode $n) { $o->setTenantId($n->getStringValue()); },
            'website' => function (self $o, ParseNode $n) { $o->setWebsite($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     * @return string|null
    */
    public function getTenantId(): ?string {
        return $this->tenantId;
    }

    /**
     * Gets the website property value. The website for the managed tenant. Required.
     * @return string|null
    */
    public function getWebsite(): ?string {
        return $this->website;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('contacts', $this->contacts);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('tenantId', $this->tenantId);
        $writer->writeStringValue('website', $this->website);
    }

    /**
     * Sets the contacts property value. The collection of contacts for the managed tenant. Optional.
     *  @param array<TenantContactInformation>|null $value Value to set for the contacts property.
    */
    public function setContacts(?array $value ): void {
        $this->contacts = $value;
    }

    /**
     * Sets the displayName property value. The display name for the managed tenant. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

    /**
     * Sets the website property value. The website for the managed tenant. Required.
     *  @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value ): void {
        $this->website = $value;
    }

}
