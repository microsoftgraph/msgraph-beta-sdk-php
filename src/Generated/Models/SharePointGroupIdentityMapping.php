<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointGroupIdentityMapping extends SharePointIdentityMapping implements Parsable 
{
    /**
     * Instantiates a new SharePointGroupIdentityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointGroupIdentityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointGroupIdentityMapping {
        return new SharePointGroupIdentityMapping();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'groupType' => fn(ParseNode $n) => $o->setGroupType($n->getEnumValue(SharePointIdentityMappingGroupType::class)),
            'sourceGroupIdentity' => fn(ParseNode $n) => $o->setSourceGroupIdentity($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'targetGroupIdentity' => fn(ParseNode $n) => $o->setTargetGroupIdentity($n->getObjectValue([Identity::class, 'createFromDiscriminatorValue'])),
            'targetGroupMigrationData' => fn(ParseNode $n) => $o->setTargetGroupMigrationData($n->getObjectValue([SharePointIdentityMappingGroupMigrationData::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the groupType property value. The groupType property
     * @return SharePointIdentityMappingGroupType|null
    */
    public function getGroupType(): ?SharePointIdentityMappingGroupType {
        $val = $this->getBackingStore()->get('groupType');
        if (is_null($val) || $val instanceof SharePointIdentityMappingGroupType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupType'");
    }

    /**
     * Gets the sourceGroupIdentity property value. The identity information of the source group in the originating organization. Contains the ID of the source group.
     * @return Identity|null
    */
    public function getSourceGroupIdentity(): ?Identity {
        $val = $this->getBackingStore()->get('sourceGroupIdentity');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceGroupIdentity'");
    }

    /**
     * Gets the targetGroupIdentity property value. The identity information of the target group in the destination organization. Contains the ID of the target group.
     * @return Identity|null
    */
    public function getTargetGroupIdentity(): ?Identity {
        $val = $this->getBackingStore()->get('targetGroupIdentity');
        if (is_null($val) || $val instanceof Identity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetGroupIdentity'");
    }

    /**
     * Gets the targetGroupMigrationData property value. Additional migration-specific data for the target group.
     * @return SharePointIdentityMappingGroupMigrationData|null
    */
    public function getTargetGroupMigrationData(): ?SharePointIdentityMappingGroupMigrationData {
        $val = $this->getBackingStore()->get('targetGroupMigrationData');
        if (is_null($val) || $val instanceof SharePointIdentityMappingGroupMigrationData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetGroupMigrationData'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('groupType', $this->getGroupType());
        $writer->writeObjectValue('sourceGroupIdentity', $this->getSourceGroupIdentity());
        $writer->writeObjectValue('targetGroupIdentity', $this->getTargetGroupIdentity());
        $writer->writeObjectValue('targetGroupMigrationData', $this->getTargetGroupMigrationData());
    }

    /**
     * Sets the groupType property value. The groupType property
     * @param SharePointIdentityMappingGroupType|null $value Value to set for the groupType property.
    */
    public function setGroupType(?SharePointIdentityMappingGroupType $value): void {
        $this->getBackingStore()->set('groupType', $value);
    }

    /**
     * Sets the sourceGroupIdentity property value. The identity information of the source group in the originating organization. Contains the ID of the source group.
     * @param Identity|null $value Value to set for the sourceGroupIdentity property.
    */
    public function setSourceGroupIdentity(?Identity $value): void {
        $this->getBackingStore()->set('sourceGroupIdentity', $value);
    }

    /**
     * Sets the targetGroupIdentity property value. The identity information of the target group in the destination organization. Contains the ID of the target group.
     * @param Identity|null $value Value to set for the targetGroupIdentity property.
    */
    public function setTargetGroupIdentity(?Identity $value): void {
        $this->getBackingStore()->set('targetGroupIdentity', $value);
    }

    /**
     * Sets the targetGroupMigrationData property value. Additional migration-specific data for the target group.
     * @param SharePointIdentityMappingGroupMigrationData|null $value Value to set for the targetGroupMigrationData property.
    */
    public function setTargetGroupMigrationData(?SharePointIdentityMappingGroupMigrationData $value): void {
        $this->getBackingStore()->set('targetGroupMigrationData', $value);
    }

}
