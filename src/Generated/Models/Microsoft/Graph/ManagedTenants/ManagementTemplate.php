<?php

namespace Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\ActionUrl;
use Microsoft\Graph\Beta\Generated\Models\Microsoft\Graph\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplate extends Entity 
{
    /** @var ManagementCategory|null $category The management category for the management template. Possible values are: custom, devices, identity, unknownFutureValue. Required. Read-only. */
    private ?ManagementCategory $category = null;
    
    /** @var string|null $createdByUserId  */
    private ?string $createdByUserId = null;
    
    /** @var DateTime|null $createdDateTime  */
    private ?DateTime $createdDateTime = null;
    
    /** @var string|null $description The description for the management template. Optional. Read-only. */
    private ?string $description = null;
    
    /** @var string|null $displayName The display name for the management template. Required. Read-only. */
    private ?string $displayName = null;
    
    /** @var array<ActionUrl>|null $informationLinks  */
    private ?array $informationLinks = null;
    
    /** @var string|null $lastActionByUserId  */
    private ?string $lastActionByUserId = null;
    
    /** @var DateTime|null $lastActionDateTime  */
    private ?DateTime $lastActionDateTime = null;
    
    /** @var array<ManagementTemplateCollection>|null $managementTemplateCollections  */
    private ?array $managementTemplateCollections = null;
    
    /** @var array<ManagementTemplateStep>|null $managementTemplateSteps  */
    private ?array $managementTemplateSteps = null;
    
    /** @var array<TemplateParameter>|null $parameters The collection of parameters used by the management template. Optional. Read-only. */
    private ?array $parameters = null;
    
    /** @var int|null $priority  */
    private ?int $priority = null;
    
    /** @var ManagementProvider|null $provider  */
    private ?ManagementProvider $provider = null;
    
    /** @var string|null $userImpact  */
    private ?string $userImpact = null;
    
    /** @var int|null $version  */
    private ?int $version = null;
    
    /** @var array<WorkloadAction>|null $workloadActions The collection of workload actions associated with the management template. Optional. Read-only. */
    private ?array $workloadActions = null;
    
    /**
     * Instantiates a new managementTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementTemplate
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplate {
        return new ManagementTemplate();
    }

    /**
     * Gets the category property value. The management category for the management template. Possible values are: custom, devices, identity, unknownFutureValue. Required. Read-only.
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
     * Gets the description property value. The description for the management template. Optional. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for the management template. Required. Read-only.
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
            'category' => function (self $o, ParseNode $n) { $o->setCategory($n->getEnumValue(ManagementCategory::class)); },
            'createdByUserId' => function (self $o, ParseNode $n) { $o->setCreatedByUserId($n->getStringValue()); },
            'createdDateTime' => function (self $o, ParseNode $n) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (self $o, ParseNode $n) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'informationLinks' => function (self $o, ParseNode $n) { $o->setInformationLinks($n->getCollectionOfObjectValues(ActionUrl::class)); },
            'lastActionByUserId' => function (self $o, ParseNode $n) { $o->setLastActionByUserId($n->getStringValue()); },
            'lastActionDateTime' => function (self $o, ParseNode $n) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'managementTemplateCollections' => function (self $o, ParseNode $n) { $o->setManagementTemplateCollections($n->getCollectionOfObjectValues(ManagementTemplateCollection::class)); },
            'managementTemplateSteps' => function (self $o, ParseNode $n) { $o->setManagementTemplateSteps($n->getCollectionOfObjectValues(ManagementTemplateStep::class)); },
            'parameters' => function (self $o, ParseNode $n) { $o->setParameters($n->getCollectionOfObjectValues(TemplateParameter::class)); },
            'priority' => function (self $o, ParseNode $n) { $o->setPriority($n->getIntegerValue()); },
            'provider' => function (self $o, ParseNode $n) { $o->setProvider($n->getEnumValue(ManagementProvider::class)); },
            'userImpact' => function (self $o, ParseNode $n) { $o->setUserImpact($n->getStringValue()); },
            'version' => function (self $o, ParseNode $n) { $o->setVersion($n->getIntegerValue()); },
            'workloadActions' => function (self $o, ParseNode $n) { $o->setWorkloadActions($n->getCollectionOfObjectValues(WorkloadAction::class)); },
        ]);
    }

    /**
     * Gets the informationLinks property value. 
     * @return array<ActionUrl>|null
    */
    public function getInformationLinks(): ?array {
        return $this->informationLinks;
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
     * Gets the managementTemplateCollections property value. 
     * @return array<ManagementTemplateCollection>|null
    */
    public function getManagementTemplateCollections(): ?array {
        return $this->managementTemplateCollections;
    }

    /**
     * Gets the managementTemplateSteps property value. 
     * @return array<ManagementTemplateStep>|null
    */
    public function getManagementTemplateSteps(): ?array {
        return $this->managementTemplateSteps;
    }

    /**
     * Gets the parameters property value. The collection of parameters used by the management template. Optional. Read-only.
     * @return array<TemplateParameter>|null
    */
    public function getParameters(): ?array {
        return $this->parameters;
    }

    /**
     * Gets the priority property value. 
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the provider property value. 
     * @return ManagementProvider|null
    */
    public function getProvider(): ?ManagementProvider {
        return $this->provider;
    }

    /**
     * Gets the userImpact property value. 
     * @return string|null
    */
    public function getUserImpact(): ?string {
        return $this->userImpact;
    }

    /**
     * Gets the version property value. 
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->version;
    }

    /**
     * Gets the workloadActions property value. The collection of workload actions associated with the management template. Optional. Read-only.
     * @return array<WorkloadAction>|null
    */
    public function getWorkloadActions(): ?array {
        return $this->workloadActions;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeStringValue('createdByUserId', $this->createdByUserId);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeCollectionOfObjectValues('informationLinks', $this->informationLinks);
        $writer->writeStringValue('lastActionByUserId', $this->lastActionByUserId);
        $writer->writeDateTimeValue('lastActionDateTime', $this->lastActionDateTime);
        $writer->writeCollectionOfObjectValues('managementTemplateCollections', $this->managementTemplateCollections);
        $writer->writeCollectionOfObjectValues('managementTemplateSteps', $this->managementTemplateSteps);
        $writer->writeCollectionOfObjectValues('parameters', $this->parameters);
        $writer->writeIntegerValue('priority', $this->priority);
        $writer->writeEnumValue('provider', $this->provider);
        $writer->writeStringValue('userImpact', $this->userImpact);
        $writer->writeIntegerValue('version', $this->version);
        $writer->writeCollectionOfObjectValues('workloadActions', $this->workloadActions);
    }

    /**
     * Sets the category property value. The management category for the management template. Possible values are: custom, devices, identity, unknownFutureValue. Required. Read-only.
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
     * Sets the description property value. The description for the management template. Optional. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for the management template. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the informationLinks property value. 
     *  @param array<ActionUrl>|null $value Value to set for the informationLinks property.
    */
    public function setInformationLinks(?array $value ): void {
        $this->informationLinks = $value;
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
     * Sets the managementTemplateCollections property value. 
     *  @param array<ManagementTemplateCollection>|null $value Value to set for the managementTemplateCollections property.
    */
    public function setManagementTemplateCollections(?array $value ): void {
        $this->managementTemplateCollections = $value;
    }

    /**
     * Sets the managementTemplateSteps property value. 
     *  @param array<ManagementTemplateStep>|null $value Value to set for the managementTemplateSteps property.
    */
    public function setManagementTemplateSteps(?array $value ): void {
        $this->managementTemplateSteps = $value;
    }

    /**
     * Sets the parameters property value. The collection of parameters used by the management template. Optional. Read-only.
     *  @param array<TemplateParameter>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value ): void {
        $this->parameters = $value;
    }

    /**
     * Sets the priority property value. 
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the provider property value. 
     *  @param ManagementProvider|null $value Value to set for the provider property.
    */
    public function setProvider(?ManagementProvider $value ): void {
        $this->provider = $value;
    }

    /**
     * Sets the userImpact property value. 
     *  @param string|null $value Value to set for the userImpact property.
    */
    public function setUserImpact(?string $value ): void {
        $this->userImpact = $value;
    }

    /**
     * Sets the version property value. 
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value ): void {
        $this->version = $value;
    }

    /**
     * Sets the workloadActions property value. The collection of workload actions associated with the management template. Optional. Read-only.
     *  @param array<WorkloadAction>|null $value Value to set for the workloadActions property.
    */
    public function setWorkloadActions(?array $value ): void {
        $this->workloadActions = $value;
    }

}
