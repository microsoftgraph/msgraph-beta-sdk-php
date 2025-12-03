<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointUserIdentityMapping extends SharePointIdentityMapping implements Parsable 
{
    /**
     * Instantiates a new SharePointUserIdentityMapping and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointUserIdentityMapping
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointUserIdentityMapping {
        return new SharePointUserIdentityMapping();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'sourceUserIdentity' => fn(ParseNode $n) => $o->setSourceUserIdentity($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'targetUserIdentity' => fn(ParseNode $n) => $o->setTargetUserIdentity($n->getObjectValue([UserIdentity::class, 'createFromDiscriminatorValue'])),
            'targetUserMigrationData' => fn(ParseNode $n) => $o->setTargetUserMigrationData($n->getObjectValue([SharePointIdentityMappingUserMigrationData::class, 'createFromDiscriminatorValue'])),
            'userType' => fn(ParseNode $n) => $o->setUserType($n->getEnumValue(SharePointIdentityMappingUserType::class)),
        ]);
    }

    /**
     * Gets the sourceUserIdentity property value. The identity information of the source user in the originating organization. Contains the source user's principal name.
     * @return UserIdentity|null
    */
    public function getSourceUserIdentity(): ?UserIdentity {
        $val = $this->getBackingStore()->get('sourceUserIdentity');
        if (is_null($val) || $val instanceof UserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sourceUserIdentity'");
    }

    /**
     * Gets the targetUserIdentity property value. The identity information of the target user in the destination organization. Contains the target user's principal name.
     * @return UserIdentity|null
    */
    public function getTargetUserIdentity(): ?UserIdentity {
        $val = $this->getBackingStore()->get('targetUserIdentity');
        if (is_null($val) || $val instanceof UserIdentity) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetUserIdentity'");
    }

    /**
     * Gets the targetUserMigrationData property value. Additional migration-specific data for the target user. Contains the email address for the user in the destination organization.
     * @return SharePointIdentityMappingUserMigrationData|null
    */
    public function getTargetUserMigrationData(): ?SharePointIdentityMappingUserMigrationData {
        $val = $this->getBackingStore()->get('targetUserMigrationData');
        if (is_null($val) || $val instanceof SharePointIdentityMappingUserMigrationData) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetUserMigrationData'");
    }

    /**
     * Gets the userType property value. The userType property
     * @return SharePointIdentityMappingUserType|null
    */
    public function getUserType(): ?SharePointIdentityMappingUserType {
        $val = $this->getBackingStore()->get('userType');
        if (is_null($val) || $val instanceof SharePointIdentityMappingUserType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userType'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('sourceUserIdentity', $this->getSourceUserIdentity());
        $writer->writeObjectValue('targetUserIdentity', $this->getTargetUserIdentity());
        $writer->writeObjectValue('targetUserMigrationData', $this->getTargetUserMigrationData());
        $writer->writeEnumValue('userType', $this->getUserType());
    }

    /**
     * Sets the sourceUserIdentity property value. The identity information of the source user in the originating organization. Contains the source user's principal name.
     * @param UserIdentity|null $value Value to set for the sourceUserIdentity property.
    */
    public function setSourceUserIdentity(?UserIdentity $value): void {
        $this->getBackingStore()->set('sourceUserIdentity', $value);
    }

    /**
     * Sets the targetUserIdentity property value. The identity information of the target user in the destination organization. Contains the target user's principal name.
     * @param UserIdentity|null $value Value to set for the targetUserIdentity property.
    */
    public function setTargetUserIdentity(?UserIdentity $value): void {
        $this->getBackingStore()->set('targetUserIdentity', $value);
    }

    /**
     * Sets the targetUserMigrationData property value. Additional migration-specific data for the target user. Contains the email address for the user in the destination organization.
     * @param SharePointIdentityMappingUserMigrationData|null $value Value to set for the targetUserMigrationData property.
    */
    public function setTargetUserMigrationData(?SharePointIdentityMappingUserMigrationData $value): void {
        $this->getBackingStore()->set('targetUserMigrationData', $value);
    }

    /**
     * Sets the userType property value. The userType property
     * @param SharePointIdentityMappingUserType|null $value Value to set for the userType property.
    */
    public function setUserType(?SharePointIdentityMappingUserType $value): void {
        $this->getBackingStore()->set('userType', $value);
    }

}
