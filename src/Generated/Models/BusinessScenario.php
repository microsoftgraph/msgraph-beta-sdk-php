<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class BusinessScenario extends Entity implements Parsable 
{
    /**
     * Instantiates a new BusinessScenario and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return BusinessScenario
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): BusinessScenario {
        return new BusinessScenario();
    }

    /**
     * Gets the createdBy property value. The createdBy property
     * @return IdentitySet|null
    */
    public function getCreatedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('createdBy');
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the displayName property value. The displayName property
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
            'createdBy' => fn(ParseNode $n) => $o->setCreatedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedBy' => fn(ParseNode $n) => $o->setLastModifiedBy($n->getObjectValue([IdentitySet::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'ownerAppIds' => fn(ParseNode $n) => $o->setOwnerAppIds($n->getCollectionOfPrimitiveValues()),
            'planner' => fn(ParseNode $n) => $o->setPlanner($n->getObjectValue([BusinessScenarioPlanner::class, 'createFromDiscriminatorValue'])),
            'uniqueName' => fn(ParseNode $n) => $o->setUniqueName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the lastModifiedBy property value. The lastModifiedBy property
     * @return IdentitySet|null
    */
    public function getLastModifiedBy(): ?IdentitySet {
        return $this->getBackingStore()->get('lastModifiedBy');
    }

    /**
     * Gets the lastModifiedDateTime property value. The lastModifiedDateTime property
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastModifiedDateTime');
    }

    /**
     * Gets the ownerAppIds property value. The ownerAppIds property
     * @return array<string>|null
    */
    public function getOwnerAppIds(): ?array {
        return $this->getBackingStore()->get('ownerAppIds');
    }

    /**
     * Gets the planner property value. The planner property
     * @return BusinessScenarioPlanner|null
    */
    public function getPlanner(): ?BusinessScenarioPlanner {
        return $this->getBackingStore()->get('planner');
    }

    /**
     * Gets the uniqueName property value. The uniqueName property
     * @return string|null
    */
    public function getUniqueName(): ?string {
        return $this->getBackingStore()->get('uniqueName');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('createdBy', $this->getCreatedBy());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('lastModifiedBy', $this->getLastModifiedBy());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeCollectionOfPrimitiveValues('ownerAppIds', $this->getOwnerAppIds());
        $writer->writeObjectValue('planner', $this->getPlanner());
        $writer->writeStringValue('uniqueName', $this->getUniqueName());
    }

    /**
     * Sets the createdBy property value. The createdBy property
     *  @param IdentitySet|null $value Value to set for the createdBy property.
    */
    public function setCreatedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('createdBy', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastModifiedBy property value. The lastModifiedBy property
     *  @param IdentitySet|null $value Value to set for the lastModifiedBy property.
    */
    public function setLastModifiedBy(?IdentitySet $value): void {
        $this->getBackingStore()->set('lastModifiedBy', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The lastModifiedDateTime property
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the ownerAppIds property value. The ownerAppIds property
     *  @param array<string>|null $value Value to set for the ownerAppIds property.
    */
    public function setOwnerAppIds(?array $value): void {
        $this->getBackingStore()->set('ownerAppIds', $value);
    }

    /**
     * Sets the planner property value. The planner property
     *  @param BusinessScenarioPlanner|null $value Value to set for the planner property.
    */
    public function setPlanner(?BusinessScenarioPlanner $value): void {
        $this->getBackingStore()->set('planner', $value);
    }

    /**
     * Sets the uniqueName property value. The uniqueName property
     *  @param string|null $value Value to set for the uniqueName property.
    */
    public function setUniqueName(?string $value): void {
        $this->getBackingStore()->set('uniqueName', $value);
    }

}
