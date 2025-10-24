<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class InvalidLicenseAlertIncident extends UnifiedRoleManagementAlertIncident implements Parsable 
{
    /**
     * Instantiates a new InvalidLicenseAlertIncident and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.invalidLicenseAlertIncident');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InvalidLicenseAlertIncident
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InvalidLicenseAlertIncident {
        return new InvalidLicenseAlertIncident();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'tenantLicenseStatus' => fn(ParseNode $n) => $o->setTenantLicenseStatus($n->getStringValue()),
        ]);
    }

    /**
     * Gets the tenantLicenseStatus property value. Status of the tenant's Microsoft Entra ID P2 license.
     * @return string|null
    */
    public function getTenantLicenseStatus(): ?string {
        $val = $this->getBackingStore()->get('tenantLicenseStatus');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantLicenseStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('tenantLicenseStatus', $this->getTenantLicenseStatus());
    }

    /**
     * Sets the tenantLicenseStatus property value. Status of the tenant's Microsoft Entra ID P2 license.
     * @param string|null $value Value to set for the tenantLicenseStatus property.
    */
    public function setTenantLicenseStatus(?string $value): void {
        $this->getBackingStore()->set('tenantLicenseStatus', $value);
    }

}
