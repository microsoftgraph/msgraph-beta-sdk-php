<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class SharePointMigrationsRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new SharePointMigrationsRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationsRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationsRoot {
        return new SharePointMigrationsRoot();
    }

    /**
     * Gets the crossOrganizationGroupMappings property value. Collection of group identity mappings for cross-organization migration.
     * @return array<SharePointGroupIdentityMapping>|null
    */
    public function getCrossOrganizationGroupMappings(): ?array {
        $val = $this->getBackingStore()->get('crossOrganizationGroupMappings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharePointGroupIdentityMapping::class);
            /** @var array<SharePointGroupIdentityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crossOrganizationGroupMappings'");
    }

    /**
     * Gets the crossOrganizationMigrationTasks property value. A collection of sharePointMigrationTask resources that represent cross-organization migration tasks.
     * @return array<SharePointMigrationTask>|null
    */
    public function getCrossOrganizationMigrationTasks(): ?array {
        $val = $this->getBackingStore()->get('crossOrganizationMigrationTasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharePointMigrationTask::class);
            /** @var array<SharePointMigrationTask>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crossOrganizationMigrationTasks'");
    }

    /**
     * Gets the crossOrganizationUserMappings property value. Collection of user identity mappings for cross-organization migration.
     * @return array<SharePointUserIdentityMapping>|null
    */
    public function getCrossOrganizationUserMappings(): ?array {
        $val = $this->getBackingStore()->get('crossOrganizationUserMappings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SharePointUserIdentityMapping::class);
            /** @var array<SharePointUserIdentityMapping>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'crossOrganizationUserMappings'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'crossOrganizationGroupMappings' => fn(ParseNode $n) => $o->setCrossOrganizationGroupMappings($n->getCollectionOfObjectValues([SharePointGroupIdentityMapping::class, 'createFromDiscriminatorValue'])),
            'crossOrganizationMigrationTasks' => fn(ParseNode $n) => $o->setCrossOrganizationMigrationTasks($n->getCollectionOfObjectValues([SharePointMigrationTask::class, 'createFromDiscriminatorValue'])),
            'crossOrganizationUserMappings' => fn(ParseNode $n) => $o->setCrossOrganizationUserMappings($n->getCollectionOfObjectValues([SharePointUserIdentityMapping::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('crossOrganizationGroupMappings', $this->getCrossOrganizationGroupMappings());
        $writer->writeCollectionOfObjectValues('crossOrganizationMigrationTasks', $this->getCrossOrganizationMigrationTasks());
        $writer->writeCollectionOfObjectValues('crossOrganizationUserMappings', $this->getCrossOrganizationUserMappings());
    }

    /**
     * Sets the crossOrganizationGroupMappings property value. Collection of group identity mappings for cross-organization migration.
     * @param array<SharePointGroupIdentityMapping>|null $value Value to set for the crossOrganizationGroupMappings property.
    */
    public function setCrossOrganizationGroupMappings(?array $value): void {
        $this->getBackingStore()->set('crossOrganizationGroupMappings', $value);
    }

    /**
     * Sets the crossOrganizationMigrationTasks property value. A collection of sharePointMigrationTask resources that represent cross-organization migration tasks.
     * @param array<SharePointMigrationTask>|null $value Value to set for the crossOrganizationMigrationTasks property.
    */
    public function setCrossOrganizationMigrationTasks(?array $value): void {
        $this->getBackingStore()->set('crossOrganizationMigrationTasks', $value);
    }

    /**
     * Sets the crossOrganizationUserMappings property value. Collection of user identity mappings for cross-organization migration.
     * @param array<SharePointUserIdentityMapping>|null $value Value to set for the crossOrganizationUserMappings property.
    */
    public function setCrossOrganizationUserMappings(?array $value): void {
        $this->getBackingStore()->set('crossOrganizationUserMappings', $value);
    }

}
