<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new accessPackageAssignmentPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AccessPackageAssignmentPolicy
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AccessPackageAssignmentPolicy {
        return new AccessPackageAssignmentPolicy();
    }

    /**
     * Gets the accessPackage property value. The access package with this policy. Read-only. Nullable. Supports $expand.
     * @return AccessPackage|null
    */
    public function getAccessPackage(): ?AccessPackage {
        return $this->getBackingStore()->get('accessPackage');
    }

    /**
     * Gets the accessPackageCatalog property value. The accessPackageCatalog property
     * @return AccessPackageCatalog|null
    */
    public function getAccessPackageCatalog(): ?AccessPackageCatalog {
        return $this->getBackingStore()->get('accessPackageCatalog');
    }

    /**
     * Gets the accessPackageId property value. Identifier of the access package.
     * @return string|null
    */
    public function getAccessPackageId(): ?string {
        return $this->getBackingStore()->get('accessPackageId');
    }

    /**
     * Gets the accessReviewSettings property value. Who must review, and how often, the assignments to the access package from this policy. This property is null if reviews are not required.
     * @return AssignmentReviewSettings|null
    */
    public function getAccessReviewSettings(): ?AssignmentReviewSettings {
        return $this->getBackingStore()->get('accessReviewSettings');
    }

    /**
     * Gets the canExtend property value. Indicates whether a user can extend the access package assignment duration after approval.
     * @return bool|null
    */
    public function getCanExtend(): ?bool {
        return $this->getBackingStore()->get('canExtend');
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the customExtensionHandlers property value. The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     * @return array<CustomExtensionHandler>|null
    */
    public function getCustomExtensionHandlers(): ?array {
        return $this->getBackingStore()->get('customExtensionHandlers');
    }

    /**
     * Gets the description property value. The description of the policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name of the policy. Supports $filter (eq).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * Gets the durationInDays property value. The number of days in which assignments from this policy last until they are expired.
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        return $this->getBackingStore()->get('durationInDays');
    }

    /**
     * Gets the expirationDateTime property value. The expiration date for assignments created in this policy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->getBackingStore()->get('expirationDateTime');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => fn(ParseNode $n) => $o->setAccessPackage($n->getObjectValue([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'accessPackageCatalog' => fn(ParseNode $n) => $o->setAccessPackageCatalog($n->getObjectValue([AccessPackageCatalog::class, 'createFromDiscriminatorValue'])),
            'accessPackageId' => fn(ParseNode $n) => $o->setAccessPackageId($n->getStringValue()),
            'accessReviewSettings' => fn(ParseNode $n) => $o->setAccessReviewSettings($n->getObjectValue([AssignmentReviewSettings::class, 'createFromDiscriminatorValue'])),
            'canExtend' => fn(ParseNode $n) => $o->setCanExtend($n->getBooleanValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customExtensionHandlers' => fn(ParseNode $n) => $o->setCustomExtensionHandlers($n->getCollectionOfObjectValues([CustomExtensionHandler::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'durationInDays' => fn(ParseNode $n) => $o->setDurationInDays($n->getIntegerValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'modifiedBy' => fn(ParseNode $n) => $o->setModifiedBy($n->getStringValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'questions' => fn(ParseNode $n) => $o->setQuestions($n->getCollectionOfObjectValues([AccessPackageQuestion::class, 'createFromDiscriminatorValue'])),
            'requestApprovalSettings' => fn(ParseNode $n) => $o->setRequestApprovalSettings($n->getObjectValue([ApprovalSettings::class, 'createFromDiscriminatorValue'])),
            'requestorSettings' => fn(ParseNode $n) => $o->setRequestorSettings($n->getObjectValue([RequestorSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the modifiedBy property value. The modifiedBy property
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        return $this->getBackingStore()->get('modifiedBy');
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('modifiedDateTime');
    }

    /**
     * Gets the questions property value. Questions that are posed to the  requestor.
     * @return array<AccessPackageQuestion>|null
    */
    public function getQuestions(): ?array {
        return $this->getBackingStore()->get('questions');
    }

    /**
     * Gets the requestApprovalSettings property value. Who must approve requests for access package in this policy.
     * @return ApprovalSettings|null
    */
    public function getRequestApprovalSettings(): ?ApprovalSettings {
        return $this->getBackingStore()->get('requestApprovalSettings');
    }

    /**
     * Gets the requestorSettings property value. Who can request this access package from this policy.
     * @return RequestorSettings|null
    */
    public function getRequestorSettings(): ?RequestorSettings {
        return $this->getBackingStore()->get('requestorSettings');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->getAccessPackage());
        $writer->writeObjectValue('accessPackageCatalog', $this->getAccessPackageCatalog());
        $writer->writeStringValue('accessPackageId', $this->getAccessPackageId());
        $writer->writeObjectValue('accessReviewSettings', $this->getAccessReviewSettings());
        $writer->writeBooleanValue('canExtend', $this->getCanExtend());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('customExtensionHandlers', $this->getCustomExtensionHandlers());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('durationInDays', $this->getDurationInDays());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('modifiedBy', $this->getModifiedBy());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeCollectionOfObjectValues('questions', $this->getQuestions());
        $writer->writeObjectValue('requestApprovalSettings', $this->getRequestApprovalSettings());
        $writer->writeObjectValue('requestorSettings', $this->getRequestorSettings());
    }

    /**
     * Sets the accessPackage property value. The access package with this policy. Read-only. Nullable. Supports $expand.
     *  @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value): void {
        $this->getBackingStore()->set('accessPackage', $value);
    }

    /**
     * Sets the accessPackageCatalog property value. The accessPackageCatalog property
     *  @param AccessPackageCatalog|null $value Value to set for the accessPackageCatalog property.
    */
    public function setAccessPackageCatalog(?AccessPackageCatalog $value): void {
        $this->getBackingStore()->set('accessPackageCatalog', $value);
    }

    /**
     * Sets the accessPackageId property value. Identifier of the access package.
     *  @param string|null $value Value to set for the accessPackageId property.
    */
    public function setAccessPackageId(?string $value): void {
        $this->getBackingStore()->set('accessPackageId', $value);
    }

    /**
     * Sets the accessReviewSettings property value. Who must review, and how often, the assignments to the access package from this policy. This property is null if reviews are not required.
     *  @param AssignmentReviewSettings|null $value Value to set for the accessReviewSettings property.
    */
    public function setAccessReviewSettings(?AssignmentReviewSettings $value): void {
        $this->getBackingStore()->set('accessReviewSettings', $value);
    }

    /**
     * Sets the canExtend property value. Indicates whether a user can extend the access package assignment duration after approval.
     *  @param bool|null $value Value to set for the canExtend property.
    */
    public function setCanExtend(?bool $value): void {
        $this->getBackingStore()->set('canExtend', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customExtensionHandlers property value. The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     *  @param array<CustomExtensionHandler>|null $value Value to set for the customExtensionHandlers property.
    */
    public function setCustomExtensionHandlers(?array $value): void {
        $this->getBackingStore()->set('customExtensionHandlers', $value);
    }

    /**
     * Sets the description property value. The description of the policy.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the policy. Supports $filter (eq).
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the durationInDays property value. The number of days in which assignments from this policy last until they are expired.
     *  @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value): void {
        $this->getBackingStore()->set('durationInDays', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expiration date for assignments created in this policy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the modifiedBy property value. The modifiedBy property
     *  @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value): void {
        $this->getBackingStore()->set('modifiedBy', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the questions property value. Questions that are posed to the  requestor.
     *  @param array<AccessPackageQuestion>|null $value Value to set for the questions property.
    */
    public function setQuestions(?array $value): void {
        $this->getBackingStore()->set('questions', $value);
    }

    /**
     * Sets the requestApprovalSettings property value. Who must approve requests for access package in this policy.
     *  @param ApprovalSettings|null $value Value to set for the requestApprovalSettings property.
    */
    public function setRequestApprovalSettings(?ApprovalSettings $value): void {
        $this->getBackingStore()->set('requestApprovalSettings', $value);
    }

    /**
     * Sets the requestorSettings property value. Who can request this access package from this policy.
     *  @param RequestorSettings|null $value Value to set for the requestorSettings property.
    */
    public function setRequestorSettings(?RequestorSettings $value): void {
        $this->getBackingStore()->set('requestorSettings', $value);
    }

}
