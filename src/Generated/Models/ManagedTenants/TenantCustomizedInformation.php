<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class TenantCustomizedInformation extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantCustomizedInformation {
        return new TenantCustomizedInformation();
    }

    /**
     * Gets the contacts property value. The collection of contacts for the managed tenant. Optional.
     * @return array<TenantContactInformation>|null
    */
    public function getContacts(): ?array {
        $val = $this->getBackingStore()->get('contacts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, TenantContactInformation::class);
            /** @var array<TenantContactInformation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contacts'");
    }

    /**
     * Gets the displayName property value. The display name for the managed tenant. Required. Read-only.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contacts' => fn(ParseNode $n) => $o->setContacts($n->getCollectionOfObjectValues([TenantContactInformation::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'website' => fn(ParseNode $n) => $o->setWebsite($n->getStringValue()),
        ]);
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
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
     * Gets the website property value. The website for the managed tenant. Required.
     * @return string|null
    */
    public function getWebsite(): ?string {
        $val = $this->getBackingStore()->get('website');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'website'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('contacts', $this->getContacts());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeStringValue('website', $this->getWebsite());
    }

    /**
     * Sets the contacts property value. The collection of contacts for the managed tenant. Optional.
     * @param array<TenantContactInformation>|null $value Value to set for the contacts property.
    */
    public function setContacts(?array $value): void {
        $this->getBackingStore()->set('contacts', $value);
    }

    /**
     * Sets the displayName property value. The display name for the managed tenant. Required. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the website property value. The website for the managed tenant. Required.
     * @param string|null $value Value to set for the website property.
    */
    public function setWebsite(?string $value): void {
        $this->getBackingStore()->set('website', $value);
    }

}
