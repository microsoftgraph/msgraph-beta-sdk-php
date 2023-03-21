<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AggregatedInboundStatistics implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new aggregatedInboundStatistics and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AggregatedInboundStatistics
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AggregatedInboundStatistics {
        return new AggregatedInboundStatistics();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the errors property value. The aggregate count of errors encountered by activities during this run.
     * @return int|null
    */
    public function getErrors(): ?int {
        return $this->getBackingStore()->get('errors');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'errors' => fn(ParseNode $n) => $o->setErrors($n->getIntegerValue()),
            'groups' => fn(ParseNode $n) => $o->setGroups($n->getIntegerValue()),
            'matchedPeopleByRole' => fn(ParseNode $n) => $o->setMatchedPeopleByRole($n->getCollectionOfObjectValues([IndustryDataRunRoleCountMetric::class, 'createFromDiscriminatorValue'])),
            'memberships' => fn(ParseNode $n) => $o->setMemberships($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'organizations' => fn(ParseNode $n) => $o->setOrganizations($n->getIntegerValue()),
            'people' => fn(ParseNode $n) => $o->setPeople($n->getIntegerValue()),
            'unmatchedPeopleByRole' => fn(ParseNode $n) => $o->setUnmatchedPeopleByRole($n->getCollectionOfObjectValues([IndustryDataRunRoleCountMetric::class, 'createFromDiscriminatorValue'])),
            'warnings' => fn(ParseNode $n) => $o->setWarnings($n->getIntegerValue()),
        ];
    }

    /**
     * Gets the groups property value. The aggregate count of active inbound groups processed during the run.
     * @return int|null
    */
    public function getGroups(): ?int {
        return $this->getBackingStore()->get('groups');
    }

    /**
     * Gets the matchedPeopleByRole property value. The aggregate count of active people matched to an Azure Active Directory user, by role.
     * @return array<IndustryDataRunRoleCountMetric>|null
    */
    public function getMatchedPeopleByRole(): ?array {
        return $this->getBackingStore()->get('matchedPeopleByRole');
    }

    /**
     * Gets the memberships property value. The aggregate count of active inbound memberships processed during the run.
     * @return int|null
    */
    public function getMemberships(): ?int {
        return $this->getBackingStore()->get('memberships');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
    }

    /**
     * Gets the organizations property value. The aggregate count of active inbound organizations processed during the run.
     * @return int|null
    */
    public function getOrganizations(): ?int {
        return $this->getBackingStore()->get('organizations');
    }

    /**
     * Gets the people property value. The aggregate count of active inbound people processed during the run.
     * @return int|null
    */
    public function getPeople(): ?int {
        return $this->getBackingStore()->get('people');
    }

    /**
     * Gets the unmatchedPeopleByRole property value. The aggregate count of active people not matched to an Azure Active Directory user, by role.
     * @return array<IndustryDataRunRoleCountMetric>|null
    */
    public function getUnmatchedPeopleByRole(): ?array {
        return $this->getBackingStore()->get('unmatchedPeopleByRole');
    }

    /**
     * Gets the warnings property value. The aggregate count of warnings generated by activities during this run.
     * @return int|null
    */
    public function getWarnings(): ?int {
        return $this->getBackingStore()->get('warnings');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the errors property value. The aggregate count of errors encountered by activities during this run.
     * @param int|null $value Value to set for the errors property.
    */
    public function setErrors(?int $value): void {
        $this->getBackingStore()->set('errors', $value);
    }

    /**
     * Sets the groups property value. The aggregate count of active inbound groups processed during the run.
     * @param int|null $value Value to set for the groups property.
    */
    public function setGroups(?int $value): void {
        $this->getBackingStore()->set('groups', $value);
    }

    /**
     * Sets the matchedPeopleByRole property value. The aggregate count of active people matched to an Azure Active Directory user, by role.
     * @param array<IndustryDataRunRoleCountMetric>|null $value Value to set for the matchedPeopleByRole property.
    */
    public function setMatchedPeopleByRole(?array $value): void {
        $this->getBackingStore()->set('matchedPeopleByRole', $value);
    }

    /**
     * Sets the memberships property value. The aggregate count of active inbound memberships processed during the run.
     * @param int|null $value Value to set for the memberships property.
    */
    public function setMemberships(?int $value): void {
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
     * Sets the organizations property value. The aggregate count of active inbound organizations processed during the run.
     * @param int|null $value Value to set for the organizations property.
    */
    public function setOrganizations(?int $value): void {
        $this->getBackingStore()->set('organizations', $value);
    }

    /**
     * Sets the people property value. The aggregate count of active inbound people processed during the run.
     * @param int|null $value Value to set for the people property.
    */
    public function setPeople(?int $value): void {
        $this->getBackingStore()->set('people', $value);
    }

    /**
     * Sets the unmatchedPeopleByRole property value. The aggregate count of active people not matched to an Azure Active Directory user, by role.
     * @param array<IndustryDataRunRoleCountMetric>|null $value Value to set for the unmatchedPeopleByRole property.
    */
    public function setUnmatchedPeopleByRole(?array $value): void {
        $this->getBackingStore()->set('unmatchedPeopleByRole', $value);
    }

    /**
     * Sets the warnings property value. The aggregate count of warnings generated by activities during this run.
     * @param int|null $value Value to set for the warnings property.
    */
    public function setWarnings(?int $value): void {
        $this->getBackingStore()->set('warnings', $value);
    }

}
