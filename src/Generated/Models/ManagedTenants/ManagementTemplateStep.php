<?php

namespace Microsoft\Graph\Beta\Generated\Models\ManagedTenants;

use DateTime;
use Microsoft\Graph\Beta\Generated\Models\ActionUrl;
use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class ManagementTemplateStep extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
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
        $val = $this->getBackingStore()->get('acceptedVersion');
        if (is_null($val) || $val instanceof ManagementTemplateStepVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'acceptedVersion'");
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
     * Gets the createdByUserId property value. The createdByUserId property
     * @return string|null
    */
    public function getCreatedByUserId(): ?string {
        $val = $this->getBackingStore()->get('createdByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdByUserId'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the description property value. The description property
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
     * Gets the displayName property value. The displayName property
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
        $val = $this->getBackingStore()->get('lastActionByUserId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionByUserId'");
    }

    /**
     * Gets the lastActionDateTime property value. The lastActionDateTime property
     * @return DateTime|null
    */
    public function getLastActionDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastActionDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastActionDateTime'");
    }

    /**
     * Gets the managementTemplate property value. The managementTemplate property
     * @return ManagementTemplate|null
    */
    public function getManagementTemplate(): ?ManagementTemplate {
        $val = $this->getBackingStore()->get('managementTemplate');
        if (is_null($val) || $val instanceof ManagementTemplate) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'managementTemplate'");
    }

    /**
     * Gets the portalLink property value. The portalLink property
     * @return ActionUrl|null
    */
    public function getPortalLink(): ?ActionUrl {
        $val = $this->getBackingStore()->get('portalLink');
        if (is_null($val) || $val instanceof ActionUrl) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'portalLink'");
    }

    /**
     * Gets the priority property value. The priority property
     * @return int|null
    */
    public function getPriority(): ?int {
        $val = $this->getBackingStore()->get('priority');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'priority'");
    }

    /**
     * Gets the versions property value. The versions property
     * @return array<ManagementTemplateStepVersion>|null
    */
    public function getVersions(): ?array {
        $val = $this->getBackingStore()->get('versions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, ManagementTemplateStepVersion::class);
            /** @var array<ManagementTemplateStepVersion>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'versions'");
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
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('portalLink', $this->getPortalLink());
        $writer->writeIntegerValue('priority', $this->getPriority());
        $writer->writeCollectionOfObjectValues('versions', $this->getVersions());
    }

    /**
     * Sets the acceptedVersion property value. The acceptedVersion property
     * @param ManagementTemplateStepVersion|null $value Value to set for the acceptedVersion property.
    */
    public function setAcceptedVersion(?ManagementTemplateStepVersion $value): void {
        $this->getBackingStore()->set('acceptedVersion', $value);
    }

    /**
     * Sets the category property value. The category property
     * @param ManagementCategory|null $value Value to set for the category property.
    */
    public function setCategory(?ManagementCategory $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the createdByUserId property value. The createdByUserId property
     * @param string|null $value Value to set for the createdByUserId property.
    */
    public function setCreatedByUserId(?string $value): void {
        $this->getBackingStore()->set('createdByUserId', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the description property value. The description property
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The displayName property
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the lastActionByUserId property value. The lastActionByUserId property
     * @param string|null $value Value to set for the lastActionByUserId property.
    */
    public function setLastActionByUserId(?string $value): void {
        $this->getBackingStore()->set('lastActionByUserId', $value);
    }

    /**
     * Sets the lastActionDateTime property value. The lastActionDateTime property
     * @param DateTime|null $value Value to set for the lastActionDateTime property.
    */
    public function setLastActionDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastActionDateTime', $value);
    }

    /**
     * Sets the managementTemplate property value. The managementTemplate property
     * @param ManagementTemplate|null $value Value to set for the managementTemplate property.
    */
    public function setManagementTemplate(?ManagementTemplate $value): void {
        $this->getBackingStore()->set('managementTemplate', $value);
    }

    /**
     * Sets the portalLink property value. The portalLink property
     * @param ActionUrl|null $value Value to set for the portalLink property.
    */
    public function setPortalLink(?ActionUrl $value): void {
        $this->getBackingStore()->set('portalLink', $value);
    }

    /**
     * Sets the priority property value. The priority property
     * @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value): void {
        $this->getBackingStore()->set('priority', $value);
    }

    /**
     * Sets the versions property value. The versions property
     * @param array<ManagementTemplateStepVersion>|null $value Value to set for the versions property.
    */
    public function setVersions(?array $value): void {
        $this->getBackingStore()->set('versions', $value);
    }

}
