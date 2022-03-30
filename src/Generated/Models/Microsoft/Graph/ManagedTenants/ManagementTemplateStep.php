<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ActionUrl;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplateStep extends Entity 
{
    /** @var ManagementTemplateStepVersion|null $acceptedVersion  */
    private ?ManagementTemplateStepVersion $acceptedVersion = null;
    
    /** @var ManagementCategory|null $category  */
    private ?ManagementCategory $category = null;
    
    /** @var string|null $createdByUserId  */
    private ?string $createdByUserId = null;
    
    /** @var DateTime|null $createdDateTime  */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description  */
    private ?string $description = null;
    
    /** @var string|null $displayName  */
    private ?string $displayName = null;
    
    /** @var string|null $lastActionByUserId  */
    private ?string $lastActionByUserId = null;
    
    /** @var DateTime|null $lastActionDateTime  */
    private ?DateTime $lastActionDateTime = null;
    
    /** @var ManagementTemplate|null $managementTemplate  */
    private ?ManagementTemplate $managementTemplate = null;
    
    /** @var ActionUrl|null $portalLink  */
    private ?ActionUrl $portalLink = null;
    
    /** @var int|null $priority  */
    private ?int $priority = null;
    
    /** @var array<ManagementTemplateStepVersion>|null $versions  */
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
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplateStep {
        return new ManagementTemplateStep();
    }

    /**
     * Gets the acceptedVersion property value. 
     * @return ManagementTemplateStepVersion|null
    */
    public function getAcceptedVersion(): ?ManagementTemplateStepVersion {
        return $this->acceptedVersion;
    }

    /**
     * Gets the category property value. 
     * @return ManagementCategory|null
    */
    public function getCategory(): ?ManagementCategory {
        return $this->category;
    }

    /**
     * Gets the createdByUserId property value. 
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->createdByUserId;
    }

    /**
     * Gets the createdDateTime property value. 
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. 
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. 
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
            'acceptedVersion' => function (self $o, ParseNode $n) { $o->setAcceptedVersion($n->getObjectValue(ManagementTemplateStepVersion::class)); },
            'category' => function (self $o, ParseNode $n) { $o->setCategory($n->getEnumValue(ManagementCategory::class)); },
            'createdByUserId' => function (self $o, ParseNode $n) { $o->setCreatedByUserId($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'lastActionByUserId' => function (self $o, ParseNode $n) { $o->setLastActionByUserId($n->getStringValue()); },
            'lastActionDateTime' => function (self $o, ParseNode $n) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'managementTemplate' => function (self $o, ParseNode $n) { $o->setManagementTemplate($n->getObjectValue(ManagementTemplate::class)); },
            'portalLink' => function (self $o, ParseNode $n) { $o->setPortalLink($n->getObjectValue(ActionUrl::class)); },
            'priority' => function (self $o, ParseNode $n) { $o->setPriority($n->getIntegerValue()); },
            'versions' => function (self $o, ParseNode $n) { $o->setVersions($n->getCollectionOfObjectValues(ManagementTemplateStepVersion::class)); },
        ]);
    }

    /**
     * Gets the lastActionByUserId property value. 
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->lastActionByUserId;
    }

    /**
     * Gets the lastActionDateTime property value. 
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->lastActionDateTime;
    }

    /**
     * Gets the managementTemplate property value. 
     * @return ManagementTemplate|null
    */
    public function getManagementTemplate(): ?ManagementTemplate {
        return $this->managementTemplate;
    }

    /**
     * Gets the portalLink property value. 
     * @return ActionUrl|null
    */
    public function getPortalLink(): ?ActionUrl {
        return $this->portalLink;
    }

    /**
     * Gets the priority property value. 
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the versions property value. 
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
     * Sets the acceptedVersion property value. 
     *  @param ManagementTemplateStepVersion|null $value Value to set for the acceptedVersion property.
    */
    public function setAcceptedVersion(?ManagementTemplateStepVersion $value ): void {
        $this->acceptedVersion = $value;
    }

    /**
     * Sets the category property value. 
     *  @param ManagementCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ManagementCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the createdByUserId property value. 
     *  @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value ): void {
        $this->createdByUserId = $value;
    }

    /**
     * Sets the createdDateTime property value. 
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. 
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. 
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastActionByUserId property value. 
     *  @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value ): void {
        $this->lastActionByUserId = $value;
    }

    /**
     * Sets the lastActionDateTime property value. 
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value ): void {
        $this->lastActionDateTime = $value;
    }

    /**
     * Sets the managementTemplate property value. 
     *  @param ManagementTemplate|null $value Value to set for the managementTemplate property.
    */
    public function setManagementTemplate(?ManagementTemplate $value ): void {
        $this->managementTemplate = $value;
    }

    /**
     * Sets the portalLink property value. 
     *  @param ActionUrl|null $value Value to set for the portalLink property.
    */
    public function setPortalLink(?ActionUrl $value ): void {
        $this->portalLink = $value;
    }

    /**
     * Sets the priority property value. 
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the versions property value. 
     *  @param array<ManagementTemplateStepVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value ): void {
        $this->versions = $value;
    }

}
