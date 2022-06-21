<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantAppManagementPolicy extends PolicyBase implements Parsable 
{
    /**
     * @var AppManagementConfiguration|null $applicationRestrictions Restrictions that apply as default to all application objects in the tenant.
    */
    private ?AppManagementConfiguration $applicationRestrictions = null;
    
    /**
     * @var bool|null $isEnabled Denotes whether the policy is enabled. Default value is false.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var AppManagementConfiguration|null $servicePrincipalRestrictions Restrictions that apply as default to all service principal objects in the tenant.
    */
    private ?AppManagementConfiguration $servicePrincipalRestrictions = null;
    
    /**
     * Instantiates a new TenantAppManagementPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantAppManagementPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantAppManagementPolicy {
        return new TenantAppManagementPolicy();
    }

    /**
     * Gets the applicationRestrictions property value. Restrictions that apply as default to all application objects in the tenant.
     * @return AppManagementConfiguration|null
    */
    public function getApplicationRestrictions(): ?AppManagementConfiguration {
        return $this->applicationRestrictions;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicationRestrictions' => function (ParseNode $n) use ($o) { $o->setApplicationRestrictions($n->getObjectValue(array(AppManagementConfiguration::class, 'createFromDiscriminatorValue'))); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'servicePrincipalRestrictions' => function (ParseNode $n) use ($o) { $o->setServicePrincipalRestrictions($n->getObjectValue(array(AppManagementConfiguration::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isEnabled property value. Denotes whether the policy is enabled. Default value is false.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the servicePrincipalRestrictions property value. Restrictions that apply as default to all service principal objects in the tenant.
     * @return AppManagementConfiguration|null
    */
    public function getServicePrincipalRestrictions(): ?AppManagementConfiguration {
        return $this->servicePrincipalRestrictions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('applicationRestrictions', $this->applicationRestrictions);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeObjectValue('servicePrincipalRestrictions', $this->servicePrincipalRestrictions);
    }

    /**
     * Sets the applicationRestrictions property value. Restrictions that apply as default to all application objects in the tenant.
     *  @param AppManagementConfiguration|null $value Value to set for the applicationRestrictions property.
    */
    public function setApplicationRestrictions(?AppManagementConfiguration $value ): void {
        $this->applicationRestrictions = $value;
    }

    /**
     * Sets the isEnabled property value. Denotes whether the policy is enabled. Default value is false.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the servicePrincipalRestrictions property value. Restrictions that apply as default to all service principal objects in the tenant.
     *  @param AppManagementConfiguration|null $value Value to set for the servicePrincipalRestrictions property.
    */
    public function setServicePrincipalRestrictions(?AppManagementConfiguration $value ): void {
        $this->servicePrincipalRestrictions = $value;
    }

}
