<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\ActionUrl;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplateStep extends Entity implements Parsable 
{
    /**
     * @var ManagementTemplateStepVersion|null $acceptedVersion The acceptedVersion property
    */
    private ?ManagementTemplateStepVersion $acceptedVersion = null;
    
    /**
     * @var ManagementCategory|null $category The category property
    */
    private ?ManagementCategory $category = null;
    
    /**
     * @var string|null $createdByUserId The createdByUserId property
    */
    private ?string $createdByUserId = null;
    
    /**
     * @var DateTime|null $createdDateTime The createdDateTime property
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description property
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The displayName property
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $lastActionByUserId The lastActionByUserId property
    */
    private ?string $lastActionByUserId = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The lastActionDateTime property
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var ManagementTemplate|null $managementTemplate The managementTemplate property
    */
    private ?ManagementTemplate $managementTemplate = null;
    
    /**
     * @var ActionUrl|null $portalLink The portalLink property
    */
    private ?ActionUrl $portalLink = null;
    
    /**
     * @var int|null $priority The priority property
    */
    private ?int $priority = null;
    
    /**
     * @var array<ManagementTemplateStepVersion>|null $versions The versions property
    */
    private ?array $versions = null;
    
    /**
     * Instantiates a new managementTemplateStep and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementTemplateStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplateStep {
        return new ManagementTemplateStep();
    }

    /**
     * Gets the acceptedVersion property value. The acceptedVersion property
     * @return ManagementTemplateStepVersion|null
    */
    public function getAcceptedVersion(): ?ManagementTemplateStepVersion {
        return $this->acceptedVersion;
    }

    /**
     * Gets the category property value. The category property
     * @return ManagementCategory|null
    */
    public function getCategory(): ?ManagementCategory {
        return $this->category;
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The displayName property
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'acceptedVersion' => function (ParseNode $n) use ($o) { $o->setAcceptedVersion($n->getObjectValue(array(ManagementTemplateStepVersion::class, 'createFromDiscriminatorValue'))); },
            'category' => function (ParseNode $n) use ($o) { $o->setCategory($n->getEnumValue(ManagementCategory::class)); },
            'createdByUserId' => function (ParseNode $n) use ($o) { $o->setCreatedByUserId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'lastActionByUserId' => function (ParseNode $n) use ($o) { $o->setLastActionByUserId($n->getStringValue()); },
            'lastActionDateTime' => function (ParseNode $n) use ($o) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'managementTemplate' => function (ParseNode $n) use ($o) { $o->setManagementTemplate($n->getObjectValue(array(ManagementTemplate::class, 'createFromDiscriminatorValue'))); },
            'portalLink' => function (ParseNode $n) use ($o) { $o->setPortalLink($n->getObjectValue(array(ActionUrl::class, 'createFromDiscriminatorValue'))); },
            'priority' => function (ParseNode $n) use ($o) { $o->setPriority($n->getIntegerValue()); },
            'versions' => function (ParseNode $n) use ($o) { $o->setVersions($n->getCollectionOfObjectValues(array(ManagementTemplateStepVersion::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->lastActionByUserId;
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the managementTemplate property value. The managementTemplate property
     * @return ManagementTemplate|null
    */
    public function getManagementTemplate(): ?ManagementTemplate {
        return $this->managementTemplate;
    }

    /**
     * Gets the portalLink property value. The portalLink property
     * @return ActionUrl|null
    */
    public function getPortalLink(): ?ActionUrl {
        return $this->portalLink;
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the versions property value. The versions property
     * @return array<ManagementTemplateStepVersion>|null
    */
    public function getVersions(): ?array {
        return $this->versions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('acceptedVersion', $this->acceptedVersion);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeStringValue('createdByUserId', $this->createdByUserId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('lastActionByUserId', $this->lastActionByUserId);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeObjectValue('managementTemplate', $this->managementTemplate);
        $writer->writeObjectValue('portalLink', $this->portalLink);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeCollectionOfObjectValues('versions', $this->versions);
    }

    /**
     * Sets the acceptedVersion property value. The acceptedVersion property
     *  @param ManagementTemplateStepVersion|null $value Value to set for the acceptedVersion property.
    */
    public function setAcceptedVersion(?ManagementTemplateStepVersion $value ): void {
        $this->acceptedVersion = $value;
    }

    /**
     * Sets the category property value. The category property
     *  @param ManagementCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ManagementCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     *  @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value ): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     *  @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value ): void {
        $this->lastActionByUserId = $value;
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the managementTemplate property value. The managementTemplate property
     *  @param ManagementTemplate|null $value Value to set for the managementTemplate property.
    */
    public function setManagementTemplate(?ManagementTemplate $value ): void {
        $this->managementTemplate = $value;
    }

    /**
     * Sets the portalLink property value. The portalLink property
     *  @param ActionUrl|null $value Value to set for the portalLink property.
    */
    public function setPortalLink(?ActionUrl $value ): void {
        $this->portalLink = $value;
    }

    /**
     * Sets the priority property value. The priority property
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the versions property value. The versions property
     *  @param array<ManagementTemplateStepVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value ): void {
        $this->versions = $value;
    }

}
