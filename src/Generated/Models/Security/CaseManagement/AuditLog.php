<?php

namespace Microsoft\Graph\Beta\Generated\Models\Security\CaseManagement;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AuditLog extends Activity implements Parsable 
{
    /**
     * Instantiates a new AuditLog and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.security.caseManagement.auditLog');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuditLog
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuditLog {
        return new AuditLog();
    }

    /**
     * Gets the action property value. The action property
     * @return AuditAction|null
    */
    public function getAction(): ?AuditAction {
        $val = $this->getBackingStore()->get('action');
        if (is_null($val) || $val instanceof AuditAction) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'action'");
    }

    /**
     * Gets the details property value. The target resource details for the audit activity.
     * @return ActivityResourceDetails|null
    */
    public function getDetails(): ?ActivityResourceDetails {
        $val = $this->getBackingStore()->get('details');
        if (is_null($val) || $val instanceof ActivityResourceDetails) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'details'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'action' => fn(ParseNode $n) => $o->setAction($n->getEnumValue(AuditAction::class)),
            'details' => fn(ParseNode $n) => $o->setDetails($n->getObjectValue([ActivityResourceDetails::class, 'createFromDiscriminatorValue'])),
            'modifiedProperties' => fn(ParseNode $n) => $o->setModifiedProperties($n->getCollectionOfObjectValues([ModifiedProperty::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the modifiedProperties property value. The collection of property changes recorded in the audit log. Supports $filter.
     * @return array<ModifiedProperty>|null
    */
    public function getModifiedProperties(): ?array {
        $val = $this->getBackingStore()->get('modifiedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ModifiedProperty::class);
            /** @var array<ModifiedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'modifiedProperties'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('action', $this->getAction());
        $writer->writeObjectValue('details', $this->getDetails());
        $writer->writeCollectionOfObjectValues('modifiedProperties', $this->getModifiedProperties());
    }

    /**
     * Sets the action property value. The action property
     * @param AuditAction|null $value Value to set for the action property.
    */
    public function setAction(?AuditAction $value): void {
        $this->getBackingStore()->set('action', $value);
    }

    /**
     * Sets the details property value. The target resource details for the audit activity.
     * @param ActivityResourceDetails|null $value Value to set for the details property.
    */
    public function setDetails(?ActivityResourceDetails $value): void {
        $this->getBackingStore()->set('details', $value);
    }

    /**
     * Sets the modifiedProperties property value. The collection of property changes recorded in the audit log. Supports $filter.
     * @param array<ModifiedProperty>|null $value Value to set for the modifiedProperties property.
    */
    public function setModifiedProperties(?array $value): void {
        $this->getBackingStore()->set('modifiedProperties', $value);
    }

}
