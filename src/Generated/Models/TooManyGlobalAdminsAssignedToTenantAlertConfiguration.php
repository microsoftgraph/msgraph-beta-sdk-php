<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TooManyGlobalAdminsAssignedToTenantAlertConfiguration extends UnifiedRoleManagementAlertConfiguration implements Parsable 
{
    /**
     * Instantiates a new TooManyGlobalAdminsAssignedToTenantAlertConfiguration and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.tooManyGlobalAdminsAssignedToTenantAlertConfiguration');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TooManyGlobalAdminsAssignedToTenantAlertConfiguration
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TooManyGlobalAdminsAssignedToTenantAlertConfiguration {
        return new TooManyGlobalAdminsAssignedToTenantAlertConfiguration();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'globalAdminCountThreshold' => fn(ParseNode $n) => $o->setGlobalAdminCountThreshold($n->getIntegerValue()),
            'percentageOfGlobalAdminsOutOfRolesThreshold' => fn(ParseNode $n) => $o->setPercentageOfGlobalAdminsOutOfRolesThreshold($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the globalAdminCountThreshold property value. The threshold for the number of accounts assigned the Global Administrator role in the tenant. Triggers an alert if the number of global administrators in the tenant reaches or crosses this threshold value.
     * @return int|null
    */
    public function getGlobalAdminCountThreshold(): ?int {
        $val = $this->getBackingStore()->get('globalAdminCountThreshold');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'globalAdminCountThreshold'");
    }

    /**
     * Gets the percentageOfGlobalAdminsOutOfRolesThreshold property value. Threshold of the percentage of global administrators out of all the role assignments in the tenant. Triggers an alert if the percentage in the tenant reaches or crosses this threshold value.
     * @return int|null
    */
    public function getPercentageOfGlobalAdminsOutOfRolesThreshold(): ?int {
        $val = $this->getBackingStore()->get('percentageOfGlobalAdminsOutOfRolesThreshold');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'percentageOfGlobalAdminsOutOfRolesThreshold'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('globalAdminCountThreshold', $this->getGlobalAdminCountThreshold());
        $writer->writeIntegerValue('percentageOfGlobalAdminsOutOfRolesThreshold', $this->getPercentageOfGlobalAdminsOutOfRolesThreshold());
    }

    /**
     * Sets the globalAdminCountThreshold property value. The threshold for the number of accounts assigned the Global Administrator role in the tenant. Triggers an alert if the number of global administrators in the tenant reaches or crosses this threshold value.
     * @param int|null $value Value to set for the globalAdminCountThreshold property.
    */
    public function setGlobalAdminCountThreshold(?int $value): void {
        $this->getBackingStore()->set('globalAdminCountThreshold', $value);
    }

    /**
     * Sets the percentageOfGlobalAdminsOutOfRolesThreshold property value. Threshold of the percentage of global administrators out of all the role assignments in the tenant. Triggers an alert if the percentage in the tenant reaches or crosses this threshold value.
     * @param int|null $value Value to set for the percentageOfGlobalAdminsOutOfRolesThreshold property.
    */
    public function setPercentageOfGlobalAdminsOutOfRolesThreshold(?int $value): void {
        $this->getBackingStore()->set('percentageOfGlobalAdminsOutOfRolesThreshold', $value);
    }

}
