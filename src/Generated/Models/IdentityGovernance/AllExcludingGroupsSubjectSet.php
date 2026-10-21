<?php

namespace Microsoft\Graph\Beta\Generated\Models\IdentityGovernance;

use Microsoft\Graph\Beta\Generated\Models\Group;
use Microsoft\Graph\Beta\Generated\Models\SubjectSet;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class AllExcludingGroupsSubjectSet extends SubjectSet implements Parsable 
{
    /**
     * Instantiates a new AllExcludingGroupsSubjectSet and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.identityGovernance.allExcludingGroupsSubjectSet');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AllExcludingGroupsSubjectSet
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AllExcludingGroupsSubjectSet {
        return new AllExcludingGroupsSubjectSet();
    }

    /**
     * Gets the excludedGroups property value. The excludedGroups property
     * @return array<Group>|null
    */
    public function getExcludedGroups(): ?array {
        $val = $this->getBackingStore()->get('excludedGroups');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Group::class);
            /** @var array<Group>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludedGroups'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'excludedGroups' => fn(ParseNode $n) => $o->setExcludedGroups($n->getCollectionOfObjectValues([Group::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('excludedGroups', $this->getExcludedGroups());
    }

    /**
     * Sets the excludedGroups property value. The excludedGroups property
     * @param array<Group>|null $value Value to set for the excludedGroups property.
    */
    public function setExcludedGroups(?array $value): void {
        $this->getBackingStore()->set('excludedGroups', $value);
    }

}
