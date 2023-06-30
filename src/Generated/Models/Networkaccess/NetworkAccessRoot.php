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
     * Gets the connectivity property value. The connectivity property
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
            'connectivity' => fn(ParseNode $n) => $o->setConnectivity($n->getObjectValue([Connectivity::class, 'createFromDiscriminatorValue'])),
            'forwardingPolicies' => fn(ParseNode $n) => $o->setForwardingPolicies($n->getCollectionOfObjectValues([ForwardingPolicy::class, 'createFromDiscriminatorValue'])),
            'forwardingProfiles' => fn(ParseNode $n) => $o->setForwardingProfiles($n->getCollectionOfObjectValues([ForwardingProfile::class, 'createFromDiscriminatorValue'])),
            'logs' => fn(ParseNode $n) => $o->setLogs($n->getObjectValue([Logs::class, 'createFromDiscriminatorValue'])),
            'reports' => fn(ParseNode $n) => $o->setReports($n->getObjectValue([Reports::class, 'createFromDiscriminatorValue'])),
            'settings' => fn(ParseNode $n) => $o->setSettings($n->getObjectValue([Settings::class, 'createFromDiscriminatorValue'])),
            'tenantStatus' => fn(ParseNode $n) => $o->setTenantStatus($n->getObjectValue([TenantStatus::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the forwardingPolicies property value. The forwardingPolicies property
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
     * Gets the forwardingProfiles property value. The forwardingProfiles property
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
     * Gets the logs property value. The logs property
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
     * Gets the reports property value. The reports property
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
     * Gets the settings property value. The settings property
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
     * Gets the tenantStatus property value. The tenantStatus property
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
        $writer->writeObjectValue('connectivity', $this->getConnectivity());
        $writer->writeCollectionOfObjectValues('forwardingPolicies', $this->getForwardingPolicies());
        $writer->writeCollectionOfObjectValues('forwardingProfiles', $this->getForwardingProfiles());
        $writer->writeObjectValue('logs', $this->getLogs());
        $writer->writeObjectValue('reports', $this->getReports());
        $writer->writeObjectValue('settings', $this->getSettings());
        $writer->writeObjectValue('tenantStatus', $this->getTenantStatus());
    }

    /**
     * Sets the connectivity property value. The connectivity property
     * @param Connectivity|null $value Value to set for the connectivity property.
    */
    public function setConnectivity(?Connectivity $value): void {
        $this->getBackingStore()->set('connectivity', $value);
    }

    /**
     * Sets the forwardingPolicies property value. The forwardingPolicies property
     * @param array<ForwardingPolicy>|null $value Value to set for the forwardingPolicies property.
    */
    public function setForwardingPolicies(?array $value): void {
        $this->getBackingStore()->set('forwardingPolicies', $value);
    }

    /**
     * Sets the forwardingProfiles property value. The forwardingProfiles property
     * @param array<ForwardingProfile>|null $value Value to set for the forwardingProfiles property.
    */
    public function setForwardingProfiles(?array $value): void {
        $this->getBackingStore()->set('forwardingProfiles', $value);
    }

    /**
     * Sets the logs property value. The logs property
     * @param Logs|null $value Value to set for the logs property.
    */
    public function setLogs(?Logs $value): void {
        $this->getBackingStore()->set('logs', $value);
    }

    /**
     * Sets the reports property value. The reports property
     * @param Reports|null $value Value to set for the reports property.
    */
    public function setReports(?Reports $value): void {
        $this->getBackingStore()->set('reports', $value);
    }

    /**
     * Sets the settings property value. The settings property
     * @param Settings|null $value Value to set for the settings property.
    */
    public function setSettings(?Settings $value): void {
        $this->getBackingStore()->set('settings', $value);
    }

    /**
     * Sets the tenantStatus property value. The tenantStatus property
     * @param TenantStatus|null $value Value to set for the tenantStatus property.
    */
    public function setTenantStatus(?TenantStatus $value): void {
        $this->getBackingStore()->set('tenantStatus', $value);
    }

}
