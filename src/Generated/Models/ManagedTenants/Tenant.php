<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Tenant extends Entity implements Parsable 
{
    /**
     * Instantiates a new tenant and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Tenant
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Tenant {
        return new Tenant();
    }

    /**
     * Gets the contract property value. The relationship details for the tenant with the managing entity.
     * @return TenantContract|null
    */
    public function getContract(): ?TenantContract {
        $val = $this->getBackingStore()->get('contract');
        if (is_null($val) || $val instanceof TenantContract) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contract'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the tenant was created in the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the displayName property value. The display name for the tenant. Required. Read-only.
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
            'contract' => fn(ParseNode $n) => $o->setContract($n->getObjectValue([TenantContract::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastUpdatedDateTime' => fn(ParseNode $n) => $o->setLastUpdatedDateTime($n->getDateTimeValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'tenantStatusInformation' => fn(ParseNode $n) => $o->setTenantStatusInformation($n->getObjectValue([TenantStatusInformation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastUpdatedDateTime property value. The date and time the tenant was last updated within the multi-tenant management platform. Optional. Read-only.
     * @return DateTime|null
    */
    public function getLastUpdatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastUpdatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastUpdatedDateTime'");
    }

    /**
     * Gets the tenantId property value. The Microsoft Entra tenant identifier for the managed tenant. Optional. Read-only.
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
     * Gets the tenantStatusInformation property value. The onboarding status information for the tenant. Optional. Read-only.
     * @return TenantStatusInformation|null
    */
    public function getTenantStatusInformation(): ?TenantStatusInformation {
        $val = $this->getBackingStore()->get('tenantStatusInformation');
        if (is_null($val) || $val instanceof TenantStatusInformation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantStatusInformation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contract', $this->getContract());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeDateTimeValue('lastUpdatedDateTime', $this->getLastUpdatedDateTime());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeObjectValue('tenantStatusInformation', $this->getTenantStatusInformation());
    }

    /**
     * Sets the contract property value. The relationship details for the tenant with the managing entity.
     * @param TenantContract|null $value Value to set for the contract property.
    */
    public function setContract(?TenantContract $value): void {
        $this->getBackingStore()->set('contract', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the tenant was created in the multi-tenant management platform. Optional. Read-only.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The display name for the tenant. Required. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastUpdatedDateTime property value. The date and time the tenant was last updated within the multi-tenant management platform. Optional. Read-only.
     * @param DateTime|null $value Value to set for the lastUpdatedDateTime property.
    */
    public function setLastUpdatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastUpdatedDateTime', $value);
    }

    /**
     * Sets the tenantId property value. The Microsoft Entra tenant identifier for the managed tenant. Optional. Read-only.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the tenantStatusInformation property value. The onboarding status information for the tenant. Optional. Read-only.
     * @param TenantStatusInformation|null $value Value to set for the tenantStatusInformation property.
    */
    public function setTenantStatusInformation(?TenantStatusInformation $value): void {
        $this->getBackingStore()->set('tenantStatusInformation', $value);
    }

}
