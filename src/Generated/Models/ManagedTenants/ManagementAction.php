<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ManagementAction extends Entity implements Parsable 
{
    /**
     * Instantiates a new ManagementAction and sets the default values.
    */
    public function __construct() {
        parent::__construct();
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
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || $val instanceof ManagementCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the description property value. The description for the management action. Optional. Read-only.
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
     * Gets the displayName property value. The display name for the management action. Optional. Read-only.
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
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
        $val = $this->getBackingStore()->get('referenceTemplateId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referenceTemplateId'");
    }

    /**
     * Gets the referenceTemplateVersion property value. The referenceTemplateVersion property
     * @return int|null
    */
    public function getReferenceTemplateVersion(): ?int {
        $val = $this->getBackingStore()->get('referenceTemplateVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'referenceTemplateVersion'");
    }

    /**
     * Gets the workloadActions property value. The collection of workload actions associated with the management action. Required. Read-only.
     * @return array<WorkloadAction>|null
    */
    public function getWorkloadActions(): ?array {
        $val = $this->getBackingStore()->get('workloadActions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, WorkloadAction::class);
            /** @var array<WorkloadAction>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'workloadActions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('referenceTemplateId', $this->getReferenceTemplateId());
        $writer->writeIntegerValue('referenceTemplateVersion', $this->getReferenceTemplateVersion());
        $writer->writeCollectionOfObjectValues('workloadActions', $this->getWorkloadActions());
    }

    /**
     * Sets the category property value. The category property
     * @param ManagementCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ManagementCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the description property value. The description for the management action. Optional. Read-only.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The display name for the management action. Optional. Read-only.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the referenceTemplateId property value. The reference for the management template used to generate the management action. Required. Read-only.
     * @param string|null $value Value to set for the referenceTemplateId property.
    */
    public function setReferenceTemplateId(?string $value): void {
        $this->getBackingStore()->set('referenceTemplateId', $value);
    }

    /**
     * Sets the referenceTemplateVersion property value. The referenceTemplateVersion property
     * @param int|null $value Value to set for the referenceTemplateVersion property.
    */
    public function setReferenceTemplateVersion(?int $value): void {
        $this->getBackingStore()->set('referenceTemplateVersion', $value);
    }

    /**
     * Sets the workloadActions property value. The collection of workload actions associated with the management action. Required. Read-only.
     * @param array<WorkloadAction>|null $value Value to set for the workloadActions property.
    */
    public function setWorkloadActions(?array $value): void {
        $this->getBackingStore()->set('workloadActions', $value);
    }

}
