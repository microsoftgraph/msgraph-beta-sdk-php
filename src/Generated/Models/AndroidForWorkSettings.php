<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Settings for Android For Work.
*/
class AndroidForWorkSettings extends Entity implements Parsable 
{
    /**
     * Instantiates a new AndroidForWorkSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AndroidForWorkSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AndroidForWorkSettings {
        return new AndroidForWorkSettings();
    }

    /**
     * Gets the bindStatus property value. Bind status of the tenant with the Google EMM API
     * @return AndroidForWorkBindStatus|null
    */
    public function getBindStatus(): ?AndroidForWorkBindStatus {
        $val = $this->getBackingStore()->get('bindStatus');
        if (is_null($val) || $val instanceof AndroidForWorkBindStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bindStatus'");
    }

    /**
     * Gets the deviceOwnerManagementEnabled property value. Indicates if this account is flighting for Android Device Owner Management with CloudDPC.
     * @return bool|null
    */
    public function getDeviceOwnerManagementEnabled(): ?bool {
        $val = $this->getBackingStore()->get('deviceOwnerManagementEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceOwnerManagementEnabled'");
    }

    /**
     * Gets the enrollmentTarget property value. Android for Work device management targeting type for the account
     * @return AndroidForWorkEnrollmentTarget|null
    */
    public function getEnrollmentTarget(): ?AndroidForWorkEnrollmentTarget {
        $val = $this->getBackingStore()->get('enrollmentTarget');
        if (is_null($val) || $val instanceof AndroidForWorkEnrollmentTarget) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enrollmentTarget'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bindStatus' => fn(ParseNode $n) => $o->setBindStatus($n->getEnumValue(AndroidForWorkBindStatus::class)),
            'deviceOwnerManagementEnabled' => fn(ParseNode $n) => $o->setDeviceOwnerManagementEnabled($n->getBooleanValue()),
            'enrollmentTarget' => fn(ParseNode $n) => $o->setEnrollmentTarget($n->getEnumValue(AndroidForWorkEnrollmentTarget::class)),
            'lastAppSyncDateTime' => fn(ParseNode $n) => $o->setLastAppSyncDateTime($n->getDateTimeValue()),
            'lastAppSyncStatus' => fn(ParseNode $n) => $o->setLastAppSyncStatus($n->getEnumValue(AndroidForWorkSyncStatus::class)),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'ownerOrganizationName' => fn(ParseNode $n) => $o->setOwnerOrganizationName($n->getStringValue()),
            'ownerUserPrincipalName' => fn(ParseNode $n) => $o->setOwnerUserPrincipalName($n->getStringValue()),
            'targetGroupIds' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setTargetGroupIds($val);
            },
        ]);
    }

    /**
     * Gets the lastAppSyncDateTime property value. Last completion time for app sync
     * @return DateTime|null
    */
    public function getLastAppSyncDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastAppSyncDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastAppSyncDateTime'");
    }

    /**
     * Gets the lastAppSyncStatus property value. Sync status of the tenant with the Google EMM API
     * @return AndroidForWorkSyncStatus|null
    */
    public function getLastAppSyncStatus(): ?AndroidForWorkSyncStatus {
        $val = $this->getBackingStore()->get('lastAppSyncStatus');
        if (is_null($val) || $val instanceof AndroidForWorkSyncStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastAppSyncStatus'");
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modification time for Android for Work settings
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
    }

    /**
     * Gets the ownerOrganizationName property value. Organization name used when onboarding Android for Work
     * @return string|null
    */
    public function getOwnerOrganizationName(): ?string {
        $val = $this->getBackingStore()->get('ownerOrganizationName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerOrganizationName'");
    }

    /**
     * Gets the ownerUserPrincipalName property value. Owner UPN that created the enterprise
     * @return string|null
    */
    public function getOwnerUserPrincipalName(): ?string {
        $val = $this->getBackingStore()->get('ownerUserPrincipalName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ownerUserPrincipalName'");
    }

    /**
     * Gets the targetGroupIds property value. Specifies which AAD groups can enroll devices in Android for Work device management if enrollmentTarget is set to 'Targeted'
     * @return array<string>|null
    */
    public function getTargetGroupIds(): ?array {
        $val = $this->getBackingStore()->get('targetGroupIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetGroupIds'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('bindStatus', $this->getBindStatus());
        $writer->writeBooleanValue('deviceOwnerManagementEnabled', $this->getDeviceOwnerManagementEnabled());
        $writer->writeEnumValue('enrollmentTarget', $this->getEnrollmentTarget());
        $writer->writeDateTimeValue('lastAppSyncDateTime', $this->getLastAppSyncDateTime());
        $writer->writeEnumValue('lastAppSyncStatus', $this->getLastAppSyncStatus());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('ownerOrganizationName', $this->getOwnerOrganizationName());
        $writer->writeStringValue('ownerUserPrincipalName', $this->getOwnerUserPrincipalName());
        $writer->writeCollectionOfPrimitiveValues('targetGroupIds', $this->getTargetGroupIds());
    }

    /**
     * Sets the bindStatus property value. Bind status of the tenant with the Google EMM API
     * @param AndroidForWorkBindStatus|null $value Value to set for the bindStatus property.
    */
    public function setBindStatus(?AndroidForWorkBindStatus $value): void {
        $this->getBackingStore()->set('bindStatus', $value);
    }

    /**
     * Sets the deviceOwnerManagementEnabled property value. Indicates if this account is flighting for Android Device Owner Management with CloudDPC.
     * @param bool|null $value Value to set for the deviceOwnerManagementEnabled property.
    */
    public function setDeviceOwnerManagementEnabled(?bool $value): void {
        $this->getBackingStore()->set('deviceOwnerManagementEnabled', $value);
    }

    /**
     * Sets the enrollmentTarget property value. Android for Work device management targeting type for the account
     * @param AndroidForWorkEnrollmentTarget|null $value Value to set for the enrollmentTarget property.
    */
    public function setEnrollmentTarget(?AndroidForWorkEnrollmentTarget $value): void {
        $this->getBackingStore()->set('enrollmentTarget', $value);
    }

    /**
     * Sets the lastAppSyncDateTime property value. Last completion time for app sync
     * @param DateTime|null $value Value to set for the lastAppSyncDateTime property.
    */
    public function setLastAppSyncDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastAppSyncDateTime', $value);
    }

    /**
     * Sets the lastAppSyncStatus property value. Sync status of the tenant with the Google EMM API
     * @param AndroidForWorkSyncStatus|null $value Value to set for the lastAppSyncStatus property.
    */
    public function setLastAppSyncStatus(?AndroidForWorkSyncStatus $value): void {
        $this->getBackingStore()->set('lastAppSyncStatus', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modification time for Android for Work settings
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the ownerOrganizationName property value. Organization name used when onboarding Android for Work
     * @param string|null $value Value to set for the ownerOrganizationName property.
    */
    public function setOwnerOrganizationName(?string $value): void {
        $this->getBackingStore()->set('ownerOrganizationName', $value);
    }

    /**
     * Sets the ownerUserPrincipalName property value. Owner UPN that created the enterprise
     * @param string|null $value Value to set for the ownerUserPrincipalName property.
    */
    public function setOwnerUserPrincipalName(?string $value): void {
        $this->getBackingStore()->set('ownerUserPrincipalName', $value);
    }

    /**
     * Sets the targetGroupIds property value. Specifies which AAD groups can enroll devices in Android for Work device management if enrollmentTarget is set to 'Targeted'
     * @param array<string>|null $value Value to set for the targetGroupIds property.
    */
    public function setTargetGroupIds(?array $value): void {
        $this->getBackingStore()->set('targetGroupIds', $value);
    }

}
