<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AccessPackageAssignmentPolicy extends Entity implements Parsable 
{
    /**
     * Instantiates a new AccessPackageAssignmentPolicy and sets the default values.
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
        $val = $this->getBackingStore()->get('accessPackage');
        if (is_null($val) || $val instanceof AccessPackage) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackage'");
    }

    /**
     * Gets the accessPackageCatalog property value. The accessPackageCatalog property
     * @return AccessPackageCatalog|null
    */
    public function getAccessPackageCatalog(): ?AccessPackageCatalog {
        $val = $this->getBackingStore()->get('accessPackageCatalog');
        if (is_null($val) || $val instanceof AccessPackageCatalog) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageCatalog'");
    }

    /**
     * Gets the accessPackageId property value. Identifier of the access package.
     * @return string|null
    */
    public function getAccessPackageId(): ?string {
        $val = $this->getBackingStore()->get('accessPackageId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageId'");
    }

    /**
     * Gets the accessPackageNotificationSettings property value. The accessPackageNotificationSettings property
     * @return AccessPackageNotificationSettings|null
    */
    public function getAccessPackageNotificationSettings(): ?AccessPackageNotificationSettings {
        $val = $this->getBackingStore()->get('accessPackageNotificationSettings');
        if (is_null($val) || $val instanceof AccessPackageNotificationSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessPackageNotificationSettings'");
    }

    /**
     * Gets the accessReviewSettings property value. Who must review, and how often, the assignments to the access package from this policy. This property is null if reviews aren't required.
     * @return AssignmentReviewSettings|null
    */
    public function getAccessReviewSettings(): ?AssignmentReviewSettings {
        $val = $this->getBackingStore()->get('accessReviewSettings');
        if (is_null($val) || $val instanceof AssignmentReviewSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'accessReviewSettings'");
    }

    /**
     * Gets the canExtend property value. Indicates whether a user can extend the access package assignment duration after approval.
     * @return bool|null
    */
    public function getCanExtend(): ?bool {
        $val = $this->getBackingStore()->get('canExtend');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'canExtend'");
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        $val = $this->getBackingStore()->get('createdBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdBy'");
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
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
     * Gets the customExtensionHandlers property value. The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     * @return array<CustomExtensionHandler>|null
    */
    public function getCustomExtensionHandlers(): ?array {
        $val = $this->getBackingStore()->get('customExtensionHandlers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomExtensionHandler::class);
            /** @var array<CustomExtensionHandler>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionHandlers'");
    }

    /**
     * Gets the customExtensionStageSettings property value. The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     * @return array<CustomExtensionStageSetting>|null
    */
    public function getCustomExtensionStageSettings(): ?array {
        $val = $this->getBackingStore()->get('customExtensionStageSettings');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CustomExtensionStageSetting::class);
            /** @var array<CustomExtensionStageSetting>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customExtensionStageSettings'");
    }

    /**
     * Gets the description property value. The description of the policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The display name of the policy. Supports $filter (eq).
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
     * Gets the durationInDays property value. The number of days in which assignments from this policy last until they're expired.
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        $val = $this->getBackingStore()->get('durationInDays');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'durationInDays'");
    }

    /**
     * Gets the expirationDateTime property value. The expiration date for assignments created in this policy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('expirationDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'expirationDateTime'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => fn(ParseNode $n) => $o->setAccessPackage($n->getObjectValue([AccessPackage::class, 'createFromDiscriminatorValue'])),
            'accessPackageCatalog' => fn(ParseNode $n) => $o->setAccessPackageCatalog($n->getObjectValue([AccessPackageCatalog::class, 'createFromDiscriminatorValue'])),
            'accessPackageId' => fn(ParseNode $n) => $o->setAccessPackageId($n->getStringValue()),
            'accessPackageNotificationSettings' => fn(ParseNode $n) => $o->setAccessPackageNotificationSettings($n->getObjectValue([AccessPackageNotificationSettings::class, 'createFromDiscriminatorValue'])),
            'accessReviewSettings' => fn(ParseNode $n) => $o->setAccessReviewSettings($n->getObjectValue([AssignmentReviewSettings::class, 'createFromDiscriminatorValue'])),
            'canExtend' => fn(ParseNode $n) => $o->setCanExtend($n->getBooleanValue()),
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'customExtensionHandlers' => fn(ParseNode $n) => $o->setCustomExtensionHandlers($n->getCollectionOfObjectValues([CustomExtensionHandler::class, 'createFromDiscriminatorValue'])),
            'customExtensionStageSettings' => fn(ParseNode $n) => $o->setCustomExtensionStageSettings($n->getCollectionOfObjectValues([CustomExtensionStageSetting::class, 'createFromDiscriminatorValue'])),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'durationInDays' => fn(ParseNode $n) => $o->setDurationInDays($n->getIntegerValue()),
            'expirationDateTime' => fn(ParseNode $n) => $o->setExpirationDateTime($n->getDateTimeValue()),
            'modifiedBy' => fn(ParseNode $n) => $o->setModifiedBy($n->getStringValue()),
            'modifiedDateTime' => fn(ParseNode $n) => $o->setModifiedDateTime($n->getDateTimeValue()),
            'questions' => fn(ParseNode $n) => $o->setQuestions($n->getCollectionOfObjectValues([AccessPackageQuestion::class, 'createFromDiscriminatorValue'])),
            'requestApprovalSettings' => fn(ParseNode $n) => $o->setRequestApprovalSettings($n->getObjectValue([ApprovalSettings::class, 'createFromDiscriminatorValue'])),
            'requestorSettings' => fn(ParseNode $n) => $o->setRequestorSettings($n->getObjectValue([RequestorSettings::class, 'createFromDiscriminatorValue'])),
            'verifiableCredentialSettings' => fn(ParseNode $n) => $o->setVerifiableCredentialSettings($n->getObjectValue([VerifiableCredentialSettings::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the modifiedBy property value. The modifiedBy property
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        $val = $this->getBackingStore()->get('modifiedBy');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedBy'");
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('modifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedDateTime'");
    }

    /**
     * Gets the questions property value. Questions that are posed to the  requestor.
     * @return array<AccessPackageQuestion>|null
    */
    public function getQuestions(): ?array {
        $val = $this->getBackingStore()->get('questions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, AccessPackageQuestion::class);
            /** @var array<AccessPackageQuestion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'questions'");
    }

    /**
     * Gets the requestApprovalSettings property value. Who must approve requests for access package in this policy.
     * @return ApprovalSettings|null
    */
    public function getRequestApprovalSettings(): ?ApprovalSettings {
        $val = $this->getBackingStore()->get('requestApprovalSettings');
        if (is_null($val) || $val instanceof ApprovalSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestApprovalSettings'");
    }

    /**
     * Gets the requestorSettings property value. Who can request this access package from this policy.
     * @return RequestorSettings|null
    */
    public function getRequestorSettings(): ?RequestorSettings {
        $val = $this->getBackingStore()->get('requestorSettings');
        if (is_null($val) || $val instanceof RequestorSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'requestorSettings'");
    }

    /**
     * Gets the verifiableCredentialSettings property value. Settings for verifiable credentials set up through the Microsoft Entra Verified I D service. These settings represent the verifiable credentials that a requestor of an access package in this policy can present to be assigned the access package.
     * @return VerifiableCredentialSettings|null
    */
    public function getVerifiableCredentialSettings(): ?VerifiableCredentialSettings {
        $val = $this->getBackingStore()->get('verifiableCredentialSettings');
        if (is_null($val) || $val instanceof VerifiableCredentialSettings) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'verifiableCredentialSettings'");
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
        $writer->writeObjectValue('accessPackageNotificationSettings', $this->getAccessPackageNotificationSettings());
        $writer->writeObjectValue('accessReviewSettings', $this->getAccessReviewSettings());
        $writer->writeBooleanValue('canExtend', $this->getCanExtend());
        $writer->writeStringValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeCollectionOfObjectValues('customExtensionHandlers', $this->getCustomExtensionHandlers());
        $writer->writeCollectionOfObjectValues('customExtensionStageSettings', $this->getCustomExtensionStageSettings());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeIntegerValue('durationInDays', $this->getDurationInDays());
        $writer->writeDateTimeValue('expirationDateTime', $this->getExpirationDateTime());
        $writer->writeStringValue('modifiedBy', $this->getModifiedBy());
        $writer->writeDateTimeValue('modifiedDateTime', $this->getModifiedDateTime());
        $writer->writeCollectionOfObjectValues('questions', $this->getQuestions());
        $writer->writeObjectValue('requestApprovalSettings', $this->getRequestApprovalSettings());
        $writer->writeObjectValue('requestorSettings', $this->getRequestorSettings());
        $writer->writeObjectValue('verifiableCredentialSettings', $this->getVerifiableCredentialSettings());
    }

    /**
     * Sets the accessPackage property value. The access package with this policy. Read-only. Nullable. Supports $expand.
     * @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value): void {
        $this->getBackingStore()->set('accessPackage', $value);
    }

    /**
     * Sets the accessPackageCatalog property value. The accessPackageCatalog property
     * @param AccessPackageCatalog|null $value Value to set for the accessPackageCatalog property.
    */
    public function setAccessPackageCatalog(?AccessPackageCatalog $value): void {
        $this->getBackingStore()->set('accessPackageCatalog', $value);
    }

    /**
     * Sets the accessPackageId property value. Identifier of the access package.
     * @param string|null $value Value to set for the accessPackageId property.
    */
    public function setAccessPackageId(?string $value): void {
        $this->getBackingStore()->set('accessPackageId', $value);
    }

    /**
     * Sets the accessPackageNotificationSettings property value. The accessPackageNotificationSettings property
     * @param AccessPackageNotificationSettings|null $value Value to set for the accessPackageNotificationSettings property.
    */
    public function setAccessPackageNotificationSettings(?AccessPackageNotificationSettings $value): void {
        $this->getBackingStore()->set('accessPackageNotificationSettings', $value);
    }

    /**
     * Sets the accessReviewSettings property value. Who must review, and how often, the assignments to the access package from this policy. This property is null if reviews aren't required.
     * @param AssignmentReviewSettings|null $value Value to set for the accessReviewSettings property.
    */
    public function setAccessReviewSettings(?AssignmentReviewSettings $value): void {
        $this->getBackingStore()->set('accessReviewSettings', $value);
    }

    /**
     * Sets the canExtend property value. Indicates whether a user can extend the access package assignment duration after approval.
     * @param bool|null $value Value to set for the canExtend property.
    */
    public function setCanExtend(?bool $value): void {
        $this->getBackingStore()->set('canExtend', $value);
    }

    /**
     * Sets the createdBy property value. The createdBy property
     * @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the customExtensionHandlers property value. The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     * @param array<CustomExtensionHandler>|null $value Value to set for the customExtensionHandlers property.
    */
    public function setCustomExtensionHandlers(?array $value): void {
        $this->getBackingStore()->set('customExtensionHandlers', $value);
    }

    /**
     * Sets the customExtensionStageSettings property value. The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     * @param array<CustomExtensionStageSetting>|null $value Value to set for the customExtensionStageSettings property.
    */
    public function setCustomExtensionStageSettings(?array $value): void {
        $this->getBackingStore()->set('customExtensionStageSettings', $value);
    }

    /**
     * Sets the description property value. The description of the policy.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name of the policy. Supports $filter (eq).
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the durationInDays property value. The number of days in which assignments from this policy last until they're expired.
     * @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value): void {
        $this->getBackingStore()->set('durationInDays', $value);
    }

    /**
     * Sets the expirationDateTime property value. The expiration date for assignments created in this policy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('expirationDateTime', $value);
    }

    /**
     * Sets the modifiedBy property value. The modifiedBy property
     * @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value): void {
        $this->getBackingStore()->set('modifiedBy', $value);
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('modifiedDateTime', $value);
    }

    /**
     * Sets the questions property value. Questions that are posed to the  requestor.
     * @param array<AccessPackageQuestion>|null $value Value to set for the questions property.
    */
    public function setQuestions(?array $value): void {
        $this->getBackingStore()->set('questions', $value);
    }

    /**
     * Sets the requestApprovalSettings property value. Who must approve requests for access package in this policy.
     * @param ApprovalSettings|null $value Value to set for the requestApprovalSettings property.
    */
    public function setRequestApprovalSettings(?ApprovalSettings $value): void {
        $this->getBackingStore()->set('requestApprovalSettings', $value);
    }

    /**
     * Sets the requestorSettings property value. Who can request this access package from this policy.
     * @param RequestorSettings|null $value Value to set for the requestorSettings property.
    */
    public function setRequestorSettings(?RequestorSettings $value): void {
        $this->getBackingStore()->set('requestorSettings', $value);
    }

    /**
     * Sets the verifiableCredentialSettings property value. Settings for verifiable credentials set up through the Microsoft Entra Verified I D service. These settings represent the verifiable credentials that a requestor of an access package in this policy can present to be assigned the access package.
     * @param VerifiableCredentialSettings|null $value Value to set for the verifiableCredentialSettings property.
    */
    public function setVerifiableCredentialSettings(?VerifiableCredentialSettings $value): void {
        $this->getBackingStore()->set('verifiableCredentialSettings', $value);
    }

}
