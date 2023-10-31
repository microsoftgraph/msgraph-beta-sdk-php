<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AwsIdentityAccessManagementKeyAgeFinding extends Finding implements Parsable 
{
    /**
     * Instantiates a new awsIdentityAccessManagementKeyAgeFinding and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AwsIdentityAccessManagementKeyAgeFinding
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AwsIdentityAccessManagementKeyAgeFinding {
        return new AwsIdentityAccessManagementKeyAgeFinding();
    }

    /**
     * Gets the accessKey property value. The accessKey property
     * @return AwsAccessKey|null
    */
    public function getAccessKey(): ?AwsAccessKey {
        $val = $this->getBackingStore()->get('accessKey');
        if (is_null($val) || $val instanceof AwsAccessKey) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessKey'");
    }

    /**
     * Gets the actionSummary property value. The actionSummary property
     * @return ActionSummary|null
    */
    public function getActionSummary(): ?ActionSummary {
        $val = $this->getBackingStore()->get('actionSummary');
        if (is_null($val) || $val instanceof ActionSummary) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'actionSummary'");
    }

    /**
     * Gets the awsAccessKeyDetails property value. The awsAccessKeyDetails property
     * @return AwsAccessKeyDetails|null
    */
    public function getAwsAccessKeyDetails(): ?AwsAccessKeyDetails {
        $val = $this->getBackingStore()->get('awsAccessKeyDetails');
        if (is_null($val) || $val instanceof AwsAccessKeyDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'awsAccessKeyDetails'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessKey' => fn(ParseNode $n) => $o->setAccessKey($n->getObjectValue([AwsAccessKey::class, 'createFromDiscriminatorValue'])),
            'actionSummary' => fn(ParseNode $n) => $o->setActionSummary($n->getObjectValue([ActionSummary::class, 'createFromDiscriminatorValue'])),
            'awsAccessKeyDetails' => fn(ParseNode $n) => $o->setAwsAccessKeyDetails($n->getObjectValue([AwsAccessKeyDetails::class, 'createFromDiscriminatorValue'])),
            'permissionsCreepIndex' => fn(ParseNode $n) => $o->setPermissionsCreepIndex($n->getObjectValue([PermissionsCreepIndex::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getEnumValue(IamStatus::class)),
        ]);
    }

    /**
     * Gets the permissionsCreepIndex property value. The permissionsCreepIndex property
     * @return PermissionsCreepIndex|null
    */
    public function getPermissionsCreepIndex(): ?PermissionsCreepIndex {
        $val = $this->getBackingStore()->get('permissionsCreepIndex');
        if (is_null($val) || $val instanceof PermissionsCreepIndex) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'permissionsCreepIndex'");
    }

    /**
     * Gets the status property value. The status property
     * @return IamStatus|null
    */
    public function getStatus(): ?IamStatus {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || $val instanceof IamStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessKey', $this->getAccessKey());
        $writer->writeObjectValue('actionSummary', $this->getActionSummary());
        $writer->writeObjectValue('awsAccessKeyDetails', $this->getAwsAccessKeyDetails());
        $writer->writeObjectValue('permissionsCreepIndex', $this->getPermissionsCreepIndex());
        $writer->writeEnumValue('status', $this->getStatus());
    }

    /**
     * Sets the accessKey property value. The accessKey property
     * @param AwsAccessKey|null $value Value to set for the accessKey property.
    */
    public function setAccessKey(?AwsAccessKey $value): void {
        $this->getBackingStore()->set('accessKey', $value);
    }

    /**
     * Sets the actionSummary property value. The actionSummary property
     * @param ActionSummary|null $value Value to set for the actionSummary property.
    */
    public function setActionSummary(?ActionSummary $value): void {
        $this->getBackingStore()->set('actionSummary', $value);
    }

    /**
     * Sets the awsAccessKeyDetails property value. The awsAccessKeyDetails property
     * @param AwsAccessKeyDetails|null $value Value to set for the awsAccessKeyDetails property.
    */
    public function setAwsAccessKeyDetails(?AwsAccessKeyDetails $value): void {
        $this->getBackingStore()->set('awsAccessKeyDetails', $value);
    }

    /**
     * Sets the permissionsCreepIndex property value. The permissionsCreepIndex property
     * @param PermissionsCreepIndex|null $value Value to set for the permissionsCreepIndex property.
    */
    public function setPermissionsCreepIndex(?PermissionsCreepIndex $value): void {
        $this->getBackingStore()->set('permissionsCreepIndex', $value);
    }

    /**
     * Sets the status property value. The status property
     * @param IamStatus|null $value Value to set for the status property.
    */
    public function setStatus(?IamStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

}
