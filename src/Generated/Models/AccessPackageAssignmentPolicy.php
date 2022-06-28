<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AccessPackageAssignmentPolicy extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var AccessPackage|null $accessPackage The access package with this policy. Read-only. Nullable. Supports $expand.
    */
    private ?AccessPackage $accessPackage = null;
    
    /**
     * @var AccessPackageCatalog|null $accessPackageCatalog The accessPackageCatalog property
    */
    private ?AccessPackageCatalog $accessPackageCatalog = null;
    
    /**
     * @var string|null $accessPackageId Identifier of the access package.
    */
    private ?string $accessPackageId = null;
    
    /**
     * @var AssignmentReviewSettings|null $accessReviewSettings Who must review, and how often, the assignments to the access package from this policy. This property is null if reviews are not required.
    */
    private ?AssignmentReviewSettings $accessReviewSettings = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $canExtend Indicates whether a user can extend the access package assignment duration after approval.
    */
    private ?bool $canExtend = null;
    
    /**
     * @var string|null $createdBy The createdBy property
    */
    private ?string $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var array<CustomExtensionHandler>|null $customExtensionHandlers The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
    */
    private ?array $customExtensionHandlers = null;
    
    /**
     * @var string|null $description The description of the policy.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the policy. Supports $filter (eq).
    */
    private ?string $displayName = null;
    
    /**
     * @var int|null $durationInDays The number of days in which assignments from this policy last until they are expired.
    */
    private ?int $durationInDays = null;
    
    /**
     * @var DateTime|null $expirationDateTime The expiration date for assignments created in this policy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $expirationDateTime = null;
    
    /**
     * @var string|null $modifiedBy The modifiedBy property
    */
    private ?string $modifiedBy = null;
    
    /**
     * @var DateTime|null $modifiedDateTime The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
    */
    private ?DateTime $modifiedDateTime = null;
    
    /**
     * @var array<AccessPackageQuestion>|null $questions Questions that are posed to the  requestor.
    */
    private ?array $questions = null;
    
    /**
     * @var ApprovalSettings|null $requestApprovalSettings Who must approve requests for access package in this policy.
    */
    private ?ApprovalSettings $requestApprovalSettings = null;
    
    /**
     * @var RequestorSettings|null $requestorSettings Who can request this access package from this policy.
    */
    private ?RequestorSettings $requestorSettings = null;
    
    /**
     * Instantiates a new accessPackageAssignmentPolicy and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
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
        return $this->accessPackage;
    }

    /**
     * Gets the accessPackageCatalog property value. The accessPackageCatalog property
     * @return AccessPackageCatalog|null
    */
    public function getAccessPackageCatalog(): ?AccessPackageCatalog {
        return $this->accessPackageCatalog;
    }

    /**
     * Gets the accessPackageId property value. Identifier of the access package.
     * @return string|null
    */
    public function getAccessPackageId(): ?string {
        return $this->accessPackageId;
    }

    /**
     * Gets the accessReviewSettings property value. Who must review, and how often, the assignments to the access package from this policy. This property is null if reviews are not required.
     * @return AssignmentReviewSettings|null
    */
    public function getAccessReviewSettings(): ?AssignmentReviewSettings {
        return $this->accessReviewSettings;
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the canExtend property value. Indicates whether a user can extend the access package assignment duration after approval.
     * @return bool|null
    */
    public function getCanExtend(): ?bool {
        return $this->canExtend;
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return string|null
    */
    public function getCreatedBy(): ?string {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the customExtensionHandlers property value. The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     * @return array<CustomExtensionHandler>|null
    */
    public function getCustomExtensionHandlers(): ?array {
        return $this->customExtensionHandlers;
    }

    /**
     * Gets the description property value. The description of the policy.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the policy. Supports $filter (eq).
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the durationInDays property value. The number of days in which assignments from this policy last until they are expired.
     * @return int|null
    */
    public function getDurationInDays(): ?int {
        return $this->durationInDays;
    }

    /**
     * Gets the expirationDateTime property value. The expiration date for assignments created in this policy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getExpirationDateTime(): ?DateTime {
        return $this->expirationDateTime;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'accessPackage' => function (ParseNode $n) use ($o) { $o->setAccessPackage($n->getObjectValue(array(AccessPackage::class, 'createFromDiscriminatorValue'))); },
            'accessPackageCatalog' => function (ParseNode $n) use ($o) { $o->setAccessPackageCatalog($n->getObjectValue(array(AccessPackageCatalog::class, 'createFromDiscriminatorValue'))); },
            'accessPackageId' => function (ParseNode $n) use ($o) { $o->setAccessPackageId($n->getStringValue()); },
            'accessReviewSettings' => function (ParseNode $n) use ($o) { $o->setAccessReviewSettings($n->getObjectValue(array(AssignmentReviewSettings::class, 'createFromDiscriminatorValue'))); },
            'canExtend' => function (ParseNode $n) use ($o) { $o->setCanExtend($n->getBooleanValue()); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'customExtensionHandlers' => function (ParseNode $n) use ($o) { $o->setCustomExtensionHandlers($n->getCollectionOfObjectValues(array(CustomExtensionHandler::class, 'createFromDiscriminatorValue'))); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'durationInDays' => function (ParseNode $n) use ($o) { $o->setDurationInDays($n->getIntegerValue()); },
            'expirationDateTime' => function (ParseNode $n) use ($o) { $o->setExpirationDateTime($n->getDateTimeValue()); },
            'modifiedBy' => function (ParseNode $n) use ($o) { $o->setModifiedBy($n->getStringValue()); },
            'modifiedDateTime' => function (ParseNode $n) use ($o) { $o->setModifiedDateTime($n->getDateTimeValue()); },
            'questions' => function (ParseNode $n) use ($o) { $o->setQuestions($n->getCollectionOfObjectValues(array(AccessPackageQuestion::class, 'createFromDiscriminatorValue'))); },
            'requestApprovalSettings' => function (ParseNode $n) use ($o) { $o->setRequestApprovalSettings($n->getObjectValue(array(ApprovalSettings::class, 'createFromDiscriminatorValue'))); },
            'requestorSettings' => function (ParseNode $n) use ($o) { $o->setRequestorSettings($n->getObjectValue(array(RequestorSettings::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the modifiedBy property value. The modifiedBy property
     * @return string|null
    */
    public function getModifiedBy(): ?string {
        return $this->modifiedBy;
    }

    /**
     * Gets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     * @return DateTime|null
    */
    public function getModifiedDateTime(): ?DateTime {
        return $this->modifiedDateTime;
    }

    /**
     * Gets the questions property value. Questions that are posed to the  requestor.
     * @return array<AccessPackageQuestion>|null
    */
    public function getQuestions(): ?array {
        return $this->questions;
    }

    /**
     * Gets the requestApprovalSettings property value. Who must approve requests for access package in this policy.
     * @return ApprovalSettings|null
    */
    public function getRequestApprovalSettings(): ?ApprovalSettings {
        return $this->requestApprovalSettings;
    }

    /**
     * Gets the requestorSettings property value. Who can request this access package from this policy.
     * @return RequestorSettings|null
    */
    public function getRequestorSettings(): ?RequestorSettings {
        return $this->requestorSettings;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('accessPackage', $this->accessPackage);
        $writer->writeObjectValue('accessPackageCatalog', $this->accessPackageCatalog);
        $writer->writeStringValue('accessPackageId', $this->accessPackageId);
        $writer->writeObjectValue('accessReviewSettings', $this->accessReviewSettings);
        $writer->writeBooleanValue('canExtend', $this->canExtend);
        $writer->writeStringValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeCollectionOfObjectValues('customExtensionHandlers', $this->customExtensionHandlers);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeIntegerValue('durationInDays', $this->durationInDays);
        $writer->writeDateTimeValue('expirationDateTime', $this->expirationDateTime);
        $writer->writeStringValue('modifiedBy', $this->modifiedBy);
        $writer->writeDateTimeValue('modifiedDateTime', $this->modifiedDateTime);
        $writer->writeCollectionOfObjectValues('questions', $this->questions);
        $writer->writeObjectValue('requestApprovalSettings', $this->requestApprovalSettings);
        $writer->writeObjectValue('requestorSettings', $this->requestorSettings);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the accessPackage property value. The access package with this policy. Read-only. Nullable. Supports $expand.
     *  @param AccessPackage|null $value Value to set for the accessPackage property.
    */
    public function setAccessPackage(?AccessPackage $value ): void {
        $this->accessPackage = $value;
    }

    /**
     * Sets the accessPackageCatalog property value. The accessPackageCatalog property
     *  @param AccessPackageCatalog|null $value Value to set for the accessPackageCatalog property.
    */
    public function setAccessPackageCatalog(?AccessPackageCatalog $value ): void {
        $this->accessPackageCatalog = $value;
    }

    /**
     * Sets the accessPackageId property value. Identifier of the access package.
     *  @param string|null $value Value to set for the accessPackageId property.
    */
    public function setAccessPackageId(?string $value ): void {
        $this->accessPackageId = $value;
    }

    /**
     * Sets the accessReviewSettings property value. Who must review, and how often, the assignments to the access package from this policy. This property is null if reviews are not required.
     *  @param AssignmentReviewSettings|null $value Value to set for the accessReviewSettings property.
    */
    public function setAccessReviewSettings(?AssignmentReviewSettings $value ): void {
        $this->accessReviewSettings = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the canExtend property value. Indicates whether a user can extend the access package assignment duration after approval.
     *  @param bool|null $value Value to set for the canExtend property.
    */
    public function setCanExtend(?bool $value ): void {
        $this->canExtend = $value;
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param string|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?string $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the customExtensionHandlers property value. The collection of stages when to execute one or more custom access package workflow extensions. Supports $expand.
     *  @param array<CustomExtensionHandler>|null $value Value to set for the customExtensionHandlers property.
    */
    public function setCustomExtensionHandlers(?array $value ): void {
        $this->customExtensionHandlers = $value;
    }

    /**
     * Sets the description property value. The description of the policy.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the policy. Supports $filter (eq).
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the durationInDays property value. The number of days in which assignments from this policy last until they are expired.
     *  @param int|null $value Value to set for the durationInDays property.
    */
    public function setDurationInDays(?int $value ): void {
        $this->durationInDays = $value;
    }

    /**
     * Sets the expirationDateTime property value. The expiration date for assignments created in this policy. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the expirationDateTime property.
    */
    public function setExpirationDateTime(?DateTime $value ): void {
        $this->expirationDateTime = $value;
    }

    /**
     * Sets the modifiedBy property value. The modifiedBy property
     *  @param string|null $value Value to set for the modifiedBy property.
    */
    public function setModifiedBy(?string $value ): void {
        $this->modifiedBy = $value;
    }

    /**
     * Sets the modifiedDateTime property value. The Timestamp type represents date and time information using ISO 8601 format and is always in UTC time. For example, midnight UTC on Jan 1, 2014 is 2014-01-01T00:00:00Z
     *  @param DateTime|null $value Value to set for the modifiedDateTime property.
    */
    public function setModifiedDateTime(?DateTime $value ): void {
        $this->modifiedDateTime = $value;
    }

    /**
     * Sets the questions property value. Questions that are posed to the  requestor.
     *  @param array<AccessPackageQuestion>|null $value Value to set for the questions property.
    */
    public function setQuestions(?array $value ): void {
        $this->questions = $value;
    }

    /**
     * Sets the requestApprovalSettings property value. Who must approve requests for access package in this policy.
     *  @param ApprovalSettings|null $value Value to set for the requestApprovalSettings property.
    */
    public function setRequestApprovalSettings(?ApprovalSettings $value ): void {
        $this->requestApprovalSettings = $value;
    }

    /**
     * Sets the requestorSettings property value. Who can request this access package from this policy.
     *  @param RequestorSettings|null $value Value to set for the requestorSettings property.
    */
    public function setRequestorSettings(?RequestorSettings $value ): void {
        $this->requestorSettings = $value;
    }

}
