<?php

namespace Microsoft\Graph\Beta\Generated\Models\Partner\Security;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CustomersMfaEnforcedSecurityRequirement extends SecurityRequirement implements Parsable 
{
    /**
     * Instantiates a new CustomersMfaEnforcedSecurityRequirement and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CustomersMfaEnforcedSecurityRequirement
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CustomersMfaEnforcedSecurityRequirement {
        return new CustomersMfaEnforcedSecurityRequirement();
    }

    /**
     * Gets the compliantTenantCount property value. The number of customer tenants that are compliant.
     * @return int|null
    */
    public function getCompliantTenantCount(): ?int {
        $val = $this->getBackingStore()->get('compliantTenantCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'compliantTenantCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'compliantTenantCount' => fn(ParseNode $n) => $o->setCompliantTenantCount($n->getIntegerValue()),
            'totalTenantCount' => fn(ParseNode $n) => $o->setTotalTenantCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the totalTenantCount property value. The total number of customer tenants associated with this partner
     * @return int|null
    */
    public function getTotalTenantCount(): ?int {
        $val = $this->getBackingStore()->get('totalTenantCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalTenantCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('compliantTenantCount', $this->getCompliantTenantCount());
        $writer->writeIntegerValue('totalTenantCount', $this->getTotalTenantCount());
    }

    /**
     * Sets the compliantTenantCount property value. The number of customer tenants that are compliant.
     * @param int|null $value Value to set for the compliantTenantCount property.
    */
    public function setCompliantTenantCount(?int $value): void {
        $this->getBackingStore()->set('compliantTenantCount', $value);
    }

    /**
     * Sets the totalTenantCount property value. The total number of customer tenants associated with this partner
     * @param int|null $value Value to set for the totalTenantCount property.
    */
    public function setTotalTenantCount(?int $value): void {
        $this->getBackingStore()->set('totalTenantCount', $value);
    }

}
