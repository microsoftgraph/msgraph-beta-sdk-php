<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\ActionUrl;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplate extends Entity implements Parsable 
{
    /**
     * @var ManagementCategory|null $category The management category for the management template. Possible values are: custom, devices, identity, unknownFutureValue. Required. Read-only.
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
     * @var string|null $description The description for the management template. Optional. Read-only.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name for the management template. Required. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var array<ActionUrl>|null $informationLinks The informationLinks property
    */
    private ?array $informationLinks = null;
    
    /**
     * @var string|null $lastActionByUserId The lastActionByUserId property
    */
    private ?string $lastActionByUserId = null;
    
    /**
     * @var DateTime|null $lastActionDateTime The lastActionDateTime property
    */
    private ?DateTime $lastActionDateTime = null;
    
    /**
     * @var array<ManagementTemplateCollection>|null $managementTemplateCollections The managementTemplateCollections property
    */
    private ?array $managementTemplateCollections = null;
    
    /**
     * @var array<ManagementTemplateStep>|null $managementTemplateSteps The managementTemplateSteps property
    */
    private ?array $managementTemplateSteps = null;
    
    /**
     * @var array<TemplateParameter>|null $parameters The collection of parameters used by the management template. Optional. Read-only.
    */
    private ?array $parameters = null;
    
    /**
     * @var int|null $priority The priority property
    */
    private ?int $priority = null;
    
    /**
     * @var ManagementProvider|null $provider The provider property
    */
    private ?ManagementProvider $provider = null;
    
    /**
     * @var string|null $userImpact The userImpact property
    */
    private ?string $userImpact = null;
    
    /**
     * @var int|null $version The version property
    */
    private ?int $version = null;
    
    /**
     * @var array<WorkloadAction>|null $workloadActions The collection of workload actions associated with the management template. Optional. Read-only.
    */
    private ?array $workloadActions = null;
    
    /**
     * Instantiates a new managementTemplate and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.managementTemplate');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementTemplate
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplate {
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
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'category' => function (ParseNode $n) use ($o) { $o->setCategory($n->getEnumValue(ManagementCategory::class)); },
            'createdByUserId' => function (ParseNode $n) use ($o) { $o->setCreatedByUserId($n->getStringValue()); },
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'displayName' => function (ParseNode $n) use ($o) { $o->setDisplayName($n->getStringValue()); },
            'informationLinks' => function (ParseNode $n) use ($o) { $o->setInformationLinks($n->getCollectionOfObjectValues(array(ActionUrl::class, 'createFromDiscriminatorValue'))); },
            'lastActionByUserId' => function (ParseNode $n) use ($o) { $o->setLastActionByUserId($n->getStringValue()); },
            'lastActionDateTime' => function (ParseNode $n) use ($o) { $o->setLastActionDateTime($n->getDateTimeValue()); },
            'managementTemplateCollections' => function (ParseNode $n) use ($o) { $o->setManagementTemplateCollections($n->getCollectionOfObjectValues(array(ManagementTemplateCollection::class, 'createFromDiscriminatorValue'))); },
            'managementTemplateSteps' => function (ParseNode $n) use ($o) { $o->setManagementTemplateSteps($n->getCollectionOfObjectValues(array(ManagementTemplateStep::class, 'createFromDiscriminatorValue'))); },
            'parameters' => function (ParseNode $n) use ($o) { $o->setParameters($n->getCollectionOfObjectValues(array(TemplateParameter::class, 'createFromDiscriminatorValue'))); },
            'priority' => function (ParseNode $n) use ($o) { $o->setPriority($n->getIntegerValue()); },
            'provider' => function (ParseNode $n) use ($o) { $o->setProvider($n->getEnumValue(ManagementProvider::class)); },
            'userImpact' => function (ParseNode $n) use ($o) { $o->setUserImpact($n->getStringValue()); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getIntegerValue()); },
            'workloadActions' => function (ParseNode $n) use ($o) { $o->setWorkloadActions($n->getCollectionOfObjectValues(array(WorkloadAction::class, 'createFromDiscriminatorValue'))); },
        ]);
    }

    /**
     * Gets the informationLinks property value. The informationLinks property
     * @return array<ActionUrl>|null
    */
    public function getInformationLinks(): ?array {
        return $this->informationLinks;
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
     * Gets the managementTemplateCollections property value. The managementTemplateCollections property
     * @return array<ManagementTemplateCollection>|null
    */
    public function getManagementTemplateCollections(): ?array {
        return $this->managementTemplateCollections;
    }

    /**
     * Gets the managementTemplateSteps property value. The managementTemplateSteps property
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
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Gets the provider property value. The provider property
     * @return ManagementProvider|null
    */
    public function getProvider(): ?ManagementProvider {
        return $this->provider;
    }

    /**
     * Gets the userImpact property value. The userImpact property
     * @return string|null
    */
    public function getUserImpact(): ?string {
        return $this->userImpact;
    }

    /**
     * Gets the version property value. The version property
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
     * Sets the informationLinks property value. The informationLinks property
     *  @param array<ActionUrl>|null $value Value to set for the informationLinks property.
    */
    public function setInformationLinks(?array $value ): void {
        $this->informationLinks = $value;
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
     * Sets the managementTemplateCollections property value. The managementTemplateCollections property
     *  @param array<ManagementTemplateCollection>|null $value Value to set for the managementTemplateCollections property.
    */
    public function setManagementTemplateCollections(?array $value ): void {
        $this->managementTemplateCollections = $value;
    }

    /**
     * Sets the managementTemplateSteps property value. The managementTemplateSteps property
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
     * Sets the priority property value. The priority property
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

    /**
     * Sets the provider property value. The provider property
     *  @param ManagementProvider|null $value Value to set for the provider property.
    */
    public function setProvider(?ManagementProvider $value ): void {
        $this->provider = $value;
    }

    /**
     * Sets the userImpact property value. The userImpact property
     *  @param string|null $value Value to set for the userImpact property.
    */
    public function setUserImpact(?string $value ): void {
        $this->userImpact = $value;
    }

    /**
     * Sets the version property value. The version property
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
