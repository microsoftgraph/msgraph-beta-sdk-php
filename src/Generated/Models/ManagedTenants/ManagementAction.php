<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementAction extends Entity implements Parsable 
{
    /**
     * @var ManagementCategory|null $category The category property
    */
    private ?ManagementCategory $category = null;
    
    /**
     * @var string|null $description The description for the management action. Optional. Read-only.
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName The display name for the management action. Optional. Read-only.
    */
    private ?string $displayName = null;
    
    /**
     * @var string|null $referenceTemplateId The reference for the management template used to generate the management action. Required. Read-only.
    */
    private ?string $referenceTemplateId = null;
    
    /**
     * @var int|null $referenceTemplateVersion The referenceTemplateVersion property
    */
    private ?int $referenceTemplateVersion = null;
    
    /**
     * @var array<WorkloadAction>|null $workloadActions The collection of workload actions associated with the management action. Required. Read-only.
    */
    private ?array $workloadActions = null;
    
    /**
     * Instantiates a new managementAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedTenants.managementAction');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementAction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementAction {
        return new ManagementAction();
    }

    /**
     * Gets the category property value. The category property
     * @return ManagementCategory|null
    */
    public function getCategory(): ?ManagementCategory {
        return $this->category;
    }

    /**
     * Gets the description property value. The description for the management action. Optional. Read-only.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. The display name for the management action. Optional. Read-only.
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
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(ManagementCategory::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'referenceTemplateId' => fn(ParseNode $n) => $o->setReferenceTemplateId($n->getStringValue()),
            'referenceTemplateVersion' => fn(ParseNode $n) => $o->setReferenceTemplateVersion($n->getIntegerValue()),
            'workloadActions' => fn(ParseNode $n) => $o->setWorkloadActions($n->getCollectionOfObjectValues([WorkloadAction::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the referenceTemplateId property value. The reference for the management template used to generate the management action. Required. Read-only.
     * @return string|null
    */
    public function getReferenceTemplateId(): ?string {
        return $this->referenceTemplateId;
    }

    /**
     * Gets the referenceTemplateVersion property value. The referenceTemplateVersion property
     * @return int|null
    */
    public function getReferenceTemplateVersion(): ?int {
        return $this->referenceTemplateVersion;
    }

    /**
     * Gets the workloadActions property value. The collection of workload actions associated with the management action. Required. Read-only.
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
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('referenceTemplateId', $this->referenceTemplateId);
        $writer->writeIntegerValue('referenceTemplateVersion', $this->referenceTemplateVersion);
        $writer->writeCollectionOfObjectValues('workloadActions', $this->workloadActions);
    }

    /**
     * Sets the category property value. The category property
     *  @param ManagementCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ManagementCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the description property value. The description for the management action. Optional. Read-only.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. The display name for the management action. Optional. Read-only.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the referenceTemplateId property value. The reference for the management template used to generate the management action. Required. Read-only.
     *  @param string|null $value Value to set for the referenceTemplateId property.
    */
    public function setReferenceTemplateId(?string $value ): void {
        $this->referenceTemplateId = $value;
    }

    /**
     * Sets the referenceTemplateVersion property value. The referenceTemplateVersion property
     *  @param int|null $value Value to set for the referenceTemplateVersion property.
    */
    public function setReferenceTemplateVersion(?int $value ): void {
        $this->referenceTemplateVersion = $value;
    }

    /**
     * Sets the workloadActions property value. The collection of workload actions associated with the management action. Required. Read-only.
     *  @param array<WorkloadAction>|null $value Value to set for the workloadActions property.
    */
    public function setWorkloadActions(?array $value ): void {
        $this->workloadActions = $value;
    }

}
