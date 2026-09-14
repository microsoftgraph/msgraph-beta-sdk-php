<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class GroupAnalytics extends Entity implements Parsable 
{
    /**
     * Instantiates a new GroupAnalytics and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupAnalytics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupAnalytics {
        return new GroupAnalytics();
    }

    /**
     * Gets the assignedRoleCount property value. The number of directory roles assigned to the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getAssignedRoleCount(): ?int {
        $val = $this->getBackingStore()->get('assignedRoleCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'assignedRoleCount'");
    }

    /**
     * Gets the calculatedDateTime property value. The date and time when the analytics for the group were last calculated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return DateTime|null
    */
    public function getCalculatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('calculatedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'calculatedDateTime'");
    }

    /**
     * Gets the createdDateTime property value. The date and time when the group was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the directGroupMemberCount property value. The number of direct members of the group that are themselves groups. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getDirectGroupMemberCount(): ?int {
        $val = $this->getBackingStore()->get('directGroupMemberCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directGroupMemberCount'");
    }

    /**
     * Gets the displayName property value. The display name of the group. Supports $filter (eq, ne, startsWith, endsWith, contains) and $orderby.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * Gets the dynamicMembershipType property value. The dynamic membership classification of the group, derived from its membership rule. Supports $filter (eq, ne, startsWith, endsWith, contains) and $orderby.
     * @return string|null
    */
    public function getDynamicMembershipType(): ?string {
        $val = $this->getBackingStore()->get('dynamicMembershipType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dynamicMembershipType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignedRoleCount' => fn(ParseNode $n) => $o->setAssignedRoleCount($n->getIntegerValue()),
            'calculatedDateTime' => fn(ParseNode $n) => $o->setCalculatedDateTime($n->getDateTimeValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'directGroupMemberCount' => fn(ParseNode $n) => $o->setDirectGroupMemberCount($n->getIntegerValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'dynamicMembershipType' => fn(ParseNode $n) => $o->setDynamicMembershipType($n->getStringValue()),
            'groupExpirationDateTime' => fn(ParseNode $n) => $o->setGroupExpirationDateTime($n->getDateTimeValue()),
            'groupType' => fn(ParseNode $n) => $o->setGroupType($n->getEnumValue(GroupTypeEnum::class)),
            'guestOwnerCount' => fn(ParseNode $n) => $o->setGuestOwnerCount($n->getIntegerValue()),
            'guestTransitiveUserCount' => fn(ParseNode $n) => $o->setGuestTransitiveUserCount($n->getIntegerValue()),
            'isCloudDistributionListGroup' => fn(ParseNode $n) => $o->setIsCloudDistributionListGroup($n->getBooleanValue()),
            'isCloudM365Group' => fn(ParseNode $n) => $o->setIsCloudM365Group($n->getBooleanValue()),
            'isCloudMailEnabledSecurityGroup' => fn(ParseNode $n) => $o->setIsCloudMailEnabledSecurityGroup($n->getBooleanValue()),
            'isCloudSecurityGroup' => fn(ParseNode $n) => $o->setIsCloudSecurityGroup($n->getBooleanValue()),
            'isDynamicGroup' => fn(ParseNode $n) => $o->setIsDynamicGroup($n->getBooleanValue()),
            'isOnPremiseDistributionListGroup' => fn(ParseNode $n) => $o->setIsOnPremiseDistributionListGroup($n->getBooleanValue()),
            'isOnPremiseMailEnabledSecurityGroup' => fn(ParseNode $n) => $o->setIsOnPremiseMailEnabledSecurityGroup($n->getBooleanValue()),
            'isOnPremiseSecurityGroup' => fn(ParseNode $n) => $o->setIsOnPremiseSecurityGroup($n->getBooleanValue()),
            'isValidGroup' => fn(ParseNode $n) => $o->setIsValidGroup($n->getBooleanValue()),
            'lastRestorationDateTime' => fn(ParseNode $n) => $o->setLastRestorationDateTime($n->getDateTimeValue()),
            'memberOwnerCount' => fn(ParseNode $n) => $o->setMemberOwnerCount($n->getIntegerValue()),
            'membershipRuleContainsCount' => fn(ParseNode $n) => $o->setMembershipRuleContainsCount($n->getIntegerValue()),
            'membershipRuleExpressionCount' => fn(ParseNode $n) => $o->setMembershipRuleExpressionCount($n->getIntegerValue()),
            'membershipRuleMatchCount' => fn(ParseNode $n) => $o->setMembershipRuleMatchCount($n->getIntegerValue()),
            'membershipRuleMemberOfCount' => fn(ParseNode $n) => $o->setMembershipRuleMemberOfCount($n->getIntegerValue()),
            'membershipRuleProcessingState' => fn(ParseNode $n) => $o->setMembershipRuleProcessingState($n->getStringValue()),
            'memberTransitiveUserCount' => fn(ParseNode $n) => $o->setMemberTransitiveUserCount($n->getIntegerValue()),
            'preferredDataLocation' => fn(ParseNode $n) => $o->setPreferredDataLocation($n->getStringValue()),
            'sensitivityLabelCount' => fn(ParseNode $n) => $o->setSensitivityLabelCount($n->getIntegerValue()),
            'servicePrincipalOwnerCount' => fn(ParseNode $n) => $o->setServicePrincipalOwnerCount($n->getIntegerValue()),
            'softDeletionDateTime' => fn(ParseNode $n) => $o->setSoftDeletionDateTime($n->getDateTimeValue()),
            'tenantId' => fn(ParseNode $n) => $o->setTenantId($n->getStringValue()),
            'transitiveServicePrincipalCount' => fn(ParseNode $n) => $o->setTransitiveServicePrincipalCount($n->getIntegerValue()),
            'transitiveUserCount' => fn(ParseNode $n) => $o->setTransitiveUserCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the groupExpirationDateTime property value. The date and time when the group expires. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return DateTime|null
    */
    public function getGroupExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('groupExpirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupExpirationDateTime'");
    }

    /**
     * Gets the groupType property value. The groupType property
     * @return GroupTypeEnum|null
    */
    public function getGroupType(): ?GroupTypeEnum {
        $val = $this->getBackingStore()->get('groupType');
        if (is_null($val) || $val instanceof GroupTypeEnum) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupType'");
    }

    /**
     * Gets the guestOwnerCount property value. The number of owners of the group that are guest users. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getGuestOwnerCount(): ?int {
        $val = $this->getBackingStore()->get('guestOwnerCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'guestOwnerCount'");
    }

    /**
     * Gets the guestTransitiveUserCount property value. The number of transitive user members of the group that are guest users. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getGuestTransitiveUserCount(): ?int {
        $val = $this->getBackingStore()->get('guestTransitiveUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'guestTransitiveUserCount'");
    }

    /**
     * Gets the isCloudDistributionListGroup property value. Indicates whether the group is a non-soft-deleted cloud distribution list group. Supports $filter (eq, ne) and $orderby.
     * @return bool|null
    */
    public function getIsCloudDistributionListGroup(): ?bool {
        $val = $this->getBackingStore()->get('isCloudDistributionListGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCloudDistributionListGroup'");
    }

    /**
     * Gets the isCloudM365Group property value. Indicates whether the group is a non-soft-deleted cloud Microsoft 365 group. Supports $filter (eq, ne) and $orderby.
     * @return bool|null
    */
    public function getIsCloudM365Group(): ?bool {
        $val = $this->getBackingStore()->get('isCloudM365Group');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCloudM365Group'");
    }

    /**
     * Gets the isCloudMailEnabledSecurityGroup property value. Indicates whether the group is a non-soft-deleted cloud mail-enabled security group. Supports $filter (eq, ne) and $orderby.
     * @return bool|null
    */
    public function getIsCloudMailEnabledSecurityGroup(): ?bool {
        $val = $this->getBackingStore()->get('isCloudMailEnabledSecurityGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCloudMailEnabledSecurityGroup'");
    }

    /**
     * Gets the isCloudSecurityGroup property value. Indicates whether the group is a non-soft-deleted cloud security group. Supports $filter (eq, ne) and $orderby.
     * @return bool|null
    */
    public function getIsCloudSecurityGroup(): ?bool {
        $val = $this->getBackingStore()->get('isCloudSecurityGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCloudSecurityGroup'");
    }

    /**
     * Gets the isDynamicGroup property value. Indicates whether the group is a dynamic group. Supports $filter (eq, ne) and $orderby.
     * @return bool|null
    */
    public function getIsDynamicGroup(): ?bool {
        $val = $this->getBackingStore()->get('isDynamicGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isDynamicGroup'");
    }

    /**
     * Gets the isOnPremiseDistributionListGroup property value. Indicates whether the group is a non-soft-deleted on-premises distribution list group. Supports $filter (eq, ne) and $orderby.
     * @return bool|null
    */
    public function getIsOnPremiseDistributionListGroup(): ?bool {
        $val = $this->getBackingStore()->get('isOnPremiseDistributionListGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOnPremiseDistributionListGroup'");
    }

    /**
     * Gets the isOnPremiseMailEnabledSecurityGroup property value. Indicates whether the group is a non-soft-deleted on-premises mail-enabled security group. Supports $filter (eq, ne) and $orderby.
     * @return bool|null
    */
    public function getIsOnPremiseMailEnabledSecurityGroup(): ?bool {
        $val = $this->getBackingStore()->get('isOnPremiseMailEnabledSecurityGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOnPremiseMailEnabledSecurityGroup'");
    }

    /**
     * Gets the isOnPremiseSecurityGroup property value. Indicates whether the group is a non-soft-deleted on-premises security group. Supports $filter (eq, ne) and $orderby.
     * @return bool|null
    */
    public function getIsOnPremiseSecurityGroup(): ?bool {
        $val = $this->getBackingStore()->get('isOnPremiseSecurityGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isOnPremiseSecurityGroup'");
    }

    /**
     * Gets the isValidGroup property value. Indicates whether the group is a valid (non-soft-deleted) group. Supports $filter (eq, ne) and $orderby.
     * @return bool|null
    */
    public function getIsValidGroup(): ?bool {
        $val = $this->getBackingStore()->get('isValidGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isValidGroup'");
    }

    /**
     * Gets the lastRestorationDateTime property value. The date and time when the group was last restored from a soft-deleted state. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return DateTime|null
    */
    public function getLastRestorationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastRestorationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastRestorationDateTime'");
    }

    /**
     * Gets the memberOwnerCount property value. The number of owners of the group that are member (non-guest) users. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getMemberOwnerCount(): ?int {
        $val = $this->getBackingStore()->get('memberOwnerCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberOwnerCount'");
    }

    /**
     * Gets the membershipRuleContainsCount property value. The number of contains expressions in the membership rule of the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getMembershipRuleContainsCount(): ?int {
        $val = $this->getBackingStore()->get('membershipRuleContainsCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipRuleContainsCount'");
    }

    /**
     * Gets the membershipRuleExpressionCount property value. The number of expressions in the membership rule of the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getMembershipRuleExpressionCount(): ?int {
        $val = $this->getBackingStore()->get('membershipRuleExpressionCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipRuleExpressionCount'");
    }

    /**
     * Gets the membershipRuleMatchCount property value. The number of match expressions in the membership rule of the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getMembershipRuleMatchCount(): ?int {
        $val = $this->getBackingStore()->get('membershipRuleMatchCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipRuleMatchCount'");
    }

    /**
     * Gets the membershipRuleMemberOfCount property value. The number of memberOf expressions in the membership rule of the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getMembershipRuleMemberOfCount(): ?int {
        $val = $this->getBackingStore()->get('membershipRuleMemberOfCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipRuleMemberOfCount'");
    }

    /**
     * Gets the membershipRuleProcessingState property value. The processing state of the membership rule of the group. Supports $filter (eq, ne, startsWith, endsWith, contains) and $orderby.
     * @return string|null
    */
    public function getMembershipRuleProcessingState(): ?string {
        $val = $this->getBackingStore()->get('membershipRuleProcessingState');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'membershipRuleProcessingState'");
    }

    /**
     * Gets the memberTransitiveUserCount property value. The number of transitive user members of the group that are member (non-guest) users. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getMemberTransitiveUserCount(): ?int {
        $val = $this->getBackingStore()->get('memberTransitiveUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberTransitiveUserCount'");
    }

    /**
     * Gets the preferredDataLocation property value. The preferred data location of the group. Supports $filter (eq, ne, startsWith, endsWith, contains) and $orderby.
     * @return string|null
    */
    public function getPreferredDataLocation(): ?string {
        $val = $this->getBackingStore()->get('preferredDataLocation');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preferredDataLocation'");
    }

    /**
     * Gets the sensitivityLabelCount property value. The number of sensitivity labels applied to the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getSensitivityLabelCount(): ?int {
        $val = $this->getBackingStore()->get('sensitivityLabelCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabelCount'");
    }

    /**
     * Gets the servicePrincipalOwnerCount property value. The number of owners of the group that are service principals. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getServicePrincipalOwnerCount(): ?int {
        $val = $this->getBackingStore()->get('servicePrincipalOwnerCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'servicePrincipalOwnerCount'");
    }

    /**
     * Gets the softDeletionDateTime property value. The date and time when the group was soft-deleted. If this property is empty, the group isn't soft-deleted. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return DateTime|null
    */
    public function getSoftDeletionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('softDeletionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'softDeletionDateTime'");
    }

    /**
     * Gets the tenantId property value. The unique identifier of the tenant that the group belongs to. Supports $filter (eq, ne) and $orderby.
     * @return string|null
    */
    public function getTenantId(): ?string {
        $val = $this->getBackingStore()->get('tenantId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tenantId'");
    }

    /**
     * Gets the transitiveServicePrincipalCount property value. The number of transitive members of the group that are service principals. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getTransitiveServicePrincipalCount(): ?int {
        $val = $this->getBackingStore()->get('transitiveServicePrincipalCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transitiveServicePrincipalCount'");
    }

    /**
     * Gets the transitiveUserCount property value. The total number of transitive user members of the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @return int|null
    */
    public function getTransitiveUserCount(): ?int {
        $val = $this->getBackingStore()->get('transitiveUserCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'transitiveUserCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('assignedRoleCount', $this->getAssignedRoleCount());
        $writer->writeDateTimeValue('calculatedDateTime', $this->getCalculatedDateTime());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeIntegerValue('directGroupMemberCount', $this->getDirectGroupMemberCount());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('dynamicMembershipType', $this->getDynamicMembershipType());
        $writer->writeDateTimeValue('groupExpirationDateTime', $this->getGroupExpirationDateTime());
        $writer->writeEnumValue('groupType', $this->getGroupType());
        $writer->writeIntegerValue('guestOwnerCount', $this->getGuestOwnerCount());
        $writer->writeIntegerValue('guestTransitiveUserCount', $this->getGuestTransitiveUserCount());
        $writer->writeBooleanValue('isCloudDistributionListGroup', $this->getIsCloudDistributionListGroup());
        $writer->writeBooleanValue('isCloudM365Group', $this->getIsCloudM365Group());
        $writer->writeBooleanValue('isCloudMailEnabledSecurityGroup', $this->getIsCloudMailEnabledSecurityGroup());
        $writer->writeBooleanValue('isCloudSecurityGroup', $this->getIsCloudSecurityGroup());
        $writer->writeBooleanValue('isDynamicGroup', $this->getIsDynamicGroup());
        $writer->writeBooleanValue('isOnPremiseDistributionListGroup', $this->getIsOnPremiseDistributionListGroup());
        $writer->writeBooleanValue('isOnPremiseMailEnabledSecurityGroup', $this->getIsOnPremiseMailEnabledSecurityGroup());
        $writer->writeBooleanValue('isOnPremiseSecurityGroup', $this->getIsOnPremiseSecurityGroup());
        $writer->writeBooleanValue('isValidGroup', $this->getIsValidGroup());
        $writer->writeDateTimeValue('lastRestorationDateTime', $this->getLastRestorationDateTime());
        $writer->writeIntegerValue('memberOwnerCount', $this->getMemberOwnerCount());
        $writer->writeIntegerValue('membershipRuleContainsCount', $this->getMembershipRuleContainsCount());
        $writer->writeIntegerValue('membershipRuleExpressionCount', $this->getMembershipRuleExpressionCount());
        $writer->writeIntegerValue('membershipRuleMatchCount', $this->getMembershipRuleMatchCount());
        $writer->writeIntegerValue('membershipRuleMemberOfCount', $this->getMembershipRuleMemberOfCount());
        $writer->writeStringValue('membershipRuleProcessingState', $this->getMembershipRuleProcessingState());
        $writer->writeIntegerValue('memberTransitiveUserCount', $this->getMemberTransitiveUserCount());
        $writer->writeStringValue('preferredDataLocation', $this->getPreferredDataLocation());
        $writer->writeIntegerValue('sensitivityLabelCount', $this->getSensitivityLabelCount());
        $writer->writeIntegerValue('servicePrincipalOwnerCount', $this->getServicePrincipalOwnerCount());
        $writer->writeDateTimeValue('softDeletionDateTime', $this->getSoftDeletionDateTime());
        $writer->writeStringValue('tenantId', $this->getTenantId());
        $writer->writeIntegerValue('transitiveServicePrincipalCount', $this->getTransitiveServicePrincipalCount());
        $writer->writeIntegerValue('transitiveUserCount', $this->getTransitiveUserCount());
    }

    /**
     * Sets the assignedRoleCount property value. The number of directory roles assigned to the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the assignedRoleCount property.
    */
    public function setAssignedRoleCount(?int $value): void {
        $this->getBackingStore()->set('assignedRoleCount', $value);
    }

    /**
     * Sets the calculatedDateTime property value. The date and time when the analytics for the group were last calculated. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param DateTime|null $value Value to set for the calculatedDateTime property.
    */
    public function setCalculatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('calculatedDateTime', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time when the group was created. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the directGroupMemberCount property value. The number of direct members of the group that are themselves groups. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the directGroupMemberCount property.
    */
    public function setDirectGroupMemberCount(?int $value): void {
        $this->getBackingStore()->set('directGroupMemberCount', $value);
    }

    /**
     * Sets the displayName property value. The display name of the group. Supports $filter (eq, ne, startsWith, endsWith, contains) and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the dynamicMembershipType property value. The dynamic membership classification of the group, derived from its membership rule. Supports $filter (eq, ne, startsWith, endsWith, contains) and $orderby.
     * @param string|null $value Value to set for the dynamicMembershipType property.
    */
    public function setDynamicMembershipType(?string $value): void {
        $this->getBackingStore()->set('dynamicMembershipType', $value);
    }

    /**
     * Sets the groupExpirationDateTime property value. The date and time when the group expires. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param DateTime|null $value Value to set for the groupExpirationDateTime property.
    */
    public function setGroupExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('groupExpirationDateTime', $value);
    }

    /**
     * Sets the groupType property value. The groupType property
     * @param GroupTypeEnum|null $value Value to set for the groupType property.
    */
    public function setGroupType(?GroupTypeEnum $value): void {
        $this->getBackingStore()->set('groupType', $value);
    }

    /**
     * Sets the guestOwnerCount property value. The number of owners of the group that are guest users. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the guestOwnerCount property.
    */
    public function setGuestOwnerCount(?int $value): void {
        $this->getBackingStore()->set('guestOwnerCount', $value);
    }

    /**
     * Sets the guestTransitiveUserCount property value. The number of transitive user members of the group that are guest users. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the guestTransitiveUserCount property.
    */
    public function setGuestTransitiveUserCount(?int $value): void {
        $this->getBackingStore()->set('guestTransitiveUserCount', $value);
    }

    /**
     * Sets the isCloudDistributionListGroup property value. Indicates whether the group is a non-soft-deleted cloud distribution list group. Supports $filter (eq, ne) and $orderby.
     * @param bool|null $value Value to set for the isCloudDistributionListGroup property.
    */
    public function setIsCloudDistributionListGroup(?bool $value): void {
        $this->getBackingStore()->set('isCloudDistributionListGroup', $value);
    }

    /**
     * Sets the isCloudM365Group property value. Indicates whether the group is a non-soft-deleted cloud Microsoft 365 group. Supports $filter (eq, ne) and $orderby.
     * @param bool|null $value Value to set for the isCloudM365Group property.
    */
    public function setIsCloudM365Group(?bool $value): void {
        $this->getBackingStore()->set('isCloudM365Group', $value);
    }

    /**
     * Sets the isCloudMailEnabledSecurityGroup property value. Indicates whether the group is a non-soft-deleted cloud mail-enabled security group. Supports $filter (eq, ne) and $orderby.
     * @param bool|null $value Value to set for the isCloudMailEnabledSecurityGroup property.
    */
    public function setIsCloudMailEnabledSecurityGroup(?bool $value): void {
        $this->getBackingStore()->set('isCloudMailEnabledSecurityGroup', $value);
    }

    /**
     * Sets the isCloudSecurityGroup property value. Indicates whether the group is a non-soft-deleted cloud security group. Supports $filter (eq, ne) and $orderby.
     * @param bool|null $value Value to set for the isCloudSecurityGroup property.
    */
    public function setIsCloudSecurityGroup(?bool $value): void {
        $this->getBackingStore()->set('isCloudSecurityGroup', $value);
    }

    /**
     * Sets the isDynamicGroup property value. Indicates whether the group is a dynamic group. Supports $filter (eq, ne) and $orderby.
     * @param bool|null $value Value to set for the isDynamicGroup property.
    */
    public function setIsDynamicGroup(?bool $value): void {
        $this->getBackingStore()->set('isDynamicGroup', $value);
    }

    /**
     * Sets the isOnPremiseDistributionListGroup property value. Indicates whether the group is a non-soft-deleted on-premises distribution list group. Supports $filter (eq, ne) and $orderby.
     * @param bool|null $value Value to set for the isOnPremiseDistributionListGroup property.
    */
    public function setIsOnPremiseDistributionListGroup(?bool $value): void {
        $this->getBackingStore()->set('isOnPremiseDistributionListGroup', $value);
    }

    /**
     * Sets the isOnPremiseMailEnabledSecurityGroup property value. Indicates whether the group is a non-soft-deleted on-premises mail-enabled security group. Supports $filter (eq, ne) and $orderby.
     * @param bool|null $value Value to set for the isOnPremiseMailEnabledSecurityGroup property.
    */
    public function setIsOnPremiseMailEnabledSecurityGroup(?bool $value): void {
        $this->getBackingStore()->set('isOnPremiseMailEnabledSecurityGroup', $value);
    }

    /**
     * Sets the isOnPremiseSecurityGroup property value. Indicates whether the group is a non-soft-deleted on-premises security group. Supports $filter (eq, ne) and $orderby.
     * @param bool|null $value Value to set for the isOnPremiseSecurityGroup property.
    */
    public function setIsOnPremiseSecurityGroup(?bool $value): void {
        $this->getBackingStore()->set('isOnPremiseSecurityGroup', $value);
    }

    /**
     * Sets the isValidGroup property value. Indicates whether the group is a valid (non-soft-deleted) group. Supports $filter (eq, ne) and $orderby.
     * @param bool|null $value Value to set for the isValidGroup property.
    */
    public function setIsValidGroup(?bool $value): void {
        $this->getBackingStore()->set('isValidGroup', $value);
    }

    /**
     * Sets the lastRestorationDateTime property value. The date and time when the group was last restored from a soft-deleted state. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param DateTime|null $value Value to set for the lastRestorationDateTime property.
    */
    public function setLastRestorationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastRestorationDateTime', $value);
    }

    /**
     * Sets the memberOwnerCount property value. The number of owners of the group that are member (non-guest) users. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the memberOwnerCount property.
    */
    public function setMemberOwnerCount(?int $value): void {
        $this->getBackingStore()->set('memberOwnerCount', $value);
    }

    /**
     * Sets the membershipRuleContainsCount property value. The number of contains expressions in the membership rule of the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the membershipRuleContainsCount property.
    */
    public function setMembershipRuleContainsCount(?int $value): void {
        $this->getBackingStore()->set('membershipRuleContainsCount', $value);
    }

    /**
     * Sets the membershipRuleExpressionCount property value. The number of expressions in the membership rule of the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the membershipRuleExpressionCount property.
    */
    public function setMembershipRuleExpressionCount(?int $value): void {
        $this->getBackingStore()->set('membershipRuleExpressionCount', $value);
    }

    /**
     * Sets the membershipRuleMatchCount property value. The number of match expressions in the membership rule of the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the membershipRuleMatchCount property.
    */
    public function setMembershipRuleMatchCount(?int $value): void {
        $this->getBackingStore()->set('membershipRuleMatchCount', $value);
    }

    /**
     * Sets the membershipRuleMemberOfCount property value. The number of memberOf expressions in the membership rule of the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the membershipRuleMemberOfCount property.
    */
    public function setMembershipRuleMemberOfCount(?int $value): void {
        $this->getBackingStore()->set('membershipRuleMemberOfCount', $value);
    }

    /**
     * Sets the membershipRuleProcessingState property value. The processing state of the membership rule of the group. Supports $filter (eq, ne, startsWith, endsWith, contains) and $orderby.
     * @param string|null $value Value to set for the membershipRuleProcessingState property.
    */
    public function setMembershipRuleProcessingState(?string $value): void {
        $this->getBackingStore()->set('membershipRuleProcessingState', $value);
    }

    /**
     * Sets the memberTransitiveUserCount property value. The number of transitive user members of the group that are member (non-guest) users. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the memberTransitiveUserCount property.
    */
    public function setMemberTransitiveUserCount(?int $value): void {
        $this->getBackingStore()->set('memberTransitiveUserCount', $value);
    }

    /**
     * Sets the preferredDataLocation property value. The preferred data location of the group. Supports $filter (eq, ne, startsWith, endsWith, contains) and $orderby.
     * @param string|null $value Value to set for the preferredDataLocation property.
    */
    public function setPreferredDataLocation(?string $value): void {
        $this->getBackingStore()->set('preferredDataLocation', $value);
    }

    /**
     * Sets the sensitivityLabelCount property value. The number of sensitivity labels applied to the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the sensitivityLabelCount property.
    */
    public function setSensitivityLabelCount(?int $value): void {
        $this->getBackingStore()->set('sensitivityLabelCount', $value);
    }

    /**
     * Sets the servicePrincipalOwnerCount property value. The number of owners of the group that are service principals. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the servicePrincipalOwnerCount property.
    */
    public function setServicePrincipalOwnerCount(?int $value): void {
        $this->getBackingStore()->set('servicePrincipalOwnerCount', $value);
    }

    /**
     * Sets the softDeletionDateTime property value. The date and time when the group was soft-deleted. If this property is empty, the group isn't soft-deleted. The timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param DateTime|null $value Value to set for the softDeletionDateTime property.
    */
    public function setSoftDeletionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('softDeletionDateTime', $value);
    }

    /**
     * Sets the tenantId property value. The unique identifier of the tenant that the group belongs to. Supports $filter (eq, ne) and $orderby.
     * @param string|null $value Value to set for the tenantId property.
    */
    public function setTenantId(?string $value): void {
        $this->getBackingStore()->set('tenantId', $value);
    }

    /**
     * Sets the transitiveServicePrincipalCount property value. The number of transitive members of the group that are service principals. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the transitiveServicePrincipalCount property.
    */
    public function setTransitiveServicePrincipalCount(?int $value): void {
        $this->getBackingStore()->set('transitiveServicePrincipalCount', $value);
    }

    /**
     * Sets the transitiveUserCount property value. The total number of transitive user members of the group. Supports $filter (eq, ne, gt, ge, lt, le) and $orderby.
     * @param int|null $value Value to set for the transitiveUserCount property.
    */
    public function setTransitiveUserCount(?int $value): void {
        $this->getBackingStore()->set('transitiveUserCount', $value);
    }

}
