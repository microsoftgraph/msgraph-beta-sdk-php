<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class NetworkAccessRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new NetworkAccessRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NetworkAccessRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NetworkAccessRoot {
        return new NetworkAccessRoot();
    }

    /**
     * Gets the alerts property value. The alerts property
     * @return array<Alert>|null
    */
    public function getAlerts(): ?array {
        $val = $this->getBackingStore()->get('alerts');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Alert::class);
            /** @var array<Alert>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'alerts'");
    }

    /**
     * Gets the connectivity property value. Connectivity represents all the connectivity components in Global Secure Access.
     * @return Connectivity|null
    */
    public function getConnectivity(): ?Connectivity {
        $val = $this->getBackingStore()->get('connectivity');
        if (is_null($val) || $val instanceof Connectivity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'connectivity'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'alerts' => fn(ParseNode $n) => $o->setAlerts($n->getCollectionOfObjectValues([Alert::class, 'createFromDiscriminatorValue'])),
            'connectivity' => fn(ParseNode $n) => $o->setConnectivity($n->getObjectValue([Connectivity::class, 'createFromDiscriminatorValue'])),
            'filteringPolicies' => fn(ParseNode $n) => $o->setFilteringPolicies($n->getCollectionOfObjectValues([FilteringPolicy::class, 'createFromDiscriminatorValue'])),
            'filteringProfiles' => fn(ParseNode $n) => $o->setFilteringProfiles($n->getCollectionOfObjectValues([FilteringProfile::class, 'createFromDiscriminatorValue'])),
            'forwardingPolicies' => fn(ParseNode $n) => $o->setForwardingPolicies($n->getCollectionOfObjectValues([ForwardingPolicy::class, 'createFromDiscriminatorValue'])),
            'forwardingProfiles' => fn(ParseNode $n) => $o->setForwardingProfiles($n->getCollectionOfObjectValues([ForwardingProfile::class, 'createFromDiscriminatorValue'])),
            'logs' => fn(ParseNode $n) => $o->setLogs($n->getObjectValue([Logs::class, 'createFromDiscriminatorValue'])),
            'reports' => fn(ParseNode $n) => $o->setReports($n->getObjectValue([Reports::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([Settings::class, 'createFromDiscriminatorValue'])),
            'tenantStatus' => fn(ParseNode $n) => $o->setTenantStatus($n->getObjectValue([TenantStatus::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the filteringPolicies property value. A filtering policy defines the specific traffic that is allowed or blocked through the Global Secure Access services for a filtering profile.
     * @return array<FilteringPolicy>|null
    */
    public function getFilteringPolicies(): ?array {
        $val = $this->getBackingStore()->get('filteringPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FilteringPolicy::class);
            /** @var array<FilteringPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filteringPolicies'");
    }

    /**
     * Gets the filteringProfiles property value. A filtering profile associates network access policies with Microsoft Entra ID Conditional Access policies, so that access policies can be applied to users and groups.
     * @return array<FilteringProfile>|null
    */
    public function getFilteringProfiles(): ?array {
        $val = $this->getBackingStore()->get('filteringProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, FilteringProfile::class);
            /** @var array<FilteringProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filteringProfiles'");
    }

    /**
     * Gets the forwardingPolicies property value. A forwarding policy defines the specific traffic that is routed through the Global Secure Access Service. It's then added to a forwarding profile.
     * @return array<ForwardingPolicy>|null
    */
    public function getForwardingPolicies(): ?array {
        $val = $this->getBackingStore()->get('forwardingPolicies');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ForwardingPolicy::class);
            /** @var array<ForwardingPolicy>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forwardingPolicies'");
    }

    /**
     * Gets the forwardingProfiles property value. A forwarding profile determines which types of traffic are routed through the Global Secure Access services and which ones are skipped. The handling of specific traffic is determined by the forwarding policies that are added to the forwarding profile.
     * @return array<ForwardingProfile>|null
    */
    public function getForwardingProfiles(): ?array {
        $val = $this->getBackingStore()->get('forwardingProfiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ForwardingProfile::class);
            /** @var array<ForwardingProfile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'forwardingProfiles'");
    }

    /**
     * Gets the logs property value. Represents network connections that are routed through Global Secure Access.
     * @return Logs|null
    */
    public function getLogs(): ?Logs {
        $val = $this->getBackingStore()->get('logs');
        if (is_null($val) || $val instanceof Logs) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'logs'");
    }

    /**
     * Gets the reports property value. Represents the status of the Global Secure Access services for the tenant.
     * @return Reports|null
    */
    public function getReports(): ?Reports {
        $val = $this->getBackingStore()->get('reports');
        if (is_null($val) || $val instanceof Reports) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reports'");
    }

    /**
     * Gets the settings property value. Global Secure Access settings.
     * @return Settings|null
    */
    public function getSettings(): ?Settings {
        $val = $this->getBackingStore()->get('settings');
        if (is_null($val) || $val instanceof Settings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'settings'");
    }

    /**
     * Gets the tenantStatus property value. Represents the status of the Global Secure Access services for the tenant.
     * @return TenantStatus|null
    */
    public function getTenantStatus(): ?TenantStatus {
        $val = $this->getBackingStore()->get('tenantStatus');
        if (is_null($val) || $val instanceof TenantStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('alerts', $this->getAlerts());
        $writer->writeObjectValue('connectivity', $this->getConnectivity());
        $writer->writeCollectionOfObjectValues('filteringPolicies', $this->getFilteringPolicies());
        $writer->writeCollectionOfObjectValues('filteringProfiles', $this->getFilteringProfiles());
        $writer->writeCollectionOfObjectValues('forwardingPolicies', $this->getForwardingPolicies());
        $writer->writeCollectionOfObjectValues('forwardingProfiles', $this->getForwardingProfiles());
        $writer->writeObjectValue('logs', $this->getLogs());
        $writer->writeObjectValue('reports', $this->getReports());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeObjectValue('tenantStatus', $this->getTenantStatus());
    }

    /**
     * Sets the alerts property value. The alerts property
     * @param array<Alert>|null $value Value to set for the alerts property.
    */
    public function setAlerts(?array $value): void {
        $this->getBackingStore()->set('alerts', $value);
    }

    /**
     * Sets the connectivity property value. Connectivity represents all the connectivity components in Global Secure Access.
     * @param Connectivity|null $value Value to set for the connectivity property.
    */
    public function setConnectivity(?Connectivity $value): void {
        $this->getBackingStore()->set('connectivity', $value);
    }

    /**
     * Sets the filteringPolicies property value. A filtering policy defines the specific traffic that is allowed or blocked through the Global Secure Access services for a filtering profile.
     * @param array<FilteringPolicy>|null $value Value to set for the filteringPolicies property.
    */
    public function setFilteringPolicies(?array $value): void {
        $this->getBackingStore()->set('filteringPolicies', $value);
    }

    /**
     * Sets the filteringProfiles property value. A filtering profile associates network access policies with Microsoft Entra ID Conditional Access policies, so that access policies can be applied to users and groups.
     * @param array<FilteringProfile>|null $value Value to set for the filteringProfiles property.
    */
    public function setFilteringProfiles(?array $value): void {
        $this->getBackingStore()->set('filteringProfiles', $value);
    }

    /**
     * Sets the forwardingPolicies property value. A forwarding policy defines the specific traffic that is routed through the Global Secure Access Service. It's then added to a forwarding profile.
     * @param array<ForwardingPolicy>|null $value Value to set for the forwardingPolicies property.
    */
    public function setForwardingPolicies(?array $value): void {
        $this->getBackingStore()->set('forwardingPolicies', $value);
    }

    /**
     * Sets the forwardingProfiles property value. A forwarding profile determines which types of traffic are routed through the Global Secure Access services and which ones are skipped. The handling of specific traffic is determined by the forwarding policies that are added to the forwarding profile.
     * @param array<ForwardingProfile>|null $value Value to set for the forwardingProfiles property.
    */
    public function setForwardingProfiles(?array $value): void {
        $this->getBackingStore()->set('forwardingProfiles', $value);
    }

    /**
     * Sets the logs property value. Represents network connections that are routed through Global Secure Access.
     * @param Logs|null $value Value to set for the logs property.
    */
    public function setLogs(?Logs $value): void {
        $this->getBackingStore()->set('logs', $value);
    }

    /**
     * Sets the reports property value. Represents the status of the Global Secure Access services for the tenant.
     * @param Reports|null $value Value to set for the reports property.
    */
    public function setReports(?Reports $value): void {
        $this->getBackingStore()->set('reports', $value);
    }

    /**
     * Sets the settings property value. Global Secure Access settings.
     * @param Settings|null $value Value to set for the settings property.
    */
    public function setSettings(?Settings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the tenantStatus property value. Represents the status of the Global Secure Access services for the tenant.
     * @param TenantStatus|null $value Value to set for the tenantStatus property.
    */
    public function setTenantStatus(?TenantStatus $value): void {
        $this->getBackingStore()->set('tenantStatus', $value);
    }

}
