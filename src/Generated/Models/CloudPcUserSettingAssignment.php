<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcUserSettingAssignment extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime The date and time this assignment was created. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var CloudPcManagementAssignmentTarget|null $target The assignment target for the user setting. Currently, the only target supported for this user setting is a user group. For details, see cloudPcManagementGroupAssignmentTarget.
    */
    private ?CloudPcManagementAssignmentTarget $target = null;
    
    /**
     * Instantiates a new CloudPcUserSettingAssignment and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.cloudPcUserSettingAssignment');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcUserSettingAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcUserSettingAssignment {
        return new CloudPcUserSettingAssignment();
    }

    /**
     * Gets the createdDateTime property value. The date and time this assignment was created. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'target' => function (ParseNode $n) use ($o) { $o->setTarget($n->getObjectValue(array(CloudPcManagementAssignmentTarget::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the target property value. The assignment target for the user setting. Currently, the only target supported for this user setting is a user group. For details, see cloudPcManagementGroupAssignmentTarget.
     * @return CloudPcManagementAssignmentTarget|null
    */
    public function getTarget(): ?CloudPcManagementAssignmentTarget {
        return $this->target;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeObjectValue('target', $this->target);
    }

    /**
     * Sets the createdDateTime property value. The date and time this assignment was created. The Timestamp type represents the date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 looks like this: '2014-01-01T00:00:00Z'.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the target property value. The assignment target for the user setting. Currently, the only target supported for this user setting is a user group. For details, see cloudPcManagementGroupAssignmentTarget.
     *  @param CloudPcManagementAssignmentTarget|null $value Value to set for the target property.
    */
    public function setTarget(?CloudPcManagementAssignmentTarget $value ): void {
        $this->target = $value;
    }

}
