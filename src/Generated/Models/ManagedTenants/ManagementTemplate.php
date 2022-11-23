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
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplate {
        return new ManagementTemplate();
    }

    /**
     * Gets the category property value. The management category for the management template. Possible values are: custom, devices, identity, unknownFutureValue. Required. Read-only.
     * @return ManagementCategory|null
    */
    public function getCategory(): ?ManagementCategory {
        return $this->getBackingStore()->get('category');
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->getBackingStore()->get('createdByUserId');
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. The description for the management template. Optional. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
    }

    /**
     * Gets the displayName property value. The display name for the management template. Required. Read-only.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->getBackingStore()->get('displayName');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(ManagementCategory::class)),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'informationLinks' => fn(ParseNode $n) => $o->setInformationLinks($n->getCollectionOfObjectValues([ActionUrl::class, 'createFromDiscriminatorValue'])),
            'lastActionByUserId' => fn(ParseNode $n) => $o->setLastActionByUserId($n->getStringValue()),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'managementTemplateCollections' => fn(ParseNode $n) => $o->setManagementTemplateCollections($n->getCollectionOfObjectValues([ManagementTemplateCollection::class, 'createFromDiscriminatorValue'])),
            'managementTemplateSteps' => fn(ParseNode $n) => $o->setManagementTemplateSteps($n->getCollectionOfObjectValues([ManagementTemplateStep::class, 'createFromDiscriminatorValue'])),
            'parameters' => fn(ParseNode $n) => $o->setParameters($n->getCollectionOfObjectValues([TemplateParameter::class, 'createFromDiscriminatorValue'])),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'provider' => fn(ParseNode $n) => $o->setProvider($n->getEnumValue(ManagementProvider::class)),
            'userImpact' => fn(ParseNode $n) => $o->setUserImpact($n->getStringValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
            'workloadActions' => fn(ParseNode $n) => $o->setWorkloadActions($n->getCollectionOfObjectValues([WorkloadAction::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the informationLinks property value. The informationLinks property
     * @return array<ActionUrl>|null
    */
    public function getInformationLinks(): ?array {
        return $this->getBackingStore()->get('informationLinks');
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->getBackingStore()->get('lastActionByUserId');
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastActionDateTime');
    }

    /**
     * Gets the managementTemplateCollections property value. The managementTemplateCollections property
     * @return array<ManagementTemplateCollection>|null
    */
    public function getManagementTemplateCollections(): ?array {
        return $this->getBackingStore()->get('managementTemplateCollections');
    }

    /**
     * Gets the managementTemplateSteps property value. The managementTemplateSteps property
     * @return array<ManagementTemplateStep>|null
    */
    public function getManagementTemplateSteps(): ?array {
        return $this->getBackingStore()->get('managementTemplateSteps');
    }

    /**
     * Gets the parameters property value. The collection of parameters used by the management template. Optional. Read-only.
     * @return array<TemplateParameter>|null
    */
    public function getParameters(): ?array {
        return $this->getBackingStore()->get('parameters');
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the provider property value. The provider property
     * @return ManagementProvider|null
    */
    public function getProvider(): ?ManagementProvider {
        return $this->getBackingStore()->get('provider');
    }

    /**
     * Gets the userImpact property value. The userImpact property
     * @return string|null
    */
    public function getUserImpact(): ?string {
        return $this->getBackingStore()->get('userImpact');
    }

    /**
     * Gets the version property value. The version property
     * @return int|null
    */
    public function getVersion(): ?int {
        return $this->getBackingStore()->get('version');
    }

    /**
     * Gets the workloadActions property value. The collection of workload actions associated with the management template. Optional. Read-only.
     * @return array<WorkloadAction>|null
    */
    public function getWorkloadActions(): ?array {
        return $this->getBackingStore()->get('workloadActions');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('informationLinks', $this->getInformationLinks());
        $writer->writeStringValue('lastActionByUserId', $this->getLastActionByUserId());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeCollectionOfObjectValues('managementTemplateCollections', $this->getManagementTemplateCollections());
        $writer->writeCollectionOfObjectValues('managementTemplateSteps', $this->getManagementTemplateSteps());
        $writer->writeCollectionOfObjectValues('parameters', $this->getParameters());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeEnumValue('provider', $this->getProvider());
        $writer->writeStringValue('userImpact', $this->getUserImpact());
        $writer->writeIntegerValue('version', $this->getVersion());
        $writer->writeCollectionOfObjectValues('workloadActions', $this->getWorkloadActions());
    }

    /**
     * Sets the category property value. The management category for the management template. Possible values are: custom, devices, identity, unknownFutureValue. Required. Read-only.
     *  @param ManagementCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ManagementCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     *  @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->getBackingStore()->set('createdByUserId', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description for the management template. Optional. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name for the management template. Required. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the informationLinks property value. The informationLinks property
     *  @param array<ActionUrl>|null $value Value to set for the informationLinks property.
    */
    public function setInformationLinks(?array $value): void {
        $this->getBackingStore()->set('informationLinks', $value);
    }

    /**
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     *  @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value): void {
        $this->getBackingStore()->set('lastActionByUserId', $value);
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the managementTemplateCollections property value. The managementTemplateCollections property
     *  @param array<ManagementTemplateCollection>|null $value Value to set for the managementTemplateCollections property.
    */
    public function setManagementTemplateCollections(?array $value): void {
        $this->getBackingStore()->set('managementTemplateCollections', $value);
    }

    /**
     * Sets the managementTemplateSteps property value. The managementTemplateSteps property
     *  @param array<ManagementTemplateStep>|null $value Value to set for the managementTemplateSteps property.
    */
    public function setManagementTemplateSteps(?array $value): void {
        $this->getBackingStore()->set('managementTemplateSteps', $value);
    }

    /**
     * Sets the parameters property value. The collection of parameters used by the management template. Optional. Read-only.
     *  @param array<TemplateParameter>|null $value Value to set for the parameters property.
    */
    public function setParameters(?array $value): void {
        $this->getBackingStore()->set('parameters', $value);
    }

    /**
     * Sets the priority property value. The priority property
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the provider property value. The provider property
     *  @param ManagementProvider|null $value Value to set for the provider property.
    */
    public function setProvider(?ManagementProvider $value): void {
        $this->getBackingStore()->set('provider', $value);
    }

    /**
     * Sets the userImpact property value. The userImpact property
     *  @param string|null $value Value to set for the userImpact property.
    */
    public function setUserImpact(?string $value): void {
        $this->getBackingStore()->set('userImpact', $value);
    }

    /**
     * Sets the version property value. The version property
     *  @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

    /**
     * Sets the workloadActions property value. The collection of workload actions associated with the management template. Optional. Read-only.
     *  @param array<WorkloadAction>|null $value Value to set for the workloadActions property.
    */
    public function setWorkloadActions(?array $value): void {
        $this->getBackingStore()->set('workloadActions', $value);
    }

}
