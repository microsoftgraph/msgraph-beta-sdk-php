<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class EscapedCase extends CaseManagementEntity implements Parsable 
{
    /**
     * Instantiates a new EscapedCase and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.case');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return EscapedCase
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): EscapedCase {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.security.caseManagement.exposureCase': return new ExposureCase();
                case '#microsoft.graph.security.caseManagement.genericCase': return new GenericCase();
                case '#microsoft.graph.security.caseManagement.incidentCase': return new IncidentCase();
            }
        }
        return new EscapedCase();
    }

    /**
     * Gets the activities property value. The timeline of comments and audit events associated with the case. Supports $expand.
     * @return array<Activity>|null
    */
    public function getActivities(): ?array {
        $val = $this->getBackingStore()->get('activities');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Activity::class);
            /** @var array<Activity>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'activities'");
    }

    /**
     * Gets the attachments property value. Evidence files and metadata associated with the case. Supports $expand.
     * @return array<Attachment>|null
    */
    public function getAttachments(): ?array {
        $val = $this->getBackingStore()->get('attachments');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Attachment::class);
            /** @var array<Attachment>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attachments'");
    }

    /**
     * Gets the customFields property value. Tenant-defined custom field values keyed by the exact displayName of each custom field definition. The property and its dynamic fields don't support $filter.
     * @return CustomFieldValues|null
    */
    public function getCustomFields(): ?CustomFieldValues {
        $val = $this->getBackingStore()->get('customFields');
        if (is_null($val) || $val instanceof CustomFieldValues) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'customFields'");
    }

    /**
     * Gets the displayName property value. The display name of the case. Supports $filter and $orderby.
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
            'activities' => fn(ParseNode $n) => $o->setActivities($n->getCollectionOfObjectValues([Activity::class, 'createFromDiscriminatorValue'])),
            'attachments' => fn(ParseNode $n) => $o->setAttachments($n->getCollectionOfObjectValues([Attachment::class, 'createFromDiscriminatorValue'])),
            'customFields' => fn(ParseNode $n) => $o->setCustomFields($n->getObjectValue([CustomFieldValues::class, 'createFromDiscriminatorValue'])),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'relations' => fn(ParseNode $n) => $o->setRelations($n->getCollectionOfObjectValues([Relation::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getStringValue()),
            'tasks' => fn(ParseNode $n) => $o->setTasks($n->getCollectionOfObjectValues([Task::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the relations property value. Links from the case to related security resources. Supports $expand.
     * @return array<Relation>|null
    */
    public function getRelations(): ?array {
        $val = $this->getBackingStore()->get('relations');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Relation::class);
            /** @var array<Relation>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relations'");
    }

    /**
     * Gets the status property value. The tenant-defined lifecycle status of the case. Use a displayName value returned in the status tree by List statuses from /security/caseManagement/caseTypeConfigurations/genericCase/statuses or /security/caseManagement/caseTypeConfigurations/incidentCase/statuses, depending on the case type. Supports $filter (eq).
     * @return string|null
    */
    public function getStatus(): ?string {
        $val = $this->getBackingStore()->get('status');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'status'");
    }

    /**
     * Gets the tasks property value. Tasks used to track work required to resolve the case. Supports $expand.
     * @return array<Task>|null
    */
    public function getTasks(): ?array {
        $val = $this->getBackingStore()->get('tasks');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Task::class);
            /** @var array<Task>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tasks'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('activities', $this->getActivities());
        $writer->writeCollectionOfObjectValues('attachments', $this->getAttachments());
        $writer->writeObjectValue('customFields', $this->getCustomFields());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('relations', $this->getRelations());
        $writer->writeStringValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('tasks', $this->getTasks());
    }

    /**
     * Sets the activities property value. The timeline of comments and audit events associated with the case. Supports $expand.
     * @param array<Activity>|null $value Value to set for the activities property.
    */
    public function setActivities(?array $value): void {
        $this->getBackingStore()->set('activities', $value);
    }

    /**
     * Sets the attachments property value. Evidence files and metadata associated with the case. Supports $expand.
     * @param array<Attachment>|null $value Value to set for the attachments property.
    */
    public function setAttachments(?array $value): void {
        $this->getBackingStore()->set('attachments', $value);
    }

    /**
     * Sets the customFields property value. Tenant-defined custom field values keyed by the exact displayName of each custom field definition. The property and its dynamic fields don't support $filter.
     * @param CustomFieldValues|null $value Value to set for the customFields property.
    */
    public function setCustomFields(?CustomFieldValues $value): void {
        $this->getBackingStore()->set('customFields', $value);
    }

    /**
     * Sets the displayName property value. The display name of the case. Supports $filter and $orderby.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the relations property value. Links from the case to related security resources. Supports $expand.
     * @param array<Relation>|null $value Value to set for the relations property.
    */
    public function setRelations(?array $value): void {
        $this->getBackingStore()->set('relations', $value);
    }

    /**
     * Sets the status property value. The tenant-defined lifecycle status of the case. Use a displayName value returned in the status tree by List statuses from /security/caseManagement/caseTypeConfigurations/genericCase/statuses or /security/caseManagement/caseTypeConfigurations/incidentCase/statuses, depending on the case type. Supports $filter (eq).
     * @param string|null $value Value to set for the status property.
    */
    public function setStatus(?string $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the tasks property value. Tasks used to track work required to resolve the case. Supports $expand.
     * @param array<Task>|null $value Value to set for the tasks property.
    */
    public function setTasks(?array $value): void {
        $this->getBackingStore()->set('tasks', $value);
    }

}
