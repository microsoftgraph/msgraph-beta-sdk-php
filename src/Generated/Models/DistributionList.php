<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class DistributionList extends OutlookItem implements Parsable 
{
    /**
     * Instantiates a new DistributionList and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.distributionList');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DistributionList
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DistributionList {
        return new DistributionList();
    }

    /**
     * Gets the displayName property value. The display name of the distribution list.
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
     * Gets the distributionListMembers property value. The expanded members of the distribution list. Each member contains detailed information including resolved email addresses. Read-only.
     * @return array<DistributionListMember>|null
    */
    public function getDistributionListMembers(): ?array {
        $val = $this->getBackingStore()->get('distributionListMembers');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, DistributionListMember::class);
            /** @var array<DistributionListMember>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'distributionListMembers'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'distributionListMembers' => fn(ParseNode $n) => $o->setDistributionListMembers($n->getCollectionOfObjectValues([DistributionListMember::class, 'createFromDiscriminatorValue'])),
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([Member::class, 'createFromDiscriminatorValue'])),
            'notes' => fn(ParseNode $n) => $o->setNotes($n->getStringValue()),
            'personIdentifier' => fn(ParseNode $n) => $o->setPersonIdentifier($n->getStringValue()),
            'singleValueExtendedProperties' => fn(ParseNode $n) => $o->setSingleValueExtendedProperties($n->getCollectionOfObjectValues([SingleValueLegacyExtendedProperty::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the members property value. The list of members in the distribution list. Not returned by default; use $select=members to include.
     * @return array<Member>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Member::class);
            /** @var array<Member>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
    }

    /**
     * Gets the notes property value. The notes property
     * @return string|null
    */
    public function getNotes(): ?string {
        $val = $this->getBackingStore()->get('notes');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notes'");
    }

    /**
     * Gets the personIdentifier property value. The personIdentifier property
     * @return string|null
    */
    public function getPersonIdentifier(): ?string {
        $val = $this->getBackingStore()->get('personIdentifier');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'personIdentifier'");
    }

    /**
     * Gets the singleValueExtendedProperties property value. The singleValueExtendedProperties property
     * @return array<SingleValueLegacyExtendedProperty>|null
    */
    public function getSingleValueExtendedProperties(): ?array {
        $val = $this->getBackingStore()->get('singleValueExtendedProperties');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, SingleValueLegacyExtendedProperty::class);
            /** @var array<SingleValueLegacyExtendedProperty>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'singleValueExtendedProperties'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeCollectionOfObjectValues('distributionListMembers', $this->getDistributionListMembers());
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeStringValue('notes', $this->getNotes());
        $writer->writeStringValue('personIdentifier', $this->getPersonIdentifier());
        $writer->writeCollectionOfObjectValues('singleValueExtendedProperties', $this->getSingleValueExtendedProperties());
    }

    /**
     * Sets the displayName property value. The display name of the distribution list.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the distributionListMembers property value. The expanded members of the distribution list. Each member contains detailed information including resolved email addresses. Read-only.
     * @param array<DistributionListMember>|null $value Value to set for the distributionListMembers property.
    */
    public function setDistributionListMembers(?array $value): void {
        $this->getBackingStore()->set('distributionListMembers', $value);
    }

    /**
     * Sets the members property value. The list of members in the distribution list. Not returned by default; use $select=members to include.
     * @param array<Member>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the notes property value. The notes property
     * @param string|null $value Value to set for the notes property.
    */
    public function setNotes(?string $value): void {
        $this->getBackingStore()->set('notes', $value);
    }

    /**
     * Sets the personIdentifier property value. The personIdentifier property
     * @param string|null $value Value to set for the personIdentifier property.
    */
    public function setPersonIdentifier(?string $value): void {
        $this->getBackingStore()->set('personIdentifier', $value);
    }

    /**
     * Sets the singleValueExtendedProperties property value. The singleValueExtendedProperties property
     * @param array<SingleValueLegacyExtendedProperty>|null $value Value to set for the singleValueExtendedProperties property.
    */
    public function setSingleValueExtendedProperties(?array $value): void {
        $this->getBackingStore()->set('singleValueExtendedProperties', $value);
    }

}
