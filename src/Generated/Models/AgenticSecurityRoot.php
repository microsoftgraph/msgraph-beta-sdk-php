<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Container for agentic security playbook definitions and sessions.
*/
class AgenticSecurityRoot extends Entity implements Parsable 
{
    /**
     * Instantiates a new AgenticSecurityRoot and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AgenticSecurityRoot
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AgenticSecurityRoot {
        return new AgenticSecurityRoot();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'playbookDefinitions' => fn(ParseNode $n) => $o->setPlaybookDefinitions($n->getCollectionOfObjectValues([PlaybookDefinition::class, 'createFromDiscriminatorValue'])),
            'sessions' => fn(ParseNode $n) => $o->setSessions($n->getCollectionOfObjectValues([InvestigationSession::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the playbookDefinitions property value. The read-only playbook catalog. Supports list and keyed GET with $select. Doesn't support $filter, $orderby, $search, $expand, $count, $top, $skip, or delta tracking.
     * @return array<PlaybookDefinition>|null
    */
    public function getPlaybookDefinitions(): ?array {
        $val = $this->getBackingStore()->get('playbookDefinitions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, PlaybookDefinition::class);
            /** @var array<PlaybookDefinition>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'playbookDefinitions'");
    }

    /**
     * Gets the sessions property value. The agentic sessions visible to the caller. Supports list with $filter on status (eq, or, in), $top, and $select; session creation; and keyed reads. Doesn't support $count, $orderby, $search, $expand, $skip, or delta tracking.
     * @return array<InvestigationSession>|null
    */
    public function getSessions(): ?array {
        $val = $this->getBackingStore()->get('sessions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, InvestigationSession::class);
            /** @var array<InvestigationSession>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sessions'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('playbookDefinitions', $this->getPlaybookDefinitions());
        $writer->writeCollectionOfObjectValues('sessions', $this->getSessions());
    }

    /**
     * Sets the playbookDefinitions property value. The read-only playbook catalog. Supports list and keyed GET with $select. Doesn't support $filter, $orderby, $search, $expand, $count, $top, $skip, or delta tracking.
     * @param array<PlaybookDefinition>|null $value Value to set for the playbookDefinitions property.
    */
    public function setPlaybookDefinitions(?array $value): void {
        $this->getBackingStore()->set('playbookDefinitions', $value);
    }

    /**
     * Sets the sessions property value. The agentic sessions visible to the caller. Supports list with $filter on status (eq, or, in), $top, and $select; session creation; and keyed reads. Doesn't support $count, $orderby, $search, $expand, $skip, or delta tracking.
     * @param array<InvestigationSession>|null $value Value to set for the sessions property.
    */
    public function setSessions(?array $value): void {
        $this->getBackingStore()->set('sessions', $value);
    }

}
