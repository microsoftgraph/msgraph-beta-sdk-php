<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class PermissionsAnalytics extends Entity implements Parsable 
{
    /**
     * Instantiates a new permissionsAnalytics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PermissionsAnalytics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PermissionsAnalytics {
        return new PermissionsAnalytics();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'findings' => fn(ParseNode $n) => $o->setFindings($n->getCollectionOfObjectValues([Finding::class, 'createFromDiscriminatorValue'])),
            'permissionsCreepIndexDistributions' => fn(ParseNode $n) => $o->setPermissionsCreepIndexDistributions($n->getCollectionOfObjectValues([PermissionsCreepIndexDistribution::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the findings property value. The output of the permissions usage data analysis performed by Permissions Management to assess risk with identities and resources.
     * @return array<Finding>|null
    */
    public function getFindings(): ?array {
        $val = $this->getBackingStore()->get('findings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Finding::class);
            /** @var array<Finding>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'findings'");
    }

    /**
     * Gets the permissionsCreepIndexDistributions property value. Represents the Permissions Creep Index (PCI) for the authorization system. PCI distribution chart shows the classification of human and nonhuman identities based on the PCI score in three buckets (low, medium, high).
     * @return array<PermissionsCreepIndexDistribution>|null
    */
    public function getPermissionsCreepIndexDistributions(): ?array {
        $val = $this->getBackingStore()->get('permissionsCreepIndexDistributions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PermissionsCreepIndexDistribution::class);
            /** @var array<PermissionsCreepIndexDistribution>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionsCreepIndexDistributions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('findings', $this->getFindings());
        $writer->writeCollectionOfObjectValues('permissionsCreepIndexDistributions', $this->getPermissionsCreepIndexDistributions());
    }

    /**
     * Sets the findings property value. The output of the permissions usage data analysis performed by Permissions Management to assess risk with identities and resources.
     * @param array<Finding>|null $value Value to set for the findings property.
    */
    public function setFindings(?array $value): void {
        $this->getBackingStore()->set('findings', $value);
    }

    /**
     * Sets the permissionsCreepIndexDistributions property value. Represents the Permissions Creep Index (PCI) for the authorization system. PCI distribution chart shows the classification of human and nonhuman identities based on the PCI score in three buckets (low, medium, high).
     * @param array<PermissionsCreepIndexDistribution>|null $value Value to set for the permissionsCreepIndexDistributions property.
    */
    public function setPermissionsCreepIndexDistributions(?array $value): void {
        $this->getBackingStore()->set('permissionsCreepIndexDistributions', $value);
    }

}
