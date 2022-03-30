<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class MobileApp extends Entity 
{
    /** @var array<MobileAppAssignment>|null $assignments The list of group assignments for this mobile app. */
    private ?array $assignments = null;
    
    /** @var array<MobileAppCategory>|null $categories The list of categories for this app. */
    private ?array $categories = null;
    
    /** @var DateTime|null $createdDateTime The date and time the app was created. */
    private ?DateTime $createdDateTime = null;
    
    /** @var int|null $dependentAppCount The total number of dependencies the child app has. */
    private ?int $dependentAppCount = null;
    
    /** @var string|null $description The description of the app. */
    private ?string $description = null;
    
    /** @var string|null $developer The developer of the app. */
    private ?string $developer = null;
    
    /** @var array<MobileAppInstallStatus>|null $deviceStatuses The list of installation states for this mobile app. */
    private ?array $deviceStatuses = null;
    
    /** @var string|null $displayName The admin provided or imported title of the app. */
    private ?string $displayName = null;
    
    /** @var string|null $informationUrl The more information Url. */
    private ?string $informationUrl = null;
    
    /** @var MobileAppInstallSummary|null $installSummary Mobile App Install Summary. */
    private ?MobileAppInstallSummary $installSummary = null;
    
    /** @var bool|null $isAssigned The value indicating whether the app is assigned to at least one group. */
    private ?bool $isAssigned = null;
    
    /** @var bool|null $isFeatured The value indicating whether the app is marked as featured by the admin. */
    private ?bool $isFeatured = null;
    
    /** @var MimeContent|null $largeIcon The large icon, to be displayed in the app details and used for upload of the icon. */
    private ?MimeContent $largeIcon = null;
    
    /** @var DateTime|null $lastModifiedDateTime The date and time the app was last modified. */
    private ?DateTime $lastModifiedDateTime = null;
    
    /** @var string|null $notes Notes for the app. */
    private ?string $notes = null;
    
    /** @var string|null $owner The owner of the app. */
    private ?string $owner = null;
    
    /** @var string|null $privacyInformationUrl The privacy statement Url. */
    private ?string $privacyInformationUrl = null;
    
    /** @var string|null $publisher The publisher of the app. */
    private ?string $publisher = null;
    
    /** @var MobileAppPublishingState|null $publishingState The publishing state for the app. The app cannot be assigned unless the app is published. Possible values are: notPublished, processing, published. */
    private ?MobileAppPublishingState $publishingState = null;
    
    /** @var array<MobileAppRelationship>|null $relationships List of relationships for this mobile app. */
    private ?array $relationships = null;
    
    /** @var array<string>|null $roleScopeTagIds List of scope tag ids for this mobile app. */
    private ?array $roleScopeTagIds = null;
    
    /** @var int|null $supersededAppCount The total number of apps this app is directly or indirectly superseded by. */
    private ?int $supersededAppCount = null;
    
    /** @var int|null $supersedingAppCount The total number of apps this app directly or indirectly supersedes. */
    private ?int $supersedingAppCount = null;
    
    /** @var int|null $uploadState The upload state. */
    private ?int $uploadState = null;
    
    /** @var array<UserAppInstallStatus>|null $userStatuses The list of installation states for this mobile app. */
    private ?array $userStatuses = null;
    
    /**
     * Instantiates a new mobileApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return MobileApp
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): MobileApp {
        return new MobileApp();
    }

    /**
     * Gets the assignments property value. The list of group assignments for this mobile app.
     * @return array<MobileAppAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the categories property value. The list of categories for this app.
     * @return array<MobileAppCategory>|null
    */
    public function getCategories(): ?array {
        return $this->categories;
    }

    /**
     * Gets the createdDateTime property value. The date and time the app was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the dependentAppCount property value. The total number of dependencies the child app has.
     * @return int|null
    */
    public function getDependentAppCount(): ?int {
        return $this->dependentAppCount;
    }

    /**
     * Gets the description property value. The description of the app.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the developer property value. The developer of the app.
     * @return string|null
    */
    public function getDeveloper(): ?string {
        return $this->developer;
    }

    /**
     * Gets the deviceStatuses property value. The list of installation states for this mobile app.
     * @return array<MobileAppInstallStatus>|null
    */
    public function getDeviceStatuses(): ?array {
        return $this->deviceStatuses;
    }

    /**
     * Gets the displayName property value. The admin provided or imported title of the app.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => function (self $o, ParseNode $n) { $o->setAssignments($n->getCollectionOfObjectValues(MobileAppAssignment::class)); },
            'categories' => function (self $o, ParseNode $n) { $o->setCategories($n->getCollectionOfObjectValues(MobileAppCategory::class)); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'dependentAppCount' => function (self $o, ParseNode $n) { $o->setDependentAppCount($n->getIntegerValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'developer' => function (self $o, ParseNode $n) { $o->setDeveloper($n->getStringValue()); },
            'deviceStatuses' => function (self $o, ParseNode $n) { $o->setDeviceStatuses($n->getCollectionOfObjectValues(MobileAppInstallStatus::class)); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'informationUrl' => function (self $o, ParseNode $n) { $o->setInformationUrl($n->getStringValue()); },
            'installSummary' => function (self $o, ParseNode $n) { $o->setInstallSummary($n->getObjectValue(MobileAppInstallSummary::class)); },
            'isAssigned' => function (self $o, ParseNode $n) { $o->setIsAssigned($n->getBooleanValue()); },
            'isFeatured' => function (self $o, ParseNode $n) { $o->setIsFeatured($n->getBooleanValue()); },
            'largeIcon' => function (self $o, ParseNode $n) { $o->setLargeIcon($n->getObjectValue(MimeContent::class)); },
            'lastModifiedDateTime' => function (self $o, ParseNode $n) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'notes' => function (self $o, ParseNode $n) { $o->setNotes($n->getStringValue()); },
            'owner' => function (self $o, ParseNode $n) { $o->setOwner($n->getStringValue()); },
            'privacyInformationUrl' => function (self $o, ParseNode $n) { $o->setPrivacyInformationUrl($n->getStringValue()); },
            'publisher' => function (self $o, ParseNode $n) { $o->setPublisher($n->getStringValue()); },
            'publishingState' => function (self $o, ParseNode $n) { $o->setPublishingState($n->getEnumValue(MobileAppPublishingState::class)); },
            'relationships' => function (self $o, ParseNode $n) { $o->setRelationships($n->getCollectionOfObjectValues(MobileAppRelationship::class)); },
            'roleScopeTagIds' => function (self $o, ParseNode $n) { $o->setRoleScopeTagIds($n->getCollectionOfPrimitiveValues()); },
            'supersededAppCount' => function (self $o, ParseNode $n) { $o->setSupersededAppCount($n->getIntegerValue()); },
            'supersedingAppCount' => function (self $o, ParseNode $n) { $o->setSupersedingAppCount($n->getIntegerValue()); },
            'uploadState' => function (self $o, ParseNode $n) { $o->setUploadState($n->getIntegerValue()); },
            'userStatuses' => function (self $o, ParseNode $n) { $o->setUserStatuses($n->getCollectionOfObjectValues(UserAppInstallStatus::class)); },
        ]);
    }

    /**
     * Gets the informationUrl property value. The more information Url.
     * @return string|null
    */
    public function getInformationUrl(): ?string {
        return $this->informationUrl;
    }

    /**
     * Gets the installSummary property value. Mobile App Install Summary.
     * @return MobileAppInstallSummary|null
    */
    public function getInstallSummary(): ?MobileAppInstallSummary {
        return $this->installSummary;
    }

    /**
     * Gets the isAssigned property value. The value indicating whether the app is assigned to at least one group.
     * @return bool|null
    */
    public function getIsAssigned(): ?bool {
        return $this->isAssigned;
    }

    /**
     * Gets the isFeatured property value. The value indicating whether the app is marked as featured by the admin.
     * @return bool|null
    */
    public function getIsFeatured(): ?bool {
        return $this->isFeatured;
    }

    /**
     * Gets the largeIcon property value. The large icon, to be displayed in the app details and used for upload of the icon.
     * @return MimeContent|null
    */
    public function getLargeIcon(): ?MimeContent {
        return $this->largeIcon;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the app was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the notes property value. Notes for the app.
     * @return string|null
    */
    public function getNotes(): ?string {
        return $this->notes;
    }

    /**
     * Gets the owner property value. The owner of the app.
     * @return string|null
    */
    public function getOwner(): ?string {
        return $this->owner;
    }

    /**
     * Gets the privacyInformationUrl property value. The privacy statement Url.
     * @return string|null
    */
    public function getPrivacyInformationUrl(): ?string {
        return $this->privacyInformationUrl;
    }

    /**
     * Gets the publisher property value. The publisher of the app.
     * @return string|null
    */
    public function getPublisher(): ?string {
        return $this->publisher;
    }

    /**
     * Gets the publishingState property value. The publishing state for the app. The app cannot be assigned unless the app is published. Possible values are: notPublished, processing, published.
     * @return MobileAppPublishingState|null
    */
    public function getPublishingState(): ?MobileAppPublishingState {
        return $this->publishingState;
    }

    /**
     * Gets the relationships property value. List of relationships for this mobile app.
     * @return array<MobileAppRelationship>|null
    */
    public function getRelationships(): ?array {
        return $this->relationships;
    }

    /**
     * Gets the roleScopeTagIds property value. List of scope tag ids for this mobile app.
     * @return array<string>|null
    */
    public function getRoleScopeTagIds(): ?array {
        return $this->roleScopeTagIds;
    }

    /**
     * Gets the supersededAppCount property value. The total number of apps this app is directly or indirectly superseded by.
     * @return int|null
    */
    public function getSupersededAppCount(): ?int {
        return $this->supersededAppCount;
    }

    /**
     * Gets the supersedingAppCount property value. The total number of apps this app directly or indirectly supersedes.
     * @return int|null
    */
    public function getSupersedingAppCount(): ?int {
        return $this->supersedingAppCount;
    }

    /**
     * Gets the uploadState property value. The upload state.
     * @return int|null
    */
    public function getUploadState(): ?int {
        return $this->uploadState;
    }

    /**
     * Gets the userStatuses property value. The list of installation states for this mobile app.
     * @return array<UserAppInstallStatus>|null
    */
    public function getUserStatuses(): ?array {
        return $this->userStatuses;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeCollectionOfObjectValues('categories', $this->categories);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeIntegerValue('dependentAppCount', $this->dependentAppCount);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('developer', $this->developer);
        $writer->writeCollectionOfObjectValues('deviceStatuses', $this->deviceStatuses);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('informationUrl', $this->informationUrl);
        $writer->writeObjectValue('installSummary', $this->installSummary);
        $writer->writeBooleanValue('isAssigned', $this->isAssigned);
        $writer->writeBooleanValue('isFeatured', $this->isFeatured);
        $writer->writeObjectValue('largeIcon', $this->largeIcon);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeStringValue('notes', $this->notes);
        $writer->writeStringValue('owner', $this->owner);
        $writer->writeStringValue('privacyInformationUrl', $this->privacyInformationUrl);
        $writer->writeStringValue('publisher', $this->publisher);
        $writer->writeEnumValue('publishingState', $this->publishingState);
        $writer->writeCollectionOfObjectValues('relationships', $this->relationships);
        $writer->writeCollectionOfPrimitiveValues('roleScopeTagIds', $this->roleScopeTagIds);
        $writer->writeIntegerValue('supersededAppCount', $this->supersededAppCount);
        $writer->writeIntegerValue('supersedingAppCount', $this->supersedingAppCount);
        $writer->writeIntegerValue('uploadState', $this->uploadState);
        $writer->writeCollectionOfObjectValues('userStatuses', $this->userStatuses);
    }

    /**
     * Sets the assignments property value. The list of group assignments for this mobile app.
     *  @param array<MobileAppAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the categories property value. The list of categories for this app.
     *  @param array<MobileAppCategory>|null $value Value to set for the categories property.
    */
    public function setCategories(?array $value ): void {
        $this->categories = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the app was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the dependentAppCount property value. The total number of dependencies the child app has.
     *  @param int|null $value Value to set for the dependentAppCount property.
    */
    public function setDependentAppCount(?int $value ): void {
        $this->dependentAppCount = $value;
    }

    /**
     * Sets the description property value. The description of the app.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the developer property value. The developer of the app.
     *  @param string|null $value Value to set for the developer property.
    */
    public function setDeveloper(?string $value ): void {
        $this->developer = $value;
    }

    /**
     * Sets the deviceStatuses property value. The list of installation states for this mobile app.
     *  @param array<MobileAppInstallStatus>|null $value Value to set for the deviceStatuses property.
    */
    public function setDeviceStatuses(?array $value ): void {
        $this->deviceStatuses = $value;
    }

    /**
     * Sets the displayName property value. The admin provided or imported title of the app.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the informationUrl property value. The more information Url.
     *  @param string|null $value Value to set for the informationUrl property.
    */
    public function setInformationUrl(?string $value ): void {
        $this->informationUrl = $value;
    }

    /**
     * Sets the installSummary property value. Mobile App Install Summary.
     *  @param MobileAppInstallSummary|null $value Value to set for the installSummary property.
    */
    public function setInstallSummary(?MobileAppInstallSummary $value ): void {
        $this->installSummary = $value;
    }

    /**
     * Sets the isAssigned property value. The value indicating whether the app is assigned to at least one group.
     *  @param bool|null $value Value to set for the isAssigned property.
    */
    public function setIsAssigned(?bool $value ): void {
        $this->isAssigned = $value;
    }

    /**
     * Sets the isFeatured property value. The value indicating whether the app is marked as featured by the admin.
     *  @param bool|null $value Value to set for the isFeatured property.
    */
    public function setIsFeatured(?bool $value ): void {
        $this->isFeatured = $value;
    }

    /**
     * Sets the largeIcon property value. The large icon, to be displayed in the app details and used for upload of the icon.
     *  @param MimeContent|null $value Value to set for the largeIcon property.
    */
    public function setLargeIcon(?MimeContent $value ): void {
        $this->largeIcon = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the app was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the notes property value. Notes for the app.
     *  @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value ): void {
        $this->notes = $value;
    }

    /**
     * Sets the owner property value. The owner of the app.
     *  @param string|null $value Value to set for the owner property.
    */
    public function setOwner(?string $value ): void {
        $this->owner = $value;
    }

    /**
     * Sets the privacyInformationUrl property value. The privacy statement Url.
     *  @param string|null $value Value to set for the privacyInformationUrl property.
    */
    public function setPrivacyInformationUrl(?string $value ): void {
        $this->privacyInformationUrl = $value;
    }

    /**
     * Sets the publisher property value. The publisher of the app.
     *  @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value ): void {
        $this->publisher = $value;
    }

    /**
     * Sets the publishingState property value. The publishing state for the app. The app cannot be assigned unless the app is published. Possible values are: notPublished, processing, published.
     *  @param MobileAppPublishingState|null $value Value to set for the publishingState property.
    */
    public function setPublishingState(?MobileAppPublishingState $value ): void {
        $this->publishingState = $value;
    }

    /**
     * Sets the relationships property value. List of relationships for this mobile app.
     *  @param array<MobileAppRelationship>|null $value Value to set for the relationships property.
    */
    public function setRelationships(?array $value ): void {
        $this->relationships = $value;
    }

    /**
     * Sets the roleScopeTagIds property value. List of scope tag ids for this mobile app.
     *  @param array<string>|null $value Value to set for the roleScopeTagIds property.
    */
    public function setRoleScopeTagIds(?array $value ): void {
        $this->roleScopeTagIds = $value;
    }

    /**
     * Sets the supersededAppCount property value. The total number of apps this app is directly or indirectly superseded by.
     *  @param int|null $value Value to set for the supersededAppCount property.
    */
    public function setSupersededAppCount(?int $value ): void {
        $this->supersededAppCount = $value;
    }

    /**
     * Sets the supersedingAppCount property value. The total number of apps this app directly or indirectly supersedes.
     *  @param int|null $value Value to set for the supersedingAppCount property.
    */
    public function setSupersedingAppCount(?int $value ): void {
        $this->supersedingAppCount = $value;
    }

    /**
     * Sets the uploadState property value. The upload state.
     *  @param int|null $value Value to set for the uploadState property.
    */
    public function setUploadState(?int $value ): void {
        $this->uploadState = $value;
    }

    /**
     * Sets the userStatuses property value. The list of installation states for this mobile app.
     *  @param array<UserAppInstallStatus>|null $value Value to set for the userStatuses property.
    */
    public function setUserStatuses(?array $value ): void {
        $this->userStatuses = $value;
    }

}
