<?php

namespace Microsoft\Graph\Beta\Generated\Models\Ediscovery;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Graph\Beta\Generated\Models\IdentitySet;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class LegalHold extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $contentQuery KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
    */
    private ?string $contentQuery = null;
    
    /**
     * @var IdentitySet|null $createdBy The user who created the legal hold.
    */
    private ?IdentitySet $createdBy = null;
    
    /**
     * @var DateTime|null $createdDateTime The date and time the legal hold was created.
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The legal hold description.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name of the legal hold.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<string>|null $errors Lists any errors that happened while placing the hold.
    */
    private ?array $errors = null;
    
    /**
     * @var bool|null $isEnabled Indicates whether the hold is enabled and actively holding content.
    */
    private ?bool $isEnabled = null;
    
    /**
     * @var IdentitySet|null $lastModifiedBy the user who last modified the legal hold.
    */
    private ?IdentitySet $lastModifiedBy = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The date and time the legal hold was last modified.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var array<SiteSource>|null $siteSources Data source entity for SharePoint sites associated with the legal hold.
    */
    private ?array $siteSources = null;
    
    /**
     * @var LegalHoldStatus|null $status The status of the legal hold. Possible values are: Pending, Error, Success, UnknownFutureValue.
    */
    private ?LegalHoldStatus $status = null;
    
    /**
     * @var array<UnifiedGroupSource>|null $unifiedGroupSources The unifiedGroupSources property
    */
    private ?array $unifiedGroupSources = null;
    
    /**
     * @var array<UserSource>|null $userSources Data source entity for a the legal hold. This is the container for a mailbox and OneDrive for Business site.
    */
    private ?array $userSources = null;
    
    /**
     * Instantiates a new legalHold and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LegalHold
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LegalHold {
        return new LegalHold();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the contentQuery property value. KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
     * @return string|null
    */
    public function getContentQuery(): ?string {
        return $this->contentQuery;
    }

    /**
     * Gets the createdBy property value. The user who created the legal hold.
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->createdBy;
    }

    /**
     * Gets the createdDateTime property value. The date and time the legal hold was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The legal hold description.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name of the legal hold.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * Gets the errors property value. Lists any errors that happened while placing the hold.
     * @return array<string>|null
    */
    public function getErrors(): ?array {
        return $this->errors;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentQuery' => function (ParseNode $n) use ($o) { $o->setContentQuery($n->getStringValue()); },
            'createdBy' => function (ParseNode $n) use ($o) { $o->setCreatedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'errors' => function (ParseNode $n) use ($o) { $o->setErrors($n->getCollectionOfPrimitiveValues()); },
            'isEnabled' => function (ParseNode $n) use ($o) { $o->setIsEnabled($n->getBooleanValue()); },
            'lastModifiedBy' => function (ParseNode $n) use ($o) { $o->setLastModifiedBy($n->getObjectValue(array(IdentitySet::class, 'createFromDiscriminatorValue'))); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'siteSources' => function (ParseNode $n) use ($o) { $o->setSiteSources($n->getCollectionOfObjectValues(array(SiteSource::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getEnumValue(LegalHoldStatus::class)); },
            'unifiedGroupSources' => function (ParseNode $n) use ($o) { $o->setUnifiedGroupSources($n->getCollectionOfObjectValues(array(UnifiedGroupSource::class, 'createFromDiscriminatorValue'))); },
            'userSources' => function (ParseNode $n) use ($o) { $o->setUserSources($n->getCollectionOfObjectValues(array(UserSource::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the isEnabled property value. Indicates whether the hold is enabled and actively holding content.
     * @return bool|null
    */
    public function getIsEnabled(): ?bool {
        return $this->isEnabled;
    }

    /**
     * Gets the lastModifiedBy property value. the user who last modified the legal hold.
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->lastModifiedBy;
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the legal hold was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the siteSources property value. Data source entity for SharePoint sites associated with the legal hold.
     * @return array<SiteSource>|null
    */
    public function getSiteSources(): ?array {
        return $this->siteSources;
    }

    /**
     * Gets the status property value. The status of the legal hold. Possible values are: Pending, Error, Success, UnknownFutureValue.
     * @return LegalHoldStatus|null
    */
    public function getStatus(): ?LegalHoldStatus {
        return $this->status;
    }

    /**
     * Gets the unifiedGroupSources property value. The unifiedGroupSources property
     * @return array<UnifiedGroupSource>|null
    */
    public function getUnifiedGroupSources(): ?array {
        return $this->unifiedGroupSources;
    }

    /**
     * Gets the userSources property value. Data source entity for a the legal hold. This is the container for a mailbox and OneDrive for Business site.
     * @return array<UserSource>|null
    */
    public function getUserSources(): ?array {
        return $this->userSources;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('contentQuery', $this->contentQuery);
        $writer->writeObjectValue('createdBy', $this->createdBy);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfPrimitiveValues('errors', $this->errors);
        $writer->writeBooleanValue('isEnabled', $this->isEnabled);
        $writer->writeObjectValue('lastModifiedBy', $this->lastModifiedBy);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeCollectionOfObjectValues('siteSources', $this->siteSources);
        $writer->writeEnumValue('status', $this->status);
        $writer->writeCollectionOfObjectValues('unifiedGroupSources', $this->unifiedGroupSources);
        $writer->writeCollectionOfObjectValues('userSources', $this->userSources);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the contentQuery property value. KQL query that specifies content to be held in the specified locations. To learn more, see Keyword queries and search conditions for Content Search and eDiscovery.  To hold all content in the specified locations, leave contentQuery blank.
     *  @param string|null $value Value to set for the contentQuery property.
    */
    public function setContentQuery(?string $value ): void {
        $this->contentQuery = $value;
    }

    /**
     * Sets the createdBy property value. The user who created the legal hold.
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value ): void {
        $this->createdBy = $value;
    }

    /**
     * Sets the createdDateTime property value. The date and time the legal hold was created.
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The legal hold description.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name of the legal hold.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the errors property value. Lists any errors that happened while placing the hold.
     *  @param array<string>|null $value Value to set for the errors property.
    */
    public function setErrors(?array $value ): void {
        $this->errors = $value;
    }

    /**
     * Sets the isEnabled property value. Indicates whether the hold is enabled and actively holding content.
     *  @param bool|null $value Value to set for the isEnabled property.
    */
    public function setIsEnabled(?bool $value ): void {
        $this->isEnabled = $value;
    }

    /**
     * Sets the lastModifiedBy property value. the user who last modified the legal hold.
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value ): void {
        $this->lastModifiedBy = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the legal hold was last modified.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the siteSources property value. Data source entity for SharePoint sites associated with the legal hold.
     *  @param array<SiteSource>|null $value Value to set for the siteSources property.
    */
    public function setSiteSources(?array $value ): void {
        $this->siteSources = $value;
    }

    /**
     * Sets the status property value. The status of the legal hold. Possible values are: Pending, Error, Success, UnknownFutureValue.
     *  @param LegalHoldStatus|null $value Value to set for the status property.
    */
    public function setStatus(?LegalHoldStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the unifiedGroupSources property value. The unifiedGroupSources property
     *  @param array<UnifiedGroupSource>|null $value Value to set for the unifiedGroupSources property.
    */
    public function setUnifiedGroupSources(?array $value ): void {
        $this->unifiedGroupSources = $value;
    }

    /**
     * Sets the userSources property value. Data source entity for a the legal hold. This is the container for a mailbox and OneDrive for Business site.
     *  @param array<UserSource>|null $value Value to set for the userSources property.
    */
    public function setUserSources(?array $value ): void {
        $this->userSources = $value;
    }

}
