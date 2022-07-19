<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcConnection extends Entity implements Parsable 
{
    /**
     * @var string|null $displayName The display name of the cloud PC connection. Required. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $healthCheckStatus The health status of the cloud PC connection. Possible values are: pending, running, passed, failed, unknownFutureValue.  Required. Read-only.
    */
    private ?string $healthCheckStatus = null;
    
    /**
     * @var DateTime|null $lastRefreshedDateTime Date and time the entity was last updated in the multi-tenant management platform. Required. Read-only.
    */
    private ?DateTime $lastRefreshedDateTime = null;
    
    /**
     * @var string|null $tenantDisplayName The display name for the managed tenant. Required. Read-only.
    */
    private ?string $tenantDisplayName = null;
    
    /**
     * @var string|null $tenantId The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
    */
    private ?string $tenantId = null;
    
    /**
     * Instantiates a new cloudPcConnection and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.cloudPcConnection');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcConnection
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcConnection {
        return new CloudPcConnection();
    }

    /**
     * Gets the displayName property value. The display name of the cloud PC connection. Required. Read-only.
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
            'healthCheckStatus' => function (ParseNode $n) use ($o) { $o->setHealthCheckStatus($n->getStringValue()); },
            'lastRefreshedDateTime' => function (ParseNode $n) use ($o) { $o->setLastRefreshedDateTime($n->getDateTimeValue()); },
            'tenantDisplayName' => function (ParseNode $n) use ($o) { $o->setTenantDisplayName($n->getStringValue()); },
            'tenantId' => function (ParseNode $n) use ($o) { $o->setTenantId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the healthCheckStatus property value. The health status of the cloud PC connection. Possible values are: pending, running, passed, failed, unknownFutureValue.  Required. Read-only.
     * @return string|null
    */
    public function getHealthCheckStatus(): ?string {
        return $this->healthCheckStatus;
    }

    /**
     * Gets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Required. Read-only.
     * @return DateTime|null
    */
    public function getLastRefreshedDateTime(): ?DateTime {
        return $this->lastRefreshedDateTime;
    }

    /**
     * Gets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     * @return string|null
    */
    public function getTenantDisplayName(): ?string {
        return $this->tenantDisplayName;
    }

    /**
     * Gets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
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
        $writer->writeStringValue('healthCheckStatus', $this->healthCheckStatus);
        $writer->writeDateTimeValue('lastRefreshedDateTime', $this->lastRefreshedDateTime);
        $writer->writeStringValue('tenantDisplayName', $this->tenantDisplayName);
        $writer->writeStringValue('tenantId', $this->tenantId);
    }

    /**
     * Sets the displayName property value. The display name of the cloud PC connection. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the healthCheckStatus property value. The health status of the cloud PC connection. Possible values are: pending, running, passed, failed, unknownFutureValue.  Required. Read-only.
     *  @param string|null $value Value to set for the healthCheckStatus property.
    */
    public function setHealthCheckStatus(?string $value ): void {
        $this->healthCheckStatus = $value;
    }

    /**
     * Sets the lastRefreshedDateTime property value. Date and time the entity was last updated in the multi-tenant management platform. Required. Read-only.
     *  @param DateTime|null $value Value to set for the lastRefreshedDateTime property.
    */
    public function setLastRefreshedDateTime(?DateTime $value ): void {
        $this->lastRefreshedDateTime = $value;
    }

    /**
     * Sets the tenantDisplayName property value. The display name for the managed tenant. Required. Read-only.
     *  @param string|null $value Value to set for the tenantDisplayName property.
    */
    public function setTenantDisplayName(?string $value ): void {
        $this->tenantDisplayName = $value;
    }

    /**
     * Sets the tenantId property value. The Azure Active Directory tenant identifier for the managed tenant. Required. Read-only.
     *  @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value ): void {
        $this->tenantId = $value;
    }

}
