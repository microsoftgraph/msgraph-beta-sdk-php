<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class InboundActivityResults extends IndustryDataActivityStatistics implements Parsable 
{
    /**
     * Instantiates a new inboundActivityResults and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.industryData.inboundActivityResults');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return InboundActivityResults
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): InboundActivityResults {
        return new InboundActivityResults();
    }

    /**
     * Gets the errors property value. Number of errors encountered while processing the inbound flow.
     * @return int|null
    */
    public function getErrors(): ?int {
        $val = $this->getBackingStore()->get('errors');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errors'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getIntegerValue()),
            'groups' => fn(ParseNode $n) => $o->setGroups($n->getObjectValue([IndustryDataRunEntityCountMetric::class, 'createFromDiscriminatorValue'])),
            'matchedPeopleByRole' => fn(ParseNode $n) => $o->setMatchedPeopleByRole($n->getCollectionOfObjectValues([IndustryDataRunRoleCountMetric::class, 'createFromDiscriminatorValue'])),
            'memberships' => fn(ParseNode $n) => $o->setMemberships($n->getObjectValue([IndustryDataRunEntityCountMetric::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'organizations' => fn(ParseNode $n) => $o->setOrganizations($n->getObjectValue([IndustryDataRunEntityCountMetric::class, 'createFromDiscriminatorValue'])),
            'people' => fn(ParseNode $n) => $o->setPeople($n->getObjectValue([IndustryDataRunEntityCountMetric::class, 'createFromDiscriminatorValue'])),
            'unmatchedPeopleByRole' => fn(ParseNode $n) => $o->setUnmatchedPeopleByRole($n->getCollectionOfObjectValues([IndustryDataRunRoleCountMetric::class, 'createFromDiscriminatorValue'])),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the groups property value. Counts of active and inactive groups processed by the inbound flow.
     * @return IndustryDataRunEntityCountMetric|null
    */
    public function getGroups(): ?IndustryDataRunEntityCountMetric {
        $val = $this->getBackingStore()->get('groups');
        if (is_null($val) || $val instanceof IndustryDataRunEntityCountMetric) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groups'");
    }

    /**
     * Gets the matchedPeopleByRole property value. Number of people matched to an Azure Active Directory user, by role.
     * @return array<IndustryDataRunRoleCountMetric>|null
    */
    public function getMatchedPeopleByRole(): ?array {
        $val = $this->getBackingStore()->get('matchedPeopleByRole');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IndustryDataRunRoleCountMetric::class);
            /** @var array<IndustryDataRunRoleCountMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'matchedPeopleByRole'");
    }

    /**
     * Gets the memberships property value. Counts of active and inactive memberships processed by the inbound flow.
     * @return IndustryDataRunEntityCountMetric|null
    */
    public function getMemberships(): ?IndustryDataRunEntityCountMetric {
        $val = $this->getBackingStore()->get('memberships');
        if (is_null($val) || $val instanceof IndustryDataRunEntityCountMetric) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'memberships'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the organizations property value. Counts of active and inactive organizations processed by the inbound flow.
     * @return IndustryDataRunEntityCountMetric|null
    */
    public function getOrganizations(): ?IndustryDataRunEntityCountMetric {
        $val = $this->getBackingStore()->get('organizations');
        if (is_null($val) || $val instanceof IndustryDataRunEntityCountMetric) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizations'");
    }

    /**
     * Gets the people property value. Counts of active and inactive people processed by the inbound flow.
     * @return IndustryDataRunEntityCountMetric|null
    */
    public function getPeople(): ?IndustryDataRunEntityCountMetric {
        $val = $this->getBackingStore()->get('people');
        if (is_null($val) || $val instanceof IndustryDataRunEntityCountMetric) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'people'");
    }

    /**
     * Gets the unmatchedPeopleByRole property value. Number of people not matched to an Azure Active Directory user, by role.
     * @return array<IndustryDataRunRoleCountMetric>|null
    */
    public function getUnmatchedPeopleByRole(): ?array {
        $val = $this->getBackingStore()->get('unmatchedPeopleByRole');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, IndustryDataRunRoleCountMetric::class);
            /** @var array<IndustryDataRunRoleCountMetric>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unmatchedPeopleByRole'");
    }

    /**
     * Gets the warnings property value. Number of warnings encountered while processing the inbound flow.
     * @return int|null
    */
    public function getWarnings(): ?int {
        $val = $this->getBackingStore()->get('warnings');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'warnings'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
    }

    /**
     * Sets the errors property value. Number of errors encountered while processing the inbound flow.
     * @param int|null $value Value to set for the errors property.
    */
    public function setErrors(?int $value): void {
        $this->getBackingStore()->set('errors', $value);
    }

    /**
     * Sets the groups property value. Counts of active and inactive groups processed by the inbound flow.
     * @param IndustryDataRunEntityCountMetric|null $value Value to set for the groups property.
    */
    public function setGroups(?IndustryDataRunEntityCountMetric $value): void {
        $this->getBackingStore()->set('groups', $value);
    }

    /**
     * Sets the matchedPeopleByRole property value. Number of people matched to an Azure Active Directory user, by role.
     * @param array<IndustryDataRunRoleCountMetric>|null $value Value to set for the matchedPeopleByRole property.
    */
    public function setMatchedPeopleByRole(?array $value): void {
        $this->getBackingStore()->set('matchedPeopleByRole', $value);
    }

    /**
     * Sets the memberships property value. Counts of active and inactive memberships processed by the inbound flow.
     * @param IndustryDataRunEntityCountMetric|null $value Value to set for the memberships property.
    */
    public function setMemberships(?IndustryDataRunEntityCountMetric $value): void {
        $this->getBackingStore()->set('memberships', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the organizations property value. Counts of active and inactive organizations processed by the inbound flow.
     * @param IndustryDataRunEntityCountMetric|null $value Value to set for the organizations property.
    */
    public function setOrganizations(?IndustryDataRunEntityCountMetric $value): void {
        $this->getBackingStore()->set('organizations', $value);
    }

    /**
     * Sets the people property value. Counts of active and inactive people processed by the inbound flow.
     * @param IndustryDataRunEntityCountMetric|null $value Value to set for the people property.
    */
    public function setPeople(?IndustryDataRunEntityCountMetric $value): void {
        $this->getBackingStore()->set('people', $value);
    }

    /**
     * Sets the unmatchedPeopleByRole property value. Number of people not matched to an Azure Active Directory user, by role.
     * @param array<IndustryDataRunRoleCountMetric>|null $value Value to set for the unmatchedPeopleByRole property.
    */
    public function setUnmatchedPeopleByRole(?array $value): void {
        $this->getBackingStore()->set('unmatchedPeopleByRole', $value);
    }

    /**
     * Sets the warnings property value. Number of warnings encountered while processing the inbound flow.
     * @param int|null $value Value to set for the warnings property.
    */
    public function setWarnings(?int $value): void {
        $this->getBackingStore()->set('warnings', $value);
    }

}
