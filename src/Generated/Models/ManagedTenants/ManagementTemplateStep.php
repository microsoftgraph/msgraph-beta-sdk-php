<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\ActionUrl;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagementTemplateStep extends Entity implements Parsable 
{
    /**
     * Instantiates a new managementTemplateStep and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagementTemplateStep
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagementTemplateStep {
        return new ManagementTemplateStep();
    }

    /**
     * Gets the acceptedVersion property value. The acceptedVersion property
     * @return ManagementTemplateStepVersion|null
    */
    public function getAcceptedVersion(): ?ManagementTemplateStepVersion {
        return $this->getBackingStore()->get('acceptedVersion');
    }

    /**
     * Gets the category property value. The category property
     * @return ManagementCategory|null
    */
    public function getCategory(): ?ManagementCategory {
        return $this->getBackingStore()->get('category');
    }

    /**
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        return $this->getBackingStore()->get('createdByUserId');
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->getBackingStore()->get('createdDateTime');
    }

    /**
     * Gets the description property value. The description property
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->getBackingStore()->get('description');
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
            'acceptedVersion' => fn(ParseNode $n) => $o->setAcceptedVersion($n->getObjectValue([ManagementTemplateStepVersion::class, 'createFromDiscriminatorValue'])),
            'category' => fn(ParseNode $n) => $o->setCategory($n->getEnumValue(ManagementCategory::class)),
            'createdByUserId' => fn(ParseNode $n) => $o->setCreatedByUserId($n->getStringValue()),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastActionByUserId' => fn(ParseNode $n) => $o->setLastActionByUserId($n->getStringValue()),
            'lastActionDateTime' => fn(ParseNode $n) => $o->setLastActionDateTime($n->getDateTimeValue()),
            'managementTemplate' => fn(ParseNode $n) => $o->setManagementTemplate($n->getObjectValue([ManagementTemplate::class, 'createFromDiscriminatorValue'])),
            'portalLink' => fn(ParseNode $n) => $o->setPortalLink($n->getObjectValue([ActionUrl::class, 'createFromDiscriminatorValue'])),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
            'versions' => fn(ParseNode $n) => $o->setVersions($n->getCollectionOfObjectValues([ManagementTemplateStepVersion::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastActionByUserId property value. The lastActionByUserId property
     * @return string|null
    */
    public function getLastActionByUserId(): ?string {
        return $this->getBackingStore()->get('lastActionByUserId');
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        return $this->getBackingStore()->get('lastActionDateTime');
    }

    /**
     * Gets the managementTemplate property value. The managementTemplate property
     * @return ManagementTemplate|null
    */
    public function getManagementTemplate(): ?ManagementTemplate {
        return $this->getBackingStore()->get('managementTemplate');
    }

    /**
     * Gets the portalLink property value. The portalLink property
     * @return ActionUrl|null
    */
    public function getPortalLink(): ?ActionUrl {
        return $this->getBackingStore()->get('portalLink');
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->getBackingStore()->get('priority');
    }

    /**
     * Gets the versions property value. The versions property
     * @return array<ManagementTemplateStepVersion>|null
    */
    public function getVersions(): ?array {
        return $this->getBackingStore()->get('versions');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('acceptedVersion', $this->getAcceptedVersion());
        $writer->writeEnumValue('category', $this->getCategory());
        $writer->writeStringValue('createdByUserId', $this->getCreatedByUserId());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeStringValue('lastActionByUserId', $this->getLastActionByUserId());
        $writer->writeDateTimeValue('lastActionDateTime', $this->getLastActionDateTime());
        $writer->writeObjectValue('managementTemplate', $this->getManagementTemplate());
        $writer->writeObjectValue('portalLink', $this->getPortalLink());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeCollectionOfObjectValues('versions', $this->getVersions());
    }

    /**
     * Sets the acceptedVersion property value. The acceptedVersion property
     *  @param ManagementTemplateStepVersion|null $value Value to set for the acceptedVersion property.
    */
    public function setAcceptedVersion(?ManagementTemplateStepVersion $value): void {
        $this->getBackingStore()->set('acceptedVersion', $value);
    }

    /**
     * Sets the category property value. The category property
     *  @param ManagementCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ManagementCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     *  @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->getBackingStore()->set('createdByUserId', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description property
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     *  @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value): void {
        $this->getBackingStore()->set('lastActionByUserId', $value);
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     *  @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the managementTemplate property value. The managementTemplate property
     *  @param ManagementTemplate|null $value Value to set for the managementTemplate property.
    */
    public function setManagementTemplate(?ManagementTemplate $value): void {
        $this->getBackingStore()->set('managementTemplate', $value);
    }

    /**
     * Sets the portalLink property value. The portalLink property
     *  @param ActionUrl|null $value Value to set for the portalLink property.
    */
    public function setPortalLink(?ActionUrl $value): void {
        $this->getBackingStore()->set('portalLink', $value);
    }

    /**
     * Sets the priority property value. The priority property
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the versions property value. The versions property
     *  @param array<ManagementTemplateStepVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value): void {
        $this->getBackingStore()->set('versions', $value);
    }

}
